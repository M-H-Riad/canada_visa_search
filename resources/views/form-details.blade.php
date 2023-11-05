<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Search Your Application</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}} " />
        <link rel="stylesheet" href="{{asset('assets/site.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/all.css')}}" />

        <style>
            input[type="text"].form-control {
                width: 100%!important;
            }

            .active {
                color: green !important;
            }

            .step {
                height: 100px !important;
            }
            span {
                height: 100px !important;
            }

            .notetext {
                margin-top: -25px;
            }
            
            .b_logo {
                height: 60px;
            }
        </style>
    </head>
<body>
<div class="wrapper">

    <div class="header">
        <div class="container divLogo">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 0 !important">
                    <img src="{{asset('asset/t_logo.jpg')}}" alt="companyLogo" class="imgLogo col-sm-2 float-left" />
                </div>
            </div>
        </div>
    </div>

    <div class="container body-container">
        <div>
            <form action="" id="ConfirmationForm" method="GET"><div class="fontHelveticaParagraph">
                <br />
    
                <p>Please confirm your details below and continue to the next step.</p>
                <br />
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <label class="required" for="FirstName">First Name</label><br />
                                <input class="form-control text-box single-line" data-val="true" required id="FirstName" name="first_name" type="text" value="{{$first_name}}" />
                                <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <label class="required" for="LastName">Last Name</label><br />
                                <input class="form-control text-box single-line" data-val="true" required id="LastName" name="last_name" type="text" value="{{$last_name}}" />
                                <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">
                    <p>
                        <label for="passport" class="required">Passport Number</label><br />
                        <input class="form-control text-box single-line" id="passport" required name="passport" type="text" value="{{$passport}}" />
                    </p>
                    
                    <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}" @if (isset($info) && $first_result == 1) style="display: none;" @endif>
                        <label for="password" class="col-md-4 control-label">Captcha</label>
                            <div class="col-md-6">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                                </div>
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                @if ($errors->has('captcha'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    @if (!isset($info))
                    <button class="btn float-left btn-success continueBtn" type="submit">
                        Search
                    </button>
                    @endif
                </div>
            </div>
            </form>
        </div>

        <br><br>@if (!isset($info)) <br><br><br> @endif



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

        

        @if (isset($info) && $first_result == 1)
            <div class="text-center">
                @if (isset($info) && $second === null)
                <h3 class="text-left text-success fontHelveticaHeader">Information Found! Please provide below information.</h3>
                @endif

                <br />
                <br />

                <div class="text-left fontHelveticaParagraph">
                    <form action="" id="ConfirmationForm" method="GET"><div class="fontHelveticaParagraph">
                        <br />
            
                        <p>Please confirm your details below and continue to the next step.</p>
                        <br />
                        <input type="hidden" name="first_name" value="{{$first_name}}">
                        <input type="hidden" name="last_name" value="{{$last_name}}">
                        <input type="hidden" name="passport" value="{{$passport}}">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <p>
                                        <label class="required" for="lmia">LMIA ID</label><br />
                                        <input class="form-control text-box single-line" data-val="true" required id="lmia" name="lmia" type="text" value="{{$lmia}}" />
                                        <span class="field-validation-valid" data-valmsg-for="lmia" data-valmsg-replace="true"></span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>
                                        <label class="required" for="document">Document ID</label><br />
                                        <input class="form-control text-box single-line" data-val="true" required id="document" name="document" type="text" value="{{$document}}" />
                                        <span class="field-validation-valid" data-valmsg-for="document" data-valmsg-replace="true"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
        
                            <button class="btn float-left btn-success continueBtn" type="submit">
                                Search
                            </button>
                        </div>
                    </div>
                    </form>
                </div>

                <br />
            </div>
        @elseif (!isset($info) && $second == null && $first_result == 0 && $first == 1)
            <div class="stepwizard clearfix">
                <p class="text-warning">Your provided information is incorrect. Please provide correct information.</p>
            </div>
        @endif

        @if (isset($info) && $second_result === 1)
        <br><br>
            <hr>
            <h3 class="text-left text-success fontHelveticaHeader">Congratulations!</h3>

            <div class="stepwizard clearfix">
                <div class="stepwizard-step">
                    <a data-num="1" class="step @if(isset($info->status1_date)) active @endif" id="step_1" href="#">
                        {{ $status->status_1 }}
                        <div class="notetext">
                            @if(isset($info->status1_date))
                            <small>Date: {{ $info->status1_date ?? 'N/A' }}</small>
                            @endif
                            @if(isset($info->status1_note))
                            <small>Note: {{ $info->status1_note ?? 'N/A' }}</small>
                            @endif
                        </div>
                    <span class="arrow"></span>
                </a>
                    
                </div>
                <div class="stepwizard-step">
                    <a data-num="2" class="step @if(isset($info->status2_date)) active @endif" id="step_2" href="#">
                        {{ $status->status_2 }}
                        <div class="notetext">
                            @if(isset($info->status2_date))
                            <small>Date: {{ $info->status2_date ?? 'N/A' }}</small>
                            @endif
                            @if(isset($info->status2_note))
                            <small>Note: {{ $info->status2_note ?? 'N/A' }}</small>
                            @endif
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step">
                    <a data-num="3" class="step @if(isset($info->status3_date)) active @endif" id="step_3" href="#">
                        {{ $status->status_3 }}
                        <div class="notetext">
                            @if(isset($info->status3_date))
                            <small>Date: {{ $info->status3_date ?? 'N/A' }}</small>
                            @endif
                            @if(isset($info->status3_note))
                            <small>Note: {{ $info->status3_note ?? 'N/A' }}</small>
                            @endif
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step mb-2">
                    <a data-num="4" class="step @if(isset($info->status4_date)) active @endif" id="step_4" href="#">
                        {{ $status->status_4 }}
                        <div class="notetext">
                            @if(isset($info->status4_date))
                            <small>Date: {{ $info->status4_date ?? 'N/A' }}</small>
                            @endif
                            @if(isset($info->status4_note))
                            <small>Note: {{ $info->status4_note ?? 'N/A' }}</small>
                            @endif
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step ">
                    <a data-num="5" class="step @if(isset($info->status5_date)) active @endif" id="step_5" href="#">
                        {{ $status->status_5 }}
                        <div class="notetext">
                            @if(isset($info->status5_date))
                            <small>Date: {{ $info->status5_date ?? 'N/A' }}</small>
                            @endif
                            @if(isset($info->status5_note))
                            <small>Note: {{ $info->status5_note ?? 'N/A' }}</small>
                            @endif
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step ">
                    <a data-num="6" class="step @if(isset($info->status6_date)) active @endif" id="step_6" href="#">
                        {{ $status->status_6 }}
                        <div class="notetext">
                            @if(isset($info->status6_date))
                            <small>Date: {{ $info->status6_date ?? 'N/A' }}</small>
                            @endif
                            @if(isset($info->status6_note))
                            <small>Note: {{ $info->status6_note ?? 'N/A' }}</small>
                            @endif
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step ">
                    <a data-num="7" class="step @if(isset($info->status7_date)) active @endif" id="step_7" href="#">
                        {{ $status->status_7 }}
                        <div class="notetext">
                            @if(isset($info->status7_date))
                            <small>Date: {{ $info->status7_date ?? 'N/A' }}</small>
                            @endif
                            @if(isset($info->status7_note))
                            <small>Note: {{ $info->status7_note ?? 'N/A' }}</small>
                            @endif
                        </div>
                    </a>
                </div>
                
                <br>
                <div>
                    <!-- Table with stripped rows -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>First Name:</th>
                                <td>{{ $info->first_name }}</td>
                            </tr>
                            <tr>
                                <th>Last Name:</th>
                                <td>{{ $info->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Passport:</th>
                                <td>{{ $info->passport }}</td>
                            </tr>
                            <tr>
                                <th>Passport Expiry Date:</th>
                                <td>{{ $info->pass_exp_date ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>LMIA:</th>
                                <td>{{ $info->lmia ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>LMIA Active:</th>
                                <td>{{ $info->lmia_active ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Document ID:</th>
                                <td>{{ $info->document_id ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Document Valid:</th>
                                <td>{{ $info->document_valid ?? 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>
        @elseif (isset($info) && $second == 1 && $second_result == 0)
        <br><br>
            <hr>
            <div class="stepwizard clearfix">
                <p class="text-warning">Your provided information is incorrect. Please provide correct information.</p>
            </div>
        @endif

        @if (isset($info) && $first == 1)
        <br><br>
            <div class="col-6">
            
            <a href="{{url('/search/information')}}" class="btn float-left btn-warning"> Reset</a>
            </div>
        @endif
        
        
{{-- <script src="/lib/jquery/dist/jquery.min.js"></script> --}}
<script src="{{asset('assets/jquery.min.js')}}"></script>
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

<script type="text/javascript">
    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refresh_captcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
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
                                        <a class="nav-link text-dark" href="https://www.checkvisacanada.com/privacy-policy/">Privacy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="https://www.canada.ca/en/transparency/terms.html">Cookies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="http://www.chrc-ccdp.gc.ca/en/accessibility-plan-and-feedback">Accessibility Statements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="https://www.checkvisacanada.com/privacy-policy/">Terms and Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-sm-3 footerProvider">
                        <h2>Powered by</h2>
                        <img class="b_logo" src="{{asset('asset/b_logo.png')}}" alt="powerLogo" /></div>
                </div>
            </div>
        </div>
    </footer>
</div>


<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/all.js')}}"></script>
<script src="{{asset('assets/all.js')}}"></script>
<script src="{{asset('assets/StepWizardSelection.js')}}"></script>
<script src="{{asset('assets/script.js')}}"></script>
<script src="{{asset('assets/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/jquery.validate.unobtrusive.min.js')}}"></script>

</body>
</html>