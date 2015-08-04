<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <h3 class="style pull-left">Atractivos</h3>
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
                            <a class="btn" href="#!" onclick="muestraParra(1);">ver mas</a>
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
                <h4>Ads 125 x 125</h4>
                <ul class="ads_nav list-unstyled">
                    <li><a href="#"><img src="<?php echo __MAQ2__?>images/ads_pic.jpg" alt=""> </a></li>
                    <li><a href="#"><img src="<?php echo __MAQ2__?>images/ads_pic.jpg" alt=""> </a></li>
                    <li><a href="#"><img src="<?php echo __MAQ2__?>images/ads_pic.jpg" alt=""> </a></li>
                    <li><a href="#"><img src="<?php echo __MAQ2__?>images/ads_pic.jpg" alt=""> </a></li>
                    <div class="clearfix"></div>
                </ul>
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