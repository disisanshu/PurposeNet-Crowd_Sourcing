function dofirst()
{
box = document.getElementById('move');
box.addEventListener("dragstart",sD,false);
box.addEventListener("dragend",eD,false);
dropboxone = document.getElementById('opone');
dropboxone.addEventListener("dragenter",function(e){e.preventDefault();dropboxone.style.background="White";dropboxone.style.color='rgb(0,34,102)';},false);
dropboxone.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxone.addEventListener("dragleave",function(e){e.preventDefault();dropboxone.style.background="rgb(0,34,102)";dropboxone.style.color="White";},false);
dropboxone.addEventListener("drop",rDone,false);
dropboxtwo = document.getElementById('optwo');
dropboxtwo.addEventListener("dragenter",function(e){e.preventDefault();dropboxtwo.style.background="White";dropboxtwo.style.color='rgb(0,34,102)';},false);
dropboxtwo.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxtwo.addEventListener("dragleave",function(e){e.preventDefault();dropboxtwo.style.background="rgb(0,34,102)";dropboxtwo.style.color="White";},false);
dropboxtwo.addEventListener("drop",rDtwo,false);
dropboxthree = document.getElementById('opthree');
dropboxthree.addEventListener("dragenter",function(e){e.preventDefault();dropboxthree.style.background="White";dropboxthree.style.color='rgb(0,34,102)';},false);
dropboxthree.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxthree.addEventListener("dragleave",function(e){e.preventDefault();dropboxthree.style.background="rgb(0,34,102)";dropboxthree.style.color="White";},false);
dropboxthree.addEventListener("drop",rDthree,false);
dropboxfour = document.getElementById('opfour');
dropboxfour.addEventListener("dragenter",function(e){e.preventDefault();dropboxfour.style.background="White";dropboxfour.style.color='rgb(0,34,102)';},false);
dropboxfour.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxfour.addEventListener("dragleave",function(e){e.preventDefault();dropboxfour.style.background="rgb(0,34,102)";dropboxfour.style.color="White";},false);
dropboxfour.addEventListener("drop",rDfour,false);
dropboxfive = document.getElementById('opfive');
dropboxfive.addEventListener("dragenter",function(e){e.preventDefault();dropboxfive.style.background="White";dropboxfive.style.color='rgb(0,34,102)';},false);
dropboxfive.addEventListener("dragover",function(e){e.preventDefault();},false);
dropboxfive.addEventListener("dragleave",function(e){e.preventDefault();dropboxfive.style.background="rgb(0,34,102)";dropboxfive.style.color="White";},false);
dropboxfive.addEventListener("drop",rDfive,false);
}

function sD(e) {
	var code=document.getElementById('move').innerHTML;
	e.dataTransfer.setData('Text',code);
}

function eD(e) {
	var de=document.getElementById('move').innerHTML;
	p = e.target;
	p.innerHTML = de;
}

function rDone(e) {
	e.preventDefault();
	dropboxone.innerHTML = e.dataTransfer.getData('Text');
	var awesomeness = dropboxone.innerHTML;
//	alert(awesomeness);
	var k=document.getElementById('main').innerHTML;
//	alert(k);
	window.location="ajax.php?initial="+awesomeness+"&fnal=coreComponent"+"&main="+k;
}

function rDtwo(e) {
	e.preventDefault();
	dropboxtwo.innerHTML = e.dataTransfer.getData('Text');
	var awesomeness = dropboxtwo.innerHTML;
	var k=document.getElementById('main').innerHTML;
//	alert(awesomeness);
//	alert(k);
	window.location="ajax.php?initial="+awesomeness+"&fnal=purposeServingAccessory"+"&main="+k;
}

function rDthree(e) {
	e.preventDefault();
	dropboxthree.innerHTML = e.dataTransfer.getData('Text');
	var awesomeness = dropboxthree.innerHTML;
	var k=document.getElementById('main').innerHTML;
//	alert(awesomeness);
//	alert(k);
	window.location="ajax.php?initial="+awesomeness+"&fnal=nonPurposeServingAccessory"+"&main="+k;
}

function rDfour(e) {
	e.preventDefault();
	dropboxfour.innerHTML = e.dataTransfer.getData('Text');
	var awesomeness = dropboxfour.innerHTML;
	var k=document.getElementById('main').innerHTML;
//	alert(awesomeness);
//	alert(k);
	window.location="ajax.php?initial="+awesomeness+"&fnal=nAccessory"+"&main="+k;
}

function rDfive(e) {
	e.preventDefault();
	dropboxfive.innerHTML = e.dataTransfer.getData('Text');
	var awesomeness = dropboxfive.innerHTML;
	var k=document.getElementById('main').innerHTML;
//	alert(k);
	window.location="ajax.php?initial="+awesomeness+"&fnal=subType"+"&main="+k;
}

window.addEventListener("load",dofirst,false);
