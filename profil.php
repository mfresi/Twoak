<?php session_start();
include "database.php";
include "function.php";
global $bdd;

if(isset($_GET['usr'])){
	$id=$_GET['usr'];
}else{
	$id=$_SESSION['id'];
}
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
							<i class="ti-bell"></i><span>
								<!-- Afficher le nombre de notifs-->
							</span>
						</a>
					</li>
					<li>
						<a href="#" title="Messages" data-ripple="">
							<i class="ti-comment"></i><span>
								<!-- Afficher le nombre de messages-->
							</span>
						</a>
					</li>
				</ul>
				<div class="user-img">
					<img src="images/resources/admin.jpg" alt="">
					<span class="status f-online"></span>
					<div class="user-setting">
						<a href="#" title=""><i class="ti-user"></i>Afficher Profil</a>
						<a href="#" title=""><i class="ti-settings"></i>Paramètres du compte </a><!-- modifier mdp et mail-->
						<a href="deconnexion.php" title=""><i class="ti-power-off"></i>Se Déconnecter</a>
					</div>
				</div>
				<span class="ti-menu main-menu" data-ripple=""></span>
			</div>
		</div>
		<section>
			<div class="feature-photo">
				<figure>
					<?php
					$fig = $bdd->prepare("SELECT `user_banniere` FROM `User` WHERE `ID_User` = " . $id);
					$fig->execute();
					$figexite = $fig->rowCount();
					$figselect = $fig->fetch();
					if ($figexite > 0) {
					?>
						<img src="<?php echo $figselect['user_banniere']; ?>" alt="">
					<?php }
					?>
				</figure>
				<div class="add-btn">
					<span>
						<!-- Affiche le nombre de followers -->
					</span>
					<!-- Bouton follow -->
					<form action="" method="GET">
						<button title="Follow" data-ripple="" id="butFollow" name="follow">Follow</button>
					</form>
					<!-- Bouton unfollow -->
					<form action="" method="GET">
						<button title="Unfollow" data-ripple="" id="butUnfollow" name="unfollow">Unfollow</button>
					</form>
				</div>
				<form method="POST" class="edit-phto" enctype="multipart/form-data">
					<i class="fa fa-camera-retro"></i>
					<label class="fileContainer">
						Changer de photo de profile
						<input type="file" name="banniere_user" />
					</label>
					<input type='submit' name='test_banniere'>
				</form>
				<?php
				if (isset($_POST['test_banniere'])) {
					if (file_exists("banniere/" . $_SESSION['login'])) {
						echo 'Le répertoire existe déjà!';
						UploadIMG(
							$_FILES['banniere_user']['error'],
							$_FILES['banniere_user']['name'],
							$_FILES['banniere_user']['tmp_name'],
							$bdd,
							"UPDATE `User` SET `user_banniere`= '",
							"' WHERE ID_User = " . $_SESSION['id'],
							"banniere"
						);
				?>
						<meta http-equiv="refresh" content="0.01;URL=profil.php">
					<?php
					} else {
						$nom = "banniere/" . $_SESSION['login'];
						mkdir($nom);
						UploadIMG(
							$_FILES['banniere_user']['error'],
							$_FILES['banniere_user']['name'],
							$_FILES['banniere_user']['tmp_name'],
							$bdd,
							"UPDATE `User` SET `user_banniere`= '",
							"' WHERE ID_User = " . $_SESSION['id'],
							"banniere"
						);
					?>
						<meta http-equiv="refresh" content="0.01;URL=profil.php">
				<?php
					}
				}
				?>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<?php
									$fig = $bdd->prepare("SELECT `user_avatar` FROM `User` WHERE `ID_User` = " . $id);
									$fig->execute();
									$figexite = $fig->rowCount();
									$figselect = $fig->fetch();
									if ($figexite != 0) {
									?>
										<img src="<?php echo $figselect['user_avatar']; ?>" alt="">
									<?php }
									?>

									<form method="POST" class="edit-phto" enctype="multipart/form-data">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Changer de photo de profile
											<input type="file" name="avatar_user" />
										</label>
										<input type='submit' name='test_avatar'>
									</form>
									<?php
									if (isset($_POST['test_avatar'])) {
										if (file_exists("avatar/" . $_SESSION['login'])) {
											echo 'Le répertoire existe déjà!';
											UploadIMG(
												$_FILES['avatar_user']['error'],
												$_FILES['avatar_user']['name'],
												$_FILES['avatar_user']['tmp_name'],
												$bdd,
												"UPDATE `User` SET `user_avatar`= '",
												"' WHERE ID_User = " . $_SESSION['id'],
												"avatar"
											);
									?>
											<meta http-equiv="refresh" content="0.01;URL=profil.php">
										<?php
										} else {
											$nom = "avatar/" . $_SESSION['login'];
											mkdir($nom);
											UploadIMG(
												$_FILES['avatar_user']['error'],
												$_FILES['avatar_user']['name'],
												$_FILES['avatar_user']['tmp_name'],
												$bdd,
												"UPDATE `User` SET `user_avatar`= '",
												"' WHERE ID_User = " . $_SESSION['id'],
												"avatar"
											);
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
									<?php
									if(isset($_GET['usr'])){
										$sqlLogin 	= "SELECT `user_login` FROM `User` WHERE `User`.`ID_User` = ".$id."";
										$reqz 		= $bdd->query($sqlLogin);
										$logX 		= $reqz->fetch();
										$log		= $logX['user_login'];
									}else{
										$log = $_SESSION['login'];
									}
									?>
										<h5><?php echo $log ?></h5>
										<span><?php echo "@" . $log . "" ?></span>
									</li>
									<li>
										<!-- Page = Rt + post + like-->
										<a class="active" href="#" title="" data-ripple="">Page</a>
										<a class="" href="#" title="" data-ripple="">rt</a>
										<a class="" href="post.php" title="" data-ripple="">posts</a>
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
											<h4 class="widget-title">Raccourcis</h4>
											<ul class="naves">
												<li>
													<i class="ti-files"></i>
													<a href="index.php" title="">Actus</a>
												</li>
												<li>
													<i class="ti-user"></i>
													<a href="timeline-friends.html" title="">Amis</a>
												</li>
												<li>
													<i class="ti-image"></i>
													<a href="timeline-photos.html" title="">Images</a>
												</li>
												<li>
													<i class="ti-video-camera"></i>
													<a href="timeline-videos.html" title="">Videos</a>
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
									<div class="central-meta">
									</div>
									<div class="loadMore">

										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="images/resources/friend-avatar11.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Sarah grey</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="post-meta">
														<img src="images/resources/user-post7.jpg" alt="">
														<div class="we-video-info">
															<ul>
																<li>
																	<span class="views" data-toggle="tooltip" title="views">
																		<i class="fa fa-eye"></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="comment" data-toggle="tooltip" title="Comments">
																		<i class="fa fa-comments-o"></i>
																		<ins>52</ins>
																	</span>
																</li>
																<li>
																	<span class="like" data-toggle="tooltip" title="like">
																		<i class="ti-heart"></i>
																		<ins>2.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="dislike" data-toggle="tooltip" title="dislike">
																		<i class="ti-heart-broken"></i>
																		<ins>200</ins>
																	</span>
																</li>
																<li class="social-media">
																	<div class="menu">
																		<div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																			</div>
																		</div>

																	</div>
																</li>
															</ul>
														</div>
														<div class="description">
															<span>Leather bag 70% discount in Summer</span>
															<p>
																Curabitur <a href="#" title="">#amazon_shop</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
															</p>
														</div>
													</div>
												</div>
												<div class="coment-area">
													<ul class="we-comet">
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-1.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Jason borne</a></h5>
																	<span>1 year ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
															</div>

														</li>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-2.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Sophia</a></h5>
																	<span>1 week ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
																	<i class="em em-smiley"></i>
																</p>
															</div>
														</li>
														<li>
															<a href="#" title="" class="showmore underline">more comments</a>
														</li>
														<li class="post-comment">
															<div class="comet-avatar">
																<img src="images/resources/comet-4.jpg" alt="">
															</div>
															<div class="post-comt-box">
																<form method="post">
																	<textarea placeholder="Post your comment"></textarea>
																	<div class="add-smiles">
																		<span class="em em-expressionless" title="add icon"></span>
																	</div>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																	<button type="submit"></button>
																</form>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>

									</div>
								</div><!-- centerl meta -->
								<?php																	
								viewFriends($bdd, 'SELECT User.user_login, User.user_avatar FROM Follow, User WHERE Follow.Fol_ID_Follower = User.ID_User AND Follow.Fol_ID_Owner = ' . $id . '')
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
		</footer>
	</div>
	</div>
	<div class="side-panel">
		<h4 class="panel-title">Paramètres Généraux</h4>
		<form method="post">
			<!-- Affichage du Mode Nuit -->
			<div class="setting-row">
				<span>Mode Nuit</span>
				<input type="checkbox" id="nightmode1" />
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div>
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>