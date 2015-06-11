var xmlHttp;

function searchtele(key)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/searchtele.php?key="+key;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("result").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function searchkey(key,cat)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/searchsite.php?key="+key+"&cat="+cat;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("result").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}
function searchprojects(key,cat)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/searchprojects.php?key="+key+"&cat="+cat;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("result").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function instidata(keywords)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/institute_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function admindata(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/administration_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function admindata(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/administration_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function admindata(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/administration_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}


function studentdata(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/student_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}


function researchdata(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/research_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function rtidata(keywords)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 
var url="ajax_files/rti_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function telephonedata(keywords)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 
var url="ajax_files/telephone_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function tendersdata(keywords)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 
var url="ajax_files/tenders_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function admindata(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/administration_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function academicdata(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/academic_data.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main_content").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
