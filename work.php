<!DOCTYPE html>
<html lang="en">
<?php require_once 'php/head.php'; ?>
<body>
<?php $name = 'work';
require_once 'php/header.php'; ?>
<main>
    <article>
        <h1 class="title">Work</h1>
        <div class="flex-row">
            <button><a href="#web">Web Design <br>/Development</a></button>
            <button><a href="#UX">UX Design</a></button>
            <button><a href="#graphics">Graphics</a></button>
        </div>
    </article>
    <article class="container2" id ="web">
        <h1>Web Design/Development</h1>
        <div class="grid">
        </div>
    </article>
    <article class="container2" id ="UX">
        <h1>UX Design</h1>
        <div class="grid">
        </div>
    </article>
    <article class="container2" id ="graphics">
        <h1>Graphics</h1>
        <div class="grid">
        </div>
    </article>
</main>
<?php require_once 'php/footer.php'; ?>
</body>
</html>