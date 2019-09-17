<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tambah') }}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Judul</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul"
                                    name="judul">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control description" id="exampleFormControlTextarea1"
                                    placeholder="Description" name="desc" rows="3"></textarea>
                            </div>
                            <input type="hidden" name="id_kategori" value="1">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Author</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Author"
                                    name="author">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Kategori</label>
                                <select class="form-control" name="id_kategori">
                                    @foreach($kate as $gory)
                                    <option value="{{ $gory->id }}">{{ $gory->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-grup">
                                <label>Tag</label>
                                <select name="tag[]" class="form-control js-example-basic-multiple"
                                    multiple="multiple">
                                    @foreach($tag as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama_tag }}</option> 
                                    @endforeach                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Gambar</label>
                                <input type="file" name="foto" class="form-control p-1 ">
                            </div>
                            <button class="btn btn-success">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });

</script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>

tinymce.init({
    selector:'textarea.description',
    width: 900,
    height: 300
});
</script>
</html>
