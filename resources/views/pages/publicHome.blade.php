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
                    <form class="d-flex" method="post" action="{{ route('logout') }}">
                        @csrf
                    <div class="flex-center position-ref full-height">

                    @if (Route::has('login') && Auth::check())
                        <div class="top-right links">
                         
                              <button type="submit">Logout</button>
                          
                            
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
        <header class=" py-5">
            <section class="py-5">
            <h1>Through our site {{$medicineNumber}} Medicine Donation<h1>
            </section>
        </header>
        <!-- Section 1 start-->
        <section class="py-5">
        <div class="container px-4 px-lg-5 my-5 d-flex justify-content-around">
                <div class="text-center div_text_2">
                    <h1 class="display-4 fw-bolder">Stop medication waste. Save lives.</h1>
                    <p class="lead fw-normal mb-0">Destruction of unused medication is not just wasteful, it’s also costly and harmful to the environment. Donate unused medications to help your community and benefit your organization.</p>
                </div>
                <div class="public_img_1">
                    <img src="{{asset('images/medicine_donate1.jpg')}}" alt=""/>
                </div>  
            </div>  
        </section>
        <!-- Section 1 End-->
        <!-- Section 2 start-->
        <section class="py-5 section_2">
        <div class="container px-4 px-lg-5 my-5 d-flex justify-content-around">
                <div class="text-center div_text_3">
               
            </div>
                <div class="div_text_3">
                        <h1 class="display-4 fw-bolder">Why donate?</h1>
                        <p class="lead fw-normal mb-0 ">It’s simple, really. 50 million people in the United States skip medication due to cost. Medication destruction costs $1-$3 per pound. And 70% of waterways are contaminated with pharmaceutical runoff. Your donations make a real, lasting impact.</p>
                 </div>
            </div>  
        </section>
        <!-- Section 2 End-->
        <!-- Section 3 start-->
        <section class="py-5">
        <div class="container px-4 px-lg-5 my-5 d-flex justify-content-around">
                <div class="text-center div_text_1">
                    <h1 class="display-4 fw-bolder">Trasted delivery System for your valuable medicines</h1>
                    <p class="lead fw-normal mb-0">Our Organizarion have diffrent delivery system, Paid & free delivery system depends on our taget clients financial condition</p>
                </div>
                <div class="public_img_1">
                <img src="{{asset('images/deliveryMedicine.jpg')}}" alt=""/>
                </div>  
            </div>  
        </section>
        <!-- section 3 End -->
        <!-- section 4 Start -->
        <section class="publicData">
        <div class="container px-4 px-lg-5 my-5 d-flex justify-content-around publicData">
                <div class="publicData1">hello</div>  
                <div class="publicData1">Dolly</div>  
                <div class="publicData1">Go</div>  
            </div>  
        </section>
        <!-- section 4 End -->
        
        
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
