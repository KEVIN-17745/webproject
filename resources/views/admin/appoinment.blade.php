@extends('layouts.admin_layout.admin_layout')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }

    .table-responsive {
        margin: 30px 0;
    }

    .table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
        min-width: 100%;
    }

    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }

    .search-box {
        position: relative;
        float: right;
    }

    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }

    .search-box input:focus {
        border-color: #3FBAE4;
    }

    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table td:last-child {
        width: 130px;
    }

    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }

    table.table td a.view {
        color: #03A9F4;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #E34724;
    }

    table.table td i {
        font-size: 19px;
    }

    .pagination {
        float: right;
        margin: 0 0 5px;
    }

    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }

    .pagination li a:hover {
        color: #666;
    }

    .pagination li.active a {
        background: #03A9F4;
    }

    .pagination li.active a:hover {
        background: #0397d6;
    }

    .pagination li.disabled i {
        color: #ccc;
    }

    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }

    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }
</style>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<body>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">

                        </div>
                        <div>Appoinments
                            <div class="page-title-subheading">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-8">
                        <h4>Appoinments <b>details</b> </h4>
                    </div>
                    <div class="col-sm-4">
                       
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                        @if(Session::has('success_message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Table </h5>
                            <table class="mb-0 table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Appoinment ID</th>
                                        <th> Patient Name</th>
                                        <th> Mobile Number</th>
                                        <th> Test Type</th>
                                        <th> Time</th>
                                        <th> Date</th>


                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $ann)
                                    <tr>
                                        <td>{{ $ann->id }}</td>
                                        <td>{{ $ann->Name }}</td>
                                        <td>{{ $ann->mobile }}</td>
                                        <td>{{ $ann->test }}</td>
                                        <td>{{ $ann->time }}</td>
                                        <td>{{ $ann->date }}</td>

                                        <td>
                                        
                                            <a href="{{url('admin/update-appoinment/'.$ann->id )}}" style="max-width:100px;  float:right; display:inline-block;" class="btn btn-block btn-primary">View Details </a>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!--   <div class="row">
                                
                              
                            </div> -->

        </div>
    </div>
    </div>
    </div>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


    <script>
        console.log('Hi!');
        $(".confirmDelete").click(function() {
            var name = $(this).attr("name");
            if (confirm("Are you sure to delete this " + name + "?")) {
                return true;
            }
            return false;

        });
    </script>

</body>
@endsection