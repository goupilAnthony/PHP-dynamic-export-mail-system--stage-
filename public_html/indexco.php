<?php session_start();

					
					if(isset($_GET['deco'])){
							// Détruit toutes les variables de session
							$_SESSION = array();
							 
							// Si vous voulez détruire complètement la session, effacez également
							// le cookie de session.
							// Note : cela détruira la session et pas seulement les données de session !
							if (ini_get("session.use_cookies")) {
								$params = session_get_cookie_params();
								setcookie(session_name(), '', time() - 42000,
									$params["path"], $params["domain"],
									$params["secure"], $params["httponly"]
								);
							}
							session_destroy(); 
			  				header('Location: index.php'); 
							// echo "test";
							exit(); }
			
if(!isset($_SESSION['name'])){
	echo "test";
	header('Location: index.php');
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Export</title>
<style>
#deco{position:absolute;bottom:0px;right:0px;}
</style>
</head>
 
<body>
<?php include("header.php"); ?>
<div>
<a href="?deco=1" id="deco" >Déconnexion</a>
</div>



					


</body>
</html>
