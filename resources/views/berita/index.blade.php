@extends('master')

@section('content')
    <section style="margin-top: 6rem">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2>Berita</h2>
                    @foreach ($beritas as $berita)
                        <div class="card my-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <img class="img-thumbnail img-fluid"
                                            src="{{ empty($berita->jsonFoto) ? '#' : asset('storage/' . $berita->jsonFoto[0]->download_link) }}"
                                            alt="" style="height: 120px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>{{ $berita->judul }}</h3>
                                        <p>{!! $berita->heading !!}</p>
                                        <a href="{{ route('berita.show', ['slug' => $berita->slug]) }}"
                                            class="readmore stretched-link mt-auto"><span>Read More</span>
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $beritas->links() }}
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
    <section>
        <div class="container">

        </div>
    </section>
@endsection
