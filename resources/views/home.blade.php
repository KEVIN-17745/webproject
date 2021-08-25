@extends('layouts.front_layout.front_layout')
@section('content')
<div class="slider-detail">

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
    <!-- ################# Key Features Starts Here#######################--->

    <section class="key-features"> 
            <div class="row no-margin">
                <div class="col-lg-4 kvxol col-md-6">
                    <div class="single-key ky-1">
                       <div class="icon">
                            <i class="fas fa-tooth"></i>
                       </div>
                       <div class="detail">
                           <h5>Newest Technologies</h5>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                       </div>
                       
                        
                    </div>
                </div>

                <div class="col-lg-4 kvxol  col-md-6">
                    <div class="single-key ky-2">
                        <div class="icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="detail">
                            <h5>Experianced Doctors</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 kvxol col-md-6">
                    <div class="single-key ky-1">
                        <div class="icon">
                            <i class="fas fa-briefcase-medical"></i>
                        </div>
                        <div class="detail">
                             <h5>High Customer Satisfaction</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                        </div>
                        
                       
                    </div>
                </div>

               

     
               
            </div>
    </section>
    <!-- ################# With Medical Starts Here#######################--->

    <section id="about" class="with-medical">
        <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12">
                    <img src="{{url('frontend/assets/images/why.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 col-md-12 txtr">
                    <h4>Why choos Health Care with <br>
                     <span>Medical Hospital</span>   
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque libero, pulvinar et elementum quis, facilisis eu ante. Mauris non placerat sapien. Pellentesque tempor arcu non odio scelerisque ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.</p>
                    <p>Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed porta dolor quis felis pulvinar dignissim. Etiam nisl ligula, ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex ullamcorper, scelerisque lacus nec, commodo dui. Proin massa urna, volutpat vel augue eget, iaculis tristique dui. </p>
                </div>
                
            </div>
        </div>
    </section>
    
    
     <!-- ################# Clinic Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <div class="row session-title">
                   <h2>Our Achievemtns in numbers</h2>
                   <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
But you can read the following facts in order to make sure of all pluses of our clinic:</p>
               </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>212+</h3>
                        <span>HAPPY PATIENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>QUALIFIED STUFF</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>18+</h3>
                        <span>MASTER CERTIFICATIONS</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
    <div id="services" class="services container-fluid">
       <div class="container">
           <div class="row">
                <div class="col-md-4 no-padding col-sm-6">
                    <div class="single-key b-b b-r">
                        <i class="fas fa-hospital-alt"></i>
                        <h5>Newest Technologies</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                    </div>
                </div>

                <div class="col-md-4 no-padding col-sm-6">
                    <div class="single-key b-b b-r">
                        <i class="fas fa-user-md"></i>
                        <h5>Experianced Doctors</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                    </div>
                </div>

                <div class="col-md-4 no-padding col-sm-6">
                    <div class="single-key b-b">
                        <i class="fas fa-briefcase-medical"></i>
                        <h5>High Customer Satisfaction</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                    </div>
                </div>

                <div class="col-md-4 no-padding col-sm-6">
                    <div class="single-key b-r">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                    </div>
                </div>

                <div class="col-md-4 no-padding col-sm-6">
                    <div class="single-key b-r">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                    </div>
                </div>



                <div class="col-md-4 no-padding col-sm-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut erat nec leo lobortis blandit.</p>
                    </div>
                </div>
            </div>
       </div>
    </div>
    
    
    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="gallery" class="gallery">
        <div class="container">
           <div class="session-title row">
                <h2>Our Gallery</h2>
                <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
            </div>
            <div class="row">


                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
                    <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Laboratry</button>
                </div>
                <br />



                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="{{url('frontend/assets/images/gallery/gallery_01.jpg')}}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="{{url('frontend/assets/images/gallery/gallery_02.jpg')}}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="{{url('frontend/assets/images/gallery/gallery_03.jpg')}}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="{{url('frontend/assets/images/gallery/gallery_04.jpg')}}" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="{{url('frontend/assets/images/gallery/gallery_05.jpg')}}" class="img-responsive">
                </div>



                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="{{url('frontend/assets/images/gallery/gallery_06.jpg')}}" class="img-responsive">
                </div>

            </div>
        </div>


    </div>
    <!-- ######## Gallery End ####### -->
    
        <!--  ************************* Contact Us Starts Here ************************** -->

    <section id="contact" class="contact-us-single">
        <div class="row no-margin">
            <div class="col-sm-6 no-padding">
                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 cop-ck">

                @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>

                @endforeach

                <form method="post" action ="/contact">
                {{csrf_field()}}

                <h2>Contact Form</h2>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Enter Name :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Enter Address :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Address" name="address" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Mobile Number :</label></div>
                    <div class="col-sm-8"><input type="text" name="number" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label>Enter Message :</label></div>
                    <div class="col-sm-8">
                        <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                    </div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <input type="submit" class="btn btn-primary" value="Send Massage">
                        <input type="submit" class="btn btn-warning" value="Clear">
                        
                    </div>
                </div>
                
                <div class="row cf-ro">
                    <div class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <a href="/contact" class="btn btn-success">View Massage</a>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </section>
    @endsection