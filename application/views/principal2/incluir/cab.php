<body>
<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="<?php echo  __MAQ2__;?>images/logo.png" alt=""/>
            </div>
            <div class="h_menu">
                <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
                <nav>
                    <ul class="menu list-unstyled">
                        <li class="activate"><a href="<?php echo site_url("principal2");?>">INICIO</a></li>
                        <li><a href="#">MUNICIPIO</a>
                            <ul class="sub-menu list-unstyled">
                                <li><a href="<?php echo site_url("principal2/ubicacion");?>">Ubicacion</a></li>
                                <li><a href="<?php echo site_url("principal2/capital");?>">Capital</a></li>
                                <li><a href="<?php echo site_url("principal2/simbolos");?>">Simbolos</a></li>
                                <li><a href="<?php echo site_url("principal2/parroquias");?>">Parroquias</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url("principal2/noticias");?>">NOTICAS</a></li>
                        <li><a href="#">GOBIERNO MUNICIPAL</a>
                            <ul class="sub-menu list-unstyled">
                                <li>
                                    <a href="#">Alcalde</a>
                                    <ul class="list-unstyled">
                                        <li><a href="<?php echo site_url("principal2/biografia");?>">Biografía</a></li>
                                        <li><a href="<?php echo site_url("principal2/planGob");?>">Plan de Gobierno</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Alcaldia</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="blog.html">BLOG</a></li>-->
                        <li><a href="feature.html">CONVENIOS</a></li>
                    </ul>
                </nav>
                <script src="<?php echo __MAQ2__?>js/menu.js" type="text/javascript"></script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php if(isset($slider)){?>
<div id="fwslider"><!-- start slider -->
    <div class="slider_container">
        <div class="slide">
            <!-- Slide image -->
            <img src="<?php echo __MAQ2__?>images/slider0.jpg">
        </div>
        <div class="slide">
            <!-- Slide image -->
            <img src="<?php echo __MAQ2__?>images/slider1.jpg">
            <!-- /Slide image -->
            <!-- Texts container -->
            <div class="slide_content">
                <div class="slide_content_wrap">
                    <!-- Text title -->
                    <h4 class="title">Turismo para todos!</h4>
                    <!-- /Text title -->
                    <!-- Text description -->
                    <p class="description">Conoce el municipio<br>
                    Atractivos<br>Pueblos Turísticos<br>Gastronomía<br>Trapiches<br>
                    <a href="#" >Ver mas</a></p>
                    <!-- /Text description -->
                </div>
            </div>
            <!-- /Texts container -->
        </div>
        <!-- /Duplicate to create more slides -->
        <div class="slide">
            <img src="<?php echo __MAQ2__?>images/slider2.jpg">

            <div class="slide_content">
                <div class="slide_content_wrap">
                    <h4 class="title">Personajes</h4>

                    <p class="description">................</p>
                </div>
            </div>
        </div>
        <div class="slide">
            <img src="<?php echo __MAQ2__?>images/slider2.jpg">

            <div class="slide_content">
                <div class="slide_content_wrap">
                    <h4 class="title">Patrimonio</h4>

                    <p class="description">................</p>
                </div>
            </div>
        </div>
        <!--/slide -->
    </div>
    <div class="timers"></div>
    <div class="slidePrev"><span></span></div>
    <div class="slideNext"><span></span></div>
</div>
<?php }?>
<!--/slider -->