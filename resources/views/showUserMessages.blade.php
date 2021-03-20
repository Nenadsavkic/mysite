

@extends('layouts.app')

@section('title')
   {{ $user->name }} messages
@endsection
@section('content-title')
<div class="container justify-content-center">
    <h1 class="text-light">{{ $user->name }} messages</h1>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-5 mb-5">
        <div class="col-lg-2 sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-lg-6 offset-1">
            <div class="ml-5">
                <h2 class="ml-5 pl-5">Here you can see all your messages.</h2>
            </div>

                @if (session())
                    @include('layouts.partials.flashMessages')
                @endif

                <div class="row mt-5">



                    @foreach ($messages as $message)



                        <div class="col-md-12 offset-2 mt-5">
                                {{-- card --}}

                                <div class="card" style="width: 40rem;">
                                    <div class="card-header">
                                    <p class="float-left">Title: {{ $message->title }}</p>
                                    <p class="float-right">Ad name: {{ $message->ad_name }}</p>
                                    </div>
                                    <div class="card-body message-body">
                                    <p class="float-left">Sender: {{ $message->sender->name }}</p>
                                    <p class="float-right">Created at: {{ $message->created_at->format('d M Y') }}</p><br><br>
                                    <p class="card-text message-text">{{ $message->body }}</p><br>
                                    <a class="btn btn-primary float-left" href="{{ route('home.replayMsg', ['sender_id' => $message->sender_id,
                                        'ad_id' => $message->ad_id, 'ad_name' => $message->ad_name]) }}">Reply</a>
                                    <form action="{{ route('home.deleteMsg', ['id'=>$message->id]) }}" method="post">
                                     @csrf
                                     @method('delete')
                                     <button type="submit" class="btn btn-danger float-right">Delete</button>
                                    </form>

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
