<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire équipe</title>
	<link rel="stylesheet" href="css/yolo.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
</head>

<body>
	<h1>Formulaire StarTech</h1>
	<p id="boutonOk">
	</p>
<section id='maSelection'>
	<ul id="Formulaire"></ul>

</section>


<script>
	gestionnaireDuBoutonOk();
	var paraUl = 0 ;
	function creationQuestion(){
		//console.log(document.getElementById("question").value);
		document.getElementById('Formulaire').innerHTML += document.getElementById("question").value+'<br>';
	}
	function gestionnaireDuBoutonOk(){
		document.getElementById('boutonOk').innerHTML = '<input type="text" id="question"><button onclick="creationForm();" id="boutonDuFormulaire"> Creation d\'une question </button>';
	}
	function createPara(){
		deleteLi();
		maVarPoub = 'B'+paraUl;
		document.getElementById('maSelection').innerHTML += "<p id = "+maVarPoub+">"+document.getElementById('Formulaire').innerHTML+"<button onclick=ajouterReponse('"+maVarPoub+"');>Ajouter une réponse</button>"+"</p>";
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
		document.getElementById('Formulaire').innerHTML += "<li> <input type='radio' name ='A"+paraUl+"'>"+document.getElementById('monText').value+'</li> <br>';
		deleteLi();
		//document.getElementById().innerHTML = "";
		ajoutTextForm();
	}
	function ajouterReponse(monId){
		console.log(monId);
		maVarPoub = monId.substr(1);
		console.log(maVarPoub);
		document.getElementById(monId).innerHTML += '<div id= C'+maVarPoub+'><input type="text" id="maNewRep'+monId+'"> <button onclick="addRep(\''+monId+'\')">ok</button><button onclick="supprimeChan(\''+monId+'\');">Terminer</button></div>';
		/*"<li> <input type='radio' name ='A"+maVarPoub+"'>"+document.getElementById('monText').value+'</li> <br>';*/
	}
	function addRep(monId){
		maVarPoub = monId.substr(1);
		maVarPoub3 = 'maNewRep'+monId;
		maVarPoub4 = 'B'+maVarPoub;
		document.getElementById(maVarPoub4).innerHTML += '<li><input type="radio" name="A'+maVarPoub+'">'+ document.getElementById(maVarPoub3).value + '</li>';
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