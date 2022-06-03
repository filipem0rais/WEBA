<html>
<head>
    <meta charset="utf-8">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>  <?= $title ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LJDBN</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link <?php if (isset($news) && !empty($news)){ echo "active";} ?>" aria-current="page" href="index.php">Dernières actualités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($title == "Article aléatoire"){ echo "active";} ?>" aria-current="page" href="index.php?action=random">Actualité aléatoire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?action=about">À propos</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row" style="margin-top:20px">
        <div class="col">

           <?= $pageContent ?>
        </div>
    </div>
</div>
</body>
</html>