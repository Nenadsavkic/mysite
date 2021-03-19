

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
                <h2 class="ml-5 pl-5">Replay messages.</h2>
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
                                         Title: {{ $message->title }}
                                    </div>
                                    <div class="card-body message-body">
                                        <p class="float-left">Sender: {{ $message->sender->name }}</p>
                                        <p class="float-right">Created at: {{ $message->created_at->format('d M Y') }}</p><br><br>
                                        <p class="card-text message-text">{{ $message->body }}</p><br>

                                    </div>
                                    <form action="{{ route('home.replayMsgStore') }}" method="post" class="p-3">

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
                    @endforeach

                </div>


        </div>
    </div>
</div>
@endsection
