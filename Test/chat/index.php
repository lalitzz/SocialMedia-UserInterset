<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>AJAX Chat</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="chat.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="chat.js" ></script>
</head>
<body onload="init();">
<noscript>
Your browser does not support JavaScript!!
</noscript>
<table id="content">
<tr>
<td>
<div id="scroll">
</div>
</td>
<td id="colorpicker">
<img src="palette.png" id="palette" alt="Color Palette" border="1" onclick="getColor(event);"/>
<br />
<input id="color" type="hidden" readonly="true" value="#000000" />
<span id="sampleText">
(text will look like this)
</span>
</td>
</tr>
</table>
<div>
<input type="text" id="userName" maxlength="10" size="10" onblur="checkUsername();"/>
<input type="text" id="messageBox" maxlength="2000" size="50"
onkeydown="handleKey(event)"/>
<input type="button" value="Send" onclick="sendMessage();" />
<input type="button" value="Delete All" onclick="deleteMessages();" />
</div>
</body>
</html>