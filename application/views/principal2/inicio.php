<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid">
            <div class="top_grid"><!-- start top_grid -->
                <div class="col-md-4 span1_of_1">
                    <a href="#!"><img src="<?php echo __MAQ2__;?>images/logo_alcaldia.png" alt="" class="img-responsive"/></a>
                </div>
                <div class="col-md-8 span1_of_1">
                    <h2>Alcaldia Del Municipio Campo Elías</h2>
                    <h3>Trabajo y Compromiso</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="span_of_4"><!-- start span_of_4 -->
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-home"></i></span>

                        <h3>Catastro</h3>

                        <br>
                        <div class="read_more">
                            <a class="btn btn-2 active" href="#!">ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-money"></i></span>

                        <h3>En que invertimos</h3>
                        <br>
                        <div class="read_more">
                            <a class="btn  btn-2b" href="#!">ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-file-text"></i></span>

                        <h3>Solicitud en linea</h3>

                        <br>
                        <div class="read_more">
                            <a class="btn btn-2b" href="#!">ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end span_of_4 -->
        </div>
    </div>
</div>

<div class="cau_hide">
    <div class="cursual"><!--  start cursual  -->
        <h4>Noticias<span class="line"></span></h4>
    </div>
    <div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
        <?php
        foreach($lst as $ls){
            echo '
                <div class="item">
                    <div class="cau_left">
                        <img class="lazyOwl" data-src="'.__IMG__.'noticia/medio/'.$ls->imagen.'" alt="'.$ls ->titulo.'">
                    </div>
                    <h3>'.$ls ->titulo.'</h3>
                </div>
            ';
        }
        ?>
    </div>
    <!----//End-img-cursual---->
</div>


<div class="main1_bg"><!-- start main1 -->
    <div class="container">
        <div class="main slider_text texxt-center">
            <h4>Municipio Campo Elías tierra del dulce aroma de la caña </h4>
        </div>
    </div>
    <!-- start banner -->
    <div id="bannerBg">
        <div id="containingDiv">
            <div id="allinone_carousel_charming">
                <div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
                    <?php for($i=1;$i<=7;$i++){
                        echo'
                            <li><img src="'.__IMG__.'pr'.$i.'.jpg" alt="" class="img-responsive"/></li>
                        ';
                    }?>

                </ul>
            </div>
        </div>
    </div>
    <!-- end banner -->
</div>

<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1972.7583105353199!2d-71.24290465145113!3d8.54621745258272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xa37f1bb2880f8abe!2sAlcald%C3%ADa+Municipio+Campo+Elias!5e0!3m2!1ses-419!2sin!4v1438747186989" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="contact_main">
                <div class="col-md-4 company_ad">
                    <h2>Encuentranos:</h2>
                    <address>
                        <p>Avenida Bolivar, frente a la plaza Bolivar.</p>

                        <p>Ejido Estado Merida</p>

                        <p>Venezuela</p>

                        <p>Telefono:(51) 221 666 444</p>

                        <p>Email: <a href="jud.prog@gmail.com">alcaldia@gmail.com</a></p>

                    </address>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <h2>Contactenos</h2>

                        <form method="post" action="contact-post.html">
                            <input type="text" value="" id="nombre" name="nombre" placeholder="Nombre">
                            <input type="text" value="" id="correo" name="correo" placeholder="Correo electronico">
                            <input type="text" value="" id="asunto" name="asunto" placeholder="Asunto">
                            <textarea id="mensaje" name="mensaje" onfocus="if(this.value == 'Su mensaje') this.value='';"
                                      onblur="if(this.value == '') this.value='Su mensaje'" >Su mensaje</textarea>
                            <span><input type="submit" value="Enviar"></span>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>