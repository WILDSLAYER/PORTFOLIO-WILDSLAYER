<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet"> 
    <title>PORTAFOLIO || WILDER</title>
</head>
<body>
    <header>
        <a href="#home" class="logo">WILDER</a>
        <nav>
            <a href="#home">Home</a>
            <a href="#projects">Projects</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-img">
            <img src="img/img.png" alt="Wilder smiles confidently while standing in a modern workspace with computer equipment in the background. He wears a casual shirt and appears approachable and friendly. The environment feels professional and welcoming.">
        </div>
        <div class="home-content">
            <h1>Hola, soy <span>Wilder</span></h1>
            <h3 class="typing-text">Y soy <span></span></h3>
            <p>Apasionado por la tecnología y el desarrollo de software, me dedico a crear proyectos que combinan funcionalidad y buen diseño.</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/wilder-care-velasquez-9b4498336/" target="_blank" ><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/WILDSLAYER" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/WILDSLAYER_dev" target="_blank" ><i class="fa-brands fa-x-twitter"></i></i></a>
            </div>
            <a class="btn">hire me</a>
        </div>
    </section>

     <!-- projects Section -->
     <section id="projects" class="projects">
        <h2 class="heading">Mis <span>Proyectos</span></h2>
        <div class="projects-container">
            <div class="projects-box">
                <img src="" alt="">
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                <div class="tecnology-icons">
                    <i class="fa-brands fa-html5"></i>
                    <i class="fa-brands fa-css3"></i>
                    <i class="fa-brands fa-js"></i>
                </div>
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
        <h2 class="heading">Mis <span>Estudios</span></h2>
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
        <h2 class="heading">Contacta<span>me</span></h2>
        <form id="miFormulario" action="enviar.php" method="POST">
            <div class="input-box">
                <input type="text" name="nombre" placeholder="Nombre completo">
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Correo electrónico">
            </div>
            <textarea name="asunto" cols="30" rows="10" placeholder="Mensaje"></textarea>
            <div id="respuesta"></div>
            <button type="submit" class="btn">enviar</button>
        </form>
    <script>
        document.getElementById("miFormulario").addEventListener("submit", function(event) {
            event.preventDefault(); // Evita la recarga de la página

            let formData = new FormData(this);

            fetch("enviar.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("respuesta").innerHTML = data; // Mostrar respuesta del servidor
                document.getElementById("miFormulario").reset(); 
            }
            setTimeout(() => {
                document.getElementById("respuesta").innerHTML= "";
            }, 5000);
        
            )
            .catch(error => console.error("Error:", error));
        });
    </script>
</body>
</html>