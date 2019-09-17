<!DOCTYPE html>
<html>
<head>
	<title>Crud Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8" style="background-color: #c8d6f0; border-radius: 5px;
		padding: 10px;">
			<h3>Tambah Data</h3>
			<form action="{{ route('crud.simpan') }}" method="POST">
				@csrf
				<div class="form-grup">
					<label>Nama</label>
					<input type="text" name="nama" value="" placeholder="Nama" class="form-control">
				</div>
				<div class="form-grup">
					<label>Kelas</label>
					<input type="text" name="kelas" value="" placeholder="Kelas" class="form-control">
				</div>
				<div class="form-grup">
					<label>Jurusan</label>
					<input type="text" name="jurusan" value="" placeholder="Jurusan" class="form-control">
				</div>
				<div>
					<input type="submit" name="button" value="simpan" class="btn btn-success mt-3">
				</div>
			</form>
		</div>

	</div>
</div>

</body>
</html>