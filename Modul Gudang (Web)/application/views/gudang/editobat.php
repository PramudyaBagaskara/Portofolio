<?php  echo "<h1>Form Edit Obat</h1>"; ?>

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
		
			<?php foreach($obat as $a) { ?>
				<?php echo form_open('admin/update/'.$a->id_obat) ?>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Id Obat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="id_obat" value="<?php echo $a->id_obat; ?>" readonly >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama Obat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="nama_obat" value="<?php echo $a->nama_obat; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Jenis Obat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="jenis_obat" value="<?php echo $a->jenis_obat; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Cara Pemakaian</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="cara_pemakaian" value="<?php echo $a->cara_pemakaian; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Harga Obat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" maxlength="7" minlength="1" onkeypress="return Angkasaja(event)"
					name="harga_obat" value="<?php echo $a->harga_obat; ?>">
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
        