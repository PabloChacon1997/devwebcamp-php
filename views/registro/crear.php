<main class="registro">
  <h2 class="registro__heading"><?php echo $titulo; ?></h2>
  <p class="resgistro__descripcion">Elije tu plan.</p>

  
  <div class="paquetes__grid">
    <div class="paquete">
      <h3 class="paquete__nombre">Pase Gratis</h3>
      <ul class="paquete__lista">
        <li class="paquete__elemento">Acceso virtual a DevWebCamp.</li>
      </ul>

      <p class="paquete__precio">$0</p>

      <form action="/finalizar-registro/gratis" method="post">
        <input type="submit" value="Inscripcion Gratis" class="paquetes__submit">
      </form>
    </div>
    <div class="paquete">
      <h3 class="paquete__nombre">Pase Presencial</h3>
      <ul class="paquete__lista">
        <li class="paquete__elemento">Acceso Presencial a DevWebCamp.</li>
        <li class="paquete__elemento">Pase por 2 días.</li>
        <li class="paquete__elemento">Acceso a Talleres y Conferencías.</li>
        <li class="paquete__elemento">Acceso a la Grabaciones.</li>
        <li class="paquete__elemento">Camisa del Evento.</li>
        <li class="paquete__elemento">Comida y Bebida.</li>
      </ul>

      <p class="paquete__precio">$199</p>
    </div>
    <div class="paquete">
      <h3 class="paquete__nombre">Pase Virtual</h3>
      <ul class="paquete__lista">
        <li class="paquete__elemento">Acceso Virtual a DevWebCamp.</li>
        <li class="paquete__elemento">Pase por 2 días.</li>
        <li class="paquete__elemento">Acceso a Talleres y Conferencías.</li>
        <li class="paquete__elemento">Acceso a la Grabaciones.</li>
      </ul>

      <p class="paquete__precio">$49</p>
    </div>
  </div>
</main>