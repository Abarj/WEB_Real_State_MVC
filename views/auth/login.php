<main class="contenedor seccion contenido-centrado">
    <h1 data-cy="heading-login">Iniciar Sesión</h1>

    <?php foreach($errores as $error) { ?>
        <div data-cy="alerta-login" class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <form data-cy="formulario-login" method="POST" class="formulario" action="/login">
        <fieldset>
            <legend>Email y contraseña</legend>

            <label for="email">E-mail</label>
            <input data-cy="email-login" type="email" name="email" placeholder="Email" id="email">

            <label for="password">Contraseña</label>
            <input data-cy="password-login" type="password" name="password" placeholder="Contraseña" id="password">
        </fieldset>

        <input type="submit" value="Iniciar sesión" class="boton boton-verde">
    </form>
</main>