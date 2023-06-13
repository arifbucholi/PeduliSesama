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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('assets2/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/flag-icon-css/css/flag-icon.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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
            <a class="navbar-brand" href="/">PeduliSesama
                <img style="background-image: url('assets/images/SumberMakmur.png')">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
                    <li class="nav-item"><a href="/donasi" class="nav-link">Donasi</a></li>
                    <li class="nav-item"><a href="/transaksiuser" class="nav-link">Transaksi</a></li>
                    <li class="nav-item"><a href="/programuser" class="nav-link">Program</a></li>
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
                                        <i class="mdi mdi-settings text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Profile</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/logout" class="dropdown-item preview-item">
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
                            {{-- <p class="p-3 mb-0 text-center">Advanced settings</p> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="ftco-section" style="padding:10px; padding:47px; background:#252525"></section>
    <br>
    <h1 class="card-title text-center" >Ganti Password</h1>
    <br>
    <div class="container">
        <div class="main-panel">
            <div class="content-wrapper" style="border-radius: 10px">
                <div class="row ">
                    <div class="col-7 mx-auto">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body" style=" background:#252525;border-radius:7px; padding-top:10px">
                                <div>
                                    <form action="/updatepass" method="POST">
                                          @csrf
                                          <div class="mb-3">
                                            <label for="oldpw" class="form-label">Old Password</label>
                                            <input type="password" class="form-control" name="oldpw">
                                          </div>
                                          <div class="mb-3">
                                            <label for="newpw" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="newpw">
                                          </div>
                                          <div class="mb-3">
                                            <label for="renewpw" class="form-label">Retype New Password</label>
                                            <input type="password" class="form-control" name="renewpw">
                                          </div>
                                          <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
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
                  {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                  <p style="padding-right:80px">PeduliSesama adalah sebuah organisasi nirlaba yang berkomitmen
                    untuk meningkatkan kualitas hidup masyarakat yang membutuhkan.
                    Dalam upaya kami untuk menciptakan perubahan positif, kami menyediakan
                    bantuan dan dukungan kepada individu dan komunitas yang terpinggirkan,
                    termasuk penyandang disabilitas, kaum miskin,
                    dan mereka yang terdampak bencana alam.</p>
                    {{-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul> --}}
                </div>
              </div>
              {{-- <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Recent Blog</h2>
                  <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                    <div class="text">
                      <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                      <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                    <div class="text">
                      <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                      <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="ftco-footer-widget mb-4 ml-md-4">
                  <h2 class="ftco-heading-2">Site Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Home</a></li>
                    <li><a href="#" class="py-2 d-block">About</a></li>
                    <li><a href="#" class="py-2 d-block">Donate</a></li>
                    <li><a href="#" class="py-2 d-block">Causes</a></li>
                    <li><a href="#" class="py-2 d-block">Event</a></li>
                    <li><a href="#" class="py-2 d-block">Blog</a></li>
                  </ul>
                </div>
              </div> --}}
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
            <!-- <div class="row">
              <div class="col-md-12 text-center"> -->
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

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              <!-- </div>
            </div> -->
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

        <!-- Plugin js for this page -->
    <script src="{{ asset('assets2/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets2/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets2/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets2/js/misc.js') }}"></script>
    <script src="{{ asset('assets2/js/settings.js') }}"></script>
    <script src="{{ asset('assets2/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets2/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
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
        // Data Picker Initialization
        $('.date-picker').datepicker({
            inline: true
        });
    </script>

    <script>
        // ambil element input dan img preview
        const img_url = document.querySelector('#img_url');
        const imgPreview = document.querySelector('#imgPreview');
        // event listener untuk input file diubah
        img_url.addEventListener('change', function() {
            // cek apakah file yang diupload adalah gambar
            if (this.files && this.files[0]) {
                const file = this.files[0];
                const reader = new FileReader();
                // saat file telah dibaca, tampilkan preview gambar
                reader.addEventListener('load', function() {
                    imgPreview.src = reader.result;
                });
                // baca file sebagai data URL
                reader.readAsDataURL(file);
            }
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
</body>
</html>
