<?php
	class general_Al extends datebase
	{
		function __construct()
		{
			parent::__construct();
		}
		public function clases()
		{
			$query = $this->consulta("SELECT carr_cal, gdo_cal, tno_cal, gpo_cal, asig_cal, evaluar, nom_car, nom_pes FROM `cali`INNER JOIN carreras on ccar_car=carr_cal INNER JOIN planes on ccar_pes=carr_cal AND gdo_pes=gdo_cal AND casg_pes=asig_cal WHERE cic_cal='$_SESSION[sem]' and cod_cal='$_SESSION[codigo]';");
			if($this->numero_de_filas($query) > 0){
				while ( $tsArray = $this->fetch_assoc($query) ) {
					$data[] = $tsArray;			
				}
				return $data;
			}else{	
				return '';
			}
		}
		public function grabar($arr)
		{
			$this->consulta("INSERT INTO evaluacion_a (carrera, grado, grupo, materia,ciclo,a,b,c,d,e,f,com) values ('$_GET[a]','$_GET[b]','$_GET[c]','$_GET[d]','$_SESSION[sem]','$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]','$arr[5]','$arr[6]')");
			$this->consulta("UPDATE cali SET evaluar ='1' WHERE  cod_cal = '$_SESSION[codigo]' and carr_cal='$_GET[a]' and asig_cal = '$_GET[d]' and gdo_cal= '$_GET[b]'");
		}
		public function calificaciones(){
			$query = $this->consulta("SELECT nom_pes, gdo_cal, gpo_cal,num_cal,num_cal2,nop_cal,evaluar FROM cali 
				INNER JOIN planes on ccar_pes=carr_cal AND gdo_pes=gdo_cal AND casg_pes=asig_cal
				WHERE cod_cal='$_SESSION[codigo]' ");
			if($this->numero_de_filas($query) > 0){
				while ( $tsArray = $this->fetch_assoc($query) ) {
					$data[] = $tsArray;			
				}
				return $data;
			}else{	
				return '';
			}
		}
		function __destruct() {
			parent::__destruct();
		}
	}
?>