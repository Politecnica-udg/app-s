<?php
	class admon {
		var $view;
		var $data;
		function __construct()
		{
			$this->data = new general_A();
			$this->view = new vista_A();	
		}
		public function lista()
		{
			$GLOBALS = $this->data->maestros();
			$this->view->lista();
		}
		public function falta()
		{
			$GLOBALS = $this->data->faltas();
			$this->view->faltas();
		}
		public function principal()
		{
			$_SESSION['nivel']=$this->data->nivel($_SESSION['codigo']);
			$str_datos = file_get_contents("main/templates/complementos/admon.json");
      			$lang = json_decode($str_datos,true);
			$this->view->principal($lang[$_SESSION['nivel']]);
		}
		public function listar_calendarios(){
			//$calendarios=$this->data->calendarios();
			$this->view->en_listar();
		}
		public function listar_carreras()
		{
			$carr=$this->data->carreras();
			$this->view->lista_car($carr);
		}
		public function listar_grupos()
		{
			$listar_grupos = $this->data->grupos();
			$this->view->lista_grupos($listar_grupos);
		}
		public function listar_materias()
		{
			$listar_materias = $this->data->materias();
			$this->view->listar_materias($listar_materias);
		}
		public function listar_cali(){
			$listar_cali = $this->data->lista_alumnos();
			$this->view->listar_cali($listar_cali);
		}
		public function listar_grupos_unicos()
		{
			$listar_cali = $this->data->grupos_unicos_1();
			$this->view->listar_carr($listar_cali);
		}
		public function listar_materias_unicos()
		{
			$listar_cali = $this->data->carr_unicos_1();
			$this->view->listar_mat($listar_cali);
		}
		public function grupo_unico_cal()
		{
			$listar_cali = $this->data->alum_unicos_1();
			$this->view->evaluar($listar_cali);
		}
		public function grabar()
		{
			header("Location: index.php?tipo=administrativo&accion=cali_unico");
			for ($i=0; $i < $_POST['cantidad'] ; $i++) { 
				$var = ['cod' => $_POST['cod'.$i],
					'or' => $_POST['or'.$i],
					'ex' => $_POST['ex'.$i],
				];
				$this->data->guardar($var);
			}
		}

		public function secretarias()
		{
			$grupos = $this->data->carr_tecno();
			$this->view->listar_carr_sec($grupos);
		}
		public function sec_grados()
		{
			$grupos = $this->data->carr_grados();
			$this->view->listar_grupo_sec($grupos);
		}
		public function sec_lis_mat()
		{
			$grupos = $this->data->sec_lis_mat();
			$this->view->listar_mat_sec($grupos);
		}
		public function sec_lis_alu()
		{
			$grupos = $this->data->sec_lis_alu();
			$this->view->listar_alu_sec($grupos);
		}
		public function sec_lis_save()
		{
			$fecha = date("Y-d-m");
			header("Location: index.php?tipo=administrativo&accion=lista_tec");
			for ($i=0; $i < $_POST['cantidad'] ; $i++) { 
				$var = ['cod' => $_POST['cod'.$i],
					'or' => $_POST['or'.$i],
					'ex' => $_POST['ex'.$i],
				];
				$this->data->sec_save($var,$fecha);
			}
			$this->data->marcar_pro();
		}
	}
?>