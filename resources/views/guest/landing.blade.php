@extends('layouts.app')

@section('title')
    Home
@endsection

@push('css')
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
                                    <div class="form-group  mb-3">
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
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Email Anda (optional)"
                                            autocomplete="email">
                                        <div class="form-text" id="emailText">*Optional</div>
                                        @error('email')
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
        <!-- Cara Kerja -->
        <div class="container text-center my-5">
            <h2 class="kanit" style="font-weight: 600">Mengapa memilih Sikku?</h2>
            <div class="row my-4">
                <div class="col-4">
                    <div class="card">
                        <div class="row align-items-start pt-3">
                            <div class="col-12 col-md-2">
                                <img src="{{ asset('assets/img/dummy/garansi.webp') }}" alt="dummy">
                            </div>
                            <div class="col-12 col-md-10 text-center">
                                <h5 class="kanit"><b>Gratis Konsultasi</b></h5>
                                <small class="d-none d-md-block">Ja</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="row align-items-start pt-3">
                            <div class="col-12 col-md-2">
                                <img src="{{ asset('assets/img/dummy/garansi.webp') }}" alt="dummy">
                            </div>
                            <div class="col-12 col-md-10 text-center">
                                <h5 class="kanit"><b>Budget Fleksibel</b></h5>
                                <small class="d-none d-md-block">Ja</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="row align-items-start pt-3">
                            <div class="col-12 col-md-2">
                                <img class="h-100" src="{{ asset('assets/img/dummy/garansi.webp') }}" alt="dummy">
                            </div>
                            <div class="col-md-10 text-start d-none d-md-block">
                                <h5 class="kanit"><b>Garansi 2 Tahun</b></h5>
                                <small>Jaminan barang berkualitas bikin tenang & nyaman</small>
                            </div>
                            <div class="col-12 text-center">
                                <h5 class="kanit"><b>Garansi 2 Tahun</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="kanit" style="font-weight: 600">5 Langkah Menuju Interior Impianmu</h2>

            <div class="col-12 col-sm-8 col-md-8 col-lg-8 mx-auto my-5">
                <div class="card text-center pt-5 pb-3">
                    <h3 class="kanit" style="font-weight: 500 ">Kunjungan Pertama</h3>
                    <p>Ada 3 opsi, yaitu konsultasi online, kunjungan langsung ke rumahmu, dan konsultasi di Dekoruma
                        Experience Center.</p>
                </div>
            </div>

            <button class="btn btn-lg btn-outline-sikku">Pelajari Lebih Lanjut</button>
        </div>
        <!-- Area Jangkauan -->

        <!-- Testimoni -->

        <!-- FAQ -->
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="kanit" style="font-weight: 700">Frequently Asked Questions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat, tempor condimentum commodo.</p>
                    <Button class="btn btn-lg btn-sikku-main">Read Our Full FAQs</Button>
                    <p>Still have any questions? <a href="/"><b>Contact us</b></a></p>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img class="w-100" src="{{ asset('assets/img/dummy/contoh.png') }}" alt="dummy">
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="sikku-light">
            <div class="container ">
                <div class="row py-5">
                    <div class="col-8">
                        <h1 class="kanit">Siap Wujudkan Interior Japandi Impianmu?</h1>
                    </div>
                    <div class="col-4">
                        <Button class="btn"></Button>
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
                            <img class="me-2" src="{{ asset('assets/logo/logo.png') }}" width="150px"
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
                            <a class="text-white" href="https://www.tiktok.com/">
                                <i class="fa-brands fa-tiktok fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-white" href="https://www.instagram.com/">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-white" href="https://www.youtube.com/">
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
