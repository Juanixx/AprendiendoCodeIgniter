<h1>Listado de contactos V2<!--<?php echo $nombre.' - '.$nombre2 ?>--></h1>
</br></br>
<?php	if(empty($listado)){ ?>
		<h1><b>Sin Contactos</b></h1>
<?php	}else{	?>
		Tienes <?php echo count($listado)?>	Contacto (s)
		<br/><br/>
		<?php 
		foreach($listado as $contacto){
			/**Después de $contacto, se especifica que campos de la tabla 
			se van a imprimir 
			*/
			echo $contacto->con_nombre.'<br/>';
		}?>
<?php	}	?>