<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__texto">Registrate en DevWebcamp</p>
  <?php 
    require_once __DIR__.'/../templates/alertas.php';
  ?>
  <form class="formulario" method="POST" action="/registro">
    <div class="formulario__campo">
      <label for="nombre" class="formulario__label">Nombre</label>
      <input 
        type="text"
        class="formulario__input"
        placeholder="Tu nomnbre"
        id="nombre"
        name="nombre"
        value="<?php echo $usuario->nombre; ?>"
      />
    </div>
    <div class="formulario__campo">
      <label for="apellido" class="formulario__label">Apellido</label>
      <input 
        type="text"
        class="formulario__input"
        placeholder="Tu apellido"
        id="apellido"
        name="apellido"
        value="<?php echo $usuario->apellido; ?>"
      />
    </div>
    <div class="formulario__campo">
      <label for="email" class="formulario__label">Email</label>
      <input 
        type="email"
        class="formulario__input"
        placeholder="Tu email"
        id="email"
        name="email"
        value="<?php echo $usuario->email; ?>"
      />
    </div>
    <div class="formulario__campo">
      <label for="password" class="formulario__label">Password</label>
      <input 
        type="password"
        class="formulario__input"
        placeholder="Tu password"
        id="password"
        name="password"
      />
    </div>
    <div class="formulario__campo">
      <label for="password2" class="formulario__label">Repetir Password</label>
      <input 
        type="password"
        class="formulario__input"
        placeholder="Repetir password"
        id="password2"
        name="password2"
      />
    </div>
    <input type="submit" value="Crear cuenta" class="formulario__submit">
  </form>
  <div class="acciones">
    <a href="/login" class="acciones_enlace">¿Ya tienes cuenta? Inicia sesión</a>
    <a href="/olvide" class="acciones_enlace">¿Olvidaste tu password?</a>
  </div>
</main>