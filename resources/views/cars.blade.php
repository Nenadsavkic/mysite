@extends('layouts.app')

@section('title')
    Cars
@endsection

@section('content-title')
       <div class="container justify-content-center">

        <div class="row header">
            <div class="myDesigns col-12 col-lg-2 text-center mt-2">
                <a href="https://www.redbubble.com/people/nenad00x/shop?asc=u&ref=account-nav-dropdown"
                    target="blank">
                        <h4></h4></a>
            </div>

              <h1 class="text-light col-12 col-md-8 offset-md-2 col-lg-8 offset-lg-0 text-center">
                  Cars</h1>

            <div class="myDesigns col-12 col-lg-2 text-center mt-2">
                <a href="https://www.redbubble.com/people/nenad00x/shop?asc=u&ref=account-nav-dropdown"
                   target="blank">
                        <h4></h4></a>
            </div>
        </div>



    </div>
@endsection

@section('content')

@include('layouts.partials.carouselCars')

<div class="container-fluid bg-dark text-light mt-3 text-center p-3">
    <h2>Welcome to Cars Ads</h2>
</div>

@include('layouts.partials.searchCars')


<div class="container mb-5 mt-5">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('cars') }}">
                <label for="type">Sort Cars by price:</label>
                <select name="type" class="form-control">
                    <option value=""></option>
                    <option value="lower">Price ascending</option>
                    <option value="higher">Price descending</option>
                </select>
                <button type="submit" class="btn btn-secondary mt-1 mb-5">Apply</button>
            </form>
        </div>
	@foreach ($cars as $car)
	<div class="col-sm-12 col-md-6 col-lg-4 mb-5">
        <a class="text-decoration-none text-muted ml-3" href="{{ route('ad.singleAd', ['id'=>$car->id])}}">
           
            <div class="card text-center mt-5">
                <img src="/images/add_images/{{ $car->image1 }}" class="card-img-top mainAddImg" alt="...">
                <div class="card-body">
                  <h5 class="card-title pt-5 pb-5">{{ $car->title }}</h5>
                  
                  <button class="btn btn-primary float-left ">Views: {{ $car->views }}</button>
                  <button class="btn btn-danger float-right">Price: {{ $car->price }} eur</button>

                </div>
              </div>
           
	</a>
       </div>
      @endforeach
    </div>
      
   @if ($cars->count() == 0 && request()->search_text == true)
        <div class="alert alert-primary">
            <p class="text-center mt-2">Sorry, your search has no result. Please try again.</p>
        </div>
    @endif

</div>

@endsection
