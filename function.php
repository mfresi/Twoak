<?php

function UploadIMG($fileerror, $filename, $filetempname, $bdd, $querydebut, $queryfin, $dossier)
{

    $valideType = array('.jpg', '.jpeg', '.png', '.gif');

    if ($fileerror > 0) {
        echo "une erreur est survenue lors du transfert";
        die;
    }

    $fileType = "." . strtolower(substr(strrchr($filename, '.'), 1));

    if (!in_array($fileType, $valideType)) {
        echo "le fichier sélectionné n'est pas une image";
        die;
    }
    $tmpName = $filetempname;
    $Name = $filename;
    $fileName = $dossier . "/" . $_SESSION['login'] . "/" . $Name;
    $résultUplod = move_uploaded_file($tmpName, $fileName);

    if ($résultUplod) {
        echo "transfere terminé";
    }
    $bdd->query($querydebut . $fileName . $queryfin);
}

function addTwoak($bdd, $request)
{
    $selectAvatar = $bdd->prepare($request);
    $selectAvatar->execute();
    $tabAvatar = $selectAvatar->fetch();
?>
    <div class="central-meta">
        <h3>Fil d'Actualité</h3>
        <br>
        <div class="new-postbox">
            <figure>
                <img src="<?php echo $tabAvatar['user_avatar']; ?>">
            </figure>
            <div class="newpst-input">
                <form method="POST">
                    <textarea name="dataText" rows="2" placeholder="Que voulez vous dire ? "></textarea>
                    <div class="attachments">
                        <ul>
                            <li>
                                <i class="fa fa-image"></i>
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
    </div>
<?php
}

function viewFriends($bdd, $request)
{
    $selectFriends = $bdd->prepare($request);
    $selectFriends->execute(); ?>

    <div class="col-lg-3">
        <aside class="sidebar static">
            <div class="widget friend-list stick-widget">
                <h4 class="widget-title">Amis</h4>
                <div id="searchDir"></div>
                <ul id="people-list" class="friendz-list">
                    <?php while ($tabFriends = $selectFriends->fetch()) { ?>
                        <li>
                            <figure>
                                <img src="<?php echo $tabFriends['user_avatar']; ?>">
                                <?php
                                if ($tabFriends['user_status'] == 1) {
                                    echo '<span class="status f-online"></span>';
                                } else {
                                    echo '<span class="status f-off"></span>';
                                }
                                ?>

                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html"><?php echo $tabFriends['user_login']; ?></a>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- friends list sidebar -->
        </aside>
    </div>
<?php
}
function like($bdd, $request, $id)
{
    $selectLike = $bdd->prepare($request);
    $selectLike->execute();
    $Likeexist = $selectLike->rowCount();
    if($Likeexist > 0){
?>
    <div class="like">
        <form action="" method="post">
            <input type="checkbox" class="checkbox" id="<?php echo "checkbox" . $id; ?>" name="<?php echo "likecheckbox" . $id; ?>" checked/>
            <label for="<?php echo "checkbox" . $id; ?>">
                <svg class="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                    <g class="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                        <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" class="heart" fill="#AAB8C2" />
                        <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    </g>
                </svg>
            </label>

        </form>


    </div>
    <?php }else{ ?>
        <div class="like">
        <form action="" method="post">
            <input type="checkbox" class="checkbox" id="<?php echo "checkbox" . $id; ?>" name="<?php echo "dontlikecheckbox" . $id; ?>"/>
            <label for="<?php echo "checkbox" . $id; ?>">
                <svg class="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                    <g class="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                        <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" class="heart" fill="#AAB8C2" />
                        <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    </g>
                </svg>
            </label>

        </form>


    </div>
    <?php


    }
    if(isset($_POST['dontlikecheckbox'.$id])){
        echo "coucou";
    }
}
function viewTwoak($bdd, $request)
{
    $selectTwoak = $bdd->prepare($request);
    $selectTwoak->execute();
    ?><?php
        while ($TwoakSelect = $selectTwoak->fetch()) {
        ?>

    <div class="central-meta item">
        <div class="user-post">
            <div class="friend-info">
                <figure>
                    <img src="<?php echo $TwoakSelect['user_avatar']; ?>" alt="">
                </figure>
                <div class="friend-name">
                    <ins><a href="time-line.html" title=""><?php echo $TwoakSelect['user_login']; ?></a></ins>
                    <span>publié : <?php echo $TwoakSelect['Twoak_published']; ?></span>
                </div>
                <div class="post-meta">
                    <!--<img src="images/resources/user-post.jpg" alt=""> -->

                    <div class="description">
                        <p>
                            <?php echo $TwoakSelect['Twoak_texte']; ?>
                        </p>
                    </div>
                    <div class="we-video-info">
                        <ul>
                            <li>
                                <span class="comment" data-toggle="tooltip" title="Comments">
                                    <i class="fa fa-comments-o"></i>
                                    <ins><?php echo "0"; ?></ins>
                                </span>
                            </li>
                            <li>

                                <?php like($bdd, "SELECT `ID_Twoak`, `ID_User`, `Loak_NBLoak`, `ID_Loak` FROM `Loak` WHERE `ID_Twoak` = " . $TwoakSelect['ID_Twoak']." AND `ID_User` = ".$_SESSION['id'], $TwoakSelect['ID_Twoak']); ?>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!--
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
            <a href="#" title="" class="showmore underline">more comments</a>
        </li>
        <li class="post-comment">
            <div class="comet-avatar">
                <img src="images/resources/comet-1.jpg" alt="">
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
</div> -->
        </div>
    </div>
<?php }
?>
</div>
        
<?php



        }
?>

<script>
    function banipfct(iptoban)
    {
        
}

</script>
