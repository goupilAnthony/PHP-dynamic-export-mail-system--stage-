<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php
// désactive le temps max d'exécution
set_time_limit(0);
 
// démarrage de la session
session_start();
 
// vérifie que l'utilisateur est connecté
if (!isset($_SESSION["name"])) {
    header("HTTP/1.1 403 Forbidden");
    exit;
}
 
// on a bien une demande de téléchargement de fichier
if (empty($_GET["file"])) {
    header("HTTP/1.1 404 Not Found");
    exit;
}
// le nom doit être un nom de fichier
if(basename($_GET["file"],".txt") != $_GET["file"]) {
    header("HTTP/1.1 400 Bad Request");
    exit;
}
$name = $_GET["file"].".txt";

$size = filesize($filename);
 
// désactivation compression GZip
if (ini_get("zlib.output_compression")) {
    ini_set("zlib.output_compression", "Off");
}
 
// fermeture de la session
session_write_close();
 
// désactive la mise en cache
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0");
header("Cache-Control: max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
 
// force le téléchargement du fichier avec un beau nom
header("Content-Type: application/force-download");
header('Content-Disposition: attachment; filename="'.$name.'"');
 
// indique la taille du fichier à télécharger
header("Content-Length: ".$size);
 
// envoi le contenu du fichier
readfile($filename);
echo "test";
?>

</body>
</html>
