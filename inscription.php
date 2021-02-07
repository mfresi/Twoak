<?php session_start();?>
<?php include "Class/ClassUser.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <!-- Title Page-->
    <title>Insciption</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="css/main2.css" rel="stylesheet" media="all">

</head>

<body>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Inscrivez-vous !</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group validate-input" data-validate="Ce champ est obligatoire">
                                    <input class="input100" type="text" name="nom" placeholder="Nom">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group validate-input" data-validate="Ce champ est obligatoire">

                                    <input class="input100" type="text" name="prenom" placeholder="Prénom">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="input-group-icon validate-input" data-validate="Ce champ est obligatoire">
                                        <input class="input100" type="text" name="mail" placeholder="Mail">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group" data-validate="Ce champ est obligatoire">
                                    <div class="input-group-icon">
                                        <input class="input100 js-datepicker" type="text" name="date" placeholder="Date de naissance">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group" data-validate="Ce champ est obligatoire">
                                    <input class="input100" type="password" name="password" placeholder="Mot de passe">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group" data-validate="Ce champ est obligatoire">
                                    <input class="input100" type="password" name="password2" placeholder="Mot de passe">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Sexe</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Homme
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Femme
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        -->
                        <?php // Début du PHP pour l'inscriptuion
                        if (empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['mail']) && empty($_POST['date']) && empty($_POST['password']) && empty($_POST['password2'])) {
                        } else if ($_POST['password'] == $_POST['password2']) {
                            $user = new User(); //les mots de passe sont corrects, on crée l'objet user
                            $base = $user->connectbdd();
                            $user->inscription($_POST['nom'], $_POST['prenom'], $_POST['mail'],$_POST['date'], $_POST['password'] , $base);
                            //echo "".$_POST['nom']. "" . $_POST['prenom'] . "".$_POST['mail']. "".$_POST['date']. "".$_POST['password']. "";
                            echo " <p>L'équipe Twoak vous remercie de votre inscription !";
                        } else {
                            echo "Les mots de passe ne correspondent pas";
                        }
                        ?>
                        <!-- fin php insciption -->
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                inscription
                            </button>
                        </div>
                        <br>
                        <div class="text-center p-t-136 ">
                            <a class="txt2" href="index.php">
                                Vous avez déja un compte
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>


</html>