<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title ?></title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="../public/css/grayscale.min.css" rel="stylesheet">
    <link href="../public/css/main.css" rel="stylesheet">
</head>
<body>
<?php require "header.php" ?>

    <div id="content">
        <?= $content ?>
    </div>

<?php require "footer.php" ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="../public/js/grayscale.js"></script>
</body>
</html>