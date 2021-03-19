@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">Contact form</h1>
    </div>
@endsection

@section('content')

<div class="container mb-5">

    <div class="row">
        <div class="col-lg-6 offset-3 mt-5">
            <p class="fs-1 mt-5"> <b>If you have any sugestions, or you want to contact me, please
                fill out this contact form to send message.</b></p>
                <br><br>
                <form action="" method="post">
                  @csrf
                  <input type="text" name="name" placeholder="Your name" class="form-control forms"><br>
                  <input type="email" name="email" placeholder="Your email" class="form-control forms"><br>
                  <textarea name="body" cols="30" rows="10" class="form-control forms" placeholder="Message"></textarea><br>
                  <button class="btn btn-primary form-control form-button">Send message</button>

                </form>
        </div>
    </div>



</div>

@endsection
