

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
        <div class="col-md-3 offset-md-1 col-lg-2 offset-lg-1 sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-md-6 offset-md-1">
            <div>
                <h2 class="ml-5 mt-5">Replay messages.</h2>
            </div>

                @if (session())
                    @include('layouts.partials.flashMessages')
                @endif

                <div class="row mt-5">







                        <div class="col-md-9 col-lg-10 offset-lg-1 mt-5">
                                {{-- card --}}

                                <div class="card">
                                    <div class="card-header">
                                         <p class="float-left">Title: {{ $message->title }}</p>
                                         <p class="float-right">Ad name: {{ $message->ad_name }}</p>
                                    </div>
                                    <div class="card-body message-body">
                                        <div class="message-sender bg-primary p-3">
                                            <p class="float-left">Sender: {{ $message->sender->name }}</p>
                                            <p class="float-right">Created at: {{ $message->created_at->format('d M Y') }}</p>
                                            <br>
                                            <p class="card-text message-text">{{ $message->body }}</p>
                                        </div>
                                        <br>
                                        @if (isset($message->replay))

                                        <div class="message-receiver bg-secondary p-3">
                                            <p class="float-left">User: {{ $message->receiver->name }}</p>
                                            <p class="float-right">Created at: {{ $message->created_at->format('d M Y') }}</p>
                                            <br>
                                            <p class="card-text message-text">{{ $message->replay }}</p>
                                        </div>

                                        @endif
                                    </div>

                                    <form action="{{ route('replayMsgStore', ['id'=>$message->id]) }}" method="post" class="p-3">

                                        @csrf
                                        <input type="hidden" name="sender_id" value="{{ $sender_id }}">
                                        <input type="hidden" name="ad_id" value="{{ $ad_id }}">
                                        <input type="hidden" name="title" value="{{ $message->title }}">
                                        <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
                                        <button type="submit" class="btn btn-primary form-control">Replay</button>

                                    </form>

                                </div>

                            {{-- card end --}}

                        </div>


                </div>


        </div>
    </div>
</div>
@endsection
