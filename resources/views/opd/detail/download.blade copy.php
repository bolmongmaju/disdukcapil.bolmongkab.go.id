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
                <h2>File/Dokumen</h2>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>File/Dokumen</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <div id="page-content">
        <div class="container">
            <!--MAIN Content-->
            <div id="page-main">
                <section id="right-sidebar">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Upload</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($downloads as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->nama}}</td>
                                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('j F, Y')}}</td>
                                    <td><a href="{{ route('getdownload',$item->id) }}" class="table-link">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-download fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a></td>
                                </tr>
                                @empty
                                <tr>
                                    <th scope="row">
                                        <p>Belum ada file yang diupload!</p>
                                    </th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>


                    </div>
                </section>
            </div><!-- /#page-main -->
            <!-- end MAIN Content -->
        </div><!-- /.container -->
    </div>

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
