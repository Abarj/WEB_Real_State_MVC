<main class="contenedor seccion">
    <h1 data-cy="heading-admin">Administrador de Bienes Raices</h1>

    <?php
        if($resultado) {
            $mensaje = mostrarNotificacion(intval($resultado));
            if($mensaje) { ?>
                <p class="alerta exito"> <?php echo s($mensaje) ?> </p>
            <?php }
        } ?>

    <a href="propiedades/crear" class="boton boton-verde">Nueva propiedad</a>
    <a href="vendedores/crear" class="boton boton-amarillo">Nuevo vendedor</a>
    <a href="blogs/crear" class="boton boton-verde">Nuevo Blog</a>
    
    <h2>Propiedades</h2>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los RESULTADOS (PROPIEDADES) -->
            <?php foreach( $propiedades as $propiedad) { ?>
            <tr>
                <td> <?php echo $propiedad->id; ?> </td>
                <td> <?php echo $propiedad->titulo; ?> </td>
                <td> <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"> </td>
                <td> <?php echo number_format($propiedad->precio, 2); ?> € </td>
                <td>
                    <form method="POST" class="w-100" action="/propiedades/eliminar">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="propiedades/actualizar?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block-admin">Actualizar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2>Vendedores</h2>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los RESULTADOS (VENDEDORES) -->
            <?php foreach( $vendedores as $vendedor) { ?>
            <tr>
                <td> <?php echo $vendedor->id; ?> </td>
                <td> <?php echo $vendedor->nombre . " " . $vendedor->apellido; ?> </td>
                <td> <?php echo $vendedor->telefono; ?> </td>
                <td class="w-101">
                    <form method="POST" action="/vendedores/eliminar">
                        <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                        <input type="hidden" name="tipo" value="vendedor">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="vendedores/actualizar?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block-admin">Actualizar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2>Blogs</h2>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Fecha</th>
                <th>Autor</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los RESULTADOS (BLOGS) -->
            <?php foreach( $blogs as $blog) { ?>
            <tr>
                <td> <?php echo $blog->id; ?> </td>
                <td> <?php echo $blog->titulo; ?> </td>
                <td> <?php echo $blog->fecha; ?> </td>
                <td> <?php echo $blog->autor; ?> </td>
                <td> <img src="/imagenes/<?php echo $blog->imagen; ?>" class="imagen-tabla"> </td>

                <td>
                    <form method="POST" class="w-100" action="blogs/eliminar">
                        <input type="hidden" name="id" value="<?php echo $blog->id; ?>">
                        <input type="hidden" name="tipo" value="blog">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="blogs/actualizar?id=<?php echo $blog->id; ?>" class="boton-amarillo-block-admin">Actualizar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</main>