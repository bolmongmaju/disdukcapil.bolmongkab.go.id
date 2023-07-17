<!DOCTYPE html>
<!DOCTYPE html>

<html lang="en-US">

<head>
    @include('opd.layout.head')
</head>

<body class="page-sub-page">
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Header -->
        <div class="navigation-wrapper">
            <div class="secondary-navigation-wrapper">
                <div class="container">
                    <div class="navigation-contact pull-left"><a><i class="fa fa-phone"></i> Call Us:
                            {{$contact->no_telp}}</a></div>
                    <ul class="secondary-navigation list-unstyled pull-right">
                        <li><a href="my-account.html#tab-profile"><i class="fa fa-envelope"></i>Email:
                                {{$contact->email}}</a></li>
                    </ul>
                </div>
            </div><!-- /.secondary-navigation -->
            <div class="primary-navigation-wrapper">
                <header class="navbar" id="top" role="banner">
                    @include('opd.layout.header')
                </header><!-- /.navbar -->
            </div><!-- /.primary-navigation -->
            <div class="background">
                <img src="assets/img/background-city.png" alt="background">
            </div>
        </div>
        <!-- end Header -->

        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li class="active">Video</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <!-- Page Content -->
        <div id="page-content">
            <div class="container">
                <!--MAIN Content-->
                <div id="page-main">
                    <section id="gallery">
                        <header>
                            <h2>Video</h2>
                        </header>
                        <div class="section-content">
                            <ul class="gallery-list">
                                @forelse($video as $item)
                                <li><a href="{{ $item->embed }}}"
                                        class="image-popup"><img
                                            src=" {!! $item->embed !!}}" alt=""></a>
                                </li>
                                @empty
                                Belum ada video
                                @endforelse
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- /.gallery -->
                </div><!-- /#page-main -->
                <!-- end MAIN Content -->
            </div><!-- /.container -->
        </div>
        <!-- end Page Content -->

        <!-- Footer -->
        <footer id="page-footer">
            @include('opd.layout.footer')
        </footer>
        <!-- end Footer -->

    </div>
    <!-- end Wrapper -->

    @include('opd.layout.script')

</body>

</html>
