<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PeduliSesama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets2/vendors/flag-icon-css/css/flag-icon.min.css">

    <style>
    /* Style the input field */
    #myInput {
        padding: 20px;
        margin-top: -6px;
        border: 0;
        border-radius: 0;
        background: #f1f1f1;

    }
    </style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">PeduliSesama</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
            <li class="nav-item"><a href="/donasi" class="nav-link">Donasi</a></li>
            @if (Auth::check())
            <li class="nav-item active"><a href="/transaksiuser" class="nav-link">Transaksi</a></li>
            <li class="nav-item"><a href="/programuser" class="nav-link">Program</a></li>
            @endif
            @if (!Auth::check())
              <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
            @endif
            {{-- <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-bars"></i></a></li> --}}
            @if (Auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <i class="fa fa-bars"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('userProfiles') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon">
                          <i class="mdi mdi-settings text-success" style="padding: 5px"></i>
                          <i>Profil</i>
                        </div>
                      </div>
                      {{-- <div class="preview-item-content">
                        <p class="preview-subject mb-1">Profile</p>
                      </div> --}}
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                          <div class="preview-icon">
                          <i class="mdi mdi-onepassword text-info" style="padding: 5px"></i>
                          <i>Ubah Password</i>
                          </div>
                      </div>
                      {{-- <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                      </div> --}}
                      </a>
                    <div class="dropdown-divider"></div>
                    {{-- <a href="#" class="dropdown-item preview-item"> --}}
                        <div class="preview-thumbnail">
                            <div class="preview-icon">
                                <a href="/logout" style="padding-left: 30px">
                                    <i class="mdi mdi-logout text-danger"> Logout</i>
                                    {{-- <i>Log out</i> --}}
                                </a>
                            </div>
                        </div>
                    {{-- </a> --}}
                    <div class="dropdown-divider"></div>
                    {{-- <p class="p-3 mb-0 text-center">Advanced settings</p> --}}
                </div>
            </li>
            @endif
          </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    <section class="ftco-section" style="padding:10px; padding:47px; background:#252525"></section>


    <div class="overlay"></div>
    <br>
    <div class="container">
        <br>
        <h1 class="row justify-content-center">Transaksi Anda</h1>
        <div class="container">
            <div class="row ">
                <div class="col">
                    <div class="dropdown">
                        <button class="btn btn-primary" type="button" style="border-radius:25px">Donasi Sekarang
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container" style=" background:#252525; border-radius:7px; padding-top:10px">
            <table class="table table-hover table-dark" style="background:#252525">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Program</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nominal</th>
                    {{-- <th scope="col" class="text-center">Informasi</th> --}}
                    {{-- <th scope="col">Edit</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach ($d as $d)
                  <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $d->campaigns->title }}</td>
                      <td>{{ $d->created_at->format('Y-m-d') }}</td>
                      <td>{{ number_format($d->amount,0,',','.') }}</td>
                      {{-- <td>{{ $d->campaigns->pdf_url }}</td> --}}
                  </tr>
                  @endforeach
                  {{-- <tr>
                    <th scope="row">2</th>
                    <td>22-02-2023</td>
                    <td>Della Found</td>
                    <td>Rp2000</td>
                    <td class="text-center">
                        <a href="#">Lihat</a>
                    </td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </td>
                  </tr> --}}
                </tbody>
            </table>
        </div>
    </div>


    <br>
    <br>




    <section class="ftco-section" style="padding:10px; padding-bottom:50px">
      <div class="container">


        {{-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
      </div>
    </section>


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


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".dropdown-menu li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
  </script>

  <script>
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    searchButton.addEventListener('click', () => {
      const inputValue = searchInput.value;
      alert(inputValue);
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <style>
    #social-icons {
        display: flex;
        justify-content: center;
    }
    #social-icons li {
        margin-right: 10px;
    }
  </style>

  </body>
</html>
