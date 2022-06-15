@extends('master')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Porprov JATIM</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">2022</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ route('berita.index') }}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Berita Lengkap</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <!-- ======= Highlight Blog Posts Section ======= -->
    <section id="highlight-blog-posts" class="highlight-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Berita</h2>
                <p>Highlight Berita</p>
            </header>

            <div class="row">
                @foreach ($highlight as $item)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img">
                                <img src="{{ empty($item->jsonFoto) ? asset('assets/img/default.webp') : asset('storage/' . $item->jsonFoto[0]->download_link) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <span class="post-date"></span>
                            <h3 class="post-title">{{ $item->judul }}</h3>
                            <a href="{{ route('berita.show', ['slug' => $item->slug]) }}"
                                class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Berita</h2>
                <p>Berita terbaru</p>
            </header>

            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img">
                                <img src="{{ empty($item->jsonFoto) ? asset('assets/img/default.webp') : asset('storage/' . $item->jsonFoto[0]->download_link) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <span class="post-date"></span>
                            <h3 class="post-title">{{ $item->judul }}</h3>
                            <a href="{{ route('berita.show', ['slug' => $item->slug]) }}"
                                class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->
@endsection
