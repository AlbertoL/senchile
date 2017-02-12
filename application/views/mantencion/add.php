<div class="container cuerpo">
	<div class="">
		<h2 class="text-center"><span class="glyphicon glyphicon-wrench" aria-hidden="true"> </span><strong> Datos Equipos</strong></h2>
	</div>
	<form action="#">
			<!--Inicio Formulario DATOS EQUIPO -->
		<div class="row">
			<div class="col-xs-12" data-example-id="button-group-nesting">
				<div class="row">
					<div><h4 class="page-header">Datos Equipo</h4></div>
					<div class="form-group col-sm-3">
	    				<label for="idmail">TAG</label>
	    				<input type="text" class="form-control" id="idmail" placeholder="TAG">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="golpe">N° de Golpe</label>
	    				<input type="text" class="form-control" id="golpe" placeholder="N° de Golpe">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="name-equipo">Nombre de Equipo</label>
	    				<input type="text" class="form-control" id="name-equipo" placeholder="Nombre Equipo">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="name-area">Área</label>
	    				<select name="area" class="form-control" id="name-area">
	    					<option value="1">Fibra</option>
	    				</select>
	  				</div>
				</div>
				<div id="ver" class="row collapse">
					<div class="form-group col-sm-3">
	    				<label for="ubicación">Ubicación Técnica</label>
	    				<input type="text" name="ubicacion" class="form-control" id="ubicacion" placeholder="Ubicación">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="ubicación">Código SAP</label>
	    				<input type="text" name="sap" class="form-control" id="sap" placeholder="SAP">
	  				</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="button" id="btn-down-one" class="btn btn-warning btn-xs" role="button" data-toggle="collapse" data-target="#ver" aria-expanded="false" aria-controls="ver">
							<span id="icon-down-one" class="glyphicon glyphicon-chevron-down"></span>
						</button>
					</div>
				</div>
			</div>
		</div>
			<!-- Fin DATOS EQUIPOS -->

			<!-- INICIO DATOS DE PLACA -->
		<div class="row">
			<div><h4 class="page-header">Datos de Placa</h4></div>
			<div class="col-sm-4">
				<div class="form-group">
    				<label for="marca">Marca</label>
    				<select name="marca" class="form-control" id="marca">
    					<option value="1">Fibra</option>
    				</select>
  				</div>
	  			<div class="form-group">
	    			<label for="modelo">Modelo</label>
	    			<input type="text" class="form-control" id="modelo" placeholder="Modelo">
	  			</div>
	  			<div class="form-group">
	    			<label for="montaje">Montaje</label>
	    			<select name="montaje" class="form-control" id="montaje">
	    				<option value="1">B5</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="clase">Clase AISL</label>
	    			<select name="clase" class="form-control" id="clase">
	    				<option value="1">CLF</option>
	    			</select>
  				</div>
	  			<div class="form-group">
	    			<label for="frecuencia">Frecuencia</label>
	    			<select name="frecuencia" class="form-control" id="frecuencia">
	    				<option value="1">50 HZ</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="conexion">Conexión</label>
	    			<select name="conexion" class="form-control" id="conexion">
	    				<option value="1">Estrella</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="potencia">Potencia</label>
	    			<input type="text" class="form-control" id="potencia" placeholder="Potencia">
	  			</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
	    			<label for="voltaje">Voltaje</label>
	    			<select name="voltaje" class="form-control" id="voltaje">
	    				<option value="1">690</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="corriente">Corriente</label>
	    			<input type="text" class="form-control" id="corriente" placeholder="corriente">
	  			</div>
	  			<div class="form-group">
	    			<label for="pesomotor">Peso Motor</label>
	    			<input type="text" class="form-control" id="potencia" placeholder="Peso Motor">
	  			</div>
	  			<div class="form-group">
	    			<label for="ip">IP</label>
	    			<input type="text" class="form-control" id="ip" placeholder="IP">
	  			</div>
	  			<div class="form-group">
	    			<label for="roda">ROD LADO A</label>
	    			<input type="text" class="form-control" id="roda" placeholder="ROD LADO A">
	  			</div>
	  			<div class="form-group">
	    			<label for="rodb">ROD LADO B</label>
	    			<input type="text" class="form-control" id="rodb" placeholder="ROD LADO B">
	  			</div>
	  			<div class="form-group">
	    			<label for="norma">Norma</label>
	    			<select name="norma" class="form-control" id="norma">
	    				<option value="1">IEC</option>
	    			</select>
	  			</div>
	  			
			</div>
			<div class="col-sm-4">
	  			<div class="form-group">
	    			<label for="tmotor">Tipo Motor</label>
	    			<input type="text" name="tmotor" class="form-control" id="tmotor" placeholder="Tipo Motor">
	  			</div>
	  			<div class="form-group">
	    			<label for="frame">Frame</label>
	    			<input type="text" class="form-control" id="frame" placeholder="Frame">
	  			</div>
	  			<div class="form-group">
	    			<label for="rpm">RPM</label>
	    			<input type="text" name="rpm" class="form-control" id="rpm" placeholder="RPM">
	  			</div>
	  			<div class="form-group">
	    			<label for="rotor">Tipo Rotor</label>
	    			<input type="text" name="rotor" class="form-control" id="rotor" placeholder="Tipo Rotor">
	  			</div>
	  			<div class="form-group">
	    			<label for="">Fact. Pot.</label>
	    			<input type="text" name="fact" class="form-control" id="fact" placeholder="Fact Pot">
	  			</div>
	  			<div id="mostrar" class="form-group collapse">
	    			<label for="">Procedencia</label>
	    			<input type="text" name="procedencia" class="form-control" id="procedencia" placeholder="Procedencia">
	  			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<button type="button" id="btn-down-two" class="btn btn-warning btn-xs" role="button" data-toggle="collapse" data-target="#mostrar" aria-expanded="false" aria-controls="mostrar">
						<span id="icon-down-two" class="glyphicon glyphicon-chevron-down"></span>
				</button>
			</div>
		</div>
		<!-- FIN DATOS DE PLACA -->
		<!-- INICIO DATOS ADICIONALES -->
		<div class="row">
			<div><h4 class="page-header">Datos Adicionales</h4></div>
			<div class=" col-xs-12 col-sm-4">
				<div class="form-group">
	    			<label for="posicion">Posición Caja Conexiones</label>
	    			<select name="posicion" class="form-control" id="posicion">
	    				<option value="1">Izquierda</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="acoplamiento">Tipo Acoplamiento</label>
	    			<select name="acoplamiento" class="form-control" id="acoplamiento">
	    				<option value="1">Machon</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="montado">Montado en:</label>
	    			<select name="montado" class="form-control" id="montado">
	    				<option value="1">Selecionar</option>
	    			</select>
	  			</div>
	  			
			</div>
			<div class="col-xs-12 col-sm-4">
	  			<div class="form-group">
	    			<label for="giro">Sentido Giro</label>
	    			<select name="giro" class="form-control" id="giro">
	    				<option value="1">Anti-Horario</option>
	    			</select>
	  			</div>
				<div class="form-group">
	    			<label for="proteccion">Protección Machon</label>
	    			<select name="proteccion" class="form-control" id="proteccion">
	    				<option value="1">No</option>
	    			</select>
	  			</div>
	  			
			</div>
			<div class="col-sm-4">
				<div class="form-group">
	    			<label for="pmotor">Protección Motor</label>
	    			<select name="pmotor" class="form-control" id="pmotor">
	    				<option value="1">Si</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="carcasa">Cable Tierra Carcasa</label>
	    			<select name="carcasa" class="form-control" id="carcasa">
	    				<option value="1">Si</option>
	    			</select>
	  			</div>
			</div>
			<!-- <div class="clearfix"></div> -->
			
		</div>
		<!-- INICIO DATOS COMPLEMENTARIOS -->
		<div id="desplegar" class="row collapse">
			<div><h4 class="page-header">Datos Complementarios</h4></div>
			<div class="col-sm-4">
				<div class="form-group">
    				<label for="prensa">Prensa Cable</label>
    				<input type="text" name="prensa" id="prensa" class="form-control" placeholder="Prensa Cable">
  				</div>
  				<div class="form-group">
    				<label for="pernos">Pernos Gatos</label>
    				<input type="text" name="pernos" class="form-control" id="pernos" placeholder="Pernos Gatos">
  				</div>
  				<div class="form-group">
    				<label for="conductor">Tipo Conductor</label>
    				<input type="text" name="conductor" class="form-control" id="conductor" placeholder="T. Conductor">
  				</div>
  				<div class="form-group">
    				<label for="brida">N° Pernos Brida</label>
    				<input type="text" name="brida" class="form-control" id="brida" placeholder="N° Brida">
  				</div>

			</div>
			<div class="col-sm-4">
				<div class="form-group">
    				<label for="anclaje">Medida Perno Anclaje</label>
    				<input type="text" name="anclaje" id="anclaje" class="form-control" placeholder="M. Perno Anclaje">
  				</div>
  				<div class="form-group">
    				<label for="pterreno">Posición en Terreno</label>
    				<input type="text" name="pterreno" class="form-control" id="pterreno" placeholder="P. en Terreno">
  				</div>
  				<div class="form-group">
    				<label for="ncorreas">N° de Correas</label>
    				<input type="text" name="ncorreas" class="form-control" id="ncorreas" placeholder="N° de Correas">
  				</div>
  				<div class="form-group">
    				<label for="tagterreno">TAG en Terreno</label>
    				<input type="text" name="tagterreno" class="form-control" id="tagterreno" placeholder="TAG en Terreno">
  				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
    				<label for="mbrida">Medida Pernos Brida</label>
    				<input type="text" name="mbrida" id="mbrida" class="form-control" placeholder="M. Pernos Brida">
  				</div>
  				<div class="form-group">
    				<label for="pgato">Medida Pernos Gato</label>
    				<input type="text" name="pgato" class="form-control" id="pgato" placeholder="M. Pernos Gato">
  				</div>
  				<div class="form-group">
    				<label for="acoplamiento">Forma de Acoplamiento</label>
    				<input type="text" name="acoplamiento" class="form-control" id="acoplamiento" placeholder="Forma de Acoplamiento">
  				</div>
  				<div class="form-group">
    				<label for="tagterreno">Tipo de Correas</label>
    				<input type="text" name="tagterreno" class="form-control" id="tagterreno" placeholder="T. Correas">
  				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="obs">Observaciones:</label>
					<textarea name="obs" class="form-control" id="obs" rows="6"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			<button type="button" id="btn-down-three" class="btn btn-warning btn-xs" role="button" data-toggle="collapse" data-target="#desplegar" aria-expanded="false" aria-controls="desplegar">
					<span id="icon-down-three" class="glyphicon glyphicon-chevron-down"></span>
				</button>
			</div>
		</div>
		<div class="row">
			<div><h4 class="page-header">Seleccione una Imagen</h4></div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="archivo1">Imagen</label>
					<input type="file" class="archivo" id="archivo1">
					<p class="help-block">Archivo máximo 2 MB</p>
		 		</div>
			</div>
			<div id="marchivo" class="col-sm-8 collapse">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="archivo2">Imagen</label>
							<input type="file" class="archivo" id="archivo2">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="archivo3">Imagen</label>
							<input type="file" class="archivo" id="archivo3">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			<button type="button" id="btn-down-four" class="btn btn-warning btn-xs" role="button" data-toggle="collapse" data-target="#marchivo" aria-expanded="false" aria-controls="marchivo">
					<span id="icon-down-four" class="glyphicon glyphicon-chevron-down"></span>
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3 pad">
				<input type="submit" class="btn btn-primary btn-lg" value="Registrar">
			</div>
		</div>
			
	</form>
</div>