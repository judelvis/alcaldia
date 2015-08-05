<script>
    function muestraParra(id) {
        $("#parra" + id).show();
        $("#ocu" + id).show();
        $("#btn" + id).hide();
    }

    function ocultaParra(id) {
        $("#parra" + id).hide();
        $("#ocu" + id).hide();
        $("#btn" + id).show();
    }
</script>

<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <h3 class="style pull-left">Archivo Municipal</h3>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="blog"><!-- start blog -->
            <div class="blog_main col-md-9">
                <div class="blog_list">
                    <div class="col-md-12 blog_left">
                        <a href="#"><img src="<?php echo __MAQ2__; ?>images/omar.jpg" alt=""
                                         class="img-responsive"/></a>

                        <div class="main_bg"><!-- start main -->
                            <div class="container">
                                <div class="main_grid1">
                                    <h3 class="style pull-left">Archivo Municipal</h3>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="main_btm1"><!-- start main_btm -->
                            <div class="container">
                                <div class="blog"><!-- start blog -->
                                    <div class="blog_main col-md-9">
                                        <div class="blog_list">
                                            <div class="col-md-12 blog_left">
                                                <p class="para">El Archivo Municipal, es una Unidad Técnica de Apoyo
                                                    Administrativo y de Servicio Público, con jerarquía de Departamento,
                                                    está adscrita al Gerente General.</p>
                                            </div>

                                            <div class="col-md-12 span1_of_3">
                                                <h4>Objetivo</h4>

                                                <p class="para">Garantizar la conservación del Fondo Documental que
                                                    genera la Alcaldía, para facilitar el servicio de revisión y consultas
                                                    por los ciudadanos o autoridades competentes.</p>
                                            </div>

                                            <div class="col-md-12 span1_of_3">
                                                <h4>Estructura:</h4>
                                                <ul class="list-unstyled nav_list">
                                                    <p class="para">Está constituida en una sola unidad administrativa y
                                                        la conforman:</p>
                                                    <li><a href="#!">Jefatura.</a></li>
                                                    <li><a href="#!">Asistente de archivo.</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 span1_of_3">
                                                <h4>Funciones de acuerdo a la ordenanza:</h4>
                                                <ul class="list-unstyled nav_list">
                                                    <li><a href="#!">Definir la política archivística del Municipio.</a>
                                                    </li>
                                                    <li><a href="#!">Localizar y centralizar la documentación que sea de
                                                            su competencia.</a></li>
                                                    <li><a href="#!">Organizar, conservar y difundir el fondo documental
                                                            del Concejo Municipal y la Alcaldía, así como otros documentos que reciba por
                                                            convenios, en guarda y custodia o por donación.</a></li>
                                                    <li><a href="#!">Servir de apoyo a la Alcaldía y al Concejo
                                                            Municipal en su gestión administrativa.</a></li>
                                                </ul>
                                                <div class="col-md-2 span1_of_2" id="btn1">
                                                    <a class="btn" href="#!" onclick="muestraParra(1);">ver mas</a>
                                                </div>
                                                <ul class="list-unstyled nav_list" id="parra1" style="display: none;">
                                                    <li><a href="#!">Asesorar a la administración municipal y a
                                                            organismos públicos y privados de Municipio en la
                                                            organización y conservación de sus fondos documentales.</a>
                                                    </li>
                                                    <li><a href="#!">Colaborar en la preservación del patrimonio
                                                            histórico del municipio.</a></li>
                                                    <li><a href="#!">Valorar y seleccionar la documentación del
                                                            municipio para su conservación u otros fines.</a></li>
                                                    <li><a href="#!">Promover la capacitación archivística de los
                                                            funcionarios del municipio a través de cursos y
                                                            talleres.</a></li>
                                                    <li><a href="#!">Realizar el censo-diagnóstico de repositorios
                                                            documentales y archivos del municipio para conocer:
                                                            tipología,
                                                            antigüedad, volumen y estado de conservación de los
                                                            mismos.</a></li>
                                                    <li><a href="#!">Previa autorización de la Cámara Municipal, firmar
                                                            convenios con organismos públicos o privados, estadales,
                                                            nacionales o internacionales para promover el desarrollo del
                                                            Archivo y conseguir subvenciones o aportes en materia
                                                            archivística.</a></li>
                                                    <li><a href="#!">Cualesquiera otras funciones que por vía
                                                            reglamentaria le fueren asignadas.</a></li>
                                                    <li><a href="#!">Elaborar las Normas Programas y Proyectos sobre el
                                                            funcionamiento del Archivo y someterlo a la aprobación del
                                                            Alcalde.</a></li>
                                                    <li><a href="#!">Diseñar y presentar al Alcalde para su aprobación,
                                                            el Sistema de Archivo Municipal a objeto de integrar en un
                                                            solo concepto organizacional
                                                            y funcional los archivos de las dependencias de la
                                                            Alcaldía.</a></li>
                                                    <li><a href="#!">Coordinar la organización de los archivos de las
                                                            dependencias de la Alcaldía, de acuerdo al Sistema de
                                                            Archivo.</a></li>
                                                    <li><a href="#!">Elaborar el Catálogo del Fondo Documental del
                                                            Archivo Municipal.</a></li>
                                                    <li><a href="#!">Informar trimestralmente al Alcalde, sobre los
                                                            resultados en la gestión del Archivo Municipal.</a></li>
                                                    <li><a href="#!">Prestar el servicio de consulta y revisión del
                                                            Fondo Documental del Municipio, a las personas, Organismos
                                                            Públicos y Privados, que así lo
                                                            requieran, manteniendo la supervisión y control constante
                                                            sobre la integridad de la documentación.</a></li>
                                                    <li><a href="#!">Presentar anualmente Informe de Gestión del Archivo
                                                            Municipal.</a></li>
                                                    <li><a href="#!">Elaborar el Proyecto de Presupuesto de Gastos y el
                                                            Plan Operativo Anual de esta Dependencia.</a></li>
                                                </ul>
                                                <div class="col-md-2 span1_of_2" id="ocu1" style="display: none;">
                                                    <a class="btn" href="#!" onclick="ocultaParra(1);">ocultar</a>
                                                </div>
                                                <div class="col-md-12 span1_of_3">
                                                    <br>


                                                    <h4>Funciones del Coordinador Según Gaceta Municipal</h4>
                                                    <ul class="list-unstyled nav_list">
                                                        <li><a href="#!">Ejercer la coordinación y representación del
                                                                Archivo.</a></li>
                                                        <li><a href="#!">Planificar las actividades del Archivo y
                                                                formular la política archivística del Municipio.</a>
                                                        </li>
                                                        <li><a href="#!">Elaborar y presentar ante la Cámara Municipal
                                                                el Proyecto de Presupuesto Anual del Archivo.
                                                                (Nota: actualmente esta función se cumple a través del
                                                                Alcalde).</a></li>
                                                        <li><a href="#!">Clasificar, coordinar y ejecutar las
                                                                transferencias documentales de las unidades
                                                                administrativas
                                                                del Concejo Municipal y Alcaldía al Archivo, así como
                                                                velar por su conservación y custodia.</a></li>
                                                    </ul>
                                                    <div class="col-md-2 span1_of_2" id="btn2">
                                                        <a class="btn" href="#!" onclick="muestraParra(2);">ver mas</a>
                                                    </div>
                                                    <ul class="list-unstyled nav_list" id="parra2"
                                                        style="display: none;">
                                                        <li><a href="#!">Presentar a la Cámara Municipal el Informe
                                                                Anual de Actividades del Archivo (Nota: actualmente esta
                                                                función se cumple a través del Alcalde).</a></li>
                                                        <li><a href="#!">Promover relaciones de trabajo con archivos
                                                                afines, nacionales e internacionales.</a></li>
                                                        <li><a href="#!">Fomentar la investigación histórica regional y
                                                                local.</a></li>
                                                        <li><a href="#!">Propiciar la capacitación archivística del
                                                                personal del Archivo y de las unidades administrativas
                                                                del
                                                                Concejo Municipal y la Alcaldía.</a></li>
                                                        <li><a href="#!">Presentar a la Cámara Municipal los reglamentos
                                                                y los manuales de normas y procedimientos necesarios
                                                                para el funcionamiento del archivo. (Nota: actualmente
                                                                esta función se cumple a través del Alcalde).</a></li>
                                                        <li><a href="#!">Certificar bajo su responsabilidad las copias
                                                                de documentos existentes en el Archivo.</a></li>
                                                        <li><a href="#!">Ejecutar y coordinar la custodia del
                                                                archivo.</a></li>
                                                        <li><a href="#!">Las demás que se le otorguen por disposiciones
                                                                de la Cámara Municipal.</a></li>
                                                    </ul>
                                                    <div class="col-md-2 span1_of_2" id="ocu2" style="display: none;">
                                                        <a class="btn" href="#!" onclick="ocultaParra(2);">ocultar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end blog -->
    </div>
</div>