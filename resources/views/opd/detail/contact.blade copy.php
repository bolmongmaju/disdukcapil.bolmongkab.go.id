<!doctype html>
<html lang="zxx" class="theme-light">

<head>
    @include('opd.layout.head')
</head>

<body>

    <!-- Start Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="wrapper">
                <img class="circle circle-3" src="{{asset ('assets-disdik/img/logo-bolmong.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Top Header Area -->
    <div class="top-header-area bg-ffffff">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breaking-news-content">
                        <h6 class="breaking-title">
                            Breaking News:
                        </h6>

                        <div class="breaking-news-slides owl-carousel owl-theme">
                            @forelse ($breakingnews as $item)
                            <div class="single-breaking-news">
                                <p>
                                    <a href="{{ route('berita-detail',$item->id) }}">{{$item->title}}</a>
                                </p>
                            </div>
                            @empty
                            <p>Tidak ada berita</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="top-header-others">
                        <li>
                            <i class='bx bx-email'></i>
                            <a href="https://gmail.com">Email: {{$contact->email}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset ('assets-disdik/img/logo-bolmong.ico')}}" class="black-logo" alt="image">
                            <img src="{{ asset ('assets-disdik/img/logo-bolmong.ico')}}" class="white-logo" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            @include('opd.layout.header')
        </div>

    </div>
    <!-- End Navbar Area -->

    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Kontak</h2>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Kontak</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-map">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27982.0992479593!2d-81.35428553933833!3d28.75650994456714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e76d5129fed6b1%3A0x1a6cd960f325cfcb!2sLake%20Mary%2C%20FL%2032746%2C%20USA!5e0!3m2!1sen!2sbd!4v1602575597158!5m2!1sen!2sbd"></iframe> -->
                        {!! $contact->maps ?? null != null ? $contact->maps : 'Belum diisi' !!}
                    </div>

                    <ul class="contact-info">
                        <li>
                            <span>Alamat:</span>
                            {{ $contact->alamat ?? null != null ? $contact->alamat : 'Belum diisi' }}
                        </li>
                        <li>
                            <span>Phone:</span>
                            <a href="tel:15143125678">{{$contact->no_telp}}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <aside class="widget-area">
                        <section class="widget widget_stay_connected">
                            <h3 class="widget-title">Ikuti Kami</h3>

                            <ul class="stay-connected-list">
                                @foreach ($sosmeds as $item)
                                <li>
                                    <a href="#" class="{{$item->name}}">
                                        <i class='{{$item->icon}}'></i>
                                        {{$item->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </section>

                        <section class="widget widget_newsletter">
                            {{-- <div class="newsletter-content">
                                    <h3>Pencarian berita</h3>
                                    <p>Cari berita berdasarkan judul!</p>
                                </div> --}}

                            <form action="{{ ('/berita-cari') }}" method="GET" class="newsletter-form"
                                data-toggle="validator">
                                <input type="text" class="input-newsletter" placeholder="Masukan judul berita"
                                    value="{{ request()->get('cari') }}" name="cari" required autocomplete="off">

                                <button type="submit">Cari</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Footer Area -->
    <section class="footer-area pt-100 pb-70">
        @include('opd.layout.footer')
    </section>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright © <script>
                        document.write(new Date().getFullYear())

                    </script> Disdik. All Rights Reserved by
                    <a href="#" target="_blank">E-Government</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- End Go Top Area -->

    <!-- dark version -->
    <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- dark version -->

    <!-- Jquery Slim JS -->
    @include('opd.layout.script')
</body>

</html>
