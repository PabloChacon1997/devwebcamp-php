<fieldset class="formulario__fieldset">
  <legend class="formulario__legend">Información del Evento</legend>
  <div class="formulario__campo">
    <label for="nombre" class="formulario__label">Nombre del Evento</label>
    <input 
      type="text"
      class="formulario__input"
      id="nombre"
      name="nombre"
      placeholder="Nombre evento"
      value="<?php echo $evento->nombre; ?>"
    >
  </div>
  <div class="formulario__campo">
    <label for="nombre" class="formulario__label">Descrición del Evento</label>
    <textarea 
      name="descripcion"
      class="formulario__input"
      id="descripcion"
      cols="30"
      rows="8"
      placeholder="Descripción evento"
      ><?php echo $evento->descripcion; ?></textarea>
  </div>
  <div class="formulario__campo">
    <label for="categoria" class="formulario__label">Categoría o Típo de Evento</label>
    <select class="formulario__select" name="categoria_id" id="categoria">
      <option selected disabled>- Seleccionar -</option>
      <?php foreach($categorias as $categoria) { ?>
        <option <?php echo ($evento->categoria_id === $categoria->id) ? 'selected':''; ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="formulario__campo">
    <label for="nombre" class="formulario__label">Seleccione el dia del Evento</label>
    <div class="formulario__radio">
      <?php foreach($dias as $dia) {?>
        <div>
          <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
          <input 
            type="radio" 
            id="<?php echo strtolower($dia->nombre); ?>"
            value="<?php echo strtolower($dia->id); ?>"
            name="dia">
        </div>
      <?php } ?>
    </div>
    <input type="hidden" name="dia_id" value="">
  </div>

  <div  class="formulario__campo">
    <label for="" class="formulario__label">Seleccione la hora del Evento</label>
    <ul id="horas" class="horas">
        <?php foreach($horas as $hora) { ?>
          <li data-hora-id="<?php echo $hora->id; ?>" class="horas__hora horas__hora--desabilitada"><?php echo $hora->hora; ?></li>
        <?php } ?>
      </ul>
  </div>
  <input type="hidden" name="hora_id" value="">
</fieldset>

<fieldset class="formulario__fieldset">
  <legend class="formulario__legend">Información extra</legend>
  <div class="formulario__campo">
    <label for="ponentes" class="formulario__label">Ponente</label>
    <input 
      type="text"
      class="formulario__input"
      id="ponentes"
      placeholder="Buscar ponente"
    >
  </div>
  <div class="formulario__campo">
    <label for="disponibles" class="formulario__label">Lugares disponibles</label>
    <input 
      type="number"
      min="1"
      class="formulario__input"
      id="disponibles"
      name="disponibles"
      placeholder="Ejemplo: 20"
      value="<?php echo $evento->disponibles; ?>"
    >
  </div>
</fieldset>