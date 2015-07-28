<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a href="<?php echo site_url("principal/");?>" class="brand">
                <h5 class="titMenu">Alcaldia De Ejido</h5>
                <!-- This is website logo -->
            </a>
            <!-- Navigation button, visible on small resolution -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-menu"></i>
            </button>
            <!-- Main navigation -->
            <div class="nav-collapse collapse pull-right">
                <ul class="nav" id="top-navigation">
                    <li>
                        <a href="<?php echo site_url("principal/municipio");?>">Municipio</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("principal/noticia");?>">Noticias</a>
                    </li>
                    <li>
                        <a href="#clients">Convenios y Alianzas</a>
                    </li>
                    <li id="gobie" onmouseover="muestraMenu();" onmouseout="ocultaMenu();">
                        <a href="#">Gobierno Municipal</a>
                        <ul id="gob" style="display:none; ">
                            <li><a href="<?php echo site_url("principal/alcalde");?>">Alcalde</a></li>
                            <li><a href="<?php echo site_url("principal/gobierno");?>">Alcaldia</a></li></ul>
                    </li>

                </ul>
            </div>
            <!-- End main navigation -->
        </div>
    </div>
</div>
<!-- Start home section -->
<?php if(isset($slider)){?>
<div id="home">
    <!-- Start cSlider -->
    <div id="da-slider" class="da-slider">
        <div class="triangle"></div>
        <!-- mask elemet use for masking background image -->
        <div class="mask"></div>
        <!-- All slides centred in container element -->
        <div class="container">
            <!-- Start first slide -->
            <div class="da-slide">
                <h2 class="fittext2">Turismo</h2>
                <h4>Conoce el municipio</h4>
                <p>Atractivos<br>Pueblos Turísticos<br>Gastronomía<br>Trapiches</p>
                <a href="#" class="da-link button">Ver mas</a>
                <div class="da-img">
                    <img src="<?php echo __MAQ__;?>images/Slider01.png" alt="image02" width="320">
                </div>
            </div>
            <!-- End first slide -->
            <!-- Start second slide -->
            <div class="da-slide">
                <h2>Personajes</h2>
                <h4>Subtitulo</h4>
                <p>Contenido.</p>
                <a href="#" class="da-link button">Leer mas</a>
                <div class="da-img">
                    <img src="<?php echo __MAQ__;?>images/Slider02.png" width="320" alt="image02">
                </div>
            </div>
            <!-- End second slide -->
            <!-- Start third slide -->
            <div class="da-slide">
                <h2>Patrimonios</h2>
                <h4>Historicos y Religiosos</h4>
                <p>Contenido.</p>
                <a href="#" class="da-link button">Leer Mas</a>
                <div class="da-img">
                    <img src="<?php echo __MAQ__;?>images/Slider03.png" width="320" alt="image03">
                </div>
            </div>
            <!-- Start third slide -->
            <!-- Start cSlide navigation arrows -->
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
            <!-- End cSlide navigation arrows -->
        </div>
    </div>
</div>
<?php }?>