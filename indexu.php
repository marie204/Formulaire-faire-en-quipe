<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire équipe</title>
	<link rel="stylesheet" href="css/yolo.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
	<script type="css/lol.js"></script>

</head>

<body>
	
<h1>Formulaire StarTech</h1>

<div id="horloge"
 a href="https://www.zeitverschiebung.net/fr/country/fr">
<iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=medium&timezone=Europe%2FParis" width="100%" height="200" frameborder="0" seamless></iframe> </div>
<div id="box">

     <p id="boutonOk">
	</p>

<section id='maSelection'>
	<ul id="Formulaire"></ul>
</section>



</div>

<script>
	gestionnaireDuBoutonOk();
	var paraUl = 0 ;
	var maClickBox;
	function creationQuestion(){
		//console.log(document.getElementById("question").value);
		document.getElementById('Formulaire').innerHTML += document.getElementById("question").value+'<br>';
		maClickBox = document.getElementById('checkOns').value;		
	}
	function gestionnaireDuBoutonOk(){
		document.getElementById('boutonOk').innerHTML = '<input type="text" id="question"><button onclick="creationForm();" id="boutonDuFormulaire"> Creation d\'une question </button>';
		document.getElementById('boutonOk').innerHTML+= '<select id=checkOns><option value="radio">Radio</option><option value="checkbox">checkbox</option></select>';
	}
	function createPara(){
		deleteLi();
		maVarPoub = 'B'+paraUl;
		document.getElementById('maSelection').innerHTML += "<p id = "+maVarPoub+">"+document.getElementById('Formulaire').innerHTML+"<button onclick=ajouterReponse('"+maVarPoub+"','"+maClickBox+"');>Ajouter une réponse</button>"+"</p>";
		document.getElementById('Formulaire').innerHTML='';
		gestionnaireDuBoutonOk();
		paraUl++;

	}
	function creationForm(){
		initiationRedemarage();
		deleteOk();
	}

	function deleteLi() {
		$('#unique').remove();
	}
	function initiationRedemarage(){
		creationQuestion();
		ajoutTextForm();
		gestionnaireDuBoutonOk();
	}
	//Supprime de quoi créer formulaire
	function deleteOk(){
		document.getElementById('boutonOk').innerHTML = '<button id="boutonUnique" onclick="modOk();">valider réponse</button> <button onclick="createPara();">Valider question</button>';
	}
	//<button id='boutonUnique' onclick='modOk();'>ok</button>
	//Fonction pour ajouter du texte dans le ul
	function ajoutTextForm(){
		document.getElementById('Formulaire').innerHTML += "<li id='unique'><input type='text' id='monText'></li>";
		//document.getElementById('boutonOk').innerHTML = '';
	}
	function modOk(){
		document.getElementById('Formulaire').innerHTML += "<li> <input type='"+maClickBox+"' name ='A"+paraUl+"'>"+document.getElementById('monText').value+'</li> <br>';
		deleteLi();
		//document.getElementById().innerHTML = "";
		ajoutTextForm();
	}
	function ajouterReponse(monId, maSaveCheck){
		console.log(monId);
		maVarPoub = monId.substr(1);
		console.log(maVarPoub);
		console.log(maSaveCheck);
		document.getElementById(monId).innerHTML += '<div id= C'+maVarPoub+'><input type="text" id="maNewRep'+monId+'"> <button onclick="addRep(\''+monId+'\',\''+maSaveCheck+'\')">ok</button><button onclick="supprimeChan(\''+monId+'\', \''+maSaveCheck+'\');">Terminer</button></div>';
		/*"<li> <input type='radio' name ='A"+maVarPoub+"'>"+document.getElementById('monText').value+'</li> <br>';*/
	}
	function addRep(monId, maSaveCheck){
		maVarPoub = monId.substr(1);
		maVarPoub3 = 'maNewRep'+monId;
		maVarPoub4 = 'B'+maVarPoub;
		console.log(maSaveCheck);
		document.getElementById(maVarPoub4).innerHTML += '<li><input type="'+maSaveCheck+'" name="A'+maVarPoub+'">'+ document.getElementById(maVarPoub3).value + '</li>';
		document.getElementById(maVarPoub3).value = '';		

		//supprimeChan(monId);
	}
	function supprimeChan(monId){
		/*document.getElementById(monId).innerHTML*/
		maVarPoub = monId.substr(1);
		maVarPoub2 = 'C'+maVarPoub;
		$('#' + maVarPoub2).remove();
	}

</script>

</body>
</html>