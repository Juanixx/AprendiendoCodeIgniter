<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="http://localhost/EstilosBootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<h1>Listado de contactos V3<!--<?php echo $nombre.' - '.$nombre2 ?>--></h1>
</br></br>
<?php	if(empty($listado)){ ?>
		<h1><b>Sin Contactos</b></h1>
<?php	}else{	?>
		Tienes <?php echo count($listado)?>	Contacto (s)
		<br/><br/>
		
		<table class="table">
		<tr>
		<td>Nombre del contacto</td>
		<td>Opciones</td>	
		</tr>
		<?php foreach($listado as $contacto){?>
		<tr>
		<td><?php echo $contacto->con_nombre?></td>
		<td><a href="<?php echo base_url()?>index.php/contactos/modificar/<?php echo $contacto->con_id?>"
			class="btn btn-warning">Editar</a>
			<a href="<?php echo base_url()?>index.php/contactos/eliminar/<?php echo $contacto->con_id?>"
			class="btn btn-danger">Eliminar</a><br/></td>	
		</tr>
						
			
			
		<?php }?>
<?php	}	?>
	
	
</table>
<br/>
<a href="<?php echo base_url()?>index.php/contactos/agregar"  class="btn btn-info">Nuevo Contacto</a>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/EstilosBootstrap/js/bootstrap.min.js"></script>
  </body>
</html>