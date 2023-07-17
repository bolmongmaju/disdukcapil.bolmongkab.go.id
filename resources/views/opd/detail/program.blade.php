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
                    <h2>Program dan Kegiatan</h2>
                    <ol>
                        <li><a href="{{ ('/') }}">Beranda</a></li>
                        <li>Program dan Kegiatan</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" data-aos="fade-up">

            <div class="container">

                <div class="section-header">
                    <h2>Program dan Kegiatan</h2>
                    <!-- <p>Non hic nulla eum consequatur maxime ut vero memo vero totam officiis pariatur eos dolorum sed
        fug
        dolorem est possimus esse quae repudiandae. Dolorem id enim officiis sunt deserunt esse soluta
        consequatur quaerat</p> -->
                </div>

            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <div class="container">
                        @forelse ($program as $item)
                        <div class="single-breaking-news">
                            <p>
                                {!! nl2br(($item->program)) !!}
                            </p>
                        </div>
                        @empty
                        <p>Tupoksi belum diisi!</p>
                        @endforelse
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

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
