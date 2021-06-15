<form action="/save_task" method="POST">
      <label for="descripcion">Tarea: </label>
      <input type="text" name="descripcion" id="descripcion">

      <p>Finalizada?</p>
      <label for="no_finalizada">No</label>
      <input type="radio" name="finalizada" value="no" id="no_finalizada" checked="checked">
      <label for="si_finalizada">Si</label>
      <input type="radio" name="finalizada" value="si" id="si_finalizada">

      <input type="submit" name="enviar" value="Enviar">
      <input type="reset" name="limpiar" value="Limpiar">
</form>
