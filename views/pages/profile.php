<?php
use App\Services\Page;
?>

<?php
if (!$_SESSION['user']) {
    \App\Services\Router::redirect('/login');
}
?>
<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>
<body>
<?php Page::part('navbar'); ?>
<div class="container">
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Hello, <?= $_SESSION['user']['full_name'] ?></h1>
    </div>
</div>
</body>
</html>