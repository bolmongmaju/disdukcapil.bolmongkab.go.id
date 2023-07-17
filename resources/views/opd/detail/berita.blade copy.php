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
                <h2>Berita</h2>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Berita</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start News Area -->
    <section class="news-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($posts as $item)
                    <div class="single-news-item">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="news-image">
                                    <a href="{{ route('berita-detail',$item->id) }}">
                                        <img src="{{$item->image}}" alt="image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="news-content">
                                    <span>{{$item->category->name}}</span>
                                    <h3>
                                        <a href="{{ route('berita-detail',$item->id) }}">{{$item->title}}</a>
                                    </h3>
                                    <p>{!! \Illuminate\Support\Str::limit(nl2br($item->body), 200,'...')
                                        !!}</p>
                                    <p><a>{{$item->user->name}}</a> /
                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="pagination-area">
                        {!! $posts->links('layouts.pagination') !!}
                        {{-- <a href="#" class="prev page-numbers">
                            <i class='bx bx-chevron-left'></i>
                        </a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers">
                            <i class='bx bx-chevron-right'></i>
                        </a> --}}
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="widget-area">
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
    <!-- End News Area -->

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
