<style>
    .nav-link:hover{
        background: #a29c9c;
        border-radius: 10px;
    }
</style>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/api/books" class="nav-link px-2 link-dark">Home</a></li>
            <li><a href="/api/favoriteBooks" class="nav-link px-2 link-dark">Favorites</a></li>
            <!--            --><?php
            //            if($user['role']==1){
            //
            //            ?>
            <li><a href="/add_book" class="nav-link px-2 link-dark">Add book</a></li>
            <!--            --><?php
            //            }
            //            ?>
        </ul>

        <div class="col-md-3 text-end">
            <button type="button" onclick="window.location.href = '/login'"  class="btn btn-outline-primary me-2">Login</button>
            <button type="button" onclick="window.location.href = '/register'" class="btn btn-primary">Sign-up</button>
        </div>
    </header>
</div>
