<div class="container cuerpo">
	<div class="row container-fluid bg-submenu">
		<form class="navbar-form navbar-left" role="search">
	  		<div class="form-group col-sm-4">
	  			<div class="input-group">
      				<div class="input-group-addon bg-white"><span class="glyphicon glyphicon-user gly-color"></span></div>
      					<input type="text" class="form-control input-sm" id="" placeholder="Nombre">
    			</div>
	  		</div>
	  		<div class="form-group col-sm-4">
	  			<div class="input-group">
      				<div class="input-group-addon bg-white"><span class="glyphicon glyphicon-user gly-color"></span></div>
      					<input type="text" class="form-control input-sm" id="" placeholder="Usuario">
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
  			<h1>Panel Administración <small>Usuarios</small></h1>
		</div>
		<div class="panel panel-primary">
  			<div class="panel-heading">Panel Usuarios</div>
  			<div class="panel-body">
    			<a href="<?php echo base_url()?>usuarios/add" class="btn btn-success">Nuevo</a>
  			</div>
  			<div class="table-responsive">
	  			<table class="table table-striped table-hover text-center">
		  			<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center"><span class="glyphicon glyphicon-user"></span> Nombre</th>
							<th class="text-center"><span class="glyphicon glyphicon-user"></span> Usuario</th>
							<th class="text-center"><span class="glyphicon glyphicon-th-list"></span> Privilegio</th>
							<th class="text-center"><span class="glyphicon glyphicon-cog"></span> Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Pedro Valencia</td>
							<td>pvalencia</td>
							<td>Administrador</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Rodrigo Medina</td>
							<td>rmedina</td>
							<td>Supervisor</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Marcelo Figueroa</td>
							<td>mfigueroa</td>
							<td>Supervisor</td>
							<td>
								<a href="#" class="link-icon" data-toggle="tooltip" data-placement="left" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Eduardo Fuentealba</td>
							<td>efuentealba</td>
							<td>Administrador</td>
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