<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Deal Search</title>
<script type="text/javascript">
function getFields()
{
	document.getElementById("sf").innerHTML = "Loading....";
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
	  xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	var page = document.getElementById("type").value;
	var r = Math.random()*1000000;
	xmlhttp.open("GET",page+"1.php?r="+r,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	  {
	    document.getElementById("sf").innerHTML=xmlhttp.responseText;
	  }
	}
}
</script>
</head>
<body>
<form action="" method="post">
Type of Deal:
<select id="type" name="type" onchange="getFields()">
<option value="comp">COMPUTER/LAPTOP</option>
<option value="mobile">MOBILE</option>
<option value="art">ART</option>
<option value="car">CAR</option>
</select>
</form>
<div id="sf">
<form action="computer_validate.php" method="post">
<table>
<tr><td>Brand:<td><input type="text" name="compbrand" /></td></tr>
<tr><td>OS:<td><input type="text" name="os" /></td></tr>
<tr><td>Color:<td><input type="text" name="compcolor" /></td></tr>
<tr><td>RAM:<td><input type="text" name="ram" /></td></tr>
<tr><td>Processor:<td><input type="text" name="processor" /></td></tr>
<tr><td>Hard Disk:<td><input type="text" name="hdd" /></td></tr>
<tr><td>Graphic card:<td><input type="text" name="gc" /></td></tr>
<tr><td>Base Price:<td><input type="text" name="compbase" /></td></tr>
<tr><td><input type="button" name="submit" value="submit" /></td></tr>
</table>
</form>
</div>
</body>
</html>