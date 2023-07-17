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
          <h2>Prasarana dan Fasilitas</h2>
          <ol>
            <li><a href="{{ ('/') }}">Beranda</a></li>
            <li>Prasarana dan Fasilitas</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

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

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  @include('opd.layout.footer')
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @include('opd.layout.script')

</body>

</html>