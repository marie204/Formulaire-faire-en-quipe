<!DOCTYPE html>
<html>
<head>
	<title>Formulaire équipe</title>
	<link rel="stylesheet" href="css/yolo.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
</head>

<body>
<section id='maSelection'>
	<ul id="Formulaire"></ul>

</section>
<p id="boutonOk">
	</p>

<script>
	gestionnaireDuBoutonOk();
	var paraUl = 0 ;
	function creationQuestion(){
		//console.log(document.getElementById("question").value);
		document.getElementById('Formulaire').innerHTML += document.getElementById("question").value+'<br>';
	}
	function gestionnaireDuBoutonOk(){
		document.getElementById('boutonOk').innerHTML = '<input type="text" id="question"><button onclick="creationForm();" id="boutonDuFormulaire"> Creation du Formulaire </button>';
	}
	function createPara(){
		deleteLi();
		document.getElementById('maSelection').innerHTML += "<p id = A"+paraUl+">"+document.getElementById('Formulaire').innerHTML+"</p>"
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
		document.getElementById('boutonOk').innerHTML = '<button id="boutonUnique" onclick="modOk();">ok</button> <button onclick="createPara();">Fin</button>';
	}
	//<button id='boutonUnique' onclick='modOk();'>ok</button>
	//Fonction pour ajouter du texte dans le ul
	function ajoutTextForm(){
		document.getElementById('Formulaire').innerHTML += "<li id='unique'><input type='text' id='monText'></li>";
		//document.getElementById('boutonOk').innerHTML = '';
	}
	function modOk(){
		document.getElementById('Formulaire').innerHTML += "<input type='radio' name= 'A"+paraUl+"'><li>"+document.getElementById('monText').value+'</li> <br>';
		deleteLi();
		//document.getElementById().innerHTML = "";
		ajoutTextForm();
	}
</script>

</body>
</html>