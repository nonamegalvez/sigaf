<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"/>

		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/estiloPrincipal.css">
		<link rel="stylesheet" type="text/css" href="../css/estilosnav.css">
		<link rel="stylesheet" type="text/css" href="../css/component.css"/>
		<link rel="stylesheet" type="text/css" href="../css/estilo_tabs.css" />

		<!-- ------------------------------ Scripts Generales -------------------------------->
		<script type="text/javascript" src="../js/jquery.js"></script>

		


		

<!--AQUI VA HORA Y FECHA-->
		<script src="../js/tiempoactual.js"></script>
		<script>$(function(){startWatch(); return false;});</script>
		<!-- Script tiempo -->

<!---------------------------------------------------------------------------------------->
<title>Disponibilidad docente</title>
</head>
<body>
<header>
	<figure id="logo">
	<img src="../imagenes/logo.png" alt="">
	</figure>
	<div id="titulo">
		<h1>SISTEMA DE GESTIÓN ACADÉMICA (SIGAF)</h1>
		<h3>Facultad de Contaduría y Administración</h3>
	</div>
<figure id="cimarron"><img src="../imagenes/cimarron.png" alt=""></figure>
</header>
@include('includes.menu') 
<div id="indicadores">
	<div id="usuariofecha">
		<div id="usuario" class="texto_body">
			Usuario: {{Auth::user()->username}}
		</div>
		<div id="fecha" class="texto_body">
			Fecha Actualizada
		</div>
	</div>
	<div id="ubicacion" class="texto_body">
		Disponibilidad docente: Eliminación
	</div>
	<div id="loginmanual">
		<div id="login" class="texto_body">
			<img src="../imagenes/login.png" alt="">&nbsp;<a href="<?=URL::to('login/logout');?>"style="text-decoration:none; color:#004000;">Logout</a>
		</div>
		<div id="manual" class="texto_body">
			<img src="../imagenes/manual.png" alt=""><a href="<?=URL::to('ayuda/ayudadd');?>"style="text-decoration:none; color:#004000;">&nbsp;Manual</a>
		</div>
	</div>
</div>

		<section>
			<div class="nombre_coordinacion">Lic. en Informática</div>

			
		<fieldset id="dd_consulta">
			<legend>Consultar por:</legend>

			
				<div id="dd_consultaEmpleado">
					<label>No. Empleado: </label>
					<input class="dd_con_estilo_corto"type="text" name="dd_periodoConsulta" id="dd_periodoConsulta" list="datalist_NoEmpleado" size=1 onkeypress="ValidaSoloNumeros()"/>
					<datalist id="datalist_dd_NoEmpleado">
						<option value="1223">
						<option value="1245">
						<option value="3433">
					</datalist>
				</div>

				<div id="dd_consultarNombre">
					<label>Nombre: </label>
					<input type="text" class="dd_con_estilo_largo" name="dd_consultarPor" size=1/>
						
				</div>

					<div id="dd_btnBuscar"><input class="estilo_button2" style="width:145px" type="button" value="Buscar">
	
		</fieldset>

							<div id="dd_eliminarDocentes">
			                    <table class="dd_tablaImpartirMaterias">
									
									<thead class="dd_encabezadoImpartirMaterias">
										<tr>
											<th>NO. EMPLEADO</th>
											<th>NOMBRE</th>
											<th>HABILITAR/ DESHABILITAR</th>
											<th>MODIFICAR</th>
											<th>ELIMINAR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>	
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										<tr>
											<td>000453</td>
											<td>UNICE ESPINOZA</td>
											<td>HABILITADO</td>
											<td><input type="button" value="" class="clsModificarFila"></td>
											<td><input type="button" value="-" title='Seleccionar' class="clsEliminarFila" id="eliminar"/></td>	
										</tr>
										
																		
									
									</tbody>
								</table>
							</div>

		</section>

	<footer>
			<div id="pie_correo">email: emma.castillejos@uabc.edu.mx</div>
			<div id="pie_tel">Teléfono: 664 188 9221</div>

	</footer>

</div>
</body>

<script src="js/mascara.js" type="text/javascript"></script>
	
	<!--mascara para los teléfonos-->
	<script type="text/javascript">
       jQuery(function($){
      /* $("#date").mask("99/99/9999");*/
       $(".telefonos").mask('(999) 999-9999');
       });
	</script>
     
     <!--SCRIPT PARA QUE SOLO ACEPTE NUMEROS--> 
	<script language="javascript">
    	function ValidaSoloNumeros() {
        if ((event.keyCode < 48) || (event.keyCode > 57)) 
        	event.returnValue = false;
            }
              function Validate(obj){
              if(true != false){
              // Así damos de nuevo el foco al INPUT
                    obj.focus();
                  }
                }    
    
    </script>
</html>