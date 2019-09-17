<?php  echo "<h1>Form Tambah Obat</h1>"; ?>
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

		<?php echo form_open('admin/save_one') ?>

		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama Obat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Jenis Obat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="jenis_obat" placeholder="Jenis Obat">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Cara Pemakaian</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="cara_pemakaian" placeholder="Cara Pemakaian Obat">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Harga Obat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" maxlength="7" minlength="1" onkeypress="return Angkasaja(event)" name="harga_obat" placeholder="Harga Obat">
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
