{{ isset('App\Contact'::find(1)->response) }}
@extends('layouts.admin_layout.admin_layout')



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Responce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
@section('content')
<body>
    <div class="container">
        <div class="row">
            <img src="img/vaccine3.jpg" alt="Vaccine"><br><br>
            <h1 style="text-align: center;">KK Laboratry - Vaccination</h1>
            <h5 style="text-align: center;">You can customize your time and you can see more things for your health.<br> If you want to get our service, contact us.</h5>
            <hr>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <th>ID</th>
                    <th>Name</th>
                    <!-- <th>Email</th> -->
                    <th>Address</th>
                    <th>Phone_Number</th>
                    <th>Massage</th>
                    <th>Action</th>


                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->Name}}</td>
                        <!-- <td>{{$contact->Email}}</td> -->
                        <td style="width:20%">{{$contact->Address}}</td>
                        <td>{{$contact->Phone_number}}</td>
                        <td style="width:20%">{{$contact->Massage}}</td>
                        <td>
                            @if(!isset('App\Contact'::find($contact->id)->response))
                            <a href="/giveresponce/{{$contact->id}}" class="btn btn-success">Add Responce</a>
                            @endif
                            <a href="/viewresponce/{{$contact->id}}" class="btn btn-success">view Responce</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</body>

@endsection