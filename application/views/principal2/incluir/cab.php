<body>
<div class="header_img">
</div>
<div class="h_menu">
    <div class="logo" style="padding: 2px;">
        <img src="<?php echo __MAQ2__?>images/logo.png">
    </div>
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
            <li><a href="<?php echo site_url("principal2/noticias");?>">NOTICIAS</a></li>
            <li><a href="#">GOBIERNO MUNICIPAL</a>
                <ul class="sub-menu list-unstyled">
                    <li>
                        <a href="#">Alcalde</a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url("principal2/biografia");?>">Biografía</a></li>
                            <li><a href="<?php echo site_url("principal2/planGob");?>">Plan de Gobierno</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Alcaldia</a>
                        <ul class="sub-menu list-unstyled">
                            <li><a href="<?php echo site_url("principal2/concurso");?>">Concurso y lisitaciones</a></li>
                            <li><a href="<?php echo site_url("principal2/gerencias");?>">Gerencias</a></li>
                            <li><a href="<?php echo site_url("principal2/institutos");?>">Institutos Autonomos</a></li>
                            <li><a href="<?php echo site_url("principal2/ordenanzas");?>">Ordenanzas y Decretos</a></li>
                            <li><a href="<?php echo site_url("principal2/tramites");?>">Tramites y Servicios</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--<li><a href="blog.html">BLOG</a></li>-->
            <li><a href="feature.html">CONVENIOS</a></li>
        </ul>
    </nav>
    <script src="<?php echo __MAQ2__?>js/menu.js" type="text/javascript"></script>
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
                    <p class="description">Conoce el municipio
                        <br><a  href="<?php echo site_url("principal2/serviciosCat/4");?>">Atractivos</a>
                        <br><a  href="<?php echo site_url("principal2/serviciosCat/5");?>">Pueblos Turísticos</a>
                        <br><a  href="<?php echo site_url("principal2/serviciosCat/6");?>">Gastronomía</a>
                        <br><a  href="<?php echo site_url("principal2/serviciosCat/8");?>">Trapiches</a><br>
                    <a href="<?php echo site_url("principal2/turismo");?>" >Ver mas</a></p>
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