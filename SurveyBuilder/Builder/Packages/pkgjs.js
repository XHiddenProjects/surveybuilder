/*install*/ 
//testpackage
function installtestpackage(){
	document.querySelector(".Install_bar").hidden = false;
	let installBar = setInterval(function(){
		 let bar = document.querySelector(".progress_install");
		 let val = document.querySelector(".install_data_value");
		
		
		bar.value = bar.value + 1;
		val.innerHTML = bar.value + "%";
	     
		if(bar.value >= 100){
				Push.create("SurveyBuilder", {
    body: "Package installed",
    icon: '/SurveyBuilder/images/icon/favicon.png',
    timeout: 3000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
			window.open("./Packages/uploadpkg.php", "width=320", "heigh=150");
			bar.value = 0;
			val.innerHTML = 0 + "%";
			document.querySelector(".Install_bar").hidden = true;
				setTimeout(function(){
				window.location.reload();
			}, 2000);
			clearInterval(installBar);
			
		}
		
	  
	}, 1000);
}





/*uninstall*/
//testpackage
function unistalltestpackage(){
	document.querySelector(".uninstall_bar").hidden = false;
	let installBar = setInterval(function(){
		 let bar = document.querySelector(".progress_uninstall");
		 let val = document.querySelector(".uninstall_data_value");
		
		
		bar.value = bar.value + 1;
		val.innerHTML = bar.value + "%";
	     
		if(bar.value >= 100){
			Push.create("SurveyBuilder", {
    body: "Package uninstalled",
    icon: '/SurveyBuilder/images/icon/favicon.png',
    timeout: 3000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
			window.open("./Packages/uninstallpkg.php", "width=320", "heigh=150");
			bar.value = 0;
			val.innerHTML = 0 + "%";
			document.querySelector(".uninstall_bar").hidden = true;
			setTimeout(function(){
				window.location.reload();
			}, 2000);
			clearInterval(installBar);
			
		}
		
	  
	}, 1000);

}


/*setup*/
//testpackage
$(function(){
	$(".pkg-setup").click(function(){
			let scriptCode = "&lt;script src='./Packages/libs/testpackage/v0.0.1/testpackage.js' type='text/javascript'&gt;&lt;/script&gt;";
	let decodeCode = htmlDecode(scriptCode);
	prompt("copy and paste code into this source code", decodeCode);
	
	});

});

//decoder
function htmlDecode(value) {
        return $("<textarea/>").html(value).text();
      }
	  
	 