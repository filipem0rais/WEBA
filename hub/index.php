<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ExercicesHub</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <div class="hub">
                <span>Exercice</span>
                <span>hub</span>
            </div>
        </div>
    </div>
</header>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col">Hello</div>
        <?php
        $array = scandir('../');
        foreach ($array as $item){
            echo $item . '<br>';
        }
        ?>
    </div>
</div>


</body>
</html>