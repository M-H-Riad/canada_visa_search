<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page - UKVI</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}} " />
    <link rel="stylesheet" href="{{asset('assets/site.css')}}" />
</head>
<body>
<div class="wrapper">

    <div class="header">
        <div class="container divLogo">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 0 !important">
                    <img src="{{asset('assets/UKVI Logo.jpg')}}" alt="companyLogo" class="imgLogo col-sm-2 float-left"/>
                </div>
            </div>
        </div>
    </div>

    <div class="container body-container">
        
<div class="text-center">
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

    <h1 class="text-left fontHelveticaHeader">Contact UK Visas and Immigration from</h1>
    <h1 class="text-left fontHelveticaHeader">outside the UK</h1>

    <br/>
    <br/>

    <div class="text-left fontHelveticaParagraph">
        <p>Each enquiry costs &pound;2.74 (GBP). This cost includes your initial email plus any follow-up emails you send relating</p>
        <p>to the same enquiry. You'll need a credit or debit card to use this service. You'll enter your payment details before</p>
        <p>sending your message, but you won't be charged until your message has been sent.</p>
        <br/>
        <p>We will reply within five working days. If your message is urgent, you can 
            <a class="text-decoration-underline" style="color: #0055B7;" href="https://www.gov.uk/contact-ukvi-inside-outside-uk/y/outside-the-uk">phone us</a> instead</p>
        <br/>
        <p>Please note that our contact centre staff have no involvement in the outcome of applications.</p>
    </div>
  
    <br/>

    <a class="btn float-left btn-success startBtn" href="{{url('/details/confirm-details')}}">
        Start
    </a>
</div>
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
                        <img src="{{asset('assets/keyivr.png')}}" alt="powerLogo"/></div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>

</body>
</html>