<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <h3 class="style pull-left">Turismo Para Todos</h3>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main1_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid">
            <div class="span_of_4"><!-- start span_of_4 -->
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-camera-retro"></i></span>
                        <h3>Atractivos</h3>
                        <div class="read_more">
                            <a class="btn btn-2 active" href="<?php echo site_url("principal2/serviciosCat/4");?>">ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-picture-o"></i></span>
                        <h3>Pueblos Turísticos </h3>
                        <div class="read_more">
                            <a class="btn  btn-2b" href="<?php echo site_url("principal2/serviciosCat/5");?>">ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-columns"></i></span>
                        <h3>Gastronomía</h3>
                        <div class="read_more">
                            <a class="btn btn-2b" href="<?php echo site_url("principal2/serviciosCat/6");?>">ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-tumblr"></i></span>

                        <h3>Trapiches</h3>

                        <div class="read_more">
                            <a class="btn btn-2b" href="<?php echo site_url("principal2/serviciosCat/8");?>">ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <!-- end span_of_4 -->
        </div>
    </div>
</div>
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <h3 class="style pull-left">Facilidades y Servicios</h3>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm1 -->
    <div class="container">
        <div class="main about span_of_3">

            <div class="col-md-4 span1_of_3">
                <h4>Hoteles</h4>
                <ul class="list-unstyled nav_list">
                    <?php if($hotel!=0){
                        foreach($hotel as $ls){
                            echo '<li><a href="'.site_url("principal2/mostrarServicio/".$ls->oidser."/1").'">'.$ls->nombre.'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-4 span1_of_3">
                <h4>Posadas</h4>
                <ul class="list-unstyled nav_list">
                    <?php if($posada!=0){
                        echo $posada;
                        foreach($posada as $ls){
                            echo '<li><a href="'.site_url("principal2/mostrarServicio/".$ls->oidser."/1").'">'.$ls->nombre.'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-4 span1_of_3">
                <h4>Restaurante</h4>
                <ul class="list-unstyled nav_list">
                    <?php if($rest!=0){
                        foreach($rest as $ls){
                            echo '<li><a href="'.site_url("principal2/mostrarServicio/".$ls->oidser."/1").'">'.$ls->nombre.'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>