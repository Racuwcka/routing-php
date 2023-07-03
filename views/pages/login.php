<?php
use App\Services\Page;
?>

<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>
<body>
<?php Page::part('navbar'); ?>
<div class="container">
    <h2 class="mt-3">Sign In</h2>
    <form class="w-25 mt-3" action="/auth/login" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>