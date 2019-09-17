<?php echo form_open('admin/proses_simpan_pegawai'); ?>
<div class="card">
	<div class="card-header">
		<h4>Form Input Pegawai</h4>
	</div>
	<div class="card-body">
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
			<div class="col-sm-9">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			</div>
		</div>
		<fieldset class="form-group">
			<div class="row">
				<div class="col-form-label col-sm-3 pt-0">Radios</div>
				<div class="col-sm-9">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
						<label class="form-check-label" for="gridRadios1">
							First radio
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
						<label class="form-check-label" for="gridRadios2">
							Second radio
						</label>
					</div>
					<div class="form-check disabled">
						<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
						<label class="form-check-label" for="gridRadios3">
							Third disabled radio
						</label>
					</div>
				</div>
			</div>
		</fieldset>
		<div class="form-group row">
			<div class="col-sm-3">NIK</div>
			<div class="col-sm-9">
				<?php 
            $data = array(
           'type'  => 'text',
           'name'  => 'nik',
           'id'    => 'nik',
           'class' => 'form-control'
        );

      echo form_input($data);
    ?>
			</div>
		</div>


    <div class="form-group row">
      <div class="col-sm-3">Nama</div>
      <div class="col-sm-9">
        <?php 
                $data = array(
                    'name'  => 'jkl',
                    'id'    => 'L',
                    'class' => 'form-check-input'
                );
                
                echo form_label('Laki - laki', 'id=>L', 'class=>form-check-label');
                echo form_radio($data);
                ?>
      </div>
        </div>




        <?php 
        echo form_close();
        ?>
	</div>
	<div class="card-footer">
		<button type="submit" class="btn btn-primary">Sign in</button>
	</div>
</div>
