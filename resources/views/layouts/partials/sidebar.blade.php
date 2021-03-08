
<div class="image-upload">
    <form action="{{ route('home.saveImg') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="user_image">
            <img  src="/images/user_image/ja.jpg" alt="user_image" class=" img-thumbnail" title="Add new image"><br><br>
           </label>
           <input id="user_image" name="user_image" type="file" >
           <button type="submit">add image</button>
    </form>

</div>


<a href="" class="btn btn-primary form-control mt-2">Add new ad</a>
<a href="{{ route('home') }}" class="btn btn-secondary form-control mt-2">Your ads</a>

<a href="{{ route('home.showMessages') }}" class="btn btn-secondary form-control mt-2">
    Messages
    {{-- @if (Auth::user()->messages->count() > 0)
      <span class="btn btn-danger btn-sm rounded-circle ml-2" >{{ Auth::user()->messages->count() }}</span>
    @endif --}}
</a>
<a href="{{ route('home') }}" class="btn btn-danger form-control mt-2">Delete profile</a>

