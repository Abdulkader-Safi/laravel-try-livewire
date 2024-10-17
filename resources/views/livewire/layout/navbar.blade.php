<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-start align-items-center">

                @guest
                    <li class="nav-item">
                        <button class="nav-link" wire:navigate href="/login">Login</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" wire:navigate href="/register">Register</button>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/customers">Customers</a>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary" wire:click='logout'>Logout</button>
                    </li>
                @endauth

            </ul>

        </div>
    </div>
</nav>
