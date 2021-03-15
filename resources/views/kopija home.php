
@extends('layouts.master')

@section('title')
    {{ $user->name }} homepage
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $user->name }} homepage</h1>
    </div>
@endsection

@section('main')
<div class="container-fluid">
    <div class="row mt-5 mb-5">
        <div class="col-md-2 sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-md-6 offset-1">
            <div class="ml-5">
                <h2 class="ml-5 pl-4">Here you can see all your ads.</h2>
            </div>
            @if (session())
               @include('layouts.partials.flashMessages')

            @endif

            <div class="row mt-5">
                @foreach ($user_ads as $ad)
                {{-- <div class="col-md-4 offset-1 ml-5 main-content mt-3"> --}}
                    {{-- card --}}
                    <div class="  col-md-5 offset-1  ">
                        <a class="text-decoration-none text-muted" href="{{ route('home.singleAd', ['id'=>$ad->id])}}">

                         <div class="card text-center mt-5 " style="width: 22rem;">
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
                 {{-- </div> --}}
                @endforeach

            </div>

        </div>
    </div>
</div>
@endsection
