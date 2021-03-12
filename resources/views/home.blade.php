
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
<div class="container-fluid m-2">
    <div class="row mt-5 mb-5">
        <div class="col-md-2 sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-md-6 offset-1">
            <div class="ml-5">
                <h2 class="ml-5">Here you can see all your ads.</h2>
            </div>

            <div class="row mt-5">
                @foreach ($user_ads as $ad)
                <div class="col-md-6 main-content mt-3">
                    {{-- card --}}
                     <div class="card text-center">
                         <div class="card-header">
                            {{ $ad->category->name }}
                         </div>
                         <div class="card-body">
                           <h3 class="card-title">{{ $ad->title }}</h3>
                           <p class="card-text mt-4">{{ $ad->body }}</p>
                           <a href="{{ route('home.singleAd',['id' => $ad->id]) }}" class="btn btn-primary">Show more</a>
                         </div>
                         <div class="card-footer text-muted">
                            <button class="btn btn-primary btn-small float-left">Price: {{ $ad->price }} eur</button>
                            <button class="btn btn-warning btn-small float-right">Created: {{ $ad->created_at->format('d M Y') }}</button>
                         </div>
                     </div>
                    {{-- card end --}}
                 </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
@endsection
