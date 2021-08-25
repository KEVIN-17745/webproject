<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <img src={{asset("img/vaccine3.jpg")}} alt="vaccine3"><br>
            <h1 style="text-align: center;">KK Laboratry - Vaccination</h1>
            <h5 style="text-align: center;">You can customize your time and you can see more things for your health. <br> If you want to get our service, contact us.</h5>
            <hr>
        </div><br>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <img src={{asset("img/vaccine2.jpg")}} alt="vaccine2" width="350" height="300">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-8">
                <form method="post">
                    {{csrf_field()}}

                    <div class="bg">

                    @if(isset($contactdata->response))
                    @php
                    $data=$contactdata->response;
                    @endphp
                        <h4>View Responce</h4>
                        <table class="table">
                            <thead class="thead-dark">
                                <th>Name</th>
                                <th>Responce</th>
                                <!-- <th>Phone Number</th> -->

                                <tr>
                                    <td>{{$data->Admin_Name}}</td>
                                    <td>{{$data->Responce}}</td>
                                    <!-- <td>{{$contactdata->Phone_number}}</td> -->

                                </tr>
                            </thead>
                        </table>

                    @endif
                    </div>
                </form>
            </div>

        </div><br>
        <hr>


    </div>
</body>

</html>