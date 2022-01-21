<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="text-primary">Welcome <?=ucfirst( $_SESSION["name"] ?? "Visitor") ?>
            <i><?=$_SESSION["role"] ?? "" ?></i>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Destinations</a>
                </li>
                <?php if(isset($_SESSION["email"])==false){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?path=user&action=formRegister">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?path=user&action=formLogin">Login</a>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?path=user&action=logout">Logout</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
