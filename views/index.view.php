<!DOCTYPE html>
<html>
<head>
    <title><?= $this->view_data['title'] ?></title>
</head>
<body>
    <header>
        <h1><?= $this->view_data['nombre_lista'] ?></h1>
        <?php include 'views/nav.view.php'; ?>
    </header>
    <main>
        <?php include 'views/mensajes.view.php' ?>
        <?php $tipo_lista = 'pendientes' ?>
        <?php foreach ($secciones as $tipo => $titulo) : ?>
            <?php include 'views/task.list.view.php' ?>
        <?php endforeach ?>
    </main>
    <footer>
        <?php foreach ($secciones as $tipo => $titulo) : ?>
            <?php include 'views/task.counter.view.php' ?>
        <?php endforeach ?>
    </footer>
</body>
</html>
