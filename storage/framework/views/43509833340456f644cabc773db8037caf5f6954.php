<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Confirm Details - UKVI</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap.min.css')); ?> " />
        <link rel="stylesheet" href="<?php echo e(asset('assets/site.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/all.css')); ?>" />
    </head>
<body>
<div class="wrapper">

    <div class="header">
        <div class="container divLogo">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 0 !important">
                    <img src="<?php echo e(asset('assets/UKVI Logo.jpg')); ?>" alt="companyLogo" class="imgLogo col-sm-2 float-left" />
                </div>
            </div>
        </div>
    </div>

    <div class="container body-container">
        <div>
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('error')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="stepwizard clearfix">
            <div class="stepwizard-step">
                <a data-num="1" class="active" id="ConfirmationDetails-step" href="/Details/ConfirmDetails">Confirm Details<span class="arrow"></span></a>
            </div>
            <div class="stepwizard-step">
                <a data-num="2" class="" id="PaymentAmount-step" href="/Payment/Amount">Payment Amount<span class="arrow"></span></a>
            </div>
            <div class="stepwizard-step">
                <a data-num="3" class="" id="PaymentDetails-step" href="/Payment/ProcessPayment">Payment Details<span class="arrow"></span></a>
            </div>
            <div class="stepwizard-step ">
                <a data-num="4" id="PaymentConfirmation-step" href="/Payment/Confirmation">Confirmation</a>
            </div>
        </div>

        

<div class="text-center">
    <h1 class="text-left fontHelveticaHeader">Contact UK Visas and Immigration from</h1>
    <h1 class="text-left fontHelveticaHeader">outside the UK</h1>

    <br />
    <br />

    <div class="text-left fontHelveticaParagraph">
        <p>We aim to respond to your email in five working days.</p>
        <br />
        <p>If you do not select 'submit' your enquiry will not be completed and you will not be charged. For more contact</p>
        <p>options please visit 
            <a class="text-decoration-underline" style="color: #0055B7;" href="https://www.gov.uk/contact-ukvi-inside-outside-uk">https://www.gov.uk/contact-ukvi-inside-outside-uk</a>
        </p>
        <br />
    </div>

    <br />
</div>

<form action="<?php echo e(route('basic.data.submit')); ?>" id="ConfirmationForm" method="POST"><div class="fontHelveticaParagraph">
    <label class="required" for="ReplyLanguageId">What language do you want to use to get a reply by email?</label>
    <?php echo csrf_field(); ?>
    <br />

    <select class="form-control" id="ReplyLanguageId" name="ReplyLanguageId">
        <option value="276">English</option>
        <option value="277">Arabic</option>
        <option value="278">Cantonese</option>
        <option value="279">French</option>
        <option value="280">Hindi</option>
        <option value="281">Mandarin</option>
        <option value="282">Russian</option>
        <option value="283">Spanish</option>
    </select>
    <span class="field-validation-valid" data-valmsg-for="ReplyLanguages" data-valmsg-replace="true"></span>

    <br />
    <hr />
    <br />

    <p>Please confirm your details below and continue to the next step to make a payment.</p>
    <br />
    <p>
        <label class="required" for="GivenName">Given Name</label><br />
        <input class="form-control text-box single-line" data-val="true" data-val-required="The Given Name field is required." id="GivenName" name="GivenName" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="GivenName" data-valmsg-replace="true"></span>
    </p>
    <p>
        <label for="FamilyName">Family Name</label><br />
        <input class="form-control text-box single-line" id="FamilyName" name="FamilyName" type="text" value="" />
    </p>
    <p>
        <label class="required" for="EmailAddress">Email Address</label><br />
        <input class="form-control text-box single-line" data-val="true" data-val-regex="Please enter a valid email" data-val-regex-pattern="^\w&#x2B;([-&#x2B;.&#x27;]\w&#x2B;)*@\w&#x2B;([-.]\w&#x2B;)*\.\w&#x2B;([-.]\w&#x2B;)*$" data-val-required="The Email Address field is required." id="EmailAddress" name="EmailAddress" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="EmailAddress" data-valmsg-replace="true"></span>
    </p>
    <p>
        <label class="required" for="CountryId">Place where you are making (or planning to make) an application</label><br />
        <select class="form-control" id="CountryId" name="CountryId">
            <option value="1">Abidjan</option>
            <option value="2">Abu Dhabi</option>
            <option value="3">Abuja</option>
            <option value="4">Accra</option>
            <option value="5">Adana</option>
            <option value="6">Addis Ababa</option>
            <option value="7">Adelaide</option>
            <option value="8">Ahmedabad</option>
            <option value="9">Al Khobar</option>
            <option value="10">Alexandria</option>
            <option value="11">Algiers</option>
            <option value="12">Almaty</option>
            <option value="13">Amman</option>
            <option value="14">Amsterdam</option>
            <option value="15">Ankara</option>
            <option value="16">Antalya</option>
            <option value="17">Antananarivo</option>
            <option value="18">ASC Locations</option>
            <option value="19">Ashgabat</option>
            <option value="20">Asuncion</option>
            <option value="21">Athens</option>
            <option value="22">Atlanta</option>
            <option value="23">Atyrau</option>
            <option value="24">Auckland</option>
            <option value="25">Auckland PAC</option>
            <option value="26">Baghdad</option>
            <option value="27">Baku</option>
            <option value="28">Bali</option>
            <option value="29">Bandar Seri Begawan</option>
            <option value="30">Bangalore</option>
            <option value="31">Bangkok</option>
            <option value="32">Bangkok Crystal Design Centre</option>
            <option value="33">Bangkok Thanya Park</option>
            <option value="34">Banjul</option>
            <option value="35">Barcelona</option>
            <option value="36">Barranquilla</option>
            <option value="37">Basra</option>
            <option value="38">Beijing</option>
            <option value="39">Beirut</option>
            <option value="40">Belgrade</option>
            <option value="41">Berlin</option>
            <option value="42">Bishkek</option>
            <option value="43">Bogota</option>
            <option value="44">Boston</option>
            <option value="45">Brasilia</option>
            <option value="46">Bridgetown</option>
            <option value="47">Brisbane</option>
            <option value="48">Brussels</option>
            <option value="49">Bucharest</option>
            <option value="50">Budapest</option>
            <option value="51">Buenos Aires</option>
            <option value="52">Bursa</option>
            <option value="53">Cairo</option>
            <option value="54">Cali</option>
            <option value="55">Canberra</option>
            <option value="56">Cape Town</option>
            <option value="57">Caracas</option>
            <option value="58">Casablanca</option>
            <option value="59">Castries</option>
            <option value="60">Cebu</option>
            <option value="61">Chandigarh</option>
            <option value="62">Changsha</option>
            <option value="63">Chengdu</option>
            <option value="64">Chennai</option>
            <option value="65">Chiang Mai</option>
            <option value="66">Chicago</option>
            <option value="67">Chisinau</option>
            <option value="68">Chongqing</option>
            <option value="69">Christchurch</option>
            <option value="70">Cochin</option>
            <option value="71">Colombo</option>
            <option value="72">Copenhagen</option>
            <option value="73">Da Nang</option>
            <option value="74">Dakar</option>
            <option value="75">Damascus</option>
            <option value="76">Dar-es-Salaam</option>
            <option value="77">Dhaka</option>
            <option value="78">Doha</option>
            <option value="79">Dubai</option>
            <option value="80">Dublin</option>
            <option value="81">Durban</option>
            <option value="82">Dushanbe</option>
            <option value="83">Dusseldorf</option>
            <option value="84">Edmonton</option>
            <option value="85">Ekaterinburg</option>
            <option value="86">Erbil</option>
            <option value="87">Freetown</option>
            <option value="88">Fuzhou</option>
            <option value="89">Gaborone</option>
            <option value="90">Gaza City</option>
            <option value="91">Gaziantep</option>
            <option value="92">Geneva</option>
            <option value="93">George Town</option>
            <option value="94">Georgetown</option>
            <option value="95">Gibraltar</option>
            <option value="96">Goa</option>
            <option value="97">Guadalajara</option>
            <option value="98">Guangzhou</option>
            <option value="99">Guatemala City</option>
            <option value="100">Guayaquil</option>
            <option value="101">Gurgaon</option>
            <option value="102">Halifax</option>
            <option value="103">Hamilton</option>
            <option value="104">Hangzhou</option>
            <option value="105">Hanoi</option>
            <option value="106">Harare</option>
            <option value="107">Havana</option>
            <option value="108">Helsinki</option>
            <option value="109">Ho Chi Minh City</option>
            <option value="110">Hobart</option>
            <option value="111">Hong Kong</option>
            <option value="112">Houston</option>
            <option value="113">Hyderabad</option>
            <option value="114">Islamabad</option>
            <option value="115">Istanbul</option>
            <option value="116">Izmir</option>
            <option value="117">Jaipur</option>
            <option value="118">Jakarta</option>
            <option value="119">Jalandhar</option>
            <option value="120">Jeddah</option>
            <option value="121">Jerusalem</option>
            <option value="122">Jinan</option>
            <option value="123">Johannesburg</option>
            <option value="124">Kabul</option>
            <option value="125">Kampala</option>
            <option value="126">Kaohsiung</option>
            <option value="127">Karachi</option>
            <option value="128">Kathmandu</option>
            <option value="129">Khartoum</option>
            <option value="130">Kigali</option>
            <option value="131">Kingston</option>
            <option value="132">Kinshasa</option>
            <option value="133">Kolkata</option>
            <option value="134">Kuala Lumpur</option>
            <option value="135">Kunming</option>
            <option value="136">Kuwait City</option>
            <option value="137">Kyiv</option>
            <option value="138">La Paz</option>
            <option value="139">Lagos - Ikeja</option>
            <option value="140">Lagos - Victoria Island</option>
            <option value="141">Lahore</option>
            <option value="142">Lilongwe</option>
            <option value="143">Lima</option>
            <option value="144">Lisbon</option>
            <option value="145">Ljubljana</option>
            <option value="146">Los Angeles</option>
            <option value="147">Luanda</option>
            <option value="148">Lucknow</option>
            <option value="149">Lusaka</option>
            <option value="150">Madrid</option>
            <option value="151">Male</option>
            <option value="152">Manama</option>
            <option value="153">Manila</option>
            <option value="154">Maputo</option>
            <option value="155">Marseille</option>
            <option value="156">Medellin</option>
            <option value="157">Melbourne</option>
            <option value="158">Mexico City</option>
            <option value="159">Miami</option>
            <option value="160">Milan</option>
            <option value="161">Minsk</option>
            <option value="162">Mirpur</option>
            <option value="163">Mombasa</option>
            <option value="164">Monterrey</option>
            <option value="165">Montevideo </option>
            <option value="166">Moscow</option>
            <option value="167">Mumbai (North)</option>
            <option value="168">Mumbai (South)</option>
            <option value="169">Munich</option>
            <option value="170">Muscat</option>
            <option value="171">Mysore</option>
            <option value="172">Nairobi</option>
            <option value="173">Nanjing</option>
            <option value="174">Nassau</option>
            <option value="175">New Delhi</option>
            <option value="176">New York</option>
            <option value="177">Nicosia (Cyprus North)</option>
            <option value="178">Nicosia (Cyprus South)</option>
            <option value="179">Novosibirsk</option>
            <option value="180">Nur-Sultan</option>
            <option value="181">Oran</option>
            <option value="182">Osaka</option>
            <option value="183">Oslo</option>
            <option value="184">Ottawa</option>
            <option value="185">Panama City</option>
            <option value="186">Paramaribo</option>
            <option value="187">Paris</option>
            <option value="188">Perth</option>
            <option value="189">Phnom Penh</option>
            <option value="190">Podgorica</option>
            <option value="191">Port Elizabeth</option>
            <option value="192">Port Louis</option>
            <option value="193">Port Moresby</option>
            <option value="194">Port of Spain</option>
            <option value="195">Porto Alegre</option>
            <option value="196">Prague</option>
            <option value="197">Pretoria</option>
            <option value="198">Pristina</option>
            <option value="199">Pune</option>
            <option value="200">Quito</option>
            <option value="201">Rabat</option>
            <option value="202">Ramallah</option>
            <option value="203">Rangoon</option>
            <option value="204">Recife</option>
            <option value="205">Reykjavik</option>
            <option value="206">Riga</option>
            <option value="207">Rio De Janeiro</option>
            <option value="208">Riyadh</option>
            <option value="209">Rome</option>
            <option value="210">Rostov-on-Don</option>
            <option value="211">Sabah</option>
            <option value="212">Saint Helena Mobile</option>
            <option value="213">San Francisco</option>
            <option value="214">Santiago</option>
            <option value="215">Santo Domingo</option>
            <option value="216">Sao Paulo</option>
            <option value="217">Sarajevo</option>
            <option value="218">Sarawak</option>
            <option value="219">Seattle</option>
            <option value="220">Seoul</option>
            <option value="221">Shanghai</option>
            <option value="222">Shenyang</option>
            <option value="223">Shenzhen</option>
            <option value="224">Singapore</option>
            <option value="225">Skopje</option>
            <option value="226">Sofia</option>
            <option value="227">St Johns</option>
            <option value="228">St Julians</option>
            <option value="229">St Petersburg</option>
            <option value="230">Stanley</option>
            <option value="231">Stockholm</option>
            <option value="232">Surabaya</option>
            <option value="233">Suva</option>
            <option value="234">Swatar </option>
            <option value="235">Sydney</option>
            <option value="236">Sylhet</option>
            <option value="237">Taipei</option>
            <option value="238">Tallinn</option>
            <option value="239">Tashkent</option>
            <option value="240">Tbilisi</option>
            <option value="241">Tehran</option>
            <option value="242">Tel Aviv</option>
            <option value="243">Thimphu</option>
            <option value="244">Tirana</option>
            <option value="245">Tokyo</option>
            <option value="246">Toronto</option>
            <option value="247">Trivandrum</option>
            <option value="248">Tunis</option>
            <option value="249">Ulaanbaatar</option>
            <option value="250">Vancouver</option>
            <option value="251">Victoria</option>
            <option value="252">Vienna</option>
            <option value="253">Vientiane</option>
            <option value="254">Vilnius</option>
            <option value="255">Warsaw</option>
            <option value="256">Washington DC</option>
            <option value="257">Wellington</option>
            <option value="258">Whitefield Bangalore</option>
            <option value="259">Windhoek</option>
            <option value="260">Wuhan</option>
            <option value="261">Xian</option>
            <option value="262">Yaounde</option>
            <option value="263">Yerevan</option>
            <option value="264">Zagreb</option>
            <option value="265">Zurich</option>
        </select>
        <span class="field-validation-valid" data-valmsg-for="Countries" data-valmsg-replace="true"></span>
    </p>
    <p id="isYourDrop">
        <label class="required" for="IsYourEnquiry">Is your enquiry about an existing application?</label><br />
        <select aria-label="IsYourEnquiry" class="form-control required" data-val="true" data-val-required="The Is your enquiry about an existing application? field is required." id="IsYourEnquiry" name="IsYourEnquiry" style="width:30%">
            <option value="1">Yes</option>
            <option selected="selected" value="0">No</option>
        </select>
        <span class="field-validation-valid" data-valmsg-for="IsYourEnquiry" data-valmsg-replace="true"></span>
    </p>
    <p>
        <label class="required" for="Enquiry">Enquiry</label><br />
        <textarea class="form-control" cols="33" data-val="true" data-val-required="The Enquiry field is required." id="Enquiry" name="Enquiry" rows="6" style="width:auto;">
        </textarea>
        <span class="field-validation-valid" data-valmsg-for="Enquiry" data-valmsg-replace="true"></span>
    </p>
    <p>
        <label class="required" for="BillingAddress1">Billing Address Line 1</label><br />
        <input class="form-control text-box single-line" data-val="true" data-val-required="The Billing Address Line 1 field is required." id="BillingAddress1" name="BillingAddress1" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="BillingAddress1" data-valmsg-replace="true"></span>
    </p>
    <p>
        <label for="BillingAddress2">Billing Address Line 2</label><br />
        <input class="form-control text-box single-line" id="BillingAddress2" name="BillingAddress2" type="text" value="" />
    </p>
    <p>
        <label class="required" for="BillingCity">Billing City</label><br />
        <input class="form-control text-box single-line" data-val="true" data-val-required="The Billing City field is required." id="BillingCity" name="BillingCity" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="BillingCity" data-valmsg-replace="true"></span>
    </p>
    <p>
        <label for="BillingStateId">Billing State (US only)</label><br />
        <select class="form-control" id="BillingStateId" name="BillingStateId">
            <option value=""></option>
            <option value="1">Alabama                                           </option>
            <option value="2">Alaska                                            </option>
            <option value="3">Arizona                                           </option>
            <option value="4">Arkansas                                          </option>
            <option value="5">California                                        </option>
            <option value="6">Colorado                                          </option>
            <option value="7">Connecticut                                       </option>
            <option value="8">Delaware                                          </option>
            <option value="9">Florida                                           </option>
            <option value="10">Georgia                                           </option>
            <option value="11">Hawaii                                            </option>
            <option value="12">Idaho                                             </option>
            <option value="13">Illinois                                          </option>
            <option value="14">Indiana                                           </option>
            <option value="15">Iowa                                              </option>
            <option value="16">Kansas                                            </option>
            <option value="17">Kentucky                                          </option>
            <option value="18">Louisiana                                         </option>
            <option value="19">Maine                                             </option>
            <option value="20">Maryland                                          </option>
            <option value="21">Massachusetts                                     </option>
            <option value="22">Michigan                                          </option>
            <option value="23">Minnesota                                         </option>
            <option value="24">Mississippi                                       </option>
            <option value="25">Missouri                                          </option>
            <option value="26">Montana                                           </option>
            <option value="27">Nebraska                                          </option>
            <option value="28">Nevada                                            </option>
            <option value="29">NewHampshire                                      </option>
            <option value="30">NewJersey                                         </option>
            <option value="31">NewMexico                                         </option>
            <option value="32">NewYork                                           </option>
            <option value="33">NorthCarolina                                     </option>
            <option value="34">NorthDakota                                       </option>
            <option value="35">Ohio                                              </option>
            <option value="36">Oklahoma                                          </option>
            <option value="37">Oregon                                            </option>
            <option value="38">Pennsylvania                                      </option>
            <option value="39">RhodeIsland                                       </option>
            <option value="40">SouthCarolina                                     </option>
            <option value="41">SouthDakota                                       </option>
            <option value="42">Tennessee                                         </option>
            <option value="43">Texas                                             </option>
            <option value="44">Utah                                              </option>
            <option value="45">Vermont                                           </option>
            <option value="46">Virginia                                          </option>
            <option value="47">Washington                                        </option>
            <option value="48">WestVirginia                                      </option>
            <option value="49">Wisconsin                                         </option>
            <option value="50">Wyoming                                           </option>
        </select>
        <span class="field-validation-valid" data-valmsg-for="BillingStates" data-valmsg-replace="true"></span>
    </p>
    <p>
        <label for="BillingPostCode">Billing Postcode</label><br />
        <input class="form-control text-box single-line" id="BillingPostCode" name="BillingPostCode" type="text" value="" />
    </p>
    <p>
        <label class="required" for="BillingCountryId">Billing Country</label><br />
        <select class="form-control" id="BillingCountryId" name="BillingCountryId">
            <option value="1">Afghanistan</option>
            <option value="2">Albania</option>
            <option value="3">Algeria</option>
            <option value="4">American Samoa</option>
            <option value="5">Andorra</option>
            <option value="6">Angola</option>
            <option value="7">Anguilla</option>
            <option value="8">Aland Islands</option>
            <option value="9">Antarctica</option>
            <option value="10">Antigua and Barbuda</option>
            <option value="11">Argentina</option>
            <option value="12">Armenia</option>
            <option value="13">Aruba</option>
            <option value="14">Australia</option>
            <option value="15">Austria</option>
            <option value="16">Azerbaijan</option>
            <option value="17">Bahamas</option>
            <option value="18">Bahrain</option>
            <option value="19">Bangladesh</option>
            <option value="20">Barbados</option>
            <option value="21">Belarus</option>
            <option value="22">Belgium</option>
            <option value="23">Belize</option>
            <option value="24">Benin</option>
            <option value="25">Bermuda</option>
            <option value="26">Bhutan</option>
            <option value="27">Bolivia</option>
            <option value="28">Bonaire, Sint Eustatius and Saba</option>
            <option value="29">Bosnia and Herzegowina</option>
            <option value="30">Botswana</option>
            <option value="31">Bouvet Island</option>
            <option value="32">Brazil</option>
            <option value="33">British Indian Ocean Territory</option>
            <option value="34">Brunei Darussalam</option>
            <option value="35">Bulgaria</option>
            <option value="36">Burkina faso</option>
            <option value="37">Burundi</option>
            <option value="38">Cambodia, Kindom of</option>
            <option value="39">Cameroon</option>
            <option value="40">Canada</option>
            <option value="41">Cape verde</option>
            <option value="42">Cayman islands</option>
            <option value="43">Central African Republic</option>
            <option value="44">Chad</option>
            <option value="45">Chile</option>
            <option value="46">China</option>
            <option value="47">Christmas Island</option>
            <option value="48">Cocos (keeling) Islands</option>
            <option value="49">Colombia</option>
            <option value="50">Comoros</option>
            <option value="51">Congo</option>
            <option value="52">Congo, The Democratic Republic of The</option>
            <option value="53">Cook Islands</option>
            <option value="54">Costa Rica</option>
            <option value="55">Cote d&#x27;ivoire (Ivory Coast)</option>
            <option value="56">Croatia (Hrvatska)</option>
            <option value="57">Cuba</option>
            <option value="58">Curacao</option>
            <option value="59">Cyprus</option>
            <option value="60">Czech Republic</option>
            <option value="61">Czechoslovakia (Officially deleted)</option>
            <option value="62">Denmark</option>
            <option value="63">Djibouti</option>
            <option value="64">Dominica</option>
            <option value="65">Dominican Republic</option>
            <option value="66">East Timor</option>
            <option value="67">Ecuador</option>
            <option value="68">Egypt</option>
            <option value="69">El Salvador</option>
            <option value="70">Equatorial Guinea</option>
            <option value="71">Eritrea</option>
            <option value="72">Estonia</option>
            <option value="73">Ethiopia</option>
            <option value="74">Falkland Islands (Malvinas)</option>
            <option value="75">Faroe Islands</option>
            <option value="76">Fiji</option>
            <option value="77">Finland</option>
            <option value="78">France</option>
            <option value="79">French Guiana</option>
            <option value="80">French Polynesia</option>
            <option value="81">French Southern Territories</option>
            <option value="82">Gabon</option>
            <option value="83">Gambia</option>
            <option value="84">Georgia</option>
            <option value="85">Germany</option>
            <option value="86">Ghana</option>
            <option value="87">Gibraltar</option>
            <option value="88">Greece</option>
            <option value="89">Greenland</option>
            <option value="90">Grenada</option>
            <option value="91">Guadeloupe</option>
            <option value="92">Guam</option>
            <option value="93">Guatemala</option>
            <option value="94">Guernsey</option>
            <option value="95">Guinea</option>
            <option value="96">Guinea-Bissau</option>
            <option value="97">Guyana</option>
            <option value="98">Haiti</option>
            <option value="99">Heard and MC Donald Islands</option>
            <option value="100">Holy See (Vatican City State)</option>
            <option value="101">Honduras</option>
            <option value="102">Hong Kong</option>
            <option value="103">Hungary</option>
            <option value="104">Iceland</option>
            <option value="105">India</option>
            <option value="106">Indonesia</option>
            <option value="107">Iran</option>
            <option value="108">Iraq</option>
            <option value="109">Ireland</option>
            <option value="110">Isle of Man</option>
            <option value="111">Israel</option>
            <option value="112">Italy</option>
            <option value="113">Jamaica</option>
            <option value="114">Japan</option>
            <option value="115">Jersey</option>
            <option value="116">Jordan</option>
            <option value="117">Kazakhstan</option>
            <option value="118">Kenya</option>
            <option value="119">Kiribati</option>
            <option value="120">Kosovo</option>
            <option value="121">Democratic People&#x27;s Republic of Korea</option>
            <option value="122">Republic of Korea</option>
            <option value="123">Kuwait</option>
            <option value="124">Kyrgyzstan (Kyrgyz Republic)</option>
            <option value="125">Lao People&#x27;s Democratic Republic</option>
            <option value="126">Latvia</option>
            <option value="127">Lebanon</option>
            <option value="128">Lesotho</option>
            <option value="129">Liberia</option>
            <option value="130">Libyan Arab Jamahiriya</option>
            <option value="131">Liechtenstein</option>
            <option value="132">Lithuania</option>
            <option value="133">Luxembourg</option>
            <option value="134">Macau</option>
            <option value="135">Macedonia, former Yugoslav Republic of</option>
            <option value="136">Madagascar, Replublic of</option>
            <option value="137">Malawi</option>
            <option value="138">Malaysia</option>
            <option value="139">Maldives</option>
            <option value="140">Mali</option>
            <option value="141">Malta</option>
            <option value="142">Marshall Islands</option>
            <option value="143">Martinique</option>
            <option value="144">Mauritania</option>
            <option value="145">Mauritius</option>
            <option value="146">Mayotte</option>
            <option value="147">Mexico</option>
            <option value="148">Micronesia, Federated States of</option>
            <option value="149">Moldova, Republic of</option>
            <option value="150">Monaco</option>
            <option value="151">Mongolia</option>
            <option value="152">Montserrat</option>
            <option value="153">Morocco</option>
            <option value="154">Mozambique</option>
            <option value="155">Montenegro</option>
            <option value="156">Myanmar</option>
            <option value="157">Namibia</option>
            <option value="158">Nauru</option>
            <option value="159">Nepal</option>
            <option value="160">Netherlands</option>
            <option value="161">New Caledonia</option>
            <option value="162">New Zealand</option>
            <option value="163">Nicaragua</option>
            <option value="164">Niger</option>
            <option value="165">Nigeria</option>
            <option value="166">Niue</option>
            <option value="167">Norfolk Island</option>
            <option value="168">Northern Mariana Islands</option>
            <option value="169">Norway</option>
            <option value="170">Oman</option>
            <option value="171">Pakistan</option>
            <option value="172">Palestinian Territory, Occupied</option>
            <option value="173">Palau</option>
            <option value="174">Panama</option>
            <option value="175">Papua New Guinea</option>
            <option value="176">Paraguay</option>
            <option value="177">Peru</option>
            <option value="178">Philippines</option>
            <option value="179">Pitcairn</option>
            <option value="180">Poland</option>
            <option value="181">Portugal</option>
            <option value="182">Puerto Rico</option>
            <option value="183">Qatar</option>
            <option value="184">Reunion</option>
            <option value="185">Romania</option>
            <option value="186">Russian Federation</option>
            <option value="187">Rwanda</option>
            <option value="188">Saint Barthelemy</option>
            <option value="189">Saint Kitts and Nevis</option>
            <option value="190">Saint Martin</option>
            <option value="191">Saint Lucia</option>
            <option value="192">Saint Vincent and the Grenadines</option>
            <option value="193">Sint Maarten</option>
            <option value="194">Samoa</option>
            <option value="195">San Marino</option>
            <option value="196">Sao Tome and Principe</option>
            <option value="197">Saudi Arabia</option>
            <option value="198">Senegal</option>
            <option value="199">Serbia</option>
            <option value="200">Seychelles</option>
            <option value="201">Sierra Leone</option>
            <option value="202">Singapore</option>
            <option value="203">Slovakia (Slovak Republic)</option>
            <option value="204">Slovenia</option>
            <option value="205">Solomon Islands</option>
            <option value="206">Somalia</option>
            <option value="207">South Africa</option>
            <option value="208">South Georgia / South Sandwich Islands</option>
            <option value="209">South Sudan</option>
            <option value="210">Spain</option>
            <option value="211">Sri Lanka</option>
            <option value="212">St. Helena</option>
            <option value="213">St. Pierre and Miquelon</option>
            <option value="214">Sudan</option>
            <option value="215">Suriname</option>
            <option value="216">Svalbard and Jan Mayen Islands</option>
            <option value="217">Swaziland</option>
            <option value="218">Sweden</option>
            <option value="219">Switzerland</option>
            <option value="220">Syrian Arab Republic</option>
            <option value="221">Taiwan, Province of China</option>
            <option value="222">Tajikistan</option>
            <option value="223">Tanzania, United Republic of</option>
            <option value="224">Thailand</option>
            <option value="225">Timor-Leste</option>
            <option value="226">Togo</option>
            <option value="227">Tokelau</option>
            <option value="228">Tonga</option>
            <option value="229">Trinidad and Tobago</option>
            <option value="230">Tunisia</option>
            <option value="231">Turkey</option>
            <option value="232">Turkmenistan</option>
            <option value="233">Turks and Caicos Islands</option>
            <option value="234">Tuvalu</option>
            <option value="235">Uganda</option>
            <option value="236">Ukraine</option>
            <option value="237">United Arab Emirates</option>
            <option value="238">United Kingdom</option>
            <option value="239">United States</option>
            <option value="240">United States Minor Outlying Islands</option>
            <option value="241">Uruguay</option>
            <option value="242">Uzbekistan</option>
            <option value="243">Vanuatu</option>
            <option value="244">Venezuela</option>
            <option value="245">Viet Nam</option>
            <option value="246">Virgin Islands (british)</option>
            <option value="247">Virgin Islands (U.S.)</option>
            <option value="248">Wallis and Futuna Islands</option>
            <option value="249">Western Sahara</option>
            <option value="250">Yemen</option>
            <option value="251">Zambia</option>
            <option value="252">Zimbabwe</option>
        </select>
        <span class="field-validation-valid" data-valmsg-for="BillingCountries" data-valmsg-replace="true"></span>
    </p>
</div>
    <button class="btn float-left btn-success continueBtn" type="submit">
        Continue
    </button>
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8M_95A44e0pOvUqgfE4vO7Zd7TS-Qwf3aUK2jZaqZXdA0ouBas_mxrKLVLeAnmAij21Nd3OCh8Hb7zLxJZ9AvOETEv040-SXv17N7ShgKKdiAbeTFNqn59m_aHXbdFvcGcemeker5JgOcNnUxcvXgdY" />
</form>

<script src="<?php echo e(asset('assets/jquery.min.js')); ?>"></script>
<script>
    $(document).ready(function () {
        $(".tooltipFloatRight").addClass('show');

        $(window).resize(function(){
            if($(window).width()<536){
                $('.question').removeClass('show');
            }
        });

        if ('False' === 'True') {

            const objToSend = {
                ApplicationReferenceNumber: '',
                IsYouTheApplicant: 'False',
                Name: '',
                TypeOfVisa: '',
                NationalityId: '',
                DateOfBirth: '01/01/1980 00:00:00',
                DateOfApplication: '01/01/2021 00:00:00',
                PassportNumber: '',
                HealthSurchargeReference: '',
                EmailAddressApplication: ''
            };

            $.post('/Details/ApplicantPartial', objToSend,
                function (data) {

                    jQuery('<div/>', {
                        id: 'partialApplicant'
                       
                    }).insertAfter('#isYourDrop');

                    $("#partialApplicant").html(data);

                    $('#ConfirmationForm').each(function (i, f) {
                        var $form = $(f);
                        $form.removeData('validator');
                        $form.removeData('unobtrusiveValidation');
                        $.validator.unobtrusive.parse($form);
                    });

                    if ('False' === 'True') {
                        const nameInput = $("#Name");
                        $(`label[for=${nameInput[0].name}]`).css("display", "block");
                        nameInput.css("display", "block");
                    }

                });
        }

        $("#IsYourEnquiry").change(function() {
            if ($(this).val() === 'True') {
                $.get('/Details/NoApplicantPartial',
                    function (data) {

                        jQuery('<div/>', {
                            id: 'partialApplicant'
                        }).insertAfter('#isYourDrop');

                        $("#partialApplicant").html(data);

                        $('#ConfirmationForm').each(function (i, f) {
                            var $form = $(f);
                            $form.removeData('validator');
                            $form.removeData('unobtrusiveValidation');
                            $.validator.unobtrusive.parse($form);
                        });

                    });
            }
            else {
                $("#partialApplicant").remove();
            }
        });
    });
</script>
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
                        <img src="/images/keyivr.png" alt="powerLogo" /></div>
                </div>
            </div>
        </div>
    </footer>
</div>


<script src="<?php echo e(asset('assets/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/all.js')); ?>"></script>
<script src="<?php echo e(asset('assets/all.js')); ?>"></script>
<script src="<?php echo e(asset('assets/StepWizardSelection.js')); ?>"></script>
<script src="<?php echo e(asset('assets/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/jquery.validate.unobtrusive.min.js')); ?>"></script>

</body>
</html><?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/form-details.blade.php ENDPATH**/ ?>