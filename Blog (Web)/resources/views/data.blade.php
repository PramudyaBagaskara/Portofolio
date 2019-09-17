<!DOCTYPE html>
<html>
<head>
	<title>Crud Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="sidebar mt-4" style="background-color: #c8d6f0; border-radius: 5px; padding: 10px;">
				<p align="center">Welcome To Laravel CRUD</p>
			</div>
		</div>
		<div class="col-md-9">
			<div class="content mt-4">
				<div class="bod">
					
					<table class="table table-striped">
						<thead style="background-color: #212529; color: white;">
						<tr>
							<td>ID</td>
							<td>Nama</td>
							<td>Kelas</td>
							<td>Jurusan</td>
							<td><a class="btn btn-success" href="tambah">Tambah Data</a>
							</td>
						</tr>
						</thead>
						@foreach($blog as $blog)
						<tr>
							<td>{{ $blog->id }}</td>
							<td>{{ $blog->nama }}</td>
							<td>{{ $blog->kelas }}</td>
							<td>{{ $blog->jurusan }}</td>
							<td>
								<a class="btn btn-primary" href="
								{{route('crud.edit', $blog->id)}}">Edit</a>
								<a class="btn btn-danger" href="
								{{route('crud.delete', $blog->id)}}">Hapus</a>
							</td>
						</tr>
						@endforeach
					</table>

				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>