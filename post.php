<?php session_start();
include "database.php";
include "function.php";
global $bdd;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Profil</title>
	<link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

	<link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body>
	<!--<div class="se-pre-con"></div>-->
	<div class="theme-layout">

		<div class="responsive-header">
			<div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
				</span>
				<span class="mh-text">
					<a href="index.php" title=""><img src="images/logo2.png" alt=""></a>
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

			<nav id="shoppingbag">
				<div>
					<div class="">
						<form method="post">
							<div class="setting-row">
								<span>use night mode</span>
								<input type="checkbox" id="nightmode" />
								<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Notifications</span>
								<input type="checkbox" id="switch2" />
								<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Notification sound</span>
								<input type="checkbox" id="switch3" />
								<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>My profile</span>
								<input type="checkbox" id="switch4" />
								<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Show profile</span>
								<input type="checkbox" id="switch5" />
								<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
							</div>
						</form>
						<h4 class="panel-title">Account Setting</h4>
						<form method="post">
							<div class="setting-row">
								<span>Sub users</span>
								<input type="checkbox" id="switch6" />
								<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>personal account</span>
								<input type="checkbox" id="switch7" />
								<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Business account</span>
								<input type="checkbox" id="switch8" />
								<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Show me online</span>
								<input type="checkbox" id="switch9" />
								<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Delete history</span>
								<input type="checkbox" id="switch10" />
								<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
							</div>
							<div class="setting-row">
								<span>Expose author name</span>
								<input type="checkbox" id="switch11" />
								<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div><!-- responsive header -->

		<div class="topbar stick">
			<div class="logo">
				<a title="" href="index.php"><img src="images/logo.png" alt=""></a>
			</div>

			<div class="top-area">

				<ul class="setting-area">
					<li>
						<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
						<div class="searched">
							<form method="post" class="form-search">
								<input type="text" placeholder="Search Friend">
								<button data-ripple><i class="ti-search"></i></button>
							</form>
						</div>
					</li>
					<li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
					<li>
						<a href="#" title="Notification" data-ripple="">
							<i class="ti-bell"></i><span>20</span>
						</a>
						<div class="dropdowns">
							<span>4 New Notifications</span>
							<ul class="drops-menu">
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-2.jpg" alt="">
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag red">Reply</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-3.jpg" alt="">
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag blue">Unseen</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-4.jpg" alt="">
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-5.jpg" alt="">
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
							</ul>
							<a href="notifications.html" title="" class="more-mesg">view more</a>
						</div>
					</li>
					<li>
						<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
						<div class="dropdowns">
							<span>5 New Messages</span>
							<ul class="drops-menu">
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-1.jpg" alt="">
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag green">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-2.jpg" alt="">
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag red">Reply</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-3.jpg" alt="">
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag blue">Unseen</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-4.jpg" alt="">
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<img src="images/resources/thumb-5.jpg" alt="">
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span>Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
							</ul>
							<a href="messages.html" title="" class="more-mesg">view more</a>
						</div>
					</li>
				</ul>
				<div class="user-img">
					<img src="images/resources/admin.jpg" alt="">
					<span class="status f-online"></span>
					<div class="user-setting">
					<a href="#" title=""><i class="ti-user"></i> view profile</a>
						<a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
						<a href="#" title=""><i class="ti-settings"></i>account setting</a>
						<a href="deconnexion.php" title=""><i class="ti-power-off"></i>log out</a>
					</div>
				</div>
				<span class="ti-menu main-menu" data-ripple=""></span>
			</div>
		</div><!-- topbar -->

		<section>
			<div class="feature-photo">
				<figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
				<div class="add-btn">
					<span>1.3k followers</span>
					<a href="#" title="" data-ripple="">Follow</a>
				</div>
				<form class="edit-phto">
					<i class="fa fa-camera-retro"></i>
					<label class="fileContainer">
						Changer de bannière
						<input type="file" />
					</label>
				</form>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<?php
									$fig = $bdd->prepare("SELECT `user_avatar` FROM `User` WHERE `ID_User` = " . $_SESSION['id']);
									$fig->execute();
									$figexite = $fig->rowCount();
									$figselect = $fig->fetch();
									if ($figexite != 0) {
									?>
										<img src="<?php echo $figselect['user_avatar']; ?>" alt="">
									<?php } else {

									?>

										<img src="images/resources/user-avatar2.jpg" alt="">
									<?php } ?>
									<form method="POST" class="edit-phto" enctype="multipart/form-data">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Changer de photo de profile
											<input type="file" name="avatar_user" />

										</label>
										<input type='submit' name='test'>
									</form>

									<?php

									if (isset($_POST['test'])) {
										if (file_exists("avatar/".$_SESSION['login'])) {
											echo 'Le répertoire existe déjà!';
											$maxSize = 900000;
											$valideType = array('.jpg', '.jpeg', '.gif', '.png');

											if ($_FILES['avatar_user']['error'] > 0) {
												echo "une erreur est survenue lors du transfert";
												die;
											}
											$fileSize = $_FILES['avatar_user']['size'];

											$fileType = "." . strtolower(substr(strrchr($_FILES['avatar_user']['name'], '.'), 1));

											if (!in_array($fileType, $valideType)) {
												echo "le fichier sélectionné n'est pas une image";
												die;
											}
											$tmpName = $_FILES['avatar_user']['tmp_name'];
											$Name = $_FILES['avatar_user']['name'];
											$fileName = "avatar/" . $_SESSION['login'] . "/" . $Name;
											$résultUplod = move_uploaded_file($tmpName, $fileName);
											echo $tmpName;
											if ($résultUplod) {
												echo "transfere terminé";
											}
											$idUser = $_SESSION['id'];
											$bdd->query("UPDATE `User` SET `user_avatar`= '$fileName' WHERE ID_User = $idUser");
											?>
										<meta http-equiv="refresh" content="0.01;URL=profil.php">
										<?php
										}
										// Création du nouveau répertoire
										
										
										else {
											$nom = "avatar/".$_SESSION['login'];
											mkdir($nom);
											
											$maxSize = 900000;
											$valideType = array('.jpg', '.jpeg', '.gif', '.png');

											if ($_FILES['avatar_user']['error'] > 0) {
												echo "une erreur est survenue lors du transfert";
												die;
											}
											$fileSize = $_FILES['avatar_user']['size'];

											$fileType = "." . strtolower(substr(strrchr($_FILES['avatar_user']['name'], '.'), 1));

											if (!in_array($fileType, $valideType)) {
												echo "le fichier sélectionné n'est pas une image";
												die;
											}
											$tmpName = $_FILES['avatar_user']['tmp_name'];
											$Name = $_FILES['avatar_user']['name'];
											$fileName = "avatar/" . $_SESSION['login'] . "/" . $Name;
											$résultUplod = move_uploaded_file($tmpName, $fileName);
											echo $tmpName;
											if ($résultUplod) {
												echo "transfere terminé";
											}
											$idUser = $_SESSION['id'];
											$bdd->query("UPDATE `User` SET `user_avatar`= '$fileName' WHERE ID_User = $idUser");
											?>
										<meta http-equiv="refresh" content="0.01;URL=profil.php">
										<?php
										}
									}



									?>
								</figure>
							</div>
						</div>
						<div class="col-lg-10 col-sm-9">
							<div class="timeline-info">
								<ul>
									<li class="admin-name">
										<h5><?php echo $_SESSION['login'] ?></h5>
										<span><?php echo "@" . $_SESSION['login'] . "" ?></span>
									</li>
									<li>
										<!-- Page = Rt + post + like-->
										<a class="" href="profil.php" title="" data-ripple="">Page</a>
										<a class="" href="#" title="" data-ripple="">rt</a>
										<a class="active" href="post.php" title="" data-ripple="">posts</a>
										<a class="" href="like.php" title="" data-ripple="">like</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget">
											<h4 class="widget-title">Raccourci</h4>
											<ul class="naves">
												<li>
													<i class="ti-files"></i>
													<a href="home.php" title="">Actus</a>
												</li>
												<li>
													<i class="ti-user"></i>
													<a href="timeline-friends.html" title="">Amis</a>
												</li>
												<li>
													<i class="ti-image"></i>
													<a href="timeline-photos.html" title="">images</a>
												</li>
												<li>
													<i class="ti-video-camera"></i>
													<a href="timeline-videos.html" title="">videos</a>
												</li>

												<li>
													<i class="ti-power-off"></i>
													<a href="deconnexion.php" title="">Logout</a>
												</li>
											</ul>
										</div><!-- Shortcuts -->
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="central-meta">
										<h3>Fil d'Actualité</h3>
										<br>
										<div class="new-postbox">
											<figure>
												<img src="images/resources/admin2.jpg" alt="">
											</figure>
											<div class="newpst-input">
												<form method="POST">
													<textarea name="dataText" rows="2" placeholder="Que voulez vous dire ? "></textarea>
													<div class="attachments">
														<ul>
															<li>
																<i class="fa fa-music"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-video-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<button type="submit">Publier</button>
															</li>
														</ul>
													</div>
												</form>
											</div>
										</div>
									</div><!-- add post new box -->
									<div class="loadMore">
										<?php
											viewTwoak($bdd, "SELECT Twoak.ID_Twoak, Twoak.Twoak_texte, Twoak.Twoak_published, User.user_login, User.user_avatar FROM `Twoak`, User WHERE Twoak.ID_User = User.ID_User AND User.ID_User = " . $_SESSION['id'] . " ORDER BY `Twoak_published` DESC");
										?>
									</div>
								</div><!-- centerl meta -->
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget friend-list stick-widget">
											<h4 class="widget-title">Amis</h4>
											<div id="searchDir"></div>
											<ul id="people-list" class="friendz-list">
												<li>
													<div class="friendz-meta">
													<!-- TODO Renvoyer sur la page de profil de l'utilisateur sur lequel on click -->
													<?php 
														$user->getFriends($_SESSION['id'], $bdd);	
													?>
													</div>
												</li>
											</ul>
										</div><!-- friends list sidebar -->
									</aside>
								</div><!-- sidebar -->
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
		<h4 class="panel-title">General Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>use night mode</span>
				<input type="checkbox" id="nightmode1" />
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notifications</span>
				<input type="checkbox" id="switch22" />
				<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notification sound</span>
				<input type="checkbox" id="switch33" />
				<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>My profile</span>
				<input type="checkbox" id="switch44" />
				<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show profile</span>
				<input type="checkbox" id="switch55" />
				<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
		<h4 class="panel-title">Account Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>Sub users</span>
				<input type="checkbox" id="switch66" />
				<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>personal account</span>
				<input type="checkbox" id="switch77" />
				<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Business account</span>
				<input type="checkbox" id="switch88" />
				<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show me online</span>
				<input type="checkbox" id="switch99" />
				<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Delete history</span>
				<input type="checkbox" id="switch101" />
				<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Expose author name</span>
				<input type="checkbox" id="switch111" />
				<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div><!-- side panel -->

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>


</html>