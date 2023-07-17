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
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-header-social">
                        @forelse ($sosmeds as $sosmed)
                        <li>
                            <a href="{{ $sosmed->url }}" class="{{ $sosmed->name }}" target="_blank">
                                <i class='{{ $sosmed->icon }}'></i>
                            </a>
                        </li>
                        @empty
                        <p>isi dengan sosial media</p>
                        @endforelse
                    </ul>
                </div>

                <div class="col-lg-6">
                    <ul class="top-header-others">
                        {{-- <li>
                            <div class="languages-list">
                                <select>
                                    <option value="1">English</option>
                                    <option value="2">العربيّة</option>
                                    <option value="3">Deutsch</option>
                                    <option value="3">Português</option>
                                    <option value="3">简体中文</option>
                                </select>
                            </div>
                        </li> --}}

                        <li>
                            <i class='bx bx-user'></i>
                            <a style="color: white;">Email : {{$contact->email}}</a>
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
                            <img src="assets-disdik/img/logo-bolmong.ico" class="black-logo" alt="image">
                            <img src="assets-disdik/img/logo-bolmong.ico" class="white-logo" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            @include('opd.layout.header')
        </div>
        <!-- End Navbar Area -->

        <!-- Start Main News Area -->
        {{-- <section class="main-news-area">
            <div class="container">
                <div class="row">
                    @foreach ($postssatu as $item)
                    <div class="col-lg-8">
                        <div class="single-main-news">
                            <a href="#">
                                <img style="width: 100%; height: auto" src="{{$item->image}}" alt="image">
                            </a>
                            <div class="news-content">
                                <div class="tag">{{$item->category->name}}</div>
                                <h3>
                                    <a href="#">{{$item->title}}</a>
                                </h3>
                                <span><a href="">{{$item->user->name}}</a> / {{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-4">
                        <div class="single-main-news-inner">
                            <a href="#">
                                <img src="assets/img/main-news/main-news-2.jpg" alt="image">
                            </a>
                            <div class="news-content">
                                <div class="tag">Business</div>
                                <h3>
                                    <a href="#">Follow some simple rules to invest money in any business</a>
                                </h3>
                                <span>28 September, 2022</span>
                            </div>
                        </div>

                        @foreach ($prestasiposts as $item)
                        <div class="single-main-news-box">
                            <a href="#">
                                <img src="{{$item->image}}" alt="image">
                            </a>
                            <div class="news-content">
                                <div class="tag">{{$item->category->name}}</div>
                                <h3>
                                    <a href="#">{{$item->title}}</a>
                                </h3>
                                <span>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</span>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Main News Area -->

        <section id="hero" style="margin-bottom: 4.5%; background-color: rgba(255, 255, 255, 0.8);">
            <div style="margin: 1%;">


            <div style="margin: 1%;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div style="box-shadow: rgb(38, 57, 77) 0px 10px 30px -10px;" class="carousel-inner">
                    @foreach ($sliders as $i => $slide)
                  <div class="carousel-item @if($i===0) active @endif">
                    <img src="{{ $slide->image }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                  </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


                </section>


        <!-- Start Default News Area -->
        <section class="default-news-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="most-popular-news">
                            <div class="section-title">
                                <h2>Events</h2>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                            
                                    @foreach ($eventposts as $item)
                                    <div class="single-most-popular-news">
                                        <div class="popular-news-image">
                                            <a href="{{ route('berita-detail',$item->id) }}">
                                                <img src="{{ $item->image}}" alt="image">
                                            </a>
                                        </div>

                                        <div class="popular-news-content">
                                            <span>{{ $item->category->name }}</span>
                                            <h3>
                                                <a href="#">{{ $item->title }}</a>
                                            </h3>
                                            <p><a href="#">{{$item->user->name}}</a> /
                                                {{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                <div class="col-lg-6">
                                    @foreach ($umumposts as $umumpost)
                          
                                    <div class="most-popular-post">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="post-image">
                                                    <a href="{{ route('berita-detail',$umumpost->id) }}">
                                                        <img src="{{$umumpost->image}}" alt="image">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 col-sm-8">
                                                <div class="post-content">
                                                    <span>{{ $umumpost->category->name }}</span>
                                                    <h3>
                                                        <a href="{{ route('berita-detail',$umumpost->id) }}">{{ $umumpost->title }}</a>
                                                    </h3>
                                                    <p>{{ \Carbon\Carbon::parse($umumpost->created_at)->diffForhumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                           

                                </div>
                            </div>
                        </div>

                        <div class="video-news">
                            <div class="section-title">
                                <h2>Galeri Foto</h2>
                            </div>

                            <div class="video-slides owl-carousel owl-theme">
                                @forelse ($foto as $item)
                                <div class="video-item">
                                    <div class="video-news-image">
                                        <a class="popup-youtube"
                                            href="{{ Storage::url('public/photo-images/'. $item->image) }}">
                                            <img src="{{ Storage::url('public/photo-images/'. $item->image) }}"
                                                alt="image">
                                        </a>

                                        <a href="{{ Storage::url('public/photo-images/'. $item->image) }}"
                                            class="popup-youtube">
                                            <i class='bx bx-photo-album'></i>
                                        </a>
                                    </div>

                                    <div class="video-news-content">
                                        <h3>
                                            <a class="popup-youtube"
                                                href="{{ Storage::url('public/photo-images/'. $item->image) }}">{{$item->caption}}</a>
                                        </h3>
                                        <span>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</span>
                                    </div>
                                </div>
                                @empty
                                <p>Belum ada foto</p>
                                @endforelse

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <aside class="widget-area">
                            <section class="widget widget_latest_news_thumb">
                                <h3 class="widget-title">Berita Terbaru</h3>
                                @forelse ($latestposts as $item)
                                <article class="item">
                                    <a href="{{ route('berita-detail',$item->id) }}" class="thumb">
                                        <span class="fullimage cover bg1"
                                            style="background-image: url({{$item->image}});" role="img"></span>
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

                                <form action="{{ ('/berita-cari') }}" method="GET" class="newsletter-form" data-toggle="validator">
                                    <input type="text" class="input-newsletter" placeholder="Masukan judul berita" value="{{ request()->get('cari') }}"
                                        name="cari" required autocomplete="off">

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

                            {{-- <section class="widget widget_instagram">
                                <h3 class="widget-title">Infografis</h3>

                                <ul>
                                    @foreach ($infografis as $item)
                                    <li>
                                        <div class="box">
                                            <img src="{{ $item->image }}" alt="image">
                                            <i class="bx bxl-instagram"></i>
                                            <a href="#" target="_blank" class="link-btn"></a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </section> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Default News Area -->

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

                        </script> by E-Government
                        {{-- <a href="https:diskominfo.bolmongkab.go.id" target="_blank">Bolmongkab</a> --}}
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
