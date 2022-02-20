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
                <li class="nav-links"><a href="#home" arial-label="link to home section">Home</a></li>
                <li class="nav-links"><a href="#about" arial-label="link to about section">About</a></li>
                <li class="nav-links"><a href="#portfolio" arial-label="link to portfolio section">Portfolio</a></li>
                <li class="nav-links"><a href="#services" arial-label="link to services section">Services</a></li>
                <li class="nav-links"><a href="#contact" arial-label="link to contact section">Contact</a></li>
            </ul>
        </div>
        <div class="bars" onclick="toggleBtn()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>