<div class="container-fluid d-flex align-items-center justify-content-between">

<a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
  <!-- Uncomment the line below if you also wish to use an image logo -->
  <!-- <img src="assets/img/logo.png" alt=""> -->
  <h1 style="color: aliceblue;">DISDUKCAPIL</h1>
</a>

<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link scrollto  {{ (request()->is('/')) ? 'active' : '' }}" href="{{ ('/') }}">Beranda</a></li>

    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
      <ul>
        <li><a href="{{ ('/struktur') }}" class="{{ (request()->is('struktur')) ? 'active' : '' }}">Struktur Organisasi</a></li>
        <li><a href="{{ ('/visi-misi') }}" class="{{ (request()->is('/visi-misi')) ? 'active' : '' }}">Visi dan Misi</a></li>
        <li><a href="{{ ('/tupoksi') }}" class="{{ (request()->is('/tupoksi')) ? 'active' : '' }}">Tupoksi</a></li>
        <li><a href="{{ ('/maklumat') }}" class="{{ (request()->is('/maklumat')) ? 'active' : '' }}">Maklumat Pelayanan</a></li>
        <li><a href="{{ ('/program-dan-kegiatan') }}" class="{{ (request()->is('/program-dan-kegiatan')) ? 'active' : '' }}">Program dan Kegiatan</a></li>
        <li><a href="{{ ('/daftar-pegawai') }}" class="{{ (request()->is('/daftar-pegawai')) ? 'active' : '' }}">Daftar Pegawai</a></li>
      </ul>
    </li>
    
    <li class="dropdown"><a href="#"><span>Pelayanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
      <ul>
        <li><a href="{{ ('/penerbitan-dokumen-kartu-keluarga') }}" class="{{ (request()->is('/penerbitan-dokumen-kartu-keluarga')) ? 'active' : '' }}">Penerbitan Dokumen Kartu Keluarga</a></li>
        <li><a href="{{ ('/penerbitan-ktp-elektronik') }}" class="{{ (request()->is('/penerbitan-ktp-elektronik')) ? 'active' : '' }}">Penerbitan KTP Elektronik</a></li>
        <li><a href="{{ ('/penerbitan-kartu-identitas-anak') }}" class="{{ (request()->is('/penerbitan-kartu-identitas-anak')) ? 'active' : '' }}">Penerbitan Kartu Identitas Anak</a></li>
        <li><a href="{{ ('/penerbitan-dokumen-surat-keterangan-pindah-wni') }}" class="{{ (request()->is('/penerbitan-dokumen-surat-keterangan-pindah-wni')) ? 'active' : '' }}">Penerbitan Dokumen Surat Keterangan Pindah WNI</a></li>
        <li><a href="{{ ('/penerbitan-akta-kelahiran') }}" class="{{ (request()->is('/penerbitan-akta-kelahiran')) ? 'active' : '' }}">Penerbitan Akta Kelahiran</a></li>
        <li><a href="{{ ('/penerbitan-akta-pengakuan-anak') }}" class="{{ (request()->is('/penerbitan-akta-pengakuan-anak')) ? 'active' : '' }}">Penerbitan Akta Pengakuan Anak</a></li>
        <li><a href="{{ ('/penerbitan-akta-pengesahan-anak') }}" class="{{ (request()->is('/penerbitan-akta-pengesahan-anak')) ? 'active' : '' }}">Penerbitan Akta Pengesahan Anak</a></li>
        <li><a href="{{ ('/penerbitan-akta-kematian') }}" class="{{ (request()->is('/penerbitan-akta-kematian')) ? 'active' : '' }}">Penerbitan Akta Kematian</a></li>
        <li><a href="{{ ('/penerbitan-akta-perkawinan') }}" class="{{ (request()->is('/penerbitan-akta-perkawinan')) ? 'active' : '' }}">Penerbitan Akta Perkawinan</a></li>
      </ul>
    </li>

    <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
      <ul>
        <li><a href="{{ ('/foto') }}" class="{{ (request()->is('/foto')) ? 'active' : '' }}">Foto</a></li>
        <li><a href="{{ ('/video') }}" class="{{ (request()->is('/video')) ? 'active' : '' }}">Video</a></li>
      </ul>
    </li>

    <li><a class="nav-link scrollto" href="{{ ('/facility') }}" class="{{ (request()->is('/facility')) ? 'active' : '' }}">Fasilitas</a></li>
    <li><a class="nav-link scrollto" href="{{ ('/berita') }}" class="{{ (request()->is('/berita')) ? 'active' : '' }}">Berita</a></li>
    <li><a class="nav-link scrollto" href="{{ ('/download') }}" class="{{ (request()->is('/download')) ? 'active' : '' }}">Dokumen</a></li>
    <li><a class="nav-link scrollto" href="{{ ('/kontak') }}" class="{{ (request()->is('/kontak')) ? 'active' : '' }}">Kontak</a></li>
    <li><a class="nav-link scrollto" href="https://surveiikm.bolmongkab.go.id/" class="{{ (request()->is('/faq')) ? 'active' : '' }}">Survei</a></li>
    <li><a class="nav-link scrollto" href="{{ ('/faq') }}" class="{{ (request()->is('/faq')) ? 'active' : '' }}">Faq</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle d-none"></i>
</nav><!-- .navbar -->

<!-- <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a> -->

</div>