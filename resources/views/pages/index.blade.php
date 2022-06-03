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
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>

                    </ul>
                    <form class="d-flex">
                    <div class="flex-center position-ref full-height">

                    @if (Route::has('login') && Auth::check())
                        <div class="top-right links">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </div>
                    @elseif (Route::has('login') && !Auth::check())
                        <div class="top-right links">
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        </div>
                    @endif
                    </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-gradient-orenge py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Donate for peace</h1>
                    <p class="lead fw-normal text-white-50 mb-0">You can donate hare bg-gradient-orenge medicine & blood</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
                <div class="properties">
                        <button class="property">
                        <img src="{{asset('images/user1.jpg')}}" width="200" height="200">
                    <h4>Donner & receiver Account</h4>
                    </button>
                    <a href="{{route('medicine.index')}}">
                        <button class="property">
                            <img src="{{asset('images/medicine-donate1.jpg')}}" width="200" height="200">
                            <h4>Donate Medicine</h4>
                        </button>
                    </a>

                    <button class="property">
                        <img src="{{asset('images/blood donate1.jpg')}}" width="200" height="200">
                        <h4>Blood Donate</h4>
                    </button>
                    <button class="property">
                        <h4>Call For Medicine</h4>
                    </button>
                    <button class="property"></button>
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
