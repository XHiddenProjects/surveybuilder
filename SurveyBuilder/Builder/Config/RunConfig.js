//ingore these code below[Unless something goes wrong] or needs config:ex:limit_list

//Do not mess with variable
var skip = false; 
var skip1 = false;

//var skip2 = false;
//Test any error of a none corrosponding data
setTimeout(testCorrospond, 0);
console.time();
function testCorrospond(){
	if(typeof(Enable_Config_File) !== "string"){
		console.error("Enable_Config_File must be a string");
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
	//API
	if(Array.isArray(Allow_API_config) !== true){
		console.error("Allow_API_config must be a Array");
			return false;
	}
	if(typeof(Allow_API_config[0]) !== "boolean"){
		console.error("Allow_API_config:0 must be a boolean");
			return false;
	}
	if(typeof(Allow_API_config[1]) !== "string"){
		console.error("Allow_API_config:1 must be a string");
			return false;
	}
	//End of API
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
		return false;
	}
	if(typeof(BanLocation) !== "string"){
		console.error("Allow_ad_blocker must be a boolean");
		return false;
	}
	//(config url style)
	//template URL
	if(Array.isArray(templateSelect) !== true){
		console.error("templateSelect must be a array");
		return false;
	}
	if(typeof(templateSelect[0]) !== "boolean"){
		console.error("templateSelect:0 must be a boolean");
		return false;
	}
	if(typeof(templateSelect[1]) !== "string"){
		console.error("templateSelect:1 must be a string");
		return false;
	}
	if(typeof(templateSelect[2]) !== "string" || templateSelect[2] === "" || templateSelect[2] === "{seperator:optional}"){
		console.warn("templateSelect:2 doesn't have a seperator");
	 skip = true;
	}
	if(templateSelect[2] !== "?" && skip == false){
		console.error("templateSelect:2 doesn't have a matching selector '?' ");
		return false;
	}
	if(typeof(templateSelect[3]) !== "string" || templateSelect[3] === "" || templateSelect[3] === "{value:optional}"){
		console.warn("templateSelect:3 doesn't have a value");
	}
	//preview URL
	if(Array.isArray(setPreview) !== true){
		console.error("setPreview must be an array");
	}
	if(typeof(setPreview[0]) !== "boolean"){
		console.error("setPreview:0 must be a boolean");
		return false;
	}
	if(typeof(setPreview[1]) !== "string"){
		console.error("setPreview:1 must be a string");
		return false;
	}
	if(typeof(setPreview[2]) !== "string" || setPreview[2] === "" || setPreview[2] === "{seperator:optional}"){
		console.warn("setPreview:2 must be a string");
		skip1 = true;
	}
	if(setPreview[2] !== "?" && skip1 == false){
		console.error("setPreview:2 doesn't have a matching selector '?' ");
		return false;
	}
	if(typeof(setPreview[3]) !== "string" || setPreview[3] === "" || setPreview[3] === "{value:optional}"){
		console.warn("setPreview:3 must be a string");
		
	}
	if(typeof(DarkTheme) !== "boolean"){
		console.error("DarkTheme must be a boolean");
		return false;
	}
	/*system config
	if(Array.isArray(systemConsole) !== true){
		console.error("systemConsole must be a Array");
		return false;
	}
	if(typeof(systemConsole[0]) !== "boolean"){
		console.error("systemConsole:0 must be a boolean");
		return false;
	}
	if(typeof(systemConsole[1]) !== "number"){
		console.error("systemConsole:1 must be a int");
		return false;
	}
	if(typeof(systemConsole[2]) !== "string"){
		console.error("systemConsole:2 must be a string");
		return false;
	}
	if(Array.isArray(clientSessionKey) !== true){
		console.error("clientSessionKey must be a Array");
		return false;
	}
	if(typeof(clientSessionKey[0]) !== "string"){
		console.error("clientSessionKey:0 must be a string");
		return false;
	}
	if(typeof(clientSessionKey[1]) !== "string"){
		console.error("clientSessionKey:1 must be a string");
		return false;
	}
	if(typeof(clientSessionKey[2]) !== "boolean"){
		console.error("clientSessionKey:2 must be a boolean");
	}*/
		
		
	
	setTimeout(config, 0);

}
//if clear do this
dir = 0;
function config(){
	//Settings
	if(Enable_Config_File === "Disable"){
		document.querySelector(".web-config-data").hidden = true;
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
if(Allow_API_config[0] == false){
		console.log("API: false");
	}
 if(Allow_API_config[0] == true){
	let apiKeyEnable = 1;

           
	  $.get("./API/API.txt", function(data){
		  	let url = Allow_API_config[1] + "?api=" + data;
	if(window.location.href === url){
		console.log("API: true[weblink]");
		apiKeyEnable = 0;
	}
	if(apiKeyEnable == 1){
let x = prompt("Enter API key", "");
	if(x !== data){
		alert("Sorry wrong API key. Please contact the administrator");
		setTimeout(API_config, 0);
		console.error("API key was Invalid");
	}
console.log("API: true[Manual]");
	  }	  
});

	
	
	
}
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
	  
	  $.getJSON("https://api.ipify.org?format=json", function(data) { 
		
			for(setBanData=0;setBanData<banIP.length;setBanData++){
				//alert(data.ip);
            if(banIP[setBanData] === data.ip){
				setInterval(function(){
					window.open(BanLocation, "_self");
					}, 0);
			} 
			
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
	
if(typeof(window.google_jobrunner)=="undefined") 
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
//url config
if(templateSelect[0] === false){
	console.log("url[template_selector]: false");
}
if(templateSelect[0] === true){
	console.log("url[template_selector]: true");
	if(window.location.href === templateSelect[1] + "?temp=blank" || window.location.href === templateSelect[1] + templateSelect[2] + templateSelect[3] + "&temp=blank"){
		document.querySelector(".blank_temp").click();
	}
	if(window.location.href === templateSelect[1] + "?temp=medical" || window.location.href === templateSelect[1] + templateSelect[2] + templateSelect[3] + "&temp=medical"){
		document.querySelector(".med_temp").click();
	}
	if(window.location.href === templateSelect[1] + "?temp=police" || window.location.href === templateSelect[1] + templateSelect[2] + templateSelect[3] + "&temp=police"){
		document.querySelector(".police_temp").click();
	}
}

if(setPreview[0] === false){
	console.log("url[setPreview]: false");
}
if(setPreview[0] === true){
	if(window.location.href === setPreview[1] + "?setPreview=1" || window.location.href === setPreview[1] + setPreview[2] + setPreview[3] + "&setPreview=1"){
			document.getElementById("CheckPre").click();
	}
}

/*if(systemConsole[0] === false){
	console.log("systemConsole is false");
}
if(systemConsole[0] === true){
	if(systemConsole[2] === "" || systemConsole === "{attr:optional}"){
		setTimeout(function(){
		console.clear();
	}, systemConsole[1]);
	}
	if(systemConsole[2] == "once"){
	setTimeout(function(){
		console.clear();
	}, systemConsole[1]);
	}
	if(systemConsole[2] == "loop"){
		setInterval(function(){
			console.clear();
		}, systemConsole[1]);
	}
	
}


if(clientSessionKey[2] === true){
	
	if(clientSessionKey[1] === "public"){
   const lengths = 50;
   const result           = '';
   const characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   const charactersLength = characters.length;
   for ( var i = 0; i < lengths; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
	  alert(result);
   }
   
	}
	
	if(clientSessionKey[1] === "privite"){
		
	}
	
}
if(clientSessionKey[2] === false){
	
}
*/
if(DarkTheme == false){
	console.log("DarkTheme:false");
	document.body.style.backgroundColor = "#9acd32";
	document.body.style.color = "black";
	document.querySelector("#yourTitle").style.color = "black";
	document.querySelector(".line1").style.backgroundColor = "black";
	document.querySelector(".line2").style.backgroundColor = "black";
	document.querySelector(".line3").style.backgroundColor = "black";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Lastest").style.color = "black";
	document.querySelector("#Timedate").style.color = "black";
	//document.querySelector("#Wcount").style.color = "black";
	document.querySelector("#Tcolor").value = "#000000";
	document.querySelector("#color").value = "#9acd32";
}

if(DarkTheme == true){
	console.log("DarkTheme:true");
	document.body.style.backgroundColor = "black";
	document.body.style.color = "white";
	document.querySelector("#yourTitle").style.color = "white";
	document.querySelector(".line1").style.backgroundColor = "white";
	document.querySelector(".line2").style.backgroundColor = "white";
	document.querySelector(".line3").style.backgroundColor = "white";
	document.querySelector("#Editor-Control-Form").style.color = "black";
	document.querySelector("#Lastest").style.color = "white";
	document.querySelector("#Timedate").style.color = "white";
	//document.querySelector("#Wcount").style.color = "white";
	document.querySelector("#Tcolor").value = "#ffffff";
	document.querySelector("#color").value = "#000000";
}

}	



function Warning(){
	console.warn("Some functions might not work");
	console.warn("Current Update: v16.0.0 - Is up-to-date");
	
}


//title save

function MaxTitle(){
	FullMaxTitle = parseInt(maxTitle);
	document.getElementById("maxTitle").innerHTML = FullMaxTitle;
	
}

function savetitle(){
	
	var s = document.getElementById("titleSave");
	var Title = document.getElementById("yourTitle");
	var Displaytitle = document.getElementById("UserTitle"); 
	let val = s.value;
	//val = val.match( /\w+/g );
	//val = val.length;
	//document.getElementById("Wcount").innerHTML = val;
	if(username === "" || username === null){
			Displaytitle.innerText = "Untitled" + " - Survey Builder";
		Title.innerText = "Untitled";
		
	var E = document.getElementById("Error");
	E.hidden = false;
	setTimeout(hideError, 10000);
	return false;
	}
	if(val.length <= 0|| val.length > maxTitle){
		
		Displaytitle.innerText = "Untitled" + " - Survey Builder";
		Title.innerText = "Untitled";
	var E = document.getElementById("Error");
	E.hidden = false;
	setTimeout(hideError, 10000);
	return false;
		
	}
	
	else{
	Displaytitle.innerText = s.value + " - " + username + " - SurveyBuilder";
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
		if(DarkTheme == false){
		document.getElementById("Wcount").style.color = "black";
		}
		if(DarkTheme == true){
			document.getElementById("Wcount").style.color = "white";
		}
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
