$(document).ready(function(){

function dofirst()
{
box = document.getElementById('move');
box.addEventListener("dragstart",sD,false);
box.addEventListener("dragend",eD,false);
dropboxone = document.getElementById('opone');
dropboxone.addEventListener("dragenter",function(e){e.preventDefault();},false);
dropboxone.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxone.addEventListener("drop",rDone,false);
dropboxtwo = document.getElementById('optwo');
dropboxtwo.addEventListener("dragenter",function(e){e.preventDefault();},false);
dropboxtwo.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxtwo.addEventListener("drop",rDtwo,false);
dropboxthree = document.getElementById('opthree');
dropboxthree.addEventListener("dragenter",function(e){e.preventDefault();},false);
dropboxthree.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxthree.addEventListener("drop",rDthree,false);
dropboxfour = document.getElementById('opfour');
dropboxfour.addEventListener("dragenter",function(e){e.preventDefault();},false);
dropboxfour.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxfour.addEventListener("drop",rDfour,false);
}

function sD(e) {
	var code=document.getElementById('move').innerHTML;
	e.dataTransfer.setData('Text',code);
}

function eD(e) {
	var de="asdasd";
	p = e.target;
	p.innerHTML = de;
}

function rDone(e) {
//	e.preventDefault();
	dropboxone.innerHTML = e.dataTransfer.getData('Text');
}

function rDtwo(e) {
	e.preventDefault();
	dropboxtwo.innerHTML = e.dataTransfer.getData('Text');
}

function rDthree(e) {
	e.preventDefault();
	dropboxthree.innerHTML = e.dataTransfer.getData('Text');
}

function rDfour(e) {
	e.preventDefault();
	dropboxfour.innerHTML = e.dataTransfer.getData('Text');
}

//window.addEventListener("load",dofirst,false);
});
