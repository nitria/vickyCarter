<?php
$logo = "Vicky Carter";
$subTitle = "Photography";
?>
<header>
    <nav>
        <div class="logo">
            <a href="#home"><?php echo $logo;?></a>
            <p><?php echo $subTitle;?></p>
        </div>
        <div class="navbar">
            <ul>
                <li class="nav-links"><a href="#home">Home</a></li>
                <li class="nav-links"><a href="#about">About</a></li>
                <li class="nav-links"><a href="#portfolio">Portfolio</a></li>
                <li class="nav-links"><a href="#services">Services</a></li>
                <li class="nav-links"><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="bars" onclick="toggleBtn()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>