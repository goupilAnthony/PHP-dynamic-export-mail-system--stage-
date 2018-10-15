<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
    <title>anthony.vestaradio.net &mdash; Coming Soon</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="This is a default index page for a new domain."/>
    <style type="text/css">
        body {font-size:20px; color:#777777; font-family:arial;text-align: center;}
        h1 {font-size:64px; color:#555555; margin: 70px 0 50px 0;}
        p {width:320px; text-align:center; margin-left:auto;margin-right:auto; margin-top: 30px;}
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

        ?>
    
           <?php 
              
		   
		   //PREMIER REMPLISSAGE NEW TABLE
		/*   
		   	    $results = mysqli_query($link,"SELECT * FROM radio");
                 
                 while($donnees2 = mysqli_fetch_array($results)){ 
                        $id = $donnees2['user_username']; 
                        $donnees = mysqli_fetch_array(mysqli_query($link,"SELECT * FROM user WHERE id=".$id." "));
                        $id_client = $donnees['id']; 
                        
                        $id_radio = $donnees2['id']; 
                        mysqli_query( $link , "INSERT INTO `exportnewsletter` (id_client, id_radio) VALUES (".$id_client.",".$id_radio.")"); 
                }  
             
              
               
              
        // REMPLIR NEW TABLE AVEC LES EMAIL POUR CHAQUE USER
    
                    $donnees = mysqli_query($link,"SELECT * FROM exportnewsletter"); 
                    while($results =  mysqli_fetch_array($donnees) ){
                       $id = $results['id_client'];
                       $donnees2 = mysqli_fetch_array(mysqli_query($link,"SELECT * FROM user WHERE id=".$id." "));
                       $email = $donnees2['email'];
        // TEST   echo "<div>ID = ".$id." , email = ".$email." </div>";
                        mysqli_query($link,"UPDATE `exportnewsletter` SET email='".$email."' WHERE id_client='".$id."' ");
                    }
    
         
        // REMPLIR NEW TABLE AVEC LES PACKS POUR CHAQUE RADIO
    
                  $donnees = mysqli_query($link,"SELECT * FROM exportnewsletter"); 
                  while($results = mysqli_fetch_array($donnees)){
                       $id = $results['id_radio'];
                       $donnees2 = mysqli_fetch_array(mysqli_query($link,"SELECT * FROM radio WHERE id=".$id." "));  
                       $offre = $donnees2['pack_nom'];
                        mysqli_query($link,"UPDATE `exportnewsletter` SET offre=".$offre." WHERE id_radio=".$id." ");     
                   }
				   

   
    // REMPLIR NEW TABLE AVEC OPTION MSR POUR CHAQUE RADIO
    
                   $donnees = mysqli_query($link,"SELECT * FROM `radio_option`"); 
                   while($results = mysqli_fetch_array($donnees)){
                        $id = $results['radio_id'];
                        $option = $results['option_key'];
                        if($option == '7'){
                            mysqli_query($link,"UPDATE `exportnewsletter` SET MSR='1' WHERE id_radio='".$id."' ");
                        }
                    } 
                            
		// REMPLIR NEW TABLE AVEC OPTION MOBILEAPP POUR CHAQUE RADIO
    
                    $donnees = mysqli_query($link,"SELECT * FROM `radio_option`"); 
                    while($results = mysqli_fetch_array($donnees)){
                        $id = $results['radio_id'];
                        $option = $results['option_key'];
                        if($option == '14'){
                            mysqli_query($link,"UPDATE `exportnewsletter` SET mobile_app='1' WHERE id_radio='".$id."' ");
                        }
                    }	
						*/
	/*		
			// REMPLIR NEW TABLE AVES is_active SI dateExpir PAS DEPASSEE POUR CHAQUE RADIO
				$donnees = mysqli_query($link,"SELECT * FROM radio"); 
            	while($results = mysqli_fetch_array($donnees)){
						$id = $results['id'];
						$date = new DateTime($results['dateExpir']);
						$date = $date->format('Y-m-d');
						$dateExpir = explode("-",$date);
						$dateExpir = $dateExpir[0].$dateExpir[1].$dateExpir[2];
						$today = new DateTime();
						$today = $today->format('Y-m-d');
						$aujd = explode("-",$today);
						$aujd = $aujd[0].$aujd[1].$aujd[2];
						if($dateExpir > $aujd){
							mysqli_query($link,"UPDATE `exportnewsletter` SET is_active='1' WHERE id_radio='".$id."' ");	
						}
					}					

		//REMPLIR NEW TABLE AVEC OPTION VESTALIVE
		
				$donnees = mysqli_query($link,"SELECT * FROM `radio_option`"); 
                while($results = mysqli_fetch_array($donnees)){
                     $id = $results['radio_id'];
                     $option = $results['option_key'];
                     if($option == '8'){
                         mysqli_query($link,"UPDATE `exportnewsletter` SET vestalive='1' WHERE id_radio='".$id."' ");
                     }
                }	
		
		
				 $sql = "SELECT * FROM user"; 
                 $sql = mysqli_query($link,$sql);
                 while ($donnees = mysqli_fetch_array($sql) ) {	
					$sql2 = mysqli_query($link,"SELECT SUM(total) AS totalclient FROM facture WHERE user_username='".$donnees['id']."' and typePaiement_nom!='1'");
                    while ($donnees2 = mysqli_fetch_array($sql2) ) {  
						$total = $donnees2['totalclient']; 
                    } 
						mysqli_query($link,"UPDATE exportnewsletter SET depenses=".$total." WHERE id_client=".$donnees['id']."");			 
				 }
						           
						//SUPPRIMER LES DOUBLONS 

					mysqli_query($link,"DELETE t1 FROM exportnewsletter t1 INNER JOIN exportnewsletter t2 WHERE t1.id < t2.id AND t1.id_radio = t2.id_radio");   		*/
						                                                                         ?>
</body>

</html>
