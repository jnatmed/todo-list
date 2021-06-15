<section id="<?= $tipo ?>">
    <h1><?= $titulo ?></h1>
    <ul>
        <?php foreach ($todo_list->tasks as $tarea) : 
            // echo "<pre>";
            // var_dump($todo_list->tasks);
            // $tarea->descripcion;
            // exit(0);
            ?>
            <li><?= $tarea->descripcion ?></li>
        <?php endforeach ?>
    </ul>
</section>
