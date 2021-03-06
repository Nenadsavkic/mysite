
@extends('layouts.app')

@section('title')
    {{ $ad->title }}
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $ad->title }} </h1>
    </div>
@endsection

@section('content')



    <div class="container">

        @if (session())
        @include('layouts.partials.flashMessages')
     @endif

        <div class="row mt-5 mb-5">

            <div id="carouselSingleAd" class="col-md-12 carousel slide ml-1" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselSingleAd" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselSingleAd" data-slide-to="1"></li>
                  <li data-target="#carouselSingleAd" data-slide-to="2"></li>
                  <li data-target="#carouselSingleAd" data-slide-to="3"></li>
                  <li data-target="#carouselSingleAd" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    @if (isset($ad->image1))
                        <div class="carousel-item active">
                            <img src="/images/add_images/{{ $ad->image1 }}" class="d-block w-100" alt="Image 1">
                        </div>
                    @endif
                    @if (isset($ad->image2))
                        <div class="carousel-item">
                            <img src="/images/add_images/{{ $ad->image2 }}" class="d-block w-100" alt="Image 2">
                        </div>
                    @endif
                    @if (isset($ad->image3))
                        <div class="carousel-item">
                            <img src="/images/add_images/{{ $ad->image3 }}" class="d-block w-100" alt="Image 3">
                        </div>
                    @endif
                    @if (isset($ad->image4))
                        <div class="carousel-item">
                            <img src="/images/add_images/{{ $ad->image4 }}" class="d-block w-100" alt="Image 4">
                        </div>
                    @endif
                    @if (isset($ad->image5))
                        <div class="carousel-item">
                            <img src="/images/add_images/{{ $ad->image5 }}" class="d-block w-100" alt="Image 5">
                        </div>
                    @endif

                </div>
                <a class="carousel-control-prev" href="#carouselSingleAd" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </a>
                <a class="carousel-control-next" href="#carouselSingleAd" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>

                </a>
              </div>


                @if (isset($ad->image1))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid"  src="/images/add_images/{{ $ad->image1 }}" alt="">
                </div>
                @endif
                @if (isset($ad->image2))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image2 }}" alt="">
                </div>
                @endif
                @if (isset($ad->image3))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image3 }}" alt="">
                </div>
                @endif
                @if (isset($ad->image4))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image4 }}" alt="">
                </div>
                @endif
                @if (isset($ad->image5))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image5 }}" alt="">
                </div>
                @endif

                <div class="col-md-12 ad-data mt-5">
                    <article class="text-center mt-5">
                        <h2>{{ $ad->title }} <span class="btn btn-success float-right"> Category: {{ $ad->category->name }}</span>
                        <span class="btn btn-primary float-left"> Owner: {{ $ad->user->name }}</span></h2>
                        <p class="mt-5">{{ $ad->body }}</p>
                        <button class="btn btn-danger float-left mt-5">Price: {{ $ad->price }} eur</button>
                        <button class="btn btn-primary float-right mt-5"> Views: {{ $ad->views }}</button>
                        <form action="#" method="post">

                        </form>

                    </article>

                </div>
                @if (auth()->user() && auth()->user()->id !== $ad->user_id)
                    <div class="col-md-6 offset-md-3 mt-5">
                        <a href="{{ route('allUserAds', ['id'=>$ad->user_id]) }}" class="btn btn-success float-right">Show all ads of this user</a>
                        <h2>Send message to {{ $ad->user->name }}</h2>
                        <form action="{{ route('home.userMessage', ['id'=>$ad->id]) }}" method="POST">
                        @csrf
                        <label for="title"><b>Title:</b></label>
                        <input type="text" name="title" class="form-control forms" placeholder="Title">
                        <input type="hidden" name="ad_name">
                        <label for="body" class="mt-1"><b>Message:</b></label>
                        <textarea name="body" cols="30" rows="10" class="form-control forms" placeholder="Write your message"></textarea><br>
                        <button type="submit" class="form-control form-button text-light">Send message</button>

                    </form>
                </div>
                @endif



        </div>
    </div>
@endsection
