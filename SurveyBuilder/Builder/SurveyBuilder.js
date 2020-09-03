function togglesidebar(){document.getElementById("Sidebar").classList.toggle('active');}
function ShowcontactUpdate(){var x=document.getElementById("contact");if(x.hidden==false){x.hidden=true;}
else{x.hidden=false;}
return false;}
function Update(){var d=new Date();Month=["January","Febuary","March","April","May","June","July","August","September","October","November","December"];M=Month[d.getMonth()];D=d.getDate();Y=d.getFullYear();Hrs=d.getHours();Min=d.getMinutes();Sec=d.getSeconds();var en="AM"
if(Hrs>=12){en="PM";}
if(Hrs>12){Hrs=Hrs-12;}
if(Hrs==0){Hrs=12;}
if(Hrs<10){Hrs="0"+Hrs;}
if(Min<10){Min="0"+Min;}
if(Sec<10){Sec="0"+Sec;}
var X=document.getElementById("Timedate");X.innerHTML=M+"/"+D+"/"+Y+" "+Hrs+":"+Min+":"+Sec+" "+en;setTimeout(Update,0);}
var showingSorceCode=false;var isInEditMode=true;function EditMode(){richTextField.document.designMode='On';}
function execCmd(command){richTextField.document.execCommand(command,false,null);}
function execCommandWithArg(command,arg){richTextField.document.execCommand(command,false,arg);}
function toggleSource(){if(showingSorceCode){richTextField.document.getElementsByTagName('body')[0].innerHTML=richTextField.document.getElementsByTagName('body')[0].textContent;document.getElementById("ShowingSorce").innerHTML="";showingSorceCode=false;}else{richTextField.document.getElementsByTagName('body')[0].textContent=richTextField.document.getElementsByTagName('body')[0].innerHTML;document.getElementById("ShowingSorce").innerHTML="Showing Source";showingSorceCode=true;}}
function toggleEdit(){if(isInEditMode){document.getElementById("Preview").innerHTML="Previewing";richTextField.document.designMode='Off';isInEditMode=false;}else{document.getElementById("Preview").innerHTML="";richTextField.document.designMode='On';isInEditMode=true;}}
function Pub(){var Question=document.getElementById("Question-Value").value;var Set=document.getElementById("Question");if(Question==""){Set.innerHTML="Question";}
else{Set.innerHTML=Question;}
document.getElementById("Editor").hidden=true;}
function GetFrame(){var x=prompt("Enter a embed URL [Note: maker sure it is appropriate]","");if(x!=null){var y=prompt("Enter a Width size","");}
if(y!=null){var z=prompt("Enter a Height size","");}
if(z!=null){var VideoURL="<iframe id='Video' style='border:none;margin:0;' src=' "+x+"'"+" "+"width=' "+y+"'"+" "+"height=' "+z+"'"+"></iframe>";execCommandWithArg('insertHTML',VideoURL);}
else{return false;}}
function InsertImage(){var x=prompt("Enter Image URL","");if(x!=null){var y=prompt("Enter Width","");}
if(y!=null){var z=prompt("Enter Height","");}
if(z!=null){var a=prompt("Enter a alt","");}
if(a!=null){var ImageURL="<img id='Image' src=' "+x+"'"+" "+"width=' "+y+"'"+" "+"height=' "+z+"'"+" "+"alt=' "+a+"'"+"/>";execCommandWithArg('insertHTML',ImageURL);}
else{return false;}}
function InsertComment(){var x=prompt('Enter a Comment code','Enter Text')
var GetCommentText="<p style='color:green;' id='Comment' title='comment'>[--"+x+"--]</p>";execCommandWithArg('insertHTML',GetCommentText);}
function Finished(){var x=confirm("Are you sure you want to Finish Text editing? You won't able to return editing mode");if(x==true){var editTools=document.getElementById("Editing-container");var line=document.getElementById("Seperator");editTools.hidden=true;line.hidden=true;richTextField.document.designMode="Off";var op=document.getElementById("Field");op.style.top="-100%";op.style.height="105%";}
else{return false;}}
function textMessage(){if(richTextField.document.innerHTML!=""){return"Are you you sure you want to leave? All data will be lost.";}}
function AddStyle(){execCommandWithArg("insertHTML","<style></style>");alert("Custom CSS Styling has been added go to the view source button to start customizing");}
function SpellCheck(){var x=richTextField.document.body;if(x.spellcheck==false){x.spellcheck=true;alert("SpellCheck is On");}
else{x.spellcheck=false;alert("SpellCheck is off");}}
function ChageColor(){var x=document.getElementById("color").value;document.body.style.backgroundColor=x;}
function ChageTColor(){document.getElementById("yourTitle").style.color=document.getElementById("Tcolor").value;}
function OpenStyle(){var x=document.getElementById("Style-clipboard");if(x.hidden==true){x.hidden=false;}else{x.hidden=true;}
return false;}
function prop(){var x=document.getElementById("PreCon");if(x.hidden==true){x.hidden=false;}
else{x.hidden=true;}}
function Preview(){var check=document.getElementById("CheckPre");var t=document.getElementById("titleSave-btn");var w=document.getElementById("titleSave");var x=document.getElementById("Sidebar");var y=document.getElementById("Orgtitle");var z=document.getElementById("Lastest");var f=document.getElementById("wcc");var deploy=document.getElementById("Insert-Object");if(check.checked==true){t.hidden=true;w.hidden=true;x.hidden=true;y.hidden=true;z.hidden=true;f.hidden=true;deploy.contentEditable="false";}
else{t.hidden=false;w.hidden=false;x.hidden=false;y.hidden=false;z.hidden=false;f.hidden=false;deploy.contentEditable="true";}}
function Publish(){var Cfirm=confirm("Are you sure you want to publish/ You cannot return unless you dont save it as this look.\n\nMake sure ever object is closed.\n");var u=document.getElementById("Editor-Control-Form");var v=document.getElementById("titleSave-btn");var w=document.getElementById("titleSave");var x=document.getElementById("Sidebar");var y=document.getElementById("Orgtitle");var z=document.getElementById("Lastest");var TitleCheck=document.getElementById("yourTitle");if(Cfirm==false){return false;}
else if(TitleCheck.innerHTML=="Untitled"){alert("You need to add a title before publishing");return false;}
else{u.hidden=true;v.hidden=true;w.hidden=true;x.hidden=true;y.hidden=true;z.hidden=true;document.body.style.overflow="hidden";document.body.style.width="950px";}}
function Save(){var Data=document.getElementById("Body-Container").innerHTML;localStorage.setItem("Data",Data);var title=document.getElementById("UserTitle").innerHTML;localStorage.setItem("Title",title);var background=document.body.style.backgroundColor;localStorage.setItem("BgColor",background);console.log("Saving Compleate");alert("Saving Compleate");}
function Load(){document.getElementById("Body-Container").innerHTML=localStorage.getItem("Data");document.body.style.backgroundColor=localStorage.getItem("BgColor");document.getElementById("UserTitle").innerHTML=localStorage.getItem("Title");console.log("Loaded Compleate");alert("Load Compleate");}
function DeleteData(){let setup=confirm("Are you sure you want to delete all data?");if(setup==true){localStorage.setItem("Data","");localStorage.setItem("Title","");localStorage.setItem("BgColor","");alert("All data was erased.");}
else{alert("Data cancelled.");return false;}}
document.cookie="License=SurveyBuilder license;expires=Fri, Dec 31 2021, 5:00:00 UTC; path=/";document.cookie="Supportive=IFrames, language, data, save, copyright;expires=Fri, Dec 31 2021, 5:00:00 UTC; path=/";function SetJson(){var FounderUser='{"name": "SurveyBuilder","location": "N/A","datapack": "File/current","username": "[Username]","version": "16.0.0","getuseronly": "False"}';var user=JSON.parse(FounderUser);console.log("%c---Data For SurveyBuilder---","color:green;")
console.log("Name: "+user.name);console.log("location: "+user.location);console.log("datapack: "+user.datapack);console.log("Username: "+user.username);console.log("Version: "+user.version);console.log("GetUsersOnly: "+user.getuseronly);}
setTimeout(SetJson,0);