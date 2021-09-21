<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="register to lukas ventures">
    <meta name="author" content="peter wambua">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Produts -Lukas Ventures</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <script src="https://kit.fontawesome.com/1d1bb0c2f2.js" crossorigin="anonymous"></script>

    

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products-index.css') }}" rel="stylesheet">
    
</head>
<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo"><img src="./images/logo.png" alt=""></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}" >Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="{{ route('product.index') }}" class="active">Proucts</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> 
                            @if (Route::has('login'))
                
                                    @auth
                                    <li class="scroll-to-section"><a href="{{ url('/home') }}">Home</a></li>
                                        
                                    @else
                                    <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                                        

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
        
    <section class="product-section">
         <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>All <em>Products</em></h2>
                        <img src="/images/line-dec.png" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://images.unsplash.com/photo-1632052865337-c80888f69435?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="">
                        </div>
                        <div class="down-content">
                            <span>Strength Trainer</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <button type="submit" id="form-submit" class="main-buttons"><a href="#"> Add To Cart </a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://images.unsplash.com/photo-1627933650328-47fb5104787a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="">
                        </div>
                        <div class="down-content">
                            <span>Muscle Trainer</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <button type="submit" id="form-submit" class="main-buttons"><a href="#"> Add To Cart </a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://images.unsplash.com/photo-1587196573828-8c6116ee8d3c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="">
                        </div>
                        <div class="down-content">
                            <span>Power Trainer</span>
                            <h4>Paul D. Newman</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <button type="submit" id="form-submit" class="main-buttons"><a href="#"> Add To Cart </a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
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