<?php

/**
 * fecha 01/11/2014
 *
 * @package inmobiliaria
 * @author Judelvis Rivas
 *
 */
session_start ();
class Panel extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index() {
		$this->load->view('entrar');
	}
	
	function validarUsuario(){
		$this->load->model('usuario/iniciar', 'Iniciar');
		$this->Iniciar->validarCuenta($_POST);
	}


	/**
	 * Funciones para modulo tipo
	 */
	
	function tipo(){
		if (!isset($_SESSION['usuario_inmo'])) {
			session_destroy();
			redirect(base_url() . 'index.php/principal');
		}
		$data['js'] = 'tipo';
		$data['formulario'] = 'tipo';
		$data['titulo']='Categoria';
		$this->load->view('panel/incluir/cabecera',$data);
		$this->load->view('panel/incluir/menu');
		$this->load->view('panel/principal',$data);
	}
	
	function registrarTipo(){
		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> registrarTipo($_POST);
	
	}
	
	function listarTipo(){
		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> listaTipo();
	}
	
	function cmbTipo(){
		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> cmbTipo();
		//echo "pasa";
	}


    /**
     * Funciones para modulo Noticias
     */

    function noticia(){
        if (!isset($_SESSION['usuario_inmo'])) {
            session_destroy();
            redirect(base_url() . 'index.php/principal');
        }
        $data['js'] = 'noticia';
        $data['formulario'] = 'noticia';
        $data['titulo']='Noticia';
        $this->load->view('panel/incluir/cabecera',$data);
        $this->load->view('panel/incluir/menu');
        $this->load->view('panel/principal',$data);
    }

    function registrarNoticia(){
        $this -> load -> model('utilidades/mimagen', 'MImagen');
        $this -> load -> model('panel/mpanel', 'MPanel');

        //$valor = $this -> MImagen -> cargar($_FILES, BASEPATH . 'img/noticia') -> salvar(400,400,2);
        $valor = $this -> MImagen -> cargar($_FILES, BASEPATH . 'img/noticia') -> salvar(400,200,2);
        $nombreImagen = $_FILES['imagen']['name'];
        $arr = array("imagen"=>$nombreImagen,"titulo"=>$_POST['titulo'],"descrip"=>$_POST['descrip'],"fecha"=>$_POST['fecha'],"enlace"=>$_POST['enlace'],"resumen"=>$_POST['resumen']);
        if($valor)echo $this -> MPanel -> registrarNoticia($arr);
        else echo "No se pudo guardar la imagen".$valor['mensaje'];
    }

    function listarNoticia(){
        $this -> load -> model('panel/mpanel', 'MPanel');
        echo $this -> MPanel -> consultarNoticia();
    }

    function eliminarNoticia(){
        $this -> load -> model('panel/mpanel', 'MPanel');
        $json = json_decode($_POST['objeto'], true);
        echo $this -> MPanel -> eliminarNoticia($json);
    }


    /**
	 * Funciones para modulo serie
	 */
	
	function principal(){
		if (!isset($_SESSION['usuario_inmo'])) {
			session_destroy();
			redirect(base_url() . 'index.php/principal');
		}
		$this -> load -> model('panel/mpanel', 'MPanel');
		$data['js'] = 'servicio';
		$data['titulo'] = 'Servicio';
		$data['formulario'] = 'servicio';
		//$data['servicios'] = $this -> MPanel -> lista_servicios();
		$this->load->view('panel/incluir/cabecera',$data);
		$this->load->view('panel/incluir/menu');
		$this->load->view('panel/principal',$data);
	}
	
	function registrarSerie(){
		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> registrarSerie($_POST);
	
	}
	
	function listarSerie(){
		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> listaSerie();
	}
	
	function cmbSerie(){
		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> cmbSerie();
		//echo "pasa";
	}
	
	function modificarSerie(){
		$ele = json_decode($_POST['objeto'],true);
		//print_R($_POST);
		$datos=array("descrip"=>$ele[1],"fecha"=>$ele[3],"estatus"=>$ele[3]);

		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> modificarSerie($datos,$ele[0]);
	}
	
	function eliminarSerie(){
		$ele = json_decode($_POST['objeto'],true);
		$this -> load -> model('panel/mpanel', 'MPanel');
		echo $this -> MPanel -> eliminarSerie($ele[0]);
	}
	
	
	/**
	 * Funcion para generar excel desde tgrid
	 */
	public function Exporta_Exel() {
		//print_R($_POST);
		$this -> load -> model('utilidades/mexcel','MExcel');
		$this -> MExcel -> cabezera = json_decode($_POST['cabezera'] ,TRUE);
		$this -> MExcel -> cuerpo = json_decode($_POST['cuerpo'],TRUE);
		$nomb = 'reporte_'.Date('U').'.xls';
		$ruta = BASEPATH.'repository/xls/'.$nomb;
		$this -> MExcel -> Generar();
		$this -> MExcel -> Guardar($ruta);
		echo "<br><center><a href='" . __LOCALWWW__ . "/system/repository/xls/".$nomb."' target='top'><img src='" . __IMG__ . "exel1.jpg' style='width:70px'>Click aqui</img></a>";
	}
	
	/**
	 * funciones de galeria
	 */
	function agregarGaleria($id='') {
		if (!isset($_SESSION['usuario_inmo'])) {
			session_destroy();
			redirect(base_url() . 'index.php/principal');
		}
		$data['js'] = 'panel';
		$data['formulario'] = 'creaGaleria';
		if(isset($id) && $id !=''){
			$data['id']=$id;
		}
		$data['titulo'] = 'Cargar Imagenes a Servicio';
		
		$this->load->view('panel/incluir/cabecera',$data);
		$this->load->view('panel/incluir/menu');
		$this->load->view('panel/principal',$data);
	}
	
	function registrarGaleria() {
		$this -> load -> model('utilidades/mimagen', 'MImagen');
		$this -> load -> model('panel/mpanel', 'MPanel');
	
		$valor = $this -> MImagen -> cargar($_FILES, BASEPATH . 'img/galeria') -> salvar(680,480,2);
		$nombreImagen = $_FILES['imagen']['name'];
        $arr = array("oidser"=>$_POST['oidser'],"imagen"=>$nombreImagen,"titulo"=>$_POST['titulo'],"detalle"=>$_POST['detalle'],"fecha"=>$_POST['fecha'],"enlace"=>$_POST['enlace']);
		if($valor)echo $this -> MPanel -> registrarGaleria($arr);
		else echo "No se pudo guardar la imagen".$valor['mensaje'];
		//echo "si";
	
	}
	
	function consultarGaleria() {
		$this -> load -> model('panel/mpanel', 'MPanel');
		$oidp = $_POST['codigo'];
		echo $this -> MPanel -> consultarGaleria($oidp);
		//echo "si";
	}
	
	function eliminarGaleria() {
		$this -> load -> model('panel/mpanel', 'MPanel');
		$json = json_decode($_POST['objeto'], true);
		echo $this -> MPanel -> eliminarGaleria($json);
	}
	
	/**
	 * funcion para enviar correo
	 */
	function Envia_Correo(){
		$cabeceras = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cabeceras .= 'FROM:jp-inmobiliaria.com' . "\r\n";
		$cuerpo = "<h3>Nombre:</h3><br>".$_POST['nombre']."<br><h3>Correo Cliente:</h3><br>".$_POST['correo'].
		"<br><br><h3>Mensaje:</h3><br>".$_POST['mensaje']."<br><br><h3>Telefono:</h3><br>".$_POST['tel'];
	
		if(mail("jeancarlosrivas@gmail.com,jud.prog@gmail.com", "EMPRESA:INFORMACION", $cuerpo, $cabeceras))
			echo "SE ENVIO CORREO";
		else echo "ERROR";
	}
	
	/**
	 * Cerrar Sesion del sistema
	 */
	function cerrar() {
		session_destroy ();
		redirect ( base_url ().'index.php/principal2' );
	}
	function __destruct() {
	}
}