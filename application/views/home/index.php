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
  			<div class="panel-body">
    			<a href="<?php echo base_url()?>home/add" class="btn btn-success">Nuevo</a>
    			<br>
<!--     			<p>Listado de motores ingresados al sistema. Opciones -> Modificar -> Reporte -> Mantención</p>
 -->  			</div>
  			<div class="table-responsive">
	  			<table class="table table-striped table-hover text-center">
		  			<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center"><span class="glyphicon glyphicon-calendar"></span> Fecha</th>
							<th class="text-center"><span class="glyphicon glyphicon-compressed"></span> N° Golpe</th>
							<th class="text-center"><span class="glyphicon glyphicon-home"></span> Área</th>
							<th class="text-center"><span class="glyphicon glyphicon-cog"></span> Ácciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>10-10-2016</td>
							<td>343434</td>
							<td>Pulpa</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>10-10-2016</td>
							<td>5656</td>
							<td>Pulpa</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>11-10-2016</td>
							<td>09865</td>
							<td>Pulpa</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>12-10-2016</td>
							<td>5432</td>
							<td>Pulpa</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>12-10-2016</td>
							<td>76543</td>
							<td>Pulpa</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>13-10-2016</td>
							<td>98497</td>
							<td>Pulpa</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>13-10-2016</td>
							<td>65209</td>
							<td>Pulpa</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Mantención"><span class="glyphicon glyphicon-wrench"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Reporte"><span class="glyphicon glyphicon-list-alt"></span></a>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
							</td>
						</tr>
					</tbody>
	   			</table>
   			</div>
		</div>
	</div>
</div>