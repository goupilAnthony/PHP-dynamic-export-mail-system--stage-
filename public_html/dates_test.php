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

  
            $date = new DateTime();
            $dateToday = $date->format('d-m-Y');
            echo "DATE : ".$dateToday."";
    
    
        ?>
        
        
    </body>
</html>