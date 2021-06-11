<html>
<head>
<title>Edit Database - SurveyBuilder</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
	function getDataWord(){
		document.querySelector(".titleInput").value = document.querySelector(".titleInput-clone").value;
		
	}
	function getDataWord1(){
		document.querySelector(".titleInput-clone").value = document.querySelector(".titleInput").value
		
	}
	</script>
	


<link rel="shortcut icon" href="http://localhost/SurveyBuilder/favicon.ico"/>
</head>
<body>
<form method="post" action="File_Get_Contents_URL.php">
<input name="title-clone" onkeyup="getDataWord()" class="titleInput-clone" type="text" placeholder="Enter Database Title" required="true"/><button type="submit" onclick="dbUse()">Use Database</button><br/><br/>

</form>
<form method="POST" action="SaveData.php">
<input name="title-data" class="titleInput" type="text" placeholder="Enter Database Title" required="true" onkeyup="getDataWord1()"/><br/><br/>
<label>Write Code below(Write this as PHP)</label><br/>
<textarea placeholder="Enter Code" spellcheck="false" id="Editor" name="Editor" required="true" style="margin: 0px; width: 545px; height: 145px;"></textarea>
<br/>
<br/>
<input type="submit" value="Edit"/>

</form>

</body>
</html>