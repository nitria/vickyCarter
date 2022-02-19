<div class="main">
    <div class="social-icons">
        <ul>
            <li class="social-list"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li class="social-list"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="social-list"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="social-list"><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
        </ul>
    </div>
    <div class="home" id="home">
        <div class="title">
            <h2>vicky carter</h2>
            <h3>portfolio</h3>
        </div>

        <div class="banner">
            <div class="split parallax">
                <img src="./assets/images/header-bg-dark.jpg" class="split-image" alt="" />
            </div>
            <div class="btnContainer">
                <a href="#portfolio" class="portfolioBtn">demo</a>
                <span></span>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="imgContainer">
            <img src="./assets/images/me.jpg" alt="vicky carter">
        </div>
        <div class="info">
            <h1>Who am i</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores minus ratione odio magnam dolorum
                maxime
                eveniet molestias dignissimos facere quisquam ullam soluta cumque tenetur, natus nesciunt! Veritatis
                repellendus suscipit eius.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores minus ratione odio magnam dolorum
                maxime
                eveniet molestias dignissimos facere quisquam ullam soluta cumque tenetur, natus nesciunt! Veritatis
                repellendus suscipit eius.</p>
        </div>
    </div>
    <div id="portfolio">
        <div class="container">
            <div class="mySlides">
                <div class="numbertext">1 / 8</div>
                <img src="./assets/images/1.jpg" style="width:100%" alt="">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 8</div>
                <img src="./assets/images/2.jpg" style="width:100%" alt="">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 8</div>
                <img src="./assets/images/3.jpg" style="width:100%" alt="">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 8</div>
                <img src="./assets/images/4.jpg" style="width:100%" alt="">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 8</div>
                <img src="./assets/images/5.jpg" style="width:100%" alt="">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 8</div>
                <img src="./assets/images/6.jpg" style="width:100%" alt="">
            </div>
            <div class="mySlides">
                <div class="numbertext">7 / 8</div>
                <img src="./assets/images/7.jpg" style="width:100%" alt="">
            </div>
            <div class="mySlides">
                <div class="numbertext">8 / 8</div>
                <img src="./assets/images/8.jpg" style="width:100%" alt="">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="./assets/images/1.jpg" style="width:100%" onclick="currentSlide(1)"
                    alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="./assets/images/2.jpg" style="width:100%" onclick="currentSlide(2)"
                    alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="./assets/images/3.jpg" style="width:100%" onclick="currentSlide(3)"
                    alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="./assets/images/4.jpg" style="width:100%" onclick="currentSlide(4)"
                    alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="./assets/images/5.jpg" style="width:100%" onclick="currentSlide(5)"
                    alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="./assets/images/6.jpg" style="width:100%" onclick="currentSlide(6)"
                    alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="./assets/images/7.jpg" style="width:100%" onclick="currentSlide(7)"
                    alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="./assets/images/8.jpg" style="width:100%" onclick="currentSlide(8)"
                    alt="">
            </div>
        </div>

    </div>
    <div id="services">
        <h2>My Services</h2>
        <span class="string"></span>
        <div class="cards">
            <div class="card">
                <div class="img-container">
                    <img src="./assets/images/photoshop.jpg" alt="">
                </div>
                <div class="caption">photoshop</div>
            </div>

            <div class="card">
                <div class="img-container">
                    <img src="./assets/images/portrait.jpg" alt="">
                </div>
                <div class="caption">portraits</div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="./assets/images/graphic-design.jpg" alt="">
                </div>
                <div class="caption">graphic design</div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="./assets/images/landscapes.jpg" alt="">
                </div>
                <div class="caption">landscapes</div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="./assets/images/wedding.jpg" alt="">
                </div>
                <div class="caption">wedding</div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="container">
            <div class="left">
                <h1>Want to collaborate with me?</h1>
                <p>6 Parker str. Colorado, USA</p>
                <p>06587945555</p>
                <p>vcarter@yahoo.com</p>
                <h2>working hours</h2>
                <p>Mon - Fri: 09.00am - 09.00pm.</p>
                <p>Sat: 10.00am 08.00pm</p>

            </div>
            <div class="right">
                <form action="">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <button class="btn">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>