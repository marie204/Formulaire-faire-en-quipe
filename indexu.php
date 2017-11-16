<!DOCTYPE html>
<html>
<head>
	<title>Formulaire équipe</title>
</head>
<body>
<button onclick="creationForm();"> Creation Formulaire </button>
<ul id="Formulaire">
	
</ul>

<script>
	function creationForm(){
		document.getElementById("Formulaire").innerHTML += "<li><input type='text'></li>"; 
	}
</script>

</body>
</html>