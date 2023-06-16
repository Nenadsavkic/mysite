@extends('layouts.app')

@section('title')
    My Designs
@endsection

@section('content-title')
       <div class="container justify-content-center">

        <div class="row header">
            <div class="myDesigns col-12 col-lg-2 text-center mt-2">
                <a href="https://www.redbubble.com/people/nenad00x/shop?asc=u&ref=account-nav-dropdown"
                    target="blank">
                        <h4>My Shop</h4></a>
            </div>

              <h1 class="text-light col-12 col-md-8 offset-md-2 col-lg-8 offset-lg-0 text-center">
                  Graphic Design</h1>

            <div class="myDesigns col-12 col-lg-2 text-center mt-2">
                <a href="https://www.redbubble.com/people/nenad00x/shop?asc=u&ref=account-nav-dropdown"
                   target="blank">
                        <h4>My Shop</h4></a>
            </div>
        </div>



    </div>
@endsection

@section('content')

<div class="container mb-5">

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h2 class="text-center bold mt-5"><strong>Welcome on my Graphic Design page</strong></h2>
        <p class="text-center mt-5"><strong>Hello, on this page you can see some of my Graphic Design works
            in Adobe Illustrator, InDesign and Photoshop.
            Something I've been doing for some time now,
            partly as a hobby and partly professionally, in the hope that the
            second will prevail in the end. <br><br>
            Click on image to zoom in.</strong></p>
    </div>

</div>
<div class="row">

    @foreach(File::glob(public_path('images/design_images').'/*') as $path)
        <div class="col-md-3 mt-3">
        <img src="{{ str_replace(public_path(), '', $path) }}"
        class="img-fluid thumb small-img" style="width: 100%"
            onclick="change(this)">
        </div>

    @endforeach






</div>

</div>

@endsection
@section('page-scripts')

   <script>

   function change(element){
    element.classList.toggle("fullsize");
   }

   </script>

@endsection
