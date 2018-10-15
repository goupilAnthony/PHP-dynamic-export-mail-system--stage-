<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
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
    </style>
</head>

<body>
        <?php include("header.php"); ?>
        <?php 

            error_reporting(E_ALL);
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
    

     
     
           if($_POST['choix'] == '0to1000'){ 
             
                 $sql = "SELECT * FROM user"; 
                 $sql = mysqli_query($link,$sql);
				 $titre = '0to1000';
                 while ($donnees = mysqli_fetch_array($sql) ) { 
               		$sql2 = "SELECT SUM(total) AS totalclient FROM facture WHERE user_username='".$donnees['id']."' and typePaiement_nom!='1'"; 
                    $sql2 = mysqli_query($link,$sql2);
                    while ($donnees2 = mysqli_fetch_array($sql2) ) {  
						$total = $donnees2['totalclient']; 
                    } 				 
                    if($total != 0 && $total < 1000){ 
					 //  	echo '<div>'.$donnees['email'].'  :  '.$total.'</div>'; 
                        $totxt = " ".$donnees['nom']." , ".$donnees['prenom']." , ".$donnees['email']." "; 
                        ecrire_mails($totxt,$titre); 
                    } 
                }    
				echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';  
              
           }else if($_POST['choix'] == '1000to2000'){ 
            $titre = '1000to2000';
                 $sql = "SELECT * FROM user"; 
                 $sql = mysqli_query($link,$sql);
                 while ($donnees = mysqli_fetch_array($sql) ) { 
               		$sql2 = "SELECT SUM(total) AS totalclient FROM facture WHERE user_username='".$donnees['id']."' and typePaiement_nom!='1'"; 
                    $sql2 = mysqli_query($link,$sql2);
                    while ($donnees2 = mysqli_fetch_array($sql2) ) {  
						$total = $donnees2['totalclient']; 
                    } 				 
                    if($total != 0 && $total > 1000 && $total < 2000){ 
					//	echo '<div>'.$donnees['email'].'  :  '.$total.'</div>'; 
                        $totxt = " ".$donnees['nom']." , ".$donnees['prenom']." , ".$donnees['email']." "; 
                        ecrire_mails($totxt,$titre); 
                    } 
                 } 
				 echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
           }else if($_POST['choix'] == '8000to10000'){ 
               $titre = '8000to10000';
                 $sql = "SELECT * FROM user"; 
                 $sql = mysqli_query($link,$sql);

                 while ($donnees = mysqli_fetch_array($sql) ) { 
               		$sql2 = "SELECT SUM(total) AS totalclient FROM facture WHERE user_username='".$donnees['id']."' and typePaiement_nom!='1'"; 
                    $sql2 = mysqli_query($link,$sql2);
                    while ($donnees2 = mysqli_fetch_array($sql2) ) {  
						$total = $donnees2['totalclient']; 
                    } 			 
                    if($total != 0 && $total > 8000 && $total < 10000){ 
					//	echo '<div>'.$donnees['email'].'  :  '.$total.'</div>'; 
                        $totxt = " ".$donnees['nom']." , ".$donnees['prenom']." , ".$donnees['email']." "; 
                        ecrire_mails($totxt,$titre); 
                    } 
                } 
				echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
           }else if($_POST['choix'] == '10000plus'){ 
               $titre = '10000plus';
                 $sql = "SELECT * FROM user"; 
                 $sql = mysqli_query($link,$sql);

                 while ($donnees = mysqli_fetch_array($sql) ) {
               		$sql2 = "SELECT SUM(total) AS totalclient FROM facture WHERE user_username='".$donnees['id']."' and typePaiement_nom!='1'"; 
                    $sql2 = mysqli_query($link,$sql2);
                    while ($donnees2 = mysqli_fetch_array($sql2) ) {  
						$total = $donnees2['totalclient']; 
                    } 			 
                    if($total != 0 && $total > 10000){ 
                    //  	echo '<div>'.$donnees['email'].'  :  '.$total.'</div>'; 
                       	$totxt = " ".$donnees['nom']." , ".$donnees['prenom']." , ".$donnees['email']." "; 
                        ecrire_mails($totxt,$titre); 
                    } 
               } 
			   echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
           }else if($_POST['choix'] == '2000to5000'){ 

                 $sql = "SELECT * FROM user"; 
                 $sql = mysqli_query($link,$sql);
				$titre = '2000to5000';
                 while ($donnees = mysqli_fetch_array($sql) ) { 

              		$sql2 = "SELECT SUM(total) AS totalclient FROM facture WHERE user_username='".$donnees['id']."' and typePaiement_nom!='1'"; 
                    $sql2 = mysqli_query($link,$sql2);
                    while ($donnees2 = mysqli_fetch_array($sql2) ) {  
						$total = $donnees2['totalclient']; 
                 	} 			 
                    if($total != 0 && $total > 2000 && $total < 5000){ 
					//	echo '<div>'.$donnees['email'].'  :  '.$total.'</div>';
                        $totxt = " ".$donnees['nom']." , ".$donnees['prenom']." , ".$donnees['email']." "; 
                        ecrire_mails($totxt,$titre); 
                    } 
                 } 
			   echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
           }else if($_POST['choix'] == '5000to8000'){ 
               
					$titre = '5000to8000';
                 $sql = "SELECT * FROM user"; 
                 $sql = mysqli_query($link,$sql);

                 while ($donnees = mysqli_fetch_array($sql) ) { 

               		$sql2 = "SELECT SUM(total) AS totalclient FROM facture WHERE user_username='".$donnees['id']."' and typePaiement_nom!='1'"; 
                    $sql2 = mysqli_query($link,$sql2);
                    while ($donnees2 = mysqli_fetch_array($sql2) ) {  
						$total = $donnees2['totalclient']; 
                  	} 			 
                    if($total != 0 && $total > 5000 && $total < 8000){ 
					//	echo '<div>'.$donnees['email'].'  :  '.$total.'</div>'; 
                        $totxt = " ".$donnees['nom']." , ".$donnees['prenom']." , ".$donnees['email']." "; 
                        ecrire_mails($totxt,$titre); 
                    } 
              	} 
				echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
           } 
      ?>
</body>

</html>


