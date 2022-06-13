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
         <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    </head>
    <body>
      
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg ">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>

                    </ul>

                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="xksk">
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
          <div class="container bg-gradient-light-orenge py-5">
            <div class="form_button d-flex justify-content-around">
                <!-- =================================================Start============================== -->
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
                            @if(isset($success))
                                <div class="alert alert-success">
                                    {{ $success }}
                                </div>
                            @endif
            
                        
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus-square fa-8x"></i><h6>Donate Blood</h6></button>
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Donate Blood</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
            
                                  <form action="{{route('bloodDonate.store')}}" method="POST" enctype="multipart/form-data">
            
                                    @csrf
                                    <div class="modal-body">
                                      <div class="mb-3">
                                        <label  class="col-form-label">Name *</label>
                                        <input type="text" name="dooner_name" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                        <label  class="col-form-label">Blood Type</label>
                                        <input type="text" name="blood_type" class="form-control"  >
                                      </div>
                                      <div class="mb-3">
                                        <label  class="col-form-label"> Contact</label>
                                        <input class="form-control" name="contact" ></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Health Status </label>
                                        <input type="text" name="health_status" class="form-control"></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Present Address</label>
                                        <input class="form-control" name="present_address" ></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Permanent Address</label>
                                        <input type="text" name="permanent_address" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                        <label for="formFile" class="form-label">Donar Image</label>
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
                            @if(isset($success))
                                <div class="alert alert-success">
                                    {{ $success }}
                                </div>
                            @endif
            
                        <!-- Blood donate Form End -->
                        
                        <!-- Blood Get Form Start -->
                        <div >
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11" data-bs-whatever="@mdo"><i class="fas fa-plus-square fa-8x"></i><h6>Get Blood</h6></button>
                        </div>
                        <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Blood Get</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
            
                                  <form action="{{route('bloodGet.store')}}" method="POST" enctype="multipart/form-data">
            
                                    @csrf
                                    <div class="modal-body">
                                      <div class="mb-3">
                                        <label  class="col-form-label">Name *</label>
                                        <input type="text" name="receiver_name" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                        <label  class="col-form-label">Blood Type</label>
                                        <input type="text" name="blood_type" class="form-control"  >
                                      </div>
                                      <div class="mb-3">
                                        <label  class="col-form-label"> Contact</label>
                                        <input class="form-control" name="contact" ></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Health Status </label>
                                        <input type="text" name="health_problem" class="form-control"></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Present Address</label>
                                        <input class="form-control" name="type_of_necessity" ></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Permanent Address</label>
                                        <input type="text" name="hospital_addrress" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                        <label for="formFile" class="form-label">Donar Image</label>
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
                    </div> 
            </div>
          </div>
        </div>
    
      
      

  <div class="container">
    <div class="blood_data">
        <div class="blood_data1"> 
          <div class=" ">
          @if(isset($bloodDonates))
          @foreach ($bloodDonates as $bloodDonate)
                <div class=" text-black medicine_data_button_container">
                     <div class="medicine_data_button">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$bloodDonate->id}}" data-bs-whatever="@mdo"><img src="{{asset('images/'.$bloodDonate->image)}}" width="100" height="100"><h5><small>Name: {{$bloodDonate->doonerName}}</small> </h5> <h5><small>Type: {{$bloodDonate->BloodType}}</small> </h5></button>

                     </div>
                            
                      <div class="modal fade" id="exampleModal{{$bloodDonate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Type: {{$bloodDonate->doonerName}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="medicinDataBox">
                                        <div class="medicinData">
                                        <div class="MedicineImage">
                                        <img src="{{asset('images/'.$bloodDonate->image)}}" width="200" height="200">
                                        </div>
                                        <div class="medicineData1">
                                            <div>
                                            <h5 class="medicineData2">Medicine: {{$bloodDonate->doonerName}}</h5>
                                            </div>
                                            <div>
                                            <h5 class="medicineData2">BloodType: {{$bloodDonate->BloodType}}</h5>
                                            </div>
                                            <div>     
                                            <h5 class="medicineData2"> Quantity: {{$bloodDonate->contact}}</h5>
                                            </div>
                                            <div>
                                            <h5 class="medicineData2">Expire Date: {{$bloodDonate->healthStatus}}</h5>
                                            </div>
                                        </div>
                                        </div>
                                        <div>
                                        <h4>Address: {{$bloodDonate->presentAddrress}}</h4>
                                        <h4>Address: {{$bloodDonate->permanentAddress}}</h4>
                                        </div>
                                        </div>

                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button"  class="btn btn-primary">Apply</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                </div>
        
            </div>
          @endforeach
          @endif
    </div>
        </div>
 
        <div class="blood_data2">
          <div class="">
                @if(isset($bloodGets))
                @foreach ($bloodGets as $bloodGet)
                <div class=" text-black medicine_data_button_container2">
                    <div class="medicine_data_button">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#examp{{$bloodGet->id}}" data-bs-whatever="@mdo"><img src="{{asset('images/'.$bloodGet->image)}}" width="100" height="100"><h5><small>Name: {{$bloodGet->patiernName}}</small> </h5> <h5><small>Type: {{$bloodGet->BloodType}}</small> </h5></button>
                    </div>
                        
                        <div class="modal fade" id="examp{{$bloodGet->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Type: {{$bloodGet->patiernName}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="medicinDataBox">
                                    <div class="medicinData">
                                    <div class="MedicineImage">
                                    <img src="{{asset('images/'.$bloodGet->image)}}" width="200" height="200">
                                    </div>
                                    <div class="medicineData1">
                                        <div>
                                        <h5 class="medicineData2">Medicine: {{$bloodGet->patiernName}}</h5>
                                        </div>
                                        <div>
                                        <!-- <h5 class="medicineData2">Brand: {{$bloodGet->BloodType}}</h5> -->
                                        </div>
                                        <div>     
                                        <!-- <h5 class="medicineData2"> Quantity: {{$bloodGet->contact}}</h5> -->
                                        </div>
                                        <div>
                                        <!-- <h5 class="medicineData2">Expire Date: {{$bloodGet->healthStatus}}</h5> -->
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                    <!-- <h4>Address: {{$bloodGet->presentAddrress}}</h4> -->
                                    <!-- <h4>Address: {{$bloodGet->permanentAddress}}</h4> -->
                                    </div>
                                    </div>

                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button"  class="btn btn-primary">Apply</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            @endif
        </div>


        </div>
        </div>
    </div>
</div>

      <!-- section end blood get data  -->

        <!-- Footer-->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>

    </body>
</html>
