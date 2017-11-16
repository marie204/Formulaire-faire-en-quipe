<!DOCTYPE html>
<html>
<head>
	<title>Formulaire équipe</title>
	<link rel="stylesheet" href="css/yolo.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
</head>

<body>
	<header>
		<h1>Formulaire StarTech</h1>
	</header>
<ul id="Formulaire">

</ul>
<p id="boutonOk">
	<input type="text" id="question">
	<button onclick="creationForm();" id="boutonDuFormulaire"> Creation du Formulaire </button>
</p>

<script>
	function creationQuestion(){
		console.log(document.getElementById("question").value);
		document.getElementById("Formulaire").innerHTML += document.getElementById("question").value+'<br>';
	}

	function creationForm(){
		console.log('hello');
		creationQuestion();
		ajoutTextForm();
		deleteOk();
	}
	function deleteLi() {
		$('#unique').remove();
	}
	function initiationRedemarage(){
		console.log('test');
	}
	//Supprime de quoi créer formulaire
	function deleteOk(){
		document.getElementById('boutonOk').innerHTML = '<button id="boutonUnique" onclick="modOk();">ok</button> <button onclick="initiationRedemarage();">Fin</button>';
	}
	//<button id='boutonUnique' onclick='modOk();'>ok</button>
	//Fonction pour ajouter du texte dans le ul
	function ajoutTextForm(){
		document.getElementById("Formulaire").innerHTML += "<li id='unique'><input type='text' id='monText'></li>";
		//document.getElementById('boutonOk').innerHTML = '';
	}
	function modOk(){
		document.getElementById('Formulaire').innerHTML += "<input type='radio'><li>"+document.getElementById('monText').value+'</li> <br>';
		deleteLi();
		//document.getElementById().innerHTML = "";
		ajoutTextForm();
	}
	/*function simplification(){
		document.getElementById('boutonOk').innerHTML += "<button onclick='ajoutTextForm();''> ajout d'un champ </button> <button onclick='nouveauForm();'> Nouveau formulaire </button>";
		ajoutTextForm();
	}*/
</script>

</body>
</html>