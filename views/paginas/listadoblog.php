<?php foreach($blogs as $blog) { ?>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
            <img loading="lazy" src="/imagenes/<?php echo $blog->imagen; ?>" alt="Texto entrada Blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="/entrada">
                <h4><?php echo $blog->titulo; ?></h4>
                <p class="informacion-meta">Escrito el: <span><?php echo $blog->fecha; ?></span> por: <span><?php echo $blog->autor; ?></span> </p>

                <p>
                <?php echo $blog->descripcion; ?>
                </p>
            </a>
        </div>
    </article>
<?php } ?>