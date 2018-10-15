<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
		#subBtn{display: inline-block;position: relative;width: 120px;height: 32px;line-height: 32px; border-radius: 2px;font-size: 0.9em;background-color: #4285f4;color: #fff;transition: box-shadow 0.2s cubic-bezier(0.4, 0, 0.2, 1);transition-delay: 0.2s;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);margin-bottom:10px;}
		#subBtn:hover{box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);transition-delay: 0s;}
    </style>
</head>

<body>
        <?php include("header.php"); ?>
        <br/>
     <form action="options.php" method="post">
     	<select name="options">
        	<optgroup label="Nouveau Manager">
            	<option value="1">Tous les abonnés s’étant connecté depuis le lancement du nouveau manager</option>
                <option value="2">Tous les abonnés ne s’étant pas connectés depuis le lancement du nouveau manager</option>
            </optgroup>
            <optgroup label="Prélèvement">
            	<option value="3">Tous les abonnés réglant par : chèque, cb, virement</option>
            </optgroup>
            
        </select>
     <input type="submit" name="submit" value="Valider" id="subBtn" />
     
     </form>



</body>
</html>
