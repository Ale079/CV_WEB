<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV WEB</title>
  <link rel="stylesheet" href="estilos.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
  <?php 
  include("menu.php");
  ?>
  <div class="principal centrar">
    <h1>CV WEB</h1>
  </div>
  <div class="ancho resumen_contenedor seccion-oculta">
    <h2>RESUMEN</h2>
      <div class="resumen_contenedor_cuerpo">
        <div class="resumen">
          <h3>ENRIQUE ALEJANDRO ANGUAS POOL</h3>
          <p>
            Estudiante de Ingeniería en Sistemas Computacionales con un enfoque especializado en el Desarrollo Web. Cuento con experiencia práctica en la creación de sitios y aplicaciones web, demostrando dominio en tecnologías clave del lado del cliente como JavaScript, HTML5, CSS3 y PHP. Busco aplicar mis habilidades técnicas para contribuir a proyectos innovadores
          </p>
        </div>
        <div class="resumen_imagen">
          <img src="imagenes/codigo-html-1024x576.jpg" alt="">
        </div>
      </div>
  </div>
  <div class="habilidades_fondo">
    <div class="ancho centrar habilidades seccion-oculta">
        <h2>HABILIDADES</h2>
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" />
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" />
        <div class="habilidades_dual">
          <div class="habilidades_blandas seccion-oculta">
            <h3>Habilidades Blandas</h3>
            <div class="habilidades_blandas_oculto">
              <ul>
                <li>Trabajo en equipo</li>
                <li>Comunicación efectiva</li>
                <li>Aprendizaje continuo</li>
                <li>proactividad</li>
              </ul>
            </div>
          </div>
          <div class="habilidades_tecnicas seccion-oculta">
            <h3>Habilidades Técnicas</h3>
            <div class="habilidades_tecnicas_oculto">
              <ul>
                <li>Lenguajes de Programación: PHP, JavaScript.</li>
                <li>Front-End: HTML5, CSS3, JavaScript</li>
                <li>Herramientas: Git, GitHub, VS Code.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="ancho experiencia_contenedor seccion-oculta">
    <h2>EXPERIENCIA</h2>
    <div class="experiencia">
      <h3>Miembro de División de Software | Capítulo Estudiantil AAAIMX</h3>
      <p>
        Como parte de un aprendizaje autodidacta, se construyó una serie de paginas web, utilizándose como un entorno de práctica para investigar y aplicar nuevas propiedades de CSS. Específicamente, se implementaron atributos de diseño responsivo, para asegurar la adaptabilidad de los sitios en múltiples dispositivos. Paralelamente, se experimentó activamente con herramientas de front-end, atributos de JavaScript y la creación de animaciones CSS.
      </p>
      <h3>Desarrollador en Hackathon | Simposium de Sistemas 2025</h3>
      <p>
        Se asumió la responsabilidad del front-end durante el hackathon, donde se diseñó y maquetó la interfaz de usuario completa del proyecto, enfocándose en un diseño responsivo e intuitivo. Además, se desarrollaron todos los formularios de la aplicación, implementando validaciones del lado del cliente con JavaScript y atributos de HTML. Finalmente, se crearon diversos efectos visuales y transiciones utilizando CSS y JS para mejorar la experiencia de usuario y vista general de la plataforma.
      </p>
    </div> 
  </div>

  <script src="script.js"></script>

</body>
</html>