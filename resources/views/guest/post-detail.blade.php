@extends('layouts.guest')

@section('content')

    <div class="container my-5">
        <h1 class="text-center" >{{ $post->title }}</h1>
        <p>Tempo di lettura: {{ $post->reading_time }}</p>
        @if ($post->image_path)
         <img src="{{ asset('storage/' . $post->image_path) }}" class="img-fluid" alt="{{ $post->title }}">
        @endif
        <p>
            {!! $post->text !!}
        </p>
    </div>

@endsection
