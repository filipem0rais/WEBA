<html>
    <meta charset="UTF-8">

    <head>
        <title>WEBA - Exercice 03</title>

        <link rel="stylesheet" href="bootstrap.min.css">

        <style>
            .link-button { 
                background: none;
                border: none;
                color: #1a0dab;
                text-decoration: underline;
                cursor: pointer; 
                padding: 0px;
            }
        </style>
    </head>
    <body>

        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    
                    <div>WEBA - Exercice 03</div>
                </div>
            </div>
        </header>

        <main class="flex-shrink-0">
            <div class="container">
                <div class="mt-5"></div>
                
                <h1>Lien 1</h1>
                <p><a href="a.html">Lien 1</a></p>

                <h1>Lien 2</h1>
                <form method="post" action="a.html">
                    <p><input type="submit" class="link-button" value="Lien 2" /></p>
                </form>
                
                <h1>Lien 3</h1>
                <form method="get" action="b.php">
                    <input type="text" name="name" placeholder="Votre nom" required />
                    <input type="submit" class="link-button" value="Lien 3" />
                </form>

                <h1>Lien 4</h1>
                <form method="post" action="b.php">
                    <input type="text" name="name" placeholder="Votre nom" required />
                    <input type="submit" class="link-button" value="Lien 4" />
                </form>
            </div>
        </main>
    </body>
</html>
