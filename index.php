<?php
/*$content = file_get_contents('https://chattraffic.com/users/signup/new');
//$content = str_replace('</head>','<style>#header{display: none;}</style></head>', $content);
echo $content;*/
?>
<style type="text/css" id="cssID">
#header
{
    display: none;
}
</style>
<script src="js/jquery-3.5.1.min.js"></script>
<button onclick="myFunction()">Try it</button>
<iframe crossorigin="anonymous" onload="onLoadHandler();" id='myiFrame' src="https://chattraffic.com/users/signup/new" height="500" width="600" title="Iframe Example"></iframe>

<script>
/*$('iframe').load( function() {
     $('iframe').contents().find("head")
     .append($("<style type='text/css'>  #header{display:none;}  </style>"));
  });*/
  
/*var iframe = document.getElementById('myiFrame');
var style = document.createElement('style');
style.textContent =
  '#header {' +
  '  display: none;' +
  '}' 
;
iframe.contentDocument.head.appendChild(style);

$(function () {
	$("#myiFrame").contents().find("head")[0].appendChild(cssID);
		//Or $("#myiFrame").contents().find("head")[0].appendChild($('#cssID')[0]);
		});
	*/
var iframe = document.getElementById('myiFrame'),
iframeWin = iframe.contentWindow || iframe,
iframeDoc = iframe.contentDocument || iframeWin.document;



$(iframeDoc).ready(function (event) {
	/*iframeDoc.open();
	iframeDoc.write('iframe here');
	iframeDoc.write('\<script>alert("hello from iframe!");\<\/script>');
	iframeDoc.write('\<script>parent.hello();\<\/script>');
	iframeDoc.close();*/
	/*ar style = document.createElement('style');
	style.textContent =
	  '#header {' +
	  '  display: none;' +
	  '}' 
	;
	iframeDoc.head.appendChild(style);*/
	
	//iframeDoc.open();
	
	//iframeDoc.close();
});
function onLoadHandler() {
	//var head = $("#myiFramesdsd").contents().find("#headersd");
	//var head = $('iframe').contents();
	
	//$("#myiFrame").contents().find("head").append(cssID);
	//Or $("#myiFrame").contents().find("head")[0].append($('#cssID')[0]);
	//var elmnt = $('iframe').contentWindow.document.getElementById('#header')[0];
	//alert(elmnt.length);
	//myFunction();
}
function myFunction() {
  var iframe = document.getElementById("myiFrame");
  var elmnt = iframe.contentWindow.document.getElementById('#header')[0];
  elmnt.style.display = "none";
}
</script>