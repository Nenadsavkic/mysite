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
        <div class="col-md-6 offset-md-3 mt-5">
            <p class="fs-1 mt-5"> <b>If you have any sugestions, or you want to contact me, please
                fill out this contact form to send message.</b></p>
		<br><br>

                 @include('layouts.partials.flashMessages')


                <form action="{{ route('contact.store') }}" method="POST">
                  @csrf
		  <input type="text" name="name" class="form-control forms" 
                  @if(Auth::user()) 
		    value={{ Auth::user()->name }}
                  @else
                    placeholder="Your name"
		  @endif 
		  ><br>

		  <input type="email" name="email" class="form-control forms"
                  @if(Auth::user()) 
		    value={{ Auth::user()->email }}
		  @else
		    placeholder="Your email"
                  @endif		    
                  ><br>
                  <textarea name="message" cols="30" rows="10" class="form-control forms" placeholder="Your message"></textarea><br>
                  <button type="submit" class="btn btn-primary form-control form-button">Send message</button>

                </form>
        </div>
    </div>



</div>

@endsection
