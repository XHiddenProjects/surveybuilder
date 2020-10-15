<html>
<head id="Headers">
<!--<script>
//prevents users for iframing this
 if(self != top) { 
  document.querySelector("html").innerHTML = "";
  top.location = self.location;
 }
</script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!--<script src="https://kit.fontawesome.com/46bb4793e2.js"></script>-->



<script src="./Apps_Insert.js" type="text/javascript"></script>
<!-- Google Tag Manager -->


<!-- End Google Tag Manager -->
<meta charset="UTF-8"/>
<meta name="keywords" content="Survey Builder, Free, Test, Quiz, and Survey's"/>
<meta name="author" content="©SurveyMaker"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <meta name content="SurveyMaker"/>
 <meta name="UsersForm" hidden="hidden" content="SurveyBuilderId:9372fy9wegyu9efj0w93jrfwejf093ut4g8jf9eug98her9ghwefgj3gbdkf454y"/>
 <meta name="Forum" property="og:url" content="https://surveymaker.boards.net"/>
<title id="UserTitle">Untitled - Survey Builder</title>
<link rel="stylesheet" type="text/css" href="/SurveyBuilder/Builder/SurveyBuilder.css"/>
<link rel="stylesheet" href="/SurveyBuilder/Builder/SurveyBuilderMobile.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="/SurveyBuilder/Builder/FormInsert.css"/>
<link rel="shortcut icon" href="/SurveyBuilder/favicon.ico"/>
<link rel="stylesheet" href="https://proicons.netlify.app/css/icons.min.css"/>
<script src="./SurveyBuilder.js" type="text/javascript"></script>
<script src="./InsertItems.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/46bb4793e2.js" crossorigin="anonymous"></script>
<script src="/SurveyBuilder/Builder/serviceworker.js" type="text/javascript"></script>
 <!--<link href="./app.webmanifest" rel="manifest" crossorigin="use-credentials"/>-->
<noscript><img src="/SurveyBuilder/images/icon/favicon.png" width="20" height="20"/>Lo sentimos, JavaScript está desactivado, asegúrese de que esté activado debido a que es necesario activar muchas funciones</noscript>
<!--Templeates-->
<script src="/SurveyBuilder/Builder/templetes/Medical_temp.js"></script>
<script src="/SurveyBuilder/Builder/templetes/blank_temp.js"></script>
<script src="/SurveyBuilder/Builder/templetes/police_incident_report_temp.js"></script>
<!--end Templeate script-->



</head>
<div id="not"></div>


<body onload="Update()" id="SurveyBuilderBody">
<?php
$file =  $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/API/API.txt";
if(!file_exists($file)){
	echo "<script>document.body.hidden = true;setInterval(function(){alert('Falta la clave de API')}, 0);</script>";
}else{
	echo "";
}
//echo $file;
?>
<style type="text/css" rel="stylesheet" id="customCSS">

</style>
<div id="custom-scripts"></div>
<div id="custom-addons"></div>
<!--<div id="custom-alertbox" style="display:none;">
<div></div>
</div>-->
<!--<div id="custom-API"></div>-->
<!--onkeydown="Key(event)" in body allow shortcut-->
<div id="redirect-link" class="redirect-link redirect" hidden="true">
<h1 style="font-size:52px; color:black;">Enlace de formulario de redireccionamiento ...</h1>
</div>

<div id="Body-Container">

<!--<style>
.loading-temp{
	z-index:1;
	position:absolute;
	font-size:60px;
	top:30%;
	left:10%;
	border:1px solid black;
	background-color:lightgray;
	display:none;
}
.loading-temp .fa{
	color:#00ccff;
}
</style>
<div class="loading-temp" id="loading-temp-id">
<i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;<span class="loading-title">Loading Templeate... This will take 30 sec.</span>
</div>-->

<!-- End Google Tag Manager (noscript) -->
<div id="body-container" onload="changeBGcolor()">
<br>
<br>
<div id="links-doc" hidden="hidden"></div>

  <center><h6 id="Lastest">última actualización:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<time id="Timedate" onload="Update()"></time></h6></center><br>
 <br>
<center><h1 id="Orgtitle">SurveyBuilder</h1></center>
	 <br>
	 <br>
	<br>
	<br>
	<br>
	 <center><h1 id="yourTitle">Untitled</h1></center><br>
<!--Change title-->
<div id="YourTitleTag">
<error id="Error" role="tooltip" class="error" aria-label="error" hidden="true">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lo sentimos, necesita un título antes de guardarlo o es demasiado largo o el nombre de usuario está en blanco</error>
<!--<error id="SpanError" hidden="true">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry spam block as been added. Your Clicks: <span id="Count" style="color:white;"></span> times</error>-->
<br>
<br>
<span class="title title-input title-execute"><input type="text" id="titleSave" autocomplete="off" title="Enter Title" onkeydown="testback(event);" onkeypress="wcount()" pattern="[a-zA-Z0-9]{,15}"  placeholder="Ingrese un título" required><button id="titleSave-btn" title="Save Title" onclick="savetitle()" type="submit">Salvar</button></span>
<div id="wcc" style="position:absolute;left:65%; top:13.5%;font-size:25px;"><span id="Wcount" style="color:red;">0</span><span>/</span><span id="maxTitle">25</span>&nbsp;<span>carbonizarse.</span></div>

 </div>
 
 <!--Editor container-->
<br>
<br>

<br>
<center id="Form-Center" onload="Autosave()">
<form id="Editors-Form" method="post" action="">
<div id="Insert-Object" contenteditable="true"></div>
</form>
</center
	 <!--Ad blocker Check-->
<style>
.con-ad-error{
	background-color:red;
	position:absolute;
	top:0;
	z-index:3;
	width:100%;
	height:100%;
	display:none;
}
.heading-ad-error-title{
	text-align:center;
	font-size:45px;
	position:absolute;
	top:20%;
	left:35%;
}
.heading-ad-error-subtitle{
	text-align:center;
	font-size:25px;
	position:absolute;
	top:30%;
	left:35%;
}
.close-ad-btn{
	text-align:center;
	font-size:25px;
	position:absolute;
	top:40%;
	left:50%;
}
.close-ad-btn .btn-ad-con{
	border:0;
	color:black;
	background:gray;
	font-size:32px;
	border:1px soldi black;
	border-radius:50px;
}
</style>
<script>
var countdownCounter = 3;
function closeAdError(){
	let countdown = document.querySelector(".countdown");
	setInterval(function(){
	document.querySelector(".countdown").innerHTML = countdownCounter;
	if(countdownCounter>=0){
		document.querySelector(".ad-checkbox").disabled = true;
		countdownCounter = countdownCounter - 1;
	}
	if(countdownCounter<0){
		document.querySelector(".con-ad-block").style.display = "none";
		setTimeout(resetScore, 3000);
	}
     	
	
	}, 1000);
}
function resetScore(){
	document.querySelector(".ad-checkbox").disabled = false;
	countdownCounter = 3;
}
</script>

<div class="con-Ad-blocker-error con-ad-block con-ad-error" role="tooltip" aria-label="error">
<div class="heading-ad-error-title">El bloqueador de anuncios está habilitado <i class="fas fa-sad-tear"></i></div>
<div class="heading-ad-error-subtitle">Desactive su bloqueador de anuncios para activarlo.</div>
<div class="close-ad-btn"><button class="btn-ad-con" onclick="closeAdError()">Seguir <span class="countdown"></span></button></div>
</div>
 <!--Sidebar-->
              

<div id="Sidebar">
<div class="toggle-sidebar-btn" role="sidebar-button"  onclick="togglesidebar()" title="Add Elements" style="cursor:pointer;">
<span></span>                                                                                                                                       
<span></span>
<span></span>
</div>
<ul>
<li id="New" class="exit" onclick="togglesidebar()" title="Close Elements" style="cursor:pointer;">Salir de la barra lateral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</li>
<li id="exit-btn" style="cursor:default; border:none;"></li>
<span id="scroll-container-top">
<li id="Scroll-top" onclick="scrollDown()" class="scroll scroll-to-bottom">Desplazarse hacia abajo&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-down"></i></li>
<style>
.scroll{
	cursor:pointer !important;
	background-color:blue;
}
.scroll:hover{
	background-color:#22f063;
}
</style>
<script>
function scrollDown(){
var elmnt = document.getElementById("Scroll-bottom");
elmnt.scrollIntoView({
	behavior: 'smooth',
    block: 'start'
});
}
</script>
</span>
<li id="New">Insertar predeterminado</li>
<li id="Insert-header" title="Header" onclick="InsertHeadings()"><i class="fas fa-heading"></i>&nbsp;&nbsp; Encabezamiento</li>
<li id="Insert-Paragraph" title="Pharagraph" onclick="InsertPara()"><i class="fas fa-paragraph"></i>&nbsp;&nbsp; Párrafo</li>
<li id="Insert-Name" title="Full Name" onclick="InsertNames()"><i class="fas fa-user-circle"></i>&nbsp;&nbsp; Nombre completo</li>
<li id="Insert-Email" title="Email" onclick="InsertEmailAddress()"><i class="far fa-envelope"></i> &nbsp;&nbsp;Correo electrónico</li>
<li id="Insert-address" title="Address" onclick="InsertAddress()"><i class="fas fa-address-card"></i>&nbsp;&nbsp;Habla a</li>
<li id="Insert-phone" title="Phone" onclick="InsertPhone()"><i class="fas fa-phone"></i>&nbsp;&nbsp;Teléfono</li>
<li id="Insert-Date" title="Date Picker" onclick="InsertDate()"><i class="fas fa-calendar-alt"></i> &nbsp;&nbsp;Selector de fechas</li>
<li id="Insert-Time" title="Time" onclick="InsertTime()"><i class="fas fa-clock"></i>&nbsp;&nbsp;Hora</li>
<span id="widgets">
<li id="New">Widgets</li>
<li id="Insert-QRcreate" title="Create QR" onclick="Insertqrcode()"><i class="fas fa-qrcode"></i>&nbsp;&nbsp;Crear QR</li>
<li id="Insert-SocalMedia" title="Socal Media follower" onclick="InsertSocial()"><i class="fas fa-hashtag"></i>&nbsp;&nbsp;Seguidor de redes sociales</li>
<!--<li id="Insert-Bday" title="B-day Picker" onclick=""><i class="fas fa-birthday-cake"></i>&nbsp;&nbsp;Birthday date Picker</li>-->
<!--<li id="Insert-Spoiler" title="Spoiler" onclick="insertSpoiler()" class="Upgrade"><i class="fas fa-eye-slash"></i>&nbsp;&nbsp;Spoiler</li>-->
<li id="Insert-T&C" title="Terms and Conditions" onclick="TaC()" class="Upgrade"><i class="fas fa-scroll"></i>&nbsp;&nbsp;Términos y Condiciones</li>
<li id="Insert-Audio" title="Audio" onclick="InsertAudio()" class="Upgrade"><i class="far fa-file-audio"></i>&nbsp;&nbsp;Audio</li>
<li id="Insert-YouTube" title="YouTube" onclick="InsertYouTube()" class="Upgrade"><i class="fab fa-youtube"></i>&nbsp;&nbsp;YouTube</li>
<li id="Insert-Iframe-Embed" title="Iframe Embed" onclick="InsertIframeEmbeder()" class="Upgrade"><i class="far fa-window-restore"></i>&nbsp;&nbsp;Incorporador de iframe</li>
</span>
<li id="New">Elementos</li>
<li id="Insert-text" title="Short text" onclick="InsertsText()"><i class="fas fa-keyboard"></i>&nbsp;&nbsp;Texto corto</li>
<li id="Insert-FreeTxt" title="Long text" onclick="InsertTextArea()"><i class="fas fa-keyboard"></i>&nbsp;&nbsp;Texto largo</li>
<li id="Insert-Single" title="Single choices" onclick="InsertRadios()"><i class="far fa-dot-circle"></i>&nbsp;&nbsp;Opciones individuales</li>
<li id="Insert-Mutiple" title="Mutiple choices" onclick="InsertCheckboxs()"><i class="fas fa-check-square"></i>&nbsp;&nbsp;Múltiples opciones</li>
<li id="Insert-Dropdown" title="Dropdown" onclick="InsertDropdown()"><i class="fas fa-caret-square-down"></i>&nbsp;&nbsp;Desplegable</li>
<li id="Insert-Image" title="Image" onclick="InsertImages()"><i class="far fa-image"></i>&nbsp;&nbsp;Imagen</li>
<li id="Insert-Video" title="Video" onclick="InsertVideo()"><i class="fas fa-file-video"></i>&nbsp;&nbsp;Vídeo</li>
<li id="Insert-File" title="File Uploader" onclick="IntertFileUploader()" class="Upgrade"><i class="fas fa-file"></i>&nbsp;&nbsp;Cargador de archivos</li>
<li id="Insert-number" title="Number" onclick="InsertNumber()"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;&nbsp;Número</li>
<li id="Insert-submitbtn" title="Submit" onclick="InsertSubBtn()">Botón de enviar</li>
<li id="Insert-Text-Editor" title="Free Style Text Editor" onclick="InsertTextEdit()" class="Upgrade"><i class="fas fa-edit"></i>&nbsp;&nbsp;Editor de texto de estilo libre</li>
<!--<li id="Insert-Captcha" title="Captcha" onclick="" class="Upgrade"><img src="https://img.icons8.com/ios/32/000000/captcha.png" style="background:white;width:16px;height:16px;"/>&nbsp;&nbsp;Captcha[v1.0]</li>-->
<li id="Insert-table" title="Table" onclick="InsertTable()"><i class="fas fa-table"></i>&nbsp;&nbsp;Mesa</li>
<li id="table-options" style="cursor:default !important; background-color:lightgray;color:black;border-bottom:1px solid skyblue !important;border-top:1px solid skyblue !important;">
<input type='text' id='tabid' placeholder="Ingrese el ID de la tabla"/>
<button type="button" onclick="addRow()" title="Adds a row to the table">Añadir fila</button>
<button type="button" onclick="removeRow()" title="Removes a row from bottom to top">Eliminar fila(de abajo a arriba)</button>
<script>
function addRow(){
	let table = document.getElementById("tabid").value;
	let newTable = document.getElementById(table);
	//rows
	let row = newTable.insertRow(-1);
	//cells
	let cell = prompt("How many cells do you want?\nMake sure it is a int(number)\n\nAlso use the same number of rows that are in your table");
	for(c=0; c<cell; c++){
		let ce = row.insertCell();
		ce.innerHTML = "text";
	}
	
}
function removeRow(){
	let table = document.getElementById("tabid").value;
	let newTable = document.getElementById(table);
	newTable.deleteRow(-1);
}


</script>
</li>

<!--<li id="Insert-slider" title="Slider" onclick=""><i class="fas fa-sliders-h"></i>&nbsp;&nbsp;Slider</li>-->

<span id="eCommerce">
<li id="New" name="eCommerce">comercio electrónico</li>
<li id="Insert-PayPal" title="PayPal" onclick="InsertPayPal()" class="Upgrade"><i class="fab fa-paypal"></i>&nbsp;&nbsp;PayPal</li>
<li id="Insert-Stripe" title="Stripe" onclick="InsertStripe()" class="Upgrade"><i class="fab fa-stripe"></i>&nbsp;&nbsp;Raya</li>
</span>
<!--Apps-->
<span id="Apps">
<style>
.InfoApp{
z-index:1;
font-size:15px;
border:0 !important;
overflow:auto;
background-color:gray !important;
cursor:pointer !important;
}
.Unistall{
z-index:1;
font-size:15px;

overflow:auto;
background-color:red !important;
cursor:pointer !important;
}
.apps-config{
border:0 !important;
}

</style>
<li id="New" name="Apps">Aplicaciones</li>
<li id="Insert-GoogleMaps" title="Google Maps" onclick="Gmaps()" class="Gmap apps-config"><i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;mapas de Google
<li class="InfoApp" onclick="GMapInfo()">Información</li>
<li class="Unistall" onclick="GmapUnistall()">Desinstalar aplicación</li>
</li>



<script type="text/javascript">
//Info
function GMapInfo(){
alert("Nombre de la aplicación: GoogleMaps\n\nCreador: Google co.\n\nDescripción: busque negocios locales, vea mapas y obtenga indicaciones de manejo en Google Maps. Cuando haya eliminado el JavaScript, lo que quede debe ser una página vacía. Habilite JavaScript para ver Google Maps.\n\nIdiomas: C ++ (back-end), JavaScript, XML, Ajax (UI)\n\nDependencias: N/A\n\nVersión: 3.41.0\n\nNeedsCofig: Sí");
}
//Unistall
function GmapUnistall(){
let confirms = confirm("¿Está seguro de que desea instalar esta aplicación?\nAdvertencia: eliminará el mapa de Google superior en su hoja de visualización.");
if(confirms == true){
let find = document.querySelector(".Gmap-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>

<li id="Insert-RoboChat" title="RoboChat" onclick="RoboChat()" class="RoboChat apps-config"><i class="fas fa-comment"></i>&nbsp;&nbsp;RoboChat
<li class="InfoApp" onclick="RoboChatInfo()">Información</li>
<li class="Unistall" onclick="RoboChatUnistall()">Desinstalar aplicación</li>
</li>
<script type="text/javascript">
//Info
function RoboChatInfo(){
alert("Nombre de la aplicación: RoboChat\n\nCreador: SurveyBuilder\n\nDescripción: Cree y edite su propia estación de chat 24/7 con una IA\n\nDependencias: Boostrap Css(v4.5.0), Boostrap FontAwesome Icons (v4.7.0)\n\nIdiomas: HTML, CSS, JS\n\nVersión: 16.0.0\n\nNeedsCofig: sí");
}
//Unistall
function RoboChatUnistall(){
let confirms = confirm("¿Está seguro de que desea desinstalar esta aplicación?\nAdvertencia: eliminará el primer Robochat en su hoja de vista.");
if(confirms == true){
let find = document.querySelector(".RoboChat-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>


<li id="Insert-eSign" title="eSignature" onclick="eSign()" class="eSign apps-config"><i class="fas fa-signature"></i>&nbsp;&nbsp;firma electrónica
<li class="InfoApp" onclick="eSignInfo()">Información</li>
<li class="Unistall" onclick="eSignUnistall()">Desinstalar aplicación</li>
</li>
<script type="text/javascript">
//Info
function eSignInfo(){
alert("AppName: eSignature\n\nCreador: SurveyBuilder\n\nDescripción: Obtener la firma de los usuarios\n\nDependencias: jQuery 3.5.1+, Sign.js\n\nIdiomas: JQuery, JavaScript, HTML, CSS \ n \ nVersión: 16.0.0\n\nNeedsCofig: No");
}
//Unistall
function eSignUnistall(){
let confirms = confirm("¿Está seguro de que desea desinstalar esta aplicación?\nAdvertir que eliminará la firma electrónica superior en su hoja de visualización.");
if(confirms == true){
let find = document.querySelector(".eSign-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>

<li id="Insert-recorder" title="Recorder" onclick="rec()" class="rec apps-config"><i class="fas fa-video"></i>&nbsp;&nbsp;Grabadora
<li class="InfoApp" onclick="recInfo()">Información</li>
<li class="Unistall" onclick="recUnistall()">Desinstalar aplicación</li>
</li>
<script type="text/javascript">
//Info
function recInfo(){
alert("Nombre de la aplicación: Grabadora\n\nCreador: SurveyBuilder\n\nDescripción: Capture audio y video de cámara frontal, hágalo descargable\n\nDependencias: N/A\n\nIdiomas: HTML, CSS, JavaScript\n\nVersión: 16.0.0\n\nNeedsCofig: Sí");
}
//Unistall
function recUnistall(){
let confirms = confirm("¿Está seguro de que desea desinstalar esta aplicación?\nAdvertir que eliminará la grabadora superior en su hoja de visualización.");
if(confirms == true){
let find = document.querySelector(".rec-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>





<!--Add Apps below-->

</script>
</span>
<span id="cpanel-form">
<span id="cPanel">
<li id="New"><i class="fab fa-cpanel" style="font-size:52px;"></i></li>
</span>
<span id="CSS">
<li id="New">CSS personalizado&nbsp;&nbsp;<i class="fab fa-css3"></i></li>
<textarea rows="10" cols="30" placeholder="CSS personalizado" spellcheck="false"  autocorrect="off" id="cssFormat" onchange="CSSInsert()"></textarea>
</span>

<span id="Js">
<li id="New">Javascript/Jquery personalizado&nbsp;&nbsp;<i class="fab fa-js"></i></li>
<textarea rows="10" cols="30" placeholder="Javascript/Jquery personalizado" spellcheck="false"  autocorrect="off" id="jsFormat" onchange="JSInsert()"></textarea>
</span>
<span id="addons">
<li id="New">Complemento personalizado para Css/JS</li>
<button type="button" onclick="AddonInsert()">Agregar complemento</button>
</span>
<span id="sql">
<li id="New">Base de datos(SQL)&nbsp;&nbsp;<i class="fas fa-database"></i></li>
<!--<a href="./db/AddDatabase.php">-->
<button type="button" onclick="CreateData()">Agregar base de datos</button>
<!--<a href="./db/EditDatabase.php">-->
<button type="button" onclick="EditData()">Editar base de datos</button>
</span>
<!--
<span id="sqlite" hidden="true">
<li id="New">Add Database(SQLite)</li>
<button onclick="CreateFolder()">Create Folder(Required)</button>
<button onclick="RemoveFolder()">Remove Folder</button>
<button onclick="AddPublished()">Add Publish Survey(Required)</button>

//Write database script//

<script>
//SQLite
function CreateFolder(){
	window.open("./db/SQLite/CreateFolder.php", "", "width=320", "height=320");
}
function RemoveFolder(){
	window.open("./db/SQLite/Users/RemoveFolder.php", "", "width=320", "height=320");
}
function AddPublished(){
	window.open("./db/SQLite/Users/AddPublished.php", "", "width=320", "height=320");
}
</script>

</span>
-->
<!--<span id="API">
<li id="New">Add Your API(Custom JS)</li>
<textarea rows="10" cols="30" placeholder="Custom API system" spellcheck="false"  autocorrect="off" id="APIFormat" onchange="APIInserts()">{&#10;&#10;}</textarea>
</span>-->
<span id="Form-edit">
<li id="New">Editar formulario&nbsp;&nbsp;<i class="fas fa-edit"></i></li>

<li id="method">
<select onchange="Formset()" id="formmethod"><optgroup label="Method"><option value="POST">ENVIAR</option><option value="GET">OBTENER</option></optgroup></select>
<input type="url" id="Formaction" onchange="ActionForm()" placeholder="Ingresar acción (URL/Archivo)"/>
<input type="text" id="Formsubmit" onchange="SubmitForm()" placeholder="Ingrese Enviar(Función)"/>

</li>
<span id="Plugin">
<li id="New">Insertar complemento&nbsp;&nbsp;<i class="fas fa-puzzle-piece"></i></li>
<br/>
<input type="file" id="PluginFile" accept=".html" style="outline:none;"/>
<script>
$(function(){
	$('#PluginFile').change(function(event){
		let temppath = URL.createObjectURL(event.target.files[0]);
		
		//getFile
		let fp = $('#PluginFile');
		let lg = fp[0].files.length;
		var items = fp[0].files;
		
		//testFile
		if(lg>0){
			for(let i=0;i<lg;i++){
				 var pluginType = items[i].type;
				 var pluginSize = items[i].size;
			}
		}
		
		if(pluginType !== ".sbconsole"){
			alert("Invalid file");
			return false;
		}
		if(pluginSize > 10000){
			alert("File Size must be 10KB or less.");
			return false;
		}
		
		//otherwise
		$.get(temppath, function(data){
			
			document.querySelector("#Console").value = data;
			document.getElementById("Insert-Object").innerHTML = data;
		});
	});
});
</script>
</span>

</span>
<!--Config-->
<span id="Config">
<li id="New">Configuración&nbsp;&nbsp;<i class="fas fa-wrench"></i></li>
<li id="Config-settings">
<form method="post" action="" class="Config cofig-settings config-text" id="AppForm">
<li>Para mostrar el código para configurar, escriba el formato. Formato: /app {appname}</li>
<br/>
<br/>
<textarea id="Textformat" name="configbox" required="true" placeholder="Archivos de configuración aquí" onchange="testCmd()" style="margin: 0px; color: black; width: 185px; height: 91px;"></textarea>
<br/>
<button type="button" onclick="javascript:window.location.reload();">No veo ninguna posibilidad haga clic aquí</button>
<br/>
<br/>
<select id="token" required="true" onchange="ActionsT()">
<option value="">--Seleccionar aplicación--</option>
<option value="GoogleMaps">mapas de Google</option>
<option value="RoboChat">RoboChat</option>
<option value="Recorder">Grabadora</option>
</select>
<br/>
<br/>
<input type="submit" value="salvar"/>
</form>
<br/>
<br/>

</li>

<script type="text/javascript">
function testCmd(){
let x = document.getElementById("Textformat");

if(x.value == "/app GoogleMaps"){
$.get("./Apps/appdata/GoogleMaps.html", function(data){

x.value = data;
});
}
if(x.value == "/app RoboChat"){
$.get("./Apps/appdata/RoboChat.html", function(data){

x.value = data;
});
}
if(x.value == "/app Recorder"){
$.get("./Apps/appdata/recorder.html", function(data){

x.value = data;
});
}



}

//Action
function ActionsT(){
let x = document.getElementById("token");
let y = document.getElementById("AppForm");
if(x.selectedIndex == 0){
y.action = "";
}
if(x.selectedIndex == 1){
y.action = "./Apps/appdata/GoogleMaps.php";
}
if(x.selectedIndex == 2){
y.action = "./Apps/appdata/RoboChat.php";
}
if(x.selectedIndex == 3){
y.action = "./Apps/appdata/recorder.php";
}
if(x.selectedIndex == 4){
y.action = "./Apps/appdata/BadWordBlocker.php";
}

}
</script>

</span>
<span id="Cosnole-Log">
<form action="/SurveyBuilder/Console/Console.php" method="post">
<li id="New">Registro de la consola &nbsp;&nbsp;<button type="submit" title="Share Log" style="outline:none;border:none;font-size:15px;"><i class="fas fa-share-square"></i></button></li>
<br/>
<style>
.search, .import, .import-code{
	width:120px;
}
</style>
<input type="search" class="search search-word serach-input" placeholder="Buscar"/><button type="button" class="search-btn" onclick="SearchValue()">Buscar <i class="fas fa-search"></i></button>
<br/>
<br/>
<span style="color:white;">Ingrese la ID de la consola: ex(PC7VbBpG)</span><input type="textarea" class="import import-code" placeholder="Ingrese la ID de la consola"/><button onclick="ImportConsole()" type="button">Importar <i class="fas fa-upload"></i></button>

<br/>
<br/>
<span style="color:white;">Entrar Consola (<a href="https://github.com/" title="GitHub" target="_blank" style="cursor:pointer;background-color:transparent;color:white;"><i class="fab fa-github"></i></a> GitHub)</span><input type="textarea" class="import-code github-import github-import-code" placeholder="Ingrese a GitHub Raw"/><button onclick="ImportConsoleRaw()" type="button">Importar <i class="fas fa-upload"></i></button>
<br/>
<br/>
<button type="button" class="import_console_btn"><i class="fas fa-file-alt"></i> Cargar archivo .sbconsole</button>
<input type="file" class="import_console_file_text" accept=".sbconsole"/>
<style>
.import_console_file_text{ 
    width: 1px; 
    visibility: hidden;
}
</style>
<script>
$(function(){
    $('.import_console_btn').click(function(){
        $('.import_console_file_text').click();
    });
});



</script>
<script>
$(function(){
	$('.import_console_file_text').change(function(event){
		let temppath = URL.createObjectURL(event.target.files[0]);
		
		//getFile
     let fp = $(".import_console_file_text");
    let lg = fp[0].files.length; // get length
    let items = fp[0].files;
 
    
    if (lg > 0) {
        for (var i = 0; i < lg; i++) {
            var fileName = items[i].name; // get file name  
			
        }
	}
	//Gets file type
		let getFileName = fileName.split('.sbconsole');
		let string = getFileName.toString();
		let removeComma = string.replace(",", "");
		   let submax = removeComma + ".sbconsole";
		   //test fileName w/ submax
		   
		if(fileName !== submax){
	alert("Invalid file");
			return false;
		}
		
		
		//otherwise
		$.get(temppath, function(data){
			
			document.querySelector("#Console").value = data;
			document.getElementById("Insert-Object").innerHTML = data;
		});
	});
});
</script>
<br/>
<br/>
<textarea placeholder="Consola" required="true" name="Console" spellcheck="false" style="margin: 0px; width: 203px; height: 225px;" onchange="EditFormFromConsole()" class="lined" id="Console"></textarea>

<script type="text/javascript">
autodisplay();
function autodisplay(){
document.getElementById("Console").value = document.getElementById("Insert-Object").innerHTML;

}

function EditFormFromConsole(){
document.getElementById("Insert-Object").innerHTML = document.getElementById("Console").value;
setTimeout(autodisplay, 0);
}

loop();
function loop(){
if(document.activeElement.id === "Console"){
setTimeout(loop, 0);
}else{
setTimeout(autodisplay, 0);
setTimeout(loop, 0);
}
}


</script>
<script>
function SearchValue(){
	var SearchTerm = document.querySelector(".search").value;
  var TextSearch = document.getElementById("Console").value;

  if (SearchTerm.length > 0 && TextSearch.indexOf(SearchTerm) > -1) {
	  SearchTerm = SearchTerm.toString()
    window.find(SearchTerm);
	
  } else {
    alert("No Data found in Console");
  }
}
</script>
<script>
var checkedDataCount = 0;
function ImportConsole(){
	let ID = document.querySelector(".import").value;
	if(ID == null || ID == ""){
		let PushURL = "?reg-import=null";
history.pushState("", "", PushURL);
alert("You cannot leave textbox blank(null)");
document.getElementById("Console").value = "";
		 document.getElementById("Insert-Object").innerHTML = "";
return false;
	}
	let FullURL = "/SurveyBuilder/Console/Console-" + ID + ".sbconsole";
	$.get(FullURL, function(data){
		
	

document.getElementById("Console").value = data;
document.getElementById("Insert-Object").innerHTML = data;
let PushURL = "?reg-import=Success";
history.pushState("", "", PushURL);
checkedDataCount = 1;
return false;


});

setTimeout(checkData, 500);
checkedDataCount = 0;
}
function checkData(){
	if(checkedDataCount == 0){
let PushURL = "?reg-import=Failed";
history.pushState("", "", PushURL);
         document.getElementById("Console").value = "";
		 document.getElementById("Insert-Object").innerHTML = "";
alert("Cannot Find console ID");
return false;
}
}
</script>
<script>
var GitHubCheckCount = 0;
function ImportConsoleRaw(){
	let URLData = document.querySelector(".github-import").value;
	if(URLData == null || URLData == ""){
		let PushURL = "?GitHub-import=null";
         history.pushState("", "", PushURL);
		 alert("Cannot have textbox null");
		 document.getElementById("Console").value = "";
		 document.getElementById("Insert-Object").innerHTML = "";
return false;
		return false;
	}
	if(!URLData.match("https://raw.githubusercontent.com/")){
		let PushURL = "?GitHub-import=invalid_URL&requiredURL=https://raw.githubusercontent.com/";
         history.pushState("", "", PushURL);
		 alert("URL must start with: https://raw.githubusercontent.com/");
		 document.querySelector("#Console").value = "";
return false;
		return false;
	}
	let FullURL = URLData
	$.get(FullURL, function(data){
document.getElementById("Console").value = data;
document.getElementById("Insert-Object").innerHTML = data;
let PushURL = "?GitHub-import=Success";
history.pushState("", "", PushURL);
GitHubCheckCount = 1;
return false;


});
 
 setTimeout(GitHubCheck, 500);
 GitHubCheckCount = 0;
 
}
function GitHubCheck(){
	if(GitHubCheckCount == 0){
	let PushURL = "?GitHub-import=Failed";
history.pushState("", "", PushURL);
alert("GitHub Raw Data not found!");
		 document.getElementById("Console").value = "";
		 document.getElementById("Insert-Object").innerHTML = "";
		 GitHubCheckCount = 0;
return false;
	}
}
</script>
</form>
</span>
<span id="cmdprompt">
<li id="New">Símbolo del sistema&nbsp;&nbsp;<i class="fas fa-terminal"></i></li>

<br/>
<textarea placeholder="Mando" required="true" name="CmdPrompt" spellcheck="false" style="margin: 0px; width: 203px; height: 225px;" onchange="EditCmdPrompt()" class="lined" id="cmdPrompt"></textarea>

</span>
<script>
var toggleBlob = 0;
var selectNum = 0;
function EditCmdPrompt(){
	/*
	- Note: the if statements will only have one command. 
	  Unless you see '||' aka 'or' this means it has allies that can also run commands 
	*/
	
	
	//data
	let getMsg = document.getElementById("cmdPrompt");
	let getData = document.getElementById("Insert-Object");
	
	/*clear*/
	if(getMsg.value.match("clear.all") || getMsg.value.match("cls.all")){
		document.getElementById("Insert-Object").innerHTML = "";
	}
	if(getMsg.value.match("clear.id") || getMsg.value.match("cls.id")){
				let idData = prompt("Enter ID Name");
				let seek = document.getElementById(idData);
			document.getElementById("Insert-Object").removeChild(seek);

	}
	
	/*clsmsg*/
	if(getMsg.value.match("clsmsg.no")){
		toggleBlob = 0; //doesn't clear form and stops loop from auto
	}
	if(getMsg.value.match("clsmsg.auto")){
		toggleBlob = 1; //auto clears everytime your not in focus
	}
	if(getMsg.value.match("clsmsg.yes")){
		toggleBlob = 2; //auto clears
	}
	
	if(toggleBlob == 0){
         
	}
	
	if(toggleBlob == 1){
		setTimeout(loop1, 0);
	}
	
	if(toggleBlob == 2){
		document.getElementById("cmdPrompt").value = "";
		toggleBlob = 0;
	}
	/*help*/
	if(getMsg.value.match("help")){
		alert("comando borrar: borra el objeto o todo el formulario: formato: borrar. <id|todo>" +
"\n\nclsmsg command - borra cmd promt: format: clsmsg. <no|auto|yes>" +
"\ n\ncomando de ayuda: le da la lista de comandos: formato: ayuda" +
"\n\ncomando activador: activa una función / opción: formato: activador.<click|enfoque>.<elemento>[.<subtelemento>(opcional)]" +
"\n\nComando de ayuda automática: completa el comando en el símbolo del sistema: formato: autoayuda.<comando>" +
"\n\nComando oculto: oculta un elemento. Está en una interfaz de usuario: formato: oculto.<ui|UI>" +
"Comando\n\ncmd: aplica estilo al símbolo del sistema: formato: cmd.<estilo>"
		
		
		);
	}
	
	/*trigger*/
	
	if(getMsg.value.match("trigger.click.sidebar")){
		getMsg.value = "";
	document.querySelector(".exit").click();	
	}
	if(getMsg.value.match("trigger.focus.title")){
	document.querySelector("#titleSave").focus();	
	}
	
	if(getMsg.value.match("trigger.click.style.bgcolor")){
		document.querySelector("#Style-btn").click();
	document.querySelector("#color").click();	
	}
	if(getMsg.value.match("trigger.click.style.Tcolor")){
		document.querySelector("#Style-btn").click();
	document.querySelector("#Tcolor").click();	
	}
	
	if(getMsg.value.match("trigger.click.prop.preview")){
		document.querySelector("#Properties-btn").click();
	document.querySelector("#CheckPre").click();	
	}
	if(getMsg.value.match("trigger.click.save")){
	document.querySelector("#Save").click();	
	}
	if(getMsg.value.match("trigger.click.load")){
	document.querySelector("#Load").click();	
	}
	if(getMsg.value.match("trigger.click.clsData")){
	document.querySelector("#Data").click();	
	}
	
	/*Autohelp*/
	
	if(getMsg.value.match("autohelp.clear")){
		getMsg.value = "claro.<id|todo>";
	}
	if(getMsg.value.match("autohelp.clsmsg")){
		getMsg.value = "clsmsg.<no|auto|sí>";
	}
	if(getMsg.value.match("autohelp.help")){
		getMsg.value = "cmd. <ayuda|?>";
	}
	if(getMsg.value.match("autohelp.trigger")){
		getMsg.value = "activador.<click|enfoque>. <elemento> [.<subtelemento>(opcional)]";
	}
	if(getMsg.value.match("autohelp.hidden")){
		getMsg.value = "oculto.<ui|UI>";
	}
	if(getMsg.value.match("autohelp.cmd")){
		getMsg.value = "cmd.<estilo>";
	}
	/*hidden*/
	if(getMsg.value.match("hidden.ui") || getMsg.value.match("hidden.UI")){
		let hiddenDev = prompt("hidden or visable?", "hidden");
		if(hiddenDev == "hidden"){
		let sel = prompt("Element ClassName or ID", "className");
		
		if(sel == "className"){
			let className = prompt("Enter element's className");
			let mainClassName = "." + className;
			document.querySelector(mainClassName).hidden = true
		}
		if(sel == "ID"){
			let ID = prompt("Enter element's className");
			let mainID = "#" + ID;
			document.querySelector(mainID).hidden = true
		}
		
		}
		if(hiddenDev == "visable"){
			let sel = prompt("Element ClassName or ID", "className");
		
		if(sel == "className"){
			let className = prompt("Enter element's className");
			let mainClassName = "." + className;
			document.querySelector(mainClassName).hidden = false
		}
		if(sel == "ID"){
			let ID = prompt("Enter element's className");
			let mainID = "#" + ID;
			document.querySelector(mainID).hidden = false;
		}
			
		}
		
	}
	
	/*cmd*/
	if(getMsg.value.match("cmd.bgcolor")){
		let bgcolor = prompt("Ingrese un color o un hexdec");
		getMsg.style.backgroundColor = bgcolor;
	}
	
	
	if(getMsg.value.match("cmd.color")){
		let color = prompt("Ingrese un color o un hexdec");
		getMsg.style.color = color;
	}

	
	if(getMsg.value.match("cmd.fontSize")){
		let size = prompt("Ingrese un tamaño de fuente(se medirá en píxeles[px])");
		
		let fixed = size + "px";
		getMsg.style.fontSize = fixed;
	}
	
	
	
}




/*loops for autoclear*/
function loop1(){
	if(toggleBlob == 1){
if(document.activeElement.id === "cmdPrompt"){
setTimeout(loop1, 0);
}else{
	document.getElementById("cmdPrompt").value = "";
setTimeout(loop1, 0);
}
	} else{
		return false;
	}
}

</script>
</span>

<span id="remove-element">
<li id="New">Quitar elemento&nbsp;&nbsp;<i class="fas fa-trash"></i></li>
<li><input type="text" id="DelID" placeholder="Enter ID"/></li>
<li class="Unistall" onclick="RemoveElement()">Eliminar elemento</li>
<script type="text/javascript">
function RemoveElement(){
let x = document.getElementById("DelID");

if(x.value == ""){
alert("Debes ingresar una identificación");
return false;
}
else{
let vari = x.value;
let del = document.getElementById(vari);
document.getElementById("Insert-Object").removeChild(del);
x.value = "";
return false;
}

}
</script>
</span>
<li id="New">Mapa de carpetas/archivos&nbsp;&nbsp;<i class="far fa-file-archive"></i></li>
<style>
.Folder-Location{
	color:white; 
	font-size:12px;
	margin-top:10px;
	margin-bottom:10px;
	cursor:pointer !important;
}
.Folder-Location p{
	margin:5px;
}

</style>
<span class="Folder-Location">
<button onclick="ExpandAll()">Expandir todo</button>&nbsp;&nbsp;<button onclick="DexpandAll()">Dexpand todo</button>
<script>
function ExpandAll(){
	let folders = document.querySelectorAll("details");
	let i;
	for (i = 0; i < folders.length; i++) {
		folders[i].open=true;
	}
	
}
function DexpandAll(){
	let folders = document.querySelectorAll("details");
	let i;
	for (i = 0; i < folders.length; i++) {
		folders[i].open=false;
	}
	
}
</script>
<br/>
<br/>
<details class="Folder-Location-Map">
<summary><i class="fas fa-folder"></i> htdocs</summary>
<details class="Folder-Location-Map">
<summary><i class="fas fa-folder"></i> SurveyBuilder</summary>
<details>
<summary><i class="fas fa-folder"></i> .vs</summary>
<details>
<summary><i class="fas fa-folder"></i> v16</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/.vs/v16/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/.vs/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> larva del moscardón</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/bot/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
  echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> Constructor</summary>
<details>
<summary><i class="fas fa-folder"></i> API</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/API/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> Aplicaciones</summary>
<details>
<summary><i class="fas fa-folder"></i> datos de aplicación</summary>
<details>
<summary><i class="fas fa-folder"></i> eSign</summary>
<details>
<summary><i class="fas fa-folder"></i> bienes</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/Apps/appdata/eSign/assets/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
</details>
<details>
<summary><i class="fas fa-folder"></i> RoboChat</summary>
<details>
<summary><i class="fas fa-folder"></i> bienes</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/Apps/appdata/RoboChat/assets/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
</details>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/Apps/appdata/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
</details>
<details>
<summary><i class="fas fa-folder"></i> Config</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/Config/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> db</summary>
<details>
<summary><i class="fas fa-folder"></i> SQL</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/db/SQL/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
</details>
<details>
<summary><i class="fas fa-folder"></i> Elementos</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/Elements/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>

<details>
<summary><i class="fas fa-folder"></i> Música</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/Music/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> Código_QR</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/QR_Code/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> Plantillas</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/templetes/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> usuarios</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/users/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>

<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> Consola</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Console/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> Créditos</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Credits/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> errores</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/errors/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>
<details>
<summary><i class="fas fa-folder"></i> imagenes</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/images/icon/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details>

<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/";
$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$size = filesize($filename);
	$filename = basename($filename);
   //Simply print them out onto the screen.
   echo "<p> <i class='fas fa-file-code'></i> " . $filename . "(" . $size . "B)" . "</p>";
}
echo "<br/>";
?>
</details> 
</details>
</span>
<span id="scroll-container-bottom">
<li id="Scroll-bottom" onclick="scrollUp()" class="scroll scroll-to-top">Vuelve al comienzo&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-up"></i></li>
<script>
function scrollUp(){
var elmnt = document.querySelector(".exit");
elmnt.scrollIntoView({
	behavior: 'smooth',
    block: 'start'
});
}
</script>
</span>
<li id="space" style="cursor:default; border:none;"></li>
<li id="space" style="cursor:default; border:none;"></li>
<li id="space" style="cursor:default; border:none;"></li>
<li id="space" style="cursor:default; border:none;"></li>
<li id="space" style="cursor:default; border:none;"></li>
<li id="space" style="cursor:default; border:none;"></li>
</ul>
<!--End sidebar-->
</div>
<br>
<br>
<br>
<br>

<div id="Editor-Control-Form">
<h1>Verificación de Internet</h1>
<script>
setTimeout(checkInternetConnection, 0);
function checkInternetConnection(){
let InternetStatus = window.navigator.onLine;
if(InternetStatus){
	let codeWifiConnected = "<i class='fas fa-wifi'></i>";
	document.querySelector(".Internet-Status").innerHTML = codeWifiConnected + "Conectado";
	document.querySelector(".Internet-Status").style.fontSize = "32px";
	document.querySelector(".Internet-Status").style.color = "green";
	document.querySelector(".Internet-Status").style.textAlign = "center";
	  // document.querySelector("#Sidebar").hidden = false;
}else{
	let codeWifiDisconnected = "<i class='fad fa-wifi-slash'></i>";
	document.querySelector(".Internet-Status").innerHTML = codeWifiDisconnected + " Desconectado";
	document.querySelector(".Internet-Status").style.fontSize = "32px";
	document.querySelector(".Internet-Status").style.color = "red";
	document.querySelector(".Internet-Status").style.textAlign = "center";
    //document.querySelector("#Sidebar").hidden = true;
	
}
setTimeout(checkInternetConnection, 0);
}
</script>
<h3 class="Internet-Status"></h3>
<br/>
<hr/>
<br/>
<h1>Herramienta del editor</h1>
<br/>
<hr/>
<br/>
<div id="Style-editor-container">
<div id="Style"><button title="Style" onclick="OpenStyle()" id="Style-btn">Estilo</div>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div id="Style-clipboard" hidden="true">
<div id="BgColor"><span style="color:lightgray;font-weight:bold;">Color de fondo:</span>  <input type="color" title="background Color" oninput="ChageColor()" id="color" value="#9acd32"  list="presetColors"/></div>
<datalist id="presetColors">
  <option value="#ff0000" title="red"/>
  <option value="#00ff00" title="green"/>
  <option value="#0000ff" title="blue"/>
  <option value="#FFFB00" title="yellow"/>
  <option value="#FF00E0" title="pink"/>
  <option value="#FF8300" title="orange"/>
  <option value="#00F9FF" title="skyblue"/>
  <option value="#FFFFFF" title="white"/>
  <option value="#000000" title="black"/>
  <option value="#9acd32" title="Defualt"/>
</datalist> 

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<div id="Titlecolor"><span style="color:lightgray;font-weight:bold;">Color del título: <input type="color" title="Title Color" oninput="ChageTColor()" id="Tcolor"  list="presetColors"/></div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--Properties-->
<div id="properties"><button title="Properties" onclick="prop()" id="Properties-btn">Propiedades</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<div id="PreCon" hidden="true">
<div id="Slider-Con">
<div id="Slider-text">Avance: </div>
<label class="switch">
<input type="checkbox" id="CheckPre" oninput="Preview()"> 

<span class="slider round"></span></label> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button onclick="Publish()" id="Publish">Publicar</button>
<script>

</script>
</div>  
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--Save-->
<!--<div id="save"><button title="Save" id="save-btn">Save<button></div>-->

<!--Contact-->
<div id="contact-btn"><a href="mailto:surveybuildersbot@gmail.com"><button id="contact-btn" title="Contact">Contacto</button></a></div>
<br>
<br>
<br>
<div id="contact" hidden="true">Contacto: 
<form action="contact.php" method="post">
First name: <input type="text" name="Fname" placeholder="First name" required="true"/><br>
Last name: <input type="text" name="Lname" placeholder="Last name" required="true"/><br>
Email: <input type="email" name="email" placeholder="Email address" required="true"/>
Message: <textarea name="message" required="true" placeholder="Message"></textarea><br/>
<br/>
<input type="submit" value="Send"/>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button id="Save" onclick="Save()" title="Save Data">Salvar</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button id="Load" onclick="Load()" title="Load Data">Carga</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button id="Data" onclick="DeleteData()" title="Clear Data">Borrar datos</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr/>
<br/>
<h1>Modelo's</h1>
<br/>
<button id="temp" onclick="setupBlank()" class="blank_temp" title="Blank Templeate">Plantilla en blanco</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button id="temp" onclick="setupMedTemp()" class="med_temp" title="Medical Templeate">Plantilla médica</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button id="temp" onclick="setupPoliceIncidentReportTemp()" class="Police_temp" title="Police Incident Report Template">Informe de incidente policial</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<span class="web-config-data">
<hr/>
<br/>
<h1>Configuración web <i class="fas fa-tools"></i></h1>

<br/>

<style>
/*config checkbox*/
.checkbox{
	position:relative;
	height:40px;
	width:100px;
	background:#2e394d;
	border-radius:30px;
}
.checkbox-input{
	position:absolute;
	height:100%;
	width:100%;
	outline:none;
	z-index:1;
	-webkit-appearance:none;
	cursor:pointer;
}
.checkbox-icons::before{
	position:absolute;
	content:"\f00d";
	font-family:"Font Awesome 5 Free";
	font-weight: 900;
	color:white;
	width:35px;
	height:35px;
	background:#c34a4a;
	border-radius:50%;
	left:3px;
	top:50%;
	transform:translateY(-50%);
	font-size:20px;
	display:flex;
	align-items:center;
	justify-content:center;
	transition:0.4s;
}
.checkbox-input:checked + label .checkbox-icons::before{
	background:#8bc34a;
	transform:translateY(-50%) rotate(360deg);
	left:calc(100% - 38px);
	content: "\f00c";
	
}
.label_config{
	font-size:25px;
}
.Warning-input{
	background-color:red;
}
.dbselect{
	font-size:25px;
}
.maxTitleInput{
	width:315px;
	font-size:25px;
}
</style>
<span class="label_config">Allow_Banner_display:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check1" checked="" onclick="setBanner()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">Allow_Console_attribute:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check2" checked="" onclick="setConsoleAttri()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">Allow_Pop_up:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check3" onclick="setPopUp()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">limit_list:</span>
<div class="Warning-input">
<i class="fas fa-exclamation-circle"></i> Sorry, this configuration must be manually edited go to ./Config/Config.js
</div>
<br/>
<span class="label_config">Allow_Inspect_element:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check4" checked="" onclick="setInspectElement()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">Allow_location_tracking:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check5" onclick="setLocationTrack()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">Allow_API_config:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check6" onclick="setApiConfig()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">get_users_lang:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check7" checked="" onclick="setUserLang()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">get_users_platform:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check8" checked="" onclick="setUserPlatform()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">get_users_usersAngent:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check9" checked="" onclick="setUserAngent()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">test_users_cookieEnable:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check10" checked="" onclick="setTestCookie()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">Collect_IP:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check11" onclick="setCollectIP()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">Allow_cPanel:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check12" checked="" onclick="setcPanels()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">maxTitle:</span>
<div class="NumTitle">
<input type="number" placeholder="Ingrese un número del 10-40" title="Number must be more then 10 and less than 40" min="10" max="40" onchange="setMaxTitle()" class="maxTitleInput"/>
</div>
<br/>

<span class="label_config">nombre de usuario:</span>
<div class="user username-con">
<input type="text" placeholder="Introduzca su nombre de usuario" id="userCode" style="width:320px;font-size:25px;" class="username-input username-data" oninput="setUsername()"/>
</div>

<br/>
<span class="label_config">banIp:</span>
<div class="Warning-input">
<i class="fas fa-exclamation-circle"></i> Lo sentimos, esta configuración debe editarse manualmente, vaya a ./Config/Config.js
</div>
<br/>
<span class="label_config">Enable_Config_File:</span>
<div class="Warning-input">
<i class="fas fa-exclamation-circle"></i> Lo sentimos, esta configuración debe editarse manualmente, vaya a ./Config/Config.js
</div>
<br/>
<span class="label_config">Allow_Database:</span>
<div class="database-input">
<select class="dbselect" oninput="setDb()">
<option value="false">falso</option>
<option value="mySQL" selected="selected">mySQL</option>
</select>
</div>
<br/>
<span class="label_config">redirFormLink:</span>
<div class="Warning-input">
<i class="fas fa-exclamation-circle"></i> Lo sentimos, esta configuración debe editarse manualmente, vaya a ./Config/Config.js
</div>
<br/>
<span class="label_config">Allow_ad_blocker _annoyance:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input ad-checkbox check13" onclick="setAdBlocker()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br>
<br>
<br>
<br>
<hr/>
<h1>Estilista <i class="fas fa-palette"></i></h1>
<br/>
<i class="fas fa-asterisk" style="color:red;"></i> <span class="data-id-con">Ingrese ID: <input type="text" title="Enter ID" class="style-id" placeholder="ID de estilo"/></span>
<br/>
<br/>
fuerte(<i class="fas fa-bold" title="Bold"></i>): <input type="checkbox" class="style style-checkbox style-bold" onclick="setBold()"/><br/>
itálico(<i class="fas fa-italic" title="Italic"></i>): <input type="checkbox" class="style style-checkbox style-italic" onclick="setItalic()"/><br/>
Subrayar(<i class="fas fa-underline" title="Underline"></i>): <input type="checkbox" class="style style-checkbox style-underline" onclick="setUnderline()"/><br/>
penetrar(<i class="fas fa-strikethrough" title="Strikethrough"></i>): <input type="checkbox" class="style style-checkbox style-strikethrough" onclick="setStrikethrough()"/><br/>
Color(<i class="fas fa-paint-brush" title="Font Color"></i>): <input type="color" class="style style-color style-fontColor" oninput="setColor()"/><br/>
BGColor(<i class="fas fa-paint-roller" title="Font Background Color"></i>): <input type="color" class="style style-color style-fontBgColor" oninput="setBgColor()"/> Transparente: <input type="checkbox" class="style style-checkbox style-fontBgColor-Transparent" onclick="setBgColor()"/><br/>
Tamaño de fuente(<i class="fas fa-text-height" title="Font Size"></i>) <input type="number" min="0" placeholder="Ingrese int(número[px])" class="style style-number style-fontSize" oninput="setFontSize()"/><br/>
Familia tipográfica(<i class="fas fa-font" title="Font Family"></i>): <input type="text" value="" placeholder="Ingrese el nombre de la familia de fuentes" class="style style-text style-fontFamily" oninput="setFontFamily()"/><br/>
Texto alineado:(<i class="fas fa-align-justify" title="Text Align"></i>):
<select class="style style-select style-align" onchange="setTextAlign()">
<option value="left-align">Alinear a la izquierda</option>
<option value="center-align">Alinear al centro</option>
<option value="right-align">Alinear a la derecha</option>
<option value="justify-align">Justificar alinear</option>
</select><br/>
Text dents:(<i class="fas fa-indent" title="Text Dent"></i>): <input type="number" min="0" oninput="setTextDent()" placeholder="Ingrese un int(número[%])" class="style-dent"/>
<!--Style script-->
<script>
//setData 
var System = document.querySelector(".style-id");
var Bold = document.querySelector(".style-bold");
var Italic = document.querySelector(".style-italic");
var Underline = document.querySelector(".style-underline");
var Strikethrough = document.querySelector(".style-strikethrough");
var Color = document.querySelector(".style-fontColor");
var BgColor = document.querySelector(".style-fontBgColor");
var BgColorTrans = document.querySelector(".style-fontBgColor-Transparent");
var Fsize = document.querySelector(".style-fontSize");
var Ffamily = document.querySelector(".style-fontFamily");
var txtAlign = document.querySelector(".style-align");
var txtDent = document.querySelector(".style-dent");
//bold
function setBold(){
	if(Bold.checked){
		document.getElementById(System.value).style.fontWeight = "bold";
	}else{
		document.getElementById(System.value).style.fontWeight = "normal";
	}
	
}
function setItalic(){
	if(Italic.checked){
		document.getElementById(System.value).style.fontStyle = "italic";
	}else{
		document.getElementById(System.value).style.fontStyle = "normal";
	}
	
}
function setUnderline(){
	if(Underline.checked){
		document.getElementById(System.value).style.textDecoration = "underline";
	}else{
		document.getElementById(System.value).style.textDecoration = "none";
	}
	
}
function setStrikethrough(){
	if(Strikethrough.checked){
		document.getElementById(System.value).style.textDecoration = "line-through";
	}else{
		document.getElementById(System.value).style.textDecoration = "none";
	}
	
}
function setColor(){
document.getElementById(System.value).style.color = Color.value;
}
function setBgColor(){
	if(BgColorTrans.checked){
		document.getElementById(System.value).style.backgroundColor = "transparent";
	}else{
		BgColorTrans.checked = false;
		document.getElementById(System.value).style.background = BgColor.value;
	}

}
function setFontSize(){
	document.getElementById(System.value).style.fontSize = Fsize.value;
}
function setFontFamily(){
	document.getElementById(System.value).style.fontFamily = Ffamily.value;
}
function setTextAlign(){
	if(txtAlign.selectedIndex == "0"){
		document.getElementById(System.value).style.textAlign = "left";
	}
	if(txtAlign.selectedIndex == "1"){
		document.getElementById(System.value).style.textAlign = "center";
	}
	if(txtAlign.selectedIndex == "2"){
		document.getElementById(System.value).style.textAlign = "right";
	}
	if(txtAlign.selectedIndex == "3"){
		document.getElementById(System.value).style.textAlign = "justify";
	}
}
function setTextDent(){
		let percent = txtDent.value + "%";
		document.getElementById(System.value).style.textIndent = percent;	
}
</script>
<!--Style script(End)-->

</span>
</div>


<!--style="position:absolute;left:300%;"-->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer id="SurveyMakerBanner" role="banner"><div id="Banner"><span id="Icon"><img src="/SurveyBuilder/favicon.ico" width="50" height="50" title="SurveyMaker" alt="SurveyMaker Icon"/></span><span id="Text1">¡Únase a SurveyBuilder HOY! <span id="Text2">Únete a nuestro <a id="FourmLink" title="Fourm" href="https://surveybuilder.boards.net/" target="_blank">foro</a></span><span id="Text3">&copy;SurveyBuilder</span></div></footer>
<div id="copyright-print">&copy; SurveyBuilder</div>
</div>

<!--<div class="langDataSec"></div>-->
<!--<script>
function googleTranslateElementInit(){
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');	
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
<script src="/SurveyBuilder/Builder/Config/Config.js" type="text/javascript"></script>


<script>

//coords:
var check1 = document.querySelector(".check1");//banner
var check2 = document.querySelector(".check2");//console
var check3 = document.querySelector(".check3");//popup
var check4 = document.querySelector(".check4");//inspect
var check5 = document.querySelector(".check5");//location
var check6 = document.querySelector(".check6");//api
var check7 = document.querySelector(".check7");//lang
var check8 = document.querySelector(".check8");//platform
var check9 = document.querySelector(".check9");//angent
var check10 = document.querySelector(".check10");//cookie
var check11 = document.querySelector(".check11");//ip
var check12 = document.querySelector(".check12");//cpanel
var check13 = document.querySelector(".check13");//adblocker

function setBanner(){
	if(Allow_Banner_display == true && check1.checked == false){
		Allow_Banner_display = false;
	}else{
		Allow_Banner_display = true;
	}
	setTimeout(testCorrospond, 0);
}
function setConsoleAttri(){
	if(Allow_Console_attribute == true && check2.checked == false){
		Allow_Console_attribute = false;
	}else{
		Allow_Console_attribute = true;
	}
	setTimeout(testCorrospond, 0);
}
function setPopUp(){
	if(Allow_Pop_up == true && check3.checked == false){
		Allow_Pop_up = false;
	}else{
		Allow_Pop_up = true;
	}
	setTimeout(testCorrospond, 0);
}
function setInspectElement(){
	if(Allow_Inspect_element == true && check4.checked == false){
		Allow_Inspect_element = false;
	}else{
		Allow_Inspect_element = true;
	}
	setTimeout(testCorrospond, 0);
}
function setLocationTrack(){
		if(Allow_location_tracking == true && check5.checked == true){
		Allow_location_tracking = false;
	}else{
		Allow_location_tracking = true;
	}
	setTimeout(testCorrospond, 0);
}
function setApiConfig(){
	if(Allow_API_config == true && check6.checked == true){
		Allow_API_config = false;
	}else{
		Allow_API_config = true;
	}
	setTimeout(testCorrospond, 0);
}
function setUserLang(){
	if(get_users_lang == true && check7.checked == false){
		get_users_lang = false;
	}else{
		get_users_lang = true;
	}
	setTimeout(testCorrospond, 0);
}
function setUserPlatform(){
	if(get_users_platform == true && check8.checked == false){
		get_users_platform = false;
	}else{
		get_users_platform = true;
	}
	setTimeout(testCorrospond, 0);
}
function setUserAngent(){
	if(get_users_usersAngent == true && check9.checked == false){
		get_users_usersAngent = false;
	}else{
		get_users_usersAngent = true;
	}
	setTimeout(testCorrospond, 0);
}
function setTestCookie(){
	if(test_users_cookieEnable == true && check10.checked == false){
		test_users_cookieEnable = false;
	}else{
		test_users_cookieEnable = true;
	}
	setTimeout(testCorrospond, 0);
}
function setCollectIP(){
	if(Collect_IP == true && check11.checked == true){
		Collect_IP = false;
	}else{
		Collect_IP = true;
	}
	setTimeout(testCorrospond, 0);
}
function setcPanels(){
	if(Allow_cPanel == true && check12.checked == false){
		Allow_cPanel = false;
	}else{
		Allow_cPanel = true;
	}
	setTimeout(testCorrospond, 0);
}
function setAdBlocker(){
	if(Allow_ad_blocker == true && check13.checked == false){
		Allow_ad_blocker = false;
	}else{
		Allow_ad_blocker = true;
	}
	setTimeout(testCorrospond, 0);
}
function setDb(){
	let db = document.querySelector(".dbselect");
	Allow_Database = db.value;
	setTimeout(testCorrospond, 0);
}
function setMaxTitle(){
	let numMax = document.querySelector(".maxTitleInput");
	
    if(numMax.value < "10" || numMax.value < 10){
		numMax.value = "10";
		alert("Can't have number's lower then 10");
		return false;
	}
	if(numMax.value > "40" || numMax.value > 40){
		numMax.value = "40";
		alert("Can't have number's bigger then 40");
		return false;
	}
	maxTitle = parseInt(numMax.value);
	
	setTimeout(testCorrospond, 0);
	
}
function setUsername(){
	let user = document.querySelector(".username-input");
	if(user.value.match("admin") || user.value.match("Admin")){
		alert("You can't use the word 'admin'|'Admin' in the username");
		user.value = "";
		return false;
	}
	username = user.value;
		setTimeout(testCorrospond, 0);
	
} 
</script>

</body>                                                                      
</html>         