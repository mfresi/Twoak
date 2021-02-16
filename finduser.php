<!--DANEL A finir -->
<?php
session_start();
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
	<div class="result-search" style="display:block">

<?php
if (isset($_GET["user"])) { 
		$sql = "SELECT DISTINCT `user_login` FROM `User` WHERE `User`.`user_login` LIKE '%".$_GET['user']."%';";
		$searchUser = $bdd->query($sql);
		$req = $searchUser->fetchALL();
        foreach($req as $r){
            echo $r['user_login'];
        }
}?>
	</div>
</li>
