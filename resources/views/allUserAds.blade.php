@extends('layouts.app')

@section('title')
    All ads from {{ $user->name }}
@endsection

@section('content-title')
<div class="container justify-content-center">
    <h1 class="text-light">All ads from {{ $user->name }}</h1>
</div>
@endsection

@section('content')

    <div class="container">


        <div class="row">

            <div class=" col-xs-8 offset-xs-2 col-md-6  ">

                <h2 class="mt-5">Here you can see all ads from {{ $user->name }}</h2>

                <img
                @if (isset($user->user_image))
                src="{{ asset('/storage/images/'.$user->user_image) }}"
                @else
                src="/images/user_image/noimage.jpg"
                @endif
                alt="user_image" class=" img-responsive mt-5 rounded" style="width:300px"  title="Add new image">

            </div>

        </div>

        <div class="row">


            @foreach ($userAds as $ad)

                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <a class="text-decoration-none text-muted ml-3" href="{{ route('ad.singleAd', ['id'=>$ad->id]) }}">
                        <div class="card text-center mt-5">
                            <img src="/images/add_images/{{ $ad->image1 }}" class="card-img-top mainAddImg" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $ad->title }}</h5>
                            <p class="card-text">{{ $ad->body }}</p>
                            <button class="btn btn-primary float-left">Views: {{ $ad->views }}</button>
                            <button class="btn btn-danger float-right">Price: {{ $ad->price }} eur</button>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach


        </div>



    </div>

@endsection




