<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo;
use App\Models\CardInfo;
use Illuminate\Http\Request;
use Stripe\Charge;
// use Stripe\Stripe;
use Stripe;

class FrontController extends Controller
{
    public function storeBasicData(Request $request)
    {
        $validatedData = $request->validate([
            'ReplyLanguageId' => 'required',
            'GivenName' => 'required',
            'EmailAddress' => 'required|email',
            'CountryId' => 'required',
            'IsYourEnquiry' => 'required',
            'Enquiry' => 'required',
            'BillingAddress1' => 'required',
        ]);

        $formData = new BasicInfo();
        $formData->reply_language_id = $request->ReplyLanguageId;
        $formData->given_name = $request->GivenName;
        $formData->family_name = $request->FamilyName;
        $formData->email_address = $request->EmailAddress;
        $formData->country_id = $request->CountryId;
        $formData->is_your_enquiry = $request->IsYourEnquiry;
        $formData->enquiry = $request->Enquiry;
        $formData->billing_address_1 = $request->BillingAddress1;
        $formData->billing_address_2 = $request->BillingAddress2;
        $formData->billing_suburb = $request->BillingCity;
        $formData->billing_state = $request->BillingStateId;
        $formData->billing_postcode = $request->BillingPostCode;
        $formData->billing_country_id = $request->BillingCountryId;
        $formData->save();

        return redirect()->route('payment.amount', ['user_id' => $formData->id])->with('success', 'Personal details have been added successfully.');
        // return redirect()->route('success');
    }

    public function paymentAmount(Request $request)
    {
        if (isset($request->user_id)) {
            return view('payment-amount', ['user_id' => $request->user_id]);
        }
        return redirect()->url('/details/confirm-details')->with('error', 'Something went wrong.');
    }

    public function paymentDetails(Request $request)
    {
        return view('payment-details', ['user_id' => $request->user_id]);
    }


    public function storePaymentInfo(Request $request)
    {
        $validatedData = $request->validate([
            'card_holder_name' => [
                'required', 'string', 'max:50'
            ],
            'card_number' => ['required', 'string', 'max:16', function ($attribute, $value, $fail) {
                $value = str_replace(' ', '', $value); // remove any spaces from the card number
                if (!is_numeric($value)) {
                    return $fail("The $attribute field must only contain digits.");
                }
                if (strlen($value) < 13 || strlen($value) > 16) {
                    return $fail("The $attribute field must be between 13 and 16 digits.");
                }
                $firstDigit = substr($value, 0, 1);
                if ($firstDigit == 4 || $firstDigit == 5 || $firstDigit == 6) {
                    return; // the card number is valid
                }
                return $fail("The $attribute field is not a valid credit card number.");
            }],
            'expiry_month' => ['required', 'string', 'max:2', 'regex:/^(0[1-9]|1[0-2])$/'],
            'expiry_year' => ['required', 'string', 'max:2', 'regex:/^([0-9]{2})$/'],
            'cvc' => ['required', 'string', 'max:4', 'regex:/^[0-9]{3,4}$/'],
        ]);
        #save card info
        CardInfo::create($validatedData);

        $customer = BasicInfo::find($request->user_id);
        // return get_state($customer->billing_state);
        #Start payment process
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $st_customer = Stripe\Customer::create(array(
            "address" => [
                "line1" => $customer->given_name,
                "postal_code" => $customer->billing_postcode,
                "city" => " ",
                "state" => get_state($customer->billing_state),
                "country" => get_country($customer->country_id),
            ],
            "email" => $customer->email_address,
            "name" => $customer->family_name,
            "source" => $request->stripeToken
        ));

        $amount = 274; // 274 pence
        Stripe\Charge::create([
            "amount" => $amount,
            "currency" => "gbp",
            "customer" => $st_customer->id,
            "description" => "Payment for email enquery.",
            "shipping" => [
                "name" => $customer->given_name,
                "address" => [
                    "line1" => $customer->billing_address_1,
                    "postal_code" => $customer->billing_postcode,
                    "city" => " ",
                    "state" => get_state($customer->billing_state),
                    "country" => get_country($customer->billing_country_id),
                ],
            ]
        ]);

        #Update payment status
        $customer->payment_status = 1;
        $customer->save();

        return redirect('/')->with(
            'success',
            'Payment successful.'
        );
    }
}
