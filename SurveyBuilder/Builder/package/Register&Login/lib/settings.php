<html>
<head>
<link href="/SurveyBuilder/favicon.ico" rel="shortcut icon"/>
<title>SurveyBuilder-Settings</title>
</head>
<body>
<form action="./saveConfig" method="post">
ServerName: <input type="text" placeholder="Server Name" required="" name="serverName" value="<?php include('./config.php'); echo $servername;?>"/><br/>
Username: <input type="text" placeholder="Username" required="" name="username" value="<?php include('./config.php'); echo $username;?>"/><br/>
Password: <input type="password" placeholder="Password"  name="password" value="<?php include('./config.php'); echo $password;?>"/><br/>
Database: <input type="text" placeholder="Database" required="" name="db" value="<?php include('./config.php'); echo $db;?>"/>
<br/><br/>

<input type="submit" value="Save" style="cursor:pointer;"/>
</form>
</body>
</html>