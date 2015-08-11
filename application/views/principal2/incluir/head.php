<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset=utf-8>
    <title>Alcaldia De Ejido</title>
    <!-- Bootstrap -->
    <link href="<?php echo __MAQ2__;?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo __MAQ2__;?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="<?php echo __MAQ2__;?>css/blue.css" rel="stylesheet" type="text/css" media="all" />

    <!----font-Awesome----->
    <link rel="stylesheet" href="<?php echo __MAQ2__;?>fonts/css/font-awesome.min.css">
    <!----font-Awesome----->
    <!-- start plugins -->
    <script type="text/javascript" src="<?php echo __MAQ2__;?>js/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo __MAQ2__;?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo __MAQ2__;?>js/bootstrap.min.js"></script>
    <!--start slider -->
    <link rel="stylesheet" href="<?php echo __MAQ2__;?>css/fwslider.css" media="all">
    <script src="<?php echo __MAQ2__;?>js/jquery-ui.min.js"></script>
    <script src="<?php echo __MAQ2__;?>js/css3-mediaqueries.js"></script>
    <script src="<?php echo __MAQ2__;?>js/fwslider.js"></script>
    <!--end slider -->
    <!-- must have -->
    <link href="<?php echo __MAQ2__;?>css/allinone_carousel.css" rel="stylesheet" type="text/css">
    <script src="<?php echo __MAQ2__;?>js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo __MAQ2__;?>js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <script src="<?php echo __MAQ2__;?>js/allinone_carousel.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo __MAQ__ ;?>css/jquery.bxslider.css"/>
    <script type="text/javascript" src="<?php echo __MAQ__ ;?>js/jquery.bxslider.js"></script>
    <!--[if IE]><script src="<?php echo __MAQ2__;?>js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
    <!-- must have -->
    <script>
        jQuery(function() {

            jQuery('#allinone_carousel_charming').allinone_carousel({
                skin: 'charming',
                width: 990,
                height: 454,
                responsive:true,
                autoPlay: 3,
                resizeImages:true,
                autoHideBottomNav:false,
                showElementTitle:false,
                verticalAdjustment:50,
                showPreviewThumbs:false,
                //easing:'easeOutBounce',
                numberOfVisibleItems:5,
                nextPrevMarginTop:23,
                playMovieMarginTop:0,
                bottomNavMarginBottom:-10
            });
        });
    </script>
    <!-- Owl Carousel Assets -->
    <link href="<?php echo __MAQ2__;?>css/owl.carousel.css" rel="stylesheet">
    <script src="<?php echo __MAQ2__;?>js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText : ["", ""],
                rewindNav : false,
                scrollPerPage : false,
                pagination : true,
                paginationNumbers : false,
            });

            $('#clint-slider').bxSlider({
                pager: false,
                minSlides: 1,
                maxSlides: 5,
                moveSlides: 2,
                slideWidth: 210,
                slideMargin: 25,
                prevSelector: $('#client-prev'),
                nextSelector: $('#client-next'),
                prevText: '<i class="icon-left-open"></i>',
                nextText: '<i class="icon-right-open"></i>'
            });

        });
    </script>
    <!-- //Owl Carousel Assets -->
    <!-- start circle -->

</head>