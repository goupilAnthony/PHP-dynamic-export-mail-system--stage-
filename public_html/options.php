<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
    <title>anthony.vestaradio.net &mdash; Coming Soon</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="This is a default index page for a new domain."/>
    <style type="text/css">
        body {font-size:20px; color:#777777; font-family:arial;text-align: center;}
        h1 {font-size:64px; color:#555555; margin: 70px 0 50px 0;}
        p {width:320px; text-align:center; margin-left:auto;margin-right:auto; margin-top: 30px }
        #powered {width:320px; text-align:center; margin-left:auto;margin-right:auto;bottom: 0px;}
        #depenses{border: 1px solid grey;}
        a:link {color: #34536A;}
        a:visited {color: #34536A;}
        a:active {color: #34536A;}
        a:hover {color: #34536A;}
		#subBtn{display: inline-block;position: relative;width: 120px;height: 32px;line-height: 32px; border-radius: 2px;font-size: 0.9em;background-color: #4285f4;color: #fff;transition: box-shadow 0.2s cubic-bezier(0.4, 0, 0.2, 1);transition-delay: 0.2s;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);margin-bottom:10px;text-decoration:none;}
		#subBtn:hover{box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);transition-delay: 0s;}
    </style>
   </head>

<body>

                <?php include("header.php"); ?>
                
   <?php    error_reporting(E_ALL);
            ini_set('display_errors','1');
            $link = mysqli_connect("localhost", "admin_vestaprod", "7ZKIXakoPA", "admin_vestaprod");
            mysqli_query($link,"SET NAMES utf8"); 
			
			  function ecrire_mails($mailtxt,$titre){
				$file = $titre;
				$fp = fopen($file.'.txt','a+');
				fseek($fp,SEEK_END); 
				$nouverr=$mailtxt."\r\n"; 
				fputs($fp,$nouverr); 
				fclose($fp); 
      		  } 
			  
			  // 2 cb  , 4 , 5 cheque
			  switch($_POST['options']){
				  
			  	case 1 : 	$sql = "SELECT * FROM user WHERE connected > '2018-07-18'"; 
                  			$sql = mysqli_query($link,$sql); 
							$titre = "Utilisateurs_s_étant_connectés_apres_le_lancement_du_nouveau_manager";
             				while ($donnees = mysqli_fetch_array($sql) ) { 
            					$email = $donnees['email'];
								ecrire_mails($email,$titre);
             				} 
							echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
			 	break;
			  	case 2 : 	$sql = "SELECT * FROM user WHERE connected > '2018-07-18'"; 
                  			$sql = mysqli_query($link,$sql); 
							$titre = "Utilisateurs_ne_s_étant_pas_connectés_apres_le_lancement_du_nouveau_manager";
             				while ($donnees = mysqli_fetch_array($sql) ) { 
            					$email = $donnees['email'];
								ecrire_mails($email,$titre);
             				}  
							echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
				break;
				case 3 : 
							$titre = "Abonnés_payant_par_cheque_cb_et_virement";
							$sql = mysqli_query($link,"SELECT id, email FROM user");
							while($donnees = mysqli_fetch_array($sql)){
										$id = $donnees['id'];
										$sql2 = "SELECT user_username , typePaiement_nom , MAX(datePaiement) FROM facture WHERE user_username=".$id." "; 
										$sql2 = mysqli_query($link,$sql2); 
										while ($donnees2 = mysqli_fetch_array($sql2) ) { 
											if($donnees2['typePaiement_nom'] == '2' || $donnees2['typePaiement_nom'] == '4' || $donnees2['typePaiement_nom'] == '5'){ $email = $donnees['email']; ecrire_mails($email,$titre); }
										}
							}
							
						//	echo "<form action='download.php' method='GET'><input type='hidden' name='file' value='".$titre."' /><input type='submit' value='Télécharger' /></form>";
							echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
				break;
				case 4 :  ; break;
				case 5 :  ; break;
				
			  }
		
		
		
			
			
			
    ?>
</body>
</html>
