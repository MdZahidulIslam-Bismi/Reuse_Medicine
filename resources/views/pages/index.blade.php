<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Donation Site</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">
                <img src="{{asset('images/donate & cure.png')}}" width="50" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Donate</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>

                    </ul>
                    <div class="input-group">
                        <form class="form-inline">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <form class="d-flex" method="post" action="{{ route('logout') }}">
                        @csrf
                            <div class="flex-center position-ref full-height">

                            @if (Route::has('login') && Auth::check())
                                <div class="top-right links">
                                
                                    <button type="submit">Logout</button>
                                  
                                </div>
                            @elseif (Route::has('login') && !Auth::check())
                                <div class="top-right links logReg">
                                  <button class="btn btn-outline-primary">  <a href="{{ url('/login') }}">Login</a> </button>
                                  <button class="btn btn-outline-primary">  <a href="{{ url('/register') }}">Register</a>  </button>
                                </div>
                        @endif
                            </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-gradient-orenge py-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active " >
                <div class="carousel1">
                <div class="item_1">
                <img src="{{asset('images/medicine_banner.jpg')}}"  class="d-block  carousel_img" alt="...">
                </div>
                <div class="item_2 mt-5">
                    <h1>hello world </h1>
                    <h1>hello world </h1>
                </div>
                </div>
            </div>
            <div class="carousel-item carousel2" > 
                <div class="carousel1">
                <div class="item_2 text-light mt-5">
                 <h1>hi world</h1>
                </div class="item_1">
                 <img src="{{asset('images/medicine_crisis.jpg')}}" class="d-block  carousel_img"  alt="...">
                </div>
            </div>
            <div class="carousel-item">
            <div class="carousel1">
            <div class="item_2 text-dark mt-5">
            <h1>good Morning world </h1>
            </div>
                <div class="item_1 ">
                <img src="{{asset('images/Blood_donate_Banner1.jpg')}}" class="d-block carousel_img" alt="...">
                </div>
        </div>
            </div>
        </div>
        </div>
        </header>
        <!-- Section-->
        <section class="py-5">
                <div class="properties">
                        <!-- <button class="property">
                        <img src="{{asset('images/user1.jpg')}}" width="200" height="200">
                    <h4>Donner & receiver Account</h4>
    
                    </button> -->
                    <a href="{{route('medicine.index')}}">
                        <button class="property">
                            <img src="{{asset('images/medicine-donate1.jpg')}}" width="200" height="200">
                            <h4>Donate Medicine</h4>
                        </button>
                    </a>
                    <a href="{{route('getMedicine.index')}}">
                    <button class="property">
                        <img src="{{asset('images/blood donate1.jpg')}}" width="200" height="200">
                        <h4>Get Medicine</h4>
                    </button>
                    </a>

                    <a href="{{route('bloodDonate.index')}}">
                    <button class="property">
                    <img src="{{asset('images/blood donate1.jpg')}}" width="200" height="200">
                        <h4>Donate Blood </h4>
                    </button>
                    </a>
                    
                </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js ')}}"></script>
    </body>
</html>
