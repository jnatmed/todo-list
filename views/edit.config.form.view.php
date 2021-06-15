<form action="/save_config" method="POST">
    <?php foreach ($config->data as $config_name => $config_value) : ?>
        <label for="<?= $config_name ?>"><?= ucfirst($config_name) ?>:</label>
        <input type="text" name="<?= $config_name ?>" id="<?= $config_name ?>" value="<?= $config_value ?>">
    <?php endforeach ?>

      <input type="submit" name="enviar" value="Enviar">
      <input type="reset" name="limpiar" value="Limpiar">
</form>
