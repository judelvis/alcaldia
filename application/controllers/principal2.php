<?php

/**
 * fecha 01/11/2014
 *
 * @package inmobiliaria
 * @author Judelvis Rivas
 *
 */
session_start ();
class Principal2 extends CI_Controller {
    function __construct() {
        parent::__construct ();

    }
    function idioma(){
        $_SESSION['idioma'] = '_i';
        redirect ( base_url () );
    }
    function index() {
        $this->inicio();
    }
    function inicio() {
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $busqueda = $this->MPanel->listarNoticia ();
        $data ['lst'] = $busqueda;
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/inicio',$data);
        $this->load->view ( 'principal2/incluir/pie' );
    }


    function validarUsuario() {
        $this->load->model ( 'usuario/iniciar', 'Iniciar' );
        $this->Iniciar->validarCuenta ( $_POST );
    }


    /**
     * funciones para noticias
     */
    function noticias(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $busqueda = $this->MPanel->listarNoticia ();
        $data ['lst'] = $busqueda;
        ///$data ['slider'] = true;
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/noticias' ,$data);
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function verNoticia($id){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $busqueda = $this->MPanel->verNoticia ($id);
        $data ['lst'] = $busqueda;
        $data ['slider'] = true;

        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/verNoticia' ,$data);
        $this->load->view ( 'principal2/incluir/pie' );
    }
    /**
     * funciones paginas
     */

    function busca_imagenes($oidp = null,$cat) {
        $this->load->model ( 'utilidades/mimagen', 'MImagen' );
        if (isset ( $_POST ['oidp'] ))
            $oidp = $_POST ['oidp'];
        return $this->MImagen->busca_imagenes ( $oidp,$cat );
        // echo $oidp;
    }

    function mostrarServicio($oidser=null,$descrip=null){
        $this -> load -> model('panel/mpanel', 'MPanel');
        if($oidser == null) {
            $oidser = $_POST['oidser'];
        }
        $data['lst'] = $this -> MPanel -> consultarGaleriaSerie($oidser);
        $data ['slider'] = true;
        if($descrip != null)$data ['descrip'] = true;

        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/galeria' ,$data);
        $this->load->view ( 'principal2/incluir/pie' );
    }
    /**
     * fuciones para municipio
     */
    function ubicacion(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/ubicacion' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function capital(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/capital' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function simbolos(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/simbolos' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function parroquias(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/parroquias' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    /**
     * fuciones para alcalde
     */
    function biografia(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/biografia' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function planGob(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/planGob' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function primerEje(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/primerEje' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function segundoEje(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/segundoEje' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function tercerEje(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/tercerEje' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function decla(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/decla' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    /*
     * funciones de turismo para todos
     */
    function turismo(){
        $this -> load -> model('panel/mpanel', 'MPanel');
        $data['hotel'] = $this ->MPanel -> consultarServiciosCat(1);
        $data['posada'] = $this ->MPanel -> consultarServiciosCat(2);
        $data['rest'] = $this ->MPanel -> consultarServiciosCat(3);
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/turismo',$data );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function serviciosCat($id){
        $this -> load -> model('panel/mpanel', 'MPanel');
        $data['lst'] = $this ->MPanel -> consultarServiciosCat($id);
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $data['titulo'] = $this -> MPanel -> nombreCat($id);
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/turismo/paratodos' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    /*
     * funciones para alcaldia
     */
    function gerencias($formulario=null){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        if($formulario != null) $data['formulario'] = $formulario;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/gerencias',$data );
        $this->load->view ( 'principal2/incluir/pie' );
    }
    //Departamento de Administracion y Finanzas
    function suministros(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/alcaldia/suministros' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function administrativo(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/alcaldia/administrativo' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function tesoreria(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/alcaldia/tesoreria' );
        $this->load->view ( 'principal2/incluir/pie' );
    }
    function contabilidad(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/alcaldia/contabilidad' );
        $this->load->view ( 'principal2/incluir/pie' );
    }
    //fin de Departamento de Administracion y Finanzas

    function talleres(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/alcaldia/talleres' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function tramites(){
        $this->load->view ( 'principal2/incluir/head' );
        $data['slider'] = true;
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/alcaldia/tramites' );
        $this->load->view ( 'principal2/incluir/pie' );
    }
    /**
     * Cerrar Sesion del sistema
     */
    function cerrar() {
        session_destroy ();
        redirect ( base_url () );
    }

    function __destruct() {
    }

    function informacion(){
        phpinfo();
    }
}