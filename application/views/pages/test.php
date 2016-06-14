<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasonchang
 * Date: 2016/5/20
 * Time: 上午9:30
 */
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/front/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .custom-navbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
            font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        /*#lower-nav {*/
        /*position: relative;*/
        /*width: 100%;*/
        /*z-index: 1030;*/
        /*}*/
        @media only screen and (min-width: 768px) {
            .custom-navbar {
                border-bottom: 1px solid transparent;
            }
        }

        @media only screen and (min-width: 1170px) {
            .custom-navbar {
                -webkit-transition: background-color 0.3s;
                -moz-transition: background-color 0.3s;
                transition: background-color 0.3s;
                /* Force Hardware Acceleration in WebKit */
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .custom-navbar.is-fixed {
                /* when the user scrolls down, we hide the header right above the viewport */
                position: fixed;
                top: -60px;
                background-color: rgba(255, 255, 255, 0.9);
                border-bottom: 1px solid #f2f2f2;
                -webkit-transition: -webkit-transform 0.3s;
                -moz-transition: -moz-transform 0.3s;
                transition: transform 0.3s;
            }

            .custom-navbar.is-visible {
                /* if the user changes the scrolling direction, we show the header */
                -webkit-transform: translate3d(0, 50%, 0);
                -moz-transform: translate3d(0, 50%, 0);
                -ms-transform: translate3d(0, 50%, 0);
                -o-transform: translate3d(0, 50%, 0);
                transform: translate3d(0, 50%, 0);
            }
        }
    </style>


</head>

<body>

<!-- Navigation -->
<div class="navbar navbar-default custom-navbar navbar-fixed-top">
    <!-- upper-nav -->
    <div id="upper-nav" class="cotainer-fluid navbar-default" style="background-color: darkgrey; height: 60px;">
        <ul class="nav navbar-nav">
            <li>
                <a href="#">link1</a>
            </li>
            <li>
                <a href="#">link2</a>
            </li>
            <li>
                <a href="#">link3</a>
            </li>
            <li>
                <a href="#">link4</a>
            </li>
        </ul>
    </div>
    <!-- /#upper-nav -->

    <!-- lower-nav -->
    <div id="lower-nav" class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index">Jason's</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/index">Home</a>
                </li>
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <a href="/post">Blog</a>
                </li>
                <li>
                    <a href="/portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /#lower-nav-->
</div>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('/assets/front/img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-m`d-offset-1">
                <div class="site-heading">
                    <h1>Jason's</h1>
                    <hr class="small">
                    <span class="subheading">A Freelancer to Software Dev/Egnr/Eco-Friendly Co-working</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div id="test area">
                <p>
                    <?php
                    echo "APPPATH: " . APPPATH."\n";
                    echo "BASEPATH: " . BASEPATH;
                    echo "<br>";
                    echo "FCPATH: ".FCPATH;
                    echo "<br>";
                    echo "base_url(): ".base_url();
                    ?>
                </p>
                <p>
                    <a href="admin">admin</a><br>
                    <a href="admin/">admin/</a><br>
                    <a href="/admin">/admin</a><br>
                    <a href="/admin/">/admin/</a><br>
                    <a href="./admin">./admin</a><br>
                    <a href="../admin">../admin</a><br>
                    <a href="../../admin">../../admin</a><br>
                    <a href="../admin/">../admin/</a><br>
                    <a href="../../admin/">../../admin/</a>
                </p>
            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="post">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post">
                    <h2 class="post-title">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post">
                    <h2 class="post-title">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class="post-subtitle">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post">
                    <h2 class="post-title">
                        Failure is not an option
                    </h2>
                    <h3 class="post-subtitle">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
            </div>
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<?php
$this->load->view('pages/templates/footer');
?>

<!-- jQuery -->
<script src="/assets/front/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/assets/front/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/assets/front/js/clean-blog.min.js"></script>

<script language="javascript">
    jQuery(document).ready(function ($) {
        var MQL = 1170;

        //primary navigation slide-in effect
        if ($(window).width() > MQL) {
            var headerHeight = $('#upper-nav').height();
            var navbarOnTop = true;
            $(window).on('scroll', {
                    preTop: 0
                },
                function () {
                    var currentTop = $(window).scrollTop();
                    //check if user is scrolling up
                    if (currentTop < this.preTop) {
                        //if scrolling up...
                        if (currentTop == 0) {
                            $('.custom-navbar').removeClass('is-fixed');
                            navbarOnTop = true;
                        }
                    } else {
                        //if scrolling down...
                        $('.custom-navbar').removeClass('is-visible');
                        if (currentTop > headerHeight && !$('.custom-navbar').hasClass('is-fixed')) {
                            $('.custom-navbar').addClass('is-fixed');
                            navbarOnTop = false;
                        }

                    }
                    this.preTop = currentTop;
                });
            $('.custom-navbar').on({
                mouseenter: function () {
                    if (navbarOnTop === false) {
                        $('.custom-navbar').addClass('is-visible');
                    }
                },
                mouseleave: function () {
                    if (navbarOnTop === false) {
                        $('.custom-navbar').removeClass('is-visible');
                    }
                }
            });
        }
    });
</script>

</body>

</html>
