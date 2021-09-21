<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="register to lukas ventures">
    <meta name="author" content="peter wambua">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png"/>
    <title>Login</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <script src="https://kit.fontawesome.com/1d1bb0c2f2.js" crossorigin="anonymous"></script>

    

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    
</head>
<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="./images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}" >Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="{{ route('product.index') }}">Proucts</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> 
                            @if (Route::has('login'))
                
                                    @auth
                                    <li class="scroll-to-section"><a href="{{ url('/home') }}">Home</a></li>
                                        
                                    @else
                                    
                                        

                                    @if (Route::has('register'))
                                    <li class="scroll-to-section"> <a href="{{ route('register') }}">Register</a></li>
                                   
                                    @endif
                                    @endauth
                                
                            @endif
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
        
    <section class="register-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="login-button">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="login-forgot-pass" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('js/popper.js')}}"></script>
 

    <!-- Plugins -->
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imgfix.min.js')}}"></script> 
    <script src="{{asset('js/mixitup.js')}}"></script> 
    <script src="{{asset('js/accordions.js')}}"></script>
    
    <!-- Global Init -->
    
    <script src="{{ asset('js/custom.js') }}" defer></script>
</body>
</html>