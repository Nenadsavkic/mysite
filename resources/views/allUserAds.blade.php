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

            <div class=" col-md-12  ">

                <h2 class="mt-5">Here you can see all ads from {{ $user->name }}</h2>

            </div>
            <div class="col-md-4">

                <img
                @if (isset($user->user_image))
                src="{{ asset('/storage/images/'.$user->user_image) }}"
                @else
                src="/images/user_image/noimage.jpg"
                @endif
                alt="user_image" class=" img-responsive img-fluid mt-5 rounded" style="height:300px"  title="Add new image">

            </div>
            <div class="col-md-8 card mt-5 pb-4">
                <p class="mt-5 ml-5"> <b> Cotact data of user {{ $user->name }}</b></p>
                <p class="mt-5 ml-5"> <b> Email: </b>{{ $user->email }}</p>
                <p class="mt-5 ml-5"> <b> Phone: </b> 06x xxx xxx</p>
            </div>




        </div>

        <div class="row">


            @foreach ($userAds as $ad)

                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <a class="text-decoration-none text-muted ml-3" href="{{ route('ad.singleAd', ['id'=>$ad->id]) }}">
                        <div class="card text-center mt-5">
                            <img src="/images/add_images/{{ $ad->image1 }}" class="card-img-top mainAddImg" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pt-5 pb-5">{{ $ad->title }}</h5>
                           
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





