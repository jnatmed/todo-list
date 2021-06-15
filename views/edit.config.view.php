<!DOCTYPE html>
<html>
<head>
    <title><?= $this->view_data['title'] ?></title>
</head>
<body>
    <header>
        <h1><?= $this->view_data['title'] ?></h1>
        <?php include 'views/nav.view.php'; ?>
    </header>
    <main>
        <?php include 'views/edit.config.form.view.php'; ?>
    </main>
</body>
</html>
