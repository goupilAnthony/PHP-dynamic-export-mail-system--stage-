    <?php   error_reporting(E_ALL);
            ini_set('display_errors','1');

            $link = mysqli_connect("localhost", "admin_vestaprod", "7ZKIXakoPA", "admin_vestaprod");
            mysqli_query($link,"SET NAMES utf8");

			
	
				if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {
					
					$data = mysqli_fetch_array(mysqli_query($link,'SELECT count(*) FROM export_login WHERE login="'.$_POST['login'].'" AND pass="'.$_POST['pass'].'"'));
					
					if ($data[0] == 1) {
						session_start();
						$_SESSION['name'] = $_POST['login'];
						header('Location: indexco.php');
					}
				}
			
        ?>
       


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
    <title>anthony.vestaradio.net &mdash; Coming Soon</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="This is a default index page for a new domain."/>
    <style type="text/css">
        body {font-size:20px; color:#777777; font-family:arial; text-align:center;}
        h1 {font-size:64px; color:#555555; margin: 70px 0 50px 0;}
        p {width:320px; text-align:center; margin-left:auto;margin-right:auto; margin-top: 30px }
        #powered {width:320px; text-align:center; margin-left:auto;margin-right:auto;bottom: 0px;}
        a:link {color: #34536A;}
        a:visited {color: #34536A;}
        a:active {color: #34536A;}
        a:hover {color: #34536A;}
		#form{width: 200px;margin-right:auto;margin-left:auto;margin-top:auto;margin-bottom:auto;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);padding:10px 0px;}
		#subBtn{display: inline-block;position: relative;width: 120px;height: 32px;line-height: 32px; border-radius: 2px;font-size: 0.9em;background-color: #4285f4;color: #fff;transition: box-shadow 0.2s cubic-bezier(0.4, 0, 0.2, 1);transition-delay: 0.2s;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);margin-bottom:10px;margin-top:15px;}
		#subBtn:hover{box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);transition-delay: 0s;}
    </style>
</head>

<body>
  
   

       <form id="form" method="post" action="index.php">
       		<label>Nom d'utilisateur  </label><input type="text" name="login"  /><br />
            <label>Mot de passe  </label><input type="password" name="pass" /><br />
            <input type="submit" value="Connexion" id="subBtn"/>
       </form>
       
       
       
       
       <!--
        <div id="before2011Users">
       <h4>Derniere connection en 2010</h4>
        <ul>
            <?php /*
				 $sql = "SELECT * FROM user WHERE connected < '2011-01-01'"; 
                  $sql = mysqli_query($link,$sql); 
             while ($donnees = mysqli_fetch_array($sql) ) { 
            	 echo'<li>'.$donnees['email'].'</li>' ;
             } */?>
        </ul>
    </div>
    
    <div id="before2012Users">
       <h4>Derniere connection en 2011</h4>
        <ul>
            <?php /*
                $sql = "SELECT * FROM user WHERE connected < '2012-01-01' AND connected > '2011-01-01'"; 
                $sql = mysqli_query($link,$sql);
                while ($donnees = mysqli_fetch_array($sql) ) {
                     echo'<li>'.$donnees['email'].'</li>';
             } */ ?>
        </ul>
    </div>
    <div id="before2013Users">
       <h4>Derniere connection en 2012</h4>
        <ul>
            <?php /*
                $sql = "SELECT * FROM user WHERE connected < '2013-01-01' AND connected > '2012-01-01'"; 
                $sql = mysqli_query($link,$sql);
                while ($donnees = mysqli_fetch_array($sql) ) {
            		 echo'<li>'.$donnees['email'].'</li>';
             	} */ ?>
        </ul>
    </div>
    <div id="before2014Users">
       <h4>Derniere connection en 2013</h4>
        <ul>
            <?php /*
                $sql = "SELECT * FROM user WHERE connected < '2014-01-01' AND connected > '2013-01-01'"; 
                $sql = mysqli_query($link,$sql);
                while ($donnees = mysqli_fetch_array($sql) ) {
             		echo'<li>'.$donnees['email'].'</li>'; 
             	} */ ?>
        </ul>
    </div>
    <div id="before2015Users">
       <h4>Derniere connection en 2014</h4>
        <ul>
            <?php /*
                $sql = "SELECT * FROM user WHERE connected < '2015-01-01' AND connected > '2014-01-01'"; 
                $sql = mysqli_query($link,$sql);
                while ($donnees = mysqli_fetch_array($sql) ) {
           			 echo'<li>'.$donnees['email'].'</li>'; 
             	} */ ?>
        </ul>
    </div>
    <div id="before2016Users">
       <h4>Derniere connection en 2015</h4>
        <ul>
            <?php /*
                $sql = "SELECT * FROM user WHERE connected < '2016-01-01' AND connected > '2015-01-01'"; 
                $sql = mysqli_query($link,$sql);
                while ($donnees = mysqli_fetch_array($sql) ) {
             		echo'<li>'.$donnees['email'].'</li>' ;
             	} */ ?>
        </ul>
    </div>
    <div id="before2018Users">
       <h4>Derniere connection en 2018</h4>
        <ul>
            <?php /*
                $sql = "SELECT * FROM user WHERE connected < '2019-01-01' AND connected > '2018-01-01'"; 
                $sql = mysqli_query($link,$sql);
                while ($donnees = mysqli_fetch_array($sql) ) {
             		echo'<li>'.$donnees['email'].'</li>';
             	} */ ?>
        </ul> 
    </div>   -->
</body>

</html>

