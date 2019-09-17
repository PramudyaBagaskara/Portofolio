<?php  echo "<h1>Form Tambah Alat Kesehatan</h1>"; ?>
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

		<?php echo form_open('admin/savealat') ?>

		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama Alat Kesehatan</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="nama_alatkesehatan" placeholder="Nama Alat Kesehatan">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Cara Pemakaian</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="cara_pemakaian" placeholder="Cara Pemakaian Alat Kesehatan">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Harga Alat Kesehatan</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" maxlength="10" minlength="1" onkeypress="return Angkasaja(event)" name="harga_alatkesehatan" placeholder="Harga Alat Kesehatan">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Stock</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" maxlength="4" minlength="1" onkeypress="return Angkasaja(event)" name="stock" placeholder="Stock">
			</div>
		</div>

		<button type="submit" class="btn btn-success">Tambah</button>

		<?php form_close() ?>
