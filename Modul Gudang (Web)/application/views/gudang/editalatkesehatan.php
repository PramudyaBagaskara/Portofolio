<?php  echo "<h1>Form Edit Alat Kesehatan</h1>"; ?>

<div class="card">
	<div class="card-body">

		<script type="text/javascript">
			function Angkasaja(evt) {
				var charCode = (evt.which) ? evt.which : event.keyCode
				if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
				return true;
			}

		</script>
		
			<?php foreach($alatkesehatan as $a) { ?>
				<?php echo form_open('admin/updatealat/'.$a->id_alatkesehatan) ?>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Id Alat Kesehatan</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="id_pegawai" value="<?php echo $a->id_alatkesehatan; ?>" readonly >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama Alat Kesehatan</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="nama_alatkesehatan" value="<?php echo $a->nama_alatkesehatan; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Cara Pemakaian</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="cara_pemakaian" value="<?php echo $a->cara_pemakaian; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Harga Alat Kesehatan</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" maxlength="7" minlength="1" onkeypress="return Angkasaja(event)"
					name="harga_alatkesehatan" value="<?php echo $a->harga_alatkesehatan; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Stock</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" maxlength="4" minlength="1" onkeypress="return Angkasaja(event)"
					name="stock" value="<?php echo $a->stock; ?>"> 
			</div>
		</div>
        
		<button type="submit" class="btn btn-warning">Update</button>
        <?php }?>
		<?php form_close() ?>
        