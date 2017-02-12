<div class="container">
	<div class="row">
		<div class="container"><h3 class="page-header">Nuevo Usuario</h3></div>
		<div class="col-xs-12 col-sm-6">
		<form action="#">
			<div class="form-group">
	    		<label for="name-employee"><span class="glyphicon glyphicon-user"></span> Nombre Personal</label>
	    		<input type="text" class="form-control" id="name-employee" placeholder="Nombre Personal">
	  		</div>
	  		<div class="form-group">
	    		<label for="name-user"><span class="glyphicon glyphicon-user"></span> Nombre Usuario</label>
	    		<input type="text" class="form-control" id="name-user" placeholder="Nombre Usuario">
	  		</div>
	  		<div class="form-group">
	    		<label for="user-pass"><span class="glyphicon glyphicon-lock"></span> Contraseña</label>
	    		<input type="text" class="form-control" id="user-pass" placeholder="Contraseña">
	  		</div>
	  		<div class="form-group">
	    		<label for="user-permiso"><span class="glyphicon glyphicon-list-alt"></span> Tipo Usuario</label>
	    		<select name="tipo" class="form-control" id="user-permiso">
	    			<option value="1">Administrador</option>
	    			<option value="2">Supervisor</option>
	    			<option value="2">Cliente</option>
	    		</select>
	  		</div>
	  		<div class="form-group">
	    		<input type="submit" class="btn btn-primary" value="Guardar" />
	  		</div>
	  	</form>
		</div>
	</div>
</div>