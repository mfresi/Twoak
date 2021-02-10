<!--DANEL A finir -->
<script>
function searchBar(){
    var s = document.getElementById("searchAll");
    if(s.style.display === "none") {
        s.style.display = "block";
    }else{
        s.style.display = "none";
    }
}
</script>
<li>
	<button onclick="searchBar()" title="Search Bar" data-ripple=""><i class="ti-search"></i>Search</button>
	<div class="searched">

<?php
if (isset($_POST["FindUser"])) { 
		$sql = "SELECT DISTINCT `user_login` FROM `User` WHERE `User`.`user_login` LIKE '%".$_POST['FindUser']."%';";
		$searchUser = $bdd->query($sql);
		$searchUser->fetch();
        echo $searchUser['user_login'];
	    ?>
        <form id ="searchAll" method="post" action="" class="form-search">
            <input type="text" placeholder="Rechercher un utilisateur" name="FindUser">
            <input type="submit" value="Submit" name="recherche"></input>
            <?php echo $searchUser["user_login"]?>
        </form>
        <?php
}else{
	    ?>
	    <form id ="searchAll" method="post" action="" class="form-search">
            <input type="text" placeholder="Recerhcher un utilisateur" name="FindUser">
            <input type="submit" value="Submit" name="recherche"></input>
        </form>
        <?php
}?>
	</div>
</li>
