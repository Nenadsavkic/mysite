
@extends('layouts.master')

@section('title')
    Your homepage
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">Your homepage</h1>
    </div>
@endsection

@section('main')
<div class="container-fluid m-2">
    <div class="row mt-5 mb-5">
        <div class="col-md-2 offset-1">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-md-6 offset-1">
            <div class="row">
                {{-- card1 --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>

                </div>
                {{-- card1 end --}}

                {{-- card 2 --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>

                </div>
                {{-- card 2 end --}}
            </div>

        </div>
    </div>
</div>
@endsection
