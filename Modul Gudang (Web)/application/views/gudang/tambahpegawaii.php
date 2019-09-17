<?php  echo "<h1>Form Tambah Pegawai</h1>"; ?>

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
		
				<?php echo form_open('admin/savepeg') ?>
	
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="nama" >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-9">
        <select name="jk" class="form-control">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>                
        </select>
        </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Tempat Lahir</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="tmp_lahir" >
			</div>
		</div>
        <div class="form-group row">
			<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-9">
				<input type="date" class="form-control"
					name="tgl_lahir" >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Alamat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control"
					name="alamat">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Mulai Kerja</label>
			<div class="col-sm-9">
				<input type="date" class="form-control"
					name="mulai_kerja" > 
			</div>
		</div>


        <div class="form-group row">
			<label class="col-sm-3 col-form-label">Status Hadir</label>
			<div class="col-sm-9">
        <select name="status_hadir" class="form-control">
                <option value="Hadir">Hadir</option>
                <option value="Sakit">Sakit</option>
                <option value="Sakit">Izin</option>  
        </select>
        </div>
		</div>

        
        
		<button type="submit" class="btn btn-success">Tambah</button>
		<?php form_close() ?>
        