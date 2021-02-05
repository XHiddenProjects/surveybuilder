
function Test(sel){
this.sel = sel
let head = document.querySelectorAll(sel);
for(i=0;i<head.length;i++){
head[i].className = "Heading";
}
}