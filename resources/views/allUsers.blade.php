
@extends('layouts.app')

@section('title')
    {{ $user->name }} homepage
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">{{ $user->name }} homepage</h1>
    </div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-5 mb-5">
        <div class=" col-md-8 offset-md-2 col-lg-2 offset-lg-1 sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-sm-8 offset-sm-2 col-md-10 offset-md-1 col-lg-7 offset-lg-1">
            <div class="ml-5 mt-3">
                <h2 class="ml-4">Here you can see all your users.</h2>
            </div>

            @if (session())
               @include('layouts.partials.flashMessages')
            @endif

            <div class="row mt-4 pt-2">

                    {{-- table --}}
                 <div class="col-sm-10 offset-sm-1  col-md-8 offset-md-2 col-lg-10 offset-lg-1">
                    <table class="table mt-5">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                            @foreach ($allUsers as $users)
                            <tr>
                                <th>{{ $users->id }}</th>
                                <td><a href="{{( route('allUserAds',['id'=>$users->id]) )}}" class="text-muted">{{ $users->name }}</a></td>
                                <td>{{ $users->email }}</td>
                                <td>
                                    <form action="{{ route('deleteUser',['id'=>$users->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-small" type="submit"
                                         onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                  </div>
                    {{-- table end --}}

            </div>

        </div>
    </div>
</div>
@endsection

