
@extends('layouts.master')

@section('title')
    Create new Add
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
        <div class="col-md-8">


            <div class="row">

                <div class="col-md-8 offset-3">
                   <h2 class="ml-5">Create new ad</h2><br><br>
                 <form action="{{ route('home.saveAd') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <label for="title">Ad Tile:</label>
                   <input type="text" name="title" class="form-control" placeholder="Title"><br>
                   <label for="body">Ad description:</label>
                   <textarea name="body" cols="30" rows="10" placeholder="Ad description" class="form-control"></textarea><br>
                   <label for="price">Price:</label>
                   <input type="number" name="price" placeholder="Add price" class="form-control">
                   <p>Add images for your ad:</p>
                   <input type="file" name="image1" class="form-control"><br>
                   <input type="file" name="image2" class="form-control"><br>
                   <input type="file" name="image3" class="form-control"><br>
                   <input type="file" name="image4" class="form-control"><br>
                   <input type="file" name="image5" class="form-control"><br>
                   <label for="category">Select add category:</label>
                   <select name="category" class="form-control">
                       @foreach ($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach
                   </select>
                   <br>
                   <button type="submit" class="btn btn-primary form-control">Save ad</button>
                 </form>

            </div>

        </div>
    </div>
</div>
@endsection
