<main class="contenedor seccion contenido-centrado">
    <h1 data-cy="heading-blog">Nuestro Blog</h1>

    <?php foreach($blogs as $blog) { ?>
    
        <article data-cy="entrada-blog" class="entrada-blog">
            <div class="imagen">
                <picture>
                    <img loading="lazy" src="/imagenes/<?php echo $blog->imagen; ?>" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a data-cy="enlace-blog" href="entrada?id=<?php echo $blog->id; ?>">
                    <h4 class="titulo-blog"><?php echo $blog->titulo; ?></h4>

                    <p class="informacion-meta">Escrito el: <span><?php echo $blog->fecha; ?></span> por: <span><span><?php echo $blog->autor; ?></span> </p>

                    <p><?php echo $blog->descripcion; ?></p>
                </a>
            </div>
        </article>

    <?php } ; ?>
    
</main>