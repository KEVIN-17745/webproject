<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .h1{
        font-size: 18px;
        font-style: initial ;   
    }

    th,td{
        text-align: center;
    }
</style>
</head>
<body>
<div class="container">
<div class = "row">
            <img src="img/vaccine3.jpg"  alt="Vaccine"><br><br>
            <h1 style="text-align: center;">KK Laboratry - Vaccination</h1>
            <h5 style="text-align: center;">You can customize your time and you can see more things for your health. <br> If you want to get our service, contact us.</h5>
           <hr>
        </div><br>

<div class="row">
    <div class="col-md-12">
        <table class="table table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <!-- <th>Phone_Number</th> -->
            <th>Massage</th>
            <th></th>

            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->Name}}</td>
                    <td>{{$contact->Email}}</td>
                    <!-- <td>{{$contact->Phone_number}}</td> -->
                    <td>{{$contact->Massage}}</td>

                    <td>
                        <a href="/responce/{{$contact->id}}" class="btn btn-success">View Responce</a>
                    </td>
                </tr>

            @endforeach
        </table>
    </div>
</div>
</div>
</body>
</html>


