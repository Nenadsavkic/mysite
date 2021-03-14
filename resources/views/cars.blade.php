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
        <div class="col-md-6 offset-3">
            <form action="{{ route('cars') }}">
                <label for="type">Select Cars by price:</label>
                <select name="type" class="form-control">
                    <option value=""></option>
                    <option value="lower">Price ascending</option>
                    <option value="higher">Price descending</option>
                </select>
                <button type="submit" class="btn btn-secondary mt-1">Apply</button>
            </form>
        </div>
      @foreach ($cars as $car)
        <a class="text-decoration-none text-muted" href="{{ route('ad.singleAd', ['id'=>$car->id])}}">
           <div class="col-md-4 pl-5">
            <div class="card text-center mt-5 " style="width: 25rem;">
                <img src="/images/add_images/{{ $car->image1 }}" class="card-img-top mainAddImg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $car->title }}</h5>
                  <p class="card-text">{{ $car->body }}</p>
                  <button class="btn btn-primary float-left ">Owner: {{ $car->user->name }}</button>
                  <button class="btn btn-danger float-right">Price: {{ $car->price }} eur</button>

                </div>
              </div>
           </div>
        </a>
      @endforeach
    </div>


</div>

@endsection
