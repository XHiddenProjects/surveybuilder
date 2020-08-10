<html>
<head>
<title>Create A Folder - SurveyBuilder</title>
<link rel="shortcut icon" href="http://localhost/SurveyBuilder/favicon.ico"/>
</head>
<body>
<form method="post" action="SendFolder.php">
<P>If you use the "same folder" name it will give you an error, ingore it.<br/>If you have a username use it.</p>
<br/>
<label>Username(Folder):</label><input type="text" placeholder="Enter Username(Folder)" required="true" name="foldtitle"/><br/>
<label>SurveyName(Subfolder):</label><input type="text" placeholder="Enter SurveyTitle(Subfolder)" required="true" name="subFoldtitle"/><br/>
<input type="submit" value="Create Folder"/>
</form>
</body>
</html>