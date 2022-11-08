@extends('layouts.main')

@section('container')
    <article>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <p>
                        By. <a class="text-decoration-none" href="/posts?user={{ $post->user->username }}"> {{ $post->user->name }}</a>
                        in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </p>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">

                    <article class="my-3 fs-5">
                        {{-- Menggunakan tag seperti dibawah.. agar saat display, tag html pada text dapat dijalankan --}}
                        {!! $post->body !!}
                    </article>
                    <a class="d-flex-block my-3 btn btn-primary" href="/posts">Back to posts</a>
                </div>
            </div>
        </div>
    </article>

@endsection
