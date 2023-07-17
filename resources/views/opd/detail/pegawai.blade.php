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
                    <h2>Tupoksi</h2>
                    <ol>
                        <li><a href="{{ ('/') }}">Beranda</a></li>
                        <li>Tupoksi</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Daftar Pegawai</h2>
          <!-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> -->
        </div>

        <div class="row gy-5">
@forelse ($pegawai as $item)
          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ Storage::url('public/files/'. $item->foto) }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>{{$item->nama}}</h4>
                <span>{{$item->jabatan}}</span>
                <span>{{$item->nip}}</span>
              </div>
            </div>
          </div><!-- End Team Member -->
@empty
<p>Belum ada data pegawai!</p>
@endforelse
        </div>

      </div>
    </section><!-- End Team Section -->

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
