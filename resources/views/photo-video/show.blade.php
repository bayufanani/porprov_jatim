@extends('master')

@section('content')
    <section style="margin-top: 6rem">
        <div class="container">
            <h1>Foto Video</h1>
            <h3><strong>{{ $album->judul }}</strong></h3>
            <p>{{ $album->deskripsi }}</p>
            <div class="row">
                @foreach ($album->jsonFiles as $file)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('storage/' . $file) }}" alt="" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
