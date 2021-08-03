@extends('master')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="42000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/wedding/w1.jpg)">
                <div class="carousel-container">
                    <div class="container textf">
                        <h2 class="animate__animated animate__fadeInDown" style="color:White;">Welcome to <span>Happyroses_Craft</span></h2>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/birthday/b2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Tempat terbaik, untuk mendapatkan kado yang unik</h2>
                        <p class="animate__animated animate__fadeInUp">Happyroses_Craft berkerja secara profesional untuk memberikan kado terbaik kepada pelanggan.</p>
                        <a href="#portfolio" class="btn-get-started animate__animated animate__fadeInUp scrollto">Our Gallery</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/wisuda/w10.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Harga, Kualitas, dan Servis terbaik</h2>
                        <p class="animate__animated animate__fadeInUp">Dapatkan kado terbaik sekarang juga!</p>
                        <a href="https://www.tokopedia.com/happyrosescraft?utm_source=Android&utm_medium=Share&utm_campaign=Shop%20Share&_branch_match_id=937063532823277024" class="btn-get-started animate__animated animate__fadeInUp scrollto">Order Now</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section class="clients section-bg">
        <div class="container">
            <div class="row d-flex justify-content-between">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://api.whatsapp.com/send?phone=6285743591189&text=Halo,%20Dengan%20Happyroses_craft%20apakah%20sedang%20menerima%20pesanan%20?"><img src="assets/img/icon/whatsapp.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/happyroses_craft/"><img src="assets/img/icon/instagram.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.tokopedia.com/happyrosescraft?utm_source=Android&utm_medium=Share&utm_campaign=Shop%20Share&_branch_match_id=937063532823277024"><img src="assets/img/icon/tokopedia.png" class="img-fluid" alt=""></a>
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Tentang Kami</h2>
                </div>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <img src="assets/img/icon/tes1.jpg" alt="" style="width: 100%">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Mengapa Harus Kami?</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-flower1"></i>
                        <h4><a>Handmade</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-subtract"></i>
                        <h4><a>Quilling Art Pop Up</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-gift"></i>
                        <h4><a>Quilling Art Pop Up Box</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-calendar2-check"></i>
                        <h4><a>Quilling Art Birthday</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-gift"></i>
                        <h4><a>Quilling Art Pop Up Box</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-calendar2-check"></i>
                        <h4><a>Quilling Art Birthday</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Our Gallery</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-Qw">Quilling Wisuda</li>
                        <li data-filter=".filter-Qb">Quilling Birthday</li>
                        <li data-filter=".filter-Qwg">Quilling Wedding-Gift</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qw">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wisuda/w10alt.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wisuda/w10alt.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qw">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wisuda/w7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wisuda/w7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qw">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wisuda/w8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wisuda/w8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qb">
                    <div class="portfolio-wrap">
                        <img src="assets/img/birthday/b1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/birthday/b1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qb">
                    <div class="portfolio-wrap">
                        <img src="assets/img/birthday/b2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/birthday/b2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qb">
                    <div class="portfolio-wrap">
                        <img src="assets/img/birthday/b4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/birthday/b4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qwg">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wedding/w1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wedding/w1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qwg">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wedding/w4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wedding/w4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Qwg">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wedding/w3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wedding/w3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

    </section><!-- End Portfolio Section -->

    
    {{-- <section>
        <div class="container">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-08411418-2752-4b66-b601-aa7260e1ecf5"></div>
        </div>  
    <section> --}}



</main><!-- End #main -->
@endsection