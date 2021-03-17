@if (session()->has('message'))
    <div class="alert alert-success ml-5">
        {{ session()->get('message') }}
    </div>
@endif
