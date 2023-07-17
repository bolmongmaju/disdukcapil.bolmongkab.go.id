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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Faq</h2>
                    <ol>
                        <li><a href="{{ ('/') }}">Beranda</a></li>
                        <li>Faq</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">
      
              <div class="row gy-4">
      
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
      
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
      
                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
              </div>
      
            </div>
          </section><!-- End F.A.Q Section -->

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
