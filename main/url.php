<?php
	if ($_GET['P']=='distroy') {
		$objects['poli']->distroy();
	}elseif ($_SESSION AND !$_SESSION['error']) {
		if ($_GET) {
			if ($_GET['tipo']=="maestro" AND $_SESSION['tipo'] == "maestro") {

				if($_POST['opcion']=="si"){

					if ($_POST['p'] == "si") {

						$objects["maestros"]->cerrar();

					}else{

						$objects["maestros"]->grabar();
					}

				}elseif ($_GET['m'] and $_GET['c']) {

					$objects["maestros"]->evaluar();

				}elseif($_GET['accion']=='lista'){

					$objects["maestros"]->lista();

				}else{

					$objects["maestros"]->principal();

				}

			}elseif ($_GET['tipo']=="alumno" AND $_SESSION['tipo'] == "alumno") {
				if ($_GET['accion']) {
					if ($_GET['accion']=='evaluar') {

						if ($_POST) {

							$objects['alumnos']->grabar();

						}else{

							$objects['alumnos']->evaluar();

						}

					}elseif($_GET['accion']=="calificaciones"){
						$objects['alumnos']->calificaciones();
					} else{	

						$objects['alumnos']->lista();
					}
				}else{
					$objects['alumnos']->principal();
				}

			}elseif($_GET['tipo']=="administrativo" AND $_SESSION['tipo'] == "administrativo"){
				if ($_GET['accion']=='todos') {
					$objects["admon"]->lista();
				}elseif ($_GET['accion']=='falta') {
					$objects["admon"]->falta();
				}elseif ($_GET['accion'] == 'a_m_total') {
					if ($_GET['cal']) {
						if ($_GET['carr']) {
							if ($_GET['g'] AND $_GET['gr']) {
								if ($_GET['m']) {
									$objects["admon"]->listar_cali();
								}else{
									$objects["admon"]->listar_materias();
								}
							}else{
								$objects["admon"]->listar_grupos();
							}
						}else{
							$objects["admon"]->listar_carreras();
						}
					}else{
						$objects["admon"]->listar_calendarios();
					}
				}elseif($_GET['accion'] ==  'cali_unico'){
					if ($_GET['carr']) {
						if ($_GET['mat']) {
							if ($_POST) {
								$objects["admon"]->grabar();
							}else{
								$objects["admon"]->grupo_unico_cal();
							}
						}else{
							$objects["admon"]->listar_materias_unicos();
						}
					}else{
						$objects["admon"]->listar_grupos_unicos();
					}
				}elseif ($_GET['accion']=="lista_tec") {
					if ($_GET['carr']) {
						if ($_GET['gr']) {
							if ($_GET['m']) {
								if ($_POST) {
									$objects["admon"]->sec_lis_save();
								}else{
									$objects["admon"]->sec_lis_alu();
								}
							}else{
								$objects["admon"]->sec_lis_mat();
							}
						}else{
							$objects["admon"]->sec_grados();
						}
					}else{
						$objects["admon"]->secretarias();
					}	
				} else{
					$objects["admon"]->principal();
				}

			}elseif ($_GET['tipo']=="pdf") {

				$objects['maestros']->pdf_repin();

			}else{
				$objects["poli"]->acceso_indevido();
			}
		}else{
			$objects["poli"]->redireccion();
		}

	}elseif ($_POST) {

		$objects["poli"]->in();

		}else{

		$objects["poli"]->loguin();

	}
?>