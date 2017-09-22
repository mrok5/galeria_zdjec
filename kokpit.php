<?php
include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
	$user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<?php include('naglowek.php'); ?>
<?php include('navbar2.php'); ?>


<?php
switch($_GET['p']){
	case 'dodajzdjecie':
		include('dodajzdjecie.php');
	break;
	case 'dodajalbum':
		include('dodajalbum.php');
	break;
	case 'edytujzdjecie':
		include('edytujzdjecie.php');
	break;
	case 'usunalbum':
		include('usunalbum.php');
	break;
	default:
		echo '<div class="jumbotron"><h1>Witaj!</h1><p>Znajdujesz się w panelu użytkownika. Możesz tutaj dodawać/usuwać zdjęcia i albumy. Wybierz pozycję z menu w prawym górnym rogu.</p></div>'; 
}
?>


</div> 

</body>
</html>