
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
                   <div class="col-10 offset-1 mt-3 singleAdImg">
                       <img id="mainImg" src="/images/add_images/{{ $ad->image1 }}" class="img-fluid large-img" style="height: 500px">
                   </div>
               @endif
               @if (isset($ad->image2))
                    <div class="col-5  offset-1 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image2 }}" class="img-fluid thumb small-img" style="width: 100%">
                    </div>
               @endif
               @if (isset($ad->image3))
                    <div class="col-5 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image3 }}" class="img-fluid thumb small-img" style="width: 100%">
                    </div>
               @endif
               @if (isset($ad->image4))
                    <div class="col-5 offset-1 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image4 }}" class="img-fluid thumb small-img" style="width: 100%">
                    </div>
               @endif
               @if (isset($ad->image5))
                    <div class="col-5 mt-3 singleAdImg">
                        <img src="/images/add_images/{{ $ad->image5 }}" class="img-fluid thumb small-img" style="width: 100%">
                    </div>
               @endif
               <div class="container">
                   <div class="row">
                       <div class="col-md-12 text-center mt-5 ad-data">

                            <h2>{{ $ad->title }} <span class="btn btn-success float-left">{{ $ad->category->name }}</span>
                                <a href="{{ route('home.adEditForm', ['id'=>$ad->id]) }}" class="btn btn-secondary float-right">Edit ad</a> </h2>
                            <p class="mt-5">{{ $ad->body }}</p>
                            <button class="btn btn-primary float-left mt-5"> Price: {{ $ad->price }} eur</button>

                            <form action="{{ route('home.adDelete', ['id'=>$ad->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure you want to delete this ad?');" type='submit' class="btn btn-small btn-danger float-right mt-5">
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

@section('page-scripts')

   <script>

       let thumbs = document.querySelectorAll('.thumb');
       for (let i = 0; i < thumbs.length; i++){
           const thumb = thumbs[i];
           thumb.addEventListener('click', function () {

                let mainImg = document.querySelector('#mainImg');
                let mainImgSrc = mainImg.getAttribute('src');
                let src = this.getAttribute('src');
                mainImg.setAttribute('src', src);
                this.setAttribute('src', mainImgSrc);

        })
       }

   </script>

@endsection
