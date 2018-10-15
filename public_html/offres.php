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
    </style>
   </head>

<body>

                <?php include("header.php"); ?>
                
   <?php    error_reporting(E_ALL);
            ini_set('display_errors','1');
            $link = mysqli_connect("localhost", "admin_vestaprod", "7ZKIXakoPA", "admin_vestaprod");
            mysqli_query($link,"SET NAMES utf8"); 
    
            $titre = date('Y-m-d-H-i');
			
    		$offre = '';
			
       function ecrire_mails($mailtxt,$titre){
            $file = $titre;
            $fp = fopen($file.'.txt','a+');
            fseek($fp,SEEK_END); 
            $nouverr=$mailtxt."\r\n"; 
            fputs($fp,$nouverr); 
            fclose($fp); 
        } 
                foreach($_POST['offre'] as $valeur){

                                switch ($valeur) {
                                         case 1: $offre = "1'"; ;break;
                                         case 2: if(!empty($offre)){$offre = $offre." OR offre='2'";}else{$offre = "2'";} ;break;
                                         case 3: if(!empty($offre)){$offre = $offre." OR offre='3'";}else{$offre = "3'";} ;break;
                                         case 4: if(!empty($offre)){$offre = $offre." OR offre='4'";}else{$offre = "4'";} ;break;
                                         case 5: if(!empty($offre)){$offre = $offre." OR offre='5'";}else{$offre = "5'";} ;break;
                                         case 6: if(!empty($offre)){$offre = $offre." OR offre='6'";}else{$offre = "6'";} ;break;
                                         case 7: if(!empty($offre)){$offre = $offre." OR offre='7'";}else{$offre = "7'";} ;break;
                                         case 8: if(!empty($offre)){$offre = $offre." OR offre='8'";}else{$offre = "8'";} ;break;
                                         case 13: if(!empty($offre)){$offre = $offre." OR offre='13'";}else{$offre = "13'";} ;break;
                                         case 15: if(!empty($offre)){$offre = $offre." OR offre='15'";}else{$offre = "15'";} ;break;
                                         case 17: if(!empty($offre)){$offre = $offre." OR offre='17'";}else{$offre = "17'";} ;break;
                                         case 18: if(!empty($offre)){$offre = $offre." OR offre='18'";}else{$offre = "18'";} ;break;
                                         case 19: if(!empty($offre)){$offre = $offre." OR offre='19'";}else{$offre = "19'";} ;break;
                                         case 20: if(!empty($offre)){$offre = $offre." OR offre='20'";}else{$offre = "20'";} ;break;
                                         case 22: if(!empty($offre)){$offre = $offre." OR offre='22'";}else{$offre = "22'";} ;break;
                                 }
                }
				
				$req_base= "SELECT * FROM exportnewsletter WHERE offre='".$offre." ";
				
				if($_POST['msr'] == 'avec'){
					$req_msr = "AND MSR='1' ";	
				}else if($_POST['msr'] == 'sans'){
					$req_msr = "AND MSR='0' ";
				}
				
				if($_POST['mobile'] == 'avec'){
					$req_mobile = "AND mobile_app='1' ";	
				}else if($_POST['mobile'] == 'sans'){
					$req_mobile = "AND mobile_app='0' ";
				}
				
				if($_POST['live'] == 'avec'){
					$req_live = "AND vestalive='1' ";	
				}else if($_POST['live'] == 'sans'){
					$req_live = "AND vestalive='0' ";
				}
           
		   
		   $req = $req_base.$req_msr.$req_mobile.$req_live;
		 //  echo $req;
		   
		   
          
 			
            $data = mysqli_query($link,$req);
            while($results = mysqli_fetch_array($data) ){
               
                   $txt = $results['email'];
                   ecrire_mails($txt,$titre);
				  // echo $txt;
            }
		//	echo $data;
     /*        if ($link->query($data) === TRUE) {
      echo 'users entry saved successfully';
}   
else {
  echo 'Error: '. $link->error;
}  */
    echo '<br/><a id="subBtn" href="'.$titre.'.txt">Cliquez ici</a>';
    // chmod($text,0777);
 ?>             
            
</body>
</html>