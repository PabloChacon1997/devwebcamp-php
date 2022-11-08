<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__texto">Coloca tu nuevo password</p>

  <?php 
    require_once __DIR__.'/../templates/alertas.php';
  ?>

  <?php if($token_valido) { ?>

  <form method="POST" class="formulario">
    <div class="formulario__campo">
      <label for="password" class="formulario__label">Nuevo password</label>
      <input 
        type="password"
        class="formulario__input"
        placeholder="Tu Nuevo Password"
        id="password"
        name="password"
      />
    </div>
    <input type="submit" value="Guardar Password" class="formulario__submit">
  </form>
  <div class="acciones">
  <a href="/registro" class="acciones_enlace">¿Aún no tienes cuenta? Obten una</a>
    <a href="/login" class="acciones_enlace">¿Ya tienes cuenta? Inicia sesion</a>
  </div>
  <?php } ?>
</main>