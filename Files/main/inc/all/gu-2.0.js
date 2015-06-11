/********************************************************************
* Name..............: gu.js
* Description.......: general javascript for www.gonzaga.edu
* Created by........: PVE
* Modified by.......: RHT
* Last Modified.....: 10/31/2008
********************************************************************/

$(document).ready(function() {
$('#news_tab img').hover(function() {
	$(this).attr("src","/Files/main/images/all/header_news_f2.gif");
	}, function() {
	$(this).attr("src","/Files/main/images/all/header_news_f1.gif");
});
$('#index_tab img').hover(function() {
	$(this).attr("src","/Files/main/images/all/header_index_f2.gif");
	}, function() {
	$(this).attr("src","/Files/main/images/all/header_index_f1.gif");
});
$('#quicklinks_tab img').hover(function() {
	$(this).attr("src","/Files/main/images/all/header_quicklinks_f2.gif");
	}, function() {
	$(this).attr("src","/Files/main/images/all/header_quicklinks_f1.gif");
});
$('#askspike_tab img').hover(function() {
	$(this).attr("src","/Files/main/images/all/header_askspike_f2.gif");
	}, function() {
	$(this).attr("src","/Files/main/images/all/header_askspike_f1.gif");
});
$('#makeagift_tab img').hover(function() {
	$(this).attr("src","/Files/main/images/all/header_makeagift_f2.gif");
	}, function() {
	$(this).attr("src","/Files/main/images/all/header_makeagift_f1.gif");
});
$(".trad_nav_tab").hover(function(){
    $(this).addClass("trad_nav_tab_hover");
  },function(){
    $(this).removeClass("trad_nav_tab_hover");
  });
  $(".trad_nav_tab").focus(function(){
    $(this).addClass("trad_nav_tab_hover");
  });
  $(".trad_nav_tab").blur(function(){
    $(this).removeClass("trad_nav_tab_hover");
  });
$(".lh-link").hover(function(){
    $(this).addClass("lh-link-hover");
  },function(){
    $(this).removeClass("lh-link-hover");
  });
  $(".lh-link").focus(function(){
    $(this).addClass("lh-link-hover");
  });
  $(".lh-link").blur(function(){
    $(this).removeClass("lh-link-hover");
  });
  $("#main_content img.captionme").jcaption();
 });

function getDrawerAJAXData(url, displayBlock) 
{
	var xmlhttp=false;
	/*@cc_on @*/
	/*@if (@_jscript_version >= 5)
	try 
	{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} 
	catch (e) 
	{
		try 
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} 
		catch (E) 
		{
			xmlhttp = false;
		}
	}
	@end @*/

	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') 
	{
		xmlhttp = new XMLHttpRequest();
	}

	url = url + "?sid=" + Math.random(); // used to prevent caching
	if (xmlhttp!=null)
	{
		xmlhttp.open("GET", url, true);
		xmlhttp.onreadystatechange = function() 
									{
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
										{
											displayBlock.innerHTML = xmlhttp.responseText;
										}
									}
		xmlhttp.send(null);
	}
	else
	{
		alert("Your browser does not support XMLHTTP.")
	}
}

function PageTab(on,off1,off2,red,blue1,blue2,url) {
	// if "on" is empty, load "on" content via AJAX
	if($(on)[0].innerHTML == "")
	{
		getDrawerAJAXData(url, $(on)[0]);
	}
	if ($(on).is(":visible")) {
		$("#drawer").slideUp(1000);
		$(on).fadeOut("slow");
		$(red).css("background-color","#245A89");
		$(blue1).css("background-color","#245A89");
		$(blue2).css("background-color","#245A89");
		$("#beinspiredmain").css("top","270px");
	}
	else if ($(off1).is(":visible")) {
		$(off1).hide();
		$(on).fadeIn("slow");
		$(red).css("background-color","#9E002C");
		$(blue1).css("background-color","#245A89");
		$(blue2).css("background-color","#245A89");
	}
	else if ($(off2).is(":visible")) {
		$(off2).hide();
		$(on).fadeIn("slow");
		$(red).css("background-color","#9E002C");
		$(blue1).css("background-color","#245A89");
		$(blue2).css("background-color","#245A89");
	}
	else {
		$("#drawer").slideDown(1000);
		$(on).fadeIn("slow");
		$(red).css("background-color","#9E002C");
		$(blue1).css("background-color","#245A89");
		$(blue2).css("background-color","#245A89");
		$("#beinspiredmain").css("top","555px");
	}
};

/** DEPRECATED roll over functions **/
function lhRolloverOff(obj) {
	$(obj).css("background-color","#FFFFFF");
	$(obj).css("color","#0B2A50");
}
function lhRolloverOn(obj) {
	$(obj).css("background-color","#1D4E95");
	$(obj).css("color","#FFFFFF");
}
function tnRolloverOff(obj) {
	$(obj).css("background-color","#003F72");
	$(obj).css("color","#FFFFFF");
}
function tnRolloverOn(obj) {
	$(obj).css("background-color","#0B2A50");
	$(obj).css("color","#FFFFFF");
}

/**************Deprecated**************/
function GU_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=GU_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function GU_validateForm() 
{ 
	var i,p,q,nm,test,num,min,max,errors='',args=GU_validateForm.arguments;
	for (i=0; i<(args.length-2); i+=3) 
	{ 
		test=args[i+2]; 
		val=GU_findObj(args[i]);
		if (val) 
		{ 
			nm=val.name; 
			// strip the db| from the field name if it is there.
			if (nm.indexOf('db|') != -1)
			{
				nm = nm.substring(3);
			}
			if ((val=val.value)!="") 
			{
				if (test.indexOf('isEmail')!=-1) 
				{ 
					p=val.indexOf('@');
					if (p<1 || p==(val.length-1)) 
						errors+='- '+nm+' must contain an e-mail address.\n';
				} 
				else if (test!='R') 
				{
					if (isNaN(val)) 
						errors+='- '+nm+' must contain a number.\n';
					if (test.indexOf('inRange') != -1) 
					{ 
						p=test.indexOf(':');
						min=test.substring(8,p); 
						max=test.substring(p+1);
						if (val<min || max<val) 
							errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
					} 
				} 
			} 
			else if (test.charAt(0) == 'R') 
				errors += '- '+nm+' is required.\n'; 
		}
	} 
	if (errors) 
		alert('The following error(s) occurred:\n'+errors);
	document.GU_returnValue = (errors == '');
}

function goOn(obj) {
	obj.className = "MenuOn";
}
function goOff(obj) {
	obj.className = "MenuOff";
}

function gothere(opt) {
	document.location.href = opt;
}

function jumpMenu(targ,selObj,restore) { //v3.0
    eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
	if (restore) selObj.selectedIndex=0;
}

function jumpto(x) {
        document.location.href = x;
}

function StartBot()
{
 var scr_width = screen.availWidth; 
 var url = "http://askspike.gonzaga.edu/ui/agent.aspx";   
 var myWidth= 338;
 var myHeight= 505;
 var left_pos = scr_width - 600;
 var s = "width=" + myWidth + ",height=" + myHeight + ",top=170,left=" + left_pos + ",scrollbars=no,menubar=no,resizable=yes,location=no,status=yes,titlebar=no,toolbar=no";
 chatwin= window.open( url, 'SpikeWin', s);
 var padding = 12;   
 //window.moveTo( myWidth+padding, 0 );
 
 if ( window.focus )
  chatwin.focus();
}