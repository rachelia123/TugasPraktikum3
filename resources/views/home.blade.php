<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Profile</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">Rumah Impian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>
                        Membantu Temukan
                        Rumah Impian</h1>
                    <p>hadir untuk temukan rumah terbaik
                        untukmu, untuk di jual ataupun di sewa dengan sumber
                        terpercaya.</p>
                    <button class="button-lg-primary">Temukan Rumah</button>
                </div>
            </div>
            <img src="{{ asset('images/Hero Image.png') }}" alt="" class="position-absolute bottom-0 end-0 img-hero">
        </div>
    </section>

    <!-- Layanan -->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Rumah impian hadir menjadi solusi bagi kamu</span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card-layanan text-center">
                        <div class="circle-logo position-relative mx-auto">
                            <img src="{{ asset('images/Icon-propertybaru.png') }}" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Property Baru</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli
                            rumah bary dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-layanan text-center">
                        <div class="circle-logo position-relative mx-auto">
                            <img src="{{ asset('images/Icon Sewa.png') }}" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Sewa Rumah</h3>
                        <p class="mt-3">Sewa rumah yang indah untuk keluarga
                            anda, pilihan terbaik untuk tempat
                            tinggal keluarga mu.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-layanan text-center">
                        <div class="circle-logo position-relative mx-auto">
                            <img src="{{ asset('images/Icon Beli.png') }}" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Beli Rumah</h3>
                        <p class="mt-3">Beli Rumah sempurna dengan harga
                            terbaik kualitas terjamin dari sumber
                            terpercaya..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kontak -->
    <section id="kontak">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>
                            Butuh Konsultasi..?
                            Silahkan kontak kami
                            Kami Siap Membantu
                        </h3>
                        <div class="kontak">
                            <h6>Kontak</h6>
                            <div class="mb-3 d-flex align-items-center">
                                <img src="{{ asset('images/alamat.png') }}" alt="">
                                <a href="#">Jalan Pantai Rejo No. 24,
                                    Kelurahan Lateng,
                                    Kabupaten Banyuwangi</a>
                            </div>
                            <div class="mb-3">
                                <img src="{{ asset('images/telepon.png') }}" alt="">
                                <a href="#">+62 811-3331-1156</a>
                            </div>
                            <div class="mb-3">
                                <img src="{{ asset('images/Email Icon.png') }}" alt="">
                                <a href="#">rumahimpian@gmail.com</a>
                            </div>
                        </div>
                        <h6>Social Media</h6>
                        <a href="#" class="me-3">
                            <img src="{{ asset('images/Facebook Icon.png') }}">
                        </a>
                        <a href="#" class="me-3">
                            <img src="{{ asset('images/Twiter Icon.png') }}">
                        </a>
                        <a href="#" class="me-3">
                            <img src="{{ asset('images/Instagram Iicon.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center">
                        <a href="#">Rumah Impian</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="#hero">Beranda</a>
                        <a href="#layanan">Layanan</a>
                        <a href="#kontak">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @vite('resources/js/app.js')
</body>

</html>
