<?php
	class general_A extends datebase
	{
		function __construct()
		{
			parent::__construct();
		}
		public function nivel($codigo)
		{
			$query = $this->consulta("SELECT nivel FROM admon WHERE codigo = '$codigo'");
			$sea= $this->fetch_array($query);
			return $sea['nivel'];
		}
		public function maestros()
		{
			$query = $this->consulta("SELECT cod_prof, nom_pro,cin, COUNT(*) FROM asig_prof INNER JOIN profesores on cod_pro=cod_prof WHERE cal_prof='2014A' GROUP BY cod_prof, cin ORDER BY nom_pro; ");
			if($this->numero_de_filas($query) > 0){
				while ( $tsArray = $this->fetch_assoc($query) ) {
					$data[] = $tsArray;			
				}
				return $data;
			}else{	
				return '';
			}
		}
		public function faltas()
		{
			$query = $this->consulta("SELECT cod_prof, nom_pro,cin, COUNT(*) FROM asig_prof INNER JOIN profesores on cod_pro=cod_prof WHERE cal_prof='2014A' AND cin='0' GROUP BY cod_prof, cin ORDER BY nom_pro; ");
			if($this->numero_de_filas($query) > 0){
				while ( $tsArray = $this->fetch_assoc($query) ) {
					$data[] = $tsArray;			
				}
				return $data;
			}else{	
				return '';
			}
		}
		public function calendarios(){
			$query = $this->consulta("SELECT distinct cic_cal FROM cali");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function carreras()
		{
			$query = $this->consulta("SELECT distinct carr_cal,nom_car FROM cali 
				INNER JOIN carreras on ccar_car=carr_cal
				WHERE cic_cal = '$_GET[cal]';");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function grupos()
		{
			$query = $this->consulta("SELECT distinct gdo_cal,tno_cal,gpo_cal FROM cali WHERE cic_cal = '$_GET[cal]' AND carr_cal='$_GET[carr]';");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function materias()
		{
			$query = $this->consulta("SELECT distinct asig_cal,nom_pes FROM cali 
				INNER JOIN planes on ccar_pes = carr_cal AND gdo_pes = gdo_cal AND casg_pes = asig_cal
				WHERE cic_cal = '$_GET[cal]' AND carr_cal='$_GET[carr]' AND gdo_cal='$_GET[g]' AND tno_cal='$_GET[t]' AND gpo_cal='$_GET[gr]';");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function lista_alumnos()
		{
			$query = $this->consulta("SELECT distinct cod_cal,nom_ubi,num_cal FROM cali 
				INNER JOIN ubicacion on calu_ubi = cod_cal
				WHERE cic_cal = '$_GET[cal]' AND carr_cal='$_GET[carr]' AND gdo_cal='$_GET[g]' AND tno_cal='$_GET[t]' AND gpo_cal='$_GET[gr]' AND asig_cal = '$_GET[m]' order by nom_ubi;");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function grupos_unicos_1()
		{
			$query = $this->consulta("SELECT distinct carr_uni, ccar_uni FROM unicos");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function carr_unicos_1()
		{
			$query = $this->consulta("SELECT distinct mod_uni, cmod_uni FROM unicos WHERE ccar_uni= '$_GET[carr]';");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function alum_unicos_1()
		{
			$query = $this->consulta("SELECT cod_uni, nom_uni,cali,cali_r FROM unicos WHERE ccar_uni= '$_GET[carr]' AND cmod_uni = '$_GET[mat]';");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function guardar($arr)
		{
			$this->consulta("UPDATE unicos SET cali ='$arr[or]', cali_r ='$arr[ex]' WHERE cod_uni='$arr[cod]' and ccar_uni = '$_GET[carr]' and cmod_uni = '$_GET[mat]'");
		}
		public function carr_tecno()
		{
			$query = $this->consulta("SELECT carrera FROM escolar WHERE codigo = '$_SESSION[codigo]'");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function carr_grados()
		{
			$query = $this->consulta("SELECT distinct gdo_cal,tno_cal,gpo_cal FROM cali WHERE cic_cal='2014A' AND carr_cal='$_GET[carr]'");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function sec_lis_mat()
		{
			$query = $this->consulta("SELECT nom_pes, casg_prof, sec FROM asig_prof
				INNER JOIN planes ON ccar_pes = ccar_prof AND gdo_pes = gdo_prof AND casg_pes = casg_prof
				WHERE ccar_prof='$_GET[carr]' AND gdo_prof = '$_GET[gr]' AND gpo_prof='$_GET[g]' ");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function sec_lis_alu()
		{
			$query = $this->consulta("SELECT distinct nom_ubi,cod_cal,num_cal,num_cal2 FROM cali
				INNER JOIN ubicacion on calu_ubi=cod_cal
				WHERE cic_cal='2014A' AND carr_cal='$_GET[carr]' AND gdo_cal='$_GET[gr]' AND gpo_cal= '$_GET[g]' AND asig_cal='$_GET[m]' order by nom_ubi ");
			while ( $tsArray = $this->fetch_assoc($query) ) {
				$data[] = $tsArray;	
			}
			return $data;
		}
		public function sec_save($arr,$fecha)
		{
			$this->consulta("UPDATE cali SET num_cal ='$arr[or]', num_cal2 ='$arr[ex]', fec_cal ='$fecha' WHERE cod_cal='$arr[cod]' and carr_cal = '$_GET[carr]' and asig_cal = '$_GET[m]' and gdo_cal = '$_GET[gr]' ");
		}
		public function marcar_pro()
		{
			$this->consulta("UPDATE asig_prof SET sec ='1' WHERE ccar_prof = '$_GET[carr]' and casg_prof = '$_GET[m]' and gdo_prof = '$_GET[gr]' ");
		}
		function __destruct() {
			parent::__destruct();
		}
	}
?>