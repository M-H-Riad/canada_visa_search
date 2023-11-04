<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('reply_language_id');
            $table->string('given_name');
            $table->string('family_name');
            $table->string('email_address');
            $table->unsignedInteger('country_id');
            $table->boolean('is_your_enquiry');

            $table->string('application_reference_number')->nullable(); #ApplicationReferenceNumber
            $table->string('is_you_the_applicant')->nullable(); #IsYouTheApplicant
            $table->string('type_of_visa')->nullable(); #TypeOfVisa
            $table->string('nationality_id')->nullable(); #NationalityId
            $table->string('date_of_birth')->nullable(); #DateOfBirth
            $table->string('date_of_application')->nullable(); #DateOfApplication
            $table->string('passport_number')->nullable(); #PassportNumber
            $table->string('health_surcharge_reference')->nullable(); #HealthSurchargeReference
            $table->string('email_address_application')->nullable(); #EmailAddressApplication

            // $table->text('enquiry');
            // $table->string('billing_address_1');
            // $table->string('billing_address_2')->nullable();
            // $table->string('billing_suburb');
            // $table->string('billing_state');
            // $table->string('billing_postcode');
            // $table->unsignedInteger('billing_country_id');
            // $table->integer('payment_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic_infos');
    }
}
