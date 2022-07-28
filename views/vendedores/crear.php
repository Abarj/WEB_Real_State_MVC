<main class="contenedor seccion">
    <h1>Registrar vendedor</h1>

    <?php foreach($errores as $error) { ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario" method="POST" action="/vendedores/crear">
        <?php include 'formulario.php'; ?>
        <input type="submit" value="Registrar vendedor" class="boton boton-verde">
    </form>
</main>