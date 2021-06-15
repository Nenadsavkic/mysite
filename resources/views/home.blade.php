
@extends('layouts.app')

@section('title')
    {{ $user->name }} homepage
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $user->name }} homepage</h1>
    </div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-5 mb-5">
	   <div class=" col-md-8 offset-md-2 col-lg-2 offset-lg-1  sidebar">
           
	      @include('layouts.partials.sidebar')
          
           </div>
        
        <div class="col-sm-8 offset-sm-2 col-md-10 offset-md-1 col-lg-7 offset-lg-1">
            <div class="ml-5 mt-5">
	       <h2 class="ml-md-5 ml-lg-0">Here you can see all your ads.</h2>
            </div>

            @if (session())
               @include('layouts.partials.flashMessages')
            @endif

            <div class="row">

                @foreach ($user_ads as $ad)

                    {{-- card --}}
                    <div class="col-md-6">
                        <a class="text-decoration-none text-muted" href="{{ route('home.singleAd', ['id'=>$ad->id])}}">
                         <div class="card text-center mt-5">
                             <img src="/images/add_images/{{ $ad->image1 }}" class="card-img-top img-fluid" alt="...">
                             <div class="card-body">
                               <h5 class="card-title">{{ $ad->title }}</h5>
                               <p class="card-text">{{ $ad->body }}</p>
                               <button class="btn btn-primary float-left ">Category: {{ $ad->category->name }}</button>
                               <button class="btn btn-danger float-right">Price: {{ $ad->price }} eur</button>

                             </div>
                           </div>
                        </a>
                    </div>

                    {{-- card end --}}

                @endforeach

            </div>

        </div>
    </div>
</div>
@endsection
