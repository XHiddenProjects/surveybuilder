

<html>
<head id="Headers">
<script>
//prevents users for iframing this
 if(self != top) { 
  document.querySelector("html").innerHTML = "";
  top.location = self.location;
 }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://kit.fontawesome.com/46bb4793e2.js"></script>
<script>
$(function(){

    var requiredCheckboxes = $(':checkbox[required]');

    requiredCheckboxes.change(function(){

        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        }

        else {
            requiredCheckboxes.attr('required', 'required');
        }
    });

});
</script>


<script src="Apps_Insert.js" type="text/javascript"></script>
<!-- Google Tag Manager -->


<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="keywords" content="Survey Builder, Free, Test, Quiz, and Survey's">
<meta name="author" content="©SurveyMaker">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name content="SurveyMaker">
 <meta name="UsersForm" hidden="hidden" content="SurveyBuilderId:19494sbybfdyfuy47grfrfureuyervchfiuerhgyuer748gryru435943578347f">
 <meta name="Forum" property="og:url" content="https://surveymaker.boards.net">
<title id="UserTitle">Untitled - Survey Builder</title>
<!--<link rel="stylesheet" href="./fontawesome/css/all.css"/>-->
<link rel="stylesheet" type="text/css" href="SurveyBuilder.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="FormInsert.css"/>
<link rel="shortcut icon" href="favicon.ico"/>
<script src="SurveyBuilder.js" type="text/javascript"></script>
<script src="InsertItems.js" type="text/javascript"></script>
 <script src="https://kit.fontawesome.com/46bb4793e2.js" crossorigin="anonymous"></script>

 <!--<link href="./app.webmanifest" rel="manifest" crossorigin="use-credentials"/>-->
<noscript><img src="/SurveyBuilder/images/icon/favicon.png" width="20" height="20"/>Sorry JavaScript is off, make sure it is on due to a lot of functions needing to be triggered</noscript>

<script src="./users/usernames.json"></script>

</head>
<div id="not"></div>


<body onload="Update()" id="SurveyBuilderBody">
<style type="text/css" rel="stylesheet" id="customCSS">

</style>
<div id="custom-scripts"></div>
<div id="custom-addons"></div>
<!--<div id="custom-alertbox" style="display:none;">
<div></div>
</div>-->
<!--<div id="custom-API"></div>-->
<!--onkeydown="Key(event)" in body allow shortcut-->
<div id="Body-Container">


<!-- End Google Tag Manager (noscript) -->
<div id="body-container" onload="changeBGcolor()">
<br>
<br>
<div id="links-doc" hidden="hidden"></div>

  <center><h6 id="Lastest">Last Updated:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<time id="Timedate" onload="Update()"></time></h6></center><br>
 <br>
<center><h1 id="Orgtitle">SurveyBuilder</h1></center>
<div id="Activate-Password-Protact" onload="PP()" style="display:none;"></div>
	 <br>
	 <br>
	<br>
	<br>
	<br>
	 <center><h1 id="yourTitle">Untitled</h1></center><br>
	 <!--Password Check-->

<!--Change title-->
<div id="YourTitleTag">
<error id="Error" hidden="true">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry you need a title before saving it or its to long</error>
<error id="SpanError" hidden="true">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry spam block as been added. Your Clicks: <span id="Count" style="color:white;"></span> times</error>
<br>
<br>
<input type="text" id="titleSave" autocomplete="off" title="Enter Title" onkeydown="testback(event);" onkeypress="wcount()" pattern="[a-zA-Z0-9]{,15}"  placeholder="Enter a title" required><input id="titleSave-btn" title="Save Title" onclick="savetitle()" type="submit" value="Save">
<div id="wcc" style="position:absolute;left:65%; top:13.5%;font-size:25px;"><span id="Wcount" style="color:red;">0</span><span>/</span><span id="maxTitle">25</span>&nbsp;<span>characters</span></div>

 </div>
 
 <!--Editor container-->
<br>
<br>
<br>
<center id="Form-Center" onload="Autosave()">
<form id="Editors-Form" method="post" action="">
<div id="Insert-Object" contenteditable="true">



</div>
</form>
</center>
 <!--Sidebar-->
              

<div id="Sidebar">
<div class="toggle-sidebar-btn" onclick="togglesidebar()" title="Add Elements" style="cursor:pointer;">
<span></span>                                                                                                                                       
<span></span>
<span></span>
</div>
<ul>
<li id="New" class="exit" onclick="togglesidebar()" title="Close Elements" style="cursor:pointer;">Exit Sidebar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</li>
<li id="exit-btn" style="cursor:default; border:none;"></li>

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

</span>
<li id="New">Elements</li>
<li id="Insert-text" title="Short text" onclick="InsertsText()"><i class="fas fa-keyboard"></i>&nbsp;&nbsp;Short text</li>
<li id="Insert-FreeTxt" title="Long text" onclick="InsertTextArea()"><i class="fas fa-keyboard"></i>&nbsp;&nbsp;Long text</li>
<li id="Insert-Single" title="Single choices" onclick="InsertRadios()"><i class="far fa-dot-circle"></i>&nbsp;&nbsp;Single choices</li>
<li id="Insert-Mutiple" title="Mutiple choices" onclick="InsertCheckboxs()"><i class="fas fa-check-square"></i>&nbsp;&nbsp;Mutiple choices</li>
<li id="Insert-Dropdown" title="Dropdown" onclick="InsertDropdown()"><i class="fas fa-caret-square-down"></i>&nbsp;&nbsp;Dropdown</li>
<li id="Insert-Image" title="Image" onclick="InsertImages()"><i class="far fa-image"></i>&nbsp;&nbsp;Image</li>
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
<span id="B-DayBash">
<li id="New">Yearly Prize</li>
<li id="Insert-Iframe-Embed" title="Iframe Embed" onclick="" class="Upgrade">Iframe Embeder</li>
</span>
<span id="eCommerce">
<li id="New" name="eCommerce">eCommerce</li>
<li id="Insert-PayPal" title="PayPal" onclick="InsertPayPal()" class="Upgrade"><i class="fab fa-paypal"></i>&nbsp;&nbsp;PayPal</li>
<li id="Insert-Stripe" title="Stripe" onclick="InsertStripe()" class="Upgrade"><i class="fab fa-stripe"></i>&nbsp;&nbsp;Stripe</li>
</span>
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
//Google map Installmeant
//Info
function GMapInfo(){
alert("AppName: GoogleMaps\n\nCreator: Google co.\n\nDescription: Find local businesses, view maps and get driving directions in Google Maps. When you have eliminated the JavaScript , whatever remains must be an empty page. Enable JavaScript to see Google Maps.\n\nDependencies: N/A\n\nVersion: 5.46\n\nNeedsCofig: Yes");
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
//Google map Installmeant
//Info
function RoboChatInfo(){
alert("AppName: RoboChat\n\nCreator: SurveyBuilder \n\nDescription: Create and Edit your own 24/7 chat station w/ an AI\n\nDependencies: Boostrap Css(v4.5.0), Boostrap FontAwesome Icons(v4.7.0)\n\nVersion: 16.0.0\n\nNeedsCofig: yes");
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
//Google map Installmeant
//Info
function eSignInfo(){
alert("AppName: eSignature\n\nCreator: SurveyBuilder \n\nDescription: Get Users signature\n\nDependencies: jQuery 3.5.1+, Sign.js\n\nNeedsCofig: No");
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
//Google map Installmeant
//Info
function recInfo(){
alert("AppName: Recorder\n\nCreator: SurveyBuilder \n\nDescription: Capture audio and facecam video, make it downloadable\n\nDependencies: N/A\n\nNeedsCofig: Yes");
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
</span>
<span id="cpanel-form">
<span id="cPanel">
<li id="New"><i class="fab fa-cpanel" style="font-size:52px;"></i></li>
</span>
<span id="CSS">
<li id="New">Custom CSS</li>
<textarea rows="10" cols="30" placeholder="Custom CSS" spellcheck="false"  autocorrect="off" id="cssFormat" onchange="CSSInsert()"></textarea>
</span>

<span id="Js">
<li id="New">Custom Javascript/Jquery</li>
<textarea rows="10" cols="30" placeholder="Custom Javascript/Jquery" spellcheck="false"  autocorrect="off" id="jsFormat" onchange="JSInsert()"></textarea>
</span>
<span id="addons">
<li id="New">Custom Addon's for Css/JS</li>
<button type="button" onclick="AddonInsert()">Add Addon</button>
</span>
<span id="sql">
<li id="New">Add Database(SQL)</li>
<!--<a href="./db/AddDatabase.php">-->
<button type="button" onclick="CreateData()">Add Database</button>
<!--<a href="./db/EditDatabase.php">-->
<button type="button" onclick="EditData()">Edit Database</button>
</span>
<!--<span id="API">
<li id="New">Add Your API(Custom JS)</li>
<textarea rows="10" cols="30" placeholder="Custom API system" spellcheck="false"  autocorrect="off" id="APIFormat" onchange="APIInserts()">{&#10;&#10;}</textarea>
</span>-->
<span id="Form-edit">
<li id="New">Edit Form</li>

<li id="method">
<select onchange="Formset()" id="formmethod"><optgroup label="Method"><option value="POST">POST</option><option value="GET">GET</option></optgroup></select>
<input type="url" id="Formaction" onchange="ActionForm()" placeholder="Enter Action(URL/File)"/>
<input type="text" id="Formsubmit" onchange="SubmitForm()" placeholder="Enter Submit(Function)"/>

</li>
<span id="Plugin">
<li id="New">Insert Plugin</li>
<br/>
<form method='post'>
<input type="file" id="PluginFile" accept=".html" onchange="InsertPlugin(event)" style="outline:none;"/>
</form>
</span>

</span>
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
$.get(".\\Apps\\appdata\\GoogleMaps.html", function(data){

x.value = data;
});
}
if(x.value == "/app RoboChat"){
$.get(".\\Apps\\appdata\\RoboChat.html", function(data){

x.value = data;
});
}
if(x.value == "/app Recorder"){
$.get(".\\Apps\\appdata\\recorder.html", function(data){

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
y.action = ".\\Apps\\appdata\\GoogleMaps.php";
}
if(x.selectedIndex == 2){
y.action = ".\\Apps\\appdata\\RoboChat.php";
}
if(x.selectedIndex == 3){
y.action = ".\\Apps\\appdata\\recorder.php";
}

}
</script>

</span>
<span id="Cosnole-Log">
<form action="/SurveyBuilder/Console/Console.php" method="post">
<li id="New">Console Log &nbsp;&nbsp;<button type="submit" title="Share Log" style="outline:none;border:none;font-size:15px;"><i class="fas fa-share-square"></i></button></li>

<br/>
<textarea placeholder="Console" required="true" name="Console" spellcheck="false" style="margin: 0px; width: 203px; height: 225px;" onchange="EditFormFromConsole()" class="lined" id="Console"></textarea>

<script type="text/javascript">
autodisplay();
function autodisplay(){
document.getElementById("Console").value = document.getElementById("Insert-Object").innerHTML;

}

function EditFormFromConsole(){
document.getElementById("Insert-Object").innerHTML = document.getElementById("Console").value + "&#13;&#13;";
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

</form>
</span>
</span>

<span id="remove-element">
<li id="New">Remove Element</li>
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

<!--Style-->
<div id="Editor-Control-Form">
<div id="Style-editor-container" style="position:absolute;">
<div id="Style"><button title="Style" onclick="OpenStyle()" id="Style-btn">Style</div>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div id="Style-clipboard" hidden="true">
<div id="BgColor"><span style="color:lightgray;font-weight:bold;">Background Color:</span>  <input type="color" oninput="ChageColor()" id="color" value="#9acd32"  list="presetColors"/></div>
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
<div id="Titlecolor"><span style="color:lightgray;font-weight:bold;">Title Color: <input type="color" oninput="ChageTColor()" id="Tcolor"  list="presetColors"/></div>
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
	links.href = "SurveyBuilder[Page 2].php";
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

<footer id="SurveyMakerBanner"><div id="Banner"><span id="Icon"><img src="favicon.ico" width="50" height="50" title="SurveyMaker" alt="SurveyMaker Icon"/></span><span id="Text1">Join SurveyBuilder TODAY! <span id="Text2">Join Our <a id="FourmLink" title="Fourm" href="https://surveybuilder.boards.net/" target="_blank">Fourm</a></span><span id="Text3">&copy;SurveyBuilder</span></div></footer>
<div id="copyright-print">&copy; SurveyBuilder</div>
</div>
<script src="./Config/Config.js" type="text/javascript"></script>
</body>                                                                      
</html>         