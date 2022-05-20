<html>
    <meta charset="UTF-8">
    <body>
        <h1>Lien</h1>
        <p>
            <a href="index.php">Retour</a>

            
            <?php
                if (isset($_GET["name"])) {
                    echo "<br />Your name is ". $_GET["name"] .".";
                }
                else if (isset($_POST["name"])) {
                    echo "<br />Your name is ". $_POST["name"] .".";
                }
            ?>
        </p>
    </body>
</html>