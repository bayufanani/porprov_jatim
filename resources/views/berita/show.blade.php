@extends('master')
@section('og:title', 'Porprov Jatim - ' . $berita->judul)
@section('og:image', asset('storage/' . $berita->jsonFoto[0]->download_link))
@section('content')
    <section style="margin-top: 6rem">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2>{{ $berita->judul }}</h2>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="{{ asset('storage/' . $berita->jsonFoto[0]->download_link) }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="text-center"><i>{{ $berita->foto_detail }}</i></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <i>{{ date('d M Y', strtotime($berita->created_at)) }} - {{ $berita->user->name }}</i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{!! $berita->heading !!}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{!! $berita->isi !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <!-- Facebook Social Media -->
                            <a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <!-- LinkedIn Social Media -->
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}"
                                target="_blank">
                                <i class="ri-linkedin-line"></i>
                            </a>
                            <!-- Twitter Social Media -->
                            <a href="https://twitter.com/share?url={{ url()->current() }}" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <!-- Wa -->
                            <a href="whatsapp://send?text={{ url()->current() }}" target="_blank"
                                class="d-inline-block d-md-none">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                            <a href="https://web.whatsapp.com://send?text={{ url()->current() }}" target="_blank"
                                class="d-none d-md-inline-block">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h2>Highlight</h2>
                    @foreach ($highlights as $berita)
                        <div class="card my-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <img class="img-thumbnail img-fluid"
                                            src="{{ empty($berita->jsonFoto) ? '#' : asset('storage/' . $berita->jsonFoto[0]->download_link) }}"
                                            alt="" style="height: 120px">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 style="font-size: 1rem">{{ $berita->judul }}</h3>
                                        <p>{!! $berita->heading !!}</p>
                                        <a href="{{ route('berita.show', ['slug' => $berita->slug]) }}"
                                            class="readmore stretched-link mt-auto"><span>Read More</span>
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection
