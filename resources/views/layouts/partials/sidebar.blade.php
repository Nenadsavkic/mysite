<a href="">

    <img  src="/images/user_image/ja.jpg" alt="user_image" class=" img-thumbnail"><br><br>

</a>
<a href="{{ route('home.userImg') }}" class="btn btn-warning form-control">
    Change profile image</a>
<a href="" class="btn btn-primary form-control mt-2">Add new ad</a>
<a href="{{ route('home') }}" class="btn btn-secondary form-control mt-2">Your ads</a>

<a href="{{ route('home.showMessages') }}" class="btn btn-secondary form-control mt-2">
    Messages
    {{-- @if (Auth::user()->messages->count() > 0)
      <span class="btn btn-danger btn-sm rounded-circle ml-2" >{{ Auth::user()->messages->count() }}</span>
    @endif --}}
</a>
<a href="{{ route('home') }}" class="btn btn-danger form-control mt-2">Delete profile</a>

