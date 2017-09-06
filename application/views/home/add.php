<div class="container cuerpo">

	<form action="#">
			<!--Inicio Formulario DATOS EQUIPO -->
		<div class="row seccion">
			<div class="col-xs-12" data-example-id="button-group-nesting">
				<div class="row">
					<div><h4 class="title_one">Datos Equipo</h4></div>
					<div class="form-group col-sm-3">
	    				<label for="idmail">TAG</label>
	    				<input type="text" class="form-control input-sm" id="idmail" placeholder="TAG">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="golpe">N° de Golpe</label>
	    				<input type="text" class="form-control input-sm" id="golpe" placeholder="N° de Golpe">
	  				</div>
	  				
	  				<div class="form-group col-sm-3">
	    				<label for="name-area">Empresa</label>
	    				<select name="area" class="form-control input-sm" id="name-area">
	    					<option value="1">Santa Fe</option>
	    				</select>
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="name-area">Área</label>
	    				<select name="area" class="form-control input-sm" id="name-area">
	    					<option value="1">Fibra</option>
	    				</select>
	  				</div>
				</div>
				<div id="ver" class="row collapse">
					<div class="form-group col-sm-3">
	    				<label for="name-equipo">Nombre de Equipo</label>
	    				<input type="text" class="form-control input-sm" id="name-equipo" placeholder="Nombre Equipo">
	  				</div>
					<div class="form-group col-sm-3">
	    				<label for="ubicación">Ubicación Técnica</label>
	    				<input type="text" name="ubicacion" class="form-control input-sm" id="ubicacion" placeholder="Ubicación">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="ubicación">Código SAP</label>
	    				<input type="text" name="sap" class="form-control input-sm" id="sap" placeholder="SAP">
	  				</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="button" id="btn-down-one" class="btn btn-purple btn-xs" role="button" data-toggle="collapse" data-target="#ver" aria-expanded="false" aria-controls="ver">
							<span id="icon-down-one" class="glyphicon glyphicon-chevron-down"></span>
						</button>
					</div>
				</div>
			</div>
		</div>
			<!-- Fin DATOS EQUIPOS -->

			<!-- INICIO DATOS DE PLACA -->
		<div class="row seccion">
			<div><h4 class="title_two">Datos de Placa</h4></div>
			<div class="col-sm-3">
				<div class="form-group">
    				<label for="marca">Marca</label>
    				<select name="marca" class="form-control input-sm" id="marca">
    					<option value="1">Fibra</option>
    				</select>
  				</div>
	  			<div class="form-group">
	    			<label for="modelo">Modelo</label>
	    			<input type="text" class="form-control input-sm" id="modelo" placeholder="Modelo">
	  			</div>
	  			<div class="form-group">
	    			<label for="montaje">Montaje</label>
	    			<select name="montaje" class="form-control input-sm" id="montaje">
	    				<option value="1">B5</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="clase">Clase AISL</label>
	    			<select name="clase" class="form-control input-sm" id="clase">
	    				<option value="1">CLF</option>
	    			</select>
  				</div>
	  			<div class="form-group">
	    			<label for="frecuencia">Frecuencia</label>
	    			<select name="frecuencia" class="form-control input-sm" id="frecuencia">
	    				<option value="1">50 HZ</option>
	    			</select>
	  			</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
	    			<label for="conexion">Conexión</label>
	    			<select name="conexion" class="form-control input-sm" id="conexion">
	    				<option value="1">Estrella</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="potencia">Potencia</label>
	    			<input type="text" class="form-control input-sm" id="potencia" placeholder="Potencia">
	  			</div>
				<div class="form-group">
	    			<label for="voltaje">Voltaje</label>
	    			<input type="text" class="form-control input-sm" id="voltaje" placeholder="Voltaje"/>
	  			</div>
	  			<div class="form-group">
	    			<label for="corriente">Corriente</label>
	    			<input type="text" class="form-control input-sm" id="corriente" placeholder="corriente">
	  			</div>
	  			<div class="form-group">
	    			<label for="pesomotor">Peso Motor</label>
	    			<input type="text" class="form-control input-sm" id="potencia" placeholder="Peso Motor">
	  			</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
	    			<label for="ip">IP</label>
	    			<input type="text" class="form-control input-sm" id="ip" placeholder="IP">
	  			</div>
	  			<div class="form-group">
	    			<label for="roda">ROD LADO A</label>
	    			<input type="text" class="form-control input-sm" id="roda" placeholder="ROD LADO A">
	  			</div>
	  			<div class="form-group">
	    			<label for="rodb">ROD LADO V</label>
	    			<input type="text" class="form-control input-sm" id="rodb" placeholder="ROD LADO V">
	  			</div>
	  			<div class="form-group">
	    			<label for="norma">Norma</label>
	    			<select name="norma" class="form-control input-sm" id="norma">
	    				<option value="1">IEC</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="tmotor">Tipo Motor</label>
	    			<input type="text" name="tmotor" class="form-control input-sm" id="tmotor" placeholder="Tipo Motor">
	  			</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
	    			<label for="frame">Frame</label>
	    			<input type="text" class="form-control input-sm" id="frame" placeholder="Frame">
	  			</div>
	  			<div class="form-group">
	    			<label for="rpm">RPM</label>
	    			<input type="text" name="rpm" class="form-control input-sm" id="rpm" placeholder="RPM">
	  			</div>
	  			<div class="form-group">
	    			<label for="rotor">Tipo Rotor</label>
	    			<input type="text" name="rotor" class="form-control input-sm" id="rotor" placeholder="Tipo Rotor">
	  			</div>
				<div class="form-group">
	    			<label for="">Fact. Pot.</label>
	    			<input type="text" name="fact" class="form-control input-sm" id="fact" placeholder="Fact Pot">
	  			</div>
	  			<div class="form-group">
		    		<label for="">Procedencia</label>
		    		<input type="text" name="procedencia" class="form-control input-sm" id="procedencia" placeholder="Procedencia">
		  		</div>
	  			
			</div>
			<div id="mostrar" class="col-xs-12 collapse">
				<div class="row">
					
		  			<div class="form-group col-sm-3">
		    			<label for="">V Ring LA</label>
		    			<input type="text" name="ring-la" class="form-control input-sm" id="Ring LA" placeholder="Ring LA">
		  			</div>
		  			<div class="form-group col-sm-3">
		    			<label for="">V Ring LV</label>
		    			<input type="text" name="ring-lv" class="form-control input-sm" id="ring-lv" placeholder="V Ring LV">
		  			</div>
		  			<div class="form-group col-sm-3">
		    			<label for="">Reten LA</label>
		    			<input type="text" name="reten-la" class="form-control input-sm" id="reten-la" placeholder="Reten LA">
		  			</div>
		  			<div class="form-group col-sm-3">
		    			<label for="">Reten LV</label>
		    			<input type="text" name="reten-lv" class="form-control input-sm" id="reten-lv" placeholder="Reten LV">
		  			</div>
					
				</div>
			</div>
			<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-12">
					<button type="button" id="btn-down-two" class="btn btn-yellow btn-xs" role="button" data-toggle="collapse" data-target="#mostrar" aria-expanded="false" aria-controls="mostrar">
						<span id="icon-down-two" class="glyphicon glyphicon-chevron-down"></span>
					</button>
				</div>
			</div>
			
			</div>

			
		</div>
		
		<!-- FIN DATOS DE PLACA -->
		<!-- INICIO DATOS ADICIONALES -->
		<div class="row seccion">
			<div><h4 class="title_three">Datos Adicionales</h4></div>
			<div class=" col-xs-12 col-sm-3">
				<div class="form-group">
	    			<label for="posicion">Posición Caja Conexiones</label>
	    			<select name="posicion" class="form-control input-sm" id="posicion">
	    				<option value="1">Izquierda</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="acoplamiento">Tipo Acoplamiento</label>
	    			<select name="acoplamiento" class="form-control input-sm" id="acoplamiento">
	    				<option value="1">Machon</option>
	    			</select>
	  			</div>	  			
			</div>
			<div class="col-xs-12 col-sm-3">
	  			<div class="form-group">
	    			<label for="giro">Sentido Giro</label>
	    			<select name="giro" class="form-control input-sm" id="giro">
	    				<option value="1">Anti-Horario</option>
	    			</select>
	  			</div>
				<div class="form-group">
	    			<label for="proteccion">Protección Machon</label>
	    			<select name="proteccion" class="form-control input-sm" id="proteccion">
	    				<option value="1">No</option>
	    			</select>
	  			</div>
	  			
			</div>
			<div class="col-sm-3">
				<div class="form-group">
	    			<label for="pmotor">Protección Motor</label>
	    			<select name="pmotor" class="form-control input-sm" id="pmotor">
	    				<option value="1">Si</option>
	    			</select>
	  			</div>
	  			<div class="form-group">
	    			<label for="carcasa">Cable Tierra Carcasa</label>
	    			<select name="carcasa" class="form-control input-sm" id="carcasa">
	    				<option value="1">Si</option>
	    			</select>
	  			</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
	    			<label for="rebobinado">Rebobinado</label>
	    			<select name="rebobinado" class="form-control input-sm" id="rebobinado">
	    				<option value="0">Selecionar</option>
	    				<option value="1">Si</option>
	    				<option value="2">No</option>
	    			</select>
	  			</div>
			</div>
			
			
		</div>
		<!-- INICIO DATOS COMPLEMENTARIOS -->
		<div class="row seccion">
			<div><h4 class="title_four">Datos Complementarios</h4></div>
			<div class="col-sm-3">
				<div class="form-group">
    				<label for="prensa">Prensa Cable</label>
    				<input type="text" name="prensa" id="prensa" class="form-control input-sm" placeholder="Prensa Cable">
  				</div>
  				<div class="form-group">
    				<label for="pernos">Pernos Gatos</label>
    				<input type="text" name="pernos" class="form-control input-sm" id="pernos" placeholder="Pernos Gatos">
  				</div>
  				<div class="form-group">
    				<label for="conductor">Tipo Conductor</label>
    				<input type="text" name="conductor" class="form-control input-sm" id="conductor" placeholder="T. Conductor">
  				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
    				<label for="brida">N° Pernos Brida</label>
    				<input type="text" name="brida" class="form-control input-sm" id="brida" placeholder="N° Brida">
  				</div>
				<div class="form-group">
    				<label for="anclaje">Medida Perno Anclaje</label>
    				<input type="text" name="anclaje" id="anclaje" class="form-control input-sm" placeholder="M. Perno Anclaje">
  				</div>
  				<div class="form-group">
    				<label for="pterreno">Posición en Terreno</label>
    				<input type="text" name="pterreno" class="form-control input-sm" id="pterreno" placeholder="P. en Terreno">
  				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
    				<label for="ncorreas">N° de Correas</label>
    				<input type="text" name="ncorreas" class="form-control input-sm" id="ncorreas" placeholder="N° de Correas">
  				</div>
  				<div class="form-group">
    				<label for="tagterreno">TAG en Terreno</label>
    				<input type="text" name="tagterreno" class="form-control input-sm" id="tagterreno" placeholder="TAG en Terreno">
  				</div>
				<div class="form-group">
    				<label for="mbrida">Medida Pernos Brida</label>
    				<input type="text" name="mbrida" id="mbrida" class="form-control input-sm" placeholder="M. Pernos Brida">
  				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
    				<label for="pgato">Medida Pernos Gato</label>
    				<input type="text" name="pgato" class="form-control input-sm" id="pgato" placeholder="M. Pernos Gato">
  				</div>
  				<div class="form-group">
    				<label for="acoplamiento">Forma de Acoplamiento</label>
    				<input type="text" name="acoplamiento" class="form-control input-sm" id="acoplamiento" placeholder="Forma de Acoplamiento">
  				</div>
  				<div class="form-group">
    				<label for="tagterreno">Tipo de Correas</label>
    				<input type="text" name="tagterreno" class="form-control input-sm" id="tagterreno" placeholder="T. Correas">
  				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="obs">Observaciones:</label>
					<textarea name="obs" class="form-control input-sm" id="obs" rows="6"></textarea>
				</div>
			</div>
		</div>
		
		<div class="row seccion">
			<div><h4 class="title_five">Seleccione una Imagen</h4></div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="archivo2"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagen</label>
							<input type="file" class="archivo" id="archivo2">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="archivo3"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagen</label>
							<input type="file" class="archivo" id="archivo3">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="archivo3"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagen</label>
							<input type="file" class="archivo" id="archivo3">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
					
				</div>
			</div>
			<div id="marchivo" class="col-sm-12 collapse">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="archivo2"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagen</label>
							<input type="file" class="archivo" id="archivo2">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="archivo3"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagen</label>
							<input type="file" class="archivo" id="archivo3">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="archivo3"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagen</label>
							<input type="file" class="archivo" id="archivo3">
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-sm-12">
				<button type="button" id="btn-down-four" class="btn btn-light-blue btn-xs" role="button" data-toggle="collapse" data-target="#marchivo" aria-expanded="false" aria-controls="marchivo">
					<span id="icon-down-four" class="glyphicon glyphicon-chevron-down"></span>
				</button>
			</div>

		</div>

		<div class="row seccion">
			<div><h4 class="title_six">Agregar Archivo</h4></div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="pdf"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> PDF </label>
							<input type="file" name="pdf" class="archivo" id="pdf"/>
							<p class="help-block">Archivo máximo 2 MB</p>
		 				</div>
					</div>					
				</div>
			</div>
		</div>



		
		<div class="row">
			<div class="col-xs-3 pad">
				<input type="submit" class="btn btn-primary" value="Registrar">
			</div>
		</div>
			
	</form>
</div>