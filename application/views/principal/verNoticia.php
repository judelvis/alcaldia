<?php
if ($lst != 0) {
    $i = 0;
    foreach ($lst as $ls) {
        if($i == 0) echo '<div class="row-fluid team">';
        $i++;
        echo '
                <!-- About us section end -->
<div class="section secondary-section">
    <div class="triangle"></div>
    <div class="container centered">
        <p class="large-text">'.$ls->titulo.'</p>
        <img src="'.__IMG__.'/noticia/'.$ls->imagen.'"></img>
    </div>
</div>
<!-- Client section start -->
<!-- Client section start -->
<div id="clients">
    <div class="section primary-section">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <p>'.$ls->descrip.'</p>
            </div>
        </div>
    </div>
</div>
        ';
        if($i== 3) echo '</div>';
    }
}
?>