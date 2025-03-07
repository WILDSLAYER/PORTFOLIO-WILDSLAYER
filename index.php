<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet"> <!-- Movido aquí -->
    <title>PORTAFOLIO || WILDER</title>
</head>
<body>
    <header>
        <a href="#" class="logo">WILDER</a>
        <nav>
            <a href="#home">Home</a>
            <a href="#projects">Projects</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-img">
            <img src="img/image.png " alt="">
        </div>
        <div class="home-content">
            <h1>Hola, soy <span>Wilder</span></h1>
            <h3 class="typing-text">Y soy <span></span></h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae fugiat culpa quaerat voluptate alias. Non ipsum dicta soluta eum dolorem placeat nostrum ratione possimus quaerat. Nulla molestias repellendus cumque quia?</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/wilder-care-velasquez-9b4498336/" target="_blank" ><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/WILDSLAYER" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/WILDSLAYER_dev" target="_blank" ><i class="fa-brands fa-twitter"></i></a>
            </div>
            <a href="#" class="btn">hire me</a>
        </div>
    </section>

     <!-- projects Section -->
     <section id="projects" class="projects">
        <h2 class="heading">My <span>Projects</span></h2>
        <div class="projects-container">
            <div class="projects-box">
                <i class="fa-solid fa-code"></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="projects-box">
                <i class="fa-solid fa-paintbrush"></i>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="projects-box">
                <i class="fa-solid fa-chart-line"></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
        </div>
    </section>


    <!-- Education Section -->
    <section id="education" class="education">
        <h2 class="heading">My <span>Education</span></h2>
        <div class="education-container">
            <div class="education-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Bachelor's Degree</h3>
                <p>University of Technology - 2020</p>
            </div>
            <div class="education-box">
                <i class="fa-solid fa-certificate"></i>
                <h3>Web Development Bootcamp</h3>
                <p>Code Academy - 2021</p>
            </div>
            <div class="education-box">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Frontend Specialization</h3>
                <p>Online Course - 2022</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Subject">
            </div>
            <textarea cols="30" rows="10" placeholder="Your Message"></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
</body>
</html>