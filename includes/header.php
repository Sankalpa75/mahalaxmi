<?php

$page = "";

$page = (isset($_GET['id'])) ? $_GET['id'] : 'home';

if (!in_array($page, array('home', 'about', 'gallery', 'testimonial', 'graphic-designing', 'cards-printing', 'flex-printing', 'calender-printing', 'book-printing', 'voucher-printing', 'contact', 'quote_send', 'contact_send', 'submit'))) {

    include("404.php");

    exit;
}

?>





<!DOCTYPE html lang="en">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" href="favc.png" type="image/x-icon" />

    <title>

        <?php

        switch ($page) {

            default:

                echo "";

                break;

            case 'home':

                echo "Mahalaxmi Printing";

                break;

            case 'about':

                echo "Mahalaxmi Printing";

                break;

            case 'service':

                echo "Mahalaxmi Printing";

                break;

            case 'quote':

                echo "Mahalaxmi Printing";

                break;

            case 'testimonial':

                echo "Mahalaxmi Printing";

                break;

            case 'gallery':

                echo "Mahalaxmi Printing";

                break;

            case 'contact':

                echo "Mahalaxmi Printing";

                break;

            case 'calender-printing':

                echo "Mahalaxmi Printing";

                break;

            case 'book-printing':

                echo "Mahalaxmi Printing";

                break;

            case 'voucher-printing ':

                echo "Mahalaxmi Printing";

                break;
        }

        ?>

    </title>



    <meta name="keywords" content="<?php

                                    switch ($page) {

                                        default:

                                            echo "";

                                            break;

                                            case 'home':

                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'about':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'service':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'quote':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'testimonial':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'gallery':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'contact':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'calender-printing':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'book-printing':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                
                                            case 'voucher-printing ':
                                
                                                echo "Mahalaxmi Printing";
                                
                                                break;
                                    }

                                    ?>" />



    <meta name="description" content="<?php

                                        switch ($page) {

                                            default:

                                                echo "";

                                                break;

                                                case 'home':

                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'about':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'service':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'quote':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'testimonial':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'gallery':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'contact':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'calender-printing':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'book-printing':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                    
                                                case 'voucher-printing ':
                                    
                                                    echo "Mahalaxmi Printing";
                                    
                                                    break;
                                        }

                                        ?>" />

    <!-- animation -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Style Sheet -->

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css" />





    <!-- Menu -->

    <link rel="stylesheet" href="css/styles.css">

    <script type="text/javascript" src="js/script.js"></script>

    <!-- Social Share -->

    <link rel="stylesheet" type="text/css" href="css/jquery.floating-social-share.css" />

    <script type="text/javascript" src="js/jquery.floating-social-share.js"></script>



    <!-- Script -->

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>



    <!-- <script type="text/javascript" src="js/jquery.floating-social-share.js"></script>-->


    <!-- Fancybox -->
    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>


    <!-- scrolling animation -->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Coda|Lato|Open+Sans:400,700|Questrial|Roboto:400,700|Rokkitt:400,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allan" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Poppins:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->

    <link rel="stylesheet" href="css/owl.carousel.css">

    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/owl.theme.css">

    <link rel="stylesheet" href="css/owl.transitions.css">



    <!-- Gallery -->

    <script type='text/javascript' src='js/unitegallery.min.js'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel='stylesheet' href='css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='js/ug-theme-tilesgrid.js'></script>

    <!-- Gallery -->

    <script type='text/javascript' src='js/unitegallery.min.js'></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">

    <link rel='stylesheet' href='css/unite-gallery.css' type='text/css' />

    <script type='text/javascript' src='js/ug-theme-tilesgrid.js'></script>



    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">





</head>

<body>

    <div class="top-header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <p>
                        <i class="fa fa-phone"></i> &nbsp; +977-98496873940&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-envelope"></i> &nbsp; purnathapa2013@gmail.com
                    </p>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-4">
                    <p>
                        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div data-spy="affix" data-offset-top="50">
        <div class="header">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <a href="./"><img src="images/logo1.png" class="img-responsive center"></a>
                    </div>
                    <div class="col-md-8">
                        <a href="tel:9861435289" style="text-decoration:none;">
                            <h2 class="taptocall center-block visible-xs text-center"><i class="fa fa-phone" aria-hidden="true"></i> Tap To Call</h2>
                        </a>


                        <nav id="menu">
                            <label for="tm" id="toggle-menu">Menu <span class="drop-icon">???</span></label>
                            <input type="checkbox" id="tm">
                            <ul class="main-menu clearfix">
                                <li class="<?php if ($page == 'home') {
                                                echo 'active';
                                            } ?>"><a href='./'>Home</a></li>
                                <li class="<?php if ($page == 'about') {
                                                echo 'active';
                                            } ?>"><a href='./about'>About</a></li>
                                <li><a href="#">Services <span class="drop-icon">???</span> <label title="Toggle Drop-down" class="drop-icon" for="sm1">???</label></a>
                                    <input type="checkbox" id="sm1">
                                    <ul class="sub-menu">

                                        <li><a href="./book-printing">Book Printing</a></li>
                                        <li><a href="./voucher-printing">Voucher Printing</a></li>
                                        <li><a href="./calender-printing">Calender Printing</a></li>
                                        <li><a href="./cards-printing">Cards Printing</a></li>
                                        <li><a href="./flex-printing">Flex Printing</a></li>
                                        <li><a href="./graphic-designing">Graphic Designing</a></li>

                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'gallery') {
                                                echo 'active';
                                            } ?>"><a href='./gallery'>Gallery</a></li>
                                <li class="<?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?>"><a href='./contact'>Contact</a></li>
                            </ul>
                        </nav>

                    </div>








                </div>

            </div>
        </div>
    </div>


    <!--<script src="js/jquery.js"></script>-->

    <script type="text/javascript">
        $(document).ready(function() {



            $("#owl-demo1").owlCarousel({

                navigation: true,

                navigationText: ["", ""],

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 1,

                itemsDesktop: [1199, 1],

                itemsDesktopSmall: [979, 1],

                stopOnHover: true,






            });


        });
    </script>

    <script src="js/owl.carousel.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({



                navigation: true,

                slideSpeed: 600,

                paginationSpeed: 500,

                singleItem: true,

                autoPlay: true,

                stopOnHover: true,

                navigationText: ["<", ">"],

                transitionStyle: "fade",



                /*

                transitionSty1le : "fade"

                transitionStyle : "backSlide"

                transitionStyle : "goDown"

                transitionStyle : "fadeUp"

                */

            });

            $("#owl-demo2").owlCarousel({
                navigation: true,

                navigationText: ["<", ">"],
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items: 6,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 2],
                stopOnHover: true,


            });
        });
    </script>

    <script type="text/javascript">
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>