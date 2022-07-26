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
                <a class="navbar-brand" href="#!">Donate & Cure</a>
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
        <header class=" py-5">
            <section class="py-5">
            <h1>Through our site {{$getMedicineNumber}} Medicine Donation<h1>
            <i class="fab fa-facebook-f"></i>    
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
                <div class="publicData1">
                    <h5> <strong>Donated Mediicne</strong></h5>
                    <h3>hello {{$getMedicineNumber}}</h3>
                </div>  
                <div class="publicData1">
                     <h5><strong>Requested Mediicne</strong></h5>
                    <h4>Dolly {{$donateMicineNumber}}</h4>
                </div>  
                <div class="publicData1">
                    <h5><strong>Abaiable Blood</strong></h5>
                    <h4>Dolly {{$DonatedBloodNumber}}</h4>
                </div>  
            </div>  
        </section>
        <!-- section 4 End -->
        <!-- Section 5 start-->
        <section class="py-5 ">
         
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
        <!-- Section 5 End-->
        
        
        <!-- Footer-->
       <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i><strong>Donate & Cure</strong>
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Service
          </h6>
          <p>
            <a href="#!" class="text-reset">Medicine Donation</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ask for medicine Help</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Blood Donatio </a>
          </p>
          <p>
            <a href="#!" class="text-reset">Request Blood</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Follow us   
          </h6>
          <p>
            <a href="#!" class="text-reset">facebook</a>
          </p>
          <p>
            <a href="#!" class="text-reset">snapchat</a>
          </p>
          <p>
            <a href="#!" class="text-reset">instagram</a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> 13/1, panthopath, Dhaka</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@donarte&cure.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 88 018 4005 4325</p>
          <p><i class="fas fa-print me-3"></i> + 88 017 1549 3154</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js ')}}"></script>
    </body>
</html>
