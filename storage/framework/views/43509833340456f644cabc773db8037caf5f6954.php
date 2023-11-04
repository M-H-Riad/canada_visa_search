<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Search Your Application</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap.min.css')); ?> " />
        <link rel="stylesheet" href="<?php echo e(asset('assets/site.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/all.css')); ?>" />

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
        </style>
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
            <form action="" id="ConfirmationForm" method="GET"><div class="fontHelveticaParagraph">
                <br />
    
                <p>Please confirm your details below and continue to the next step.</p>
                <br />
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <label class="required" for="FirstName">First Name</label><br />
                                <input class="form-control text-box single-line" data-val="true" required id="FirstName" name="first_name" type="text" value="<?php echo e($first_name); ?>" />
                                <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <label class="required" for="LastName">Last Name</label><br />
                                <input class="form-control text-box single-line" data-val="true" required id="LastName" name="last_name" type="text" value="<?php echo e($last_name); ?>" />
                                <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">
                    <p>
                        <label for="passport" class="required">Passport Number</label><br />
                        <input class="form-control text-box single-line" id="passport" required name="passport" type="text" value="<?php echo e($passport); ?>" />
                    </p>
                    <?php if(!isset($info)): ?>
                    <button class="btn float-left btn-success continueBtn" type="submit">
                        Search
                    </button>
                    <?php endif; ?>
                </div>
            </div>
            </form>
        </div>

        <br><br><?php if(!isset($info)): ?> <br><br><br> <?php endif; ?>



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

        

        <?php if(isset($info)): ?>
            <div class="text-center">
                <?php if(isset($info) && $second === null): ?>
                <h3 class="text-left text-success fontHelveticaHeader">Information Found! Please provide below information.</h3>
                <?php endif; ?>

                <br />
                <br />

                <div class="text-left fontHelveticaParagraph">
                    <form action="" id="ConfirmationForm" method="GET"><div class="fontHelveticaParagraph">
                        <br />
            
                        <p>Please confirm your details below and continue to the next step.</p>
                        <br />
                        <input type="hidden" name="first_name" value="<?php echo e($first_name); ?>">
                        <input type="hidden" name="last_name" value="<?php echo e($last_name); ?>">
                        <input type="hidden" name="passport" value="<?php echo e($passport); ?>">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <p>
                                        <label class="required" for="lmia">LMIA ID</label><br />
                                        <input class="form-control text-box single-line" data-val="true" required id="lmia" name="lmia" type="text" value="<?php echo e($lmia); ?>" />
                                        <span class="field-validation-valid" data-valmsg-for="lmia" data-valmsg-replace="true"></span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>
                                        <label class="required" for="document">Document ID</label><br />
                                        <input class="form-control text-box single-line" data-val="true" required id="document" name="document" type="text" value="<?php echo e($document); ?>" />
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
        <?php elseif(!isset($info) && $second === null && $first == 1): ?>
            <div class="stepwizard clearfix">
                <p class="text-warning">Your provided information is incorrect. Please provide correct information.</p>
            </div>
        <?php endif; ?>

        <?php if(isset($info) && $second === 1): ?>
        <br><br>
            <hr>
            <h3 class="text-left text-success fontHelveticaHeader">Congratulations!</h3>

            <div class="stepwizard clearfix">
                <div class="stepwizard-step">
                    <a data-num="1" class="step <?php if(isset($info->status1_date)): ?> active <?php endif; ?>" id="step_1" href="#">
                        <?php echo e($status->status_1); ?>

                        <div class="notetext">
                            <?php if(isset($info->status1_date)): ?>
                            <small>Date: <?php echo e($info->status1_date ?? 'N/A'); ?></small>
                            <?php endif; ?>
                            <?php if(isset($info->status1_note)): ?>
                            <small>Note: <?php echo e($info->status1_note ?? 'N/A'); ?></small>
                            <?php endif; ?>
                        </div>
                    <span class="arrow"></span>
                </a>
                    
                </div>
                <div class="stepwizard-step">
                    <a data-num="2" class="step <?php if(isset($info->status2_date)): ?> active <?php endif; ?>" id="step_2" href="#">
                        <?php echo e($status->status_2); ?>

                        <div class="notetext">
                            <?php if(isset($info->status2_date)): ?>
                            <small>Date: <?php echo e($info->status2_date ?? 'N/A'); ?></small>
                            <?php endif; ?>
                            <?php if(isset($info->status2_note)): ?>
                            <small>Note: <?php echo e($info->status2_note ?? 'N/A'); ?></small>
                            <?php endif; ?>
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step">
                    <a data-num="3" class="step <?php if(isset($info->status3_date)): ?> active <?php endif; ?>" id="step_3" href="#">
                        <?php echo e($status->status_3); ?>

                        <div class="notetext">
                            <?php if(isset($info->status3_date)): ?>
                            <small>Date: <?php echo e($info->status3_date ?? 'N/A'); ?></small>
                            <?php endif; ?>
                            <?php if(isset($info->status3_note)): ?>
                            <small>Note: <?php echo e($info->status3_note ?? 'N/A'); ?></small>
                            <?php endif; ?>
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step mb-2">
                    <a data-num="4" class="step <?php if(isset($info->status4_date)): ?> active <?php endif; ?>" id="step_4" href="#">
                        <?php echo e($status->status_4); ?>

                        <div class="notetext">
                            <?php if(isset($info->status4_date)): ?>
                            <small>Date: <?php echo e($info->status4_date ?? 'N/A'); ?></small>
                            <?php endif; ?>
                            <?php if(isset($info->status4_note)): ?>
                            <small>Note: <?php echo e($info->status4_note ?? 'N/A'); ?></small>
                            <?php endif; ?>
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step ">
                    <a data-num="5" class="step <?php if(isset($info->status5_date)): ?> active <?php endif; ?>" id="step_5" href="#">
                        <?php echo e($status->status_5); ?>

                        <div class="notetext">
                            <?php if(isset($info->status5_date)): ?>
                            <small>Date: <?php echo e($info->status5_date ?? 'N/A'); ?></small>
                            <?php endif; ?>
                            <?php if(isset($info->status5_note)): ?>
                            <small>Note: <?php echo e($info->status5_note ?? 'N/A'); ?></small>
                            <?php endif; ?>
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step ">
                    <a data-num="6" class="step <?php if(isset($info->status6_date)): ?> active <?php endif; ?>" id="step_6" href="#">
                        <?php echo e($status->status_6); ?>

                        <div class="notetext">
                            <?php if(isset($info->status6_date)): ?>
                            <small>Date: <?php echo e($info->status6_date ?? 'N/A'); ?></small>
                            <?php endif; ?>
                            <?php if(isset($info->status6_note)): ?>
                            <small>Note: <?php echo e($info->status6_note ?? 'N/A'); ?></small>
                            <?php endif; ?>
                        </div>
                        <span class="arrow"></span>
                    </a>
                </div>
                <div class="stepwizard-step ">
                    <a data-num="7" class="step <?php if(isset($info->status7_date)): ?> active <?php endif; ?>" id="step_7" href="#">
                        <?php echo e($status->status_7); ?>

                        <div class="notetext">
                            <?php if(isset($info->status7_date)): ?>
                            <small>Date: <?php echo e($info->status7_date ?? 'N/A'); ?></small>
                            <?php endif; ?>
                            <?php if(isset($info->status7_note)): ?>
                            <small>Note: <?php echo e($info->status7_note ?? 'N/A'); ?></small>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            </div>
        <?php elseif(isset($info) && $second != 1 && $first == 1): ?>
        <br><br>
            <hr>
            <div class="stepwizard clearfix">
                <p class="text-warning">Your provided information is incorrect. Please provide correct information.</p>
            </div>
        <?php endif; ?>

        <?php if(isset($info) && $first == 1): ?>
        <br><br>
            <div class="col-6">
            
            <a href="<?php echo e(url('/search/information')); ?>" class="btn float-left btn-warning"> Reset</a>
            </div>
        <?php endif; ?>
        
        

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