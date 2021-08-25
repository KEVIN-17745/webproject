@extends('layouts.front_layout.front_layout')
@section('content')


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('frontend/assets/images/slider/slider_1.jpg')}}" alt="First slide">
                    
                </div>
                
                   <div class="carousel-item ">
                    <img class="d-block w-100" src="{{url('frontend/assets/images/slider/slider_3.jpg')}}" alt="Third slide">
                     
                </div>
                
                <div class="carousel-item ">
                    <img class="d-block w-100" src="{{url('frontend/assets/images/slider/slider_2.jpg')}}" alt="Third slide">
                     
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    <h4 style="padding-left:20px;">Appoinment Details</h4>

    @if(Session::has('success_message'))
<div class="alert alert-success" role="alert">
   {{Session::get('success_message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif  

@if ($errors->any())
       <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    @endif
    
    <section id="contact" class="contact-us-single">
       
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
                        
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    
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
                                      
                                        <th> Patient Name</th>
                                        <th> Mobile Number</th>
                                        <th> Test Type</th>
                                        <th> Time</th>
                                        <th> Date</th>
                                        <th> Report</th>


                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $ann)
                                    <tr>
                                       
                                        <td>{{ $ann->Name }}</td>
                                        <td>{{ $ann->mobile }}</td>
                                        <td>{{ $ann->test }}</td>
                                        <td>{{ $ann->time }}</td>
                                        <td>{{ $ann->date }}</td>
                                        <td>{{ $ann->final_report }}</td>

                                        
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
 
    </section>

    <script>
        function checkOption(obj) {
    var input = document.getElementsByName("time");
    for(var i=0; i < input.length; i++) {
     input[i].disabled = !(obj.value == "lab")
    }
}
        </script>
           

    
    
    
   

    @endsection