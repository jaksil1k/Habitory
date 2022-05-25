@section('navbar')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-green">
            <div class="container-fluid">
                <img src="logo.png" width="200" height="70">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">HABIT TRACKER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PROGRESS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">PREMIUM</a>
                            </li>
                        </ul>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <form class="d-flex">
                        <a class="btn btn-secondary" href="registration.html" role="button">LOGIN/REGISTER</a>
                    </form>

                </div>
            </div>
        </nav>
    </header>
@endsection
