<!DOCTYPE html>
<html lang="es">
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
        <a href="#inicio" class="logo">WILDER</a>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#proyectos">Proyectos</a>
            <a href="#educacion">Educación</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <!-- Sección Inicio -->
    <section class="home" id="inicio">
        <div class="home-img">
            <img src="img/img.png" alt="Wilder sonríe con confianza mientras está de pie en un espacio de trabajo moderno con equipos de cómputo al fondo. Lleva una camisa casual y se ve accesible y amable. El entorno es profesional y acogedor.">
        </div>
        <div class="home-content">
            <h1>Hola, soy <span>Wilder</span></h1>
            <h3 class="typing-text">Y soy <span></span></h3>
            <p>Apasionado por la tecnología y el desarrollo de software. Me dedico a crear proyectos que combinan funcionalidad y buen diseño.</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/wilder-care-velasquez-9b4498336/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/WILDSLAYER" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/WILDSLAYER_dev" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
            <a class="btn">CV</a>
        </div>
    </section>

    <!-- Sección Proyectos -->
    <section id="proyectos" class="projects">
        <h2 class="heading">Mis <span>Proyectos</span></h2>
        <div class="projects-container">
            <div class="projects-box">
                <img src="img/project1.jpeg" alt="Imagen del proyecto">
                <h3>Asig Files</h3>
                <p>Sistema de gestión de archivos para una empresa del sector salud.</p>
                <div class="tecnology-icons">
                    <i class="fa-brands fa-html5"></i>
                    <i class="fa-brands fa-css3"></i>
                    <i class="fa-brands fa-js"></i>
                    <i class="fa-brands fa-php"></i>
                </div>
                <form action="https://github.com/WILDSLAYER/Asig-files.git" method="get" target="_blank">
                    <button type="submit" class="btn">Ver repositorio</button>
                </form>
            </div>
            <div class="projects-box">
                <i class="fa-solid fa-paintbrush"></i>
                <h3>Diseño Gráfico</h3>
                <p>Diseños creativos enfocados en la identidad visual y la comunicación efectiva.</p>
            </div>
            <div class="projects-box">
                <i class="fa-solid fa-chart-line"></i>
                <h3>Marketing Digital</h3>
                <p>Estrategias de posicionamiento y publicidad en plataformas digitales.</p>
            </div>
        </div>
    </section>

    <!-- Sección Educación -->
    <section id="educacion" class="education">
        <h2 class="heading">Mis <span>Estudios</span></h2>
        <div class="education-container">
            <div class="education-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Educación Secundaria</h3>
                <p>Institución Educativa Técnica - 2020</p>
            </div>
            <div class="education-box">
                <i class="fa-solid fa-certificate"></i>
                <h3>Bootcamp de Desarrollo Web</h3>
                <p>Code Academy - 2021</p>
            </div>
            <div class="education-box">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Especialización en Frontend</h3>
                <p>Curso en línea - 2022</p>
            </div>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="contact">
        <h2 class="heading">Contácta<span>me</span></h2>
        <form id="miFormulario" action="enviar.php" method="POST">
            <div class="input-box">
                <input type="text" name="nombre" placeholder="Nombre completo">
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Correo electrónico">
            </div>
            <textarea name="asunto" cols="30" rows="10" placeholder="Mensaje"></textarea>
            <div id="respuesta"></div>
            <button type="submit" class="btn">Enviar</button>
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
                    document.getElementById("respuesta").innerHTML = data;
                    document.getElementById("miFormulario").reset(); 
                    setTimeout(() => {
                        document.getElementById("respuesta").innerHTML = "";
                    }, 5000);
                })
                .catch(error => console.error("Error:", error));
            });
        </script>
    </section>
</body>
</html>
