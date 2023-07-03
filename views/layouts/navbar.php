<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
            </ul>
        </div>
    </div>
    <?php if(!isset($_SESSION['user'])): ?>
        <a class="nav-link active" href="/login">Login</a>
        <a class="nav-link active" href="/register">Register</a>
    <?php else: ?>
        <a class="nav-link active" href="/profile">Profile</a>
        <form action="/auth/logout" method="post" class="mx-2">
            <input type="submit" class="nav-link active btn btn-outline-primary" value="Logout">
        </form>
    <?php endif; ?>
</nav>