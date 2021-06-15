
@extends('layouts.app')

@section('title')
    Create new Add
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $user->name }} homepage</h1>
    </div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-5 mb-5">
        <div class="col-md-3 offset-md-1 col-lg-2 sidebar">
            @include('layouts.partials.sidebar')
        </div>

                <div class="col-md-5 offset-md-2 mt-2">
                   <h2 class="ml-5 pl-5">Create new ad</h2><br><br>
                 <form action="{{ route('home.saveAd') }}" method="POST" enctype="multipart/form-data" class=" p-4">
                    @csrf
                   <label for="title"><b> Ad Tile:</b> </label>
                   <input type="text" name="title" class="form-control forms" placeholder="Title"><br>
                   <label for="body"><b> Ad description:</b> </label>
                   <textarea name="body" cols="30" rows="10" placeholder="Ad description" class="form-control forms"></textarea><br>
                   <label for="price"><b> Price:</b></label>
                   <input type="number" name="price" placeholder="Add price" class="form-control forms">
                   <p class="mt-3"> <b> Add images for your ad:</b> </p>
                   <input type="file" name="image1" class="form-control forms"><br>
                   <input type="file" name="image2" class="form-control forms"><br>
                   <input type="file" name="image3" class="form-control forms"><br>
                   <input type="file" name="image4" class="form-control forms"><br>
                   <input type="file" name="image5" class="form-control forms"><br>
                   <label for="category"><b> Select add category:</b> </label>
                   <select name="category" class="form-control forms">
                       @foreach ($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach
                   </select>
                   <br>
                   <button type="submit" class="btn btn-primary form-control mb-4 form-button">Save ad</button>
                 </form>
                </div>
    </div>
</div>
@endsection
