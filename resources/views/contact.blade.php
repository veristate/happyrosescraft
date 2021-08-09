@extends('master')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=arjasari&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="row">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat Toko:</h4>
                                <p>Arjasari, Kab. Bandung, 40379</p>
                            </div>
<!--
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                -->
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Kontak:</h4>
                                <p>+6285743591189</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection