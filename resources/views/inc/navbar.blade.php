<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Habitory</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create-habit">Habits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Category</a>
                </li>

                <li class="nav-item">
                    @guest("web")
                        <a class="nav-link" href="{{route("login")}}">Login</a>
                    @endguest

                    @auth("web")
                            <a class="nav-link" href="{{route("logout")}}">Logout</a>
                        @endauth
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("contact_form")}}">contact form</a>
                </li>

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
