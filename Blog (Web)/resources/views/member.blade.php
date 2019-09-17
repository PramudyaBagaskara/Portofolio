<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama Member</th>
                                <th>Jenis Member</th>
                                <th>Tanggal Buat</th>
                                <th>Email</th>
                                <th><a href="addmember" class="btn btn-success">Tambah</a></th>
                            </tr>
                            @foreach($uwu as $d)
                            <tr>
                                <td>{{ $d->nama_member }}</td>
                                <td>{{ $d->jenis_member }}</td>
                                <td>{{ $d->created_at->format('d M Y') }}</td>
                                <td>{{ $d->email }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('member.memberchange', $d->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ route('member.del', $d->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="width: 18rem; float: right; margin-right: 10%; margin-top: 2%;">
	  <div class="card-header">
	    <h4>Keterangan Jenis Member</h4>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><h6>1 : Normal</h6></li>
	    <li class="list-group-item"><h6>2 : Silver</h6></li>
	    <li class="list-group-item"><h6>3 : Gold</h6></li>
        <li class="list-group-item"><h6>4 : Platinum</h6></li>
	  </ul>
	</div>

</body>

</html>
