<!DOCTYPE html>
<html lang="en">

<head>
    @include('opd.layout.head')
</head>

<body>

    <!-- ======= Top Bar ======= -->
    {{-- <div id="topbar" class="fixed-top d-flex align-items-center topbar-inner-pages">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
            </div>
            <div class="cta d-none d-md-block">
                <a href="#about" class="scrollto">Get Started</a>
            </div>
        </div>
    </div> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        @include('opd.layout.header')
    </header><!-- End Header -->

    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Survei Dukcapil</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Survei Dukcapil</li>
            </ol>
          </div>
        </div>
      </section><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Survei Dukcapil</h2>
                </div>

                <div class="my-3">
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-white rounded">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                        <div class="icon">
                            <i class="fa fa-times-circle"></i>
                        </div>
                        <strong>Gagal!</strong>
                        {{ $message }}
                    </div>
                    @endif

                    @if ($message = Session::get('success'))
                    {{-- <div class="error-message"></div>
              <div class="sent-message">{{ $message }}</div> --}}
                <div class="alert alert-success alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <strong>Success!</strong>
                    {{ $message }}
                </div>
                @endif
            </div>

            <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                {{-- <div class="col-lg-5">
                  <div class="info">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
      
                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>info@example.com</p>
                    </div>
      
                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>+1 5589 55488 55s</p>
                    </div>
      
                  </div>
      
                </div> --}}

                <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                    <form action="{{ route('store-surveicapil') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="number" class="form-control" name="telp" id="telp"
                                    placeholder="Nomor Telepon" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"
                                required>
                        </div>
                        {{-- <div class="form-group mt-3">
                      <textarea class="form-control" name="keluhan" rows="5" placeholder="Keluhan" required></textarea>
                    </div> --}}

                        <div class="container rounded mt-3" data-aos="fade-up" style="background-color: aliceblue">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mt-3">
                                        <h1 style="font-size: 16px;">Mekanisme Pelayanan</h1>

                                        <div class="rating">

                                            <input type="radio" name="mekanisme_pelayanan" value="100" id="5p"><label
                                                for="5p">☆</label>
                                            <input type="radio" name="mekanisme_pelayanan" value="80" id="4p"><label
                                                for="4p">☆</label>
                                            <input type="radio" name="mekanisme_pelayanan" value="60" id="3p"><label
                                                for="3p">☆</label>
                                            <input type="radio" name="mekanisme_pelayanan" value="40" id="2p"><label
                                                for="2p">☆</label>
                                            <input type="radio" name="mekanisme_pelayanan" value="20" id="1p"><label
                                                for="1p">☆</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mt-3">
                                        <h1 style="font-size: 16px;">Jangka Waktu</h1>

                                        <div class="rating">

                                            <input type="radio" name="jangka_waktu" value="100" id="5o"><label
                                                for="5o">☆</label>
                                            <input type="radio" name="jangka_waktu" value="80" id="4o"><label
                                                for="4o">☆</label>
                                            <input type="radio" name="jangka_waktu" value="60" id="3o"><label
                                                for="3o">☆</label>
                                            <input type="radio" name="jangka_waktu" value="40" id="2o"><label
                                                for="2o">☆</label>
                                            <input type="radio" name="jangka_waktu" value="20" id="1o"><label
                                                for="1o">☆</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mt-3">
                                        <h1 style="font-size: 16px;">Layanan Pengaduan</h1>

                                        <div class="rating">

                                            <input type="radio" name="layanan_pengaduan" value="100" id="5a"><label
                                                for="5a">☆</label>
                                            <input type="radio" name="layanan_pengaduan" value="80" id="4a"><label
                                                for="4a">☆</label>
                                            <input type="radio" name="layanan_pengaduan" value="60" id="3a"><label
                                                for="3a">☆</label>
                                            <input type="radio" name="layanan_pengaduan" value="40" id="2a"><label
                                                for="2a">☆</label>
                                            <input type="radio" name="layanan_pengaduan" value="20" id="1a"><label
                                                for="1a">☆</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mt-3">
                                        <h1 style="font-size: 16px;">Sarana Prasarana</h1>

                                        <div class="rating">

                                            <input type="radio" name="sarana_prasarana" value="100" id="5b"><label
                                                for="5b">☆</label>
                                            <input type="radio" name="sarana_prasarana" value="80" id="4b"><label
                                                for="4b">☆</label>
                                            <input type="radio" name="sarana_prasarana" value="60" id="3b"><label
                                                for="3b">☆</label>
                                            <input type="radio" name="sarana_prasarana" value="40" id="2b"><label
                                                for="2b">☆</label>
                                            <input type="radio" name="sarana_prasarana" value="20" id="1b"><label
                                                for="1b">☆</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="form-group mt-3">
                                      <h1 style="font-size: 16px;">Kualitas Pelaksana Pelayanan</h1>
                                      <input type="text" style="width: 80%" name="nama_pelaksana_pelayanan" class="form-control" id="nama_pelaksana_pelayanan" placeholder="Nama Pelaksana Pelayanan"
                                      required>
                                      <div class="rating">

                                          <input type="radio" name="kualitas_pelaksana_pelayanan" value="100" id="5c"><label
                                              for="5c">☆</label>
                                          <input type="radio" name="kualitas_pelaksana_pelayanan" value="80" id="4c"><label
                                              for="4c">☆</label>
                                          <input type="radio" name="kualitas_pelaksana_pelayanan" value="60" id="3c"><label
                                              for="3c">☆</label>
                                          <input type="radio" name="kualitas_pelaksana_pelayanan" value="40" id="2c"><label
                                              for="2c">☆</label>
                                          <input type="radio" name="kualitas_pelaksana_pelayanan" value="20" id="1c"><label
                                              for="1c">☆</label>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group mt-3">
                                    <h1 style="font-size: 16px;">Jaminan Keamanan</h1>

                                    <div class="rating">

                                        <input type="radio" name="jaminan_keamanan" value="100" id="5d"><label
                                            for="5d">☆</label>
                                        <input type="radio" name="jaminan_keamanan" value="80" id="4d"><label
                                            for="4d">☆</label>
                                        <input type="radio" name="jaminan_keamanan" value="60" id="3d"><label
                                            for="3d">☆</label>
                                        <input type="radio" name="jaminan_keamanan" value="40" id="2d"><label
                                            for="2d">☆</label>
                                        <input type="radio" name="jaminan_keamanan" value="20" id="1d"><label
                                            for="1d">☆</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group mt-3">
                                  <h1 style="font-size: 16px;">Jaminan Pelayanan</h1>

                                  <div class="rating">

                                      <input type="radio" name="jaminan_pelayanan" value="100" id="5e"><label
                                          for="5e">☆</label>
                                      <input type="radio" name="jaminan_pelayanan" value="80" id="4e"><label
                                          for="4e">☆</label>
                                      <input type="radio" name="jaminan_pelayanan" value="60" id="3e"><label
                                          for="3e">☆</label>
                                      <input type="radio" name="jaminan_pelayanan" value="40" id="2e"><label
                                          for="2e">☆</label>
                                      <input type="radio" name="jaminan_pelayanan" value="20" id="1e"><label
                                          for="1e">☆</label>
                                  </div>
                              </div>
                          </div>

                            </div>
                        </div>

                        <div role="form" class="php-email-form mt-5">
                            <div class="text-center"><button type="submit">Kirim Survei</button></div>
                        </div>
                    </form>

                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('opd.layout.footer')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('opd.layout.script')

</body>

</html>
