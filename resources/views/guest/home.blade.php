@extends('layouts.guest')

@section('content')

    <div class="container my-5">
        <h1>Benvenuto nel BoolBloog</h1>
        <h3>Questi sono gli ultimi 10 post della nostra community:</h3>

        <div class="row">

            @foreach ($posts as $post)

                <div class="col-3 mb-3 align-items-stretch d-flex ">
                    <div class="card h-20" style="width: 18rem;">
                        @if ($post->image_path)
                            <img src="{{ asset('storage/' . $post->image_path) }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <div>
                                    <span>Category: {{ $post->category?->name ?? ' - '}}</span>
                                </div>
                                @php
                                    $date = date_create($post->date);
                                @endphp
                                <p>{{ date_format($date, 'd/m/Y') }}</p>
                            </div>
                            <a href="{{ route('post_detail', $post->slug) }}" class="btn btn-primary">Vai</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
