<?php
	class general extends datebase
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function iniciar($table)
		{
			$query = $this->consulta("SELECT codigo, nombre, nip FROM $table WHERE codigo = '$_POST[user]' ") or die("Error");
			$sea= $this->fetch_array($query);
			if (utf8_decode($_POST['ps']) == $sea['nip']) {
				return $sea;
			}else{
				return "";
			}
		}
	}

?>