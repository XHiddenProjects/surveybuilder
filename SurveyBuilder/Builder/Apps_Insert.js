/*Apps*/
  function Gmaps(){
	  let x = document.createElement("DIV");
	  let id = prompt("Enter ID");
	  x.id = id;
	  x.className = "Apps";
	  x.className += " Gmap-app";
	  let fRam = document.createElement("IFRAME");
	  fRam.src = ".\\Apps\\appdata\\GoogleMaps.html";
	  fRam.width = "837";
	  fRam.height = "520";
	  x.appendChild(fRam);
	  document.getElementById("Insert-Object").appendChild(x);
  }
   function RoboChat(){
	  let x = document.createElement("DIV");
	  let id = prompt("Enter ID");
	  x.id = id;
	  x.className = "Apps";
	  x.className += " RoboChat-app";
	  let fRam = document.createElement("IFRAME");
	  fRam.src = ".\\Apps\\appdata\\RoboChat.html";
	  fRam.width = "837";
	  fRam.height = "520";
	  x.appendChild(fRam);
	  document.getElementById("Insert-Object").appendChild(x);
  }
  
  function eSign(){
	   let x = document.createElement("DIV");
	  let id = prompt("Enter ID");
	  x.id = id;
	  x.className = "Apps";
	  x.className += " eSign-app";
	  let fRam = document.createElement("IFRAME");
	  fRam.src = ".\\Apps\\appdata\\eSignature.html";
	 fRam.width = "837";
	  fRam.height = "520";
	 x.appendChild(fRam);
	  document.getElementById("Insert-Object").appendChild(x);
	  
  }
 function rec(){
	   let x = document.createElement("DIV");
	  let id = prompt("Enter ID");
	  x.id = id;
	  x.className = "Apps";
	  x.className += " rec-app";
	  let fRam = document.createElement("IFRAME");
	  fRam.src = ".\\Apps\\appdata\\recorder.html";
	  fRam.width = "837";
	  fRam.height = "520";
	 x.appendChild(fRam);
	  document.getElementById("Insert-Object").appendChild(x);
	  
  }