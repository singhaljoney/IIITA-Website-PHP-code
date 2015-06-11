var xmlHttp;

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

function alldata(key)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/viewall.php?key="+key;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("internal_div").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function searchdata(key)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/searchdata.php?key="+key;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("internal_div").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function searchdata2(key,cat)
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

function adddata(key)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/adddata.php?key="+key;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("internal_div").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function updatdata(key)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/updatedata.php?key="+key;

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

function deletedata(key,cat)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/deletedata.php?key="+key+"&cat="+cat;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("internal_div").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}


function searchsite()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/search.php";

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
function telephone()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/telephone.php";

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
function site_data()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/sitedata.php";

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
function news()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/news.php";

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
function events()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/events.php";

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
function announcements()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/announcements.php";

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
function projects()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/projects.php";

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
function students()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/students.php";

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
function faculty()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/faculty.php";

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
function employees()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/employees.php";

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
function alumni()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/alumni.php";

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
function tender()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/tender.php";

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

function dirlinks()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/links.php";

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
function gallery()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/gallery.php";

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
function course()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/course.php";

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
function branch()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/branch.php";

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
function subjects()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/subjects.php";

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
function stu_course()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/stucourse.php";

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

}function fac_course()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/faccourse.php";

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
function usearch(keywords)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/usearch.php?keywords="+keywords;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("results").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}


function user_delete(uid)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax_files/userdel.php?uid="+uid;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("main").innerHTML=theresponse;
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
