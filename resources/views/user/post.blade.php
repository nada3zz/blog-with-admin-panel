@extends('user/app')

@section('bg-img', asset('user/assets/img/post-bg.jpg'))
@section('title', $post->title)
@section('sub-heading', $post->subtitle)

@section('main-content')
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <small>Created at: {{ $post->created_at->diffForHumans()}}</small>
                        @foreach ($post->categories as $category)
                        <small style="margin-left: 20px; margin-right:5px" class="bg-info text-uppercase"> {{ $category->name}}</small>
                        @endforeach
                         {!! htmlspecialchars_decode($post->body) !!}

                     <h1>Tag clouds</h1>
                     @foreach ($post->tags as $tag)
                     <small style="margin-right:5px" class="btn btn-secondary text-uppercase"> {{ $tag->name }}</small>
                     @endforeach
                    </div>
                </div>
            </div>
        </article>

@endsection
