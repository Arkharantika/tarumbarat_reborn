
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SISTARUM - Sistem Informasi Saluran Irigasi Citarum</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  	<meta name="author" content="https://web.tatonas.co.id/">
	<meta name="description" content="">
	<meta name="keywords" content="Pusat pembuatan peralatan material testing Hidrologi & Klimatologi terbaik di Indonesia. Terakreditasi dari KAN sehingga kualitas tak perlu di ragukan lagi.">
	<meta name="robots" content="all,index,follow">
	<meta http-equiv="Content-Language" content="id-ID">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">
	<link rel="canonical" href="https://web.tatonas.co.id/"/>
	<meta property="og:locale" content="id_ID" />
	<meta property="og:title" content="Tatonas – Good Product Good Service" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="https://web.tatonas.co.id/" />
	<meta property="og:site_name" content="CV Tatonas" />

	<link rel="shortcut icon" href="{{asset('images/pupr.png')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('images/pupr.png')}}" type="image/x-icon">
	<!-- Stylesheets -->
	<link href="{{asset('assetnew/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('assetnew/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/style-custom.css')}}" rel="stylesheet">
	<link href="{{asset('assetnew/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('assetnew/css/color-themes/blue-theme.css')}}" rel="stylesheet" id="theme-color-file">
    <script src="{{asset('assetnew/js/jquery.js')}}"></script>
    <style type="text/css">
        .main-footer .footer-bottom .footer-nav .theme_color{
            color: #00b9e7 !important;
        }
    </style>

</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <style type="text/css">
.sidenav-bar .language {
    position: absolute;
    left: 20px;
    text-align: center;
    color: #ffffff;
    cursor: pointer;
    z-index: 10;
    -webkit-transform: translateY(-50px);
    -moz-transform: translateY(-50px);
    -ms-transform: translateY(-50px);
    -o-transform: translateY(-50px);
    transform: translateY(-50px);
    font-family: "Oswald", sans-serif;
}
.bahasa{
    background-color: rgba(0,0,0,0.20);
    font-size: 18px;
    float: left;
    padding: 5px 10px;
    color: #ffffff;
}
.sidenav-bar .language .active{
    color: #00b9e7;
}
</style>
	<!-- Sidenav Bar -->
    <section class="sidenav-bar">
        <div class="nav-box">
            <div class="inner-box">
                <div class="upper-box">
                    <div class="btn-box">
                        <button class="close-btn"><span class="fa fa-times"></span></button>
                    </div>
                </div>

                <!-- .Side Nav -->
                <nav class="side-nav">
                    <ul class="navigation clearfix" id="nav">
                    	<li class="current"><a href="{{url('/')}}">Home</a></li>
                        <li class=""><a href="{{url('/map')}}">Peta</a></li>
                        <li class=""><a href="{{url('/home')}}">Admin</a></li>
                        <li class="dropdown "><a href="javascript:void(0)">Jaringan Kami</a>
                            <ul>
                                <li><a href="{{url('https://www.jasatirta2.co.id/')}}">PJT II</a></li>
                                <li><a href="{{url('https://sihka.pusair-pu.go.id/')}}">SIHKA</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="{{url('/kontak')}}">Contact</a></li>
                    </ul>
                </nav><!-- /.Side-menu -->

                <div class="contact-info-box">
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon-box"><span class="fa fa-home"></span></div>
                        <p>KANTOR PUSAT PERUM JASA TIRTA II<br>Jl. Lurah Kawi No. 1 Jatiluhur, Kab. Purwakarta, Jawa Barat</p>
                    </div>

                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon-box"><span class="flaticon-call-1"></span></div>
                        <p><a href="tel:62264201972">(0264) 201972</a></p>
                        <p><a href="mailto:pjt2@jasatirta2.co.id">pjt2@jasatirta2.co.id</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Sidenav Bar -->

    <!-- Start Main Content -->
    <main id="content">

        <span class="header-span"></span>

                <!-- Main Header-->
        <header class="main-header header-style-two">
            <div class="outer-container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="{{url('/')}}"><img src="{{asset('images/logo-pupr.png')}}" alt="" title="" style="height: 50px;"></a></div>
                    </div>

                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{url('/')}}">Home</a></li>
                                    <li class=""><a href="{{url('/map')}}">Peta</a></li>
                                    <li class=""><a href="{{url('https://drive.google.com/drive/folders/1ARE7uUyh4Wtf1UfFhx5bD137H65m5l6L')}}">Data - data</a></li>
                                    <li class=""><a href="{{url('/home')}}">Admin</a></li>
                                    <li class="dropdown "><a href="javascript:void(0)">Jaringan Kami</a>
                                        <ul>
                                            <li><a href="{{url('https://www.jasatirta2.co.id/')}}">PJT II</a></li>
                                            <li><a href="{{url('https://sihka.pusair-pu.go.id/')}}">SIHKA</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{url('/kontak')}}">Contact</a></li>
                                </ul>

                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box clearfix">
                            <div class="btn-box no-touch"><button class="nav-toggler"><span></span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header -->

    	<!-- Content -->
        <!-- Banner Section -->
        <section class="banner-section-two">
            <div class="banner-carousel owl-carousel owl-theme">
                <div class="slide-item" style="background-image: url({{asset('images/1.jpg')}});">
                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran Irigasi <span class="theme_color">Citarum</span></h2>
                                <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat</div>
                                <div class="btn-box">
                                    <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span class="btn-title">Lihat Peta</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item" style="background-image: url({{asset('images/2.jpg')}});">
                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran Irigasi <span class="theme_color">Citarum</span></h2>
                                <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat</div>
                                <div class="btn-box">
                                    <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span class="btn-title">Lihat Peta</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item" style="background-image: url({{asset('images/3.jpg')}});">
                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran Irigasi <span class="theme_color">Citarum</span></h2>
                                <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat</div>
                                <div class="btn-box">
                                    <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span class="btn-title">Lihat Peta</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item" style="background-image: url({{asset('images/4.jpg')}});">
                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran Irigasi <span class="theme_color">Citarum</span></h2>
                                <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat</div>
                                <div class="btn-box">
                                    <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span class="btn-title">Lihat Peta</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END Banner Section -->

        <!-- About Us -->
        <section class="about-us">
            <div class="auto-container">
                <div class="sec-title light">
                    <span class="float-text">About</span>
                    <h2>About <span>SISTARUM</span></h2>
                </div>
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- <div class="about-years">
                            	<h3>Sistem Informasi Terpadu untuk Monitoring Hidrologi Saluran Irigasi Tarum Barat</h3></div> -->
                            <div class="text-box">
                                <p>SISTARUM (Sistem Informasi Saluran Irigasi Citarum) merupakan Sistem Informasi Terpadu yang inovatif untuk memantau secara efisien kondisi hidrologi pada Saluran Irigasi Citarum</p>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-worldwide"></span></div>
                                    <h4>Peta Monitoring</h4>
                                    <div class="text">Peta Monitoring yang informatif, dilengkapi dengan data posisi yang terperinci pada setiap koordinat titik lokasi.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-play-button-4"></span></div>
                                    <h4>Pantuan CCTV</h4>
                                    <div class="text">Dilengkapi dengan pemantauan CCTV 24 jam yang Terintegrasi dalam Sistem Telemetri.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-bar-chart"></span></div>
                                    <h4>Grafik Statistik</h4>
                                    <div class="text">Tampilkan hasil pemantauan sensor dalam bentuk grafik yang informatif dan mudah dipahami.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-file"></span></div>
                                    <h4>Download Data</h4>
                                    <div class="text">Unduh Data Telemetri dalam format Excel / PDF untuk memudahkan Anda dalam mengolah data.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="single-item-carousel owl-carousel owl-theme">
                            	<div class="slide-item">
                                    <figure class="image"><a href="{{asset('images/about-us-5.png')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('images/about-us-5.png')}}" alt=""></a></figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="image"><a href="{{asset('images/about-us-1.png')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('images/about-us-1.png')}}" alt=""></a></figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="image"><a href="{{asset('images/about-us-2.png')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('images/about-us-2.png')}}" alt=""></a></figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="image"><a href="{{asset('images/about-us-3.png')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('images/about-us-3.png')}}" alt=""></a></figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="image"><a href="{{asset('images/about-us-4.png')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('images/about-us-4.png')}}" alt=""></a></figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="image"><a href="{{asset('images/about-us-6.png')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('images/about-us-6.png')}}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End About Us -->

        <!-- Services Section -->
        <section class="services-section pt-0">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Information</span>
                    <h2>Status <span>Kendali Mutu</span></h2>
                </div>

                <div class="carousel-outer">
                    <!-- Services Carousel -->
                    <div class="services-carousel owl-carousel owl-theme fact-counter" id="kategori">
                        <div class="service-block">
                            <div class="inner-box">
                                <img src="{{asset('images/cctv-icon.png')}}" style="width: 70px; margin:auto;" class="icon pb-4">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="6">0</span>
                                </div>
                                <h3>Total CCTV Aktif</h3>
                            </div>
                        </div>
                        <div class="service-block">
                            <div class="inner-box">
                                <img src="{{asset('images/telemetry-icon.png')}}" style="width: 70px; margin:auto;" class="icon pb-4">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="22">0</span>
                                </div>
                                <h3>Total Pos Telemetry</h3>
                            </div>
                        </div>
                        <div class="service-block">
                            <div class="inner-box">
                                <img src="{{asset('images/telemetry-icon.png')}}" style="width: 70px; margin:auto;" class="icon pb-4">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="5">0</span>
                                </div>
                                <h3>Total Pos Non-Telemetry</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <center><a href="{{url('http://kendalimutudata.pusair-pu.go.id:81')}}" class="theme-btn btn-style-one" style="border: 1px solid #00b9e7;" target="_blank"><span class="btn-title">Lihat Selengkapnya <i class="fas fa-angle-double-right"></i></span></a></center>
            </div>
        </section>
        <!-- End service Section -->







        <section class="about-section section-padding p-0" style="background: #252525;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="video-block">
                        <img src="{{asset('images/monitoring-cctv.jpeg')}}" alt="" class="img-fluid" id="clickableImage" style="cursor: pointer;" >
                    </div>
                </div>

                <div class="col-xl-6 pl-5 col-lg-6">
                    <div class="features-section mt-4 mt-lg-0 ">
                        <div class="sec-title active">
                            <h3 class="font-weight-bold text-white">Monitoring CCTV <span style="color:#00b9e7">24 jam</span></h3>
                        </div>
                        <div class="text-column">
                            <p>Deteksi dini adanya kenaikan atau penurunan status debit air via gambar visual maupun live streaming </p>
                            <ul class="list-style-one">
                                <li>Gambar dengan High Quality</li>
                                <li>Diperkuat dengan daya ramah lingkungan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section section-padding p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pl-5 col-lg-6">
                	<div class="features-section mt-lg-0 ">
                        <div class="sec-title active">
                            <h3 class="font-weight-bold text-white">Management <span style="color:#00b9e7">Data Pos</span></h3>
                        </div>
                        <div class="text-column">
                            <p>Disertai fitur untuk management data untuk pos hidrologi disertai dengan tampilan admin yang menarik</p>
                            <ul class="list-style-one">
                                <li>Desain Responsive</li>
                                <li>Fitur Management Data</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <img src="{{asset('images/managementpos.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="about-section section-padding p-0"  style="background: #252525;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <!-- <div class="video-block"> -->
                    <img src="{{asset('images/neracaair.png')}}" alt="" class="img-fluid">
                    <!-- <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->
                    <!-- </div> -->
                </div>
                <div class="col-xl-6 pl-5 col-lg-6">
                	<div class="features-section mt-lg-0 ">
                        <div class="sec-title active">
                            <h3 class="font-weight-bold text-white"><span style="color:#00b9e7">Neraca</span> Air</h3>
                        </div>
                        <div class="text-column">
                            <p>Sistem ini juga memilki fitur untuk melihat data neraca air</p>
                            <ul class="list-style-one">
                                <li>Desain Responsive</li>
                                <li>Fitur Management Data</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pl-5 col-lg-6">
                	<div class="features-section mt-lg-0 ">
                        <div class="sec-title active">
                            <h3 class="font-weight-bold text-white"><span style="color:#00b9e7">Visit</span> Lokasi</h3>
                        </div>
                        <div class="text-column">
                            <p>Pihak PJT II maupun dari dinas, melakukan cek fisik secara berkala terhadap pos - pos yg terpasang</p>
                            <ul class="list-style-one">
                                <li>Pemeriksaan Rutin</li>
                                <li>Maintenance Terjadwal</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <img src="{{asset('images/cekair2.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

<!-- <style type="text/css">
.feature-items .feature-item.active{background-image:linear-gradient(-135deg,rgba(72,110,240,0.15) 0%,rgba(60,166,249,0.05) 100%)!important}
.feature-group{position:relative}.feature-group::before{content:"";width:2px;position:absolute;top:88px;bottom:-24px;left:23px;background-color:#bfc4ca;z-index:1}.feature-description{position:relative;z-index:1}@media(min-width:768px){.feature-description{position:sticky;top:80px}}.feature-description h3{display:flex;align-items:center;padding:2rem 0 8px;background:#fff;font-size:1.5rem}@media(min-width:768px){.feature-description h3{font-size:2.5rem}}.feature-icon{width:48px;height:48px;background:rgba(45,102,229,.1);border-radius:8px;font-size:24px;color:#2d66e5;display:flex;align-items:center;justify-content:center;margin-right:1rem;flex-shrink:0}.feature-items{padding:1rem 0 1rem 64px}.feature-items .feature-item{border:none;border-radius:16px;margin-bottom:8px;transition:height .35s ease;margin-left:-1.25rem}.feature-items .feature-item::before{content:"";position:absolute;top:16px;left:-28px;width:16px;height:16px;border-radius:8px;border:2px solid #bfc4ca;background:#fff}.feature-items .feature-item.active::before{border-color:#2d66e5}.feature-items .feature-item,.feature-items .feature-item.active{background:0 0;color:#495464}.feature-items .feature-item h4,.feature-items .feature-item.active h4{color:#000015}@media(min-width:768px){.feature-items .feature-item>div{height:0;opacity:0;transition:none}.feature-items .feature-item.active h4{color:#2d66e5}.feature-items .feature-item.active>div{height:auto;opacity:1;transition:opacity .35s ease}}.feature-item-preview{display:none}@media(min-width:768px){.feature-item-preview{display:block;scroll-snap-align:start;scroll-snap-stop:always;opacity:.1;transition:opacity .35s ease}.feature-item-preview.visible{opacity:1}}.feature-item-preview-mobile{margin:0 0 2rem -1rem;position:relative;z-index:1}@media(min-width:768px){.feature-item-preview-mobile{display:none}}.features-menu{position:fixed;bottom:0;transform:translate(-16px,-32px);z-index:1000;padding:30px 15px;margin-bottom:env(safe-area-inset-bottom)}@media(min-width:768px){.features-menu{transform:translate(-16px,0)}}.features-menu>div{width:48px;border-radius:24px;box-shadow:0 8px 8px rgba(0,0,0,.1);background:#fff}.features-menu>div>a{padding:8px;text-align:center;border:none!important;color:#99a0a9}.features-menu>div>a.active{background:rgba(45,102,229,.1);color:#2d66e5}
</style>
        <section id="features">
			<h2 class="d-none">Fitur</h2>
				<div class="container py-5">
					<div class="feature-groups">
						<div class="feature-group" id="feature-website">
							<div class="row">
								<div class="col-md">
									<div class="feature-description">
										<h3>
											<div class="feature-icon">
												<i class="fa fa-desktop fa-fw"></i>
											</div>
											<div>Features</div>
										</h3>
										<div id="feature-website" class="list-group feature-items">
											<a href="#feature-website-themes" class="feature-item list-group-item list-group-item-action">
												<h4 class="h5 m-0">Berbagai Pilihan Tema</h4>
												<div class="mt-2">Tidak perlu bingung dengan desainnya. Kami menyediakan puluhan tema terbaik yang dapat kamu pilih secara langsung.</div>
											</a>
											<div class="feature-item-preview-mobile d-md-none">
												<picture>
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-themes.webp" type="image/webp">
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-themes@2x.webp 2x" type="image/webp">
													<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-themes.png" alt="Berbagai Pilihan Tema" loading="lazy" class="img-fluid" width="600" height="600">
												</picture>
											</div>
											<a href="#feature-website-info" class="feature-item list-group-item list-group-item-action">
												<h4 class="h5 m-0">Informasi Lengkap</h4>
												<div class="mt-2">Bagikan website dengan informasi yang lengkap mulai dari informasi acara, peta, countdown, galeri, dan sebagainya.</div>
											</a>
											<div class="feature-item-preview-mobile d-md-none">
												<picture>
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-info.webp" type="image/webp">
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-info@2x.webp 2x" type="image/webp">
													<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-info.png" alt="Informasi Lengkap" loading="lazy" class="img-fluid" width="600" height="600">
												</picture>
											</div>
											<a href="#feature-website-music" class="feature-item list-group-item list-group-item-action">
												<h4 class="h5 m-0">Background Music</h4>
												<div class="mt-2">Beri sentuhan merdu dengan memutar musik secara otomatis. Kamu dapat memilih dari ribuan daftar lagu yang ada.</div>
											</a>
											<div class="feature-item-preview-mobile d-md-none">
												<picture>
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-music.webp" type="image/webp">
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-music@2x.webp 2x" type="image/webp">
													<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-music.png" alt="Background Music" loading="lazy" class="img-fluid" width="600" height="600">
												</picture>
											</div>
											<a href="#feature-website-domain" class="feature-item list-group-item list-group-item-action">
												<h4 class="h5 m-0">Custom Domain</h4>
												<div class="mt-2">Ingin yang lebih unik? Kamu bisa memiliki website dengan domain sendiri seperti namapasangan.com.</div>
											</a>
											<div class="feature-item-preview-mobile d-md-none">
												<picture>
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-domain.webp" type="image/webp">
													<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-domain@2x.webp 2x" type="image/webp">
													<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-domain.png" alt="Custom Domain" loading="lazy" class="img-fluid" width="600" height="600">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md feature-preview position-relative">
									<div id="feature-website-themes" class="feature-item-preview">
										<picture>
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-themes.webp" type="image/webp">
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-themes@2x.webp 2x" type="image/webp">
											<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-themes.png" alt="Berbagai Pilihan Tema" loading="lazy" class="img-fluid" width="600" height="600">
										</picture>
									</div>
									<div id="feature-website-info" class="feature-item-preview">
										<picture>
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-info.webp" type="image/webp">
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-info@2x.webp 2x" type="image/webp">
											<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-info.png" alt="Informasi Lengkap" loading="lazy" class="img-fluid" width="600" height="600">
										</picture>
									</div>
									<div id="feature-website-music" class="feature-item-preview">
										<picture>
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-music.webp" type="image/webp">
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-music@2x.webp 2x" type="image/webp">
											<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-music.png" alt="Background Music" loading="lazy" class="img-fluid" width="600" height="600">
										</picture>
									</div>
									<div id="feature-website-domain" class="feature-item-preview">
										<picture>
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-domain.webp" type="image/webp">
											<source srcset="https://wedew.id/themes/wedew-public/assets/images/features/website-domain@2x.webp 2x" type="image/webp">
											<img src="https://wedew.id/themes/wedew-public/assets/images/features/website-domain.png" alt="Custom Domain" loading="lazy" class="img-fluid" width="600" height="600">
										</picture>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->












        <!-- Contact Info Section -->
        <section class="contact-info-section" style="background-image: url(https://web.tatonas.co.id/asset/images/jasa-kalibrasi.png);">
            <div class="auto-container">
                <div class="content">
                    <h2>Dapatkan <span style="color:#00b9e7">Update Terkini</span> Saluran Irigasi Citarum</h2>
                    <p class="text mb-3">Peroleh Informasi Terkini Saluran Irigasi Citarum secara Realtime, langsung dari Genggaman Anda!</p>
                    <a href="{{url('/map')}}" class="theme-btn btn-style-one" style="border: 1px solid #00b9e7;"><span class="btn-title">Lihat Peta Sekarang <i class="fas fa-angle-double-right"></i></span></a>
                </div>
            </div>
        </section>
        <!--End Contact Info Section -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="logo">
                                            <a href="{{url('/')}}"><img src="{{asset('images/logo-pupr.png')}}" alt=""/></a>
                                        </div>
                                        <div class="text">
                                            <!-- <p>SISTARUM menampilkan pos duga air, baik pos manual/otomatis maupun pos telemetri. Dilengkapi dengan informasi detail pos berupa koordinat, alamat, dan foto pos.</p> -->
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2071976574357!2d106.8008284!3d-6.236397599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1422f877725%3A0x906e4d2b1bccd65!2sJl.%20Pattimura%20No.20%2C%20RT.2%2FRW.1%2C%20Selong%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012110!5e0!3m2!1sen!2sid!4v1700053005678!5m2!1sen!2sid" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget recent-posts">
                                        <h2 class="widget-title">Instansi Terkait</h2>
                                         <!--Footer Column-->
                                        <div class="row">
                                        	<div class="col-12 pb-3">
                                                <img src="{{asset('images/logo-jasa-tirta2.png')}}" width="100%">
                                            </div>
                                            <div class="col-12 pb-3">
                                                <img src="{{asset('images/logo-citarum.png')}}" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget useful-links">
                                        <h2 class="widget-title">Menu</h2>
                                        <ul class="user-links">
                                            <li><a href="{{url('/')}}">Beranda</a></li>
                                            <li><a href="{{url('/map')}}">Peta</a></li>
                                            <li><a href="{{url('/home')}}">Admin</a></li>
                                            <li><a href="{{url('/kontak')}}">Hubungi Kami</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget contact-widget">
                                        <h2 class="widget-title">Contact Us</h2>
                                         <!--Footer Column-->
                                        <div class="widget-content">
                                            <ul class="contact-list">
                                            	<li>
                                                    <span class="icon flaticon-maps-and-flags"></span>
                                                    <div class="text"><a href="https://maps.app.goo.gl/E1uh3F4HyKQF2oYP9" target="_blank" rel="nofollow"><b>Gedung Ditjen SDA</b><br>JL. Pattimura 20, Kebayoran Baru, Jakarta - Indonesia - 12110</a></div>
                                                </li>
                                                <!-- <li>
                                                    <span class="icon flaticon-call-1"></span>
                                                    <div class="text"><a href="tel:62264201972">(0264) 201972</a></div>
                                                </li>
                                                <li>
                                                    <span class="icon flaticon-email"></span>
                                                    <div class="text"><a href="mailto:pjt2@jasatirta2.co.id">pjt2@jasatirta2.co.id</a></div>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="copyright-text">
                            <p>© Copyright 2023 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </main>
    <!-- End Main Content -->
</div>


<script src="{{asset('assetnew/js/popper.min.js')}}"></script>
<script src="{{asset('assetnew/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assetnew/js/owl.js')}}"></script>
<script src="{{asset('assetnew/js/wow.js')}}"></script>
<script src="{{asset('assetnew/js/appear.js')}}"></script>
<script src="{{asset('assetnew/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assetnew/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assetnew/js/mixitup.js')}}"></script>
<script src="{{asset('assetnew/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assetnew/js/validate.js')}}"></script>
<script src="{{asset('assetnew/js/swiper.min.js')}}"></script>
<script src="{{asset('assetnew/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assetnew/js/script.js?v=21')}}"></script>
<script>
    $(function() {
        $('body').scrollspy({ target: '.feature-items', offset: 240 })
        $(window).scrollspy({ target: '.features-menu', offset: 240 })
        $(window).on('activate.bs.scrollspy', function (e,data) {
            if ($(data.relatedTarget).hasClass('feature-item-preview')) {
                $('.feature-item-preview').removeClass('visible');
                $(data.relatedTarget).addClass('visible');
            }
        })

        var featuresMenuVisible = false;

        const observer = new IntersectionObserver(function(entries) {
            console.log(entries);
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !featuresMenuVisible) {
                    $('.features-menu').fadeIn();
                    featuresMenuVisible = true;
                }
    
                if (!entry.isIntersecting && featuresMenuVisible) {
                    $('.features-menu').fadeOut()
                    featuresMenuVisible = false;
                }
            })
        }, {
            threshold: 0.05,
        });

        observer.observe($('#features')[0]);

        const root = document.documentElement;
        const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");

        $('.marquee-content').each(function(i, marqueeContent) {   
            for (let i=0; i<marqueeElementsDisplayed; i++) {
                marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
            }
        });
    });
    var image = document.getElementById("clickableImage");

        // Add a click event listener to the image
        image.addEventListener("click", function() {
            // Redirect to the desired URL when the image is clicked
            // window.location.href = "http://103.149.208.46/akentang/player-min.html";
            window.location.href = "http://103.184.52.96/";
        });



/*!
* Bootstrap scrollspy.js v4.5.0 (https://getbootstrap.com/)
* Copyright 2011-2020 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
* Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
*//*(function(global,factory){typeof exports==='object'&&typeof module!=='undefined'?module.exports=factory(require('jquery'),require('./util.js')):typeof define==='function'&&define.amd?define(['jquery','./util.js'],factory):(global=global||self,global.ScrollSpy=factory(global.jQuery,global.Util));}(this,(function($,Util){'use strict';$=$&&Object.prototype.hasOwnProperty.call($,'default')?$['default']:$;Util=Util&&Object.prototype.hasOwnProperty.call(Util,'default')?Util['default']:Util;function _defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||false;descriptor.configurable=true;if("value"in descriptor)descriptor.writable=true;Object.defineProperty(target,descriptor.key,descriptor);}}
function _createClass(Constructor,protoProps,staticProps){if(protoProps)_defineProperties(Constructor.prototype,protoProps);if(staticProps)_defineProperties(Constructor,staticProps);return Constructor;}
function _defineProperty(obj,key,value){if(key in obj){Object.defineProperty(obj,key,{value:value,enumerable:true,configurable:true,writable:true});}else{obj[key]=value;}
return obj;}
function ownKeys(object,enumerableOnly){var keys=Object.keys(object);if(Object.getOwnPropertySymbols){var symbols=Object.getOwnPropertySymbols(object);if(enumerableOnly)symbols=symbols.filter(function(sym){return Object.getOwnPropertyDescriptor(object,sym).enumerable;});keys.push.apply(keys,symbols);}
return keys;}
function _objectSpread2(target){for(var i=1;i<arguments.length;i++){var source=arguments[i]!=null?arguments[i]:{};if(i%2){ownKeys(Object(source),true).forEach(function(key){_defineProperty(target,key,source[key]);});}else if(Object.getOwnPropertyDescriptors){Object.defineProperties(target,Object.getOwnPropertyDescriptors(source));}else{ownKeys(Object(source)).forEach(function(key){Object.defineProperty(target,key,Object.getOwnPropertyDescriptor(source,key));});}}
return target;}
var NAME='scrollspy';var VERSION='4.5.0';var DATA_KEY='bs.scrollspy';var EVENT_KEY="."+DATA_KEY;var DATA_API_KEY='.data-api';var JQUERY_NO_CONFLICT=$.fn[NAME];var Default={offset:10,method:'auto',target:''};var DefaultType={offset:'number',method:'string',target:'(string|element)'};var EVENT_ACTIVATE="activate"+EVENT_KEY;var EVENT_SCROLL="scroll"+EVENT_KEY;var EVENT_LOAD_DATA_API="load"+EVENT_KEY+DATA_API_KEY;var CLASS_NAME_DROPDOWN_ITEM='dropdown-item';var CLASS_NAME_ACTIVE='active';var SELECTOR_DATA_SPY='[data-spy="scroll"]';var SELECTOR_NAV_LIST_GROUP='.nav, .list-group';var SELECTOR_NAV_LINKS='.nav-link';var SELECTOR_NAV_ITEMS='.nav-item';var SELECTOR_LIST_ITEMS='.list-group-item';var SELECTOR_DROPDOWN='.dropdown';var SELECTOR_DROPDOWN_ITEMS='.dropdown-item';var SELECTOR_DROPDOWN_TOGGLE='.dropdown-toggle';var METHOD_OFFSET='offset';var METHOD_POSITION='position';var ScrollSpy=function(){function ScrollSpy(element,config){var _this=this;this._element=element;this._scrollElement=element.tagName==='BODY'?window:element;this._config=this._getConfig(config);this._selector=this._config.target+" "+SELECTOR_NAV_LINKS+","+(this._config.target+" "+SELECTOR_LIST_ITEMS+",")+(this._config.target+" "+SELECTOR_DROPDOWN_ITEMS);this._offsets=[];this._targets=[];this._activeTarget=null;this._scrollHeight=0;$(this._scrollElement).on(EVENT_SCROLL,function(event){return _this._process(event);});this.refresh();this._process();}
var _proto=ScrollSpy.prototype;_proto.refresh=function refresh(){var _this2=this;var autoMethod=this._scrollElement===this._scrollElement.window?METHOD_OFFSET:METHOD_POSITION;var offsetMethod=this._config.method==='auto'?autoMethod:this._config.method;var offsetBase=offsetMethod===METHOD_POSITION?this._getScrollTop():0;this._offsets=[];this._targets=[];this._scrollHeight=this._getScrollHeight();var targets=[].slice.call(document.querySelectorAll(this._selector));targets.map(function(element){var target;*/
	/*var targetSelector=Util.getSelectorFromElement(element);
	var targetSelector="";
	if(targetSelector){target=document.querySelector(targetSelector);}
if(target){var targetBCR=target.getBoundingClientRect();if(targetBCR.width||targetBCR.height){return[$(target)[offsetMethod]().top+offsetBase,targetSelector];}}*/
/*return null;}).filter(function(item){return item;}).sort(function(a,b){return a[0]-b[0];}).forEach(function(item){_this2._offsets.push(item[0]);_this2._targets.push(item[1]);});};_proto.dispose=function dispose(){$.removeData(this._element,DATA_KEY);$(this._scrollElement).off(EVENT_KEY);this._element=null;this._scrollElement=null;this._config=null;this._selector=null;this._offsets=null;this._targets=null;this._activeTarget=null;this._scrollHeight=null;};_proto._getConfig=function _getConfig(config){config=_objectSpread2(_objectSpread2({},Default),typeof config==='object'&&config?config:{});
if(typeof config.target!=='string'&&Util.isElement(config.target)){var id=$(config.target).attr('id');if(!id){id=Util.getUID(NAME);$(config.target).attr('id',id);}
config.target="#"+id;}*/
/*Util.typeCheckConfig(NAME,config,DefaultType);*/
    /*return config;};_proto._getScrollTop=function _getScrollTop(){return this._scrollElement===window?this._scrollElement.pageYOffset:this._scrollElement.scrollTop;};_proto._getScrollHeight=function _getScrollHeight(){return this._scrollElement.scrollHeight||Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);};_proto._getOffsetHeight=function _getOffsetHeight(){return this._scrollElement===window?window.innerHeight:this._scrollElement.getBoundingClientRect().height;};_proto._process=function _process(){var scrollTop=this._getScrollTop()+this._config.offset;var scrollHeight=this._getScrollHeight();var maxScroll=this._config.offset+scrollHeight-this._getOffsetHeight();if(this._scrollHeight!==scrollHeight){this.refresh();}
if(scrollTop>=maxScroll){var target=this._targets[this._targets.length-1];if(this._activeTarget!==target){this._activate(target);}
return;}
if(this._activeTarget&&scrollTop<this._offsets[0]&&this._offsets[0]>0){this._activeTarget=null;this._clear();return;}
for(var i=this._offsets.length;i--;){var isActiveTarget=this._activeTarget!==this._targets[i]&&scrollTop>=this._offsets[i]&&(typeof this._offsets[i+1]==='undefined'||scrollTop<this._offsets[i+1]);if(isActiveTarget){this._activate(this._targets[i]);}}};_proto._activate=function _activate(target){this._activeTarget=target;this._clear();var queries=this._selector.split(',').map(function(selector){return selector+"[data-target=\""+target+"\"],"+selector+"[href=\""+target+"\"]";});var $link=$([].slice.call(document.querySelectorAll(queries.join(','))));if($link.hasClass(CLASS_NAME_DROPDOWN_ITEM)){$link.closest(SELECTOR_DROPDOWN).find(SELECTOR_DROPDOWN_TOGGLE).addClass(CLASS_NAME_ACTIVE);$link.addClass(CLASS_NAME_ACTIVE);}else{$link.addClass(CLASS_NAME_ACTIVE);$link.parents(SELECTOR_NAV_LIST_GROUP).prev(SELECTOR_NAV_LINKS+", "+SELECTOR_LIST_ITEMS).addClass(CLASS_NAME_ACTIVE);$link.parents(SELECTOR_NAV_LIST_GROUP).prev(SELECTOR_NAV_ITEMS).children(SELECTOR_NAV_LINKS).addClass(CLASS_NAME_ACTIVE);}
$(this._scrollElement).trigger(EVENT_ACTIVATE,{relatedTarget:target});};_proto._clear=function _clear(){[].slice.call(document.querySelectorAll(this._selector)).filter(function(node){return node.classList.contains(CLASS_NAME_ACTIVE);}).forEach(function(node){return node.classList.remove(CLASS_NAME_ACTIVE);});};ScrollSpy._jQueryInterface=function _jQueryInterface(config){return this.each(function(){var data=$(this).data(DATA_KEY);var _config=typeof config==='object'&&config;if(!data){data=new ScrollSpy(this,_config);$(this).data(DATA_KEY,data);}
if(typeof config==='string'){if(typeof data[config]==='undefined'){throw new TypeError("No method named \""+config+"\"");}
data[config]();}});};_createClass(ScrollSpy,null,[{key:"VERSION",get:function get(){return VERSION;}},{key:"Default",get:function get(){return Default;}}]);return ScrollSpy;}();$(window).on(EVENT_LOAD_DATA_API,function(){var scrollSpys=[].slice.call(document.querySelectorAll(SELECTOR_DATA_SPY));var scrollSpysLength=scrollSpys.length;for(var i=scrollSpysLength;i--;){var $spy=$(scrollSpys[i]);ScrollSpy._jQueryInterface.call($spy,$spy.data());}});$.fn[NAME]=ScrollSpy._jQueryInterface;$.fn[NAME].Constructor=ScrollSpy;$.fn[NAME].noConflict=function(){$.fn[NAME]=JQUERY_NO_CONFLICT;return ScrollSpy._jQueryInterface;};return ScrollSpy;})));*/
</script>
</body>
</html>
