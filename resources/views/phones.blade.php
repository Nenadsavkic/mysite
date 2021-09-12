@extends('layouts.app')

@section('title')
    Phones
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light p-2">Phones</h1>
    </div>
@endsection

@section('content')

@include('layouts.partials.carouselPhones')

<div class="container-fluid bg-dark text-light mt-3 text-center p-3">
    <h2>Welcome to Phones Ads</h2>
</div>

<div class="container mb-5 mt-3">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('phones') }}">
                <label for="type">Sort Phones by price:</label>
                <select name="type" class="form-control">
                    <option value=""></option>
                    <option value="lower">Price ascending</option>
                    <option value="higher">Price descending</option>
                </select>
                <button type="submit" class="btn btn-secondary mt-1 mb-5">Apply</button>
            </form>
        </div>
	@foreach ($phones as $phone)
	<div class="col-sm-12 col-md-6 col-lg-4 mb-5">
        <a class="text-decoration-none text-muted ml-3" href="{{ route('ad.singleAd', ['id'=>$phone->id]) }}">
           
            <div class="card text-center mt-5">
                <img src="/images/add_images/{{ $phone->image1 }}" class="card-img-top mainAddImg" alt="...">
                <div class="card-body">
                  <h5 class="card-title pt-5 pb-5">{{ $phone->title }}</h5>
                  
                  <button class="btn btn-primary float-left ">Views: {{ $phone->views }}</button>
                  <button class="btn btn-danger float-right">Price: {{ $phone->price }} eur</button>

                </div>
              </div>
          
	</a>
      </div>
      @endforeach
    </div>


</div>

@endsection
