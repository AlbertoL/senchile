<div class="container cuerpo">
	<div class="row container-fluid bg-submenu">
		<form class="navbar-form navbar-left" role="search">
	  		<div class="form-group col-sm-3">
	  			<div class="input-group">
      				<div class="input-group-addon bg-white"><span class="glyphicon glyphicon-calendar gly-color"></span></div>
      					<input type="text" class="form-control input-sm" id="date-inicio" placeholder="Inicio">
    			</div>
	  		</div>
	  		<div class="form-group col-sm-3">
	  			<div class="input-group">
      				<div class="input-group-addon bg-white"><span class="glyphicon glyphicon-calendar gly-color"></span></div>
      					<input type="text" class="form-control input-sm" id="date-termino" placeholder="Termino">
    			</div>
	  		</div>
    		<div class="form-group col-sm-3">
    			<div class="input-group">
      				<div class="input-group-addon bg-white">
      					<span class="glyphicon glyphicon-compressed gly-color"></span>
      				</div>
      					<input type="text" class="form-control input-sm" id="" placeholder="N° Golpe">
    			</div>
    		</div>
    		<div class="form-group col-sm-2">
		  		<button type="submit" class="btn btn-primary btn-sm">
		  			<span class="glyphicon glyphicon-search"></span> Buscar
		  		</button>
	  		</div>
		</form>
	</div>
	<div class="row container">
		<div class="page-header">
  			<h1>Panel Administración <small>Equipos</small></h1>
		</div>
		<div class="panel panel-primary">
  			<div class="panel-heading">Panel Equipos</div>
  			<?php
  				if ($this->session->flashdata('mensaje')!='') {
  			?>	
  					<div class=" alert alert-<?php echo $this->session->flashdata('css')?>">
  					<?php echo $this->session->flashdata('mensaje')?>
  					</div>
  					<?php
  				}
  			?>
  			<div class="panel-body">
    			<a href="<?php echo base_url()?>prueba/add" class="btn btn-success">Nuevo</a>
    			<br>
 			</div>
  			<div class="table-responsive">
	  			<table class="table table-striped table-hover text-center">
		  			<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center"><span class="glyphicon glyphicon-calendar"></span> Fecha</th>
							<th class="text-center"><span class="glyphicon glyphicon-compressed"></span> N° Golpe</th>
							<th class="text-center"><span class="glyphicon glyphicon-compressed"></span> Nombre</th>
							<th class="text-center"><span class="glyphicon glyphicon-home"></span> Área</th>
							<th class="text-center"><span class="glyphicon glyphicon-cog"></span> Ácciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($datos as $dato) 
							{
						?>
							<tr>
								<td><?php echo $dato->id_panel?></td>
								<td><?php echo fecha($dato->fecha)?></td>
								<td><?php echo $dato->num_golpe?></td>
								<td><?php echo $dato->nombre_equipo?></td>
								<td><?php echo $dato->area?></td>
								<td>
									<a href="<?php echo base_url()?>prueba/edit/<?php echo $dato->id_panel?>" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="<?php echo base_url()?>prueba/delete/<?php echo $dato->id_panel?>" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
									<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
									<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
								</td>
							</tr>
						<?php
							}

						?>
						
										
						
					</tbody>
	   			</table>
   			</div>
		</div>
	</div>	
</div>