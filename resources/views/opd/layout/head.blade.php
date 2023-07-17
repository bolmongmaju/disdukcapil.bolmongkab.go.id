  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $profil->nama_opd ?? null != null ? Str::title($profil->nama_opd) : '' }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets-disdukcapil/img/logo-bolmong.ico') }}" rel="icon">
  <link href="{{ asset('assets-disdukcapil/img/logo-bolmong.ico') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets-disdukcapil/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-disdukcapil/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-disdukcapil/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-disdukcapil/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-disdukcapil/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('assets-disdukcapil/css/variables.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('assets-disdukcapil/css/variables-blue.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('assets-disdukcapil/css/variables-green.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('assets-disdukcapil/css/variables-orange.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('assets-disdukcapil/css/variables-purple.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('assets-disdukcapil/css/variables-red.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('assets-disdukcapil/css/variables-pink.css') }}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-disdukcapil/css/main.css') }}" rel="stylesheet">