<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Do</title>
    <link rel="stylesheet" href="./main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active" style="--t:.0s">Home</a>
            <a href="#about" style="--t:.1s">About</a>
            <a href="#services "style="--t:.2s">Services</a>
            <a href="#portfolio "style="--t:.3s">Portfolio</a>
            <a href="#contact" style="--t:.4s">Contact</a>
        </nav>
    </header>
    <section class="main_content" id="home">
        <div>
            <h3>
                Hello! It,s Me
            </h3>
            <h1>
                Sedlovsiy Denis
            </h1>
            <h3>
                and I'm <span class="multiply-text"></span>
            </h3>
            <p>Дори лучшая лоля на свете Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptas eaque minus, deserunt iusto aliquam laborum hic molestiae tempora nostrum.</p>
            <div class="social">
                <a href="#"><i class='bx bxl-vk'></i></a>
                <a href="#"><i class='bx bxl-steam'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-discord-alt'></i></a>
            </div>
            <a href="#" class="bth">Download</a>
        </div>
        <div class="photo_wrapper">
            <div class="photo">
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="photo_wrapper">
            <div class="photo"></div>
        </div>
        <div>
            <h3>Sedlovkiy Denis - <span>Loshara</span></h3>
            <p><span>Education</span>: Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, totam.</p>
            <p><span>Work exp</span>: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus nemo quasi iste provident hic assumenda doloribus alias ea ab delectus?</p>
            <p><span>Hobbies</span>: Lorem ipsum dolor sit amet.</p>
        </div>
    </section>

    <section class="services" id="services">
        <h3>Our <span>specifications</span></h3>
        <div class="services_wrapper">
            <div class="services_elem"><i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, illum.</p>
                <a href="#" class="bth">Read More</a>
            </div>
            <div class="services_elem"><i class='bx bxs-edit-alt' ></i>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, illum.</p>
                <a href="#" class="bth">Read More</a>
            </div>
            <div class="services_elem"><i class='bx bx-cube-alt' ></i>
                <h3>Digital Desiging</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, illum.</p>
                <a href="#" class="bth">Read More</a>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <h3>Last <span>projects</span></h3>
        <div class="portfolio_wrapper">
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h3>Write <span>Me!</span></h3>
        <form action="send.php" method="post">
            <div class="input_block">
                <input name="FIO" type="text" placeholder="Write Name" required>
                <input name="email" type="email" placeholder="Write E-mail" required>
            </div>
            <div class="input_block">
                <input name="phone" type="phone" placeholder="Write Phone" required>
                <input name="subject" type="text" placeholder="Write subject" required>
            </div>
            <textarea anme="message"></textarea>
            <input type="submit" class="bth" value="Отправить">
        </form>
    </section>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="./main.js"></script>
</body>
</html>