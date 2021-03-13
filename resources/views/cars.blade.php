@extends('layouts.master')

@section('title')
    Cars
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light p-2">Cars</h1>
    </div>
@endsection

@section('main')

@include('layouts.partials.carouselCars')

<div class="container-fluid bg-dark text-light mt-3 text-center p-3">
    <h2>Welcome to Cars Ads</h2>
</div>

<div class="container-fluid mb-5 mt-5">

    <div class="row">
      @foreach ($cars as $car)

           <div class="col-md-4 pl-5">
            <div class="card text-center mt-5 " style="width: 25rem;">
                <img src="/images/add_images/{{ $car->image1 }}" class="card-img-top mainAddImg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $car->title }}</h5>
                  <p class="card-text">{{ $car->body }}</p>
                  <a href="{{ route('ad.singleAd', ['id'=>$car->id]) }}" class="btn btn-primary float-left ">Show more</a>
                  <button class="btn btn-success float-right">Views: 200</button>

                </div>
              </div>
           </div>

      @endforeach
    </div>


</div>

@endsection
