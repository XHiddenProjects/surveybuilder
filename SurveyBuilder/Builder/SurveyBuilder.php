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
<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.12/push.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="Packages/pkgstyle.min.css" rel="stylesheet"/>
<script src="SurveyBuilder.js" type="text/javascript"></script>
<script src="InsertItems.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/46bb4793e2.js" crossorigin="anonymous"></script>
<script src="serviceworker.js" type="text/javascript"></script>
 <!--<link href="./app.webmanifest" rel="manifest" crossorigin="use-credentials"/>-->
<noscript><img src="/SurveyBuilder/images/icon/favicon.png" width="20" height="20"/>Sorry JavaScript is off, make sure it is on due to a lot of functions needing to be triggered</noscript>
<!--Templeates-->
<script src="./templetes/Medical_temp.js"></script>
<script src="./templetes/blank_temp.js"></script>
<script src="./templetes/police_incident_report_temp.js"></script>

<!--end Templeate script-->

<link rel="stylesheet" href="https://proicons.netlify.app/css/icons.min.css"/>
<script>
setTimeout(function(){
	if(localStorage.getItem("Notify") === "" || localStorage.length === ""){
	localStorage.setItem("Notify", "true");	
	}
	
}, 0);
	

</script>

<script>
if(sessionStorage.length == "" || sessionStorage.length == null){
		sessionStorage.setItem("loggedIn", "false");
		 sessionStorage.setItem("accept", "0");
	}
setTimeout(setUserScript, 1000);
function setUserScript(){
	
const xhr = new XMLHttpRequest();

xhr.onload = function(){
	
	if(this.status === 200){
		try{
	
			const resObj = JSON.parse(this.responseText);
		
			$.getJSON("https://raw.githubusercontent.com/surveybuilderteams/surveybuilder/master/package.json", function(d){
	
		 //console.log(d.version);
		 
		 if(resObj.versions !== d.version && requiredVersion === true){
			 console.log(resObj.versions + "[Outdated/Overdated]");
			 alert("Your thing needs an update, click to download update");
			  window.open("https://github.com/surveybuilderteams/surveybuilder/archive/master.zip", "_blank");
			 document.querySelector("html").innerHTML = "";
			 
			 return false;
		 }
	     if(localStorage.getItem("Notify") === "true" || localStorage.getItem("Notify") === ""){
		 Push.create("SurveyBuilder",{
			body: "Version: " + d.version + "\nSee More Info here",
            icon: "/SurveyBuilder/images/icon/favicon.png",
            link: "https://github.com/surveybuilderteams/surveybuilder/releases",
            requireInteraction: true,
            onClick:function(){
				window.open("https://github.com/surveybuilderteams/surveybuilder/releases", "_blank");
			}			
		 });
		 
		 } 

         });

			//login
			
			if(sessionStorage.getItem("loggedIn") === "false"){

			let UserNameLogin = prompt("Enter Username", "");
			let PasswordLogin = prompt("Enter Password", "");
			if(UserNameLogin == "" || PasswordLogin == ""){
				alert("You must enter Username or Password");
				setTimeout(setUserScript, 0);
			}
			if(UserNameLogin !== resObj.user.name || PasswordLogin !== resObj.user.Password){
				alert("You must enter correct password and username");
				setTimeout(setUserScript, 0);
			}else{
				if(resObj.SecondAuth.boolean == false){
					sessionStorage.setItem("loggedIn", "true");
				}
				if(resObj.SecondAuth.boolean == true){
					sessionStorage.setItem("loggedIn", "false");
				}
			}
			
			
			if(resObj.SecondAuth.boolean == true){
				
					
				let randomAuth = Math.floor(Math.random() * 8);
				
				let Auth = resObj.SecondAuth.SecPsw[randomAuth];
				
				$.getJSON("https://api.ipify.org?format=json", 
                                          function(data) { 
  let setArray = resObj.SecondAuth.byPassIP;
  //alert(setArray);
            for(i=0;i<setArray.length;i++){
				
				if(data.ip === setArray[i]){
					let alertAuth = alert(Auth);
					
					if(alertAuth === true){
						 sessionStorage.setItem("accept", "1");
					}
					
					if(sessionStorage.getItem("accept") === "1"){
						
							let SecondAuth = prompt("Enter SecondAuth");
				if(SecondAuth !== Auth){
					alert("Sorry, Invalid auth");
					setTimeout(setUserScript, 0);
				}else{
					sessionStorage.setItem("loggedIn", "true");
					return false;
				}
				
				
				
					}
					
				}
				
				}
					if(sessionStorage.getItem("accept") === "0"){
							let SecondAuth = prompt("Enter SecondAuth");
				if(SecondAuth !== Auth){
					alert("Sorry, Invalid auth");
					setTimeout(setUserScript, 0);
				}else{
					sessionStorage.setItem("loggedIn", "true");
					return false;
				}
					}
				
				
				});
					
				
			
			
			
            
        } 
				
				
				
			}
			
			
			if(sessionStorage.getItem("loggedIn") === "true"){
				//do nothing, let it run.
			}
				
		}catch (e) {
			console.warn("There is an error in JSON. Could not prase");
		}
		
	}else{
		console.warn("Did not receive 200 OK from response");
	}
	



};
xhr.open('get', './libs/System.json')
xhr.send();
}
</script>




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

<?php

?>
<style type="text/css" rel="stylesheet" id="customCSS">

</style>
<div class="animations-list"></div>
<div id="custom-scripts"></div>
<div id="custom-addons"></div>

<!--Packages css-->
<div class='pkgcss'></div>
<!--Package js-->
<div class='pkgjs'></div>
<!--<div id="custom-alertbox" style="display:none;">
<div></div>
</div>-->
<!--<div id="custom-API"></div>-->
<!--onkeydown="Key(event)" in body allow shortcut-->
<div id="redirect-link" class="redirect-link redirect" hidden="true">
<h1 style="font-size:52px; color:black;">Redirecting Form link...</h1>
</div>

<div id="Body-Container">
<style>
.Loading_data_bar, .Saving_data_bar, .Install_bar, .uninstall_bar{
	position:absolute;
	border:1px solid black;
	top:50%;
	left:50%;
	transform:translate(-50%, -50%);
	width:520px;
	height:320px;
	background:cyan;
	font-size:42px;
	text-align:center;
	z-index:3;
}
.Loading_data_progress progress, .Saving_data_progress progress, install_data_progress progress, .uninstall_data_progress progress{
	position:absolute;
	left:0;
	width:100%;
	bottom:30%;
}
.Loading_data_progress .Loading_data_value, .Saving_data_progress .Saving_data_value, .install_data_progress .install_data_value, .uninstall_data_progress .uninstall_data_value{
	position:absolute;
	bottom:0;
	left:45%;
}
.Loading_data_progress progress::-moz-progress-bar, .Saving_data_progress progress::-moz-progress-bar, install_data_progress progress::-moz-progress-bar,uninstall_data_progress progress::-moz-progress-bar{
	background:green;
}
.Loading_data_progress progress::-webkit-progress-bar, .Saving_data_progress progress::-webkit-progress-bar, install_data_progress progress::-moz-progress-bar, uninstall_data_progress progress::-moz-progress-bar{
	background:green;
}
</style>
	

	<div class="Loading_data_bar" hidden="true">
	<div class="Loading_data_title">Loading Saved Attributes</div>
	<div class="Loading_data_progress">
	<progress class="progress_load" value="0" max="100"></progress>
	<div class="Loading_data_value">0%</div>
	</div>
	</div>

<div class="Saving_data_bar" hidden="true">
	<div class="Saving_data_title">Saving Attributes</div>
	<div class="Saving_data_progress">
	<progress class="progress_save" value="0" max="100"></progress>
	<div class="Saving_data_value">0%</div>
	</div>
	</div>
	
<div class="Install_bar" hidden="true">
	<div class="install_data_title">Installing Packages</div>
	<div class="install_data_progress">
	<progress class="progress_install" value="0" max="100"></progress>
	<div class="install_data_value">0%</div>
	</div>
	</div>
	
	<div class="uninstall_bar" hidden="true">
	<div class="uninstall_data_title">Uninstalling Packages</div>
	<div class="uninstall_data_progress">
	<progress class="progress_uninstall" value="0" max="100"></progress>
	<div class="uninstall_data_value">0%</div>
	</div>
	</div>
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
<error id="Error" role="tooltip" class="error" aria-label="error" hidden="true">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry you need a title before saving it or its to long or username is blank</error>
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

<!--package catelog-->

<div class="catelog catelog-container" hidden="">
<div class="cate-header">Select a Package</div>
<div class="cate-close" onclick="hideManager()"><i class="far fa-times-circle" aria-hidden="true" title="close package manager"></i></div>
<!--.pkg are seperators of packages-->
<div class="pkg">
<div class="pkg-icon"><img src='/SurveyBuilder/images/icon/favicon.png'/></div>
<div class="pkg-heading">testpackage</div>
<div class="pkg-description">This is a test package</div>
<div class="pkg-rate">
<input type='checkbox' name='star' id='star5' disabled=""/><label for="star1"></label>
<input type='checkbox' name='star' id='star4' disabled=""/><label for="star2"></label>
<input type='checkbox' name='star' id='star3' disabled=""/><label for="star3"></label>
<input type='checkbox' name='star' id='star2' disabled=""/><label for="star4"></label>
<input type='checkbox' name='star' id='star1' checked="" disabled=""/><label for="star5"></label>
</div>
<br/>
<div class="pkg-install" onclick="installtestpackage()">Install</div>
<br/>
<div class="pkg-uninstall" onclick="unistalltestpackage()">Uninstall</div>
<br/>
<div class="pkg-setup">Setup</div>
<br/>
<a href="https://github.com/surveybuilderteams/packages/blob/masters/libs/testpackage/info.md" target="_blank" class="pkg-info-link"><div class="pkg-info">Info</div></a>
</div>
<script>
//pkg manager
function hideManager(){
	document.querySelector(".catelog").hidden = true;
}

</script>
<script src="./Packages/pkgjs.js"></script>
</div>
 <!--Sidebar-->
              

<div id="Sidebar">
<div class="toggle-sidebar-btn" role="sidebar-button"  onclick="togglesidebar()" title="Add Elements" style="cursor:pointer;">
<span class="line1"></span>                                                                                                                                       
<span class="line2"></span>
<span class="line3"></span>
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
elmnt.scrollIntoView({
	behavior: 'smooth',
    block: 'start'
});
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
<!--Packages-->
<span id="pkgs">
<style>
.pkg-show p{
	margin-top:5px;
	margin-bottom:5px;
	color:white;
}
</style>
<li id="New" name="pkg">Packages</li>
<span class="pkg-show">
<?php
if(is_dir("./Packages/libs/testpackage/")){
	echo "<p><i class='fas fa-file-archive'></i> testpackage</p>"; 
}

?>
</span>
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

<li id="Insert-Img3D" title="3D Image Module" onclick="ThreeDIM()" class="3DIM apps-config"><i class="fas fa-cube"></i>&nbsp;&nbsp;3D Image module
<li class="InfoApp" onclick="ThreeDIMInfo()">Information</li>
<li class="Unistall" onclick="ThreeDIMUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function ThreeDIMInfo(){
alert("AppName: 3D Image Module\n\nCreator: SurveyBuilder \n\nDescription: Upload an PNG Image to show your image a 3D experince\n\nDependencies: tilt.js\n\nLanguages: HTML, CSS, JavaScript, JQuery\n\nVersion:16.0.0\n\nNeedsCofig: No");
}
//Unistall
function ThreeDIMUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top 3D Image Module on your display sheet.");
if(confirms == true){
let find = document.querySelector(".Threedim-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>

<li id="Insert-txtEditor" title="Text Editor" onclick="txtEditor()" class="txtEdit apps-config"><i class="fas fa-pen-square"></i>&nbsp;&nbsp;Text Editor
<li class="InfoApp" onclick="txtEditorInfo()">Information</li>
<li class="Unistall" onclick="txtEditorUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function txtEditorInfo(){
alert("AppName: Text Editor\n\nCreator: SurveyBuilder \n\nDescription: Use a free Build text editor and create your own files\n\nDependencies: FileSave.js, lined-textarea.css, lined-textarea.js\n\nLanguages: HTML, CSS, JavaScript, JQuery\n\nVersion:16.0.0\n\nNeedsCofig: No");
}
//Unistall
function txtEditorUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top Text Editor on your display sheet.");
if(confirms == true){
let find = document.querySelector(".TxtEditor-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>

<li id="Insert-markdown" title="Markdown Editor" onclick="mdEditor()" class="mdEdit apps-config"><i class="fab fa-markdown"></i>&nbsp;&nbsp;Markdown Editor
<li class="InfoApp" onclick="mdEditorInfo()">Information</li>
<li class="Unistall" onclick="mdEditorUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function mdEditorInfo(){
alert("AppName: Markdown Editor\n\nCreator: SurveyBuilder \n\nDescription: Build and Program your own Markdown code and go live\n\nDependencies: lined-textarea.css, lined-textarea.js, marked.min.js, jquery.textarea-markdown-editor.js\n\nLanguages: HTML, CSS, JavaScript, JQuery\n\nVersion:16.0.0\n\nNeedsCofig: No");
}
//Unistall
function mdEditorUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top Text Editor on your display sheet.");
if(confirms == true){
let find = document.querySelector(".mdEditor-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>


<li id="Insert-barChart" title="Bar Chart" onclick="barChart()" class="barChart apps-config"><i class="fas fa-chart-bar"></i>&nbsp;&nbsp;Bar Chart
<li class="InfoApp" onclick="barChartInfo()">Information</li>
<li class="Unistall" onclick="barChartUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function barChartInfo(){
alert("AppName: Bar Chart\n\nCreator: AnyChart JS\n\nDescription: A bar chart is a chart that visualizes data as a set of rectangular bars, their lengths being proportional to the values they represent. The horizontal axis shows the values, and the vertical axis shows the categories they belong to. So, the bar chart is a vertical version of the column chart. In multiple-series bar charts, values are grouped by categories.\n\nDependencies: N/A\n\nLanguages: HTML, CSS, JavaScript, JSON\n\nVersion: 8.9.0\n\nNeedsCofig: Yes");
}
//Unistall
function barChartUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top Bar Chart on your display sheet.");
if(confirms == true){
let find = document.querySelector(".barChart-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}
}
</script>

<li id="Insert-scatterPlot" title="Scatter Plot Chart" onclick="scattChart()" class="scatterPlot apps-config"><i class="fas fa-chart-scatter"></i>&nbsp;&nbsp;Scatter Plot Chart
<li class="InfoApp" onclick="scattChartInfo()">Information</li>
<li class="Unistall" onclick="scattChartUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function scattChartInfo(){
alert("AppName: Scatter Plot Chart\n\nCreator: AnyChart JS\n\nDescription: AnyChart allows you to create scatter charts by using a special scatter chart constructor. It processes data points as-is: sets of arguments from different series don't influence each other, points are shown in the exact order they are set, and lines can be vertical and cross themselves. While the Cartesian constructor distributes points along the X-axis at equal intervals (categories), the scatter constructor distributes points according to their values.\n\nDependencies: N/A\n\nLanguages: HTML, CSS, JavaScript, JSON\n\nVersion: 8.9.0\n\nNeedsCofig: Yes");
}
//Unistall
function scattChartUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top Scatter Plot Chart on your display sheet.");
if(confirms == true){
let find = document.querySelector(".scattChart-app");
document.getElementById("Insert-Object").removeChild(find);
}else{
return false;
}

}
</script>

<li id="Insert-drawing" title="Drawing" onclick="Drawing()" class="drawing apps-config"><i class="fas fa-paint-roller"></i>&nbsp;&nbsp;Drawing
<li class="InfoApp" onclick="drawingInfo()">Information</li>
<li class="Unistall" onclick="drawingUnistall()">Unistall APP</li>
</li>
<script type="text/javascript">
//Info
function drawingInfo(){
alert("AppName: Drawing\n\nCreator: SurveyBuilder\n\nDescription: Allows you to draw anything using SVG program the drawing\n\nDependencies: N/A\n\nLanguages: HTML, CSS, JavaScript\n\nVersion: 16.0.0\n\nNeedsCofig: No");
}
//Unistall
function drawingUnistall(){
let confirms = confirm("Are you sure you want to unistall this app?\nWarning it will remove the top Drawing on your display sheet.");
if(confirms == true){
let find = document.querySelector(".drawing-app");
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
<span id="Notify">
<li id="New">Notifications&nbsp;&nbsp;<i id="setNotifyBell" class="fas fa-bell" title="Enable"></i></li>
<button class="EnableNotify">Enable Notifications <i class="fas fa-bell"></i></button><br/>
<button class="DisableNotify">Disable Notifications <i class="fas fa-bell-slash"></i></button>
<script>
setTimeout(function(){
	if(localStorage.getItem("Notify") === "true"){
		document.querySelector("#setNotifyBell").className = "fas fa-bell";
		document.querySelector("#setNotifyBell").title = "Enabled";
	}
	if(localStorage.getItem("Notify") === "false"){
		document.querySelector("#setNotifyBell").className = "fas fa-bell-slash";
		document.querySelector("#setNotifyBell").title = "Disabled";
	}
}, 0);
$(".EnableNotify").click(function(){
	localStorage.setItem("Notify", "true");
	document.querySelector("#setNotifyBell").className = "fas fa-bell";
	document.querySelector("#setNotifyBell").title = "Enabled";
	alert("Notifications are enabled");
});
$(".DisableNotify").click(function(){
	localStorage.setItem("Notify", "false");
	document.querySelector("#setNotifyBell").className = "fas fa-bell-slash";
	document.querySelector("#setNotifyBell").title = "Disabled";
	alert("Notifications are disabled(You will receive loading, saved, and clear data notifactions tho.)");
});
</script>
</span>
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
		
		if(pluginType !== "text/html"){
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
<option value="BarChart">Bar Chart</option>
<option value="ScatterChart">Scatter Plot Chart</option>
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

if(x.value == "/app Bar_Chart"){
$.get("./Apps/appdata/BarChart.html", function(data){

x.value = data;
});
}

if(x.value == "/app ScatterPlot_Chart"){
$.get("./Apps/appdata/ScatterPlot.html", function(data){

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
y.action = "./Apps/appdata/BarChart.php";
}
if(x.selectedIndex == 5){
y.action = "./Apps/appdata/ScatterPlot.php";
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
<span style="color:white;">Enter Console ID: ex(PC7VbBpG)</span><input type="textarea" class="import import-code" placeholder="Enter Console ID"/><button onclick="ImportConsole()" type="button">Import <i class="fas fa-file-import"></i></button>

<br/>
<br/>
<span style="color:white;">Enter Console (<a href="https://github.com/" title="GitHub" target="_blank" style="cursor:pointer;background-color:transparent;color:white;"><i class="fab fa-github"></i></a> GitHub)</span><input type="textarea" class="import-code github-import github-import-code" placeholder="Enter GitHub Raw"/><button onclick="ImportConsoleRaw()" type="button">Import <i class="fas fa-file-import"></i></button>
<br/>
<br/>
<button type="button" class="import_console_btn"><i class="fas fa-file-alt"></i> Upload .sbconsole file</button>
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
//Custom HTML tag
setInterval(function(){
	x = document.querySelectorAll("sbcon");
	for (i = 0; i < x.length; i++) {
		let dataType = x[i].getAttribute("data-type");
		if(dataType === "container" || dataType === "con"){
			x[i].setAttribute("class", "container");
		}
	}
	
}, 0); 




</script>

<script>
setInterval(function(){
	x = document.querySelectorAll("sbconsole");
for (i = 0; i < x.length; i++) {
	
	//Not Supported Attributes
	
	if(x[i].getAttribute("id") === "" || x[i].getAttribute("id") !== ""){
		x[i].removeAttribute("id");
	}
	if(x[i].getAttribute("class") === "" || x[i].getAttribute("class") !== ""){
		x[i].removeAttribute("class");
	}
	if(x[i].getAttribute("style") === "" || x[i].getAttribute("style") !== ""){
		x[i].removeAttribute("style");
	}
	if(x[i].innerHTML !== ""){
		x[i].innerHTML = "";
	}
	
	//Supported Attributes
	if(x[i].getAttribute("sandbox") === "true" || x[i].getAttribute("sandbox") === ""){
		
		return false;
	}
	
	if(x[i].getAttribute("export") === "file"){
		
	let FileData = "/SurveyBuilder/Console/Console-" + x[i].getAttribute("value") + ".sbconsole";
		$.get(FileData, function(data){
			document.querySelector("#Console").value = data;
			document.getElementById("Insert-Object").innerHTML = data;
		});
			
			
		}
		
		if(x[i].getAttribute("export") === "url"){
			let FileData =  x[i].getAttribute("value");
		$.get(FileData, function(data){
			document.querySelector("#Console").value = data;
			document.getElementById("Insert-Object").innerHTML = data;
		});
	
}
	
}
}, 0);



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
<!--placemark-->

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
		"\n\nAutofill command - fills in the command in the command prompt: format: autohelp.<command>"+
		"\n\nHidden command - hides a element. This is in a UI: format: hidden.<ui|UI>"+
		"\n\ncmd command - styles the command prompt: format: cmd.<style>" +
		"\n\npkg command - installs and extracts packages: format: pkg.install(i).packagename"
		
		);
	}
	/*packages*/
	
	//opens catalog 
	if(getMsg.value.match("pkg.open")){
		document.querySelector(".catelog").hidden = false;
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
	
	if(getMsg.value.match("autofill.clear")){
		getMsg.value = "clear.<id|all>";
	}
	if(getMsg.value.match("autofill.clsmsg")){
		getMsg.value = "clsmsg.<no|auto|yes>";
	}
	if(getMsg.value.match("autofill.help")){
		getMsg.value = "cmd.<help|?>";
	}
	if(getMsg.value.match("autofill.trigger")){
		getMsg.value = "trigger.<click|focus>.<element>[.<subelement>(optional)]";
	}
	if(getMsg.value.match("autofill.hidden")){
		getMsg.value = "hidden.<ui|UI>";
	}
	if(getMsg.value.match("autofill.cmd")){
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
			let ID = prompt("Enter element's ID");
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
<button onclick="ExpandAll()">Expand all</button>&nbsp;&nbsp;<button onclick="DexpandAll()">Dexpand all</button>
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
<summary><i class="fas fa-folder"></i> libs</summary>
<?php
$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/libs/";
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
	  // document.querySelector("#Sidebar").hidden = false;
}else{
	let codeWifiDisconnected = "<i class='fas fa-wifi-slash'></i>";
	document.querySelector(".Internet-Status").innerHTML = codeWifiDisconnected + " Disconnected";
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
<div id="contact-btn"><a href="mailto:surveybuildersbot@gmail.com"><button id="contact-btn" title="Contact">Contact</button></a></div>
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
<div id="Themes-con">
<br/>
<h1>Themes</h1>
<br/>
<style>
#themes{
	overflow-y:auto;
	overflow-x:hidden;
	height:200px;
}
#Themes-con{
	overflow:hidden;
}
</style>
<select id="themes" name="themes">
<option value="default-theme" data-description="A bright default theme" data-imagesrc="./Themes/DefaultTheme.png">Defualt Theme</option>
<option value="dark-theme" data-description="A dark and non-blinding theme" data-imagesrc="./Themes/DarkTheme.png">Dark Theme</option>
<option value="wavey-theme" data-description="A wavey and ocean-like theme" data-imagesrc="./Themes/WaveyTheme.png">Wavey Theme</option>
<option value="halloween-theme" data-description="A spooky theme" data-imagesrc="./Themes/HalloweenTheme.png">Halloween Theme</option>
<option value="thanksgiving-theme" data-description="A turkey and giving theme" data-imagesrc="./Themes/ThanksgivingTheme.png">Thanksgiving Theme</option>
<option value="christmas-theme" data-description="A happy holiday theme" data-imagesrc="./Themes/ChristmasTheme.png">Christmas Theme</option>
<option value="luxury-theme" data-description="A luxury place theme" data-imagesrc="./Themes/LuxuryTheme.png">Luxury Theme</option>
<option value="neon-theme" data-description="A neon looking theme" data-imagesrc="./Themes/NeonTheme.png">Neon Theme</option>
</select>
</div>
<script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" type="text/javascript"></script>
<script>
$("#themes").ddslick({
	
	width:"100%",
	imagePosition: "left",
	selectText: "Select Theme",
	onSelected: function(data){
		//alert(data.selectedData.value);
		if(data.selectedData.value === "default-theme"){
	document.body.style.background = "#9acd32";
	document.body.style.color = "black";
	document.querySelector("#yourTitle").style.color = "black";
	document.querySelector(".line1").style.backgroundColor = "black";
	document.querySelector(".line2").style.backgroundColor = "black";
	document.querySelector(".line3").style.backgroundColor = "black";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Lastest").style.color = "black";
	document.querySelector("#Timedate").style.color = "black";
	document.querySelector("#Wcount").style.background = "transparent";
	document.querySelector("#Tcolor").value = "#000000";
	document.querySelector("#color").value = "#9acd32";
		}
		if(data.selectedData.value === "dark-theme"){
	document.body.style.background = "black";
	document.body.style.color = "white";
	document.querySelector("#yourTitle").style.color = "white";
	document.querySelector(".line1").style.backgroundColor = "white";
	document.querySelector(".line2").style.backgroundColor = "white";
	document.querySelector(".line3").style.backgroundColor = "white";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Lastest").style.color = "white";
	document.querySelector("#Timedate").style.color = "white";
	document.querySelector("#Wcount").style.background = "white";
	document.querySelector("#Tcolor").value = "#ffffff";
	document.querySelector("#color").value = "#000000";
			
		}
		if(data.selectedData.value === "wavey-theme"){
	document.body.style.background = "url('https://th.bing.com/th/id/OIP.QLF8QfhCkc3EX7v-0bH_GQHaEo?pid=Api&rs=1')";
	document.body.style.color = "#1521cb";
	document.querySelector("#yourTitle").style.color = "#1521cb";
	document.querySelector(".line1").style.backgroundColor = "#1521cb";
	document.querySelector(".line2").style.backgroundColor = "#1521cb";
	document.querySelector(".line3").style.backgroundColor = "#1521cb";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Lastest").style.color = "#1521cb";
	document.querySelector("#Timedate").style.color = "#1521cb";
	document.querySelector("#Wcount").style.background = "transparent";
	document.querySelector("#Tcolor").value = "#1521cb";
	document.querySelector("#color").value = "#000000";
		}
		if(data.selectedData.value === "halloween-theme"){
	document.body.style.background = "url('https://th.bing.com/th/id/OIP.YDxxmP1FXdmzSCAM2h8GGgHaE6?pid=Api&rs=1')";
	document.body.style.color = "#ff4000";
	document.querySelector("#yourTitle").style.color = "#ff4000";
	document.querySelector(".line1").style.backgroundColor = "#ff4000";
	document.querySelector(".line2").style.backgroundColor = "#ff4000";
	document.querySelector(".line3").style.backgroundColor = "#ff4000";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Lastest").style.color = "#ff4000";
	document.querySelector("#Wcount").style.background = "transparent";
	document.querySelector("#Timedate").style.color = "#ff4000";
	document.querySelector("#Tcolor").value = "#ff4000";
	document.querySelector("#color").value = "#000000";
		}
		if(data.selectedData.value === "thanksgiving-theme"){
			document.body.style.background = "url('http://2.bp.blogspot.com/-v9e4N9KMJcA/Tswf5BpF3hI/AAAAAAAAB_g/XRaPzKB9X6o/s1600/CornucopiaThanksgiving.jpg')";
	document.body.style.color = "#972b2b";
	document.querySelector("#yourTitle").style.color = "#972b2b";
	document.querySelector(".line1").style.backgroundColor = "#972b2b";
	document.querySelector(".line2").style.backgroundColor = "#972b2b";
	document.querySelector(".line3").style.backgroundColor = "#972b2b";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Wcount").style.background = "transparent";
	document.querySelector("#Lastest").style.color = "#972b2b";
	document.querySelector("#Timedate").style.color = "#972b2b";
	document.querySelector("#Tcolor").value = "#972b2b";
	document.querySelector("#color").value = "#000000";
		}
		if(data.selectedData.value === "christmas-theme"){
			document.body.style.background = "url('https://th.bing.com/th/id/OIP.7DlBuodtDPxZzVor1afdlAHaFj?pid=Api&rs=1')";
	document.body.style.color = "#0cd709";
	document.querySelector("#yourTitle").style.color = "#0cd709";
	document.querySelector(".line1").style.backgroundColor = "#0cd709";
	document.querySelector(".line2").style.backgroundColor = "#0cd709";
	document.querySelector(".line3").style.backgroundColor = "#0cd709";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Lastest").style.color = "#0cd709";
	document.querySelector("#Wcount").style.background = "transparent";
	document.querySelector("#Timedate").style.color = "#0cd709";
	document.querySelector("#Tcolor").value = "#0cd709";
	document.querySelector("#color").value = "#000000";
		}
		if(data.selectedData.value === "luxury-theme"){
			document.body.style.background = "url('https://th.bing.com/th/id/OIP.wVQwbjJsJTlihd9FahFZcwHaEa?pid=Api&rs=1')";
	document.body.style.color = "#ff00c8";
	document.querySelector("#yourTitle").style.color = "#ff00c8";
	document.querySelector(".line1").style.backgroundColor = "#ff00c8";
	document.querySelector(".line2").style.backgroundColor = "#ff00c8";
	document.querySelector(".line3").style.backgroundColor = "#ff00c8";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Wcount").style.background = "transparent";
	document.querySelector("#Lastest").style.color = "#ff00c8";
	document.querySelector("#Timedate").style.color = "#ff00c8";
	document.querySelector("#Tcolor").value = "#ff00c8";
	document.querySelector("#color").value = "#000000";
		}
		if(data.selectedData.value === "neon-theme"){
			document.body.style.background = "url('http://getwallpapers.com/wallpaper/full/2/9/b/1157321-vertical-black-and-neon-color-wallpaper-2560x1440.jpg')";
	document.body.style.color = "#ffee00";
	document.querySelector("#yourTitle").style.color = "#ffee00";
	document.querySelector(".line1").style.backgroundColor = "#ffee00";
	document.querySelector(".line2").style.backgroundColor = "#ffee00";
	document.querySelector(".line3").style.backgroundColor = "#ffee00";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Wcount").style.background = "transparent";
	document.querySelector("#Lastest").style.color = "#ffee00";
	document.querySelector("#Timedate").style.color = "#ffee00";
	document.querySelector("#Tcolor").value = "#ffee00";
	document.querySelector("#color").value = "#000000";
		}
		
		$("#themes").prop("title", data.selectedData.value);
		
	}
	
});
</script>
<br/>
<hr/>
<br/>
<h1>Templeate's</h1>
<br/>
<button id="temp" onclick="setupBlank()" class="blank_temp" title="Blank Templeate">Blank Templeate</button>
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
<button id="temp" onclick="setupMedTemp()" class="med_temp" title="Medical Templeate">Medical Templeate</button>
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
<button id="temp" onclick="setupPoliceIncidentReportTemp()" class="Police_temp" title="Police Incident Report Template">Police Incident Report</button>
<!--<br>
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
<input type="checkbox" class="checkbox-input check12" checked="" onclick="setcPanels()"/>
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
<input type="text" placeholder="Enter Username" id="userCode" style="width:320px;font-size:25px;" class="username-input username-data" oninput="setUsername()"/>
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
<span class="label_config">Allow_ad_blocker _annoyance:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input ad-checkbox check13" onclick="setAdBlocker()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>
<br/>
<span class="label_config">DarkTheme:</span>
<div class="checkbox">
<input type="checkbox" class="checkbox-input check14" onclick="setdarkTheme()"/>
<label for="checkbox-input">
<div class="checkbox-icons"></div>
</label>
</div>-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<br>
<h1>Stylist <i class="fas fa-palette"></i></h1>
<br/>
<i class="fas fa-asterisk" style="color:red;"></i> <span class="data-id-con">Enter ID: <input type="text" title="Enter ID" class="style-id" placeholder="Style ID"/></span>
<br/>
<br/>
Bold(<i class="fas fa-bold" title="Bold"></i>): <input type="checkbox" class="style style-checkbox style-bold" onclick="setBold()"/><br/>
Italic(<i class="fas fa-italic" title="Italic"></i>): <input type="checkbox" class="style style-checkbox style-italic" onclick="setItalic()"/><br/>
Underline(<i class="fas fa-underline" title="Underline"></i>): <input type="checkbox" class="style style-checkbox style-underline" onclick="setUnderline()"/><br/>
Strikethrough(<i class="fas fa-strikethrough" title="Strikethrough"></i>): <input type="checkbox" class="style style-checkbox style-strikethrough" onclick="setStrikethrough()"/><br/>
Color(<i class="fas fa-paint-brush" title="Font Color"></i>): <input type="color" class="style style-color style-fontColor" oninput="setColor()"/><br/>
BGColor(<i class="fas fa-paint-roller" title="Font Background Color"></i>): <input type="color" class="style style-color style-fontBgColor" oninput="setBgColor()"/> Transparent: <input type="checkbox" class="style style-checkbox style-fontBgColor-Transparent" onclick="setBgColor()"/><br/>
Font Size(<i class="fas fa-text-height" title="Font Size"></i>) <input type="number" min="0" placeholder="Enter int(number[px])" class="style style-number style-fontSize" oninput="setFontSize()"/><br/>
Font Family(<i class="fas fa-font" title="Font Family"></i>): <input type="text" value="" placeholder="Enter Font Family Name" class="style style-text style-fontFamily" oninput="setFontFamily()"/><br/>
Text align:(<i class="fas fa-align-justify" title="Text Align"></i>):
<select class="style style-select style-align" onchange="setTextAlign()">
<option value="left-align">Left align</option>
<option value="center-align">Center align</option>
<option value="right-align">Right align</option>
<option value="justify-align">Justify align</option>
</select><br/>
Text dents:(<i class="fas fa-indent" title="Text Dent"></i>): <input type="number" min="0" oninput="setTextDent()" placeholder="Enter a int(number[%])" class="style-dent"/><br/>
<span>
Animation:(<i class="fas fa-film"></i>):  <br/>
<ol>
<li style="border-bottom:2px solid black;">1. Name: <input type="text" class="anime_name" placeholder="Enter Animation Name"/></li>
<li style="border-bottom:2px solid black;">2. Duration: <input type="number" min="0" placeholder="Enter Number" class="anime_dur"/>&nbsp;<input type="text" placeholder="Enter Time(ex: seconds(s))" class="anime_dur_time"/></li>
<li style="border-bottom:2px solid black;">3. TimingFunction: <input type="text" placeholder="Enter function" class="anime_timing_fun"/></li>
<li style="border-bottom:2px solid black;">4. Delay: <input type="number" min="0" placeholder="Enter Number" class="anime_delay"/>&nbsp;<input type="text" placeholder="Enter Time(ex: seconds(s))" class="anime_delay_time"/></li>
<li style="border-bottom:2px solid black;">5. IterationCount: <input type="text" placeholder="Enter Count" class="anime_i"/></li>
<br/>
<br/>
<textarea class="anime" placeholder="create Animation" style="margin: 0px; width: 314px; height: 89px;"></textarea>
</ol><br/>
<button type="button" onclick="setAnimation()">Create Animation</button>
</span>

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
//animation
function setAnimation(anime_name, dur, dur_time, timeFun, delay, delay_time, IteCount ,animation){
anime_name = document.querySelector(".anime_name");
dur = document.querySelector(".anime_dur");
dur_time = name = document.querySelector(".anime_dur_time");
timeFun = document.querySelector(".anime_timing_fun");
delay = document.querySelector(".anime_delay");
delay_time = document.querySelector(".anime_delay_time");
IteCount = document.querySelector(".anime_iteCount");
animation = document.querySelector(".anime");


if(anime_name.value === "" || dur.value === "" || dur_time.value === "" || timeFun.value === "" || delay.value === "" || delay_time.value === "" || IteCount.value ==="" || animation.value === ""){
	alert("You must fill out all of the data");
	return false;
}
else{
	
	

	let createAnimation = document.createElement("STYLE"); 
	createAnimation.className = "animation";
	createAnimation.innerHTML = animation.value;
	document.querySelector(".animations-list").appendChild(createAnimation);
	let x = document.getElementById(System.value).children;

       for(i=0;i<x.length;i++){
		x[i].style.animation = anime_name.value + " " + dur.value + dur_time.value + " " + timeFun.value + " " + delay.value + delay_time.value + " " + IteCount.value;
	   }
	
	
}

}
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
	let x = document.getElementById(System.value).children;

       for(i=0;i<x.length;i++){
		x[i].style.fontFamily = Ffamily.value;
	   }
	
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
<br>
<br>
<br>
<br>
<hr/>
<br>
<h1>Scripter <i class="fab fa-js-square"></i></h1>
<br/>
<i class="fas fa-asterisk" style="color:red;"></i> <span class="data-id-con">Enter ID: <input type="text" title="Enter ID" onchange="checkID" class="script-id" placeholder="script ID"/></span>
<br/>
<br/>
Action: <input type="text" class="action" placeholder="Enter Action"/>
<br/>
Function: <input type="text" class="function"  placeholder="Enter Function"/>
<br/>
Script:
<br/>
<textarea class="script-editor" placeholder="Enter Script" onchange="setFunction()" style="margin: 0px; width: 308px; height: 53px;"></textarea>
<br/>
<br/>
<button onclick="BuildFunction()" type="button">Add Function</button>&nbsp;<button onclick="BuildHiddenFunction()" type="button">Insert Hidden Function</button>
<script>
//Add items
function BuildFunction(){
	let x = document.querySelector(".function").value;
	let Format = x.replace("()", "");
	document.querySelector(".script-editor").value = "function " + Format + "(){\n\n}";
	//alert("built");
}
function BuildHiddenFunction(selector){
	selector = prompt("Enter element ID", "");
	if(selector == null || selector == ""){
		alert("Cannot be built... Canceled");
	}
	
	let x = document.querySelector(".function").value;
	let Format = x.replace("()", "");
	document.querySelector(".script-editor").value = "function " + Format + "(){\n"+ "document.getElementById('"+ selector + "').hidden=true" +"\n}";
}
</script>
<script>
function checkID(ID){
	ID = document.querySelector(".script-id").value;
	console.assert(document.getElementById(ID), 'There is no such ID as: ' + ID);
}
function setFunction(Dataid, action, functions, script){
	Dataid=document.querySelector(".script-id").value;
	action=document.querySelector(".action").value;
	functions=document.querySelector(".function").value;
	script=document.querySelector(".script-editor").value;
	
	if(Dataid == "" || action == "" || functions == "" || script == ""){
		alert("Make sure you fill out everything");
		return false;
	}
	else{
		functions.replace("()", "");
		document.getElementById(Dataid).setAttribute(action, functions + "()");
		
		let setScript = document.createElement("SCRIPT");
		setScript.innerHTML = script;
		document.querySelector(".setFormScript").appendChild(setScript);
	}
	
}
</script>




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
<div class="setFormScript">

</div>
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
<script src="./Config/RunConfig.min.js" type="text/javascript"></script>
<script>
//used as package config
setTimeout(testpackageConfig, 0);
function testpackageConfig(){
	
const xhr = new XMLHttpRequest();

xhr.onload = function(){
	if(this.status === 200){
		
		try{
		const resObj = JSON.parse(this.responseText);
 
            maxTitle = resObj.config.maxTitle;
			requiredVersion = resObj.config.requiredVersion;
			DarkTheme = resObj.config.DarkTheme;
			setTimeout(testCorrospond, 0);
			
		}
		catch (e){
			console.warn("Failed JSON file")
		}
		
	}
	else{
		console.warn("Data failed to recive 200 OK");
	}
	
}
 xhr.open("get","./Packages/libs/testpackage/v0.0.2/testpackage.json");
 xhr.send();
 

}


</script>
<div class="setConfigDatabase">

</div>

<!--<script>

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
var check14 = document.querySelector(".check14");//DarkTheme

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

function setdarkTheme(){
	if(DarkTheme == false && check14.checked == true){
		DarkTheme = true;
		
	} else{
		DarkTheme = false;
	}
	setTimeout(testCorrospond, 0);
}
</script>-->

</body>                                                                      
</html>         