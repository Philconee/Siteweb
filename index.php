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
    <div class="deco">
        <div class="d-none d-md-block" id="particles-js"></div>
        <img id="deco" class="d-none d-md-block w-100" src="assets/shapes/toutlesite.svg">
        <div id="deco-mobile" class="d-block d-md-none"></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <i class="fa fa-star yolo d-none d-md-block" id="yolo"></i>
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
                    <button type="button" class="btn d-none d-md-block buy btn-lg btn-outline-light" data-container="body" 
                        data-placement="bottom" href="google.com">Buy coin</button>
                </li>
            </ul>
        </div>
    </nav>
    <div id="container" class="container-fluid" style="margin-top: -5%;">
        <div class="row justify-content-center header">
            <div class="col-12 col-md-4 slogan">
                <h5>
                    Istrium.
                </h5>
                <h1 class="cd-headline clip is-full-width">
                    <span class="cd-words-wrapper">
                        <b class="is-visible">Trade and be traded</b>
                        <b>One-click blockchain for free</b>
                        <b>ICO for IPO</b>
                    </span>
                </h1>
                <div class="row bouton">
                    <div class="col-12 col-md-6">
                        <button type="button" class="btn btn-red btn-lg round btn-block">Whitepaper
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <button type="button" class="btn btn-link btn-lg clear">Présentation</button>
                    </div>
                </div>
                <div class="whitelisted d-none d-md-block" style="margin-left: 1vw">
                    <h5>Get whitelisted to enjoy a 20% bonus & 20 free Istrium :</h5>
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
                <div class="card" style="margin-top: 4vw">
                    <div class="card-body presale">
                        <h6 class="card-title">Pre-sale starts in :</h6>
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
                                <ul class="progress-tracker progress-tracker--text progress-tracker--center">
                                    <li class="progress-step is-active">
                                        <span class="progress-text top">
                                            <h4 style="font-weight: bold;">Website release</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title" style="font-weight: bold;">APRIL 2</h4>
                                            <!--Shorter summary text -->
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h4 style="font-weight: bold;">Pre-ICO starts</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title" style="font-weight: bold;">APRIL 10</h4>
                                            <!--Shorter summary text -->
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h5 style="font-weight: bold;">50%</h5>
                                            <h4 style="font-weight: bold">bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title" style="font-weight: bold;">MAY 1</h4>
                                            <!--Shorter summary text -->
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h5 style="font-weight: bold;">35%</h5>
                                            <h4 style="font-weight: bold">bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title" style="font-weight: bold;">MAY 3</h4>
                                            <!--Shorter summary text -->
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h5 style="font-weight: bold;">25%</h5>
                                            <h4 style="font-weight: bold;">bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title" style="font-weight: bold;">MAY 10</h4>
                                            <!--Shorter summary text -->
                                        </span>
                                    </li>

                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h5 style="font-weight: bold;">15%</h5>
                                            <h4 style="font-weight: bold;">bonus</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title" style="font-weight: bold;">MAY 24</h4>
                                            <!--Shorter summary text -->
                                        </span>
                                    </li>
                                    <li class="progress-step">
                                        <span class="progress-text top">
                                            <h4 style="font-weight: bold;">ICO ends</h4>
                                        </span>
                                        <span class="progress-marker"></span>
                                        <span class="progress-text">
                                            <h4 class="progress-title" style="font-weight: bold;">JUNE 24</h4>
                                            <!--Shorter summary text -->
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
                <button type="button" style="position: relative; margin-left: 0; margin-bottom: 10%;" class="btn buy btn-lg btn-outline-light btn-block" data-toggle="tooltip"
                    data-placement="top" title="You cant download our wallet now, you need to wait until the website v2 will be finished">Buy coin</button>
            </div>
            <div class="col-10 whitelisted-mobile">
                <h5>Get whitelisted to enjoy a 20% bonus & 20 free Istrium :</h5>
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
	</div>
        <div id="Features" class="row justify-content-center incredible">
             <div class="col-12 col-md-7">
                 <h5 style="font-weight:bold;">What is Istrium ?</h5>
                 <h6>
                 
           <br><br><span style="font-weight:bold;">Istrium is the first
company who permit blockchain deployment for free in less than 5
minutes.</span><br>
           For most of us, company or person, creating and deploy a
cryptocurrency is still very difficult.
           It’s much more complicated to make this virtual money
valuable by adding it to some trading places.
           <hr size=5 width=20% align=center>
              <span style="font-weight:bold;">Istrium is creating on
<i>www.istrium.com</i> :</span><div align="left"><br>
           <ul>
             <li style="margin-left:15%">a virtual money generator on which you can deployed
your cryptocurrency in few clicks.</li>
             <li style="margin-left:15%">a customer area will provide you informations
concerning your blockchain</li>
             <li style="margin-left:15%">a trading place to trade and be traded after the
creation of your cryptocurrency.</li>
           </ul>
           </div>
            <hr size=5 width=20% align=center>
            <span style="font-weight:bold;">After the creation of your
cryptocurrency, Istrium add it automatically to our trading
place.</span><br><br>
           It will provide you to have the possibility to trade on the
real market, & be traded. <br><br> Consequently you can deploy your
valuable currency in few minutes.<br><br>
            You can have unlimited ideas about the possibilities that
Istrium permit to do.<br>
             <hr size=5 width=20% align=center>
         </h6>
             </div>
         </div>


        <div class="row justify-content-center section">
            <div class="col-12 col-md-3 feature">
                <div class="feature-ico mx-auto">
                    <img class="icon" src="assets/shapes/icon1.svg">
                </div>
                <h5>Create and deploy your blockchain</h5>
                <h6>Easy, Fast & Free.</h6>
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
        <div id="Roadmap"class="row justify-content-center section2" style="margin-bottom: 95%;">
            <div class="col-6 col-md-auto">
                <h6>Fast transactions</h6>
            </div>
            <div class="col-12 col-md-auto">
                <h6>DPoS – Delegated Proof of Stake</h6>
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
                    </div>
                    </div>
                    </div>
                    <div class="row roadmap">
            <div class="col-12">
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
	</div>
  <div id="ICO" style="margin-bottom:50%"></div>
 <div id="IcoTeam" class="row team align-items-center" style="margin-bottom: 2%;">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-12 col-md-4 page">
                <h5 style="font-weight: bold;">Team</h5>
                <h6>We are a tight-knit team, ambitious to become the leaders of automated blockchain creation.</h6>
            </div>
            <div class="col-12 col-md-5">
                <div id="carouselTeam" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/HPI-2.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Hugo PICQUET</h5>
                                                <h6>Co-Founder of Istrium</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                          <center><span style="font-weight:bold;">IT CyberSecurity Student</span><br><br>Passionate about new technologies, one night while studying the blockchain, he imagines with Leo that the world could change if everyone had their own cryptocurrency.</center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/LPE-3.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Léo PECHIN</h5>
                                                <h6>Co-founder of Istrium</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                          <center><span style="font-weight:bold;">IT Programming Student</span><br><br>Passionate about new technologies, one night while studying the blockchain, he imagines with Leo that the world could change if everyone had their own cryptocurrency.</center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
			 <div class="carousel-item">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/YCH-2.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Yannis Chaumard</h5>
                                                <h6>Designer</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                          <center><span style="font-weight:bold;">Designer</span><br><br>Passionate about visual creation and the arts. he brings to Istrium his talent for image, design, marketing and communication.</center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/YCA-2.jpg">
                                            </div>
                                            <div class="col name">
                                                <h5>Yannis Caussade</h5>
                                                <h6>Programmer</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                    <center><span style="font-weight:bold;">Web programmer</span><br><br>Immersed in computer science from an early age, he brings to Istrium his
programming skills and entrepreneurial dynamism.</center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
			 <div class="carousel-item">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/TPI-3.jpg">
                                            </div>
                                            <div class="col name">
                                                <h5>Thierry PICQUET</h5>
                                                <h6>Co-Founder of Istrium</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                          <center><span style="font-weight:bold;">Cybersecurity & Infrastructure expert</span><br><br>20 ans of experience prestigious customers<br><br>
International Olympique Committee, <br>Safran, Verifone, Air France & many others.</center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/lr1-56.j">
                                            </div>
                                            <div class="col name">
                                                <h5>Hugo REVERT</h5>
                                                <h6>Representative in US</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                    <center><span style="font-weight:bold;">Student in ...</span><br><br>Hugo has assets in communication, he is representative of the company Istrium in the United States. He is a student in big data and passionated to develop our project all together</center>
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
               <div id="IcoTeam" class="row team align-items-center" style="margin-bottom: 15%">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-12 col-md-4 page">
                <h5 style="font-weight: bold;">Advisor</h5>
                <h6>We are a tight-knit team, ambitious to become the leaders of automated blockchain creation.</h6>
            </div>
            <div class="col-12 col-md-5">
                <div id="carouselTeam2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/SAB-2.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Stéphane Abbadie</h5>
                                                <h6>Advisor<br>-<br> Bank Card Industry Expert</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <center><span style="font-weight:bold;">Manager QA & Masterisation Verifone France</span><br><br>Actually software QA, pakaging and test manager for the bank card industry leader, Stephane is sharing with us his passion for the blockchain and cryptocoins,developping software and advising Istrium organization.</center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/GKU-4.jpeg">
                                            </div>
                                            <div class="col name">
                                                <h5>Guillaume Kutter</h5>
                                                <h6>Advisor<br>-<br>Infrastructure & Cybersecurity expert</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
                                             <center><span style="font-weight:bold;">Studies & project manager SFR group direction</span><br><br>Guillaume is a high level network & Security architect, managing IT studies in international telecom sector. He is advising istrium on infrastructure & Cybersecurity. Sharing with us his passion for tennis & footbal</center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
			                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/CLE-2.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Claudine Leprince</h5>
                                                <h6>Advisor <br>-<br> International Business Development expert</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
					  <center><span style="font-weight:bold;">Head of Business Development Bee Bee Automotive</span><br><br>Business Development Consultant over 20 years in international sales, marketing and management in many different industries and markets. Entrepreneurial mindset, result oriented, skilled at developing innovative solutions to problems and creating value. Engaged in women at work and social initiatives.</center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/BMI2.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Bernard Mion</h5>
                                                <h6>Advisor<br>-<br> Bank card industry expert</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
					  <center><span style="font-weight:bold;">Manager Support Niveau 3 chez Verifone</span><br><br>Actually working for the bank card industry leader, as expert support manager. Bernard, as a natural leader, is driving peoples to provide the best of themselves. Engaged in social activities, is ethical attitude is a key message for Istrium values.</center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/JNE-2.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Jean Netry-Valère</h5>
                                                <h6>Advisor<br>-<br>IT & innovation in organization</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
					  <center><span style="font-weight:bold;">Senior Office 365 & SharePoint Consultant at AEROW Swiss</span><br><br>Jean is a very proficient IT consultant working in different industries. Very talented he assimilates and understands new technology rapidly. Engaged in several blockchain topics, he is providing high level and positive advices.</center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 p-sm-4">
                                        <div class="row align-items-center">
                                            <div class="col-4 avatar">
                                                <img class="mw-100" src="assets/FPO-2.png">
                                            </div>
                                            <div class="col name">
                                                <h5>Franck POTONE</h5>
                                                <h6>Advisor<br>-<br>Sales, marketing & negociations</h6>
                                            </div>
                                        </div>
                                        <div class="bio">
					  <center><span style="font-weight:bold;">CEO Officiz</span><br>Specialized in management, sales, negociation & marketing & finance, Franck is a serial entrepreneur with
more than 20 years of experience as CEO and General Directions. Innovation is a leitmotiv for him.<br></center>
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
                        <button type="button" class="btn next btn-primary" href="#carouselTeam2" role="button" data-slide="next">
                            <i class="fa fa-angle-left"></i>
                        </button>
                    </div>
                    <div class="col-3 col-sm-2 col-md-11">
                        <button type="button" class="btn prev btn-primary" href="#carouselTeam2" role="button" data-slide="prev">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
       <div id="Faq" class="row justify-content-center faq">
            <div class="col-12 col-md-6 col-xl-5">
                <h6 style="font-weight: bold;">FAQ</h6>
                <div id="accordion">
                    <div class="card active">
                        <div class="card-header" id="faq1">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    When does the ICO start ?
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
                                <a href="mailto:ico@istrium.com">ico@istrium.com</a> or on our social networks.
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
                                We accept all the cryptocurrencies available on bittrex (near 200). Go here for more informations :
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
                            We accept participations from few euros.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq5">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    When can I sell my Istrium ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="faq5" data-parent="#accordion">
                            <div class="card-body">
                                Istrium will be referenced on marketplaces few weeks after the end of the ICO.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq6">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    What will happen to the unsold tokens ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="faq6" data-parent="#accordion">
                            <div class="card-body">
                                The unsold tokens will be burned. Only the tokens that were sold will be restored on the mainnet.
                            </div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="faq7">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Once the mainnet is deployed, what will be the cost of a transaction ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="faq7" data-parent="#accordion">
                            <div class="card-body">
                                  On the mainnet, all the transactions will be free and fees less.  
                            </div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="faq8">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    When the Istrium mainnet will be deployed ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="faq8" data-parent="#accordion">
                            <div class="card-body">
                                The Istrium mainnet will be deployed during Q3 2018. (c.f. roadmap)
                            </div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="faq9">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    What technology Istrium relies on ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="faq9" data-parent="#accordion">
                            <div class="card-body">
                                   Istrium is based on Lisk technology.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq10">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    If you want to invest more than 20000 dollars before the beginning of the pre-ICO, get a bigger bonus and engage a long term collaboration.
                                </button>
                            </h5>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="faq10" data-parent="#accordion">
                            <div class="card-body">
                              Contact us by email at  <a href="mailto:ico@istrium.com">ico@istrium.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer justify-content-center d-none d-md-flex">
            <div class="col-8">
                <div class="row justify-content-center bloc">
                    <div class="col-6">
                        <h5>The whitelist</h5>
                        <h6>Get whitelisted to enjoy 20 % bonus & 20 free Istrium</h6>
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

    <script src="js/particles.js"></script>
    <script src="js/my.js"></script>
</body>


</html>
