<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Payment Amount - UKVI</title>
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

        
    <form action="/Payment/ConfirmAmount" id="PaymentAmountForm" method="post">    <div class="text-center">
        <h1 class="text-left fontHelveticaHeader">Payment Amount</h1>

        <br/>
        <br/>

        <div class="text-left fontHelveticaParagraph">
            <p>We aim to respond to your email in five working days.</p>
            <br/>
            <p>If you do not select 'submit' your enquiry will not be completed and you will not be charged. For more contact</p>
            <p>options please visit 
                <a class="text-decoration-underline" style="color: #0055B7;" href="https://www.gov.uk/contact-ukvi-inside-outside-uk">https://www.gov.uk/contact-ukvi-inside-outside-uk</a>
            </p>
            <p>You will be charged &pound;2.74 (GBP) for this email enquiry.
            <br/>
        </div>

        <br/>

        {{-- <button class="btn float-left btn-success continueBtn" type="submit">
            Continue
        </button> --}}
        <a class="btn float-left btn-success continueBtn" href="{{route('payment.details', ['user_id' => $user_id])}}">Continue</a>
    </div>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8M_95A44e0pOvUqgfE4vO7ag-hzBPcwANQCG1_FSo0bjemfcIvd6a9WPQtDDPJ0kqNstimg2SW8DHQl6t0fw8FnpFgvu7e_2HScT_9v412cI4LTw7WbKZ-8SNl_VTHs-DdgF1QnUVHaBvBnVYyiDRK4" /></form>
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


<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/all.js')}}"></script>
<script src="{{asset('assets/StepWizardSelection.js')}}"></script>
<script src="{{asset('assets/script.js')}}"></script>


</body>
</html>