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
        <!-- Campaign -->
        <div id="carouselCampaign" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselCampaign" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCampaign" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselCampaign" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="8000">
                    <img src="{{ asset('assets/img/dummy/japandi-banner.webp') }}" class="d-block w-100" alt="dummy">
                </div>
                <div class="carousel-item" data-bs-interval="8000">
                    <img src="{{ asset('assets/img/dummy/japandi-banner.webp') }}" class="d-block w-100" alt="dummy">
                </div>
                <div class="carousel-item" data-bs-interval="8000">
                    <img src="{{ asset('assets/img/dummy/japandi-banner.webp') }}" class="d-block w-100" alt="dummy">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCampaign" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCampaign" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Heroes -->
        <div class="container py-4">
            <!-- Biaya -->
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="kanit text-center mb-3">Hitung Estimasi Biayamu!</h1>
                        <form method="POST" action="{{ route('hitung.store') }}">
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
                                            value="{{ old('phone') }}" placeholder="0800 0000 0000" autocomplete="phone"
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
                                        <label for="type">Kebutuhan</label>
                                        <select class="form-control @error('type') is-invalid @enderror" id="status"
                                            name="type" aria-label="type">
                                            <option selected>Pilih</option>
                                            <option value="Rumah" {{ old('type') == 'Rumah' ? 'selected' : '' }}>
                                                Rumah</option>
                                            <option value="Kitchen Set"
                                                {{ old('type') == 'Kitchen Set' ? 'selected' : '' }}>
                                                Kitchen Set</option>
                                            <option value="Lemari Kustom"
                                                {{ old('type') == 'Lemari Kustom' ? 'selected' : '' }}>
                                                Lemari</option>
                                            <option value="Apartemen" {{ old('type') == 'Apartemen' ? 'selected' : '' }}>
                                                Apartemen</option>
                                            <option value="Lainnya" {{ old('type') == 'Lainnya' ? 'selected' : '' }}>
                                                Lainnya</option>
                                        </select>
                                        @error('type')
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
                <h2 class="kanit text-center text-white">Desain Interior Sesuai Ruangan</h2>
                <h6 class="text-center mt-3 mb-4 text-white">Koleksi inspirasi desain interior Japandi oleh tim Interna.
                    Desain
                    estetik,
                    kualitas
                    material terbaik.</h6>
                <div class="row g-4">
                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="ratio ratio-16x9">
                                <img class="card-img-top" src="{{ asset('assets/img/category/kitchen.jpg') }}"
                                    alt="Kitchen Set">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title kanit">Kitchen Set</h5>
                                <small class="card-text">Desain dapur modern dengan kualitas premium</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="ratio ratio-16x9">
                                <img class="card-img-top" src="{{ asset('assets/img/category/house.jpg') }}"
                                    alt="Rumah">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title kanit">Rumah</h5>
                                <small class="card-text">Desain dapur modern dengan kualitas premium</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="ratio ratio-16x9">
                                <img class="card-img-top" src="{{ asset('assets/img/category/bedroom.jpg') }}"
                                    alt="Apartemen">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title kanit">Apartemen</h5>
                                <small class="card-text">Desain dapur modern dengan kualitas premium</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="ratio ratio-16x9">
                                <img class="card-img-top" src="{{ asset('assets/img/dummy/16x9.png') }}" alt="Dummy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title kanit">Lemari Custom</h5>
                                <small class="card-text">Desain dapur modern dengan kualitas premium</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="ratio ratio-16x9">
                                <img class="card-img-top" src="{{ asset('assets/img/category/kantor.jpg') }}"
                                    alt="Kantor">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title kanit">Kantor</h5>
                                <small class="card-text">Desain dapur modern dengan kualitas premium</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="ratio ratio-16x9">
                                <img class="card-img-top" src="{{ asset('assets/img/category/hotel.jpg') }}"
                                    alt="Hotel">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title kanit">Hotel</h5>
                                <small class="card-text">Desain dapur modern dengan kualitas premium</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mengapa Memilih -->
        <div class="container text-center my-5">
            <h1 class="kanit" style="font-weight: 500">Mengapa memilih Interna?</h1>
            <div class="row my-4">
                <div class="col-4">
                    <div class="card p-3">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-2 text-center">
                                <img src="{{ asset('assets/img/vector/icon/03.png') }}" alt="gratis_konsultasi"
                                    height="50">
                            </div>
                            <!-- desktop -->
                            <div class="col-md-10 text-start d-none d-md-block my-auto">
                                <h5 class="kanit"><b>Gratis Konsultasi</b></h5>
                                <small>Jaminan barang berkualitas bikin tenang & nyaman</small>
                            </div>
                            <!-- mobile -->
                            <div class="col-12 text-center hidden-md-and-up">
                                <small class="kanit lh-1"><b>Gratis Konsultasi</b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-3">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-2 text-center">
                                <img src="{{ asset('assets/img/vector/icon/02.png') }}" alt="budget" height="50">
                            </div>
                            <!-- desktop -->
                            <div class="col-md-10 text-start d-none d-md-block">
                                <h5 class="kanit"><b>Budget Fleksibel</b></h5>
                                <small>Jaminan barang berkualitas bikin tenang & nyaman</small>
                            </div>
                            <!-- mobile -->
                            <div class="col-12 text-center hidden-md-and-up">
                                <small class="kanit lh-1"><b>Budget Fleksibel</b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-3">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-2 text-center">
                                <img src="{{ asset('assets/img/vector/icon/01.png') }}" alt="garansi" height="50">
                            </div>
                            <!-- desktop -->
                            <div class="col-md-10 text-start d-none d-md-block">
                                <h5 class="kanit"><b>Garansi 2 Tahun</b></h5>
                                <small>Jaminan barang berkualitas bikin tenang & nyaman</small>
                            </div>
                            <!-- mobile -->
                            <div class="col-12 text-center hidden-md-and-up">
                                <small class="kanit lh-1"><b>Garansi 2 Tahun</b></small>
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
                            <img src="{{ asset('assets/img/vector/01.png') }}" class="d-block img-carousel mx-auto"
                                alt="Registrasi">
                            <div id="caption-0" class="carousel-caption d-none d-md-block">
                                <h4 class="kanit mb-3" style="font-weight: 500 ">Registrasi dan Konsultasi</h4>
                                <p>Ada 3 opsi, yaitu konsultasi online, kunjungan langsung ke rumahmu, dan konsultasi di
                                    Interna Experience Center.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/02.png') }}" class="d-block img-carousel mx-auto"
                                alt="Registrasi">
                            <div id="caption-1" class="carousel-caption d-none d-md-block">
                                <h4 class="kanit mb-3" style="font-weight: 500 ">Design</h4>
                                <p>Setelah pembayaran Booking Fee, desainer kami akan mendesain hunian impianmu sesuai
                                    kebutuhan dan keinginanmu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/03.png') }}" class="d-block img-carousel mx-auto"
                                alt="Registrasi">
                            <div id="caption-2" class="carousel-caption d-none d-md-block">
                                <h4 class="kanit mb-3" style="font-weight: 500 ">Produksi</h4>
                                <p>Jika kamu sudah setuju dengan desain yang diberikan, interior siap diproduksi dengan
                                    teknologi 4.0 setelah pembayaran 50%.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/04.png') }}" class="d-block img-carousel mx-auto"
                                alt="Registrasi">
                            <div id="caption-3" class="carousel-caption d-none d-md-block">
                                <h4 class="kanit mb-3" style="font-weight: 500 ">Instalasi</h4>
                                <p>Tim kami akan memberikan update secara berkala. Setelah siap, instalasi dapat dimulai
                                    setelah pelunasan sisa pembayaran.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/vector/05.png') }}" class="d-block img-carousel mx-auto"
                                alt="Registrasi">
                            <div id="caption-4" class="carousel-caption d-none d-md-block">
                                <h4 class="kanit mb-3" style="font-weight: 500 ">Move in</h4>
                                <p>Interior barumu siap dihuni sejak 8 minggu setelah produksi. Kami juga memberikan
                                    garansi
                                    2 tahun setelah proses handover.</p>
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
                <div id="newTextPosition" class="card text-center pt-3 pb-1 px-3">
                    <!-- Text -->
                </div>
            </div>

            <button class="btn btn-lg btn-outline-sikku">Pelajari Lebih Lanjut</button>
        </div>

        <!-- Testimoni -->
        <div class="sikku-primary text-center py-5">
            <h1 class="kanit text-white">Kata Mereka Tentang Interior Japandi Impian yang Terwujud</h1>
            <Button class="btn btn-lg btn-sikku-light">Lihat Portofolio</Button>
        </div>

        <!-- Area Jangkauan -->


        <!-- FAQ -->
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- desktop -->
                    <div class="d-none d-md-block">
                        <h1 class="kanit" style="font-weight: 700">Frequently Asked Questions</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat, tempor condimentum commodo.
                        </p>
                    </div>
                    <!-- mobile -->
                    <div class="hidden-md-and-up text-center">
                        <h1 class="kanit" style="font-weight: 700">Frequently Asked Questions</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat, tempor condimentum commodo.
                        </p>
                    </div>

                    <div class="accordion accordion-flush my-5" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <b></b>
                                    {{-- <i class="fas fa-question-circle fa-sm me-2 opacity-70"> --}}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <b></b>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <b></b>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    <b></b>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    <b></b>
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- desktop -->
                    <div class="d-none d-md-block">
                        <a href="{{ route('landing') }}" class="btn btn-lg btn-sikku-main">Read Our Full FAQs</a>
                    </div>
                    <!-- mobile -->
                    <div class="hidden-md-and-up text-center">
                        <a href="{{ route('landing') }}" class="btn btn-lg btn-sikku-main">Read Our Full FAQs</a>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img class="w-100" src="{{ asset('assets/img/vector/CS.png') }}" alt="Customer Service">
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="sikku-primary">
            <div class="container ">
                <div class="row py-5">
                    <!-- desktop -->
                    <div class="col-md-8 text-start d-none d-md-block text-white">
                        <h1 class="kanit">Siap Wujudkan Interior Japandi Impianmu?</h1>
                    </div>
                    <!-- mobile -->
                    <div class="col-12 text-center hidden-md-and-up text-white">
                        <h1 class="kanit">Siap Wujudkan Interior Japandi Impianmu?</h1>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/" class="btn btn-lg btn-sikku-light px-5">Mulai Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sikku-light">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12 col-md-3 mb-3">
                        <a href="{{ route('landing') }}"
                            class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                            <img class="me-2" src="{{ asset('assets/logo/logo-light.png') }}" width="150px"
                                alt="Logo Sikku">
                        </a>
                    </div>

                    <div class="col-md-3">

                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 class="kanit text-sikku-light">Informasi</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a class="nav-link p-0 text-white">Senin - Jumat</a>
                            </li>
                            <li class="nav-item mb-2"><a class="nav-link p-0 text-white">09.00 - 18.00</a>
                            </li>
                            <li class="nav-item mb-2"><a href="https://wa.me/6282215398499"
                                    class="nav-link p-0 text-white">0822-1539-8499</a>
                            </li>
                            <li class="nav-item mb-2"><a href="mailto:bisnis@interiorinterna.com"
                                    class="nav-link p-0 text-white">bisnis@interiorinterna.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 class="kanit text-sikku-light">Section</h5>
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
                        <h5 class="kanit text-sikku-light">Section</h5>
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
                    <p class="col-md-4 mb-0 text-white">&copy; 2024 Interna, Inc</p>

                    <a href="{{ route('landing') }}"
                        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img class="bi me-2" src="{{ asset('assets/logo/icon.png') }}" alt="Icon Sikku" width="40">
                    </a>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="text-white" href="https://www.tiktok.com/@sikku.id" target="_blank">
                                <i class="fa-brands fa-tiktok fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-white" href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-white" href="https://www.youtube.com/@SIKKU-InteriorFurniture"
                                target="_blank">
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
