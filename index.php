<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Sergio</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#portfolio" onclick="seleccionar()">PORTFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/fotopersonal.jpg" alt="">
            </div>
            <h1>SERGIO PEREYRA</h1>
            <h2>Tecnico Universitario en Programacion</h2>
            <div class="redes">
                <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://join.skype.com" target="_blank"><i class="fa-brands fa-skype"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com" target="_blank"><i class="fa-solid fa-rss"></i></a>
            </div>
        </div>
    </section>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mí</h2>
            <p><span>Hola, soy Sergio Pereyra.</span> Estudiante avanzado en Tecnicatura Universitaria de Programacion, cuento con buenas dotes comunicativas y capacidad para trabajar en equipo. Busco una oportunidad laboral donde pueda adquirir experiencia en el sector del desarrollo de aplicaciones web  y poner en práctica mis conocimientos sobre las tecnologias aprendidas y la gestion del producto realizado.</p>

            <div class="fila">
                <!-- datos personales -->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            25-09-1991
                        </li>
                        <li>
                            <strong>Teléfono</strong>
                            1134003110
                        </li>
                        <li>
                            <strong>Email</strong>
                            sergiop8877@gmail.com
                        </li>
                        <li>
                            <strong>Website</strong>
                            www.example.com
                        </li>
                        <li>
                            <strong>Dirección</strong>
                            Radio la voz del comahue 2933 Salta, Argentina
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            <span>FREELANCE</span>
                        </li>
                    </ul>
                </div>

                <!-- intereses -->
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>JUEGOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>MUSICA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-plane"></i>
                            <span>VIAJAR</span>
                        </div>
                        <div class="interes">
                            <i class="fa-brands fa-android"></i>
                            <span>ANDROID</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-dumbbell"></i>
                            <span>GYM</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-book"></i>
                            <span>LIBROS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-motorcycle"></i>
                            <span>MOTOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-clapperboard"></i>
                            <span>CINE</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <a href="docs/cv.docx" download class="button">
                Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </a>
            
        </div>
    </section>

    <!-- SECCION SKILLS -->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Skills</h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <h3>Technical Skills</h3>
                    <div class="skill">
                        <span>Javascript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>89%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>C</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Java</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>81%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>MySQL</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Professional Skills -->
                <div class="col">
                    <h3>Professional Skills</h3>
                    <div class="skill">
                        <span>Comunicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabajo en Equipo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Creatividad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>99%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Proyect Management</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>94%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CURRICULUM -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Curriculum</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Educación</h3>
                    <div class="item izq">
                        <h4>Tecnicatura Electromecanica</h4>
                        <span class="casa">EET N°5138 Albert Einstein</span>
                        <span class="fecha">Egresado 2009</span>
                        <p>Produccion de bienes y servicios, Practicas en redes domiciliarias y redes trifasicas</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Armado y Reparacion de pc</h4>
                        <span class="casa">Instituto Argentina de Computacion</span>
                        <span class="fecha">2010</span>
                        <p>Manejo de todo hardware de la pc, Armado de pc basicas y gamers, intalacion de software</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Curso de node.js</h4>
                        <span class="casa">BA Codo a Codo 4.0</span>
                        <span class="fecha">2023</span>
                        <p>Realizacion de proyectos simples en javascript y node.js</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia de trabajo</h3>
                    <div class="item der">
                        <h4>Tecnico de pequeños electrodomesticos</h4>
                        <span class="casa">Leandro Electronics S.A</span>
                        <span class="fecha">2011-2013</span>
                        <p>Reaparacion de electrodomesticos, testeo de componentes, facturacion</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Armador de pc</h4>
                        <span class="casa">Freelancer</span>
                        <span class="fecha">2010-2025</span>
                        <p>Armado de pc basicas y gamers, chequeo de hardware y limpieza</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Desarrollador de aplicaciones web</h4>
                        <span class="casa">Freelancer</span>
                        <span class="fecha">2022 - 2025</span>
                        <p>Desarrollo de aplicaciones web usando tecnologias html,css,js,mongodb,node.js</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION PORTFOLIO -->
    <section id="portfolio" class="portfolio">
        <div class="contenido-seccion">
            <h2>PORTFOLIO</h2>
            <?php
$conexion = new mysqli("localhost","root","","portafolio");
if($conexion->connect_error) die("Error: ".$conexion->connect_error);

$sql = "SELECT p.id, p.nombre,
        GROUP_CONCAT(t.nombre SEPARATOR ', ') AS tecnologias
        FROM proyectos p
        LEFT JOIN proyecto_tecnologia pt ON p.id = pt.proyecto_id
        LEFT JOIN tecnologias t ON pt.tecnologia_id = t.id
        GROUP BY p.id";

$resultado = $conexion->query($sql);
?>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Proyecto</th>
            <th>Tecnologías</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                <td><?php echo htmlspecialchars($row['tecnologias']); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php $conexion->close(); ?>

        </div>
    </section>

    <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->
                 <div class="col">
              <form class="form" method="post" action="funcion-phpmailer.php" enctype="multipart/form-data">
            <h2>Datos del mensaje</h2>
            <div>
                
                <input type="text" name="nombre" autocapitalize="words" autocomplete="off" placeholder="Tú Nombre" />
            </div>
            <div>
                
                <input type="text" name="apellido" autocapitalize="words" autocomplete="off" placeholder="Tú Apellido"/>
            </div>

            <div>
                
                <input type="email" name="email" autocomplete="off" placeholder="Tú Email"/>
            </div>
          
            <div class='large'>
                <span>Adjunta una foto (de ser necesario)</span>
                <input type="file" name="foto" accept="image/*" />
            </div>
             <div>
                
                <select name="asunto">
                    <option>Comentario</option>
                    <option>Sugerencia</option>
                    <option>Reclamo</option>
                </select>
            </div>
            <div class='large'>
                
                <textarea name="mensaje" rows="6" cols="80" >
                </textarea>
            </div>
            <div class='large'>
                <button class='button' type="submit">
                        Enviar Mensaje<i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
            </div>
        </form>
        </div>
                <!-- Mapa -->
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1280.0393252135095!2d-65.44869982869037!3d-24.846837227789017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sradio%20la%20voz%20del%20comahue%202933!5e0!3m2!1ses-419!2sar!4v1759266916733!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                Salta, Radio la voz del comahue 2933
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen"></i>
                                Llamanos: 1134003110
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email: sergiop8877@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://join.skype.com" target="_blank"><i class="fa-brands fa-skype"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com" target="_blank"><i class="fa-solid fa-rss"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>