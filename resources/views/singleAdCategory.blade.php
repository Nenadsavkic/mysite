
@extends('layouts.master')

@section('title')
    {{ $ad->title }}
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $ad->title }} </h1>
    </div>
@endsection

@section('main')



    <div class="container">

        <div class="row mt-5 mb-5">


                @if (isset($ad->image1))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid"  src="/images/add_images/{{ $ad->image1 }}" alt="" class="img-fluid">
                </div>
                @endif
                @if (isset($ad->image2))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image2 }}" alt="" class="img-fluid">
                </div>
                @endif
                @if (isset($ad->image3))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image3 }}" alt="" class="img-fluid">
                </div>
                @endif
                @if (isset($ad->image4))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image4 }}" alt="" class="img-fluid">
                </div>
                @endif
                @if (isset($ad->image5))
                <div class="col-md-4 mt-5">
                    <img class="category-img img-fluid" src="/images/add_images/{{ $ad->image5 }}" alt="" class="img-fluid">
                </div>
                @endif

                <div class="col-md-12">
                    <article class="text-center mt-5">
                        <h2>{{ $ad->title }} <span class="btn btn-success float-right"> Category: {{ $ad->category->name }}</span>
                        <span class="btn btn-primary float-left"> Owner: {{ $ad->user->name }}</span></h2>
                        <p class="mt-5">{{ $ad->body }}</p>
                        <button class="btn btn-danger float-left mt-5">Price: {{ $ad->price }} eur</button>
                        <button class="btn btn-primary float-right mt-5"> Views: {{ $ad->counter }} 200</button>
                        <form action="#" method="post">

                        </form>

                    </article>

                </div>



        </div>
    </div>
@endsection
