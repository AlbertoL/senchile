<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Panel SenChile</title>
        <?php echo '<link rel="stylesheet" href="'.base_url().'public/css/bootstrap.min.css"/>'; ?>
        <?php echo '<link rel="stylesheet" href="'.base_url().'public/css/jquery-ui.min.css"/>'; ?>
        <?php echo '<link rel="stylesheet" href="'.base_url().'public/css/estilos.css"/>'; ?>
</head>
<body>
		<nav class="navbar navbar-default navbar-static-top menu-principal">
    	<div class="container">
      		<div class="navbar-header">
        		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          			<span class="sr-only">Menu Navegación</span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="./index.php"><img src="<?php echo base_url();?>public/img/marca.png"></a>
      		</div>
      		<div id="navbar3" class="navbar-collapse collapse">
        		<ul class="nav navbar-nav navbar-right">
          			<li class="activo"><a href="<?php echo base_url()?>home">Inicio</a></li>
                <li class="dropdown">
                  <a href="<?php echo base_url()?>mantencion">Mantención</a>
                </li>
          			<li class="dropdown">
            			<a href="<?php echo base_url()?>usuarios">Usuarios</a>
            			<!-- <ul class="dropdown-menu" role="menu">
              				<li><a href="#">Nuevo</a></li>
              				<li class="divider"></li>
              				<li><a href="#">Todos</a></li>
           	 			</ul> -->
          			</li>
          			<li class="dropdown">
                  <a href="<?php echo base_url()?>areas" >Áreas</a>
            			<!-- <ul class="dropdown-menu" role="menu">
              				<li><a href="#">Nuevo</a></li>
              				<li class="divider"></li>
              				<li><a href="#">Todos</a></li>
            			</ul> -->
          			</li>
          			<li class="dropdown">
            			<a href="<?php echo base_url()?>empresa">Plantas</a>
            			<!-- <ul class="dropdown-menu" role="menu">
            				<li class="dropdown-header">Usuario</li>
            				<li><a href="#">Nuevo</a></li>
            				<li><a href="#">Modificar</a></li>
            				<li class="divider"></li>
            				<li class="dropdown-header">Área</li>
            				<li><a href="#">Nuevo</a></li>
            				<li><a href="#">Modificar</a></li>
            			</ul> -->
          			</li>
        		</ul>
      		</div>
      		<!--/.nav-collapse -->
    	</div>
    	<!--/.container-fluid -->
  	</nav>
<!-- 	<span>Fronend</span>
 -->	<!-- contenido -->

	<?php echo $content_for_layout;
     ?>
     <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.js"></script>
     <script type="text/javascript" src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-ui.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url()?>public/js/funciones.js"></script>

</body>
</html>
