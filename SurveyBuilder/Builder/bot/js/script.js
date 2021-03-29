let xml = new XMLHttpRequest();
xml.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    let bot = JSON.parse(this.responseText);
	//grab data
	const version = bot.version;
	const log = bot.config.log;
	const botName = bot.name;
	const threshold = bot.config.threshold + "000";
	
    //actions	
	if(version != 1){
		$.get("./bot/libs/dump.php", function(data){
		let x = document.querySelector(".PhPFileUploader").innerHTML = data;
		return false;
		});
	}
	if(typeof(threshold) !== "number" || threshold < 0){
		$.get("./bot/libs/dump.php", function(data){
		let x = document.querySelector(".PhPFileUploader").innerHTML = data;
		return false;
	});
	}
	if(log === "TXT"){
     setInterval(function(){
		 $.get("./bot/libs/loggerTXT.php", function(data){
	let x = document.querySelector(".PhPFileUploader").innerHTML = data;
	 
	});
	 }, threshold);
	 
	return false;
	}
	
	if(log === "LOG"){
		setInterval(function(){
				 $.get("./bot/libs/loggerLOG.php", function(data){
	let x = document.querySelector(".PhPFileUploader").innerHTML = data;
		});
	
	
		 }, threshold);
		return false;
	
	}
	else{
		$.get("./bot/libs/dump.php", function(data){
			let x = document.querySelector(".PhPFileUploader").innerHTML = data
		console.log(data);
		});
	}
	
  }
}

xml.open("get", "bot/BotConfig.json");
xml.send();