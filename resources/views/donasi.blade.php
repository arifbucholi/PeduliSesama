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

    <style>
        .search-input {
            position: relative;
            display: inline-block;

        }

        .search-input input[type="text"] {
            padding-right: 30px;
        }

        .search-input::before {
            content: "";
            position: absolute;
            top: 49%;
            right: 10px;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            background-image: url( https://cdn-icons-png.flaticon.com/512/482/482631.png);
            background-size: cover;
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
                    {{-- <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="border-radius:25px">Filter
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <input class="form-control" id="myInput" type="text" placeholder="Cari..">
                        <li><a href="#" style="padding-left:12px;"> Pendidikan</a></li>
                        <li><a href="#" style="padding-left:12px;"> Sosial</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <br>


    <section class="ftco-section" style="padding:10px; padding-bottom:50px">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center filter-btns">
                    <div class="col-md-6 mb-3">
                        <div class="search-input" >
                            <input type="text" id="campaign-filter" placeholder="Filter berdasarkan judul..." oninput="filterCampaigns('all')" class="form-control" style="border-radius: 25px; height:30px">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <button class="btn btn-primary mr-2 mb-3" style="border-radius:25px;" onclick="filterCampaigns('all')">Semua</button>
                        <button class="btn btn-primary mr-2 mb-3" style="border-radius:25px;" onclick="filterCampaigns('Sosial')">Sosial</button>
                        <button class="btn btn-primary mr-2 mb-3" style="border-radius:25px;" onclick="filterCampaigns('Kesehatan')">Kesehatan</button>
                        <button class="btn btn-primary mr-2 mb-3" style="border-radius:25px;" onclick="filterCampaigns('Pendidikan')">Pendidikan</button>
                        <button class="btn btn-primary mr-2 mb-3" style="border-radius:25px;" onclick="filterCampaigns('BencanaAlam')">Bencana Alam</button>
                    </div>
                </div>
            </div>
        </div>
      	<div class="row grid justify-content-center" id="campaign-container">
            <div id="no-campaign-alert" class="alert alert-info mt-5" style="display: none;">
                Tidak ada kampanye dalam kategori ini.
            </div>
            @foreach ($campaigns as $campaign)
                @if ($campaign->status == 0)
      		    {{-- <div class="col-md-4 ftco-animate filter-item {{ $campaign->category }}"> --}}
      		    <div class="col-md-4 filter-item {{ $campaign->category }}">

                    <div class="cause-entry">
                        <a href="#" class="img" style="background-image: url('{{ $campaign->img_url }}'); z-index: -1;"></a>

                        {{-- <a href="#" class="img" ></a> --}}
                        <div class="text p-3 p-md-4">
                            <h3 style="margin-bottom:4px"><a>{{ $campaign->title }}</a></h3>
                            <p style="margin-bottom:-5px">Pembuat Program:</p>
                            <p>{{ $campaign->user->name }}</p>
                            {{-- <p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p> --}}

                            <p style="margin-bottom:0px; word-wrap:break-word">{{ Str::limit($campaign->desc, 90, '...') }}</p>
                            <a href="/donations/donasi-single/{{ $campaign->id }}">Baca Selengkapnya</a>

                            @php
                                $endDate = \Carbon\Carbon::parse($campaign->dateline);
                                $remainingDays = $endDate->diffInDays(\Carbon\Carbon::now());
                            @endphp
                            <span class="donation-time mb-3 d-block">Sisa : {{ $remainingDays }} hari</span>
                            {{-- <div class="progress custom-progress-success">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 98.5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                            @php
                                $totalDonation = App\Models\Donation::where('campaign_id', $campaign->id)->sum('amount');
                            @endphp
                            <div class="progress custom-progress-success">
                                <div id="progress-bar" class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($totalDonation / $campaign->target_amount) * 100 }}%"></div>
                            </div>
                            <span class="fund-raised d-block text-center" style="padding-bottom:15px; word-wrap:break-word">
                                Rp {{ number_format($totalDonation, 0, ',', '.') }} Terkumpul dari Rp {{ number_format($campaign->target_amount,0,',','.') }}
                            </span>
                            {{-- {{ number_format($attributes['goal'], 0, ',', '.')  --}}
                            {{-- <a href="/donations">Donasi Sekarang</a> --}}
                            <a href="/donations/donasi-single/{{ $campaign->id }}" class="row justify-content-center">
                                <button class="btn btn-primary d-flex" style="border-radius:25px">Donasi Sekarang</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

        </div>
      </div>
    </section>

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

    {{-- <section class="ftco-section" style="padding:50px">
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
    </section> --}}


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

  // js filter kategori
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Panggil fungsi untuk menampilkan kampanye awal saat halaman dimuat
      displayAllCampaigns();
    });

    function displayAllCampaigns() {
      // Ambil semua kampanye yang ada
      var allCampaigns = document.querySelectorAll('.filter-item');

      // Tampilkan semua kampanye
      allCampaigns.forEach(function(campaign) {
        campaign.style.display = 'block';
      });
    }

    function filterCampaigns(category) {
    // Ambil semua kampanye yang ada
    var allCampaigns = document.querySelectorAll('.filter-item');
    var matchingCampaigns = [];

    // Loop melalui kampanye dan terapkan filter
    allCampaigns.forEach(function(campaign) {
        // Periksa apakah kampanye sesuai dengan kategori yang dipilih
        if (category === 'all' || campaign.classList.contains(category)) {
        // Tampilkan kampanye yang sesuai
        campaign.style.display = 'block';
        matchingCampaigns.push(campaign);
        } else {
        // Sembunyikan kampanye yang tidak sesuai
        campaign.style.display = 'none';
        }
    });

    // Periksa apakah ada kampanye yang sesuai
    if (matchingCampaigns.length === 0) {
        // Tampilkan pesan tidak ada kampanye
        document.getElementById('no-campaign-alert').style.display = 'block';
    } else {
        // Sembunyikan pesan tidak ada kampanye
        document.getElementById('no-campaign-alert').style.display = 'none';
    }
  }
  </script>


  // FILTER JUDUL
  <script>
    function filterCampaigns(category) {
    var filterText = document.getElementById('campaign-filter').value.trim().toLowerCase();

    // Ambil semua kampanye yang ada
    var allCampaigns = document.querySelectorAll('.filter-item');

    // Variabel untuk melacak apakah ada kampanye yang sesuai dengan filter
    var isCampaignFound = false;

    // Loop melalui kampanye dan terapkan filter
    allCampaigns.forEach(function(campaign) {
        var campaignTitle = campaign.querySelector('h3 a').innerText.toLowerCase();
        var campaignCategory = campaign.classList.contains(category) || category === 'all';

        // Periksa apakah kampanye sesuai dengan kategori dan judul yang dipilih
        if (campaignCategory && campaignTitle.includes(filterText)) {
        // Tampilkan kampanye yang sesuai
        campaign.style.display = 'block';
        isCampaignFound = true;
        } else {
        // Sembunyikan kampanye yang tidak sesuai
        campaign.style.display = 'none';
        }
    });

    // Periksa apakah ada kampanye yang sesuai dengan filter
    if (!isCampaignFound) {
        alert('Belum ada kampanye dengan kategori ini.');
    }
  }

  </script>

  </body>
</html>
