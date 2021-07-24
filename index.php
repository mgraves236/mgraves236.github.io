<!DOCTYPE html>
<html lang="en">
<?php require_once 'php/head.php'; ?>
<body>
<?php $name = 'index';
require_once 'php/header.php'; ?>
<main class="no-padding">
    <article id="hello">
        <h1>Hi, <br> I'm Magda</h1>
        <p>I’m an amateur web developer/designer & UX designer
            based in Poland who is excited to start working!</p>
        <button><a href="about.php">Learn more &#8594;</a></button>
        <nav id="down">&#9660;</nav>
    </article>
    <article id="more">
        <div class="padding">
            <div class="container">
                <h1>Work</h1>
                <div class="flex-row">
                    <button><a href="work.php#web">Web Design <br>/Development</a></button>
                    <button><a href="work.php#UX">UX Design</a></button>
                    <button><a href="ork.php#graphics">Graphics</a></button>
                </div>
            </div>
            <div class="container" id="skills">
                <h1>Skills</h1>
                <div class="flex-row">
                    <img src="img/skills/html5.svg">
                    <img src="img/skills/css3.svg">
                    <img src="img/skills/sass.svg">
                    <img src="img/skills/js.svg">
                    <img src="img/skills/jquery.svg">
                    <img src="img/skills/c++.svg">
                    <img src="img/skills/ps.svg">
                    <img src="img/skills/ai.svg">
                </div>
            </div>
        </div>
    </article>
</main>
<?php require_once 'php/footer.php'; ?>
</body>
</html>