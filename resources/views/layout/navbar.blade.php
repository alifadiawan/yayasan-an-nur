<nav class="navbar navbar-expand-lg bg-ijo">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/logo.png') }}" alt="" width="72" height="72">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-light mx-4 fw-bold" href="{{url('/')}}">Home</a>
                <a class="nav-link text-light mx-4 fw-bold" href="{{url('/about')}}">About</a>
                <a class="nav-link text-light mx-4 fw-bold" href="{{url('/contact')}}">Contect</a>
            </div>
        </div>
    </div>
</nav>
