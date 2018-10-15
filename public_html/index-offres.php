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
		#form{width:300px;margin-left:auto;margin-right:auto;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);}
		#subBtn{display: inline-block;position: relative;width: 120px;height: 32px;line-height: 32px; border-radius: 2px;font-size: 0.9em;background-color: #4285f4;color: #fff;transition: box-shadow 0.2s cubic-bezier(0.4, 0, 0.2, 1);transition-delay: 0.2s;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);margin-bottom:10px;}
		#subBtn:hover{box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);transition-delay: 0s;}
    </style>
</head>

<body>

                <?php include("header.php"); ?>
                <h4>Offres</h4>
    <form id="form" method="post" action="offres.php">
      <div><input type="checkbox" name="offre[]" value="1"/><label>Lipsi</label></div>
      <div><input type="checkbox" name="offre[]" value="2"/><label>Anafi</label></div>
      <div><input type="checkbox" name="offre[]" value="3"/><label>Symi</label></div>
      <div><input type="checkbox" name="offre[]" value="4"/><label>Neos</label></div>
      <div><input type="checkbox" name="offre[]" value="5"/><label>Kea</label></div>
      <div><input type="checkbox" name="offre[]" value="6"/><label>Egine</label></div>
      <div><input type="checkbox" name="offre[]" value="7"/><label>Milos</label></div>
      <div><input type="checkbox" name="offre[]" value="8"/><label>Exa</label></div>
      <div><input type="checkbox" name="offre[]" value="13"/><label>Ios</label></div>
      <div><input type="checkbox" name="offre[]" value="15"/><label>Naxos</label></div>
      <div><input type="checkbox" name="offre[]" value="17"/><label>Emporio</label></div>
      <div><input type="checkbox" name="offre[]" value="18"/><label>Kea HD</label></div>
      <div><input type="checkbox" name="offre[]" value="19"/><label>KeaHD</label></div>
      <div><input type="checkbox" name="offre[]" value="20"/><label>Hydra</label></div>
      <div><input type="checkbox" name="offre[]" value="22"/><label>Kriti</label></div>
      <br/>
      
      <div><label><strong>MSR</strong></label><input type="radio" name="msr"  checked="checked" value="avec"/>AVEC<input type="radio" name="msr" value="sans"/>SANS</div>
      
     
      <div><label><strong>Mobile App</strong></label><input type="radio" name="mobile"  checked="checked" value="avec"/>AVEC<input type="radio" name="mobile" value="sans"/>SANS</div>
      
      <div><label><strong>Vestalive</strong></label><input type="radio" name="live"  checked="checked" value="avec"/>AVEC<input type="radio" name="live" value="sans"/>SANS</div>
      <br/>
       
          <input type="submit" value="Valider" id="subBtn"/>
    	
        
    </form>
             
          
                            
                                  
</body>
</html>