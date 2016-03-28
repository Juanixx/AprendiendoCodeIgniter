<h1>Listado de contactos V3<!--<?php echo $nombre.' - '.$nombre2 ?>--></h1>
</br></br>
<?php	if(empty($listado)){ ?>
		<h1><b>Sin Contactos</b></h1>
<?php	}else{	?>
		Tienes <?php echo count($listado)?>	Contacto (s)
		<br/><br/>
		<?php foreach($listado as $contacto){?>
			<?php echo $contacto->con_nombre?>
			
			<a href="<?php echo base_url()?>index.php/contactos/modificar/<?php echo $contacto->con_id?>">Editar</a>
			<a href="<?php echo base_url()?>index.php/contactos/eliminar/<?php echo $contacto->con_id?>">Eliminar</a><br/>
			
		<?php }?>
<?php	}	?>
<br/>
<a href="<?php echo base_url()?>index.php/contactos/agregar">Nuevo Contacto</a>