@extends('master')

@section('content')
    <section style="margin-top: 6rem">
        <div class="container">
            <h2>Berita</h2>
            @foreach ($beritas as $berita)
                <div class="card my-2" style="height: 170px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 text-center">
                                <img class="img-thumbnail img-fluid"
                                    src="{{ empty($berita->jsonFoto) ? '#' : asset('storage/' . $berita->jsonFoto[0]->download_link) }}"
                                    alt="" style="height: 120px">
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $berita->judul }}</h3>
                                <a href="{{ route('berita.show', ['slug' => $berita->slug]) }}"
                                    class="readmore stretched-link mt-auto"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section>
        <div class="container">
            {{ $beritas->links() }}
        </div>
    </section>
@endsection
