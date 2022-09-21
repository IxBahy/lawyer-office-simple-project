<?php
include '../functions/queries.php';


session_start();
if (isset($_GET['logOut'])) {
    session_unset();
    session_destroy();
    header('location: /backend-training/6th-task/');
} ?>
<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/backend-training/6th-task/user/welcome.php">Home</a>
                </li>

            </ul>
            <form method="GET">
                <button class="btn btn-outline-danger" name="logOut">log out</button>
            </form>
        </div>
    </div>
</nav>