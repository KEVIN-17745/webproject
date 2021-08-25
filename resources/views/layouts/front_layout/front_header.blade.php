<header>
       
       <div id="nav-head" class="header-nav">
           <div class="container">
               <div class="row">
                   <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                       <img src="{{url('frontend/assets/images/logo.png')}}" alt="">
                      <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                   </div>
                   
                   <div class="col-sm-2 d-none d-lg-block appoint">
                       <button class="btn btn-info" ><a href="{{ url('/booking') }}" style="text-decoration:none;color:white;"> Book an Appointment</a></button> 
                   </div>
                   <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                       <ul>
                           <li><a href="{{ url('/') }}">Home</a></li>
                          <!-- <li><a href="{{ url('/booking') }}">About Us</a></li> -->
                           <li><a href="{{ url('/view-appoinments') }}">Appoinments Details</a></li>
                           <li><a href="#contact">Contact Us</a></li>
                           
                           @guest
                           <li><a href="{{ route('login') }}">Login</a></li>
                           @if (Route::has('register'))

                          
                           <li><a href="{{ route('register') }}">Register</a></li>
                           @endif

                           @else

                           <li class="nav-item dropdown">

                      <a  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        
                           
                        
                                   
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        
                                    </div>
                                </li>
                                @endguest
                                
                       </ul>
                       
                   </div>
                
               </div>

           </div>
       </div>
   </header>