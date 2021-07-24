<header>
    <nav id="menu">
        <i class="fas fa-circle"></i>
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
        <ul id="menu-list">
            <li><a href="index.php" class="<?php  echo ($name == 'index') ? 'active' : '';?>">Home</a></li>
            <li><a href="work.php" class="<?php  echo ($name == 'work') ? 'active' : '';?>">Work</a></li>
            <li><a href="about.php" class="<?php  echo ($name == 'about') ? 'active' : '';?>">About me</a></li>
        </ul>
    </nav>
    <address>
        <div id="icons">
            <i class="fab fa-github"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fas fa-envelope"></i>
        </div>
    </address>
</header>
