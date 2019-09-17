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
                        <form action="{{ route('member.edit1') }}" method="POST">
                        @csrf
						<input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Member</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul" value="{{ $data->judul }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description" name="desc" rows="3">{{ $data->desc }}</textarea>
                            </div>
                            <button class="btn btn-success">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
