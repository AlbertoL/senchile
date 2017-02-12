<div class="container cuerpo">
	<div class="row container-fluid bg-submenu">
		<form class="navbar-form navbar-left" role="search">
	  		<div class="form-group col-sm-8">
	  			<div class="input-group">
      				<div class="input-group-addon bg-white"><span class="glyphicon glyphicon-home gly-color"></span></div>
      					<input type="text" class="form-control input-sm" id="" placeholder="Nombre">
    			</div>
	  		</div>
	  		
    		<div class="form-group col-sm-4">
		  		<button type="submit" class="btn btn-primary btn-sm btn-block">
		  			<span class="glyphicon glyphicon-search"></span> Buscar
		  		</button>
	  		</div>
		</form>
	</div>
	<div class="row container">
		<div class="page-header">
  			<h1>Panel Administración <small>Mantención</small></h1>
		</div>
		<div class="panel panel-primary">
  			<div class="panel-heading">Panel Mantención</div>
  			<div class="panel-body">
    			<a href="<?php echo base_url()?>mantencion/add" class="btn btn-success">Nuevo</a>
  			</div>
  			<div class="table-responsive">
	  			<table class="table table-striped table-hover text-center">
		  			<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center"><span class="glyphicon glyphicon-bookmark"></span> OM</th>
							<th class="text-center"><span class="glyphicon glyphicon-tag"></span> TAG</th>
							<th class="text-center"><span class="glyphicon glyphicon-home"></span> Área</th>
							<th class="text-center"><span class="glyphicon glyphicon-globe"></span> Planta</th>
							<th class="text-center"><span class="glyphicon glyphicon-cog"></span> Acción</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Codigo OM</td>
							<td>Codigo TAG</td>
							<td>Cog-área</td>
							<td>Santa Fe</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Codigo OM</td>
							<td>Codigo TAG</td>
							<td>Cod-área</td>
							<td>Santa Fe</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
							</td>
						</tr>
					</tbody>
	   			</table>
   			</div>
		</div>
	</div>
	
</div>