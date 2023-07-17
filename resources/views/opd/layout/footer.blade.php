<div class="footer-content">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                    <h3>DISDUKCAPIL</h3>
                    <p>
                        {{ $contact->alamat ?? null }}<br><br>
                        <strong>Phone:</strong> {{ $contact->no_telp ?? null }}<br>
                        <strong>Email:</strong> {{ $contact->email ?? null }}<br>
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Link Terkait</h4>
                <ul>
                    @forelse ($links as $link)
                    <li><i class="bi bi-chevron-right"></i> <a href="{{$link->url}}">{{$link->name}}</a></li>
                    @empty
                    <p>isi dengan link</p>
                    @endforelse
                </ul>
            </div>

            {{-- <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div> --}}

            <div class="col-lg-7 col-md-6 footer-newsletter">
                <h4>Pencarian Berita</h4>
                <p>Cari dan temukan berita seputar bolaang mongondow.</p>
                <form action="{{ ('/berita-cari') }}" method="GET">
                    <input type="text" name="cari"><input type="submit" value="Cari{{ request()->get('cari') }}">
                </form>

            </div>

        </div>
    </div>
</div>

<div class="footer-legal text-center">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
            <div class="copyright">
                &copy; Copyright <strong><span>DISDUKCAPIL</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                Designed by <a href="#">E-Government</a>
            </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            @forelse ($sosmeds as $sosmed)
            <a href="{{ $sosmed->url }}" class="{{ $sosmed->name }}"><i class="bi bi-{{ $sosmed->name }}"></i></a>
            @empty
            <p>isi dengan sosial media</p>
            @endforelse
        </div>
    </div>
</div>
