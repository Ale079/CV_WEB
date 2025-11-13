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
  <div class="ancho contacto_contenedor centrar seccion-oculta">
    <h1>PROYECTOS</h1>
  </div>
  <div class="ancho resumen_contenedor seccion-oculta">
      <div class="resumen_contenedor_cuerpo">
        <div class="resumen proyectos">
          <h3>Maquetación "SPA Salon"</h3>
          <p>
            Se trata de una pagina de 4 secciones, maquetada con HTML5 y CSS3. Incluye navegación interna con enlaces de anclaje (ej. href="#Video") combinados con la propiedad scroll-behavior: smooth de CSS para un desplazamiento fluido. Finalmente, el formulario de suscripción usa jQuery para la validación, interceptando el clic del botón, verificando el email con .trim() y .checkValidity(), y enviando el formulario manualmente.
          </p>
        </div>
        <div class="resumen_imagen proyectos">
          <img src="imagenes/Captura de pantalla 2025-11-13 004249.png" alt="">
        </div>
      </div>
  </div>
  <div class="ancho resumen_contenedor seccion-oculta">
      <div class="resumen_contenedor_cuerpo">
        <div class="resumen proyectos">
          <h3>Formulario de Contacto</h3>
          <p>
            Proyecto de formulario web responsivo maquetado con HTML5 y CSS3, implementando un diseño de dos columnas. El núcleo del proyecto es su sistema de validación del lado del cliente, programado con JavaScript y jQuery. El script intercepta el envío del formulario (type="button") para verificar campos vacíos (.trim()) y validar formatos de email y patrones numéricos (.checkValidity()), asegurando la integridad de los datos antes del envío manual (.submit()).
          </p>
        </div>
        <div class="resumen_imagen proyectos">
          <img src="imagenes/Captura de pantalla 2025-11-13 004411.png" alt="">
        </div>
      </div>
  </div>

  <script src="script.js"></script>

</body>
</html>