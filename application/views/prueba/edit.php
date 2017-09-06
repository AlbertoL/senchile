<div class="container fondo">
	<ol class="breadcrumb">
  		<li><a href="<?php echo base_url()?>prueba/listado/<?php echo $pagina?>">Listado Equipos</a></li>
  		<li><a href="<?php echo base_url()?>prueba/edit">Editar Equipo</a></li>
	</ol>
	<div class="">
		<h2 class="text-center"><span class="glyphicon glyphicon-wrench" aria-hidden="true"> </span><strong> Datos Equipos</strong></h2>
	</div>
			<!--Inicio Formulario DATOS EQUIPO -->
		<div class="row">
			<div class="col-xs-12">
				<div><h3 class="page-header">Datos Equipo</h3></div>
				<?php
					$errors = validation_errors('<li>','</li>');
					if ($errors!= "") {
				?>
					<div class="alert alert-danger">
					<ul>
						<?php echo $errors; ?>
					</ul>
					</div>
				<?php
					}
				?>
			</div>	
		</div>
		<div class="row">
			<?php echo form_open(null,array("name"=>"form"));?>
			<div class="col-xs-12" data-example-id="button-group-nesting">
			
				<div class="row">
	  				<div class="form-group col-sm-3">
	    				<label for="num_golpe">N° de Golpe</label>
	    				<input type="text" class="form-control" id="num_golpe" name="num_golpe" value="<?php echo set_value_input($datos,'num_golpe',$datos->num_golpe) ?>" placeholder="N° de Golpe">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="nombre_equipo">Nombre de Equipo</label>
	    				<input type="text" name="nombre_equipo" class="form-control" id="nombre_equipo" value="<?php echo set_value_input($datos,'nombre_equipo',$datos->nombre_equipo) ?>" placeholder="Nombre Equipo" autofocus="true">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="area">Área</label>
	    				<input type="text" name="area" class="form-control" id="area" value="<?php echo set_value_input($datos,'area',$datos->area) ?>" placeholder="Área">
	  				</div>
	  				<div class="form-group col-sm-3">
	    				<label for="fecha">Fecha</label>
	    				<input type="text" name="fecha" class="form-control" id="fecha" value="<?php echo set_value_input($datos,'fecha',$datos->fecha) ?>" placeholder="Fecha">
	  				</div>
				</div>
			</div>
			<div class="col-xs-3 pad">
				<input type="hidden" name="id" value="<?php echo $id?>">
				<input type="submit" class="btn btn-primary btn-lg" value="Registrar">
			</div>
			<?php echo form_close();?>
		</div>

			
<!-- 	</form>
 --></div>