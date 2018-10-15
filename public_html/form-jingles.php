<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#jingleSentence{
		 font-size:16px;
		  padding:10px 10px 10px 5px;
		  display:inline-block;
		  width:300px;
		  border:none;
		  border-bottom:1px solid #757575;
  }
  #jingleSentence:focus{outline:none;}
</style>

</head>

<body>
<div class="container">
    <h2>Definissez votre commande</h2>
    <div class="col-md-6">
        <h4>Ajouter un Jingle</h4>
        <form>
            <select id="select" onchange="changement();">
            <option value="default">Selectionnez un jingle</option>
                <option value="radios">Jingle radios</option>
                <option value="raccrochage">Raccrochage/Décrochage</option>
                <option value="pub">Publicité</option>
                <option value="topHorraires">Top Horaires</option>
                <option value="autopromo">Autopromo</option>
                <option value="medley">Medley Radio</option>
                <option value="liner">Liner Acap</option>
            </select>
        </form>
    </div>
    
    <form method="post" action="send-jingle.php" >
        <div class="panierJingles col-md-6">
            <h4 >Vos Jingles</h4>
            <div class="panier"><span class="insertPoint"></span></div>
            <p class="total">Total : <span class="totalPanier">0</span>€</p>
            <button type="submit" onclick="nombreEnfants();" class="btn">Commander</button>
        </div>
    </form>
    <div id="jingleCreationBox" class="col-md-6" >
        <h2 id="none"></h2>
        <h4 id="jingleTitle"></h4>
        <p id="jingleDescription"></p>
        <p id="mots">Mots restants : <span id="motsRestants"></span>/<span id="motsMax"></span></p>
        <p id="helpSentence"></p>
        <input type="text" id="jingleSentence" class="" placeholder="Entrez votre jingle ici"/>
        <button type="button" id="ajouterJingle" value="Ajouter" onclick="addJingle();" class="btn" >Ajouter</button>
    </div>
</div>
<script type="text/javascript">


function nombreEnfants(){
	var panier = document.querySelector('.panier');
	nbrEnfants = panier.childNodes.length;
	
	for(var i=0;i < nbrEnfants; i++){
		className = panier.childNodes[i].className;
		if(className != 'inputFantom'){
			child = panier.childNodes[i];
			text = child.textContent;
			newText = text.replace(/Supprimer$/,'');
			console.log(newText);
		}else{}
	}

}



document.getElementById('jingleSentence').style.display = 'none';
document.getElementById('ajouterJingle').style.display = 'none';
document.getElementById('mots').style.display = 'none';
	
var total = 0;

	$('#jingleSentence').change(wordCounter);
    $('#jingleSentence').keydown(wordCounter);
    $('#jingleSentence').keypress(wordCounter);
    $('#jingleSentence').keyup(wordCounter);
    $('#jingleSentence').blur(wordCounter);
    $('#jingleSentence').focus(wordCounter);
	
function wordCounter(){
	var nombreMotMax = 10 ; 

    var value = $('#jingleSentence').val();
	
    
    var regex = /\s+/gi;
    var wordCount = value.trim().replace(regex, ' ').split(' ').length;
	
	if (value.length == 0) {
        wordCount = 0;
    }

	var	val = document.querySelector('#select').value;
		switch(val){
			case 'pub': nombreMotMax = 30; break;
			case 'autopromo': nombreMotMax = 30; break;
		}
	document.querySelector('#motsMax').innerHTML = nombreMotMax;
	document.querySelector('#motsRestants').innerHTML = nombreMotMax - wordCount;
	if(wordCount > nombreMotMax){
		document.querySelector('#ajouterJingle').setAttribute('disabled','disabled');
		document.querySelector('#mots').style.color = 'red';
	}else{
		document.querySelector('#ajouterJingle').removeAttribute('disabled');
		document.querySelector('#mots').style.color = 'black';
	}
}

function addJingle(){
		var text = 	document.getElementById('jingleSentence').value;
		
		var	val = document.getElementById('select').value;
		switch(val){
			case 'radios':
				var jingleToAdd = document.createElement('div');
				jingleToAdd.classList.add('jingleRadioIntoPanier');
				jingleToAdd.innerHTML = "<strong>Jingle Radio:</strong>"+text+"<input type='text' name='jingle[]' class='inputFantom ' style='display:none;' value='   Jingle Radio:"+text+"'/>   <button type='button' class='btn btn-xs' onclick='suppr(this);'>Supprimer</button>";
				var insertPoint = document.querySelector('.insertPoint');
				document.querySelector('.panier').insertBefore(jingleToAdd,insertPoint);
				total+=26;
				document.querySelector('.totalPanier').innerHTML = total;
				document.getElementById('jingleSentence').value = "";
				break;
			case 'raccrochage':
				var jingleToAdd = document.createElement('div');
				jingleToAdd.classList.add('jingleRaccrochageIntoPanier');
				jingleToAdd.innerHTML = "<strong>Jingle Raccrochage:</strong>"+text+"<input type='text' name='jingle[]' class='inputFantom' style='display:none;' value='   Jingle Raccrochage:"+text+"'/>    <button type='button' class='btn btn-xs' onclick='suppr(this);'>Supprimer</button>";
				var insertPoint = document.querySelector('.insertPoint');
				document.querySelector('.panier').insertBefore(jingleToAdd,insertPoint);
				total+=21;
				document.querySelector('.totalPanier').innerHTML = total;
				document.getElementById('jingleSentence').value = "";
				break;
			case 'pub':
				var jingleToAdd = document.createElement('div');
				jingleToAdd.classList.add('jinglePubIntoPanier');
				jingleToAdd.innerHTML = "<strong>Jingle Publicité:</strong>"+text+"  <input type='text' name='jingle[]' class='inputFantom' style='display:none;' value='   Jingle Publicité:"+text+"'/> <button type='button' class='btn btn-xs' onclick='suppr(this);'>Supprimer</button>";
				var insertPoint = document.querySelector('.insertPoint');
				document.querySelector('.panier').insertBefore(jingleToAdd,insertPoint);
				total+=40;
				document.querySelector('.totalPanier').innerHTML = total;
				document.getElementById('jingleSentence').value = "";
				break;
			case 'topHorraires':
				var jingleToAdd = document.createElement('div');
				jingleToAdd.classList.add('jingleTopIntoPanier');
				jingleToAdd.innerHTML = "<strong>Jingle Top horraires:</strong>"+text+"  <input type='text' name='jingle[]' class='inputFantom' style='display:none;' value='   Jingle Top horraires:"+text+"'/> <button type='button' class='btn btn-xs' onclick='suppr(this);'>Supprimer</button>";
				var insertPoint = document.querySelector('.insertPoint');
				document.querySelector('.panier').insertBefore(jingleToAdd,insertPoint);
				total+=100;
				document.querySelector('.totalPanier').innerHTML = total;
				document.getElementById('jingleSentence').value = "";
				break;
			case 'autopromo':
				var jingleToAdd = document.createElement('div');
				jingleToAdd.classList.add('jingleAutopromoIntoPanier');
				jingleToAdd.innerHTML = "<strong>Jingle Autopromo:</strong>"+text+"  <input type='text' name='jingle[]' class='inputFantom' style='display:none;' value='   Jingle Autopromo:"+text+"'/> <button type='button' class='btn btn-xs' onclick='suppr(this);'>Supprimer</button>";
				var insertPoint = document.querySelector('.insertPoint');
				document.querySelector('.panier').insertBefore(jingleToAdd,insertPoint);
				total+=40;
				document.querySelector('.totalPanier').innerHTML = total;
				document.getElementById('jingleSentence').value = "";
				break;
			case 'medley':
				var jingleToAdd = document.createElement('div');
				jingleToAdd.classList.add('jingleMedleyIntoPanier');
				jingleToAdd.innerHTML = "<strong>Jingle Medley:</strong>"+text+" <input type='text' name='jingle[]' class='inputFantom' style='display:none;' value='   Jingle Medley:"+text+"'/>  <button type='button' class='btn btn-xs' onclick='suppr(this);'>Supprimer</button>";
				var insertPoint = document.querySelector('.insertPoint');
				document.querySelector('.panier').insertBefore(jingleToAdd,insertPoint);
				total+=40;
				document.querySelector('.totalPanier').innerHTML = total;
				document.getElementById('jingleSentence').value = "";
				break;
			case 'liner':
				var jingleToAdd = document.createElement('div');
				jingleToAdd.classList.add('jingleLinerIntoPanier');
				jingleToAdd.innerHTML = "<strong>Jingle Liner Acap:</strong>"+text+"  <input type='text' name='jingle[]' class='inputFantom' style='display:none;' value='   Jingle Liner Acap:"+text+"'/> <button type='button' class='btn btn-xs' onclick='suppr(this);'>Supprimer</button>";
				var insertPoint = document.querySelector('.insertPoint');
				document.querySelector('.panier').insertBefore(jingleToAdd,insertPoint);
				total+=20;
				document.querySelector('.totalPanier').innerHTML = total;
				document.getElementById('jingleSentence').value = "";
				break;

		}
	
	}
	
	
		function suppr(target){
			var classe = target.parentNode.className;
			switch(classe){
				case 'jingleRadioIntoPanier': total-=26;document.querySelector('.totalPanier').innerHTML = total;break;
				case 'jingleRaccrochageIntoPanier': total-=21;document.querySelector('.totalPanier').innerHTML = total;break;
				case 'jinglePubIntoPanier': total-=40;document.querySelector('.totalPanier').innerHTML = total;break;
				case 'jingleTopIntoPanier': total-=100;document.querySelector('.totalPanier').innerHTML = total;break;
				case 'jingleAutopromoIntoPanier': total-=40;document.querySelector('.totalPanier').innerHTML = total;break;
				case 'jingleMedleyIntoPanier': total-=40;document.querySelector('.totalPanier').innerHTML = total;break;
				case 'jingleLinerIntoPanier': total-=20;document.querySelector('.totalPanier').innerHTML = total;break;
				
			}
			var jingle = target.parentNode;
				jingle.parentNode.removeChild(jingle);
			
		}
	
	function changement(){
		wordCounter();
		var	val = document.getElementById('select').value;
		switch(val){
			case 'default':
				document.getElementById('jingleTitle').innerHTML = "";
				document.getElementById('jingleDescription').innerHTML = "";
				document.getElementById('jingleSentence').style.display = 'none';
				document.getElementById('ajouterJingle').style.display = 'none';
				document.getElementById('mots').style.display = 'none';
				break;
			case 'radios': 
				document.getElementById('jingleTitle').innerHTML = "Jingle Radio";
				document.getElementById('jingleDescription').innerHTML = "Les jingles radio ou webradio sont diffusés tout au long de vos programmes et présentent simplement votre radio, ou webradio, afin de faciliter leur mémorisation.";
				document.getElementById('jingleSentence').style.display = 'inline-block';
				document.getElementById('ajouterJingle').style.display = 'inline-block';
				document.getElementById('mots').style.display = 'inline-block';
				break;
			case 'raccrochage': 
				document.getElementById('jingleTitle').innerHTML = "Raccrochage/Décrochage";
				document.getElementById('jingleDescription').innerHTML = "Le Raccrochage et le Décrochage permettent de ponctuer vos programmes, de proposer une transition professionnelle et facilitent la mémorisation des programmes de votre radio ou de votre webradio.";
				document.getElementById('jingleSentence').style.display = 'inline-block';
				document.getElementById('ajouterJingle').style.display = 'inline-block';
				document.getElementById('mots').style.display = 'inline-block';
				break;
			case 'pub': 
				document.getElementById('jingleTitle').innerHTML = "Publicité";
				document.getElementById('jingleDescription').innerHTML = "La Publicité vous permet de faire de la promotion audio pour le compte d’un tiers, que ce soit pour des produits ou des services.";
				document.getElementById('jingleSentence').style.display = 'inline-block';
				document.getElementById('ajouterJingle').style.display = 'inline-block';
				document.getElementById('mots').style.display = 'inline-block';
				break;
			case 'topHorraires': 
				document.getElementById('jingleTitle').innerHTML = "Top Horraires";
				document.getElementById('jingleDescription').innerHTML = "Les Top Horaires annoncent le début de chaque heure et le nom de la radio ou de la webradio. Vous pouvez commander les Top Horaires à l’unité pour 14,90 €.";
				document.getElementById('jingleSentence').style.display = 'inline-block';
				document.getElementById('ajouterJingle').style.display = 'inline-block';
				document.getElementById('mots').style.display = 'inline-block';
				break;
			case 'autopromo': 
				document.getElementById('jingleTitle').innerHTML = "Autopromo";
				document.getElementById('jingleDescription').innerHTML = "L’Autopromo permet de faire la promotion de votre radio, ou webradio, tout autant que d’un programme phare.";
				document.getElementById('jingleSentence').style.display = 'inline-block';
				document.getElementById('ajouterJingle').style.display = 'inline-block';
				document.getElementById('mots').style.display = 'inline-block';
				break;
			case 'medley': 
				document.getElementById('jingleTitle').innerHTML = "Medley Radio";
				document.getElementById('jingleDescription').innerHTML = "Le Medley, ou minimix, désigne une phrase accompagnée d’un mix de vos morceaux favoris et attire particulièrement l’attention des auditeurs.";
				document.getElementById('jingleSentence').style.display = 'inline-block';
				document.getElementById('ajouterJingle').style.display = 'inline-block';
				document.getElementById('mots').style.display = 'inline-block';
				break;
			case 'liner': 
				document.getElementById('jingleTitle').innerHTML = "Liner Acap";
				document.getElementById('jingleDescription').innerHTML = "Le Liner Acap en radio ou en webradio est tout simplement une phrase sans fond sonore.";
				document.getElementById('jingleSentence').style.display = 'inline-block';
				document.getElementById('ajouterJingle').style.display = 'inline-block';
				document.getElementById('mots').style.display = 'inline-block';
				break;
		}
	}
</script>
</body>
</html>
