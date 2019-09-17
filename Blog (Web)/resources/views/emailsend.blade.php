<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Send Email</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('email') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Email</label>
                                <input type="email" name="email" placeholder="Write Your Email" class="form-control" required>
                            </div>

                            <a href="homeku" class="btn btn-warning">Back</a>
                            <input type="submit" class="btn btn-success" value="Send">
                           

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
