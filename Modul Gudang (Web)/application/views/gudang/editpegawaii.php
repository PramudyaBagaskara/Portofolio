<?php  echo "<h1>Form Edit Pegawai</h1>"; ?>

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
		
			<?php foreach($pegawaii as $a) { ?>
				<?php echo form_open('admin/updatepegawaii/'.$a->id_pegawai) ?>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Id Pegawai</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="id_pegawai" value="<?php echo $a->id_pegawai; ?>" readonly >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="nama" value="<?php echo $a->nama; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-9">
        <select name="jk" class="form-control">
                <option value="<?php echo $a->jk; ?>"><?php echo $a->jk; ?></option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>                
        </select>
        </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Tempat Lahir</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="tmp_lahir" value="<?php echo $a->tmp_lahir; ?>">
			</div>
		</div>
        <div class="form-group row">
			<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-9">
				<input type="date" class="form-control"
					name="tgl_lahir" value="<?php echo $a->tgl_lahir; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Alamat</label>
			<div class="col-sm-9">
				<input type="text" class="form-control"
					name="alamat" value="<?php echo $a->alamat; ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Mulai Kerja</label>
			<div class="col-sm-9">
				<input type="date" class="form-control"
					name="mulai_kerja" value="<?php echo $a->mulai_kerja; ?>"> 
			</div>
		</div>


        <div class="form-group row">
			<label class="col-sm-3 col-form-label">Status Hadir</label>
			<div class="col-sm-9">
        <select name="status_hadir" class="form-control" value="<?php echo $a->status_hadir; ?>">
                <option value="Hadir">Hadir</option>
                <option value="Sakit">Sakit</option>   
                <option value="Izin">Izin</option>                
        </select>
        </div>
		</div>

        
        
		<button type="submit" class="btn btn-warning">Update</button>
        <?php }?>
		<?php form_close() ?>
        