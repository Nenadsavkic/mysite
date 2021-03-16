
@extends('layouts.app')

@section('title')
    Edit Add form
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $user->name }} homepage</h1>
    </div>
@endsection

@section('content')
<div class="container-fluid m-2">
    <div class="row mt-5 mb-5">
        <div class="col-md-2 sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-md-8">


            <div class="row">

                <div class="col-md-8 offset-3 mt-3">
                   <h2 class="ml-5 pl-5">Edit ad form</h2><br><br>
                 <form action="{{ route('home.saveEditedAd', ['id' => $ad->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <label for="title"><b>Ad Tile:</b></label>
                   <input type="text" name="title" value="{{ $ad->title }}" class="form-control forms" placeholder="Title"><br>
                   <label for="body"><b>Ad description:</b></label>
                   <textarea name="body" cols="30" rows="10" placeholder="Ad description" class="form-control forms">
                       {{ $ad->body }}
                  </textarea><br>
                   <label for="price"><b>Price:</b></label>
                   <input type="number" name="price" value="{{ $ad->price }}" placeholder="Add price" class="form-control forms  ">
                   <p><b>Add images for your ad:</b></p>
                   <input type="file" name="image1" class="form-control forms"><br>
                   <input type="file" name="image2" class="form-control forms"><br>
                   <input type="file" name="image3" class="form-control forms"><br>
                   <input type="file" name="image4" class="form-control forms"><br>
                   <input type="file" name="image5" class="form-control forms"><br>
                   <label for="category"><b>Select add category:</b></label>
                   <select name="category" class="form-control forms">
                       @foreach ($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach
                   </select>
                   <br>
                   <button type="submit" class="btn btn-primary form-control form-button">Save ad</button>
                 </form>

            </div>

        </div>
    </div>
</div>
@endsection
