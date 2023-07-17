<!DOCTYPE html>
<html lang="en">

<head>
    @include('opd.layout.head')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        @include('opd.layout.header')
    </header><!-- End Header -->

    <section id="#" style="padding-bottom: 30px;">
    {{-- <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
        @foreach ($sliders as $i => $slide)
          <div class="carousel-item @if($i===0) active @endif" style="background-image: url({{ $slide->image }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">{{ $slide->title }}</h2>
                <p class="animate__animated animate__fadeInUp">{{ $slide->keterangan }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div> --}}

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $i => $slide)
          <div class="carousel-item active">
            <img src="{{ $slide->image }}" class="d-block w-100" alt="...">
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

  </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header" style="padding-bottom: 140px;">
                    <h2>Layanan</h2>
                </div>

                <div class="row">

                    <div class="col-xl-12 col-md-12" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-list-columns"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Layanan Antrian Online</h3>
                                </a>
                                <p>Ini merupakan portal antrian online yang disediakan oleh DISDUKCAPIL Bolaang Mongondow. Dengan sistem ini, anda bisa mengambil nomor antrian dari mana saja untuk mendapatkan pelayanan di DISDUKCAPIL Bolaang Mongondow.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Services Section -->

         <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Informasi dan Pelaporan</h2>
          </div>
  
          <div class="row gy-5">
  
            <div class="col-xl-6 col-md-12" data-aos="zoom-in" data-aos-delay="200">
              <div class="service-item">
                <div class="details position-relative" style="margin: 10px 30px 0 30px;">
                  <div class="icon">
                    <i class="bi bi-info-square"></i>
                  </div>
                  <a href="https://ppid.bolmongkab.go.id/" class="stretched-link">
                    <h3>PPID</h3>
                  </a>
                  <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID).</p>
                </div>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-6 col-md-12" data-aos="zoom-in" data-aos-delay="300">
              <div class="service-item">
                <div class="details position-relative" style="margin: 10px 30px 0 30px;">
                  <div class="icon">
                    <i class="bi bi-chat-right-dots"></i>
                  </div>
                  <a href="https://www.lapor.go.id/" class="stretched-link">
                    <h3>LAPOR</h3>
                  </a>
                  <p>Layanan Aspirasi dan Pengaduan Online Rakyat.</p>
                </div>
              </div>
            </div><!-- End Service Item -->
  
          </div>
  
        </div>
      </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

      <div class="section-header">
            <h2>Pelayanan</h2>
          </div>

        <ul class="nav nav-tabs row gy-4 d-flex">

        <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-dokumen-kartu-keluarga') }}" class="nav-link">
              <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Dokumen Kartu Keluarga</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-ktp-elektronik') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan KTP Elektronik</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-kartu-identitas-anak') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Kartu Identitas Anak</h4>
            </a>
          </li><!-- End Tab 6 Nav -->
          
        <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-dokumen-surat-keterangan-pindah-wni') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Dokumen Surat Keterangan Pindah WNI</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-akta-kelahiran') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Akta Kelahiran</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-akta-pengakuan-anak') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Akta Pengakuan Anak</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-akta-pengesahan-anak') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Akta Pengesahan Anak</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-akta-kematian') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Akta Kematian</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-12 col-md-4 col-lg-4">
            <a href="{{ ('/penerbitan-akta-perkawinan') }}" class="nav-link">
            <i class="bi bi-info-square-fill color-black"></i>
              <h4 class="text-center">Penerbitan Akta Perkawinan</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

      </div>
    </section><!-- End Features Section -->

      <section id="faq" class="faq" style="background-color: #eff3ff;">
            <div class="container-fluid" data-aos="fade-up">
      
              <div class="row gy-4">
      
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
      
                  <div class="content px-xl-5">
                    <h3>Frequently Asked <strong>Questions</strong> (FAQ)</h3>
                    <p>
                        FAQ adalah kumpulan pertanyaan yang sering ditanyakan oleh pengguna atau pelanggan tentang suatu topik, produk, layanan, atau perusahaan tertentu. FAQ berfungsi sebagai panduan atau sumber informasi untuk menjawab pertanyaan-pertanyaan umum yang mungkin timbul dalam pikiran pengguna.
                    </p>
                  </div>
      
                  <div class="accordion accordion-flush px-xl-5" id="faqlist">
      
                    @foreach ($faqs as $item)
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                          <i class="bi bi-question-circle question-icon"></i>
                          {{$item->question}}
                        </button>
                      </h3>
                      <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                          {{$item->answer}}
                        </div>
                      </div>
                    </div><!-- # Faq item-->
                    @endforeach
      
                  </div>
      
                </div>
      
                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets-disdukcapil/img/faq.jpg");'>&nbsp;</div>
              </div>
      
            </div>
          </section><!-- End F.A.Q Section -->

           <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Prasarana dan Fasilitas</h2>
        </div>

        <div class="row gy-5">
          @foreach ($facilities as $item)
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ Storage::url('public/facility-images/'. $item->image) }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-clipboard-heart-fill"></i>
                </div>
                <a href="{{ Storage::url('public/facility-images/'. $item->image) }}" class="stretched-link">
                  <h3>{{$item->caption}}</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog" style="padding-top: 60px;">
            <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Berita</h2>
          </div>

                <div class="row g-5">

                    <div class="col-lg-12">

                        <div class="row gy-4 posts-list">
                            @forelse ($latestposts as $item)
                            <div class="col-lg-4">
                                <article class="d-flex flex-column">

                                    <div class="post-img">
                                        <img src="{{$item->image}}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="{{ route('berita-detail',$item->id) }}">{{$item->title}}</a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-details.html">{{$item->user->name}}</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="blog-details.html"><time
                                                        datetime="{{$item->created_at}}">{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</time></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                    {!! \Illuminate\Support\Str::limit(nl2br($item->body), 200,'...')
                                        !!}
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a href="{{ route('berita-detail',$item->id) }}">Read More</a>
                                    </div>

                                </article>
                            </div><!-- End post list item -->
                            @empty
                            <p>Tidak ada berita</p>
                            @endforelse

                        </div><!-- End blog posts list -->

                    </div>

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        @include('opd.layout.footer')
    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('opd.layout.script')

</body>

</html>
