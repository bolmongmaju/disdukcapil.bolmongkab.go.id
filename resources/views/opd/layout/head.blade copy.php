        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/bootstrap.min.css') }}">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/animate.min.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/meanmenu.css') }}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/boxicons.min.css') }}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/owl.carousel.min.css') }}">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/owl.theme.default.min.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/magnific-popup.min.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/nice-select.min.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/style.css') }}">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="{{ asset('assets-disdik/css/dark.css') }}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('assets-disdik/css/responsive.css') }}">

        <link href="{{ asset('assets-disdik/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		
		<title>{{ $profil->nama_opd ?? null != null ? Str::title($profil->nama_opd) : '' }}</title>

        <link rel="icon" type="image/png" href="{{ asset('assets-disdik/img/favicon.ico') }}">