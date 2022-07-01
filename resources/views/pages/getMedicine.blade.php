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
        <link href="{{asset('css/medicineDonate.css')}}" rel="stylesheet" />
        <link href="{{asset('css/getMedicine.css')}}" rel="stylesheet" />
         <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    </ul>
                </div>
                <div class="input-group">
                  <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                  </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="">
            <!-- <div class="container ">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Donate for peace</h1>
                    <p class="lead fw-normal text-white-50 mb-0">You can donate hare bg-gradient-orenge medicine & blood</p>
                </div>
            </div> -->
            <br>
        </header>
        <!-- section start-->
        <div class="bg-gradient-light-orenge py-5">
          <div class="container ">
            <!-- Donate Medicine start -->
                  <div class=" text-black">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div >
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus-square fa-8x"></i><h6>Donate Medicine</h6></button>
                    </div>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Donate Medicine</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                            <form action="{{ route('getMedicine.store')}}" method="POST" enctype="multipart/form-data">

                              @csrf
                              <div class="modal-body">
                                <div class="mb-3">
                                  <label  class="col-form-label">Medicine Receiver Name *</label>
                                  <input type="text" name="receiver_name" class="form-control" >
                                </div>
                                <div class="mb-3">
                                  <label  class="col-form-label">Reason for help</label>
                                  <input type="text" name="reason" class="form-control" >
                                </div>
                                <div class="mb-3">
                                  <label  class="col-form-label"> Number of medicine According to prescription / Name of Medicine</label>
                                  <input class="form-control" name="medicine_name" ></input>
                                </div>
                                
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Quantity</label>
                                  <input class="form-control" name="medecine_quantity" ></input>
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Approximate cost for related medicine </label>
                                  <input type="text" name="cost" class="form-control"></input>
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Receiver Address & contact</label>
                                  <input type="text" name="receiver_address" class="form-control" ></input>
                                </div>
                                <div class="mb-3">
                                  <label for="formFile" class="form-label">Upload Your prescription</label>
                                  <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary"  class="" >Submit</button>
                                  <!-- <input type="submit" value="Submit"> -->
                                </div>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- Donate Medicine End -->
              </div>
          </div>
        <!-- Section End-->
        <div class="main_body">
          <div class="container d-flex align-content-start flex-wrap">
              @if(isset($getMedicines))
                  @foreach ($getMedicines as $getMedicine)
                        <div type="" class="btn btn-success medicine_data_button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$getMedicine->id}}" data-bs-whatever="@mdo"><img src="{{asset('images/'.$getMedicine->image)}}" width="100" height="100"><h6>Donate Medicine</h6>
                         </div>
                      
                      <div class="modal fade" id="exampleModal{{$getMedicine->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Type: {{$getMedicine->medicineType}}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="medicinDataBox">
                                  <div class="medicinData">
                                  <div class="MedicineImage">
                                  <img src="{{asset('images/'.$getMedicine->image)}}" width="200" height="200">
                                  </div>
                                  <div class="medicineData1">
                                      
                                      <div>
                                      <h5 class="medicineData2">Receiver: {{$getMedicine->receiverName}}</h5>
                                      </div>
                                      <div>
                                      <h5 class="medicineData2">Reason: {{$getMedicine->reason}}</h5>
                                      </div>
                                      <div>
                                      <h5 class="medicineData2">Contact: {{$getMedicine->quantity}}</h5>
                                      </div>
                                      <div>
                                      <h5 class="medicineData2">Medicine : {{$getMedicine->medicineName}}</h5>
                                      </div>
                                  </div>
                                  </div>
                                  <div>
                                  <h4>Address: {{$getMedicine->receiverAddress}}</h4>
                                  </div>
                                  </div>

                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button"  class="btn btn-primary">Donate</button>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
              @endif
          </div>
        </div>

        <!-- Footer-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>

    </body>
</html>
