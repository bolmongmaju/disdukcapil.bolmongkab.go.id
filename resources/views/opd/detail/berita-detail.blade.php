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
                    <h2>Berita Detail</h2>
                    <ol>
                        <li><a href="{{ ('/') }}">Beranda</a></li>
                        <li>Berita Detail</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{$posts->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{$posts->title}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>{{$posts->user->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="{{$posts->created_at}}">{{ \Carbon\Carbon::parse($posts->created_at)->diffForhumans() }}</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                    {!! nl2br(($posts->body)) !!}
                </p>
             

              </div><!-- End post content -->

              {{-- <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End meta bottom --> --}}

            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="{{ ('/berita-cari') }}" method="GET" class="mt-3">
                  <input type="text" value="{{ request()->get('cari') }}" name="cari">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Kategori</h3>
                <ul class="mt-3">
                    @foreach ($kategori as $item)
                  <li><a href="{{ route('cari-kategori', $item->id) }}">{{$item->name}} <span>({{$item->news->count()}})</span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">
                    @forelse ($latestposts as $item)
                  <div class="post-item mt-3">
                    <img src="{{$item->image}}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="{{ route('berita-detail',$item->id) }}">{{$item->title}}</a></h4>
                      <time datetime="{{$item->created_at}}">{{ \Carbon\Carbon::parse($posts->created_at)->diffForhumans() }}</time>
                    </div>
                  </div><!-- End recent post item-->
                  @empty
                  <p>Belum ada Berita</p>
                  @endforelse
                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                    @foreach ($tags as $item)
                  <li><a href="{{ route('cari-tag', $item->id) }}">{{$item->name}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @include('opd.layout.footer')
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @include('opd.layout.script')

</body>

</html>