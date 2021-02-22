<!--DANEL A finir -->
<?php
require_once('database.php');
?>
<script>
function searchBar(){
    var s = document.getElementById("search-user");
    if(s.style.display === "none") {
        s.style.display = "block";
    }else{
        s.style.display = "none";
    }
}
</script>
<li>
	<button onclick="searchBar()" title="Search Bar" data-ripple=""><i class="ti-search"></i>Search</button>
	<div class="result-search" >
    </div>
    <div>

<?php
if (isset($_GET["user"])) { 
		$sql = "SELECT DISTINCT `user_login`,`ID_User` FROM `User` WHERE `User`.`user_login` LIKE '%".$_GET['user']."%';";
		$searchUser = $bdd->query($sql);
		$req = $searchUser->fetchALL();
        ?> 

        <table style="text-align:left;background:white;">
            <th>Utilisateurs :</th>
        <?php
        foreach($req as $r){
            $usr[$y] = $r['user_login'];
            echo "<tr><td><a href='profil.php?usr=".$r['ID_User']."'>".$r['user_login']."</a></td></tr>";
            $y++;
        }
        ?>
        </table>
        <button type="submit">Valider</button>
        <?php
}?>
	</div>
</li>
