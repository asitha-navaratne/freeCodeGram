@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://archive.org/download/github.com-freeCodeCamp-chapter_-_2019-10-19_07-29-14/cover.jpg" alt="Profile picture" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline ps-5">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="ps-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="ps-5"><strong>1.1k</strong> followers</div>
                <div class="ps-5"><strong>832</strong> following</div>
            </div>
            <div class="pt-4 ps-5 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="ps-5">{{ $user->profile->description }}</div>
            <div class="ps-5"><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="Post" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
