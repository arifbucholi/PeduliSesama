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

    <link rel="stylesheet" href="assets/css/readmore.css">



  </head>
  <body style="overflow-x:hidden">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">PeduliSesama</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
          <li class="nav-item"><a href="/donasi" class="nav-link">Donasi</a></li>
          @if (Auth::check())
          <li class="nav-item"><a href="/transaksiuser" class="nav-link">Transaksi</a></li>
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

    <div class="hero-wrap" style="background-image: url('assets/images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bantulah mereka yang membutuhkan!!!!</h1>
            <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p> -->

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- BUAT ADMIN  -->
    <!-- <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Served Over</span>
                <strong class="number" data-number="1432805">0</strong>
                <span>Children in 190 countries in the world</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Donasi Sekarang</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Donasi</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Buat Penggalangan Dana</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Buat Sekarang</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section> -->



    <section class="ftco-section bg-light" style="padding:50px">
    	<div class="container-fluid">
            <div class="row justify-content-center" style="padding:20px">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Macam-macam Kasus</h2>
                    <p>Berbagai macam kasus yang terjadi di Indonesia saat ini marilah kita bantu mereka!!</p>
                </div>
            </div>
    		<div class="row">
                <div class="col-md-12 ftco-animate" style="padding:20px">
    				<div class="carousel-cause owl-carousel">
                        {{-- mendadak --}}
                        @php
                        $campaigns = \App\Models\Campaign::orderBy('dateline', 'asc')->limit(10)->get();
                        @endphp



                        @foreach ($campaigns as $campaign )
                        @php
                        $dateline1 = \Carbon\Carbon::parse($campaign->dateline);
                        $remainingDays = $dateline1->diffInDays(\Carbon\Carbon::now());
                        @endphp
                            @if ($campaign->status == 0 && $dateline1 >= \Carbon\Carbon::now())
                            <div class="item">
                                <div class="cause-entry">
                                    <a href="#" class="img" style="background-image: url('{{ $campaign->img_url }}'); z-index: -1;"></a>
		    			    		<div class="text p-3 p-md-4">
		    			    			<h3 style="margin-bottom:-1px"><a href="#">{{ $campaign->title }}</a></h3>
                                            <div style="color:grey; padding-bottom:10px">
                                                <p style="margin-bottom:-5px">Pembuat Program:</p>
                                                <p>{{ $campaign->user->name }}</p>
                                            </div>
                                            <p style="margin-bottom:0px; word-wrap:break-word">{{ Str::limit($campaign->desc, 90, '...') }}</p>
                                            <a href="">Baca Selengkapnya</a>

                                            @php
                                            $endDate = \Carbon\Carbon::parse($campaign->dateline);
                                            $remainingDays = $endDate->diffInDays(\Carbon\Carbon::now());
                                            @endphp
                                            <span class="donation-time mb-3 d-block">Sisa : {{ $remainingDays }} hari</span>
                                            @php
                                                $totalDonation = App\Models\Donation::where('campaign_id', $campaign->id)->sum('amount');
                                            @endphp
                                            <div class="progress custom-progress-success">
                                                <div id="progress-bar" class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($totalDonation / $campaign->target_amount) * 100 }}%"></div>
                                            </div>
		                                <span class="fund-raised d-block">Rp {{ number_format($totalDonation, 0, ',', '.')}} Terkumpul dari Rp{{ number_format($campaign->target_amount, 0, ',', '.') }}</span>

                                        <a href="/donations/donasi-single/{{ $campaign->id }}" class="row justify-content-center" style="padding-top:10px">
                                            <button class="btn btn-primary d-flex" style="border-radius:25px">Donasi Sekarang</button>
                                        </a>
		    			    		</div>
		    			    	</div>

                            </div>
                            @endif
                        @endforeach

    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    {{-- <div class="item">
        <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(assets/images/cause-2.jpg);"></a>
            <div class="text p-3 p-md-4">
                <h3 style="margin-bottom:-1px"><a href="#">Judul Program</a></h3>
                    <div style="color:grey; padding-bottom:10px">
                    <a>- Nama Pemilik Program</a>
                    </div>
                <p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
                <span class="donation-time mb-3 d-block">Sisa hari disini</span>
    <div class="progress custom-progress-success">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <span class="fund-raised d-block">Rp75,000 Terkumpul dari Rp100,000</span>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(assets/images/cause-3.jpg);"></a>
            <div class="text p-3 p-md-4">
                <h3 style="margin-bottom:-1px"><a href="#">Judul Program</a></h3>
                    <div style="color:grey; padding-bottom:10px">
                    <a>- Nama Pemilik Program</a>
                    </div>
                <p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
                <span class="donation-time mb-3 d-block">Sisa hari disini</span>
    <div class="progress custom-progress-success">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <span class="fund-raised d-block">Rp75,000 Terkumpul dari Rp100,000</span>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(assets/images/cause-4.jpg);"></a>
            <div class="text p-3 p-md-4">
                <h3 style="margin-bottom:-1px"><a href="#">Judul Program</a></h3>
                    <div style="color:grey; padding-bottom:10px">
                    <a>- Nama Pemilik Program</a>
                    </div>
                <p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
                <span class="donation-time mb-3 d-block">Sisa hari disini</span>
    <div class="progress custom-progress-success">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <span class="fund-raised d-block">Rp75,000 Terkumpul dari Rp100,000</span>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(assets/images/cause-5.jpg);"></a>
            <div class="text p-3 p-md-4">
                <h3 style="margin-bottom:-1px"><a href="#">Judul Program</a></h3>
                    <div style="color:grey; padding-bottom:10px">
                    <a>- Nama Pemilik Program</a>
                    </div>
                <p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
                <span class="donation-time mb-3 d-block">Sisa hari disini</span>
    <div class="progress custom-progress-success">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <span class="fund-raised d-block">Rp75,000 Terkumpul dari Rp100,000</span>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(assets/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
                <h3 style="margin-bottom:-1px"><a href="#">Judul Program</a></h3>
                    <div style="color:grey; padding-bottom:10px">
                    <a>- Nama Pemilik Program</a>
                    </div>
                <p>Teks tentang program atau deskripsi program ada disini Teks tentang program atau deskripsi program ada disini</p>
                <span class="donation-time mb-3 d-block">Sisa hari disini</span>
    <div class="progress custom-progress-success">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <span class="fund-raised d-block">Rp75,000 Terkumpul dari Rp100,000</span>
            </div>
        </div>
    </div> --}}

    <div class="row justify-content-center" style="padding:20px">
        <div class="col-md-5 heading-section ftco-animate text-center">
          <h1>Banner Disini</h1>
        </div>
      </div>
      <br>
      <!-- BANNER -->
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" style="background-image: url('assets/images/pict1.jpg'); height:450px;" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="background-image: url('assets/images/pict2.jpg'); height:450px;" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="background-image: url('assets/images/pict3.jpg'); height:450px;" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


      </div>
      <br>


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
                        <a href="/donasi" class="btn btn-primary" style="border-radius: 20px">Donasi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    	</div>
    </section>



    <!-- BUAT 5 DONATUR -->
    <!-- <section class="ftco-section" style="padding:50px">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Latest Donations</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(assets/images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(assets/images/person_2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(assets/images/person_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section> -->

    <!-- GAMBAR -->
    <!-- <section class="ftco-gallery">
    	<div class="d-md-flex">
	    	<a href="assets/images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/cause-2.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="assets/images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/cause-3.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/cause-4.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/cause-5.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
    	</div>
    	<div class="d-md-flex">
	    	<a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/cause-6.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/image_3.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/image_1.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(assets/images/image_2.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    </div>
    </section> -->

    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_2.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- BUAT HOME -->
    <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Events</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/event-1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="progress custom-progress-success">
		              <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		            </div>
		            <span class="fund-raised d-block">$12,000 Terkumpul dari $30,000</span>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/event-2.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/event-3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

		<!-- <section class="ftco-section-3 img" style="background-image: url(assets/images/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3">Be a volunteer</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
    		</div>
    		</div>
    	</div>
    </section> -->

    <footer class="ftco-footer ftco-section img" style="padding:50px">
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
        <!-- <div class="row">
          <div class="col-md-12 text-center"> -->

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <!-- </div>
        </div> -->
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


  </body>
</html>
