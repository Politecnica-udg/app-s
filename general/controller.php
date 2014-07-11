<?php
	class poli{
		var $view;
		var $data;
		function __construct()
		{
			$this->data = new general();
			$this->view = new vista();
		}
		public function loguin(){

			$this->view->index_login();
		}
		public function in(){
			switch ($_POST['ops']) {
				case 'Alumno':
					$table = "general";
					$tipo = "alumno";
					break;
				case 'Maestro':
					$table = "personal";
					$tipo = "maestro";
					break;
				case 'Administrativo':
					$table = "admon";
					$tipo = "administrativo";
					break;
				case 'Padres de familia':
					$table = "personal";
					$tipo = "pfamilia";
					break;
			}
			$_SESSION = $this->data->iniciar($table);
			if ($_SESSION != "") {
				header("Location: index.php?tipo=$tipo");
				$_SESSION['tipo'] = $tipo;
			}else{
				header("Location: index.php");
				$_SESSION['error']='si';
			}
		}
		public function acceso_indevido()
		{
			$this->view->indevido();
		}
		public function redireccion()
		{
			$tipo = $_SESSION['tipo'];
			header("Location: index.php?tipo=$tipo");
		}
		function distroy(){
			header("Location: index.php");
			session_destroy();
		}
	}
?>