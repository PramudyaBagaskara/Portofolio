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
                        <form action="{{ route('member.edit2') }}" method="POST">
                        @csrf
						<input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama member</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="nama_member" value="{{ $data->nama_member }}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Jenis Member</label>
                                <select class="form-control" name="jenis_member" id="formGroupExampleInput">
                                @foreach($jm as $dt)
                                    <option value="{{ $dt->id }}">{{ $dt->jenis_member }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Email</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="email" rows="3">{{ $data->email }}</textarea>
                            </div>
                            <button class="btn btn-success">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
