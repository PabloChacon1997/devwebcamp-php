<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__texto">Recupera tu acceso a DevWebcamp</p>

  <form class="formulario">
    <div class="formulario__campo">
      <label for="email" class="formulario__label">Email</label>
      <input 
        type="email"
        class="formulario__input"
        placeholder="Tu email"
        id="email"
        name="email"
      />
    </div>
    <input type="submit" value="Enviar instrucciones" class="formulario__submit">
  </form>
  <div class="acciones">
  <a href="/registro" class="acciones_enlace">¿Aún no tienes cuenta? Obten una</a>
    <a href="/login" class="acciones_enlace">¿Ya tienes cuenta? Inicia sesion</a>
  </div>
</main>