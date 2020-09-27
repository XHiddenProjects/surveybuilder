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



<script src="Apps_Insert.js" type="text/javascript"></script>
<!-- Google Tag Manager -->


<!-- End Google Tag Manager -->
<meta charset="UTF-8"/>
<meta name="keywords" content="Survey Builder, Free, Test, Quiz, and Survey's"/>
<meta name="author" content="©SurveyMaker"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <meta name content="SurveyMaker"/>
 <meta name="UsersForm" hidden="hidden" content="SurveyBuilderId:19494sbybfdyfuy47grfrfureuyervchfiuerhgyuer748gryru435943578347f"/>
 <meta name="Forum" property="og:url" content="https://surveymaker.boards.net"/>
<title id="UserTitle">Untitled - Survey Builder</title>
<link rel="stylesheet" type="text/css" href="SurveyBuilder.css"/>
<link rel="stylesheet" href="SurveyBuilderMobile.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="FormInsert.css"/>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="https://proicons.netlify.app/css/icons.min.css"/>
<script src="SurveyBuilder.js" type="text/javascript"></script>
<script src="InsertItems.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/46bb4793e2.js" crossorigin="anonymous"></script>
<script src="serviceworker.js"></script>
 <!--<link href="./app.webmanifest" rel="manifest" crossorigin="use-credentials"/>-->
<noscript><img src="/SurveyBuilder/images/icon/favicon.png" width="20" height="20"/>Sorry JavaScript is off, make sure it is on due to a lot of functions needing to be triggered</noscript>
<!--Templeates-->
<script src="./templetes/Medical_temp.js"></script>
<script src="./templetes/blank_temp.js"></script>
<script src="./templetes/police_incident_report_temp.js"></script>
<!--end Templeate script-->



</head>
<div id="not"></div>


<body onload="Update()" id="SurveyBuilderBody">
<?php
$file = "./API/API.txt";

if(!file_exists($file)){
	echo "<script>document.body.hidden = true;setInterval(function(){alert('You are missing API key')}, 0);</script>";
}else{
	echo "";
}

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
<h1 style="font-size:52px; color:black;">Redirecting Form link...</h1>
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

  <center><h6 id="Lastest">Last Updated:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<time id="Timedate" onload="Update()"></time></h6></center><br>
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
<error id="Error" role="tooltip" class="error" aria-label="error" hidden="true">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry you need a title before saving it or its to long</error>
<!--<error id="SpanError" hidden="true">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry spam block as been added. Your Clicks: <span id="Count" style="color:white;"></span> times</error>-->
<br>
<br>
<span class="title title-input title-execute"><input type="text" id="titleSave" autocomplete="off" title="Enter Title" onkeydown="testback(event);" onkeypress="wcount()" pattern="[a-zA-Z0-9]{,15}"  placeholder="Enter a title" required><button id="titleSave-btn" title="Save Title" onclick="savetitle()" type="submit">Save</button></span>
<div id="wcc" style="position:absolute;left:65%; top:13.5%;font-size:25px;"><span id="Wcount" style="color:red;">0</span><span>/</span><span id="maxTitle">25</span>&nbsp;<span>char.</span></div>

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
<div class="heading-ad-error-title">Ad blocker is enable <i class="fas fa-sad-tear"></i></div>
<div class="heading-ad-error-subtitle">Please disable your ad blocker to activate this.</div>
<div class="close-ad-btn"><button class="btn-ad-con" onclick="closeAdError()">Continue <span class="countdown"></span></button></div>
</div>
 <!--Sidebar-->
              

<div id="Sidebar" role="sidebar">
<div class="toggle-sidebar-btn" role="sidebar-button"  onclick="togglesidebar()" title="Add Elements" style="cursor:pointer;">
<span></span>                                                                                                                                       
<span></span>
<span></span>
</div>
<ul>
<li id="New" class="exit" onclick="togglesidebar()" title="Close Elements" style="cursor:pointer;">Exit Sidebar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</li>
<li id="exit-btn" style="cursor:default; border:none;"></li>
<span id="scroll-container-top">
<li id="Scroll-top" onclick="scrollDown()" class="scroll scroll-to-bottom">Scroll to Bottom&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-down"></i></li>
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
elmnt.scrollIntoView();
}
</script>
</span>
<li id="New">Defualt Inserts</li>
<li id="Insert-header" title="Header" onclick="InsertHeadings()"><i class="fas fa-heading"></i>&nbsp;&nbsp; Header</li>
<li id="Insert-Paragraph" title="Pharagraph" onclick="InsertPara()"><i class="fas fa-paragraph"></i>&nbsp;&nbsp; Paragraph</li>
<li id="Insert-Name" title="Full Name" onclick="InsertNames()"><i class="fas fa-user-circle"></i>&nbsp;&nbsp; Full Name</li>
<li id="Insert-Email" title="Email" onclick="InsertEmailAddress()"><i class="far fa-envelope"></i> &nbsp;&nbsp;Email</li>
<li id="Insert-address" title="Address" onclick="InsertAddress()"><i class="fas fa-address-card"></i>&nbsp;&nbsp;Address</li>
<li id="Insert-phone" title="Phone" onclick="InsertPhone()"><i class="fas fa-phone"></i>&nbsp;&nbsp;Phone</li>
<li id="Insert-Date" title="Date Picker" onclick="InsertDate()"><i class="fas fa-calendar-alt"></i> &nbsp;&nbsp;Date Picker</li>
<li id="Insert-Time" title="Time" onclick="InsertTime()"><i class="fas fa-clock"></i>&nbsp;&nbsp;Time</li>
<span id="widgets">
<li id="New">Widgets</li>
<li id="Insert-QRcreate" title="Create QR" onclick="Insertqrcode()"><i class="fas fa-qrcode"></i>&nbsp;&nbsp;Create QR</li>
<li id="Insert-SocalMedia" title="Socal Media follower" onclick="InsertSocial()"><i class="fas fa-hashtag"></i>&nbsp;&nbsp;Socal Media Follower</li>
<!--<li id="Insert-Bday" title="B-day Picker" onclick=""><i class="fas fa-birthday-cake"></i>&nbsp;&nbsp;Birthday date Picker</li>-->
<!--<li id="Insert-Spoiler" title="Spoiler" onclick="insertSpoiler()" class="Upgrade"><i class="fas fa-eye-slash"></i>&nbsp;&nbsp;Spoiler</li>-->
<li id="Insert-T&C" title="Terms and Conditions" onclick="TaC()" class="Upgrade"><i class="fas fa-scroll"></i>&nbsp;&nbsp;Terms and Conditions</li>
<li id="Insert-Audio" title="Audio" onclick="InsertAudio()" class="Upgrade"><i class="far fa-file-audio"></i>&nbsp;&nbsp;Audio</li>
<li id="Insert-YouTube" title="YouTube" onclick="InsertYouTube()" class="Upgrade"><i class="fab fa-youtube"></i>&nbsp;&nbsp;YouTube</li>
<li id="Insert-Iframe-Embed" title="Iframe Embed" onclick="InsertIframeEmbeder()" class="Upgrade"><i class="far fa-window-restore"></i>&nbsp;&nbsp;Iframe Embeder</li>
</span>
<li id="New">Elements</li>
<li id="Insert-text" title="Short text" onclick="InsertsText()"><i class="fas fa-keyboard"></i>&nbsp;&nbsp;Short text</li>
<li id="Insert-FreeTxt" title="Long text" onclick="InsertTextArea()"><i class="fas fa-keyboard"></i>&nbsp;&nbsp;Long text</li>
<li id="Insert-Single" title="Single choices" onclick="InsertRadios()"><i class="far fa-dot-circle"></i>&nbsp;&nbsp;Single choices</li>
<li id="Insert-Mutiple" title="Mutiple choices" onclick="InsertCheckboxs()"><i class="fas fa-check-square"></i>&nbsp;&nbsp;Mutiple choices</li>
<li id="Insert-Dropdown" title="Dropdown" onclick="InsertDropdown()"><i class="fas fa-caret-square-down"></i>&nbsp;&nbsp;Dropdown</li>
<li id="Insert-Image" title="Image" onclick="InsertImages()"><i class="far fa-image"></i>&nbsp;&nbsp;Image</li>
<li id="Insert-Video" title="Video" onclick="InsertVideo()"><i class="fas fa-file-video"></i>&nbsp;&nbsp;Video</li>
<li id="Insert-File" title="File Uploader" onclick="IntertFileUploader()" class="Upgrade"><i class="fas fa-file"></i>&nbsp;&nbsp;File Uploader</li>
<li id="Insert-number" title="Number" onclick="InsertNumber()"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;&nbsp;Number</li>
<li id="Insert-submitbtn" title="Submit" onclick="InsertSubBtn()">Submit button</li>
<li id="Insert-Text-Editor" title="Free Style Text Editor" onclick="InsertTextEdit()" class="Upgrade"><i class="fas fa-edit"></i>&nbsp;&nbsp;Free style Text Editor</li>
<!--<li id="Insert-Captcha" title="Captcha" onclick="" class="Upgrade"><img src="https://img.icons8.com/ios/32/000000/captcha.png" style="background:white;width:16px;height:16px;"/>&nbsp;&nbsp;Captcha[v1.0]</li>-->
<li id="Insert-table" title="Table" onclick="InsertTable()"><i class="fas fa-table"></i>&nbsp;&nbsp;Table</li>
<li id="table-options" style="cursor:default !important; background-color:lightgray;color:black;border-bottom:1px solid skyblue !important;border-top:1px solid skyblue !important;">
<input type='text' id='tabid' placeholder="Enter Table ID"/>
<button type="button" onclick="addRow()" title="Adds a row to the table">Add Row</button>
<button type="button" onclick="removeRow()" title="Removes a row from bottom to top">Remove Row(bottom-top)</button>
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
<li id="New" name="eCommerce">eCommerce</li>
<li id="Insert-PayPal" title="PayPal" onclick="InsertPayPal()" class="Upgrade"><i class="fab fa-paypal"></i>&nbsp;&nbsp;PayPal</li>
<li id="Insert-Stripe" title="Stripe" onclick="InsertStripe()" class="Upgrade"><i class="fab fa-stripe"></i>&nbsp;&nbsp;Stripe</li>
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
<li id="New" name="Apps">Apps</li>
<li id="Insert-GoogleMaps" title="Google Maps" onclick="Gmaps()" class="Gmap apps-config"><i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;Google Maps
<li class="InfoApp" onclick="GMapInfo()">Information</li>
<li class="Unistall" onclick="GmapUnistall()">Unistall APP</li>
</li>



<script type="text/javascript">
//Info
function GMapInfo(){
alert("AppName: GoogleMaps\n\nCreator: Google co.\n\nDescription: Find local businesses, view maps and get driving directions in Google Maps. When you have eliminated the JavaScript , whatever remains must be an empty page. Enable JavaScript to see Google Maps.\n\nLanguages: C++ (back-end), JavaScript, XML, Ajax (UI)\n\nDependencies: N/A\n\nVersion: 3.41.0\n\nNeedsCofig: Yes");
}
//Unistall
function GmapUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top google map on your display sheet.");
if(confirms == true){
let find = document.querySelector(".Gmap-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>

<li id="Insert-RoboChat" title="RoboChat" onclick="RoboChat()" class="RoboChat apps-config"><i class="fas fa-comment"></i>&nbsp;&nbsp;RoboChat
<li class="InfoApp" onclick="RoboChatInfo()">Information</li>
<li class="Unistall" onclick="RoboChatUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function RoboChatInfo(){
alert("AppName: RoboChat\n\nCreator: SurveyBuilder \n\nDescription: Create and Edit your own 24/7 chat station w/ an AI\n\nDependencies: Boostrap Css(v4.5.0), Boostrap FontAwesome Icons(v4.7.0)\n\nLanguages: HTML, CSS, JS\n\nVersion: 16.0.0\n\nNeedsCofig: yes");
}
//Unistall
function RoboChatUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove The first Robochat on your display sheet.");
if(confirms == true){
let find = document.querySelector(".RoboChat-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>


<li id="Insert-eSign" title="eSignature" onclick="eSign()" class="eSign apps-config"><i class="fas fa-signature"></i>&nbsp;&nbsp;eSignature
<li class="InfoApp" onclick="eSignInfo()">Information</li>
<li class="Unistall" onclick="eSignUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function eSignInfo(){
alert("AppName: eSignature\n\nCreator: SurveyBuilder \n\nDescription: Get Users signature\n\nDependencies: jQuery 3.5.1+, Sign.js\n\nLanguages: JQuery, JavaScript, HTML, CSS\n\nVersion:16.0.0\n\nNeedsCofig: No");
}
//Unistall
function eSignUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top eSignature on your display sheet.");
if(confirms == true){
let find = document.querySelector(".eSign-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>

<li id="Insert-recorder" title="Recorder" onclick="rec()" class="rec apps-config"><i class="fas fa-video"></i>&nbsp;&nbsp;Recorder
<li class="InfoApp" onclick="recInfo()">Information</li>
<li class="Unistall" onclick="recUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function recInfo(){
alert("AppName: Recorder\n\nCreator: SurveyBuilder \n\nDescription: Capture audio and facecam video, make it downloadable\n\nDependencies: N/A\n\nLanguages: HTML, CSS, JavaScript\n\nVersion:16.0.0\n\nNeedsCofig: Yes");
}
//Unistall
function recUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top Recorder on your display sheet.");
if(confirms == true){
let find = document.querySelector(".rec-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>





<!--Add Apps below-->

</span>
<span id="cpanel-form">
<span id="cPanel">
<li id="New"><i class="fab fa-cpanel" style="font-size:52px;"></i></li>
</span>
<span id="CSS">
<li id="New">Custom CSS&nbsp;&nbsp;<i class="fab fa-css3"></i></li>
<textarea rows="10" cols="30" placeholder="Custom CSS" spellcheck="false"  autocorrect="off" id="cssFormat" onchange="CSSInsert()"></textarea>
</span>

<span id="Js">
<li id="New">Custom Javascript/Jquery&nbsp;&nbsp;<i class="fab fa-js"></i></li>
<textarea rows="10" cols="30" placeholder="Custom Javascript/Jquery" spellcheck="false"  autocorrect="off" id="jsFormat" onchange="JSInsert()"></textarea>
</span>
<span id="addons">
<li id="New">Custom Addon's for Css/JS</li>
<button type="button" onclick="AddonInsert()">Add Addon</button>
</span>
<span id="sql">
<li id="New">Database(SQL)&nbsp;&nbsp;<i class="fas fa-database"></i></li>
<!--<a href="./db/AddDatabase.php">-->
<button type="button" onclick="CreateData()">Add Database</button>
<!--<a href="./db/EditDatabase.php">-->
<button type="button" onclick="EditData()">Edit Database</button>
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
<li id="New">Edit Form&nbsp;&nbsp;<i class="fas fa-edit"></i></li>

<li id="method">
<select onchange="Formset()" id="formmethod"><optgroup label="Method"><option value="POST">POST</option><option value="GET">GET</option></optgroup></select>
<input type="url" id="Formaction" onchange="ActionForm()" placeholder="Enter Action(URL/File)"/>
<input type="text" id="Formsubmit" onchange="SubmitForm()" placeholder="Enter Submit(Function)"/>

</li>
<span id="Plugin">
<li id="New">Insert Plugin&nbsp;&nbsp;<i class="fas fa-puzzle-piece"></i></li>
<br/>
<form method='post'>
<input type="file" id="PluginFile" accept=".html" onchange="InsertPlugin(event)" style="outline:none;"/>
</form>
</span>

</span>
<!--Config-->
<span id="Config">
<li id="New">Configuration&nbsp;&nbsp;<i class="fas fa-wrench"></i></li>
<li id="Config-settings">
<form method="post" action="" class="Config cofig-settings config-text" id="AppForm">
<li>To display the code to config type in the format. Format: /app {appname}</li>
<br/>
<br/>
<textarea id="Textformat" name="configbox" required="true" placeholder="Config Files Here" onchange="testCmd()" style="margin: 0px; color: black; width: 185px; height: 91px;"></textarea>
<br/>
<button type="button" onclick="javascript:window.location.reload();">Don't see any chances click here</button>
<br/>
<br/>
<select id="token" required="true" onchange="ActionsT()">
<option value="">--Select App--</option>
<option value="GoogleMaps">Google Maps</option>
<option value="RoboChat">RoboChat</option>
<option value="Recorder">Recorder</option>
</select>
<br/>
<br/>
<input type="submit" value="Save"/>
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
<li id="New">Console Log &nbsp;&nbsp;<button type="submit" title="Share Log" style="outline:none;border:none;font-size:15px;"><i class="fas fa-share-square"></i></button></li>
<br/>
<style>
.search, .import, .import-code{
	width:120px;
}
</style>
<input type="search" class="search search-word serach-input" placeholder="Search"/><button type="button" class="search-btn" onclick="SearchValue()">Search <i class="fas fa-search"></i></button>
<br/>
<br/>
<span style="color:white;">Enter Console ID: ex(PC7VbBpG)</span><input type="textarea" class="import import-code" placeholder="Enter Console ID"/><button onclick="ImportConsole()" type="button">Import <i class="fas fa-upload"></i></button>

<br/>
<br/>
<span style="color:white;">Enter Console (<a href="https://github.com/" title="GitHub" target="_blank" style="cursor:pointer;background-color:transparent;color:white;"><i class="fab fa-github"></i></a> GitHub)</span><input type="textarea" class="import-code github-import github-import-code" placeholder="Enter GitHub Raw"/><button onclick="ImportConsoleRaw()" type="button">Import <i class="fas fa-upload"></i></button>
<br/>
<br/>
<button type="button" class="import_console_btn" onclick="importTxtFile()"><i class="fas fa-file-alt"></i> Upload TXT file</button>
<input type="file" class="import_console_file_text" accept=".txt"/>
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
$(function(){
	$('.import_console_file_text').change(function(event){
		let temppath = URL.createObjectURL(event.target.files[0]);
		
		//getFile
		let fp = $('.import_console_file_text');
		let lg = fp[0].files.length;
		var items = fp[0].files;
		
		//testFile
		if(lg>0){
			for(let i=0;i<lg;i++){
				 var fileName = items[i].type;
			}
		}
		if(fileName !== "text/plain"){
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
<textarea placeholder="Console" required="true" name="Console" spellcheck="false" style="margin: 0px; width: 203px; height: 225px;" onchange="EditFormFromConsole()" class="lined" id="Console"></textarea>

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
	let FullURL = "/SurveyBuilder/Console/Console-" + ID + ".txt";
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
<li id="New">Command Prompt&nbsp;&nbsp;<i class="fas fa-terminal"></i></li>

<br/>
<textarea placeholder="Command" required="true" name="CmdPrompt" spellcheck="false" style="margin: 0px; width: 203px; height: 225px;" onchange="EditCmdPrompt()" class="lined" id="cmdPrompt"></textarea>

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
		alert("clear command - clears the object or the whole form: format: clear.<id|all>" + 
		"\n\nclsmsg command - clears cmd promt: format: clsmsg.<no|auto|yes>" +
		"\n\nhelp command - gives you the list of commands: format: help" +
		"\n\ntrigger command - triggers a function/option: format: trigger.<click|focus>.<element>[.<subelement>(optional)]" +
		"\n\nAutohelp command - fills in the command in the command prompt: format: autohelp.<command>"+
		"\n\nHidden command - hides a element. This is in a UI: format: hidden.<ui|UI>"+
		"\n\ncmd command - styles the command prompt: format: cmd.<style>"
		
		
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
		getMsg.value = "clear.<id|all>";
	}
	if(getMsg.value.match("autohelp.clsmsg")){
		getMsg.value = "clsmsg.<no|auto|yes>";
	}
	if(getMsg.value.match("autohelp.help")){
		getMsg.value = "cmd.<help|?>";
	}
	if(getMsg.value.match("autohelp.trigger")){
		getMsg.value = "trigger.<click|focus>.<element>[.<subelement>(optional)]";
	}
	if(getMsg.value.match("autohelp.hidden")){
		getMsg.value = "hidden.<ui|UI>";
	}
	if(getMsg.value.match("autohelp.cmd")){
		getMsg.value = "cmd.<style>";
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
		let bgcolor = prompt("Enter a color or a hexdec");
		getMsg.style.backgroundColor = bgcolor;
	}
	
	
	if(getMsg.value.match("cmd.color")){
		let color = prompt("Enter a color or a hexdec");
		getMsg.style.color = color;
	}

	
	if(getMsg.value.match("cmd.fontSize")){
		let size = prompt("Enter a font size(Will be measured in pixals[px])");
		
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
<li id="New">Remove Element&nbsp;&nbsp;<i class="fas fa-trash"></i></li>
<li><input type="text" id="DelID" placeholder="Enter ID"/></li>
<li class="Unistall" onclick="RemoveElement()">Delete Element</li>
<script type="text/javascript">
function RemoveElement(){
let x = document.getElementById("DelID");

if(x.value == ""){
alert("You must enter an ID");
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
<li id="New">Folder/File Map&nbsp;&nbsp;<i class="far fa-file-archive"></i></li>
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
<details class="Folder-Location-Map">
<summary><i class="fas fa-folder"></i> htdocs</summary>
<details>
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
<summary><i class="fas fa-folder"></i> bot</summary>
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
<summary><i class="fas fa-folder"></i> Builder</summary>
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
<summary><i class="fas fa-folder"></i> Apps</summary>
<details>
<summary><i class="fas fa-folder"></i> appdata</summary>
<details>
<summary><i class="fas fa-folder"></i> eSign</summary>
<details>
<summary><i class="fas fa-folder"></i> assets</summary>
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
<summary><i class="fas fa-folder"></i> assets</summary>
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
<summary><i class="fas fa-folder"></i> Elements</summary>
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
<summary><i class="fas fa-folder"></i> Music</summary>
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
<summary><i class="fas fa-folder"></i> QR_Code</summary>
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
<summary><i class="fas fa-folder"></i> Templetes</summary>
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
<summary><i class="fas fa-folder"></i> users</summary>
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
<summary><i class="fas fa-folder"></i> Console</summary>
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
<summary><i class="fas fa-folder"></i> Credits</summary>
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
<summary><i class="fas fa-folder"></i> errors</summary>
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
<summary><i class="fas fa-folder"></i> images</summary>
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
<li id="Scroll-bottom" onclick="scrollUp()" class="scroll scroll-to-top">Scroll to Top&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-up"></i></li>
<script>
function scrollUp(){
var elmnt = document.querySelector(".exit");
elmnt.scrollIntoView();
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
<h1>Internet Check</h1>
<script>
setTimeout(checkInternetConnection, 0);
function checkInternetConnection(){
let InternetStatus = window.navigator.onLine;
if(InternetStatus){
	let codeWifiConnected = "<i class='fas fa-wifi'></i>";
	document.querySelector(".Internet-Status").innerHTML = codeWifiConnected + " Connected";
	document.querySelector(".Internet-Status").style.fontSize = "32px";
	document.querySelector(".Internet-Status").style.color = "green";
	document.querySelector(".Internet-Status").style.textAlign = "center";
	   document.querySelector("#Sidebar").hidden = false;
}else{
	let codeWifiDisconnected = "<i class='fad fa-wifi-slash'></i>";
	document.querySelector(".Internet-Status").innerHTML = codeWifiDisconnected + " Disconnected";
	document.querySelector(".Internet-Status").style.fontSize = "32px";
	document.querySelector(".Internet-Status").style.color = "red";
	document.querySelector(".Internet-Status").style.textAlign = "center";
    document.querySelector("#Sidebar").hidden = true;
	
}
setTimeout(checkInternetConnection, 0);
}
</script>
<h3 class="Internet-Status"></h3>
<br/>
<hr/>
<br/>
<h1>Editor's tool</h1>
<br/>
<hr/>
<br/>
<div id="Style-editor-container">
<div id="Style"><button title="Style" onclick="OpenStyle()" id="Style-btn">Style</div>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div id="Style-clipboard" hidden="true">
<div id="BgColor"><span style="color:lightgray;font-weight:bold;">Background Color:</span>  <input type="color" title="background Color" oninput="ChageColor()" id="color" value="#9acd32"  list="presetColors"/></div>
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
<div id="Titlecolor"><span style="color:lightgray;font-weight:bold;">Title Color: <input type="color" title="Title Color" oninput="ChageTColor()" id="Tcolor"  list="presetColors"/></div>
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
<div id="properties"><button title="Properties" onclick="prop()" id="Properties-btn">Properties</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<div id="PreCon" hidden="true">
<div id="Slider-Con">
<div id="Slider-text">Preview: </div>
<label class="switch">
<input type="checkbox" id="CheckPre" oninput="Preview()"> 
<span class="slider round"></span></label> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button onclick="Publish()" id="Publish">Publish</button>
</div>  
</div>
<script>
function Publish(){
	let a = document.getElementById("Sidebar");
	let b = document.getElementById("Orgtitle");
	let c = document.getElementById("titleSave");
	let d = document.getElementById("wcc");
	let e = document.getElementById("Editor-Control-Form");
	let f = document.getElementById("titleSave-btn");
	let g = document.getElementById("Insert-Object");
	a.hidden = true;
	b.hidden = true;
	c.hidden = true;
	d.hidden = true;
	e.hidden = true;
	f.hidden = true;
	g.contentEditable = false;
	let links = document.createElement("A");
	links.href = "SurveyBuilder.php";
	links.setAttribute("download", "YourPage.php");
	links.id = "DownloadLinkNow";
	document.getElementById("links-doc").appendChild(links);
	


}

</script>
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
<div id="contact-btn"><a href="mailto:mcmastergames2020@gmail.com"><button id="contact-btn" title="Contact">Contact</button></a></div>
<br>
<br>
<br>
<div id="contact" hidden="true">Contact: 
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
<button id="Save" onclick="Save()" title="Save Data">Save</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button id="Load" onclick="Load()" title="Load Data">Load</button>
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
<button id="Data" onclick="DeleteData()" title="Clear Data">Clear Data</button>
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
<h1>Templeate's</h1>
<br/>
<button id="temp" onclick="setupBlank()" title="Blank Templeate">Blank Templeate</button>
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
<button id="temp" onclick="setupMedTemp()" title="Medical Templeate">Medical Templeate</button>
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
<button id="temp" onclick="setupPoliceIncidentReportTemp()" title="Police Incident Report Template">Police Incident Report</button>
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
<h1>Web Config <i class="fas fa-tools"></i></h1>

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
<input type="checkbox" class="checkbox-input check12" checked="" onclick="setcPanel()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">maxTitle:</span>
<div class="NumTitle">
<input type="number" placeholder="Enter a number from 10-40" title="Number must be more then 10 and less than 40" min="10" max="40" onchange="setMaxTitle()" class="maxTitleInput"/>
</div>
<br/>
<span class="label_config">username:</span>
<div class="user username-con">
<input type="text" placeholder="Enter Username" style="width:320px;font-size:25px;" class="username-input" oninput="setUsername()"/>
</div>
<br/>
<span class="label_config">banIp:</span>
<div class="Warning-input">
<i class="fas fa-exclamation-circle"></i> Sorry, this configuration must be manually edited go to ./Config/Config.js
</div>
<br/>
<span class="label_config">Enable_Config_File:</span>
<div class="Warning-input">
<i class="fas fa-exclamation-circle"></i> Sorry, this configuration must be manually edited go to ./Config/Config.js
</div>
<br/>
<span class="label_config">Allow_Database:</span>
<div class="database-input">
<select class="dbselect" oninput="setDb()">
<option value="false">false</option>
<option value="mySQL" selected="selected">mySQL</option>
</select>
</div>
<br/>
<span class="label_config">redirFormLink:</span>
<div class="Warning-input">
<i class="fas fa-exclamation-circle"></i> Sorry, this configuration must be manually edited go to ./Config/Config.js
</div>
<br/>
<span class="label_config">Allow_ad_blocker:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input ad-checkbox check13" onclick="setAdBlocker()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<!--<br/>
<div id="google_translate_element"></div>-->
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

<footer id="SurveyMakerBanner" role="banner"><div id="Banner"><span id="Icon"><img src="favicon.ico" width="50" height="50" title="SurveyMaker" alt="SurveyMaker Icon"/></span><span id="Text1">Join SurveyBuilder TODAY! <span id="Text2">Join Our <a id="FourmLink" title="Fourm" href="https://surveybuilder.boards.net/" target="_blank">Fourm</a></span><span id="Text3">&copy;SurveyBuilder</span></div></footer>
<div id="copyright-print">&copy; SurveyBuilder</div>
</div>

<!--<div class="langDataSec"></div>-->
<!--<script>
function googleTranslateElementInit(){
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');	
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
<script src="./Config/Config.js" type="text/javascript"></script>


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
function setcPanel(){
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