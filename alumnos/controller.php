<?php
	class alumnos {
		var $view;
		var $data;
		function __construct()
		{
			$this->data = new general_Al();
			$this->view = new vista_Al();
		}
		public function lista()
		{
			$_SESSION['sem']=$_GET['accion'];
			$GLOBALS = $this->data->clases();
			$this->view->lista_C();
		}
		public function evaluar()
		{
			$this->view->preguntas();
		}
		public function grabar()
		{
			header("Location: index.php?tipo=alumno");
			$array[0] += $_POST['1-1'];
			$array[0] += $_POST['1-2'];
			$array[0] += $_POST['1-3'];
			$array[0] += $_POST['1-4'];
			$array[0] += $_POST['1-5'];
			$array[0] /=5;
			$array[1] += $_POST['2-1'];
			$array[1] += $_POST['2-2'];
			$array[1] += $_POST['2-3'];
			$array[1] += $_POST['2-4'];
			$array[1] /=4;
			$array[2] += $_POST['3-1'];
			$array[2] += $_POST['3-2'];
			$array[2] += $_POST['3-3'];
			$array[2] += $_POST['3-4'];
			$array[2] /=4;
			$array[3] += $_POST['4-1'];
			$array[3] += $_POST['4-2'];
			$array[3] += $_POST['4-3'];
			$array[3] /=3;
			$array[4] += $_POST['5-1'];
			$array[4] += $_POST['5-2'];
			$array[4] /=2;
			$array[5] += $_POST['6-1'];
			$array[5] += $_POST['6-2'];
			$array[5] /=2;
			$array[6] = $_POST['com'];
			$this->data -> grabar($array);
		}
		public function principal()
		{
			if ($_SESSION['codigo']=="213737738") {
				echo "<h1>Niña me gustas :3</h1>";
			}
			$this->view->view_principal();
		}
		public function calificaciones()
		{
			$cali = $this->data->calificaciones();
			$this->view->calis($cali);
		}
	}
?>