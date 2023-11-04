<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Payment Details - UKVI</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}} " />
        <link rel="stylesheet" href="{{asset('assets/site.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/all.css')}}" />
    </head>
<body>
<div class="wrapper">

    <div class="header">
        <div class="container divLogo">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 0 !important">
                    <img src="{{asset('assets/UKVI Logo.jpg')}}" alt="companyLogo" class="imgLogo col-sm-2 float-left" />
                </div>
            </div>
        </div>
    </div>

    <div class="container body-container">
        <div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>

        <div class="stepwizard clearfix">
            <div class="stepwizard-step">
                <a data-num="1" class="active" id="ConfirmationDetails-step" href="{{url('/details/confirm-details')}}">Confirm Details<span class="arrow"></span></a>
            </div>
            <div class="stepwizard-step">
                <a data-num="2" class="" id="PaymentAmount-step" href="{{route('payment.amount')}}">Payment Amount<span class="arrow"></span></a>
            </div>
            <div class="stepwizard-step">
                <a data-num="3" class="" id="PaymentDetails-step" href="{{route('payment.details')}}">Payment Details<span class="arrow"></span></a>
            </div>
            <div class="stepwizard-step ">
                <a data-num="4" id="PaymentConfirmation-step" href="/Payment/Confirmation">Confirmation</a>
            </div>
        </div>

    <form action="{{route('payment.submit')}}" id="payment-form" method="POST"> 
        @csrf
        <div id="stripeToken"></div>
        <input type="hidden" name="amount" value="2.74" />
        <input type="hidden" name="user_id" value="{{$user_id}}" />
        <div class="text-center">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-left fontHelveticaHeader">Payment Details</h1>
                </div>
                <div class="col-md-6">
                    <div id="cards"></div>
                </div>
            </div>

            <br />
            <br />

            <div class="text-left fontHelveticaParagraph">
                <p>We aim to respond to your email in five working days.</p>
                <br />
                <p>If you do not select 'submit' your enquiry will not be completed and you will not be charged. For more contact</p>
                <p>
                    options please visit
                    <a class="text-decoration-underline" style="color: #0055B7;" href="https://www.gov.uk/contact-ukvi-inside-outside-uk">https://www.gov.uk/contact-ukvi-inside-outside-uk</a>
                </p>

                <br />
                <br />

                <p>
                    Please enter details below.
                </p>

            </div>
        </div>
        <br />
        <div class="fontHelveticaParagraph">
            <p>
                <label class="required" for="CardHolderName">Card Holder Name</label><br />
                <input class="form-control text-box single-line" data-val="true" data-val-maxlength="The field Card Holder Name must be a string or array type with a maximum length of &#x27;50&#x27;." data-val-maxlength-max="50" data-val-regex="Please enter a card holder" data-val-regex-pattern="^([A-Za-z]&#x2B;[\s-&#x27;&#xE2;&#x20AC;&#x2DC;&#xE2;&#x20AC;&#x2122;&#xC2;&#xB4;&#xE2;&#x20AC;&#x153;&#xE2;&#x20AC;&#x9D;])*[A-Za-z]*$" data-val-required="The Card Holder Name field is required." id="CardHolderName" maxlength="50" name="card_holder_name" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="CardHolderName" data-valmsg-replace="true"></span>
                @error('card_holder_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label class="required" for="CardNumber">Card Number</label><br />
                <input class="form-control text-box single-line" data-val="true" data-val-maxlength="The field Card Number must be a string or array type with a maximum length of &#x27;16&#x27;." data-val-maxlength-max="16" data-val-regex="Please enter a valid card number" data-val-regex-pattern="^[0-9]{13,16}$" data-val-required="The Card Number field is required." id="CardNumber" maxlength="16" name="card_number" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="CardNumber" data-valmsg-replace="true"></span>
                @error('card_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-4 col-sm-3 col-6 float-left" style="padding-left: 0 !important">
                        <label for="ExpiryMonth">Expiry Date</label>
                        <br />
                        <input class="text-box single-line" data-val="true" data-val-maxlength="The field ExpiryMonth must be a string or array type with a maximum length of &#x27;2&#x27;." data-val-maxlength-max="2" data-val-regex="Please enter a valid expiry month" data-val-regex-pattern="^(0[1-9]|1[0-2])$" data-val-required="The Expiry Month is required" id="ExpiryMonth" maxlength="2" name="expiry_month" style="width:30px;" type="text" value="" />
                        @error('expiry_month')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="sep">/</span>
                        <input class="text-box single-line" data-val="true" data-val-maxlength="The field ExpiryYear must be a string or array type with a maximum length of &#x27;2&#x27;." data-val-maxlength-max="2" data-val-regex="Please enter a valid expiry year" data-val-regex-pattern="^([0-9]{2})$" data-val-required="The Expiry Year is required" id="ExpiryYear" maxlength="2" name="expiry_year" style="width:30px;" type="text" value="" />
                        @error('expiry_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-3 col-6 float-left">
                        <label class="required" for="Cvc" style="text-transform:uppercase">Cvc</label><br />
                        <input class="text-box single-line" data-val="true" data-val-maxlength="The field Cvc must be a string or array type with a maximum length of &#x27;4&#x27;." data-val-maxlength-max="4" data-val-regex="CVC must be either 3 or 4 digits." data-val-regex-pattern="^[0-9]{3,4}$" data-val-required="The Cvc field is required." id="Cvc" maxlength="4" name="cvc" style="width:50px;" type="text" value="" />
                        <i class="fa fa-question-circle" title="Please enter your card verification number. This number can usually be found on the back of your card and is the last three digits next to the signature." aria-hidden="true"></i>
                        <span class="field-validation-valid" data-valmsg-for="Cvc" data-valmsg-replace="true"></span>
                        @error('cvc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <br />
            <br />
            <p>
                <label for="Email">For an email payment receipt please provide an email address (Optional)</label><br />
                <input class="form-control text-box single-line" data-val="true" data-val-regex="Please enter a valid email" data-val-regex-pattern="^\w&#x2B;([-&#x2B;.&#x27;]\w&#x2B;)*@\w&#x2B;([-.]\w&#x2B;)*\.\w&#x2B;([-.]\w&#x2B;)*$" id="Email" name="Email" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </p>
        </div>
        <div id="securePaymentCardFlow">
        </div>

        <div id="payDetails" class="order-confirmation">
            <div class="padding">
                <div class="top clearfix row">
                    <div class="col-md-6 pull-left">CONFIRMATION</div>
                    <div class="col-md-6 pull-right">This is a secure SSL protected payment</div>
                </div>
                <div class="line clearfix row">
                    <div class="col-md-6 col-6 pull-left">Amount</div>
                    <div class="col-md-6 col-6 pull-right" style="text-align: end;font-size: 26px;font-weight: 600"><span id="amountWs" class="gbp"></span>2.74</div>
                </div>

            </div>
            <div id="payDetailsSubmitBtn">
                <button class="btn btn-success" id="submitbtn">Pay <span class="gbp"></span>2.74</button>
            </div>
        </div>
    </form>




<input name="__RequestVerificationToken" type="hidden" value="CfDJ8M_95A44e0pOvUqgfE4vO7aKhzt8iPw4KN3bkHgmVxsBOiMjiDmq0iUqKg81a10rBY_Ilpk3l-OZkrpoCMI8H5VWtCpoRRPlOnmooLNZc_h4DNQeED5ft8m3qeAjUrEfFVYCczfHD6BJKhP-MHQ3lDQ" /></form>
{{-- <div id="waitingPageOnSubmit" style="display:none">

	<div class="body-head text-center" id="processPaymentWaiting">
		<h1 style="font-size: 1.5rem;" class="title">
			YOUR TRANSACTION IS BEING PROCESSED.
		</h1>
		<p class="confirm">
			Please don't refresh the page!
		</p>
	</div>

	<div class="body-head text-center" id="backButtonWaiting">
		<h2 style="font-size: 1.5rem;" class="title">
			PLEASE WAIT...
		</h2>
	</div>

	<div class="col-sm-12 text-center">
		<img id="waitingPageSpinner" src="{{asset('assets/3.gif')}}" alt="Spinner" title="Waiting Spinner" />
	</div>

	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
</div> --}}

<script src="{{asset('assets/jquery.min.js')}}"></script>
{{-- <script>
    $(document).ready(function () {
        var isLoading = false;

        document.getElementById('submitbtn').addEventListener('click', function (event) {

			if ($('#PaymentDetailsForm').validate().checkForm()) {
                $('#PaymentDetailsForm').hide();
                $('#waitingPageOnSubmit').show();
            }
			else {
                event.preventDefault();
                $('#PaymentDetailsForm').submit(); //show validation messages
			};
        });

        $("#CardNumber").blur(function () {
            var url = '/Payment/CardValidation';

            var objToSend = {
                cardNumber: $("#CardNumber").val()
            };

            $("#submitbtn").prop("disabled", true);

            if (localCache.countOfRequests >= 200)
                return;

            if ($("#CardNumber").val().length >= 13 && $("#CardNumber").val().length <= 16 && !isLoading) {
                isLoading = true;
                $.ajax({
                    url: url,
                    type: "POST",
                    data: objToSend,
                    cache: true,
                    beforeSend: function () {
                        if (localCache.exist(url)) {
                            var param = localCache.getParam(url);

                            if (param.cardNumber === objToSend.cardNumber) {
                                previousSuccessfulData(localCache.get(url));
                                return false;
                            }
                            return true;
                        }
                        return true;
                    },
                    complete: function (jqXHR) {
                        localCache.set(url, jqXHR, objToSend, previousSuccessfulData);
                        localCache.countOfRequests++;
                    }
                });

                function previousSuccessfulData(data) {
                    $("#CardNumber").removeClass("loading");

                    if (data.responseJSON.isValid) {
                        $("#submitbtn").prop("disabled", false);
                        $("#CardNumber").addClass("valid");
                    }
                    else {
                        $("#submitbtn").prop("disabled", true);
                        $("#CardNumber").addClass("input-validation-error");
                        $("#CardNumber").attr("aria-invalid", "true");

                        if (data.responseJSON.canAddAttr) {
                            $(".card-number .field-validation-valid").removeClass("field-validation-valid");
                            $(".card-number span:not(.question)").addClass("field-validation-error");
                            $(".card-number .field-validation-error").html("<span id='CardNumber-error' class=''>" + data.responseJSON.message + "</span>");
                        }
                    }

                    isLoading = false;
                }
            }
        });
    })

    var localCache = {
        data: {},
        dataParam: {},
        countOfRequests: 0,
        remove: function (url) {
            delete localCache.data[url];
            delete localCache.dataParam[url];
        },
        exist: function (url) {
            return localCache.data.hasOwnProperty(url) &&
                localCache.data[url] !== null &&
                localCache.dataParam[url] !== null;
        },
        get: function (url) {
            return localCache.data[url];
        },
        getParam: function (url) {
            return localCache.dataParam[url];
        },
        set: function (url, cachedData, objToSend, callback) {
            localCache.remove(url);
            localCache.data[url] = cachedData;
            localCache.dataParam[url] = objToSend;

            if ($.isFunction(callback)) callback(cachedData);
        }
    };

    $(document).on('submit', 'form', function () {
        var buttons = $('#submitbtn');

        if ($(this).valid()) {
            buttons.prop('disabled', true);
        } else {
            buttons.prop('disabled', false);
        }
    });
</script> --}}
    </div>

    <footer>
        <div class="footerPosition">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-sm">
                        <div class="container">
                            <div class=" d-sm-inline-flex flex-sm-row-reverse" style="margin-left: -25px">
                                <ul class="navbar-nav flex-grow-1 text-decoration-underline">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="https://www.gov.uk/help/privacy-notice">Privacy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="https://www.gov.uk/help/cookies">Cookies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="https://www.gov.uk/help/accessibility-statement">Accessibility Statements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="https://www.gov.uk/help/terms-conditions">Terms and Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-sm-3 footerProvider">
                        <h2>Powered by</h2>
                        <img src="{{asset('assets/keyivr.png')}}" alt="powerLogo" /></div>
                </div>
            </div>
        </div>
    </footer>
</div>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    $(document).ready(function () {
        $('#payDetailsSubmitBtn').on('click', function(){
            // var stripe = Stripe('pk_test_51L2tMZKd4S1wsoet4Echxm69BYMGlBvFOSFp9qHPqIDhKBBbyKu9Evej4i92k44UWPtjoHZB45fcC3MrEI05uYs100bXIPgkEK');
            
            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();
            });


            Stripe.setPublishableKey('pk_test_51L2tMZKd4S1wsoet4Echxm69BYMGlBvFOSFp9qHPqIDhKBBbyKu9Evej4i92k44UWPtjoHZB45fcC3MrEI05uYs100bXIPgkEK');
            Stripe.createToken({
                number: $('#CardNumber').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('#ExpiryMonth').val(),
                exp_year: $('#ExpiryYear').val()
            }, stripeResponseHandler);

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    
                    $('#stripeToken').append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    
                    setTimeout(function() {
                        document.getElementById('payment-form').submit();
                    }, 500);
                }
            }
        });
    });

</script>

<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/all.js')}}"></script>
<script src="{{asset('assets/StepWizardSelection.js')}}"></script>
<script src="{{asset('assets/script.js')}}"></script>
<script src="{{asset('assets/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/jquery.validate.unobtrusive.min.js')}}"></script>

</body>
</html>