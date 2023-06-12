<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets2/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->

    <link rel="stylesheet" href="{{ asset('assets2/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}
    <!-- End layout styles -->
    <link rel="stylesheet" href="{{ asset('assets2/images/favicon.png') }}">
  </head>
  <body>
    <div class="container-scroller">


      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/index"><img src="{{ asset('assets2/images/logo.svg') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/index"><img src="{{ asset('assets2/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Navigasi</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ddd" aria-expanded="false" aria-controls="ddd">
              <span class="menu-icon">
                <i class="mdi mdi-view-grid"></i>
              </span>
              <span class="menu-title">Dashboard</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ddd">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/dashboardadmin">Halaman Utama</a></li>
                <li class="nav-item"> <a class="nav-link" href="/campaigns">Program</a></li>
                <li class="nav-item"> <a class="nav-link" href="/daftarpengguna">Daftar Pengguna</a></li>

                {{-- <li class="nav-item"> <a class="nav-link" href="/dropdowns">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="/typography">Typography</a></li> --}}
              </ul>
            </div>
          </li>
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="/campaigns">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Program</span>
            </a>
          </li> --}}
          <li class="nav-item menu-items">
            <a class="nav-link" href="/beritaadmin">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Berita</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/transaksiadmin">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/buttons">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="/dropdowns">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="/typography">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/basic_elements">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/basic-table">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/chartjs">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/mdi">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/blank-page"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="/error-404"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="/error-500"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="/login"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="/register"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="/index"><img src="assets2/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
              </button>
              {{-- <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                  <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search products">
                  </form>
                </li>
              </ul> --}}
              <ul class="navbar-nav navbar-nav-center">
                  <li class="nav-item dropdown d-none d-lg-block">
                      <a class="nav-link btn btn-success create-new-button" aria-expanded="false" href="/addcampaigns">+ Buat Program</a>
                  </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">
                  {{-- <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="/addcampaigns">+ Buat Program</a> --}}
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                    <h6 class="p-3 mb-0">Projects</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-file-outline text-primary"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Software Development</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-web text-info"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">UI Development</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-layers text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Software Testing</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all projects</p>
                  </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                  <a class="nav-link" href="#">
                    <i class="mdi mdi-view-grid"></i>
                  </a>
                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets2/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets2/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets2/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">4 new messages</p>
                  </div>
                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-calendar text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Event today</p>
                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Settings</p>
                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-link-variant text-warning"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Launch Admin</p>
                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all notifications</p>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                    <div class="navbar-profile">
                      <img class="img-xs rounded-circle" src="assets2/images/faces/face15.jpg" alt="">
                      <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                      <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Settings</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-onepassword  text-info"></i>
                          </div>
                      </div>
                      <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                      </div>
                      </a> --}}
                    <div class="dropdown-divider"></div>
                    <a href="/logout" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
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
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
              </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" style="border-radius: 10px">

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card" style="border-radius: 10px">
                  <div class="card-body">
                    <h1 class="card-title text-center">Edit Berita</h1>
                    <div class="table-responsive">
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf


                            <div>
                                <label for="title">Judul berita</label>
                                    <input id="title" type="text" style="color:#FFFFFD" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $blog->title) }}" autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <br>
                                <label for="img_url">Foto/gambar</label>
                                    <input id="img_url" type="file" class="form-control @error('img_url') is-invalid @enderror" style="color:#FFFFFD" name="img_url" autocomplete="img_url" autofocus>
                                    <br>
                                    <img src="{{ $blog->img_url }}" alt="{{ $blog->title }}" id="imgPreview" class="d-block" style="height:225px;width:420px">



                                    @error('img_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            <br>
                                <label for="desc">Deskripsi berita</label>
                                    <textarea id="desc" style="color:#FFFFFD" style="height: 200px" class="form-control @error('desc') is-invalid @enderror" name="desc" autocomplete="desc">{{ old('desc', $blog->desc) }}</textarea>

                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            <br>

                            <div class="">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">
                                        Cancel
                                    </a>
                            </div>
                        </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets2/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->

    <script src="{{ asset('assets2/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets2/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.cookie.js" type="text/javascript') }}"></script>
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
    <!-- End custom js for this page -->
  </body>
</html>
