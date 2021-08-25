@extends('layouts.admin_layout.admin_layout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give-Responce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">

            @foreach($errors->all() as $error)

            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>

            @endforeach

            <form method="POST" action="/giveresponce/data">
                {{csrf_field()}}

                <br>
                <h2>Responce</h2>
                <br>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Name :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="adname" class="form-control input-sm"></div>
                </div><br>

                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Responce :</label></div>
                    <div class="col-sm-8">
                        <textarea rows="5" name="admessage" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                    </div>
                </div><br>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <input type="hidden" name="contact_id" value={{$contact}}>
                        <input type="submit" class="btn btn-primary" value="Send Responce">
                        <input type="submit" class="btn btn-warning" value="Clear">
                    </div>
                </div>
                

            </form>
        </div>
    </div>
</body>

@endsection