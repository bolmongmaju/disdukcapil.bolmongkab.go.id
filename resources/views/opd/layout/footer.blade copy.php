<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget">
                <a href="#">
                    <img src="assets-disdik/img/kantor-bupati.png" alt="image">
                </a>
                <p>{{ $contact->alamat ?? null }}.</p>

                <ul class="social">
                    <li>
                        @forelse ($sosmeds as $sosmed)
                        <a href="{{ $sosmed->url }}" class="{{ $sosmed->name }}" target="_blank">
                            <i class='{{ $sosmed->icon }}'></i>
                        </a>
                        @empty
                        <p>isi dengan sosial media</p>
                        @endforelse
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget">
                <h2>Berita Terbaru</h2>

                @foreach ($latestnews as $news)
                <div class="post-content">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="post-image">
                                <a href="#">
                                    <img src="{{$news->image}}" alt="image">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <h4>
                                <a href="{{ route('berita-detail',$news->id) }}">{{$news->title}}</a>
                            </h4>
                            <span>{{ \Carbon\Carbon::parse($news->created_at)->diffForhumans() }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget">
                <h2>Link Terkait</h2>

                <ul class="useful-links-list">
                    @forelse ($links as $link)
                    <li>
                        <a href="{{$link->url}}">{{$link->name}}</a>
                    </li>
                    @empty
                    <p>isi dengan link</p>
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget">
                <h2>Cari Berita</h2>

                <div class="widget-subscribe-content">
                    <p>Cari dan temukan berita seputar bolaang mongondow.</p>

                    <form action="{{ ('/berita-cari') }}" method="GET" class="newsletter-form">
                        <input type="text" class="input-newsletter" placeholder="Masukan judul berita"
                        value="{{ request()->get('cari') }}"
                        name="cari" required>

                        <button type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>