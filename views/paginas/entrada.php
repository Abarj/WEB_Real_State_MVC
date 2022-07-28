<main class="contenedor seccion contenido-centrado">
    <h1 data-cy="titulo-blog"><?php echo $blog->titulo; ?></h1>

    <picture>
        <img loading="lazy" src="/imagenes/<?php echo $blog->imagen; ?>" alt="Texto entrada Blog">
    </picture>

    <p class="informacion-meta">Escrito el: <span><?php echo $blog->fecha; ?></span> por: <span><?php echo $blog->autor; ?></span></p>

    <div class="resumen-propiedad">
        <p><?php echo $blog->detalles; ?></p>
    </div>
</main>