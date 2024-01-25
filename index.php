<?php
    session_start();
    
    # retenir l'email de la personne connectée pendant 1 an
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # Récupérer l'adresse e-mail du formulaire
        $email = $_POST["mail"];
    
        # Définir le cookie avec une durée de vie de 30 jours (en secondes)
        setcookie("user_email", $email, time() + 30 * 24 * 60 * 60, "/");
    
        /*
        Rediriger l'utilisateur vers une autre page ou afficher un message de confirmation
        header("Location: index.php");
        exit();
        */
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion PHP POO</title>
    <link href="https://unpkg.com/@primer/css@^20.2.4/dist/primer.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head><body>
    <header>
        <h1>
            <span aria-hidden="true">
                &#128640;
                </span>
                Connexion PHP POO
        </h1>
    </header>
    <aside>
        <figure class="d-flex flex-column flex-md-row flex-items-center flex-md-items-center">
            <div class="col-2 d-flex flex-items-center flex-items-center flex-md-items-start" role="region" aria-labelledby="picture">
            <img id="picture" class="width-full avatar mb-2 mb-md-0" src="https://github.com/github.png" alt="github" />
            </div>
            <figcaption class="col-12 col-md-10 d-flex flex-column flex-justify-center flex-items-center flex-md-items-start pl-md-4">
                <h1 class="text-normal lh-condensed">GitHub</h1>
                <p class="h4 color-fg-muted text-normal mb-2">How people build software.</p>
                <a class="color-fg-muted text-small" href="https://github.com/giusmili/pattern_design">https://github.com/giusmili/pattern_design</a>
            </figcaption>
        </figure>
    </aside>
    <main>
        <section class="blankslate">
        <?php
        # controller
        require_once __DIR__ . "/controller/controller_base.class.php";
        ControllerBase::event();
        ?>
            <h2>
                Connectez-vous
            </h2>
            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="login">Login</label>
            <input class="form-control" name="mail" type="text" placeholder="Login" id="login">

            <label for="pass">Password</label>
            <input class="form-control input-monospace"  id="pass" name="pass" type="password" placeholder="password">
            <input type="submit" class="btn btn-primary" value="Envoyer">
            </form>
                        
        </section>
    
    </main>
    <footer>
        <p>
            &copy; - github - <a href="#url" class="branch-name">a_new_feature_branch</a> - 2024
        </p>
    </footer>

</body>
</html>