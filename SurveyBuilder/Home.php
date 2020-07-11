<html>
<head>
<title>SurveyBuilder - Home</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="manifest" href="./manifest.webmanifest"/>
<script src="serviceworker.js"></script>
<style>
body{
	background:skyblue;
}
h1{
	text-align:center;
	font-size:55px;
	color:green;
}
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
	position:absolute;
	top:0;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  background-color:#19fcde
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  border-bottom:1px solid black;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}


h4{
	text-align:center;
	
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="Home.php">Home</a>
  <a href="#">News</a>
  <a href="#">Sign up</a>
  <a href="#">About</a>
</div>
<div class="content">
 <h1>Welcome to SurveyBuilder</h1>
 <h4>A free and easy way to make surveys.</h4>
 
</div>
</body>
</html>