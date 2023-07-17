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
                    <h2>Dokumen</h2>
                    <ol>
                        <li><a href="{{ ('/') }}">Beranda</a></li>
                        <li>Dokumen</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" data-aos="fade-up">

            <div class="container">

                <div class="section-header">
                    <h2>Dokumen</h2>
                </div>

            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                  
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>Tanggal Upload</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($downloads as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td style="text-align: left">{{$item->nama}}</td>
                                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('j F, Y')}}</td>
                                    <td><a href="{{ route('getdownload',$item->id) }}" class="table-link">
                                        <span class="fa-stack">
                                            <i class="bi bi-download"></i>
                                            <i class="fa fa-download fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Tidak ada dokumen yang diupload!</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforelse
                                <tbody>
                            </table>
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
