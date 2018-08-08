<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="public/css/stylesheet.css" media="all">
</head>

<body>

<header>
</header>

<nav>
    <!-- - barre de menu horizontale - -->
    <?php
    require('view/templates/nav.php');
    ?>
</nav>

<body>


    <?= $content ?>


    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/custom.js"></script>
</body>

<footer>
</footer>
</body>

</html>
