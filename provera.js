var xmlHttp
function proveri(str)
{
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null){
 alert ("Browser does not support HTTP Request")
 return
}
 
var url="provera.php"
url=url+"?proizvodID="+str
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged(){ 

if (xmlHttp.readyState==4){
	
 	if (xmlHttp.responseText=="0"){
		document.getElementById("ajax").innerHTML="Ovaj proizvod je već registrovan!!!";
		document.getElementById("proizvodID").focus();
	} else {
				document.getElementById("ajax").innerHTML="Broj proizvoda je dostupan za registraciju!";
	}

}
}
function GetXmlHttpObject(){
var xmlHttp=null;
try {
 
 xmlHttp=new XMLHttpRequest();
 } catch (e) {
 //Internet Explorer
 try {
  
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }

return xmlHttp;
}

