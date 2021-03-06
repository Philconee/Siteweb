<html>

<head>
    <!-- Yannis & Yannis solution -->
    <!-- Webdesigned by Yannis Chaumard-->
    <!-- Developed by Yannis Caussade-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
    <title>Istrium</title>
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="assets/favicon.ico" />

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/progress-bar.css">
    <link rel="stylesheet" href="css/roadmap.css">
    <link rel="stylesheet" href="css/animated-text.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- Plugin JavaScript -->
    <script src="js/animations.js"></script>
    <script src="js/animated-text.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<body>
    <!-- Deco shape and particles -->
    <div class="deco">
        <div class="d-none d-md-block" id="particles-js"></div>
        <img id="deco" class="d-none d-md-block w-100" src="assets/shapes/toutlesite.svg">
        <div id="deco-mobile" class="d-block d-md-none"></div>
    </div>
    <!-- Navigation bar with js sroll trigger -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <i class="fa fa-star yolo d-none d-md-block" id="yolo"></i>
            <div class="logo">
                <img class="w-100" src="assets/ispriumLogoV4-Seul.png">
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#Features">Features
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#Roadmap">Roadmap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#ICO">ICO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#IcoTeam">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#Faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#Whitepaper">Whitepaper</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn d-none d-md-block buy btn-lg btn-outline-light" data-container="body" data-toggle="popover"
                        data-placement="bottom" data-content="You can't download our wallet now, you need to wait until the website v2 will be finished">Buy coin</button>
                </li>
            </ul>
        </div>
    </nav>
    <div id="container" class="container-fluid">
        <div class="row justify-content-center header">
            <div class="col-12 col-md-4 slogan">
                <h5>
                    Istrium
                </h5>
                <!-- World wrapper js -->
                <h1 class="cd-headline clip is-full-width">
                    <span class="cd-words-wrapper">
                        <b class="is-visible">Trade and be traded</b>
                        <b>One-click blockchain for free</b>
                        <b>ICO for IPO</b>
                    </span>
                </h1>
                <div class="row bouton">
                    <div class="col-12 col-md-6">
                        <!-- Whitepaper link -->
                        <button type="button" class="btn btn-red btn-lg round btn-block" href="#">Whitepaper
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <!-- Presentation link -->
                        <button type="button" class="btn btn-link btn-lg clear" href="#">Présentation</button>
                    </div>
                </div>
                <div class="whitelisted d-none d-md-block">
                    <h5>Get whitelisted to enjoy a 10% bonus & 10 free tokens :</h5>
                    <!-- Get whitelisted form desktop -->
                    <form class="textbox" class="form" method="post" action="php/mail.php">
                        <input autocomplete="off" name="email" id="email" required="/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)?$/i"
                            type="email" />
                        <label for="email">Email Address</label>
                        <div class="error">
                            Invalid email address
                        </div>
                        <button type="submit" class="btn button_send btn-outline-light">
                            <i class="fa fa-angle-right"></i>
                        </button>
                        <div class="col-12 sent_message">
                            <p>Message send !</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-5 col-xl-4 offset-md-1">
                <div class="card">
                    <div class="card-body presale">
                        <h6 class="card-title">Pre-sale starts in :</h6>
                        <!-- Countdown -->
                        <div id="clockdiv" class="row justify-content-center">
                            <div class="col-6">
                                <h5>
                                    <span id="days"></span>
                                    days
                                </h5>
                            </div>
                            <div class="col-6">
                                <h5>
                                    <span id="hours"></span>
                                    hours
                                </h5>
                            </div>
                            <div class="col-6">
                                <h5>
                                    <span id="minutes"></span>
                                    minutes
                                </h5>
                            </div>
                            <div class="col-6">
                                <h5>
                                    <span id="secondes"></span>
                                    seconds
                                </h5>
                            </div>
                        </div>
                        <div class="row d-none d-md-block">
                            <div class="col-12">
                                <!-- Header Roadmap -->
                                <ul class="progress-tracker progress-tracker--text progress-tracker--center">
                                    <li class="progress-step is-complete">
                                        <span class="progress-text top">
                                            <h4>Lauching website for ICO v1</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title">APRIL 2</h4>
                                        </span>
                                    </li>

                                    <li class="progress-step is-complete">
                                        <span class="progress-text top">
                                            <h4>PRE-ICO starts, first steps.</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title">APRIL 10</h4>
                                        </span>
                                    </li>

                                    <li class="progress-step is-active">
                                        <span class="progress-text top">
                                            <h4>First day of ICO, 50% bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title">MAY 1</h4>
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h4>Second step of ICO, 35% bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title">MAY 3</h4>
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h4>Third step of ICO, 25% bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title">MAY 10</h4>
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h4>Fourth step of ICO, 15% bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title">MAY 24</h4>
                                        </span>
                                    </li>
                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h4>End of the ICO</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title">JUNE 24</h4>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-xs-block d-md-none">
            <div class="col-10">
                <button type="button" style="position: relative; margin-left: 0;" class="btn buy btn-lg btn-outline-light btn-block" data-toggle="tooltip"
                    data-placement="top" title="You can't download our wallet now, you need to wait until the website v2 will be finished">Buy coin</button>
            </div>
            <!-- Get whitelisted mobile -->
            <div class="col-10 whitelisted-mobile">
                <h5>Get whitelisted to enjoy a 10% bonus & 10 free tokens :</h5>
                <form class="textbox" class="form" method="post" action="php/mail.php">
                    <input autocomplete="off" name="email" id="email" required="/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)?$/i"
                        type="email" />
                    <label for="email">Email Address</label>
                    <div class="error">
                        Invalid email address
                    </div>
                    <button type="submit" class="btn button_send btn-outline-light">
                        <i class="fa fa-angle-right"></i>
                    </button>
                    <div class="col-12 sent_message">
                        <p>Message send !</p>
                    </div>
                </form>
            </div>
        </div>
        <!-- Features section-->
        <div id="Features" class="row justify-content-center incredible">
            <div class="col-12 col-md-6">
                <h5>Features</h5>
                <h6>
                    For most of us, company or person, creating and deploy a cryptocurrency is still very difficult. It’s much more complicated
                    to make this virtual money valuable by adding it to some trading places.
                    <br> Istrium is creating an online virtual money generator on which you can create and deployed your own
                    cryptocurrency in few clicks. A customer area will provide you informations concerning your blockchain
                    and possibilities to trade and be traded after the creation of your valuable currency.
                </h6>
            </div>
        </div>
        <div class="row justify-content-center section">
            <div class="col-12 col-md-3 feature">
                <div class="feature-ico mx-auto">
                    <img class="icon" src="assets/shapes/icon1.svg">
                </div>
                <h5>Create and deploy your blockchain</h5>
                <h6>Easily, Fastly & Free.</h6>
            </div>
            <div class="col-12 col-md-3 feature">
                <div class="feature-ico">
                    <img class="icon  mx-auto" src="assets/shapes/icon2.svg">
                </div>
                <h5>Exchange for real assets</h5>
                <h6>Istrium Trading Place.</h6>
            </div>
            <div class="col-12 col-md-3 feature">
                <div class="feature-ico mx-auto">
                    <img class="icon" src="assets/shapes/icon3.svg">
                </div>
                <h5>Your new currency is already valuable</h5>
                <h6>Trade and be traded.</h6>
            </div>
        </div>
        <div class="row justify-content-center section2">
            <div class="col-6 col-md-auto">
                <h6>Fast transactions</h6>
            </div>
            <div class="col-6 col-md-auto">
                <h6>Easy to set up</h6>
            </div>
            <div class="col-12 col-md-auto">
                <h6>DPoS – Delegated Proof of Stake</h6>
            </div>
            <div class="col-6 col-md-auto">
                <h6>Quick and Easy</h6>
            </div>
            <div class="col-6 col-md-auto">
                <h6>7/24 support</h6>
            </div>
        </div>
        <div class="row roadmap">
            <div class="col-12">
                <h5 class="title" id="Roadmap">Road map</h5>
                <div class="row justify-content-center">
                    <div class="visuel col-auto">
                        <!-- Roadmap -->
                        <ul class="timeline">
                            <li class="timeline-milestone is-completed timeline-start">
                                <div class="timeline-action">
                                    <h2 class="title">April 10</h2>
                                    <div class="content">
                                        - Start of the ICO
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-milestone is-completed timeline-start">
                                <div class="timeline-action">
                                    <h2 class="title">June 15</h2>
                                    <div class="content">
                                        - End of the ICO
                                        <br>- Token transfer on Istrium mainnet
                                        <br>- Referencing Istrium on trading platform
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-milestone is-current">
                                <div class="timeline-action">
                                    <h2 class="title">Q3 / 2018</h2>
                                    <div class="content">
                                        - Communication plan phase 1
                                        <br>- Website Release Version 2.0 :
                                        <br>&emsp;- User blockchain managing interface
                                        <br>&emsp;- Generator of cryptocurrencies
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-milestone is-future">
                                <div class="timeline-action">
                                    <h2 class="title">Q4 / 2018</h2>
                                    <div class="content">
                                        - Communication plan phase 2
                                        <br>- Website Release Version 3.0 :
                                        <br>&emsp;- Graphics updates
                                        <br>&emsp;- Trading Place Istrium
                                        <br>- Token transfer on Istrium mainnet
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-milestone is-future timeline-end">
                                <div class="timeline-action">
                                    <h2 class="title">Q1 / 2019</h2>
                                    <div class="content">
                                        - Communication plan phase 3
                                        <br>- Website Release Version 4.0 :
                                        <br>&emsp;- Graphics updates
                                        <br>&emsp;- Search engine in associated blockchains
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row diagram align-items-center justify-content-center">
            <div class="col-12 col-md-4" id="ICO">
                <h5>Répartition des coins</h5>
                <div id="chart1" style="width: 100%;"></div>
            </div>
            <div class="col-11 col-md-3">
                <h6>Name :
                    <span>Istrium</span>
                </h6>
                <h6>Ticker :
                    <span>[IST]</span>
                </h6>
                <h6>Nombre en circulation :
                    <span>20.000.000</span>
                </h6>
                <h6>Nombre en circulation max :
                    <span>20.000.000</span>
                </h6>
                <h6>Adresse du contrat :
                    <span>1xp...............zezz..ze</span>
                </h6>
                <h6>Technologie :
                    <span class="grey">Ark-based blockchain</span>
                </h6>
                <h6>Emission rate :
                    <span class="grey">Délégués DPoS</span>
                </h6>
            </div>
            <div class="col-12 col-md-4">
                <h5>Répartition des coins</h5>
                <div id="chart2" style="width: 100%;"></div>
            </div>
        </div>
        <!-- Philosophy section -->
        <div id="Philosophy" class="row philosophy justify-content-center">
            <div class="col-12">
                <h6>
                    <blockquote class="marks">A blockchain for everyone, for everything or anything, become the master of your money.</blockquote>
                </h6>
            </div>
        </div>
        <!-- Team section -->
        <div id="IcoTeam" class="row team align-items-center">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-12 col-md-4 page">
                <h5>Team</h5>
                <h6>We are a tight-knit team, ambitious to become the leaders of automated blockchain creation.</h6>
            </div>
            <div class="col-12 col-md-5">
                <div id="carouselTeam" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Carousel 1 -->
                        <div class="carousel-item active">
                            <div class="row">
                                <!-- People 1 -->
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/lr1-56.jpg">
                                            </div>
                                            <div class="col name">
                                                <h5>Yannis Caussade</h5>
                                                <h6>Full Stack Dev</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <p>Buying the right telescope to take your love of astronomy to the next level is
                                                a big next step in the development of your passion for the stars. In many
                                                ways, it is a big step from someone who is just fooling around with astronomy
                                                to a serious student of the science. But you and I both know that there is
                                                still another big step after buying a telescope before you really know how
                                                to use it.
                                            </p>
                                            <div class="social-icons">
                                                <ul class="row justify-content-around icon-circle icon-zoom list-unstyled list-inline">
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- People 2 -->
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/lr1-56.jpg">
                                            </div>
                                            <div class="col name">
                                                <h5>Yannis Caussade</h5>
                                                <h6>Full Stack Dev</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <p>Buying the right telescope to take your love of astronomy to the next level is
                                                a big next step in the development of your passion for the stars. In many
                                                ways, it is a big step from someone who is just fooling around with astronomy
                                                to a serious student of the science. But you and I both know that there is
                                                still another big step after buying a telescope before you really know how
                                                to use it.
                                            </p>
                                            <div class="social-icons">
                                                <ul class="row justify-content-around icon-circle icon-zoom list-unstyled list-inline">
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel 2-->
                        <div class="carousel-item">
                            <div class="row">
                                <!-- People 1 -->
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/lr1-56.jpg">
                                            </div>
                                            <div class="col name">
                                                <h5>Yannis Caussade</h5>
                                                <h6>Full Stack Dev</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <p>Buying the right telescope to take your love of astronomy to the next level is
                                                a big next step in the development of your passion for the stars. In many
                                                ways, it is a big step from someone who is just fooling around with astronomy
                                                to a serious student of the science. But you and I both know that there is
                                                still another big step after buying a telescope before you really know how
                                                to use it.
                                            </p>
                                            <div class="social-icons">
                                                <ul class="row justify-content-around icon-circle icon-zoom list-unstyled list-inline">
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- People 2 -->
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/lr1-56.jpg">
                                            </div>
                                            <div class="col name">
                                                <h5>Yannis Caussade</h5>
                                                <h6>Full Stack Dev</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <p>Buying the right telescope to take your love of astronomy to the next level is
                                                a big next step in the development of your passion for the stars. In many
                                                ways, it is a big step from someone who is just fooling around with astronomy
                                                to a serious student of the science. But you and I both know that there is
                                                still another big step after buying a telescope before you really know how
                                                to use it.
                                            </p>

                                            <div class="social-icons">
                                                <ul class="row justify-content-around icon-circle icon-zoom list-unstyled list-inline">
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-1">
                <div class="row justify-content-around">
                    <div class="col-3 col-sm-2 col-md-11">
                        <button type="button" class="btn next btn-primary" href="#carouselTeam" role="button" data-slide="next">
                            <i class="fa fa-angle-left"></i>
                        </button>
                    </div>
                    <div class="col-3 col-sm-2 col-md-11">
                        <button type="button" class="btn prev btn-primary" href="#carouselTeam" role="button" data-slide="prev">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ section -->
        <div id="Faq" class="row justify-content-center faq">
            <div class="col-12 col-md-6 col-xl-5">
                <h6>FAQ</h6>
                <div id="accordion">
                    <div class="card active">
                        <div class="card-header" id="faq1">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    When does ICO start ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#accordion">
                            <div class="card-body">
                                The first phase of the ICO starts the X.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How to contact Istrium ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#accordion">
                            <div class="card-body">
                                Contact us by email:
                                <a href="mailto:team@istrium.com">team@istrium.com</a> for technicals askings, and
                                <a href="mailto:ico@istrium.com">ico@istrium.com</a> for questions regarding ICO, or on social networks.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq3">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    With which means of payment can I buy Istrium ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#accordion">
                            <div class="card-body">
                                We accept most of the cryptocurrencies. Go here for more information.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    From which sum can I participate in the ICO ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#accordion">
                            <div class="card-body">
                                In our democratization of blockchains and associated services, we accept all participation from few euros.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq5">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    From what date can I sell my Istrium ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="faq5" data-parent="#accordion">
                            <div class="card-body">
                                Istrium will be reference on the market place few weeks after the end of the ICO.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq6">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    When will the Istrium mainnet be deployed ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="faq6" data-parent="#accordion">
                            <div class="card-body">
                                The Istrium mainnet will be deployed around the May 22. (c.f. roadmap)
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq7">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    What technology Istrium relies on ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="faq7" data-parent="#accordion">
                            <div class="card-body">
                                The istrium is based on Lisk technology.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get whitelisted footer -->
        <div class="row footer justify-content-center d-none d-md-flex">
            <div class="col-8">
                <div class="row justify-content-center bloc">
                    <div class="col-6">
                        <h5>The whitelist</h5>
                        <h6>Get whitelisted to enjoy 30 % bonus</h6>
                    </div>
                    <div class="col-6">
                        <form class="textbox blue" class="form" method="post" action="php/mail.php">
                            <input autocomplete="off" name="email" id="email" required="/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)?$/i"
                                type="email" />
                            <label for="email">Email Address</label>
                            <div class="error">
                                Invalid email address
                            </div>
                            <button type="submit" class="btn button_send btn-outline-light">
                                <i class="fa fa-angle-right"></i>
                            </button>
                            <div class="col-12 sent_message">
                                <p>Message send !</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Last Script -->
    <script src="js/particles.js"></script>
    <script src="js/my.js"></script>
</body>

</html>