<nav class="navbar navbar-expand-lg fixed-top navbar-custom {{ Route::is('home') ? 'is-home' : '' }}">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img class="icon me-2" src="{{ asset('media/assistance.png') }}" alt="icona assistenza aerea"> 
            <div class="d-flex flex-column lh-1">
                <span class="fw-bold">SYA</span>
                <span class="text-uppercase fs-6 sub-brand">travel agency</span>
            </div>
        </a>

        <button class="navbar-toggler border-white-50" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icon-white"></span>
        </button>
            
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0 align-items-center">
                <li class="nav-item px-2">
                    <a class="nav-link fs-5 link-shadow target-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link fs-5 link-shadow target-link" href="{{ route('index') }}">Destinazioni</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link fs-5 link-shadow target-link" href="{{ route('create') }}">Crea Destinazione</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
