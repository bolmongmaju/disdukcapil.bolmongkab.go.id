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

        {{-- <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Search for..">
                                        <button type="submit"><i class='bx bx-search'></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
    </div>
    <!-- End Navbar Area -->

    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Berita detail</h2>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Berita detail</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start News Details Area -->
    <section class="news-details-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{$posts->image}}" alt="image">
                        </div>

                        <div class="article-content">
                            <span><a href="#">{{$posts->user->name}}</a> /
                                {{ \Carbon\Carbon::parse($posts->created_at)->diffForhumans() }}</span>
                            <h3>{{$posts->title}}</h3>

                            <p>{!! nl2br(($posts->body)) !!}</p>


                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="widget-area">
                        <div class="widget widget_search">
                            <form action="{{ ('/berita-cari') }}" method="GET" class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Masukan judul berita"
                                        value="{{ request()->get('cari') }}" name="cari">
                                </label>
                                <button type="submit">
                                    <i class='bx bx-search'></i>
                                </button>
                            </form>
                        </div>

                        <section class="widget widget_latest_news_thumb">
                            <h3 class="widget-title">Berita Terbaru</h3>
                            @forelse ($latestposts as $item)
                            <article class="item">
                                <a href="{{ route('berita-detail',$item->id) }}" class="thumb">
                                    <span style="background-image: url({{$item->image}});" class="fullimage cover bg1"
                                        role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a
                                            href="{{ route('berita-detail',$item->id) }}">{{$item->title}}</a></h4>
                                    <span>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</span>
                                </div>
                            </article>
                            @empty
                            <p>Tidak ada berita</p>
                            @endforelse
                        </section>

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

                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>

                            <div class="tagcloud">
                                @foreach ($tags as $item)
                                <a href="{{ route('cari-tag', $item->id) }}">{{$item->name}}</a>
                                @endforeach
                            </div>
                        </section>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Start News Details Area -->

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
