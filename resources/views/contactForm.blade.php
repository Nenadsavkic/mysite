@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">Contact form</h1>
    </div>
@endsection

@section('main')

<div class="container mb-5">

    <div class="row">
        <div class="col-lg-6 offset-3 mt-5">
            <p class="fs-1 mt-5">If you have any sugestions, or you want to contact me, please
                fill out this contact form to send message.</p>
                <br><br>
                <form action="#">
                  @csrf
                  <input type="text" name="name" placeholder="Your name" class="form-control"><br>
                  <input type="email" name="email" placeholder="Your email" class="form-control"><br>
                  <input type="textarea" name="body" placeholder="Your message" class="form-control"><br>
                  <button class="btn btn-primary form-control">Send message</button>

                </form>
        </div>
    </div>



</div>

@endsection
