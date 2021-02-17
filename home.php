<?php
include "database.php";
include "Class/classTwoak.php";
include "function.php";
global $bdd;

if (isset($_POST['dataText'])) {
	$twoak = new Twoak();
	$twoak->addTwoak($_SESSION['id'], $_POST['dataText'], $bdd);
?>
	<meta http-equiv="refresh" content="0.01;URL=index.php">
<?php
	echo "Twoak ajouté avec succès";
}
?>
<?php
	$user = new user();
	// Verification de l'ip machine de la personne pour savoir si elle est bannie ou pas.
	$ipMachine = $_SERVER['REMOTE_ADDR'];
	$tabIpBan = array();
	$tailleTab = count($tabIpBan);
	$user->getIpBan($bdd);
	
	for ($i = 0;$i < $tailleTab;$i++)
	{
		if ($ipMachine == $tabIpBan[$i])
		{
			?><script>
				alert("Le Dictateur et son équipe vous informe que votre compte est PD");
        		window.location.href = "http://192.168.64.53/Alex/Twoak/banni.php"
			</script><?php
		}
	}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Home</title>
	<link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

	<link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/stylelike.css">
</head>

<body onload="reload();">
	<!--<div class="se-pre-con"></div>-->
	<div class="theme-layout">
		<div class="responsive-header">
			<div class="mh-head first Sticky">
				<span class="mh-text">
					<a href="index.php" title=""><img src="images/logo.png" alt=""></a>
				</span>
				<span class="mh-btns-right">
					<a class="fa fa-sliders" href="#shoppingbag"></a>
				</span>
			</div>
			<div class="mh-head second">
				<form class="mh-form">
					<input placeholder="search" />
					<a href="#/" class="fa fa-search"></a>
				</form>
			</div>
		</div><!-- responsive header -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<div class="topbar stick">
			<div class="logo">
				<a title="" href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-area">
				<ul class="setting-area">
					<li>
						<script>
							$(document).ready(function() {
								$('#search-user').keyup(function() {
									$('#result-search').html('');

									var utilisateur = $(this).val();

									if (utilisateur != "") {
										$.ajax({
											type: 'GET',
											url: 'finduser.php',
											data: 'user=' + encodeURIComponent(utilisateur),
											success: function(data) {
												if (data != "") {
													$('#result-search').append(data);
												} else {
													document.getElementById('result-search').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top: 10px'>Aucun utilisateur</div>"
												}
											}
										});
									}
								});
							});
						</script>
						<div class="searched">
							<form action='' method='GET'>
								<input class="form-control" type="text" name="user" id="search-user" value="" placeholder="Rechercher un ou plusieurs utilisateurs" />
							</form>
						</div>
						<?php
						include("finduser.php");
						?>
					</li>
					<li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
					<li>
						<a href="#" title="Notification" data-ripple="">
							<i class="ti-bell"></i><span>
								<!-- Afficher le nombre de Notifs -->
							</span>
						</a>
					</li>
					<li>
						<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>
								<!-- Afficher le nombre de messages -->
							</span>
						</a>
					</li>
				</ul>
				<div class="user-img">
					<img src="images/resources/admin.jpg" alt="">
					<span class="status f-online"></span>
					<div class="user-setting">
						<a href="#" title=""><i class="ti-pencil-alt"></i>Editer Mon Profil</a>
						<a href="#" title=""><i class="ti-settings"></i>Paramètres De Compte</a>
						<a href="deconnexion.php" title=""><i class="ti-power-off"></i>Se Déconnecter</a>
					</div>
				</div>
				<span class="ti-menu main-menu" data-ripple=""></span>
			</div>
		</div><!-- topbar -->
		<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget">
											<h4 class="widget-title">Raccourcis</h4>
											<ul class="naves">
												<li>
													<i class="ti-files"></i>
													<a href="profil.php" title="">Profil</a>
												</li>
												<li>
													<!-- Afficher sa liste d'amis -->
													<i class="ti-user"></i>
													<a href="" title="">Amis</a>
												</li>
												<li>
													<i class="ti-power-off"></i>
													<a href="deconnexion.php" title="">Se Déconnecter</a>
												</li>
											</ul>
										</div><!-- Shortcuts -->

									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<?php addTwoak($bdd, "SELECT `user_avatar` FROM `User` WHERE ID_User = " . $_SESSION['id']); ?>
									<div class="loadMore">
										<?php viewTwoak($bdd, "SELECT Twoak.ID_Twoak, Twoak.Twoak_texte, Twoak.Twoak_published, User.user_login, User.user_avatar, User.ID_User FROM `Twoak`, User WHERE Twoak.ID_User = User.ID_User ORDER BY `Twoak_published` DESC"); ?>
									</div><!-- centerl meta -->

									<?php
									viewFriends($bdd, 'SELECT User.user_login, User.user_avatar, User.user_status FROM Follow, User WHERE Follow.Fol_ID_Follower = User.ID_User AND Follow.Fol_ID_Owner = ' . $_SESSION['id'] . '')
									?>

								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
					</div>
				</div>
			</div>
		</footer><!-- footer -->
	</div>
	<div class="side-panel">
		<h4 class="panel-title">Paramètres Généraux</h4>
		<form method="post">
			<div class="setting-row">
				<span>Mode Nuit</span>
				<input type="checkbox" id="nightmode1" />
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div><!-- side panel -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/map-init.js"></script>
</body>

</html>