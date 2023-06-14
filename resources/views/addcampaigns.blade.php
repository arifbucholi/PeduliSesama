<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Program</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets2/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets2/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets2/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets2/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets2/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets2/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets2/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">


      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          {{-- <a class="sidebar-brand brand-logo" href="/index"><img src="assets2/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/index"><img src="assets2/images/logo-mini.svg" alt="logo" /></a> --}}
          <p><h2>PeduliSesama</h2></p>
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
                    <h1 class="card-title text-center">Tambah Program</h1>
                    <div>
                        <form method="POST" action="/campaigns/store" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label class="form-label">Email</label>
                            <input type="text" style="background-color:#2A3038" class="form-control" disabled value="{{ Auth::user()->email }}">
                            </div>
                            <br>
                            <div>
                                <label class="form-label">Nama</label>
                            <input disabled type="text" style="background-color:#2A3038" class="form-control" value="{{ Auth::user()->name }}">
                            {{-- @foreach ($campaigns as $campaign) --}}
                            <input name="author_id" style="background-color:#2A3038" class="form-control" value="{{ Auth::id() }}" hidden>
                            {{-- @endforeach --}}
                            </div>
                            <br>
                            <div>
                                <label for="title">Judul program</label>
                                <input class="form-control" type="text" name="title" id="title" placeholder="Masukkan judul program" style="color:#FFFFFD" required>
                                </div>
                                @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            <br>
                            <div class="row">
                                <div id="date-picker" class="col md-form md-outline input-with-post-icon datepicker" inline="true">
                                    <label for="date-picker">Tanggal Mulai</label>
                                    <input class="form-control" type="date" id="start_date" name="start_date" style="color:#FFFFFD" required>
                                    <i class="fas fa-calendar input-prefix"></i>
                                    @if ($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                </div>
                                <div id="date-picker2" class="col md-form md-outline input-with-post-icon datepicker" inline="true">
                                    <label for="date-picker2">Tanggal Selesai</label>
                                    <input class="form-control" type="date" id="dateline" name="dateline" style="color:#FFFFFD" required>
                                    <i class="fas fa-calendar input-prefix"></i>
                                    @if ($errors->has('dateline'))
                                        <span class="text-danger">{{ $errors->first('dateline') }}</span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <label for="target_amount">Target Dana</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="padding:11.5px; background:white">Rp</span>
                                </div>
                                <input class="form-control" type="number" id="angkaInput" name="target_amount" placeholder="Masukkan nominal. Contoh : 10.000" style="color:#FFFFFD" required>
                                @if ($errors->has('target_amount'))
                                    <span class="text-danger">{{ $errors->first('target_amount') }}</span>
                                @endif
                            </div>
                            <br>
                            <div>
                                <label for="category">Kategori</label>
                                {{-- <input class="form-control" type="text" id="category" name="category" value="{{ old('category') }}" required> --}}
                                <select class="form-control" name="category" id="category" required style="color:#FFFFFD">
                                    {{-- <option value="" disabled style="color:#FFFFFD" selected>Pilih Kategori :</option> --}}
                                    <option value="Sosial">Sosial</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="BencanaAlam">Bencana Alam</option>

                                </select>
                                @if ($errors->has('category'))
                                    <span class="text-danger">{{ $errors->first('category') }}</span>
                                @endif
                            </div>
                            <br>
                            <div>
                                <label for="no_rekening">Nomor rekening</label>
                                <input class="form-control" type="number" name="no_rekening" id="no_rekening" placeholder="Masukkan nomor rekening Anda/perusahaan" style="color:#FFFFFD" oninvalid="this.setCustomValidity('Masukkan nomor rekening Anda/perusahaan')" data-error="Nomor rekening tidak boleh kosong" required>
                            </div>
                            <br>
                            <div>
                                <label for="img_url">Foto/gambar</label>
                                <input style="padding:11.5px;" class="form-control file-upload-info" type="file" name="img_url" id="img_url" oninvalid="this.setCustomValidity('Pilih gambar/foto')" data-error="Gambar/foto tidak boleh kosong" required>
                                <p style="padding-top: 8px; margin-bottom:0px">Preview :</p>
                                <img id="imgPreview" class="d-block" style="height:225px;width:390px">

                            </div>
                            <br>
                            <div>
                                <label for="desc">Deskripsi program</label>
                                <textarea class="form-control" name="desc" id="desc" style="height: 200px; color:#FFFFFD" placeholder="Masukkan deskripsi program" oninvalid="this.setCustomValidity('Masukkan deskripsi program')" data-error="Deskripsi program tidak boleh kosong" required></textarea>
                            </div>
                            <br>

                            <button class="nav-link btn btn-success create-new-button" type="submit">Create</button>
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
    <script src="assets2/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets2/vendors/chart.js/Chart.min.js"></script>
    <script src="assets2/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets2/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets2/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets2/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets2/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets2/js/off-canvas.js"></script>
    <script src="assets2/js/hoverable-collapse.js"></script>
    <script src="assets2/js/misc.js"></script>
    <script src="assets2/js/settings.js"></script>
    <script src="assets2/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets2/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script>
        // Data Picker Initialization
        $('.date-picker').datepicker({
        inline: true
        });
    </script>
    <script>
    $(document).ready(function() {
    // Inisialisasi filter
    $('.filter-btn').on('click', function() {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        filterCampaigns($(this).data('filter'));
    });

    // Fungsi untuk memfilter kampanye menggunakan AJAX
    function filterCampaigns(category) {
        $.ajax({
        url: '/campaigns', // Ganti dengan URL endpoint untuk mengambil data kampanye dari server
        type: 'GET',
        dataType: 'json',
        data: { category: category },
        success: function(response) {
            // Hapus semua kampanye yang ada sebelumnya
            $('#campaign-list').empty();

            // Tampilkan kampanye baru
            response.forEach(function(campaign) {
            var campaignHtml = '<div class="campaign">' +
                '<h3>' + campaign.title + '</h3>' +
                '<p>' + campaign.description + '</p>' +
                '<span>' + campaign.category + '</span>' +
                '</div>';

            $('#campaign-list').append(campaignHtml);
            });
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
        });
    }
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


  </body>
</html>
