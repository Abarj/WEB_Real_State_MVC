<main class="contenedor seccion">
    <h2 data-cy="heading-nosotros">Más sobre nosotros</h2>

    <?php include 'iconos.php'; ?>
</main>

<section class="contenedor seccion">
    <h2>Casas y apartamentos en venta</h2>

    <?php
        include 'listadoprop.php';
    ?>
    
    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde" data-cy="todas-propiedades">Ver todas</a>
    </div>
</section>

<section  data-cy="imagen-contacto" class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>

    <p>Rellena el formulario de contacto y un asesor comercial se pondrá en contacto contigo lo antes posible</p>
    
    <a href="/contacto" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section data-cy="blog" class="blog">
        <h3>Nuestro blog</h3>

        <?php
            include 'listadoblog.php'
        ?>

    </section>

    <section data-cy="reseñas" class="reseñas">
        <h3>Reseñas</h3>

        <div class="reseña">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>- Álvaro Barjau</p>
        </div>
    </section>
</div>