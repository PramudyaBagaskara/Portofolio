<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form Input Departemen</title>
</head>

<body>

	<?php echo validation_errors(); ?>
	<?php echo form_open('Departemen/form_tambah'); ?>
    <form action="<?php echo site_url('departemen/form_tamabh') ?>" method="POST">
	<h5>Departemen ID</h5>
	<input type="text" name="departemen_id" value="" size="50" />

	<h5>Nama Departemen</h5>
	<input type="text" name="nama_departemen" value="" size="50" />

	<div><input type="submit"  value="Submit"/></div>

	</form>


</body>

</html>
