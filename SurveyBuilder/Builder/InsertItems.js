/*Start section of Insert*/
/*Copyright my SurveyMaker*/

//Starting...

//Starting line:
let Loading = "--Starting status--"
console.log("%c" + Loading , "color:green;");
console.log("Starting...");
console.log("Loading files");
console.log("File Scanning");
console.log("Scanning complete");
console.log("Files are found");
console.log("Start Inserting");

/*Basic Items*/
//
//
/*Public*/
//Header
function InsertHeadings(){
	
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "Heading";
	
let hCount = prompt("Enter a number 1-6");

if(hCount == "1"){
	let Header1 = document.createElement("H1");
	Header1.innerHTML = "Enter text";
	insert.appendChild(Header1);
	document.getElementById("Insert-Object").appendChild(insert);

}
if(hCount == "2"){
	let Header2 = document.createElement("H2");
	Header2.innerHTML = "Enter text";
	insert.appendChild(Header2);
	document.getElementById("Insert-Object").appendChild(insert);
	
}
if(hCount == "3"){
	let Header3 = document.createElement("H3");
	Header3.innerHTML = "Enter text";
	insert.appendChild(Header3);
	document.getElementById("Insert-Object").appendChild(insert);
	
}
if(hCount == "4"){
	let Header4 = document.createElement("H4");
	Header4.innerHTML = "Enter text";
	insert.appendChild(Header4);
	document.getElementById("Insert-Object").appendChild(insert);
	
}
if(hCount == "5"){
	let Header5 = document.createElement("H5");
	Header5.innerHTML = "Enter text";
	insert.appendChild(Header5);
	document.getElementById("Insert-Object").appendChild(insert);
	
}
if(hCount == "6"){
	let Header6 = document.createElement("H6");
	Header6.innerHTML = "Enter text";
	insert.appendChild(Header6);
	document.getElementById("Insert-Object").appendChild(insert);
	
}

}
//Paragraph
function InsertPara(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "para";
	let p = document.createElement("P");
	p.innerHTML = "Enter Text";
	insert.appendChild(p);
	document.getElementById("Insert-Object").appendChild(insert);
	return false;
}
	


//Name
function InsertNames(){
	let insert = document.createElement("DIV");
	insert.title = "Name"; 
	let id = prompt("ID for this attribute");
	insert.id = id;
	insert.className = "Name";
	let required = prompt("Do you want to require this?\n\nYes or No");
	if(required == "Yes"){
		let midName = prompt("Do you want Middle name?\n\nYes or No");
		if(midName == "Yes"){
			insert.innerHTML = "<i class='fas fa-asterisk' style='color:red;'></i>First Name: <input type='text' placeholder='First Name' id='FirstName' name='FirstName' required='true'/><br/> <i class='fas fa-asterisk' style='color:red;'></i>Middle Name: <input type='text' placeholder='Middle Name' id='MName' name='MName' required='true'/><br/> <i class='fas fa-asterisk' style='color:red;'></i>Last Name: <input type='text' placeholder='Last name' id='LastName' name='LastName' required='true'/>";
		document.getElementById("Insert-Object").appendChild(insert);
		}
		if(midName == "No"){
		insert.innerHTML = "<i class='fas fa-asterisk' style='color:red;'></i>First Name: <input type='text' placeholder='First Name' id='FirstName' name='FirstName' required='true'/> <br/><i class='fas fa-asterisk' style='color:red;'></i>Last Name: <input type='text' placeholder='Last name' id='LastName' name='LastName' required='true'/>";
		document.getElementById("Insert-Object").appendChild(insert);
		}
	}
	if(required == "No"){
		let midName = prompt("Do you want Middle name?");
		if(midName == "Yes"){
			insert.innerHTML = "First Name: <input type='text' placeholder='First Name' id='FirstName' name='FirstName'/> <br/>Middle Name: <input type='text' placeholder='Middle Name' id='MName' name='MName'/><br/> Last Name: <input type='text' placeholder='Last name' id='LastName' name='LastName'/>";
		document.getElementById("Insert-Object").appendChild(insert);
		}
		if(midName == "No"){
		insert.innerHTML = "First Name: <input type='text' placeholder='First Name' id='FirstName' name='FirstName'/> <br/>Last Name: <input type='text' placeholder='Last name' id='LastName' name='LastName'/>";
		document.getElementById("Insert-Object").appendChild(insert);
		}
	}
}
//Email
function InsertEmailAddress(){
	let insert = document.createElement("DIV");
	insert.title = "Email Address";
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "Email";
	let required = prompt("Want to require this?\n\nYes or No");
	if(required == "Yes"){
			insert.innerHTML = "<i class='fas fa-asterisk' style='color:red;'></i> Email: <input type='email' placeholder='Email' id='email' name='email' required='true'/>";
	   document.getElementById("Insert-Object").appendChild(insert);
	   return false;
	}
	if(required == "No"){
		insert.innerHTML = "Email: <input type='email' id='email' name='email' placeholder='Email'/>";
		 document.getElementById("Insert-Object").appendChild(insert);
		 return false;
	}
}
//Address
function InsertAddress(){
	let insert = document.createElement("DIV");
	insert.title = "Address";
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "Address";
	let require = prompt("DO you want to Require this?\nYes or No", "");
	if(require == "Yes"){
		let street = "<i class='fas fa-asterisk' style='color:red;'></i> Street 1: <input type='text' placeholder='Street 1' id='Street' required='true'/>";
		let street2 = "Street 2: <input type='text' placeholder='Street 2' id='Street2'/>";
	    let City = "<i class='fas fa-asterisk' style='color:red;'></i> City: <input type='text' placeholder='City' id='City' required='true'/>";
	    let State = "<i class='fas fa-asterisk' style='color:red;'></i> State: <input type='text' placeholder='State' id='State' required='true'/>";
	    let Zip = "<i class='fas fa-asterisk' style='color:red;'></i> Zip Code: <input type='text' placeholder='Zip code' pattern='[0-9]{3,5}' id='Zip' required='true'/>";
	    let Country = "<i class='fas fa-asterisk' style='color:red;'></i> Country: <select id='countries-select' required='true'><option value='dnt' disabled='true'>[Do Not Touch]</option></select>";
		let allData = street + "<br>" + street2 + "<br>" + City + "<br>" + Zip + "<br>" + Country;
	insert.innerHTML = allData;
	document.getElementById("Insert-Object").appendChild(insert);
	
	
	var selects = document.getElementById("countries-select"),
	      arr = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Côte d'Ivoire", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", "Czechia (Czech Republic)", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (fmr. 'Swaziland')", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Holy See", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"];
		
		for(var i = 0; i < arr.length; i++){
			 var options = document.createElement("OPTION");
			 txt = document.createTextNode(arr[i]);
			 options.appendChild(txt);
			 options.setAttribute("value", arr[i]);
			 selects.insertBefore(options,selects.lastChild);
			 //console.log(Selects);
		 }
		 let setdisplay = prompt("Enter a number from 0-195\nUse 0 to set Default\n0 is at the top of the list");
		 if(setdisplay == null){
			 return false;
		 }
		 document.getElementById("countries-select").options[setdisplay].setAttribute("selected", "selected");
		 //document.getElementById("countries-select").options[196].disabled = true;
		 return false;
	}
	if(require == "No"){
		let street = "Street 1: <input type='text' placeholder='Street 1' id='Street' />";
		let street2 = "Street 2: <input type='text' placeholder='Street 2' id='Street2'/>";
	    let City = "City: <input type='text' placeholder='City' id='City' />";
	    let State = "State: <input type='text' placeholder='State' id='State' />";
	    let Zip = "Zip Code: <input type='text' placeholder='Zip code' pattern='[0-9]{3,5}' id='Zip'/>";
	    let Country = "Country: <select id='countries-select'><option value='dnt' disabled='true'>[Do Not Touch]</option></select>";
	   	let allData = street + "<br>" + street2 + "<br>" + City + "<br>" + Zip + "<br>" + Country;
	insert.innerHTML = allData;
	document.getElementById("Insert-Object").appendChild(insert);
	
	
	var selects = document.getElementById("countries-select"),
	      arr = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Côte d'Ivoire", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", "Czechia (Czech Republic)", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (fmr. 'Swaziland')", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Holy See", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"];
		
		for(var i = 0; i < arr.length; i++){
			 var options = document.createElement("OPTION");
			 txt = document.createTextNode(arr[i]);
			 options.appendChild(txt);
			 options.setAttribute("value", arr[i]);
			 selects.insertBefore(options,selects.lastChild);
			 //console.log(Selects);
		 }
		 let setdisplay = prompt("Enter a number from 0-195\nUse 0 to set Default\n0 is at the top of the list");
		 if(setdisplay == null){
			 return false;
		 }
		 document.getElementById("countries-select").options[setdisplay].setAttribute("selected", "selected");
		 //document.getElementById("countries-select").options[196].disabled = true;
		 return false;
	}
		 
		
		 
		 
	;

	
	}
//Phone
function InsertPhone(){
	let insert = document.createElement("DIV");
	insert.title = "Phone number";
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "Phone";
	let require = prompt("DO you want to require this?\n\nYes or No");
	if(require == "Yes"){
		insert.innerHTML = "<i class='fas fa-asterisk' style='color:red;'></i> Phone Number: <input type='tel' placeholder='+##(##)####-####' id='phoneNum' required='true' pattern='[\\+]\\d{2}[\\(]\\d{2}[\\)]\\d{4}[\\-]\\d{4}'/><br><i class='fas fa-asterisk' style='color:red;'></i> Area Code: <input type='text' placeholder='Area Code' required='true' pattern='[0-9]{3}'/>";
	document.getElementById("Insert-Object").appendChild(insert);
	}
	if(require == "No"){
		insert.innerHTML = "Phone Number: <input type='tel' placeholder='+##(##)####-####' id='phoneNum' pattern='[\\+]\\d{2}[\\(]\\d{2}[\\)]\\d{4}[\-]\\d{4}'/><br>Area Code: <input type='text' placeholder='Area Code' pattern='[0-9]{3}'/>";
	    document.getElementById("Insert-Object").appendChild(insert);
	}
	
}
//Date
function InsertDate(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "Date";
	let require = prompt("Want to require this?\nYes or No");
	if(require == "Yes"){
		let min = prompt('Enter a Min. date\nLeave it null to not have one\nFormat: yyyy-mm-dd');
		let max = prompt('Enter Max. date\nLeave is null to not have one\nFormat: yyyy-mm-dd');
		
		insert.innerHTML = "Enter Date: <input type='date' id='Date' required='true' max='" + max + "' min='" + min + "'/>";
		document.getElementById("Insert-Object").appendChild(insert);
	}
	if(require == "No"){
		let min = prompt('Enter a Min. date\nLeave it null to not have one\nFormat: yyyy-mm-dd');
		let max = prompt('Enter Max. date\nLeave is null to not have one\nFormat: yyyy-mm-dd');
		
		insert.innerHTML = "Enter Date: <input type='date' id='Date' max='" + max + "' min='" + min + "'/>";
		document.getElementById("Insert-Object").appendChild(insert);
	}
}


//Time
function InsertTime(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "Time";
	let require = prompt("Do you want to require this? Yes/No");
	if(require == "Yes"){
      let time = document.createElement("INPUT");
	  time.setAttribute("type", "time");
	  time.required = true;
	  insert.appendChild(time);
		 document.getElementById("Insert-Object").appendChild(insert);
		 return false;
	}
	if(require == "No"){
      let time = document.createElement("INPUT");
	  time.setAttribute("type", "time");
	  time.required = false;
	  insert.appendChild(time);
		 document.getElementById("Insert-Object").appendChild(insert);
		 return false;
	}
		 
		 
		 
	}
	//File-Uploader
		 function IntertFileUploader(){
			let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "input"; 
	let require = prompt("Do you want to require this? Yes/No");
	if(require == "Yes"){
		let file = document.createElement("INPUT");
		file.type = "file";
		file.id = "file";
		let accept = prompt("Enter a file acceptence: ex: image(video/audio)/* or .fileType", "");
		file.accept = accept;
		file.required = true;
		insert.appendChild(file);
	
		
		document.getElementById("Insert-Object").appendChild(insert);
		return false;
	}
	if(require == "No"){
		let file = document.createElement("INPUT");
		file.type = "file";
		file.id = "file";
		let accept = prompt("Enter a file acceptence: ex: image(video/audio)/* or .fileType", "");
		file.accept = accept;
		file.required = false;
		insert.appendChild(file);
		document.getElementById("Insert-Object").appendChild(insert);
		return false;
	}
		 }
//number
function InsertNumber(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "number"; 
	let require = prompt("Do you want to require this? Yes/No");
	if(require == "Yes"){
		let num = document.createElement("INPUT");
		num.type = "number";
		num.id = "Number";
		num.required = true;
		num.placeholder = "Enter Number";
		let min = prompt("Enter Min number");
		num.min = min;
		let max = prompt("Enter Max number");
		num.max = max;

		insert.appendChild(num);
		document.getElementById("Insert-Object").appendChild(insert);
		return false;
	}
	if(require == "No"){
		let num = document.createElement("INPUT");
		num.type = "number";
		num.id = "Number";
		num.required = false;
		num.placeholder = "Enter Number";
			let min = prompt("Enter Min number");
		if(typeof(min) != "number"){
			alert("Must enter a number");
			return false;
		}
		num.min = min;
		let max = prompt("Enter Max number");
		if(typeof(max) != "number"){
			alert("Must enter a number");
			return false;
		}
		num.max = max;
		insert.appendChild(num);
		document.getElementById("Insert-Object").appendChild(insert);
		return false;
	}
}
//TextEditor
function InsertTextEdit(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "RichTextEditor";
	let eframes = document.createElement("IFRAME");
	eframes.id = "RichTextEditorFrame";
	eframes.width = "837";
	eframes.height = "520";
	eframes.src = "./Elements/richtexteditor.html";
	insert.appendChild(eframes);
	document.getElementById("Insert-Object").appendChild(insert);
}
//Table
function InsertTable(){
	let insert1 = document.createElement("DIV");
	let conID = prompt("Enter Container ID");
	insert1.id = conID;
	insert1.className = "table-con";
	let insert = document.createElement("TABLE");
	let id = prompt("Enter Table ID");
	insert.id = id;
	insert.className = "table";
	
	let rows = prompt("How many rows do you want?\nMust be a int(number)");
	let tr1 = document.createElement("TR");
	  for(row=0; row<rows; row++){
		  
	  
	  let row = document.createElement("TH");
	  row.innerText = "text";
	   tr1.appendChild(row);
	  insert.appendChild(tr1);
	  
	  }
	  
	  let cells = prompt("How many cells. do you want?\nMust be a int(number)\n\nthis will autofill", rows);
	   let tr2 = document.createElement("TR");
	   
	    for(cell=0; cell<cells; cell++){
	
	  let cols = document.createElement("TD");
	 cols.innerHTML = "text";
	tr2.appendChild(cols);
	  insert.appendChild(tr2);
		}
		
		
		insert1.appendChild(insert);
		
		
		
		document.getElementById("Insert-Object").appendChild(insert1);
}

//qrcode

function  Insertqrcode(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "QRCode";
	let confirmAdd = confirm("Do you have a qr code image");
	if(confirmAdd == true){
	let texter = prompt("Link/file to a qrcode\n\n Must be a .png, .svg, or .EPS)", "");
	insert.innerHTML = "<img src='" + texter + "' alt='QRCode' width='150' height='150'/>";
	document.getElementById("Insert-Object").appendChild(insert);
	return false;
	}
	if(confirmAdd == false){
		window.open("https://www.the-qrcode-generator.com/");
		return false;
	}
	
}

//Social Media following
function InsertSocial(){
	let insert = document.createElement("DIV");
	let id = prompt('Enter ID');
	insert.id = id;
	insert.className = "SocialMedia";
	//Add Accounts
	let Facebook = prompt("Enter Facebook URL", "https://");
	if(Facebook == null){}
	let Twitter = prompt("Enter Twitter URL", "https://");
	if(Twitter == null){}
	let LinkedIn = prompt("Enter LinkedIn URL", "https://");
	if(LinkedIn == null){}
	let Google = prompt("Enter Google+ URL", "https://");
	if(Google == null){}
	let YouTube = prompt("Enter YouTube URL", "https://");
	if(YouTube == null){}
	let vimeo = prompt("Enter vimeo URL", "https://");
	if(vimeo == null){}
	let Instagram = prompt("Enter Instagram URL", "https://");
	if(Instagram == null){}
	let FourSquare = prompt("Enter FourSquare URL", "https://");
	if(FourSquare == null){}
	let Tumblr = prompt("Enter Tumblr URL", "https://");
	if(Tumblr == null){}
	let Pinterest = prompt("Enter Pinterest URL", "https://");
	if(Pinterest == null){}
	let StumbleUpon = prompt("Enter StumbleUpon URL", "https://")
	if(StumbleUpon == null){}
	let Digg = prompt("Enter Digg URL", "https://");
	if(Digg == null){}
	let reddit = prompt("Enter Reddit URL", "https://");
	if(reddit == null){}
	else{
	let allow = [ 
	"<a href='" + Facebook + "' target='_blank'><img src='https://lh3.googleusercontent.com/-zoplqNsQ_TA/TYHyqGSNGlI/AAAAAAAAE9Q/KlfRKVqHeP8/s1600/Facebook+icon+02.png'/></a>",	
    "<a href='" + Twitter + "' target='_blank'><img src='https://sdweg.files.wordpress.com/2016/09/l62697-new-twitter-logo-49466.png'/></a>",	   	
	"<a href='" + LinkedIn + "' target='_blank'><img src='https://cdn1.iconfinder.com/data/icons/logotypes/32/square-linkedin-512.png'/></a>",	   
	"<a href='" + Google + "' target='_blank'><img src='https://cdn57.androidauthority.net/wp-content/uploads/2018/12/Google-Plus-logo.jpg'/></a>",	   
    "<a href='" + YouTube + "' target='_blank'><img src='https://sarcomaalliance.org/wp-content/uploads/2019/03/youtube-digital-marketing-b-video-youtube-icon-5ab1be04a29682.840834451521597956666.jpg'/></a>",	   	
	"<a href='" + vimeo + "' target='_blank'><img src='https://th.bing.com/th/id/OIP.lrTM_LBj__cJMLQvxTCWeAHaHa?pid=Api&rs=1'></a>",	   
	"<a href='" + Instagram + "' target='_blank'><img src='https://daktronics.files.wordpress.com/2016/06/instagram_logo_2016-svg.png?w=1200'/></a>",	   
	"<a href='" + FourSquare + "' target='_blank'><img src='https://www.shareicon.net/data/2015/09/16/101980_foursquare_512x512.png'/></a>",	   
	"<a href='" + Tumblr + "' target='_blank'><img src='http://icons.iconarchive.com/icons/limav/flat-gradient-social/512/Tumblr-icon.png'/></a>",	   
	"<a href='" + Pinterest + "' target='_blank'><img src='https://cdn0.iconfinder.com/data/icons/Pinterest/Pinterest_Favicon.png'/></a>",	   
	"<a href='" + StumbleUpon + "' target='_blank'><img src='https://logonoid.com/images/stumbleupon-logo.png'/></a>",	   
	"<a href='" + Digg + "' target='_blank'><img src='https://cdn3.iconfinder.com/data/icons/social-1/100/digg-512.png'/></a>",
    "<a href='" + reddit + "' target='_blank'><img src='https://th.bing.com/th/id/OIP.OeceGPWbsENrkTpe9Pby6gHaHa?pid=Api&rs=1'/></a>"   
	
	]
	insert.innerHTML = allow;
	document.getElementById("Insert-Object").appendChild(insert);
	alert("Note - They one's that don't need to be there you can delete them.");
	return false;
	}
}
/*Spoiler
function insertSpoiler(){
	let insert = document.createElement("DIV");
	let id = prompt('Enter ID');
	insert.id = id;
	let display = prompt("Enter a visable text", "");
	let label = prompt("Label your Hidden Text\n(make sure it is not the same ID as anything else)", "");
	let hiddenTxt = prompt("Enter hidden Text", "");
	
	let scripts = "<script type='text/javascript'>function spoiler(){ let txt = document.getElementById('" + label + "'); if(txt.hidden == true){txt.hidden = false;}else{txt.hidden = true;}}</script>";
	
	insert.innerHTML = "<p>" + display + "</p><br><div id='" + label + "'>" + hiddenTxt + "</div>" + "<br><button type='button' onclick='spoiler()' id='spoilbtn'>Hide Spoiler</button>" ; 
	document.getElementById("Headers").appendChild(scripts);
	document.getElementById("Insert-Object").appendChild(insert);
}*/


/*Terms an Conditions*/
function TaC(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "TaC";
	let terms = prompt("Enter terms anc conditions URL", "https://");
	let label = prompt("Enter Text");
	let basicTxt = prompt("Enter a defult line\nEx: I agree to or I accept to", "");
	
	insert.innerHTML = "<label class='container'><input type='checkbox' required='true'/><span class='checkmark'></span></label>&nbsp;" + basicTxt + "&nbsp;<a href='" + terms + "' target='_blank'>" + label + "</a>";
    document.getElementById("Insert-Object").appendChild(insert);	
	
}
/*Audio*/
function InsertAudio(){
	let insert = document.createElement("DIV");
	let id = prompt("ID");
	insert.id = id;
	insert.className = "Audio";
	
	let url = prompt("Enter URL", "");
	//let type = prompt("Enter Audio type", "audio/mpeg");
	//Settings
	alert("Here is the settings for Audio");
	let autoplay = prompt("Allow Autoplay?\ntype a <boolean>");
	let controls = prompt("Allow controls?\ntype a <boolean>");
	let loop = prompt("Allow loop?\ntype a <boolean>");
	let preload = prompt("Allow Preload?\ntype a [auto, metadata, none]");
	
	let audio = document.createElement("AUDIO");
	audio.src = url;
	if(autoplay == "true"){
		audio.autoplay = true;
	}
	if(controls == "true"){
		audio.controls = true;
	}
	if(loop == "true"){
		audio.loop = true;
	}
	if(autoplay == "false"){
		audio.autoplay = false;
	}
	if(controls == "false"){
		audio.controls = false;
	}
	if(loop == "false"){
		audio.loop = false;
	}
	if(preload == "none"){
		audio.preload = "none";
	}
	if(preload == "metadata"){
		audio.preload = "metadata";
	}
	if(preload == "auto"){
		audio.preload = "auto";
	}
	
	/*let source = document.createElement("SOURCE");
	source.setAttribute("src", url);
	source.setAttribute("type", type);
	
	audio.appendChild(source);*/
	
	insert.appendChild(audio);
   document.getElementById("Insert-Object").appendChild(insert);	
	
	
}
//YouTube
function InsertYouTube(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "YouTube";
	//
	let youtube = prompt("Enter youtube embedded code\nEx: x6nCXqKYMok", "");
	let start = prompt("Enter the starting point of the video\n\nnumber(in seconds)... 0 means 0:00", "0");
	let autoplay = prompt("Enter Value for autoplay\n\n 0 or 1\n0 means no autoplay 1 means allow autoplay", "0");
	insert.innerHTML = "<iframe width='837' height='320' src='https://www.youtube.com/embed/" + youtube + "?start=" + start + "&autoplay=" + autoplay + "' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    document.getElementById("Insert-Object").appendChild(insert);	
}
/*Short Text*/
function InsertsText(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "input";
	let textbox = document.createElement("INPUT");
	textbox.setAttribute("type", "text");
	
	let name = prompt("Enter Name");
	textbox.setAttribute("name", name);
	textbox.id = name;
	
	
	let require = prompt("Do you want to require this?\nYes or No");
	if(require == "Yes"){
		textbox.required = true;
	}
	if(require == "No"){
		textbox.required = false;
	}
	
	let Placeholder = prompt("Enter Placeholder");
	textbox.placeholder = Placeholder;
	
	insert.appendChild(textbox);
	document.getElementById("Insert-Object").appendChild(insert);
}

/*Long text*/
function InsertTextArea(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "input";
	let textbox = document.createElement("TEXTAREA");
	
	
	let name = prompt("Enter Name");
	textbox.setAttribute("name", name);
	textbox.id = name;
	
	
	let require = prompt("Do you want to require this?\nYes or No");
	if(require == "Yes"){
		textbox.required = true;
	}
	if(require == "No"){
		textbox.required = false;
	}
	
	let Placeholder = prompt("Enter Placeholder");
	textbox.placeholder = Placeholder;
	
	let rows = prompt("Enter rows <int>");
	textbox.rows = rows;
	let cols = prompt("Enter cols <int>");
	textbox.cols = cols;
	
	insert.appendChild(textbox);
	document.getElementById("Insert-Object").appendChild(insert);	
	
}
/*Radio*/
function InsertRadios(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "input";
	
	var loopRadio = setInterval(function(){
	let Radio = document.createElement("INPUT");
	let texts = document.createElement("SPAN");
	let breaks = document.createElement("BR");
	Radio.setAttribute("type", "radio");
	
	let name = prompt("Enter Name\n Make sure you latch it to the same Radio.");
	Radio.setAttribute("name", name);
	
	let label = prompt("Enter Label");
	texts.innerHTML = label;
	
	let selector = prompt("You want to add more?\nYes or No");
	if(selector == "No"){
		let require = prompt("Do you want to require this?\nYes or No");
		if(require == "Yes"){
			Radio.required = true;
		}
		if(require == "No"){
			Radio.required = false;
		}
	insert.appendChild(Radio);
	insert.appendChild(texts);
	insert.appendChild(breaks);
    document.getElementById("Insert-Object").appendChild(insert);	
	clearInterval(loopRadio);
	return false;
	}
	if(selector == "Yes"){
	insert.appendChild(Radio);
	insert.appendChild(texts);
	insert.appendChild(breaks);
	}
	}, 0);
	
}
/*Checkbox*/
function InsertCheckboxs(){
		let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "input";
	
	var loopCheck = setInterval(function(){
	let Checks = document.createElement("INPUT");
	let texts = document.createElement("SPAN");
	let breaks = document.createElement("BR");
	Checks.setAttribute("type", "checkbox");
	
	let name = prompt("Enter Name");
	Checks.setAttribute("name", name);
	
	let label = prompt("Enter Label");
	texts.innerHTML = label;
	
	let selector = prompt("You want to add more?\nYes or No");
	if(selector == "No"){
		let require = prompt("Do you want to require this?\nYes or No");
		if(require == "Yes"){
			Checks.required = true;
		}
		if(require == "No"){
			Checks.required = false;
		}
	insert.appendChild(Checks);
	insert.appendChild(texts);
	insert.appendChild(breaks);
    document.getElementById("Insert-Object").appendChild(insert);	
	clearInterval(loopCheck);
	return false;
	}
	if(selector == "Yes"){
		let require = prompt("Do you want to require this?\nYes or No");
		if(require == "Yes"){
			Checks.required = true;
		}
		if(require == "No"){
			Checks.required = false;
		}
	insert.appendChild(Checks);
	insert.appendChild(texts);
	insert.appendChild(breaks);
	}
	}, 0);	
}
/*Dropdown*/
function InsertDropdown(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "input";
	let selector = document.createElement("SELECT");
	let require = prompt("Do you want to require this?\nYes or No");
	if(require == "Yes"){
		selector.required = true;
	}
	if(require == "No"){
		selector.required = false;
	}
	let name = prompt("Enter a Name");
	selector.name = name;
	/*let Dopt = prompt("Enter a default text", "--Select--");
	let defaultOpt = document.createElement("OPTION");
	insert.appendChild(defaultOpt);*/
	var loop = setInterval(function(){
		
		let options = document.createElement("OPTION");
		let label = prompt("Add Label for Option");
		options.innerHTML = label;
		options.value = label;
		let add = prompt("Do you want to add more?\nYes or No");
		if(add == "Yes"){
			selector.appendChild(options);
		insert.appendChild(selector);
		}
		if(add == "No"){
		selector.appendChild(options);
		insert.appendChild(selector);
		
		document.getElementById("Insert-Object").appendChild(insert);
		clearInterval(loop);
		return false;
		}
		
	}, 0);
	
}
/*Images*/
function InsertImages(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter id");
	insert.id = id;
	insert.className = "input";
	let Img = document.createElement("IMG");
	let URL = prompt("Enter URL/Data:///");
	Img.src = URL;
	let width = prompt("Enter width\n<value>", "120");
	Img.width = width;
	let height = prompt("Enter height\n<value>", "120");
	Img.height = height;
	let alt = prompt("Enter Title");
	Img.title = alt;
	Img.alt = alt;
	insert.appendChild(Img);
	document.getElementById("Insert-Object").appendChild(insert);
}


/*Database*/
function CreateData(){
window.open("./db/AddDatabase.php", "", "width=320", "height=320");	
}
function EditData(){
	window.open("./db/EditDatabase.php", "", "width=320", "height=320");	
}
/*Delete attribute*/

//Insert IDS

function deleteElements(){
	let IDs = document.getElementById("ID").value;
	if(IDs == ""){
		alert("You must enter an ID");
		return false;
	}
	
	let con = confirm("Are you sure you want to delete this?");
	if(con == true){
	document.getElementById(IDs).hidden = true;
	document.getElementById("ID").value = "";
	
	//document.getElementById("Insert-Object").removeChild(IDs);
	//event.preventDefault();
	return false;
	}
	else{
		return false;
	}

}
/*CSS*/
function CSSInsert(){
	document.getElementById("customCSS").innerHTML = document.getElementById("cssFormat").value;
}
/*Js*/
function JSInsert(){
	//document.getElementById("customScript").innerHTML = 
	let scripts = document.createElement("SCRIPT");
	let texts = document.getElementById("jsFormat").value;
	scripts.innerHTML = texts;
	scripts.type = "text/javascript";
	document.getElementById("custom-scripts").appendChild(scripts);
}
/*Addon's*/
function AddonInsert(){
	let type = prompt("Enter CSS/JS");
	if(type == "CSS"){
		let css = document.createElement("LINK");
		css.rel = "styleSheet";
		css.type = "text/css";
		let url = prompt("Enter URL", "");
		css.href = url;
		document.getElementById("custom-addons").appendChild(css);
	}
	if(type == "JS"){
			let js = document.createElement("SCRIPT");
		js.type = "text/javascript";
		let url = prompt("Enter URL", "");
		js.src = url;
		let crossorigin = prompt("Enter crossorigin", "anonymous");
		js.setAttribute("crossorigin",crossorigin);
		document.getElementById("custom-addons").appendChild(js);	
	}
	
}

/*Form edit*/
function Formset(){
	let x = document.getElementById("formmethod");
	if(x.selectedIndex == "0"){
		document.getElementById("Editors-Form").setAttribute("method", "post");
	}
	if(x.selectedIndex == "1"){
		document.getElementById("Editors-Form").setAttribute("method", "get");
	}
	
}
function ActionForm(){
	let x = document.getElementById("Formaction").value;
	document.getElementById("Editors-Form").action = x;
}
function SubmitForm(){
	let x = document.getElementById("Formsubmit").value;
	document.getElementById("Editors-Form").setAttribute("onsubmit", x);
}
/*Plugins*/
function InsertPlugin(event){
	let x = document.createElement("DIV");
	let id = prompt("Enter ID");
	x.id = id;
	x.className = "Plugin";
	document.getElementById("Insert-Object").appendChild(x);
	let input = event.target;
	
	let reader = new FileReader();
	 reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById(id);
      output.innerHTML = dataURL;
    };
    reader.readAsText(input.files[0]);
  }
  
  

//Submit button
function InsertSubBtn(){
	let insert = document.createElement("DIV");
	id = prompt("Enter ID");
	insert.id = id;
	insert.className = "input";
	let btn = document.createElement("INPUT");
	btn.type = "submit";
	let texts = prompt("Enter text", "");
	if(texts == null){
		texts = "Submit";
	}else{
	btn.value = texts;
	insert.appendChild(btn);
	document.getElementById("Insert-Object").appendChild(insert);
	}
}

//Payments
function InsertPayPal(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "payments";
	let ifrm = document.createElement("IFRAME");
	let links = prompt("Enter PayPal URL", "https://www.paypal.me/");
	ifrm.src = links;
	ifrm.width = "837";
	ifrm.height = "320";
	
	insert.appendChild(ifrm);
	document.getElementById("Insert-Object").appendChild(insert);
}
function InsertStripe(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "payments";
	let ifrm = document.createElement("IFRAME");
	let links = prompt("Enter Stripe URL", "https://checkout.stripe.com/");
	ifrm.src = links;
	ifrm.width = "837";
	ifrm.height = "320";
	
	insert.appendChild(ifrm);
	document.getElementById("Insert-Object").appendChild(insert);
}

//IframeEmbeder
function InsertIframeEmbeder(){
	let insert = document.createElement("DIV");
	let id = prompt("Enter ID");
	insert.id = id;
	insert.className = "Widgets";
	let ifrm = document.createElement("IFRAME");
	let links = prompt("Enter File/URL", "");
	ifrm.src = links;
	ifrm.width = "837";
	ifrm.height = "320";
	insert.appendChild(ifrm);
	document.getElementById("Insert-Object").appendChild(insert);
}
