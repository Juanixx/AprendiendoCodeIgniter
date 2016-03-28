<h1>Nuevo contacto</h1>
<br/>

<!--Para definir varios parámetros-->
<!--Se definen todas las propiedades que yo quiera y
se pasan a la función form_input-->
<?php 
$input_con_email = array(
        'name'  => 'con_email',
        'id'    => 'con_email',
        'maxlength'    => '120',
        'size' => '100',
        'value' => set_value('con_email', @$datos_contacto[0]->con_email)
);

$input_con_nombre = array(
        'name'  => 'con_nombre',
        'id'    => 'con_nombre',
        'maxlength'    => '60',
        'size' => '50',
        'value' => set_value('con_nombre',@$datos_contacto[0]->con_nombre)
);

$input_con_telefono = array(
        'name'  => 'con_telefono',
        'id'    => 'con_telefono',
        'maxlength'    => '20',
        'size' => '18',
        'value' => set_value('con_telefono',@$datos_contacto[0]->con_telefono)
);

$input_con_edad = array(
        'name'  => 'con_edad',
        'id'    => 'con_edad',
        'maxlength'    => '3',
        'size' => '4',
        'value' => set_value('con_edad',@$datos_contacto[0]->con_edad)
);

$estatus = array(
			'0'				=> 'Inactivo',
			'1'				=> 'Activo',
			);

?>


<!--Aquí se empieza a usar los helpers de CodeIgniter-->
<?php //echo validation_errors(); ?>
<?php echo form_open() ?><br/>

<?php echo form_label('Email')?><br/>
<?php echo form_input($input_con_email)?><?php echo form_error('con_email')?><br/><br/>

<?php echo form_label('Nombre')?><br/>
<?php echo form_input($input_con_nombre)?><?php echo form_error('con_nombre')?><br/><br/>

<?php echo form_label('Telefono')?><br/>
<?php echo form_input($input_con_telefono)?><?php echo form_error('con_telefono')?><br/><br/>

<?php echo form_label('Edad')?><br/>
<?php echo form_input($input_con_edad)?><?php echo form_error('con_edad')?><br/><br/>

<?php echo form_label('Estatus'); ?><br/>
<?php echo form_dropdown('con_estatus',$estatus,set_value('con_estatus',@$datos_contacto[0]->con_estatus))?><br/><br/>

<?php echo form_submit('btn_enviar','Guardar!'); ?>


<?php echo form_close() ?>

<!--
<form method="post" action="" accept-charset="UTF-8">
	<label for="">Nombre</label>
	<input type="text" name="nombre" />
	
</form>
-->
