<?php
	class vista_Al
	{
		public function lista_C()
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("alumnos/static/lista.php")
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function preguntas()
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => load_page("alumnos/static/preguntas.html")
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function view_principal()
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("alumnos/static/principal.html")
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function calis($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("alumnos/static/calificaciones.html",$arr)
			];
			$templad = dinamic("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
	}
?>