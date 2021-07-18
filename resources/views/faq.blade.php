@extends('master')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>FAQ</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>FAQ</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs -->

<div class="container" style="">
    <div class="container">
        <div class="row" style="margin-top:6vh; font-size:15px; margin-bottom: 100px;">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa itu Quiling Art / Paper Quiling ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div align="justify" class="accordion-body">
                                Paper quilling atau paper filigree, merupakan seni mengubah kertas menjadi beragam bentuk, seperti gulungan lalu menyatukan dengan perekat, yang nantinya akan menghasilkan karya dekoratif.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apa saja karya seni yang bisa dibuat happyroses_craft?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div align="justify" class="accordion-body">
                                <p>Untuk saat ini yang kami melayani jasa pembuatan sebagai berikut :</p>
                                <ul>
                                    <li>1. Wedding Mahar</li>
                                    <li>2. Quiling Wisuda</li>
                                    <li>3. Quiling Wedding Gift</li>
                                    <li>4. Quiling Kit</li>
                                    <li>5. Quiling Decoration</li>
                                    <li>6. Quiling Birth day</li>
                                    <li>7. Wedding Mahar</li>
                                    <li>8. Pop Up Box</li>
                                    <li>9. Pop Up</li>
                                    <li>10. Miniatur</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apakah karya seni yang dipesan dapat di custom?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div align="justify" class="accordion-body">
                                Bisa, dengan cara mengirimkan design / foto lalu melakukan konsultasi melalui kontak kami.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Untuk pengiriman keluar kota apakah aman?
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div align="justify" class="accordion-body">
                                Aman, Karena untuk pengirman keluar kota khusus karya seni yang bersifat fragile kami menggunakan packing kayu
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefour">
                                Berapa lama durasi pembuatan karya seni?
                            </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div align="justify" class="accordion-body">
                                Tergantung dari spesifikasi yang dikirimkan customer dan nantinya kami akan memberikan estimasi waktu pengerjaan, kecuali untuk produk ready stock yang dapat dikirim langsung pada hari kerja jika stok tersedia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapsefour">
                                Apa yang harus dilakukan jika barang rusak dari pengiriman?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div align="justify" class="accordion-body">
                                Jika ada barang rusak di pengiriman maka sebelum membuka harap untuk melakukan unboxing terlebih dahulu sebagai bukti
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection