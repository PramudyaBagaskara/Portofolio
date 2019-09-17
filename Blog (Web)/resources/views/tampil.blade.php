<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/dtbl.css')}}">
  
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <a href="tbh" class="btn btn-success">Tamba Article</a>
                        <table class="table bg-secondary text-center" id="myTable" >
                            <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Author</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            
                        </table>
                        <a href="{{ route('export.blog') }}" class="btn btn-success">Export Excel</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-link mt-2" href="article">Back To Article</a>
    </div>
    <div class="container mb-3">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-4">Tag</h3>
            </div>
            <div class="col-md-6"><a class="btn btn-primary mt-4" style="margin-left: 400px; margin-bottom: 10px;"
                    href="tambahtag">Create Tag</a></div>
        </div>
        <div class="card">
            <div class="card-body">
                <ul>
                    @foreach($view as $t)
                    <li>{{ $t->nama_tag }}</li>
                    @endforeach
                </ul>
            </div>
        </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/dtbl_jquery.js')}}"></script>
    <script src="{{asset('js/dtbl_bootsrap.js')}}"></script>


  <script>
    $(document).ready(function(){
      $('#myTable').DataTable({
        'info' : false,
        processing: true,
        serverSide: true,
        ajax: 'blog/json',
        columns: [
            { data: 'foto', name: 'foto' },
            { data: 'judul', name: 'judul' },
            { data: 'desc', name: 'desc' },
            { data: 'id_kategori', name: 'id_kategori' },
            { data: 'author', name: 'author' },
            { "data": "id",
                "searchable": false,
                "sortable": false,
                "render": function (id, type, full, meta) {
                                    return '<a href="edit/'+id+'">Edit</a>';
                                } 
        },
        { "data": "id",
                "searchable": false,
                "sortable": false,
                "render": function (id, type, full, meta) {
                                    return '<a href="del1/'+id+'">Delete</a>';
                                }
        },
          
        ]
      }
      );
    })
    
  </script>



</body>

</html>
