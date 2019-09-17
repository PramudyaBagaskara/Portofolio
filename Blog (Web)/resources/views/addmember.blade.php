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
                        <form action="{{ route('save') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Member</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama_member">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Jenis Member</label>
                                <select class="form-control" name="jenis_member" id="formGroupExampleInput">
                                @foreach($member as $mb)
                                    <option value="{{ $mb->id }}">{{ $mb->jenis_member }}</option>
                                @endforeach
                                </select>
                            </div>                            
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Email</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Email" name="email" rows="1"></textarea>
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
