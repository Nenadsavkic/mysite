<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm pt-3 pb-3 searchCars">
    <div class="container justify-content-center">
        <form class="form-inline" action="{{ route('cars') }}?search_text">
                <input class="form-control mr-2" name="search_text" type="search" placeholder="Search Cars" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </div>
 </nav>

