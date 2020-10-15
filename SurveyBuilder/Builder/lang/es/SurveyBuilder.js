function togglesidebar(){document.getElementById("Sidebar").classList.toggle('active');}
function ShowcontactUpdate(){let x=document.getElementById("contact");if(x.hidden==false){x.hidden=true;}else{x.hidden=false;}
return false;}
function Publish(){let Cfirm=confirm("Are you sure you want to publish/ You cannot return unless you dont save it as this look.\n\nMake sure ever object is closed.\n");let u=document.getElementById("Editor-Control-Form");let v=document.getElementById("titleSave-btn");let w=document.getElementById("titleSave");let x=document.getElementById("Sidebar");let y=document.getElementById("Orgtitle");let z=document.getElementById("Lastest");let TitleCheck=document.getElementById("yourTitle");if(Cfirm==false){return false;}else if(TitleCheck.innerHTML=="Untitled - SurveyBuilder"){alert("Es necesario agregar un título antes de publicar");return false;}else{u.hidden=true;v.hidden=true;w.hidden=true;x.hidden=true;y.hidden=true;z.hidden=true;document.body.style.overflow="hidden";document.body.style.width="950px";}}
function Preview(){let check=document.getElementById("CheckPre");let t=document.getElementById("titleSave-btn");let w=document.getElementById("titleSave");let x=document.getElementById("Sidebar");let y=document.getElementById("Orgtitle");let z=document.getElementById("Lastest");let f=document.getElementById("wcc");let deploy=document.getElementById("Insert-Object");if(check.checked==true){t.hidden=true;w.hidden=true;x.hidden=true;y.hidden=true;z.hidden=true;f.hidden=true;deploy.contentEditable="false";}else{t.hidden=false;w.hidden=false;x.hidden=false;y.hidden=false;z.hidden=false;f.hidden=false;deploy.contentEditable="true";}}
function Update(){let d=new Date();Month=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];M=Month[d.getMonth()];D=d.getDate();Y=d.getFullYear();Hrs=d.getHours();Min=d.getMinutes();Sec=d.getSeconds();let en="AM";let timeZone=Intl.DateTimeFormat().resolvedOptions().timeZone;if(Hrs>=12){en="PM";}
if(Hrs>12){Hrs=Hrs-12;}
if(Hrs==0){Hrs=12;}
if(Hrs<10){Hrs="0"+Hrs;}
if(Min<10){Min="0"+Min;}
if(Sec<10){Sec="0"+Sec;}
let X=document.getElementById("Timedate");X.innerHTML=M+"/"+D+"/"+Y+" "+Hrs+":"+Min+":"+Sec+" "+en+"::"+timeZone;setTimeout(Update,0);}
let showingSorceCode=false;let isInEditMode=true;function EditMode(){richTextField.document.designMode='On';}
function execCmd(command){richTextField.document.execCommand(command,false,null);}
function execCommandWithArg(command,arg){richTextField.document.execCommand(command,false,arg);}
function toggleSource(){if(showingSorceCode){richTextField.document.getElementsByTagName('body')[0].innerHTML=richTextField.document.getElementsByTagName('body')[0].textContent;document.getElementById("ShowingSorce").innerHTML="";showingSorceCode=false;}else{richTextField.document.getElementsByTagName('body')[0].textContent=richTextField.document.getElementsByTagName('body')[0].innerHTML;document.getElementById("ShowingSorce").innerHTML="Showing Source";showingSorceCode=true;}}
function toggleEdit(){if(isInEditMode){document.getElementById("Preview").innerHTML="Previsualizar";richTextField.document.designMode='Off';isInEditMode=false;}else{document.getElementById("Preview").innerHTML="";richTextField.document.designMode='On';isInEditMode=true;}}
function Pub(){var Question=document.getElementById("Question-Value").value;var Set=document.getElementById("Question");if(Question==""){Set.innerHTML="Pregunta";}else{Set.innerHTML=Question;}
document.getElementById("Editor").hidden=true;}
function GetFrame(){var x=prompt("Introduzca una URL de inserción [Nota: fabricante seguro de que es apropiado]","");if(x!=null){var y=prompt("Introduzca un tamaño de anchura","");}
if(y!=null){var z=prompt("Introduzca un tamaño de altura","");}
if(z!=null){var VideoURL="<iframe id='Video' style='border:none;margin:0;' src=' "+x+"'"+" "+"width=' "+y+"'"+" "+"height=' "+z+"'"+"></iframe>";execCommandWithArg('insertHTML',VideoURL);}else{return false;}}
function InsertImage(){var x=prompt("Introducir URL de imagen","");if(x!=null){var y=prompt("Introducir anchura","");}
if(y!=null){var z=prompt("Introducir altura","");}
if(z!=null){var a=prompt("Introduzca una alt","");}
if(a!=null){var ImageURL="<img id='Image' src=' "+x+"'"+" "+"width=' "+y+"'"+" "+"height=' "+z+"'"+" "+"alt=' "+a+"'"+"/>";execCommandWithArg('insertHTML',ImageURL);}else{return false;}}
function InsertComment(){var x=prompt('Enter a Comment code','Enter Text')
var GetCommentText="<p style='color:green;' id='Comment' title='comment'>[--"+x+"--]</p>";execCommandWithArg('insertHTML',GetCommentText);}
function Finished(){var x=confirm("¿Está seguro de que desea finalizar la edición de texto? No podrás volver al modo de edición");if(x==true){var editTools=document.getElementById("Editing-container");var line=document.getElementById("Seperator");editTools.hidden=true;line.hidden=true;richTextField.document.designMode="Off";var op=document.getElementById("Field");op.style.top="-100%";op.style.height="105%";}else{return false;}}
function textMessage(){if(richTextField.document.innerHTML!=""){return"Are you you sure you want to leave? All data will be lost.";}}
function AddStyle(){execCommandWithArg("insertHTML","<style></style>");alert("Se ha añadido estilo CSS personalizado vaya al botón de fuente de vista para empezar a personalizar");}
function SpellCheck(){var x=richTextField.document.body;if(x.spellcheck==false){x.spellcheck=true;alert("SpellCheck is On");}else{x.spellcheck=false;alert("SpellCheck is off");}}
function ChageColor(){var x=document.getElementById("color").value;document.body.style.backgroundColor=x;}
function ChageTColor(){document.getElementById("yourTitle").style.color=document.getElementById("Tcolor").value;}
function OpenStyle(){var x=document.getElementById("Style-clipboard");if(x.hidden==true){x.hidden=false;}else{x.hidden=true;}
return false;}
function prop(){var x=document.getElementById("PreCon");if(x.hidden==true){x.hidden=false;}else{x.hidden=true;}}
function Save(){var Data=document.getElementById("Body-Container").innerHTML;localStorage.setItem("Data",Data);var title=document.getElementById("UserTitle").innerHTML;localStorage.setItem("Title",title);var background=document.body.style.backgroundColor;localStorage.setItem("BgColor",background);console.log("Ahorro completo");alert("Ahorro completo");}
function Load(){document.getElementById("Body-Container").innerHTML=localStorage.getItem("Data");document.body.style.backgroundColor=localStorage.getItem("BgColor");document.getElementById("UserTitle").innerHTML=localStorage.getItem("Title");console.log("Loaded Compleate");alert("Load Compleate");}
function DeleteData(){let setup=confirm("¿Está seguro de que desea eliminar todos los datos?");if(setup==true){localStorage.setItem("Data","");localStorage.setItem("Title","");localStorage.setItem("BgColor","");alert("All data was erased.");}else{alert("Data cancelled.");return false;}}