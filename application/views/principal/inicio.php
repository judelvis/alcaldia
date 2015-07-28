<div class="section primary-section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>Trabajo y compromiso</h1>
            <!-- Section's title goes here -->

            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="<?php echo __MAQ__;?>images/map1.png" alt="service 1">
                    </div>
                    <h3>Catastro</h3>
                    <p>Contenido.</p>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="<?php echo __MAQ__;?>images/Service2.png" alt="service 2" />
                    </div>
                    <h3>En que invertimos</h3>
                    <p>Conozca lo que se esta haciendo con los recursos del estado</p>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="<?php echo __MAQ__;?>images/Service3.png" alt="service 3">
                    </div>
                    <h3>Solicitud en linea</h3>
                    <p>Ayudas, constancias, referencias y otros.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us section end -->
<div id="clients">
    <div class="section primary-section">

        <div class="container">
            <div class="title">
                <h1>Municipio Campo Elias</h1>
            </div>
            <div class="row">
                <div class="span6">
                    <div class="testimonial">
                        <h4>Ejido</h4>
                        <a href="<?php echo site_url("principal/municipio");?>"><p>Buenaventura de Bustos Bosquero fue el capitán que fundó Ejido el 14 de julio 1650, para este siglo la zona era conocida con el nombre de San Buenaventura de Ejido ...</p></a>
                        <div class="whopic">
                            <div class="arrow"></div>

                            <strong>

                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="testimonial">
                        <h4>Escudo</h4>
                        <a href="<?php echo site_url("principal/municipio");?>"><p>"Este escudo fue diseñado por Armando Picón, según los datos y sugerencias aportados por Ramón Díaz Suárez y Pedro Tablante, hacía finales de la década de 1990... </p></a>
                        <div class="whopic">
                            <div class="arrow"></div>

                            <strong>

                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span12">
                    <center><img src="<?php echo __MAQ__;?>images/ejido.png"/></center>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="contact">
    <div class="section primary-section">
        <div class="map-wrapper">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12 contact-form centered">
                        <h3>Contactenos</h3>
                        <div id="successSend" class="alert alert-success invisible">
                            <strong>Bien hecho!</strong>Su mensaje fue enviado.</div>
                        <div id="errorSend" class="alert alert-error invisible">No se pudo enviar.</div>
                        <form id="contact-form" action="#php/mail.php">
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="text" id="name" name="name" placeholder="* Nombre..." />
                                    <div class="error left-align" id="err-name">Por favor ingrese su nombre.</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="email" name="email" id="email" placeholder="* Su correo electronico..." />
                                    <div class="error left-align" id="err-email">Ingresar correo valido.</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <textarea class="span12" name="comment" id="comment" placeholder="* Comentario"></textarea>
                                    <div class="error left-align" id="err-comment">Ingrese su comentario.</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button id="send-mail" class="message-btn">Enviar</button>
                                </div><br>
                                <div><h4>Avenida Bolivar, frente a la plaza Bolivar.<BR> Ejido Estado Merida</h4></div>
                                <div><h4>0274- 7894545</h4></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
</div>