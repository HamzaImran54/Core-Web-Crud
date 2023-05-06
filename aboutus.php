<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/recaptcha.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Syne:400,500,600,700,800&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Syne:400,500,600,700,800&amp;display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500,600,700,800,400i,500i,600i,700i,800i&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500,600,700,800,400i,500i,600i,700i,800i&amp;display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-stepper {
    z-index: 0
    }
    
    #progressbar-2 {
    color: #455A64;
    }
    
    #progressbar-2 li {
    list-style-type: none;
    font-size: 13px;
    width: 33.33%;
    float: left;
    position: relative;
    }
    
    #progressbar-2 #step1:before {
    content: '\f058';
    font-family: "Font Awesome 5 Free";
    color: #fff;
    width: 37px;
    margin-left: 0px;
    padding-left: 0px;
    }
    
    #progressbar-2 #step2:before {
    content: '\f058';
    font-family: "Font Awesome 5 Free";
    color: #fff;
    width: 37px;
    }
    
    #progressbar-2 #step3:before {
    content: '\f058';
    font-family: "Font Awesome 5 Free";
    color: #fff;
    width: 37px;
    margin-right: 0;
    text-align: center;
    }
    
    #progressbar-2 #step4:before {
    content: '\f111';
    font-family: "Font Awesome 5 Free";
    color: #fff;
    width: 37px;
    margin-right: 0;
    text-align: center;
    }
    
    #progressbar-2 li:before {
    line-height: 37px;
    display: block;
    font-size: 12px;
    background: #c5cae9;
    border-radius: 50%;
    }
    
    #progressbar-2 li:after {
    content: '';
    width: 100%;
    height: 10px;
    background: #c5cae9;
    position: absolute;
    left: 0%;
    right: 0%;
    top: 15px;
    z-index: -1;
    }
    
    #progressbar-2 li:nth-child(1):after {
    left: 1%;
    width: 100%
    }
    
    #progressbar-2 li:nth-child(2):after {
    left: 1%;
    width: 100%;
    }
    
    #progressbar-2 li:nth-child(3):after {
    left: 1%;
    width: 100%;
    background: #c5cae9 !important;
    }
    
    #progressbar-2 li:nth-child(4) {
    left: 0;
    width: 37px;
    }
    
    #progressbar-2 li:nth-child(4):after {
    left: 0;
    width: 0;
    }
    
    #progressbar-2 li.active:before,
    #progressbar-2 li.active:after {
    background: #6520ff;
    }
    
    
    
    .image-container {
      position: relative; /* set the container to be positioned */
       /* make the container fit to the image size */
     
    }
    
    .text-overlay {
      position: absolute; /* position the text on top of the image */
      top: 50%; /* position the top of the text at the center of the container */
      left: 50%; /* position the left of the text at the center of the container */
      transform: translate(-50%, -50%); /* move the text up and left by half of its own width and height */
      color: #fff; /* set the text color */
      text-align: center; /* center the text horizontally */
    }
    
    .text-overlay h1 {
      font-size: 3em; /* set the font size for the heading */
    }
    
    .text-overlay p {
      font-size: 1.5em; /* set the font size for the paragraph */
    }
    
    
    .glow {
      color: #5b3232; /* set text color to white */
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #9dff00, 0 0 70px #9dff00, 0 0 80px #9dff00, 0 0 100px #9dff00, 0 0 150px #9dff00; /* set multiple shadows with different blur radius and colors */
      animation: glowing 2s ease-in-out infinite; /* animate the text */
    }
    
    @keyframes glowing {
      0% {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #9dff00, 0 0 70px #9dff00, 0 0 80px #9dff00, 0 0 100px #9dff00, 0 0 150px #9dff00; /* start with the same shadows as in the initial state */
      }
      50% {
        text-shadow: none; /* remove all shadows */
      }
      100% {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #9dff00, 0 0 70px #9dff00, 0 0 80px #9dff00, 0 0 100px #9dff00, 0 0 150px #9dff00; /* end with the same shadows as in the initial state */
      }
    }
    
    
      </style>
</head>
<body>
    <section class="menu1 back-ground" once="menu" id="menu1-u">
        <nav class="navbar navbar-dropdown navbar-expand-lg" style="background-color: rgb(255, 255, 255);"> 
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="#">
                            <img src="assets/images/logo.png" alt="" style="height: 3rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap glow"><a class="navbar-caption text-black display-7" href="#">DHH STUDIO</a></span>
                </div>            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="index.html" aria-expanded="false">HOME
                            <div class="line-animation"></div></a></li>
                            <li class="nav-item">
                                <a class="nav-link link text-black display-4" href="aboutus.html" aria-expanded="false">ABOUT US
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-black display-4" href="order.html" aria-expanded="false">Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-black display-4" href="index.html#features1-w" aria-expanded="false">Customer Care
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-black display-4" href="index.html#features1-w" aria-expanded="false">Track My Order
                                </a>
                            </li> 
                             <li class="nav-item">
                                <a class="nav-link link text-black display-4" href="login.html" aria-expanded="false">Login/Signup
                                </a>
                            </li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#pricing1-11" aria-expanded="false">SHOP<div class="line-animation"></div></a></li></ul>
    
                     <div class="icons-menu">
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-google socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </section>
    
    <section class="features1 cid-sv2nIu8Thc" id="features1-w mt-5">
    

    
    
        <div class="container mt-5">
            <h3 class="mbr-section-title mbr-fonts-style align-center display-1"><strong>who we are</strong></h3>                                   
            <div class="row">
                <div class="card col-12 col-md-6 col-lg-4 text-success">
                    <div class="card-wrapper bg-dark">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <span class="mbr-iconfont mobi-mbri-hearth mobi-mbri"></span>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>MADE WITH LOVE</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Magna at erat pretium mattis id non odio quisque nec tempor sapien quis eget ligula ispsum sagittis.</p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-4 ">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri"></span>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>FOR YOUR HAPPINESS</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Magna at erat pretium mattis id non odio quisque nec tempor sapien quis eget ligula ispsum sagittis.</p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-4 text-success">
                    <div class="card-wrapper bg-dark">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <span class="mbr-iconfont mobi-mbri-sun mobi-mbri"></span>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>NATURAL CARE</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Magna at erat pretium mattis id non odio quisque nec tempor sapien quis eget ligula ispsum sagittis.</p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-4 ">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri"></span>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>FOR YOUR HAPPINESS</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Magna at erat pretium mattis id non odio quisque nec tempor sapien quis eget ligula ispsum sagittis.</p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-4 ">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri"></span>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>FOR YOUR HAPPINESS</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Magna at erat pretium mattis id non odio quisque nec tempor sapien quis eget ligula ispsum sagittis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>