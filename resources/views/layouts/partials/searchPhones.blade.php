<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm pt-3 pb-3 searchPhones">
    <div class="container justify-content-center">
        <form class="form-inline" action="{{ route('searchPhones') }}">
                <input class="form-control mr-2" name="query" type="search" placeholder="Search Phones" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </div>
 </nav>

