@extends('layouts.app')

@section('title')
    Computers
@endsection

@section('content-title')
    <div class="container justify-content-center p-2">
        <h1 class="text-light p-2">Computers</h1>
    </div>
@endsection

@section('content')

@include('layouts.partials.carouselComputers')

<div class="container-fluid bg-dark text-light mt-3 text-center p-3">
    <h2>Welcome to Computers Ads</h2>
</div>


<div class="container-fluid mb-5 mt-5">

    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="{{ route('computers') }}">
                <label for="type">Sort Computers by price:</label>
                <select name="type" class="form-control">
                    <option value=""></option>
                    <option value="lower">Price ascending</option>
                    <option value="higher">Price descending</option>
                </select>
                <button type="submit" class="btn btn-secondary mt-1">Apply</button>
            </form>
        </div>
      @foreach ($computers as $computer)
        <a class="text-decoration-none text-muted ml-3" href="{{ route('ad.singleAd', ['id'=>$computer->id]) }}">
           <div class="col-md-4 ml-5 mb-5">
            <div class="card text-center mt-5 " style="width: 25rem;">
                <img src="/images/add_images/{{ $computer->image1 }}" class="card-img-top mainAddImg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $computer->title }}</h5>
                  <p class="card-text">{{ $computer->body }}</p>
                  <button class="btn btn-primary float-left">Views: {{ $computer->views }}</button>
                  <button class="btn btn-danger float-right">Price: {{ $computer->price }} eur</button>
                </div>
              </div>
           </div>
        </a>
      @endforeach
    </div>


</div>

@endsection
