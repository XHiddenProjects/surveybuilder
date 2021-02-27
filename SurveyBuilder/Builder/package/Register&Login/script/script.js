setInterval(function(){
	let fname = document.querySelector("#fName");
	let lname = document.querySelector("#lName");
	let email = document.querySelector("#email");
	let user = document.querySelector("#user");
	let psw = document.querySelector("#psw");
	let confirmpsw = document.querySelector("#Confirmpsw");
	let checkbox = document.querySelector("#robot");
	let submit = document.querySelector(".submitbtn");
	if(fname.value !== "" && lname.value !== "" && user.value !== "" && email.value !== "" && psw.value !== "" && confirmpsw.value !== "" && checkbox.checked !== false){
		if(psw.value.length >= 8){
		if(psw.value === confirmpsw.value){
			submit.disabled = false;
		}	else{
			submit.disabled = true;
		}
		}else{
			submit.disabled = true;
		}
		
		
	}
	else{
		submit.disabled = true;
	}
	
}, 0);