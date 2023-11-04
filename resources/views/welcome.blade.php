<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page - UKVI</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}} " />
    <link rel="stylesheet" href="{{asset('assets/site.css')}}" />
    <style>
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
                    <img src="{{asset('asset/t_logo.jpg')}}" alt="companyLogo" class="imgLogo col-sm-2 float-left"/>
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

    <h1 class="text-left fontHelveticaHeader">What is a Labour Market</h1>
    <h1 class="text-left fontHelveticaHeader">Impact Assessment?</h1>

    <br/>
    <br/>

    <div class="text-left fontHelveticaParagraph">
        <p>A Labour Market Impact Assessment (LMIA) is a document that an employer in Canada may need to get before hiring a foreign worker.</p>
        <p>Before getting LMIA you need to apply for it and you can start your journey here <a href="https://www.checkvisacanada.com/apply">Apply Canada</a>.</p>
        <br/>
        <p>After getting LMIA you need to check the status. Let's start your journey of checking LMIA</p>
    </div>
  
    <br/>

    <a class="btn float-left btn-success startBtn" href="{{url('/search/information')}}">
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
                        <img class="b_logo" src="{{asset('asset/b_logo.png')}}" alt="powerLogo"/></div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>

</body>
</html>