@extends('layouts.app')

@section('title')
    Home
@endsection

@push('css')
    <style>
        .carousel-caption {
            /* not to display caption at its current position */
            display: none !important;
        }
    </style>
    <script>
        //put carousel caption to new position which is at #newTextPosition
        jQuery(document).ready(function() {

            //by default show the first slide description
            let html = jQuery('#caption-0').html();
            jQuery('#newTextPosition').html(html);

            jQuery("#carouselExampleIndicators").on('slide.bs.carousel', function(evt) {

                //step - current slide e.g 0, 1, 2
                let step = jQuery(evt.relatedTarget).index();
                html = jQuery('#caption-' + step).html();
                jQuery('#newTextPosition').html(html);

            });

        });
    </script>
@endpush

@section('content')
    <section>
        <!-- Heroes -->
        <div class="container py-5">
            <!-- Biaya -->
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="kanit text-center mb-3">Hitung Estimasi Biayamu!</h1>
                        <form method="POST" action="/">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="name">Nama</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" placeholder="Nama Anda" autocomplete="name"
                                            autofocus required>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="phone">No. Whatsapp</label>
                                        <input id="phone" type="tel"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" placeholder="Nomor Anda" autocomplete="phone"
                                            required>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="status">Status</label>
                                        <select class="form-control @error('status') is-invalid @enderror" id="status"
                                            name="status" aria-label="status">
                                            <option disabled>Pilih</option>
                                            <option value="Discussion"
                                                {{ old('status') == 'Discussion' ? 'selected' : '' }}>
                                                Rumah</option>
                                            <option value="Planning" {{ old('status') == 'Planning' ? 'selected' : '' }}>
                                                Kitchen Set</option>
                                            <option value="On Going" {{ old('status') == 'On Going' ? 'selected' : '' }}>On
                                                Lemari</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-sikku-main kanit px-5">
                                    Cek Harga
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category -->
        <div class="sikku-primary">
            <div class="container py-5">
                <h2 class="kanit text-center">Desain Interior Sesuai Ruangan</h2>
                <h5 class="text-center mt-3 mb-4">Koleksi inspirasi desain interior Japandi oleh tim Dekoruma. Desain
                    estetik,
                    kualitas
                    material terbaik.</h5>
                <div class="row g-4">
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img class="card-img-top" src="{{ asset('assets/img/dummy/4x3.png') }}" alt="Dummy">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title kanit">Kitchen Set</h4>
                                <p class="card-text">Desain dapur modern dengan kualitas premium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img class="card-img-top" src="{{ asset('assets/img/dummy/4x3.png') }}" alt="Dummy">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title kanit">Rumah</h4>
                                <p class="card-text">Desain dapur modern dengan kualitas premium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img class="card-img-top" src="{{ asset('assets/img/dummy/4x3.png') }}" alt="Dummy">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title kanit">Apartemen</h4>
                                <p class="card-text">Desain dapur modern dengan kualitas premium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img class="card-img-top" src="{{ asset('assets/img/dummy/4x3.png') }}" alt="Dummy">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title kanit">Lemari Custom</h4>
                                <p class="card-text">Desain dapur modern dengan kualitas premium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img class="card-img-top" src="{{ asset('assets/img/dummy/4x3.png') }}" alt="Dummy">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title kanit">Kantor</h4>
                                <p class="card-text">Desain dapur modern dengan kualitas premium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img class="card-img-top" src="{{ asset('assets/img/dummy/4x3.png') }}" alt="Dummy">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title kanit">Hotel</h4>
                                <p class="card-text">Desain dapur modern dengan kualitas premium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mengapa Memilih -->
        <div class="container text-center my-5">
            <h1 class="kanit" style="font-weight: 500">Mengapa memilih Sikku?</h1>
            <div class="row my-4">
                <div class="col-4">
                    <div class="card p-3">
                        <div class="row align-items-start">
                            <div class="col-12 col-md-2 text-center">
                                <img src="{{ asset('assets/img/vector/icon/03.png') }}" alt="gratis_konsultasi"
                                    height="50">
                            </div>
                            <div class="col-md-10 text-start d-none d-md-block">
                                <h5 class="kanit"><b>Gratis Konsultasi</b></h5>
                                <small>Jaminan barang berkualitas bikin tenang & nyaman</small>
                            </div>
                            <div class="col-12 text-center hidden-md-and-up">
                                <h6 class="kanit mt-2"><b>Gratis Konsultasi</b></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-3">
                        <div class="row align-items-start">
                            <div class="col-12 col-md-2 text-center">
                                <img src="{{ asset('assets/img/vector/icon/02.png') }}" alt="budget" height="50">
                            </div>
                            <div class="col-md-10 text-start d-none d-md-block">
                                <h5 class="kanit"><b>Budget Fleksibel</b></h5>
                                <small>Jaminan barang berkualitas bikin tenang & nyaman</small>
                            </div>
                            <div class="col-12 text-center hidden-md-and-up">
                                <h6 class="kanit mt-2"><b>Budget Fleksibel</b></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-3">
                        <div class="row align-items-start">
                            <div class="col-12 col-md-2 text-center">
                                <img src="{{ asset('assets/img/vector/icon/01.png') }}" alt="garansi" height="50">
                            </div>
                            <div class="col-md-10 text-start d-none d-md-block">
                                <h5 class="kanit"><b>Garansi 2 Tahun</b></h5>
                                <small>Jaminan barang berkualitas bikin tenang & nyaman</small>
                            </div>
                            <div class="col-12 text-center hidden-md-and-up">
                                <h6 class="kanit mt-2"><b>Garansi 2 Tahun</b></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cara Kerja -->
            <h1 class="kanit" style="font-weight: 500">5 Langkah Menuju Interior Impianmu</h1>

            <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <!-- Registrasi -->
                    <div class="carousel-item active" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/01.png') }}" class="d-block w-50 mx-auto"
                                alt="Registrasi">
                            <div id="caption-0" class="carousel-caption d-none d-md-block">
                                <h3 class="kanit mb-4" style="font-weight: 500 ">Registrasi dan Konsultasi</h3>
                                <h5>Ada 3 opsi, yaitu konsultasi online, kunjungan langsung ke rumahmu, dan konsultasi di
                                    Sikku Experience Center.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/02.png') }}" class="d-block w-50 mx-auto"
                                alt="Registrasi">
                            <div id="caption-1" class="carousel-caption d-none d-md-block">
                                <h3 class="kanit mb-4" style="font-weight: 500 ">Design</h3>
                                <h5>Setelah pembayaran Booking Fee, desainer kami akan mendesain hunian impianmu sesuai
                                    kebutuhan dan keinginanmu.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/03.png') }}" class="d-block w-50 mx-auto"
                                alt="Registrasi">
                            <div id="caption-2" class="carousel-caption d-none d-md-block">
                                <h3 class="kanit mb-4" style="font-weight: 500 ">Produksi</h3>
                                <h5>Jika kamu sudah setuju dengan desain yang diberikan, interior siap diproduksi dengan
                                    teknologi 4.0 setelah pembayaran 50%.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/04.png') }}" class="d-block w-50 mx-auto"
                                alt="Registrasi">
                            <div id="caption-3" class="carousel-caption d-none d-md-block">
                                <h3 class="kanit mb-4" style="font-weight: 500 ">Instalasi</h3>
                                <h5>Tim kami akan memberikan update secara berkala. Setelah siap, instalasi dapat dimulai
                                    setelah pelunasan sisa pembayaran.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/05.png') }}" class="d-block w-50 mx-auto"
                                alt="Registrasi">
                            <div id="caption-4" class="carousel-caption d-none d-md-block">
                                <h3 class="kanit mb-4" style="font-weight: 500 ">Move in</h3>
                                <h5>Interior barumu siap dihuni sejak 8 minggu setelah produksi. Kami juga memberikan
                                    garansi
                                    2 tahun setelah proses handover.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="col-12 col-sm-8 col-md-8 col-lg-8 mx-auto mb-5">
                <div id="newTextPosition" class="card text-center pt-4 pb-3 px-5">
                    <!-- Text -->
                </div>
            </div>

            <button class="btn btn-lg btn-outline-sikku">Pelajari Lebih Lanjut</button>
        </div>

        <!-- Testimoni -->
        <div class="sikku-primary text-center py-5">
            <h1 class="kanit">Kata Mereka Tentang Interior Japandi Impian yang Terwujud</h1>
            <Button class="btn btn-lg btn-sikku-light">Lihat Portofolio</Button>
        </div>

        <!-- Area Jangkauan -->


        <!-- FAQ -->
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="kanit" style="font-weight: 700">Frequently Asked Questions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat, tempor condimentum commodo.</p>

                    <div class="accordion accordion-flush my-5" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <b>Apa yang harus dilakukan jika tertarik menggunakan jasa Desain Interior Dekoruma?</b>
                                    {{-- <i class="fas fa-question-circle fa-sm me-2 opacity-70"> --}}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Cukup daftarkan diri Anda di laman berikut Formulir Pendaftaran Proyek Desain Interior
                                    Dekoruma. Selanjutnya, Tim Dekoruma akan menghubungi Anda untuk mengatur jadwal
                                    konsultasi. Konsultasi ini GRATIS, tidak dipungut biaya apapun. Setelah selesai
                                    melakukan konsultasi pertama, Anda cukup membayar booking fee sesuai nominal penawaran
                                    harga yang disebutkan oleh Tim Dekoruma agar pengerjaan desain dapat segera dimulai.
                                    Nominal penawaran harga akan dikirimkan oleh Tim Dekoruma dalam waktu 10-14 hari kerja.
                                    Untuk mengetahui lebih lanjut mengenai detail prosedur Proyek Desain Interior Dekoruma,
                                    Anda dapat membacanya di laman berikut Prosedur Proyek Desain Interior
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <b>Apa Syarat & Ketentuan pengerjaaan proyek Desain Interior oleh
                                        Dekoruma?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with
                                    some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <b>Berapa lama durasi pengerjaan proyek Desain Interior oleh Dekoruma?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here
                                    in terms of content, but just filling up the space to make it look, at least at
                                    first glance, a bit more representative of how this would look in a real-world
                                    application.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    <b>Apa saja style desain yang diusung oleh Dekoruma dalam proyek Desain Interiornya?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here
                                    in terms of content, but just filling up the space to make it look, at least at
                                    first glance, a bit more representative of how this would look in a real-world
                                    application.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    <b>Apa yang terjadi jika desain pertama yang diberikan tidak sesuai dengan keinginan
                                        klien?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    to demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here
                                    in terms of content, but just filling up the space to make it look, at least at
                                    first glance, a bit more representative of how this would look in a real-world
                                    application.
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/" class="btn btn-lg btn-sikku-main">Read Our Full FAQs</a>
                    <p>Still have any questions? <a href="/"><b>Contact us</b></a></p>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img class="w-100" src="{{ asset('assets/img/vector/CS.png') }}" alt="Customer Service">
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="sikku-light">
            <div class="container ">
                <div class="row py-5">
                    <div class="col-md-8 text-start d-none d-md-block">
                        <h1 class="kanit">Siap Wujudkan Interior Japandi Impianmu?</h1>
                    </div>
                    <div class="col-12 text-center hidden-md-and-up">
                        <h1 class="kanit">Siap Wujudkan Interior Japandi Impianmu?</h1>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/" class="btn btn-lg btn-sikku-main px-5">Mulai Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sikku-dark">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12 col-md-3 mb-3">
                        <a href="{{ route('home') }}"
                            class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                            <img class="me-2" src="{{ asset('assets/logo/logo-2.png') }}" width="150px"
                                alt="Logo Sikku">
                        </a>
                    </div>

                    <div class="col-md-3">

                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 class="kanit text-sikku">Informasi</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a class="nav-link p-0 text-white">Senin - Jumat</a>
                            </li>
                            <li class="nav-item mb-2"><a class="nav-link p-0 text-white">09.00 - 18.00</a>
                            </li>
                            <li class="nav-item mb-2"><a href="https://wa.me/6287810081994"
                                    class="nav-link p-0 text-white">0878-1008-1994</a>
                            </li>
                            <li class="nav-item mb-2"><a href="mailto:hi@sikku.id"
                                    class="nav-link p-0 text-white">hi@sikku.id</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 class="kanit text-sikku">Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 class="kanit text-sikku">Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-5 my-4 border-top">
                    <p class="col-md-4 mb-0 text-white">&copy; 2023 Sikku, Inc</p>

                    <a href="{{ route('home') }}"
                        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img class="bi me-2" src="{{ asset('assets/logo/icon.png') }}" alt="Icon Sikku" width="40">
                    </a>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="text-white" href="https://www.tiktok.com/" target="_blank">
                                <i class="fa-brands fa-tiktok fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-white" href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-white" href="https://www.youtube.com/" target="_blank">
                                <i class="fa-brands fa-youtube fa-xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
@endpush
