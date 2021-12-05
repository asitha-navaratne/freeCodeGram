@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://archive.org/download/github.com-freeCodeCamp-chapter_-_2019-10-19_07-29-14/cover.jpg" alt="Profile picture" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="ps-5"><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="ps-5"><strong>153</strong> posts</div>
                <div class="ps-5"><strong>1.1k</strong> followers</div>
                <div class="ps-5"><strong>832</strong> following</div>
            </div>
            <div class="pt-4 ps-5 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="ps-5">{{ $user->profile->description }}</div>
            <div class="ps-5"><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202012/chris-ried-ieic5Tq8YMk-unsplas_1200x768.jpeg?bEhcYQAShJnLf0Mtu4JYq8YzICfhz2rB&size=770:433" alt="Post" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.eschoolnews.com/files/2021/02/coding-platform-STEM-code.jpg" alt="Post" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.gettingsmart.com/wp-content/uploads/2017/06/Program-Code-Feature-Image.jpg" alt="Post" class="w-100">
        </div>
    </div>
</div>
@endsection
