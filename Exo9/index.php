<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" lang="fr">
<head>
    <meta charset="utf-8">
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Ex 9</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 mb-5">
            <h2>Formulaire de contact</h2>

            <?php
            include_once('C:\xampp\htdocs\includes\toolbox.php');
            if (isset($_GET['status'])){
                switch ($_GET['status']) {
                    case "success":
                        displayAlert("Votre mail a bien été envoyé.","success");
                        break;
                    case "failsend":
                        displayAlert("Une erreur est survenue lors de l'envoi du mail.","danger");
                        break;
                }
            }


            ?>

            <form id="myForm" action="email.php" method="post">
                <div class="form-group my-2">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom"
                                   required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
                        </div>
                    </div>
                </div>

                <div class="form-group my-2">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
                    <small id="emailHelp" class="form-text text-muted">Votre email sera utilisé uniquement pour vous
                        donner une réponse</small>
                </div>
                <label for="radioChoices">Raison de votre contact : </label>
                <div class="form-group mb-2" id="radioChoices">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio1" value="option1" checked
                               required>
                        <label class="form-check-label" for="radio1">
                            Nouvelle collaboration
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio2" value="option2">
                        <label class="form-check-label" for="radio2">
                            Information sur mon travail
                        </label>
                    </div>
                </div>

                <div class="form-group my-2">
                    <label for="textarea">Votre message</label>
                    <textarea class="form-control" name="message" id="textarea" rows="3" required></textarea>
                </div>
                <div class="form-group my-2">
                    <label for="list">Combien de mes cours avec-vous suivi ?</label>
                    <select class="form-control" name="list" id="list" required>
                        <option value="0">Aucun</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-check my-2">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox" required>
                    <label class="form-check-label" for="checkbox">
                        Cochez pour accepter les termes d'utilisation
                    </label>
                </div>
                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>

        <div class="col-lg-2">
            <h4>Confidentialité</h4>
            <p class="small">Les informations transmises seront traitées en respect avec la loi de protection des
                données.</p>
        </div>
    </div>
</div>
</body>
</html>
<script>
    window.onload = function() {
        var recaptcha = document.forms["myForm"]["g-recaptcha-response"];
        recaptcha.required = true;
        recaptcha.oninvalid = function(e) {
            alert("Prouvez que vous n'êtes pas un robot.");
        }
    }
</script>