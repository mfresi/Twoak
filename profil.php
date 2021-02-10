<?php session_start() ;
include "database.php";
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
					<a href="#" title=""><img src="images/logo2.png" alt=""></a>
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
				<a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
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
						<a href="#" title=""><span class="status f-online"></span>online</a>
						<a href="#" title=""><span class="status f-away"></span>away</a>
						<a href="#" title=""><span class="status f-off"></span>offline</a>
						<a href="#" title=""><i class="ti-user"></i> view profile</a>
						<a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
						<a href="#" title=""><i class="ti-target"></i>activity log</a>
						<a href="#" title=""><i class="ti-settings"></i>account setting</a>
						<a href="#" title=""><i class="ti-power-off"></i>log out</a>
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
									$fig = $bdd->prepare("SELECT `user_avatar` FROM `User` WHERE `ID_User` = ".$_SESSION['id']);
									$fig->execute();
									$figexite = $fig->rowCount();
									$figselect = $fig->fetch();
									if($figexite != 0){
									?>
									<img src="<?php echo $figselect['user_avatar']; ?>" alt="">
									<?php }else{
										
										?>
										
										<img src="images/resources/user-avatar2.jpg" alt="">
										<?php } ?>
									<form method="POST" class="edit-phto" enctype="multipart/form-data">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Changer de photo de profile
											<input type="file" name="avatar_user"/>
											
										</label>
										<input type ='submit' name= 'test'>
									</form>
									
									<?php

										if (isset($_POST['test'])) {
										?> 
										<?php
										$maxSize = 900000;
										$valideType = array('.jpg', '.jpeg', '.gif', '.png');

										if ($_FILES['avatar_user']['error'] > 0) {
											echo "une erreur est survenue lors du transfert";
											die;
										}
										$fileSize = $_FILES['avatar_user']['size'];

										//if ($fileSize > $maxSize) {
										// echo "les fichier est trop volumineux";
										// die;
										// }

										$fileType = "." . strtolower(substr(strrchr($_FILES['avatar_user']['name'], '.'), 1));

										if (!in_array($fileType, $valideType)) {
											echo "le fichier sélectionné n'est pas une image";
											die;
										}
										$tmpName = $_FILES['avatar_user']['tmp_name'];
										$Name = $_FILES['avatar_user']['name'];
										$fileName = "avatar/" . $Name;
										$résultUplod = move_uploaded_file($tmpName, $fileName);
										if ($résultUplod) {
											echo "transfere terminé";
										}
										$idUser = $_SESSION['id'];
										$bdd->query("UPDATE `User` SET `user_avatar`= '$fileName' WHERE ID_User = $idUser");
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
										<a class="active" href="fav-page.html" title="" data-ripple="">Page</a>
										<a class="" href="notifications.html" title="" data-ripple="">Notifications</a>
										<a class="" href="inbox.html" title="" data-ripple="">rt</a>
										<a class="" href="fav-page.html" title="" data-ripple="">posts</a>
										<a class="" href="page-likers.html" title="" data-ripple="">like</a>
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
										<div class="new-postbox">
											<figure>
												<img src="images/resources/admin3.jpg" alt="">
											</figure>
											<div class="newpst-input">
												<form method="post">
													<textarea rows="3" placeholder="Que voulez vous dire ?"></textarea>
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
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="images/resources/friend-avatar11.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Natti Natasha</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="post-meta">
														<img src="images/resources/user-post6.jpg" alt="">
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
															<span>beautiful lamp on discount 50%</span>
															<p>
																Amazon <a href="#" title="">#amazonee</a> the most beatuiful lamp available in america and the saudia arabia, you can purchase for the home and shop for increase the room beauty
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
																	<h5><a href="time-line.html" title="">Donald Trump</a></h5>
																	<span>1 week ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
																	<i class="em em-smiley"></i>
																</p>
															</div>
														</li>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-3.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Jason borne</a></h5>
																	<span>1 year ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
															</div>
															<ul>
																<li>
																	<div class="comet-avatar">
																		<img src="images/resources/comet-2.jpg" alt="">
																	</div>
																	<div class="we-comment">
																		<div class="coment-head">
																			<h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
																			<span>1 month ago</span>
																			<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																		</div>
																		<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
																	</div>
																</li>
																<li>
																	<div class="comet-avatar">
																		<img src="images/resources/comet-3.jpg" alt="">
																	</div>
																	<div class="we-comment">
																		<div class="coment-head">
																			<h5><a href="time-line.html" title="">Olivia</a></h5>
																			<span>16 days ago</span>
																			<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																		</div>
																		<p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
																	</div>
																</li>
															</ul>
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
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="images/resources/friend-avatar10.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Janice Griffith</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="description">

														<p>
															Curabitur World's most beautiful car in <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
														</p>
													</div>
													<div class="post-meta">
														<div class="linked-image align-left">
															<a href="#" title=""><img src="images/resources/page1.jpg" alt=""></a>
														</div>
														<div class="detail">
															<span>Love Maid - ChillGroves</span>
															<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
															<a href="#" title="">www.sample.com</a>
														</div>
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
													</div>
												</div>
											</div>
										</div>
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="images/resources/friend-avatar10.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Janice Griffith</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="post-meta">
														<iframe src="https://player.vimeo.com/video/15232052" height="315" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
															<span>Lonely Cat Enjoying in Summer</span>
															<p>
																Curabitur <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
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
																<img src="images/resources/comet-2.jpg" alt="">
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
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget friend-list stick-widget">
											<h4 class="widget-title">Amis</h4>
											<div id="searchDir"></div>
											<ul id="people-list" class="friendz-list">
												<li>
													<figure>
														<img src="images/resources/friend-avatar.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">bucky barnes</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1e6977706a7b6c6d71727a7b6c5e79737f7772307d7173">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>
													<figure>
														<img src="images/resources/friend-avatar2.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">Sarah Loren</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="debcbfacb0bbad9eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>
													<figure>
														<img src="images/resources/friend-avatar3.jpg" alt="">
														<span class="status f-off"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">jason borne</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e646f7d61606c4e69636f6762206d6163">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>
													<figure>
														<img src="images/resources/friend-avatar4.jpg" alt="">
														<span class="status f-off"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">Cameron diaz</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="513b30223e3f3311363c30383d7f323e3c">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar5.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">daniel warber</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="315b50425e5f5371565c50585d1f525e5c">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar6.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">andrew</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f69c9785999894b6919b979f9ad895999b">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar7.jpg" alt="">
														<span class="status f-off"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">amy watson</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bad0dbc9d5d4d8faddd7dbd3d694d9d5d7">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar5.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">daniel warber</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d667468696547606a666e6b2964686a">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar2.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">Sarah Loren</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d3d0c3dfd4c2f1d6dcd0d8dd9fd2dedc">[email&#160;protected]</a></i>
													</div>
												</li>
											</ul>
											<div class="chat-box">
												<div class="chat-head">
													<span class="status f-online"></span>
													<h6>Bucky Barnes</h6>
													<div class="more">
														<span><i class="ti-more-alt"></i></span>
														<span class="close-mesage"><i class="ti-close"></i></span>
													</div>
												</div>
												<div class="chat-list">
													<ul>
														<li class="me">
															<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
															<div class="notification-event">
																<span class="chat-message-item">
																	Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
																</span>
																<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
															</div>
														</li>
														<li class="you">
															<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
															<div class="notification-event">
																<span class="chat-message-item">
																	Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
																</span>
																<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
															</div>
														</li>
														<li class="me">
															<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
															<div class="notification-event">
																<span class="chat-message-item">
																	Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
																</span>
																<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
															</div>
														</li>
													</ul>
													<form class="text-box">
														<textarea placeholder="Post enter to post..."></textarea>
														<div class="add-smiles">
															<span title="add icon" class="em em-expressionless"></span>
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
											</div>
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