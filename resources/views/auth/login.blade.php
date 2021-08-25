
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{url('frontend/login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{url('frontend/login/css/style.css')}}">
</head>
<body>

    <div class="main">

        <h1>Log in</h1>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST"  action="{{ route('login') }}" class="signup-form">
                    @csrf

                 <!--   <div class="form-textbox">
                        <label for="name">Name</label>
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
-->
@if(Session::has('flash'))
                   <div class="alert alert-danger" role="alert" style="color:red;">
                    {{Session::get('flash')}}
                
              </div>
             @endif
                   

                    <div class="form-textbox">
                        <label for="email">Email</label>
                         <input id="name" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Password</label>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                



                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Login" />
                    </div>

                     @if (Route::has('password.request'))
                                    <a class="loginhere-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </form>

                <p class="loginhere">
                    Don't have an account ?<a href="{{ route('register') }}" class="loginhere-link"> Sign Up</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{url('frontend/login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('frontend/login/js/main.js')}}"></script>
</body>
</html>
