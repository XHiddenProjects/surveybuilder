setTimeout(runScript, 0);
function runScript(){
	document.querySelector(".Loginstorage").innerHTML = "";
	let refrence = prompt("What would you like to do?\n\nRegister or Login");
	if(refrence === "Register" || refrence === "register"){
	    let frame = document.createElement("IFRAME");
		frame.src = "../Builder/package/Register&Login/Register.html";
		frame.style.width = "950px";
		frame.style.height = "620px";
		frame.style.position = "absolute";
		frame.style.top = "10%";
		frame.style.left = "25%";
		frame.style.zIndex = "4";
		frame.className = "RegisterFrame";
		document.body.appendChild(frame);
		alert("You have 1 min to fill out form");
		setTimeout(function(){
			document.querySelector(".RegisterFrame").remove();
		}, 60000); //Change time to whatever you want (in milliseconds)
		return false;
	}
	if(refrence === "Login" || refrence === "login"){
		   let frame = document.createElement("IFRAME");
		frame.src = "../Builder/package/Register&Login/login.html";
		frame.style.width = "950px";
		frame.style.height = "620px";
		frame.style.position = "absolute";
		frame.style.top = "10%";
		frame.style.left = "25%";
		frame.style.zIndex = "4";
		frame.className = "LoginFrame";
		document.body.appendChild(frame);
		alert("You have 1 min to fill out form");
		setTimeout(function(){
			document.querySelector(".LoginFrame").remove();
		}, 60000); //Change time to whatever you want (in milliseconds)
		return false;
		return false;
	}
	if(refrence === "" || refrence === null){
		alert("Please select a valid forum");
		setTimeout(runScript, 0);
		return false;
	}
	if(refrence != "Login" || refrence != "login" || refrence != "Register" || refrence != "register"){
		alert("Please select a valid selector");
		setTimeout(runScript, 0);
		return false;
	}
};