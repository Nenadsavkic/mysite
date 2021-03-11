
<img
@if (Auth::user()->user_image)
   src="{{ asset('/storage/images/'.Auth::user()->user_image) }}"
@else
   src="/storage/images/noimage.jpg"
@endif

  alt="user_image" class=" img-thumbnail" title="Add new image"><br><br>
<div class="card">
    <form action="{{ route('user.saveImg',['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
     @csrf
           <input id="user_image" name="user_image" type="file" >
           <button type="submit" class="btn btn-warning form-control mt-2">Add new profile image</button>
    </form>
</div>
<a href="{{ route('user.deleteImg', ['id'=>$user->id]) }}" class="btn btn-danger form-control mt-2">Delete profile image</a>

<a href="{{ route('home.showAdForm') }}" class="btn btn-primary form-control mt-2">Create new ad</a>
<a href="{{ route('home') }}" class="btn btn-secondary form-control mt-2">Your ads</a>

<a href="{{ route('home.showMessages') }}" class="btn btn-secondary form-control mt-2">
    Messages
    {{-- @if (Auth::user()->messages->count() > 0)
      <span class="btn btn-danger btn-sm rounded-circle ml-2" >{{ Auth::user()->messages->count() }}</span>
    @endif --}}
</a>
<a href="{{ route('home') }}" class="btn btn-danger form-control mt-2">Delete profile</a>

