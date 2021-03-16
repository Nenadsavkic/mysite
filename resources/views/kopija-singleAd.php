
@extends('layouts.app')

@section('title')
    {{ $user->name }} single ad
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $user->name }} homepage</h1>
    </div>
@endsection

@section('content')
<div class="container-fluid mt-5">
    <div class="row mb-5">
        <div class="col-md-2 sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-md-6 offset-1">

            <div class="row single-ad">
               @if (isset($ad->image1))
                   <div class="col-6 mt-3 singleAdImg">
                       <img src="/images/add_images/{{ $ad->image1 }}" alt="{{ $ad->title }}" class="img-fluid">
                   </div>
               @endif
               @if (isset($ad->image2))
                    <div class="col-6 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image2 }}" alt="{{ $ad->title }}" class="img-fluid">
                    </div>
               @endif
               @if (isset($ad->image3))
                    <div class="col-6 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image3 }}" alt="{{ $ad->title }}" class="img-fluid">
                    </div>
               @endif
               @if (isset($ad->image4))
                    <div class="col-6 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image4 }}" alt="{{ $ad->title }}" class="img-fluid">
                    </div>
               @endif
               @if (isset($ad->image5))
                    <div class="col-6 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image5 }}" alt="{{ $ad->title }}" class="img-fluid">
                    </div>
               @endif
               <div class="container">
                   <div class="row">
                       <div class="col-md-12 text-center mt-5">

                            <h2>{{ $ad->title }} <span class="btn btn-success float-left">{{ $ad->category->name }}</span>
                                <a href="{{ route('home.adEditForm', ['id'=>$ad->id]) }}" class="btn btn-secondary float-right">Edit ad</a> </h2>
                            <p class="mt-5">{{ $ad->body }}</p>
                            <button class="btn btn-primary float-left mt-5"> Price: {{ $ad->price }} eur</button>

                            <form action="{{ route('home.adDelete', ['id'=>$ad->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-small btn-danger float-right mt-5">
                                Delete ad</button>
                            </form>


                       </div>
                   </div>
                </div>
            </div>







        </div>

    </div>
</div>
@endsection
