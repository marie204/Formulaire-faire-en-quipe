<!DOCTYPE html>
<html>
<head>
	<title>Formulaire équipe</title>
</head>
<body>
<ul id="Formulaire">
	
</ul>
<p id="boutonOk">
	<button onclick="creationForm();"> Creation du Formulaire </button>
</p>

<script>
	function creationForm(){
		console.log('coucou');
		
		document.getElementById('boutonOk').innerHTML += "<button onclick='ajoutTextForm();''> ajout d'un champ </button> <button onclick='nouveauForm();'> Nouveau formulaire </button>";
		ajoutTextForm();
	}
	function ajoutTextForm(){
		document.getElementById("Formulaire").innerHTML += "<li><input type='text'></li>"; 
	}
</script>

</body>
</html>