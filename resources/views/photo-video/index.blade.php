@extends('master')

@section('content')
    <section style="margin-top: 6rem">
        <div class="container">
            <h2>List Photo Video</h2>
            <div class="row">
                @foreach ($albums as $album)
                    <div class="col-12 col-md-3">
                        <a href="{{ route('photo-video.show', ['id' => $album->id]) }}" style="color: black">
                            <div class="card">
                                <div class="card-body">
                                    <h3><strong>{{ $album->judul }}</strong></h3>
                                    <img src="{{ 'storage/' . $album->jsonFiles()[0] }}" alt="" class="img-fluid">
                                    <div class="row">
                                        @for ($i = 1; $i < 4; $i++)
                                            @if (isset($album->jsonFiles()[$i]))
                                                <img src="{{ 'storage/' . $album->jsonFiles()[$i] }}" alt=""
                                                    class="img-fluid col-4">
                                            @endif
                                        @endfor
                                    </div>
                                    <em>{{ $album->deskripsi }}</em>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
