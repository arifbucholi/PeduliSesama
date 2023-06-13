<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PeduliSesama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body style="overflow-x:hidden">

  {{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">PeduliSesama</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="/berita" class="nav-link">Berita</a></li>
            <li class="nav-item"><a href="/donasi" class="nav-link">Donasi</a></li>
            @if (Auth::check())
            <li class="nav-item"><a href="/transaksiuser" class="nav-link">Transaksi</a></li>
            <li class="nav-item"><a href="/programiuser" class="nav-link">Program</a></li>
            @endif
            @if (!Auth::check())
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
            @endif
            @if (Auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                    <div class="navbar-profile">
                        <i class="fa fa-bars"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon">
                                <i class="mdi mdi-settings text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Profile</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon">
                            <i class="mdi mdi-onepassword text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                        </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon">
                              <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Log out</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    
                </div>
            </li>
            @endif
        </ul>
      </div>
    </div>
  </nav> --}}
    <!-- END nav -->

    {{-- <section class="ftco-section" style="padding:10px; padding:47px; background:#252525"></section> --}}
    <br>
    <div class="row justify-content-center" style="padding:5px">
      <div class="col-md-5 heading-section ftco-animate text-center">
        <h1>Invoice</h1>
      </div>
    </div>
    <div class="container">
        <div class="main-panel">
            <div class="content-wrapper" style="border-radius: 10px">
              <div class="row ">
                <div class="col-6 mx-auto">
                  <div class="card" style="border-radius: 10px">
                    <div class="card-body" style=" background:#252525;border-radius:7px; padding-top:10px">
                      <div>
                              <label for="title">Judul program</label>
                              <div class="input-group">
                                <h2 style="color: #FFFFFD">{{ $donation->campaigns->title }}</h2>
                              </div>
                              <br>
                              <label for="title">e-mail pengguna</label>
                              <div class="input-group">
                                <h3 style="color: #FFFFFD">{{ $donation->user->email }}</h3>
                              </div>
                              <br>
                              <label>Nominal Donasi</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" style="padding:11.5px; background:white">Rp {{ number_format($donation->amount) }}</span>
                                  </div>
                              </div>
                              <br>
                              <label>Status Pembayaran</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="btn-outline-success" style="padding:11.5px; background:white">{{ $donation->status }}</span>
                                  </div>
                              </div>
                              <br>
                              <div class="row justify-content-center">
                                <a href="/donasi">
                                <button class="nav-link btn btn-success create-new-button" style="border-radius:25px">Back</button>
                                </a>
                              </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- content-wrapper ends -->

        </div>
    </div>

    <br>
    <br>




    <footer class="ftco-footer ftco-section img" style="padding:50px">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-0">
          <div class="col-md-6">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p style="padding-right:80px">PeduliSesama adalah sebuah organisasi nirlaba yang berkomitmen
                untuk meningkatkan kualitas hidup masyarakat yang membutuhkan.
                Dalam upaya kami untuk menciptakan perubahan positif, kami menyediakan
                bantuan dan dukungan kepada individu dan komunitas yang terpinggirkan,
                termasuk penyandang disabilitas, kaum miskin,
                dan mereka yang terdampak bencana alam.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Gubeng Airlangga no.1 Surabaya, Indonesia</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+62 392 3929 210</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">pedulisesama@gmail.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
            <div class="container text-center">
                <div class="row mb-5">
                  <div class="col-md-12">
                    <div class="ftco-footer-widget mb-4 text-center"  id="social-icons">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5 d-flex justify-content-center">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
      </div>
    </footer>
    <style>
        #social-icons {
            display: flex;
            justify-content: center;
        }
        #social-icons li {
            margin-right: 10px;
        }
    </style>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}"></script>
  <script src="{{ asset('assets/js/google-map.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>



  </body>
</html>
