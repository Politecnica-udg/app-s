<?php
	class vista_A
	{
		public function lista()
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/lista.php")
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function faltas()
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/faltas.php")
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function principal($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/principal.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function en_listar(){
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/calendarios.php")
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function lista_car($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/carreras_lista.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function lista_grupos($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/grupos_lista.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_materias($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/materias_lista.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_cali($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/alumnos_lista.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_carr($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/grupo_unico.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_mat($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/materia_unico.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function evaluar($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/evaluar.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_carr_sec($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/carr_sec.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_grupo_sec($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/grad_sec.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_mat_sec($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/mat_sec.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
		public function listar_alu_sec($arr)
		{
			$valores = [
			'Title' => "[title_ci]",
			'container' => dinamic("admon/static/alu_sec.php",$arr)
			];
			$templad = load_page("general/page.html");
			$mostrar = remplas($valores,$templad);
			view_page($mostrar);
		}
	}
?>