<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toko OhMaggot!</title>
    
        <link rel="Website Icon" href="images/icon/logomaggot.png" type="png">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/product.css')}}">
        <!-- FONT RUBIK -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <!-- ICON -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    
      </head>
      <body>
      
    
        <!-- NAVBAR -->
    <div class="navbar">
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <img src="{{asset('images/icon/logomaggot.png')}}" alt="" height="120px" class="d-inline-block align-text-top">
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">home</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="{{ route('article') }}">article</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="{{route('product')}}">product</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="{{route('about')}}">about</a>
                </li>
                <li class="profile" style="margin-left: 20px;">
                  <a class="nav-link" href="{{route('profile')}}">
                    <i class="fa-solid fa-user"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  </div>
  <!-- NAVBAR -->


        <!-- SECTION 1 -->
    <div class="section1">
        <!-- <br> -->
          <!-- NAMA TOKO -->
          <h1 style="font-size: 80px;">Ternak Pak Midun</h1>
          <!-- NAMA TOKO -->
  
  
          <!-- SLIDER -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
  
              <!-- Indicators/dots -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
              </div>
          
              <!-- The slideshow/carousel -->
              <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/sliderToko/sliderToko1.png"  class="d-block w-100">
              </div>
              <div class="carousel-item">
                  <img src="images/sliderToko/sliderToko2.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                  <img src="images/sliderToko/sliderToko3.png"  class="d-block w-100">
              </div>
              </div>
          
              <!-- Left and right controls/icons -->
              <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
              </button>
            </div>
        <!-- TUTUP SLIDER -->
        <br>
        <!-- LENGKUNGAN MAUT -->
        <!-- <br><br><br> -->
        <div class="lengkungan">
          <svg style="background-color: #FFF7D4" width="100%" height="150" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#FFD95A"></path>
          </svg>
        </div>
        <!-- LENGKUNGAN MAUT -->
    </div>
    <!-- SECTION1 -->
    <!-- SECTION2 -->
    <div class="section2">
        <br>
        <div class="about">
            <h1><b>About Ternak Pak Midun</b></h1>
            <div class="row">
                <div class="col-lg-6 ">
                    <img src="images/ternak/ternak 1.jpg" id="toko">
                </div>
                <div class="col-lg-6 tentang">
                    <p style="text-align: justify; margin-top: 30px;">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat quisquam qui architecto possimus assumenda quos dolorem nesciunt, nemo sapiente. At fugiat porro ratione voluptatum eveniet, neque ex corrupti amet delectus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam cupiditate exercitationem assumenda temporibus. Ad, eveniet quis, quo sequi fuga, obcaecati itaque ducimus quam fugit consequuntur natus ab inventore? Ipsam, fuga!
                    </p>
                        <!-- <br> -->
                          <br>
                            <a href="https://maps.app.goo.gl/ZVxACBi3DYQZvb1g8">Lokasi Ternak Pak Midun</a>
                        <br><br>
                    <!--Google map-->
                    <div class="maps">
                        <div id="map-container-google-2 maps" class="z-depth-1-half map-container"  >
                          <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" class="peta"
                         allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--Google Maps-->

                </div>
            </div>
            
        </div>



        <div class="produk">
            <h1 > <b>Produk</b></h1>
            <br><br>
            <!-- PRODUK -->
            <div class="row">
              @foreach ($produk as $p)
              <div class="column {{ $p->stock ? '' : 'user-select-none opacity-50' }}">
                <div class="card">
                  <img src="images/produk/{{$p->images[0]}}" alt="">
                  
                  <h5 style="margin-top: 10px;"> <b>{{$p->name}}</b></h5>
                  <div class="deskripsi">
                    <p>Rp. {{$p->harga}}</p>
                    <p>{{$p->description}}
                    </p>
                    <p>Stock : {{$p->stock ? 'Tersedia' : 'Kosong'}}</p>
                  </div>  

                  
                  <div class="rating">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                  </div>
                  <br>
                  <!-- <div class="card-footer text-center" style="display: block;"> -->
                    <a class="btn btn-sm" href="SigninSignUp/index.html" role="button" style="margin-top: 10px; background-color:#FFC474;"> <b>Beli</b></a>
                    <!-- Button trigger modal -->
                 
                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 20px; border-radius: 20px; background-color: #FFC474; margin-bottom: 20px;"> <b>Keranjang</b></button>
                  <!-- </div> -->
                    
                </div>
                
              </div>
              @endforeach
                
            </div>

            <!-- BARIS 2 -->


        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" ></div>

            <section class="vh-100" style="background-color: #FFC474;">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col">
                    <p><span class="h2">Keranjang Belanja </span><span class="h4">(1 item di keranjang)</span></p>
            
                    <div class="card mb-4">
                      <div class="card-body p-4">
            
                        <div class="row align-items-center">
                          <div class="col-md-2">
                            <img src="produk/pakan.jpg"
                              class="img-fluid" alt="Generic placeholder image">
                          </div>
                          <div class="col-md-2 d-flex justify-content-center">
                            <div>
                              <p class="small text-muted mb-4 pb-2">Nama</p>
                              <p class="lead fw-normal mb-0">Pakan Ternak</p>
                            </div>
                          </div>
                          <div class="col-md-4 d-flex justify-content-center">
                            <div>
                              <p class="small text-muted mb-4 pb-2">Quantity</p>
                              <p class="lead fw-normal mb-0 text-center">1</p>
                            </div>
                          </div>
                          <div class="col-md-4 d-flex justify-content-center">
                            <div>
                              <p class="small text-muted mb-4 pb-2">Price</p>
                              <p class="lead fw-normal mb-0">Rp. 150.000</p>
                            </div>
                          </div>
                          <!-- <div class="col-md-2 d-flex justify-content-center">
                            <div>
                              <p class="small text-muted mb-4 pb-2">Total</p>
                              <p class="lead fw-normal mb-0">Rp. 150.000</p>
                            </div>
                          </div> -->
                        </div>
            
                      </div>
                    </div>
            
            
                  </div>
                </div>
              </div>
            </section>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <a href="checkout.html" type="button" class="btn btn-primary"> Konfirmasi</a>
            </div>

          </div>
        </div>
      </div>
    </div>


    <!-- MODAL -->


    <!-- SECTION2 -->


    <!-- FOOTER -->

    <section class="footer">
        <!-- Footer -->
        <footer class="text-white">
          <!-- Grid container -->
          <div class="container p-4">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-4">
                <h3 style="font-weight: bold; font-size: 35px;">OhMaggot !</h3>
                <img src="images/logomaggot.png" alt="" class="logo">
      
                <p style="color: white;">
                  <br>
                  OhMaggot! adalah sebuah aplikasi yang dirancang untuk memberikan dukungan kepada para pemelihara Maggot dalam kegiatan budidaya mereka.
                </p>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4" id="footer-center">
                <br><br>
                <div>
                  <i class="fa-solid fa-location-dot"></i>
                  <p> <a href="https://maps.app.goo.gl/ZVxACBi3DYQZvb1g8">Sekolah Vokasi - IPB</a></p>
                </div>
                <div>
                  <i class="fa fa-phone"></i>
                  <p>08xxxxxxxxx</p>
                </div>
                <div>
                  <i class="fa fa-envelope"></i>
                  <p><a href="#">ohmaggott@gmail.com</a></p>
                </div>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4">
                <br>
                <h5 style="margin-top: 200px;"><b>Social Media</b></h5>
      
                <!-- Facebook -->
                  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
  
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
  
                <!-- Instagram -->
                <a class="btn btn-outline-light" href="#!" role="button"><i class="fa-brands fa-instagram"></i></a>
              </div>
  
              <!--Grid column-->
            </div>
  
            <!--Grid row-->
          </div>
  
          <!-- Grid container -->
      
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 : SyntaxSquad ><
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>
  
      <!-- FOOTER -->
  
  
      <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    
</body>
</html>