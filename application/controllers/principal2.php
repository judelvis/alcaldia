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
        $data['slider'] = true;
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab',$data );
        $this->load->view ( 'principal2/inicio');
        $this->load->view ( 'principal2/incluir/pie' );
    }


    function validarUsuario() {
        $this->load->model ( 'usuario/iniciar', 'Iniciar' );
        $this->Iniciar->validarCuenta ( $_POST );
    }


    /**
     * funciones para noticias
     */
    function noticia(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $busqueda = $this->MPanel->listarNoticia ();
        $data ['lst'] = $busqueda;
        $data ['tit'] = __TITLE__;
        $data ['tb'] = 'Noticias';
        $data ['js'] = 'principal';

        $this->load->view ( 'principal/incluir/head', $data );
        $this->load->view ( 'principal/incluir/cab', $data );
        $this->load->view ( 'principal/noticia', $data );
        $this->load->view ( 'principal/incluir/pie', $data );
    }

    function verNoticia($id){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $busqueda = $this->MPanel->verNoticia ($id);
        $data ['lst'] = $busqueda;
        $data ['tit'] = __TITLE__;
        $data ['tb'] = 'Noticias';
        $data ['js'] = 'principal';

        $this->load->view ( 'principal/incluir/head', $data );
        $this->load->view ( 'principal/incluir/cab', $data );
        $this->load->view ( 'principal/verNoticia', $data );
        $this->load->view ( 'principal/incluir/pie', $data );
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

    function mostrarSerie($oidser=null,$oidcat=null){
        $this -> load -> model('panel/mpanel', 'MPanel');
        //print_R($_POST);
        if($oidser == null) {
            $arr = $_POST;
        }else{
            $arr['oidser'] = $oidser;
            $arr['oidcat'] = $oidcat;
        }
        $datos['lst'] = $this -> MPanel -> consultarGaleriaSerie($arr);
        //print("<pre>");
        //print_R($datos);
        $this->load->view ( 'principal/galeria', $datos );
    }
    /**
     * fuciones para municipio
     */
    function ubicacion(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/ubicacion' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function capital(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/capital' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function simbolos(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/simbolos' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function parroquias(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/parroquias' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    /**
     * fuciones para alcalde
     */
    function biografia(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/biografia' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function planGob(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/planGob' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function primerEje(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/primerEje' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function segundoEje(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/segundoEje' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function tercerEje(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/tercerEje' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    function decla(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $this->load->view ( 'principal2/incluir/head' );
        $this->load->view ( 'principal2/incluir/cab' );
        $this->load->view ( 'principal2/decla' );
        $this->load->view ( 'principal2/incluir/pie' );
    }

    /**
     * fuciones para alcaldia
     */
    function gobierno(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $data ['tit'] = __TITLE__;
        $data ['tb'] = 'Gobierno';
        $data ['js'] = 'gobierno';
        $data ['slider'] = true;

        $this->load->view ( 'principal/incluir/head', $data );
        $this->load->view ( 'principal/incluir/cab', $data );
        $this->load->view ( 'principal/gobierno', $data );
        $this->load->view ( 'principal/incluir/pie', $data );
    }

    /**
     * fuciones para municipio
     */
    function alcalde(){
        $this->load->model ( 'panel/mpanel', 'MPanel' );
        $data ['tit'] = __TITLE__;
        $data ['tb'] = 'Alcalde';
        $data ['js'] = 'alcalde';
        $data ['slider'] = true;

        $this->load->view ( 'principal/incluir/head', $data );
        $this->load->view ( 'principal/incluir/cab', $data );
        $this->load->view ( 'principal/alcalde', $data );
        $this->load->view ( 'principal/incluir/pie', $data );
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