<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/img-01.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form " method="POST">
                        <span class="login100-form-title">
                            Bienvenue sur Twoak
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Saissisez votre login">
                            <input class="input100" type="text" name="login" placeholder="Utilisateur">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Saissisez votre password">
                            <input class="input100" type="password" name="password" placeholder="Mot de passe" >
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <?php // Tout les champs du formulaire
                        if (isset($_POST['login']) && isset($_POST['password'])) {
                            //Le mot de passe est correct, on crée l'objet user
                            $coUser = new user();
                            // Méthode de connexion dans class user*
                            
                            $base = $coUser->Connectbdd();
                            //  Méthode de autorisation dans class user 
                            $coUser->Connexion($_POST['login'], $_POST['password'], $base);
                        }
                        ?>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Connexion
                            </button>
                        </div>
                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Oublié
                            </span>
                            <a class="txt2" href="#">
                                Utilisateur / Mot de passe ?
                            </a>
                        </div>
                        <div class="text-center p-t-136">
                            <a class="txt2" href="inscription.php">
                                Crée votre compte
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>