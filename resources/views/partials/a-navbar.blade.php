<nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
    @auth   
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="/dashboard">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasLable">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title text-light" id="offcanvasLable">Dashboard</h4>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-5">
                    <li class="nav-item pe-5">
                        <a class="nav-link size {{ ($title === "Main Page") ? 'active' : '' }}" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item dropdown pe-5">
                        <a class="nav-link size dropdown-toggle" href="#" id="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tenaga Kerja
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown">
                            <li><a class="dropdown-item {{ ($title === "Guru") ? 'active' : '' }}" href="/guru">Guru</a></li>
                            <li><a class="dropdown-item {{ ($title === "Karyawan") ? 'active' : '' }}" href="/karyawan">Karyawan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pe-5">
                        <a class="nav-link size {{ ($title === "Siswa") ? 'active' : '' }}" aria-current="page" href="/siswa">Siswa</a>
                    </li>
                    <li class="nav-item dropdown pe-5">
                        <a class="nav-link size dropdown-toggle" href="#" id="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown">
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @else
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="/">Random School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasLable">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title text-light" id="offcanvasLable">Random School</h4>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-5">
                    <li class="nav-item pe-5">
                        <a class="nav-link size {{ ($title === "Main Page") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown pe-5">
                        <a class="nav-link size dropdown-toggle" href="#" id="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tenaga Kerja
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown">
                            <li><a class="dropdown-item {{ ($title === "Guru") ? 'active' : '' }}" href="/guru">Guru</a></li>
                            <li><a class="dropdown-item {{ ($title === "Karyawan") ? 'active' : '' }}" href="/karyawan">Karyawan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pe-5">
                        <a class="nav-link size {{ ($title === "Siswa") ? 'active' : '' }}" aria-current="page" href="/siswa">Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endauth
</nav>