<?php
	class vista
	{
		public function index_login()
		{
			$valores = [
			'Title' => "Escuela Politecnica Guadalajara",
			'container' => dinamic("general/static/login.html")
			];
			$templad = dinamic("main/templates/principal.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function indevido()
		{
			$valores = [
			'Title' => "Escuela Politecnica Guadalajara",
			'container' => load_page("general/static/indevido.html")
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
	}
?>