//Admin Config Panel
//Allow and disable certain items
//Everything is eaither True/False

	//Set Variable here
	
var Allow_Banner_display = true; //Allow to display SurveyBuilder footer(banner)
var Allow_Console_attribute = true; //Enables the Console Log
var Allow_Pop_up = false; //Allow alert_box to popup when a user joins
var limit_list = ["not"]; //Removes any category on your choice. 
var Allow_Inspect_element = true; //Allows users to use the Inspect Element
var Allow_location_tracking = false; //Allows you to know there location.. sends this to the console.
var Allow_API_config = false; //Enables a password that works only when a API is enabled. Password will popup when a player joins.
var get_users_lang = true; //Gives the user lang. to the console
var get_users_platform = true; //Give the users platform to the console.
var get_users_usersAngent = true; //Give the users userAgent to the console.
var test_users_cookieEnable = true; //Displays if the console should replay back if the cookie was enable
var Collect_IP = false; //The Console will display there IP_address. 
var Allow_cPanel = true; //Allow's users to have cPanel
var maxTitle = 25; //Change the length of the title
var username = "admin"; //Enter username here 
var banIP = []; //Enter IP adderess here
var Enable_Config_File = "Enable"; //- Use 'Enable' to enable this or type 'Disable'  this will allow config to activatet. - This will return false;
var Allow_Database = "mySQL"; //- this supports [mySQL] --SQLite is not supported-- or set to [false] to disable SQL database, this will require you to have a SQL server if using 'mySQL'
var redirFormLink = "false" //Enter URL to execute the form to add. Use 'false' to deny action
var Allow_ad_blocker = false //Gives an error if a person is using any ad-blockers


//ingore these code below[Unless something goes wrong] or needs config:ex:limit_list



//Test any error of a none corrosponding data
setTimeout(testCorrospond, 0);
console.time();
function testCorrospond(){
	if(typeof(Enable_Config_File) !== "string"){
		console.error("Enable-Config-File must be a string");
		return false;
	}
	if(typeof(Allow_Banner_display) !== "boolean"){
		console.error("Allow_Banner_display must be a boolean");
			return false;
	}
	if(typeof(Allow_Console_attribute) !== "boolean"){
		console.error("Allow_Console_attribute must be a boolean");
			return false;
	}
	if(typeof(Allow_Pop_up) !== "boolean"){
		console.error("Allow_Pop_up must be a boolean");
			return false;
	}
	if(Array.isArray(limit_list) !== true){
		console.error("limit_list must be an array");
			return false;
	}
	if(typeof(Allow_Inspect_element) !== "boolean"){
		console.error("Allow_Inspect_element must be a boolean");
			return false;
	}
	if(typeof(Allow_location_tracking) !== "boolean"){
		console.error("Allow_location_tracking must be a boolean");
			return false;
	}
	if(typeof(Allow_API_config) !== "boolean"){
		console.error("Allow_API_config must be a boolean");
			return false;
	}
	if(typeof(get_users_lang) !== "boolean"){
		console.error("get_users_lang must be a boolean");
			return false;
	}
	if(typeof(get_users_platform) !== "boolean"){
		console.error("get_users_platform must be a boolean");
			return false;
	}
	if(typeof(get_users_usersAngent) !== "boolean"){
		console.error("get_users_usersAngent must be a boolean");
			return false;
	}
	if(typeof(test_users_cookieEnable) !== "boolean"){
		console.error("test_users_cookieEnable must be a boolean");
			return false;
	}
	if(typeof(Collect_IP) !== "boolean"){
		console.error("Collect_IP must be a boolean");
			return false;
	}
	if(typeof(Allow_cPanel) !== "boolean"){
		console.error("Collect_IP must be a boolean");
			return false;
	}
	if(typeof(maxTitle) !== "number" || maxTitle < 10 || maxTitle > 40){
		console.error("maxTitle must be a number | maxTitle must be >= to 10.| maxTitle must be <= 40.");
		setInterval(function(){alert("maxTitle error:\n-maxTitle must be a number.\n-maxTitle needs to be >= then 10\n-maxTitle must be <= 40.")},0)
	}
	if(typeof(username) !== "string"){
		console.error("username must be a string");
		return false;
	}
	if(Array.isArray(banIP) !== true){
		console.error("banIP must be a array.");
		return false;
	}
	if(typeof(Allow_Database) !== "string"){
		console.error("Allow_Database must be a string");
		return false;
	}
	if(typeof(redirFormLink) !== "string"){
		console.error("redirFormLink must be a string");
		return false;
	}
	if(typeof(Allow_ad_blocker) !== "boolean"){
		console.error("Allow_ad_blocker must be a boolean");
	}
	setTimeout(config, 0);

}
//if clear do this
dir = 0;
function config(){
	//Settings
	if(Enable_Config_File === "Disable"){
		alert("Config file is off");
		return false;
	}
	else if(Enable_Config_File === "Enable"){
	
	console.log("%c---Set Config---","color:green;");
	
   //redirect link
   
   if(redirFormLink === "false"){
	   console.log("Using SurveyBuilder");
	  
   }
    if(redirFormLink !== "false"){
		document.body.style.backgroundColor = "white";
	   document.getElementById("redirect-link").hidden = false;
	   document.getElementById("Body-Container").hidden = true;
	   let redirMeta = document.createElement("META");
	   let dir = "5;" + redirFormLink;
	   redirMeta.setAttribute("http-equiv", "refresh"); 
	    redirMeta.setAttribute("content", dir);
	   document.getElementById("Headers").appendChild(redirMeta);
	   console.log("Using data");
   }
    
	//Database
	if(Allow_Database === "false"){
		document.getElementById("sql").hidden = true;
		//document.getElementById("sqlite").hidden = true;
		console.log("Database: False");
	}
	
	if(Allow_Database === "mySQL"){
		document.getElementById("sql").hidden = false;
		//document.getElementById("sqlite").hidden = true;
		console.log("Database: mySQL");
	}
	/*if(Allow_Database === "SQLite"){
		document.getElementById("sql").hidden = true;
		document.getElementById("sqlite").hidden = false;
		console.log("Database: SQLite");
	}*/
	
	//Banner
	if(Allow_Banner_display == true){
		document.getElementById("SurveyMakerBanner").hidden = false;
		console.log("Banner Display: true");
	}
	if(Allow_Banner_display == false){
		document.getElementById("SurveyMakerBanner").hidden = true;
		console.log("Banner Display: false");
	}
	//Console
    if(Allow_Console_attribute == true){
		document.getElementById("Cosnole-Log").hidden = false;
		console.log("Console Display: true");
	}
	if(Allow_Console_attribute == false){
		document.getElementById("Cosnole-Log").hidden = true;
		console.log("Console Display: false");
	}
	//Popup
	 if(Allow_Pop_up == true){
		alert("Welcome to SurveyBuilder Popup");
		console.log("Console Display: true");
	}
	if(Allow_Pop_up == false){
		console.log("Pop Up Display: false");
	}
	/*List*/
	//Copy code to keep add limited items
	//Change '0' to any number (0 < #) this will take a certain ID and hide it
	document.getElementById(limit_list[0]).hidden = true;

	/*End list here*/
	
	//Inspect Element
    if(Allow_Inspect_element == true){
		document.body.oncontextmenu = "";
		console.log("Inspect Element Display: true");
	}
	if(Allow_Inspect_element == false){
	document.body.oncontextmenu = function(){return false;}
		console.log("Inspect Element Display: false");
	}	
	//Location tracking
	 if(Allow_location_tracking == true){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition);
		}
		console.log("Location: true");
	}
	if(Allow_location_tracking == false){
		console.log("Location: false");
	}	
//API
if(Allow_API_config == false){
		console.log("API: false");
	}
 if(Allow_API_config == true){
		
		
		console.log("API: true");

	  $.get("./API/API.txt", function(data){
let x = prompt("Enter API key", "");
	if(x !== data){
		alert("Sorry wrong API key. Please contact the administrator");
		setTimeout(API_config, 0);
		console.error("API key was Invalid");
	}


});

	
	
	
}


//Get Users Lang
    if(get_users_lang == true){
		let lang = navigator.language;
		console.log("Language:" + lang);
	}
	if(get_users_lang == false){
	console.log("Language: false");
	}	
	//Get Users Platform
    if(get_users_platform == true){
		let platform = navigator.platform;
		console.log("Platform:" + platform);
	}
	if(get_users_platform == false){
	console.log("Platform: false");
	}	
	//Get UsersAngent
    if(get_users_platform == true){
		let Agent = navigator.userAgent;
		console.log("userAgent:" + Agent);
	}
	if(get_users_platform == false){
	console.log("userAgent: false");
	}
	
	//test cookieEnable 
    if(test_users_cookieEnable == true){
		let cookie = navigator.cookieEnabled;
		console.log("cookieEnable:" + cookie);
	}
	if(test_users_cookieEnable == false){
	console.log("cookieEnable: N/A");
	}
	
	//IP
	if(Collect_IP == true){
	
       $.getJSON("https://api.ipify.org?format=json", 
                                          function(data) { 
  
            // Setting text of element P with id gfg 
			
            console.log("IP_Collecting: "+ data.ip); 
        }) 

    
	}
	if(Collect_IP == false){
		console.log("IP_Collecting: False");
	}
	//ban IP
	  
	  $.getJSON("https://api.ipify.org?format=json", 
                                          function(data) { 
			//Add more or remove this
			//Adding: make sure you change {current Number} to {current Number} + 1 
            if(banIP[0] === data.ip){
				setInterval(function(){alert("Your account is banned");}, 0);
			} 
			
			
        }); 
	
	//Location tracking
	 if(Allow_location_tracking == true){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition);
		}
		console.log("Location: true");
	}
	if(Allow_location_tracking == false){
		console.log("Location: false");
	}	

	
   //End Location
	function showPosition(position) {
  console.log("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
}
//End location
//API
function API_config(){
	

	
		
	
		
		

	  $.get("./API/API.txt", function(data){
let x = prompt("Enter API key", "");
	if(x !== data){
		alert("Sorry wrong API key. Please contact the administrator");
		setTimeout(API_config, 0);
		console.error("API key was Invalid");
	}
	if(x === data){
		return false;
	}

});


    
  
	
	
}
//End of API
console.timeEnd();
setTimeout(Warning, 0);

//cPanel
if(Allow_cPanel == true){
	document.getElementById("cpanel-form").hidden = false;
	console.log("cPanel: true");
}	
if(Allow_cPanel == false){
	document.getElementById("cpanel-form").hidden = true;
	console.log("cPanel: false");
}
setTimeout(MaxTitle, 0);

//adblocker
if(Allow_ad_blocker == true){
	
if(typeof(window.google_render_ad)=="undefined") 
{ 
    document.querySelector(".con-ad-block").style.display = "block";
}
else{
	document.querySelector(".con-ad-block").style.display = "none";
}

}
if(Allow_ad_blocker == false){
	console.log("Ad_blocker: false")
}

}
}


function Warning(){
	console.warn("Some functions might not work");
	console.warn("Current Update: v16.0.0 - Is up-to-date");
	
}

//title save

function MaxTitle(){
	document.getElementById("maxTitle").innerHTML = maxTitle;
	
}

function savetitle(){
	
	var s = document.getElementById("titleSave");
	var Title = document.getElementById("yourTitle");
	var Displaytitle = document.getElementById("UserTitle");
	let val = s.value;
	//val = val.match( /\w+/g );
	//val = val.length;
	//document.getElementById("Wcount").innerHTML = val;
	if(val.length <= 0|| val.length > maxTitle){
		Displaytitle.innerText = "Untitled" +" - Survey Builder";
		Title.innerText = "Untitled";
	var E = document.getElementById("Error");
	E.hidden = false;
	setTimeout(hideError, 10000);
	return false;
	}
	
	else{
	Displaytitle.innerText = s.value + " - SurveyBuilder";
	Title.innerText = s.value
	 
	
	
	
	
	}
	
	
	
	}
	//title save
	
	function testback(event){
	if(event.keyCode == "8" || event.which == "8"){
		setTimeout(wcount, 0);
		
	}
	
	
	}
	function wcount(){
		let now = document.getElementById("titleSave").value;
	//now = now.match(/\w+/g );
	now = now.length;
	if(now == 0 || now > maxTitle){
		document.getElementById("Wcount").style.color = "red";
	}
	if(now > 0 && now <= maxTitle){
		document.getElementById("Wcount").style.color = "black";
	}
	
	let loop = setInterval(function(){
	
	document.getElementById("Wcount").innerHTML = now;
	
	
	}, 0);
	let loop2 = setInterval(function(){
	clearInterval(loop);
	clearInterval(loop2);
	}, 100);
	
	let loop3 = setInterval(function(){
		setTimeout(wcount, 0);
		clearInterval(loop3);
	}, 105);
	
	}
	
	function hideError(){
		var E = document.getElementById("Error");
	E.hidden = true;
	}
	
	//username
	let userEx = "username=" + username + ";expires=Fri, Dec 31 2028, 5:00:00 UTC; path=/"
    document.cookie = userEx;

    