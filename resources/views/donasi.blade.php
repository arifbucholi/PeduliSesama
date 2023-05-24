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

    <link rel="stylesheet" href="assets/css/readmore.css">

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
            <li class="nav-item active"><a href="/donasi" class="nav-link">Donasi</a></li>
            @if (Auth::check())
            <li class="nav-item"><a href="/transaksiuser" class="nav-link">Transaksi</a></li>
            <li class="nav-item"><a href="/programuser" class="nav-link">Program</a></li>
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
                    {{-- <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon">
                                <i class="mdi mdi-settings text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">{{ Auth::user()->name }}</p>
                        </div>
                    </a> --}}
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
        <h1 class="row justify-content-center">Donasi</h1>
        <div class="container">
            <div class="row ">
                <div class="col">
                    {{-- // filter
                    <div class="filter-section">
                        <label for="category-filter">Filter Kategori:</label>
                        <select id="category-filter" name="category" onchange="filterCampaigns()">
                            <option value="all" {{ $selectedCategory === 'all' ? 'selected' : '' }}>Semua Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category }}" {{ $selectedCategory == $category ? 'selected' : '' }}>{{ $category }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="border-radius:25px">Filter
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <input class="form-control" id="myInput" type="text" placeholder="Cari..">
                        <li><a href="#" style="padding-left:12px;"> Pendidikan</a></li>
                        <li><a href="#" style="padding-left:12px;"> Sosial</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section" style="padding:10px; padding-bottom:50px">
      <div class="container">
      	<div class="row">
            @foreach ($campaigns as $campaign)
      		<div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url('{{ $campaign->img_url }}'); z-index: -1;"></a>

                    {{-- <a href="#" class="img" ></a> --}}
                    <div class="text p-3 p-md-4">
                        <h3 style="margin-bottom:4px"><a href="#">{{ $campaign->title }}</a></h3>
                        <p style="margin-bottom:-5px">Pembuat Program:</p>
                        <p>{{ $campaign->user->name }}</p>
                        {{-- <p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p> --}}

                        <p style="margin-bottom:0px; word-wrap:break-word">{{ Str::limit($campaign->desc, 90, '...') }}</p>
                        <a href="">Baca Selengkapnya</a>

                        @php
                            $endDate = \Carbon\Carbon::parse($campaign->dateline);
                            $remainingDays = $endDate->diffInDays(\Carbon\Carbon::now());
                        @endphp
                        <span class="donation-time mb-3 d-block">Sisa : {{ $remainingDays }} hari</span>
                        {{-- <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 98.5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                        <div class="progress custom-progress-success">
                            <div id="progress-bar" class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <span class="fund-raised d-block" style="padding-bottom:15px">Rp28,000 Terkumpul dari Rp {{ number_format($campaign->target_amount,0,',','.') }}</span>
                        {{-- {{ number_format($attributes['goal'], 0, ',', '.')  --}}
                        {{-- <a href="/donations">Donasi Sekarang</a> --}}
                        <a href="/donations">
                            <button class="btn btn-primary d-flex " >Donasi Sekarang</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
      		{{-- <div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url(assets/images/cause-2.jpg);"></a>
    					<div class="text p-3 p-md-4">
                            <h3 style="margin:-2px"><a href="#">Judul Program disini</a></h3>
                            <p>- Nama Pemilik Program</p>
    						<p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
		    				<span class="donation-time mb-3 d-block">Sisa hari disini</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">Rp28,000 Terkumpul dari Rp100,000</span>
    					</div>
    				</div>
      		</div>
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url(assets/images/cause-3.jpg);"></a>
    					<div class="text p-3 p-md-4">
                            <h3 style="margin:-2px"><a href="#">Judul Program disini</a></h3>
                            <p>- Nama Pemilik Program</p>
    						<p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
		    				<span class="donation-time mb-3 d-block">Sisa hari disini</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">Rp28,000 Terkumpul dari Rp100,000</span>
    					</div>
    				</div>
      		</div>
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url(assets/images/cause-4.jpg);"></a>
    					<div class="text p-3 p-md-4">
                            <h3 style="margin:-2px"><a href="#">Judul Program disini</a></h3>
                            <p>- Nama Pemilik Program</p>
    						<p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
		    				<span class="donation-time mb-3 d-block">Sisa hari disini</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">Rp28,000 Terkumpul dari Rp100,000</span>
    					</div>
    				</div>
      		</div>
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url(assets/images/cause-5.jpg);"></a>
    					<div class="text p-3 p-md-4">
                            <h3 style="margin:-2px"><a href="#">Judul Program disini</a></h3>
                            <p>- Nama Pemilik Program</p>
    						<p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
		    				<span class="donation-time mb-3 d-block">Sisa hari disini</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">Rp28,000 Terkumpul dari Rp100,000</span>
    					</div>
    				</div>
      		</div>
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url(assets/images/cause-6.jpg);"></a>
    					<div class="text p-3 p-md-4">
                            <h3 style="margin:-2px"><a href="#">Judul Program disini</a></h3>
                            <p>- Nama Pemilik Program</p>
    						<p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
		    				<span class="donation-time mb-3 d-block">Sisa hari disini</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">Rp28,000 Terkumpul dari Rp100,000</span>
    					</div>
    				</div>
      		</div> --}}
        </div>
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

    <section class="ftco-section" style="padding:50px">
    	<div class="container">
    	    <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3">
                        <span class="flaticon-donation-1"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Buat Penggalangan Dana</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <button class="btn btn-primary" style="border-radius: 20px">Buat Sekarang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3">
                        <span class="flaticon-charity"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Mari Berdonasi</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <button class="btn btn-primary" style="border-radius: 20px">Donasi Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    	</div>
    </section>


    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/images/image_1.jpg);"></a>
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
                <a class="blog-img mr-4" style="background-image: url(assets/images/image_2.jpg);"></a>
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
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



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


  // Readmore
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elements = document.getElementsByClassName('text-limit');
        Array.from(elements).forEach(function(element) {
            var text = element.innerHTML;
            var words = text.split(' ');
            var maxWords = 20; // Jumlah kata yang ingin ditampilkan
            if (words.length > maxWords) {
            var limitedText = words.slice(0, maxWords).join(' ');
            element.innerHTML = limitedText + '... <a href="#" class="read-more">Read More</a>';
            var readMoreLink = element.querySelector('.read-more');
            readMoreLink.addEventListener('click', function(event) {
                event.preventDefault();
                // Ganti dengan URL halaman detail yang sesuai
                window.location.href = 'detail-page-url';
            });
            }
        });
    });
  </script>

  // js filter
    <script>
        function filterCampaigns() {
            var selectedCategory = document.getElementById('category-filter').value;
            window.location.href = '/campaigns?category=' + selectedCategory;
        }
    </script>

  </body>
</html>
