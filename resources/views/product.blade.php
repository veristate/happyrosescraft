@extends('master')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Product</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Product</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-test">test</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-miniatur">
                    <div class="portfolio-wrap">
                        <img src="assets/img/miniatur/miniatur1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/miniatur/miniatur1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-miniatur">
                    <div class="portfolio-wrap">
                        <img src="assets/img/miniatur/miniatur2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/miniatur/miniatur2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pop">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pop up/pop9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/pop up/pop9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pop">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pop up/pop11.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/pop up/pop11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/birthday/b1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/birthday/b1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/birthday/b4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/birthday/b4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/box pop up/pop2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/box pop up/pop2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/box pop up/pop3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/box pop up/pop3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/decoration/d4.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/decoration/d4.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/decoration/d2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/decoration/d2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/kit/k2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/kit/k2.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/kit/k3.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/kit/k3.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mahar/m2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/mahar/m2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mahar/m5.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/mahar/m5.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/talenan/t7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/talenan/t7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/talenan/t9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/talenan/t9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wedding/w2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wedding/w2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wedding/w5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wedding/w5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wisuda/w11.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wisuda/w11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/wisuda/w10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/wisuda/w10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection