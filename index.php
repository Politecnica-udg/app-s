<?php
	session_start();
	function login_app($app){
		foreach ($app as $key => $value) {
			require_once( $value."/model.php");
			require_once( $value."/views.php");
			require_once( $value."/controller.php");
		}
	}
      	function lang($tem){
      		$str_datos = file_get_contents("main/templates/languages/es_MX.json");
      		$lang = json_decode($str_datos,true);
		foreach($lang as $clave => $valor ){
				$tem = str_replace('['.$clave.']',$valor,$tem);
			}	
		return $tem;
	}
	function load_page($page){
		return file_get_contents($page);
	}
	function dinamic($page,$arr = null){
		ob_start();
		require_once ($page);
		$sections = ob_get_clean();
		return $sections;
	}
	function view_page($html){
		echo $html;
	}
	function remplas($array,$tem){
		foreach($array as $clave => $valor ){
				$tem = str_replace('{'.$clave.'}',$valor,$tem);
			}	
		return lang($tem);
	}
	require_once 'main/settings.php';
?>