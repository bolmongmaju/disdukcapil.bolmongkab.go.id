<div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="{{ ('/') }}">
            <img src="{{ asset ('assets-disdik/img/logo-bolmong.ico') }}" class="black-logo" alt="image">
            <img src="{{ asset ('assets-disdik/img/logo-bolmong.ico') }}" class="white-logo" alt="image">
            {{-- <p>DISDIK</p> --}}
        </a>

        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ ('/') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Profil
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="{{ ('/struktur') }}"
                                class="nav-link {{ (request()->is('/struktur')) ? 'active' : '' }}">
                                Struktur Organisasi
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ ('/visi-misi') }}"
                                class="nav-link {{ (request()->is('/visi-misi')) ? 'active' : '' }}">
                                Visi dan Misi
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ ('/tupoksi') }}"
                                class="nav-link {{ (request()->is('/tupoksi')) ? 'active' : '' }}">
                                Tupoksi
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ ('/program-dan-kegiatan') }}"
                                class="nav-link {{ (request()->is('/program-dan-kegiatan')) ? 'active' : '' }}">
                                Program dan Kegiatan
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ ('/daftar-pegawai') }}"
                                class="nav-link {{ (request()->is('daftar-pegawai')) ? 'active' : '' }}">
                                Daftar Pegawai
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ ('/berita') }}" class="nav-link {{ (request()->is('berita')) ? 'active' : '' }}">
                        Berita
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link {{ (request()->is('/foto' || 'video')) ? 'active' : '' }}">
                        Galeri
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="{{ ('/foto') }}" class="nav-link {{ (request()->is('foto')) ? 'active' : '' }}">
                                Foto
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ ('/video') }}" class="nav-link {{ (request()->is('video')) ? 'active' : '' }}">
                                Video
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ ('/download') }}" class="nav-link {{ (request()->is('download')) ? 'active' : '' }}">
                        File/Dokumen
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ ('/kontak') }}" class="nav-link {{ (request()->is('kontak')) ? 'active' : '' }}">
                        Kontak
                    </a>
                </li>
            </ul>

            <div class="others-options d-flex align-items-center">
                <div class="option-item">
                    <h3>DISDIK</h3>
                </div>
            </div>
        </div>
    </nav>
</div>
</div>

{{-- <div class="others-option-for-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
            </div>
        </div>

        <div class="container">
            <div class="option-inner">
                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <h3>DISDIK</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
