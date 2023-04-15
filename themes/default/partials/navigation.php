<nav class="navbar sticky-top navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <i class="fa-brands fa-php fa-xl"></i>
            SimpleFrameworkPHP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SimpleFrameworkPHP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/imprint">Imprint</a></li>
                            <li><a class="dropdown-item" href="/privacy">Privacy</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/user/42/edit">Edit user 42</a></li>
                            <li><a class="dropdown-item" href="/user/161/edit">Edit user 161</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center show" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (dark)">
                            <i class="fa-solid fa-circle-half-stroke bi my-1 theme-icon-active">
                                <use href="#moon-stars-fill"></use>
                            </i>
                            <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text" data-bs-popper="static">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                    <i class="fa-solid fa-sun bi me-2 opacity-50 theme-icon">
                                        <use href="#sun-fill"></use>
                                    </i>
                                    Light
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                                    <i class="fa-solid fa-moon bi me-2 opacity-50 theme-icon">
                                        <use href="#moon-stars-fill"></use>
                                    </i>
                                    Dark
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                    <i class="fa-solid fa-circle-half-stroke bi me-2 opacity-50 theme-icon">
                                        <use href="#circle-half"></use>
                                    </i>
                                    Auto
                                </button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
