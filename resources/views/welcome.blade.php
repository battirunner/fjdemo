<!DOCTYPE html>
<html lang="ja">
<head>
    <title>FUTURE JUNCTION 前へ、進め</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/logo2.png" type="image/icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">

<div class="page_loader"></div>

<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                　　<a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="/">                   
                         <img src="assets/img/logos/fjlogoskelton.png" alt="logo">
                    </a>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button> -->
                                <a class="open-offcanvas" href="#">
                                    <span>Menu</span>
                                    <span class="fa fa-bars"></span>
                                </a>
                    <!-- <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav w-100 justify-content-center">
                            
                        </ul>
                        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                            <li class="nav-item">
                                <a class="open-offcanvas" href="#">
                                    <span>Menu</span>
                                    <span class="fa fa-bars"></span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->

<!-- Banner start -->
<div class="banner banner_video_bg" id="banner">
    <div class="pattern-overlay">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=woK4JwNTKSc',containment:'.banner_video_bg', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h1 data-animation="animated fadeInDown delay-05s"> 前へ、<br/>FUTURE JUNCTION</h1>
                            <p data-animation="animated fadeInUp delay-10s">
                                どんな　未来と　出会うだろう？
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="{{ url('about') }}" class="btn btn-lg btn-round btn-theme">私たちについて</a>
                            <a data-animation="animated fadeInUp delay-12s" href="https://213matching.futurejunction.co.jp/" class="btn btn-lg btn-round btn-white-lg-outline">プロジェクト</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h1 data-animation="animated fadeInDown delay-05s">生まれる、可能性<br/>「未来交差点」</h1>
                            <p data-animation="animated fadeInUp delay-10s">
                            いったい　何が　起こるだろう？
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="{{ url('about') }}" class="btn btn-lg btn-round btn-theme">私たちについて</a>
                            <a data-animation="animated fadeInUp delay-12s" href="https://213matching.futurejunction.co.jp/" class="btn btn-lg btn-round btn-white-lg-outline">プロジェクト</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h1 data-animation="animated fadeInUp delay-05s">ひらめく、発想<br/>FUTURE JUNCTION</h1>
                            <p data-animation="animated fadeInUp delay-10s">
                               ぼくたちに　何が　できるだろう？
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="{{ url('about') }}" class="btn btn-lg btn-round btn-theme">私たちについて</a>
                            <a data-animation="animated fadeInUp delay-12s" href="https://213matching.futurejunction.co.jp/" class="btn btn-lg btn-round btn-white-lg-outline">プロジェクト</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
<!-- banner end -->

<!-- Search area start -->

<!-- Search area start -->

<!-- Featured properties start -->

<!-- Featured properties end -->

<!-- services start -->

<!-- services end -->

<!-- Recent Properties start -->

<!-- Recent Properties end -->

<!-- Pricing tables start -->

<!-- Pricing tables end -->

<!-- Agent start -->

<!-- Agent end -->

<!-- Blog 2 start -->

<!-- Blog 2 start -->

<!-- partner start -->

<!-- partner end -->

<!-- Footer start -->

<!-- Footer end -->

<!-- Full Page Search -->


<!-- Property Video Modal -->


<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo text-center">
                    <img src="assets/img/logos/fjlogoskelton.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                   <!--  <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li> -->
                    <li class="menu-item"><a href="{{ url('about') }}">About  US</a></li>
                    <li class="menu-item"><a href="">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/FutureJunctionInc/?timeline_context_item_type=intro_card_work&timeline_context_item_source=100011328955003"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/559JJ3dS3dqxPyX"><i class="fa fa-twitter"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-vk"></i></a></li> -->
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.selectBox.js"></script>
<script src="assets/js/rangeslider.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/leaflet-providers.js"></script>
<script src="assets/js/leaflet.markercluster.js"></script>
<script src="assets/js/maps.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>

</body>
</html>