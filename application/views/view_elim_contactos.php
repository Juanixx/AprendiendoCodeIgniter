<h1>Eliminar Contacto</h1>

Esta seguro de eliminar el contacto: <b><?php echo $datos_contacto[0]->con_nombre ?></b> <br/>

<?php
$input_con_id = array('con_id'  =>  $datos_contacto[0]->con_id)
?>

<?php echo form_open() ?><br/>

<?php echo form_hidden($input_con_id)?>
<?php echo form_submit('btn_enviar','Si deseo eliminarlo')?>

<?php echo form_close() ?>