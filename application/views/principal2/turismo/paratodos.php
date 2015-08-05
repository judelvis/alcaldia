<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <h3 class="style pull-left"><?php echo $titulo;?></h3>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="blog"><!-- start blog -->
            <div class="blog_main col-md-9">
                <?php
                foreach($lst as $ls){
                echo '
                <div class="blog_list">
                    <div class="col-md-12 blog_left">
                        <a href="#"><img src="'.__IMG__.'galeria/'.$ls->imagen.'" alt="" class="img-responsive"/></a>
                        <h4>'.$ls->nombre.'</h4>

                        <p class="para">'.$ls->descrip.'</p>
                        <div class="col-md-2 span1_of_2" id="btn1">
                            <a class="btn" href="'.site_url("principal2/mostrarServicio/".$ls->oidser).'" >Imagenes</a>
                        </div>
                        <p class="para" id="parra1" style="display: none;">
                        </p>

                    </div>
                    <div class="clearfix"></div>
                </div>';
                }
                ?>
            </div>
            <div class="col-md-3 blog_right">
                <h4><a href="<?php echo site_url("principal2/turismo");?>" class="btn">Turismo Para Todos</a></h4>
                <div class="main_grid">
                    <div class="span_of_1"><!-- start span_of_4 -->
                        <div class="col-md-3 span1_of_4">
                            <div class="span4_of_list">
                                <a href="<?php echo site_url("principal2/serviciosCat/4");?>"><span><i class="fa fa-camera-retro"></i></span>Atractivos</a>
                            </div>
                        </div>
                        <div class="col-md-3 span1_of_4">
                            <div class="span4_of_list">
                                <a href="<?php echo site_url("principal2/serviciosCat/5");?>"><span><i class="fa fa-picture-o"></i></span>Pueblos </a>
                            </div>
                        </div>
                        <div class="col-md-3 span1_of_4">
                            <div class="span4_of_list">
                                <a href="<?php echo site_url("principal2/serviciosCat/6");?>"><span><i class="fa fa-columns"></i></span>Gastronomía</a>
                            </div>
                        </div>
                        <div class="col-md-3 span1_of_4">
                            <div class="span4_of_list">
                                <a href="<?php echo site_url("principal2/serviciosCat/8");?>"><span><i class="fa fa-tumblr"></i></span>Trapiches</a>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- end span_of_4 -->
                </div>
                <ul class="tag_nav list-unstyled">
                    <h4>tags</h4>
                    <li class="active"><a href="#">awesome</a></li>
                    <li><a href="#">art</a></li>
                    <li><a href="#">classic</a></li>
                    <li><a href="#">photo</a></li>
                    <li><a href="#">wordpress</a></li>
                    <li><a href="#">videos</a></li>
                    <li><a href="#">standard</a></li>
                    <li><a href="#">gaming</a></li>
                    <li><a href="#">photo</a></li>
                    <li><a href="#">music</a></li>
                    <li><a href="#">data</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end blog -->
    </div>
</div>