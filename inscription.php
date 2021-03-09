<?php session_start(); ?>
<?php include "Class/ClassUser.php";?>
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
    <title>Inscription</title>

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
                    <form id="inscription" action="" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="wrap-input100 validate-input" data-validate="Ce champ est obligatoire">
                                    <input class="input100" type="text" name="username" placeholder="Nom d'utilisateur">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class=" wrap-input100 validate-input" data-validate="Ce champ est obligatoire">
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
                                <div class="input-group ">
                                    <div class="input-group-icon validate-input" data-validate="Ce champ est obligatoire" require>
                                        <input class="input100" type="mail" name="mail" placeholder="Mail">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group validate-input" data-validate="Ce champ est obligatoire">
                                    <div class="input-group-icon">
                                        <input class="input100 js-datepicker" name="date" placeholder="Date de naissance">
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
                                <div class="input-group validate-input" data-validate="Ce champ est obligatoire">
                                    <input class="input100" type="password" name="password" placeholder="Mot de passe" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group validate-input" data-validate="Ce champ est obligatoire">
                                    <input class="input100" type="password" name="password2" placeholder="Mot de passe" required>
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
                            if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['prenom']) && !empty($_POST['date']) 
                            && !empty($_POST['password2']) && !empty($_POST['mail'])){
                                $login     = $_POST['username'];
                                $surname   = $_POST['prenom'];
                                $password  = $_POST['password'];
                                $Cpassword = $_POST['password2'];
                                $email     = $_POST['mail'];
                                $date      = $_POST['date'];

                                if($password == $Cpassword){

                                    $hashPasswd = password_hash($password,PASSWORD_ARGON2ID);

                                    try{
                                        $user   = new User();
                                        $bdd    = $user->connectbdd();
                                        $req    = $bdd->prepare("INSERT INTO `User` 
                                        (`ID_User`, `user_type`, `user_nom`, `user_prenom`, `user_login`, `user_password`, `user_dateNaissance`, 
                                        `user_mail`, `user_avatar`, `user_banniere`, `user_bio`, `user_follower`, `user_sexe`, `user_status`, `user_ip`, `user_ban`) 
                                        VALUES (NULL, '0', :surname, :surname, :username, :passwd, :dat, :mail, '', '', '', '', '0', '0', '0', '0')");
                                        $req->bindParam('surname',$surname, PDO::PARAM_STR); 
                                        $req->bindParam('username', $login, PDO::PARAM_STR);
                                        $req->bindParam('passwd', $hashPasswd, PDO::PARAM_STR);
                                        $req->bindParam('mail', $email, PDO::PARAM_STR);
                                        $req->bindParam('dat',$date, PDO::PARAM_STR);
                                        $req->execute();
                                        header("Location:login.php");

                                    }catch(Exception $e){
                                        echo "Erreur ! ".$e->getMessage();
                                        echo "Les datas : ";
                                        print_r($req);
                                    }
                                }else{
                                    echo "<div style='color:black'>Confirmation de mot de passe incorrect</div>";
                                }
                            } ?>
                        <!-- fin php insciption -->
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                inscription
                            </button>
                        </div>
                        <br>
                        <div class="text-center p-t-136 ">
                            <a class="txt2" href="index.php">
                                Vous avez déjà un compte
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

    <script src="js/main.js"></script>
    <script src="js/global.js"></script>

</body>


</html>