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
    <h4 style="padding-left:20px;">Time slot booking</h4>

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
        <form method="POST" acton="{{url('/booking')}}" >{{csrf_field()}}
        <div class="row no-margin" style="padding-left:20px;">
        <div class="col-sm-6 no-padding">
            
        
                 <h6>Patients Personal Details</h6> 
        <div class="row cf-ro">
                    <div class="col-sm-3"><label>patients Name :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter patients Name" name="Name" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>National Id:</label></div>
                    <div class="col-sm-8"><input type="text" name="nationalId" placeholder="Enter National Id" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Date of Birth :</label></div>
                    <div class="col-sm-8"><input type="date" placeholder="Enter Date of Birth" name="dob" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Address:</label></div>
                    <div class="col-sm-8">
                        <textarea rows="5" placeholder="Enter Address" name="address"class="form-control input-sm"></textarea>
                    </div>
                </div>
                
             </div>
            <div class="col-sm-6 cop-ck">
            <h6>Testing Information</h6> 
            <div class="row cf-ro">
                    <div class="col-sm-3"><label>Test type :</label></div>
                    <div class="col-sm-8"><select name="test" id="test" >
                         <option value="blood">Blood</option>
                           <option value="PCR">PCR</option> 
                           <option value="antigen">Antigen</option>
                        </select></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Date :</label></div>
                    <div class="col-sm-8"><input type="date" name="date"  placeholder="Enter Date of Birth" name="name" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                <div class="col-sm-3"><label>Place :</label></div>
                    <div class="col-sm-8"><select id="menu" name="place" onChange="checkOption(this)">
    <option value="A">Select An Option</option>
    <option value="lab">Lab</option>
    <option value="home">Home</option>
</select></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Time Slot :</label></div>
                    <div class="col-sm-8"><input type="Time" name="time" disabled placeholder="Enter Date of Birth" name="name" class="form-control input-sm"></div>
                </div>
              




              
                <div class="row cf-ro">
                    <div class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <button class="btn btn-info btn-sm">Make Appointment</button>
                    </div>
                </div>
                
            </div>
        </div>
        <form>
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