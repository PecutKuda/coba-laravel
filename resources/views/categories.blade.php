
@extends('layouts.main')

@section('container')
    <h1>Post Category</h1>

    <div class="container">
        <div class="row">

            @foreach ($categories as $category)
                {{-- col-md-4 sediakan 3 kolom ke samping, kalau lebih dibuat dibawah --}}
                <div class="col-md-4">

                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center">
                            <h3 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.718)">{{ $category->name }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
