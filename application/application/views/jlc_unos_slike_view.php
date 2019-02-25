<!DOCTYPE html>

<html>
<head>
<title>Unos robe</title>
<script>
   function promeni_orjentaciju(){
	if(document.getElementById('orj').value=="v")
	{
		document.getElementById('slika').style.width='240px';document.getElementById('slika').style.height='320px';
	}
	if(document.getElementById('orj').value=="h")
	{
		document.getElementById('slika').style.width='320px';document.getElementById('slika').style.height='240px';
	}
   }
</script>     


</head>

<body>
<table width="900px" border="1" cellspacing="5" cellpadding="5" style="font-size:16px;position:relative;top:-100px;">
  <tr style="background:#CCC">

    
     <th>Naziv artikla</th>
     <th>Link nove slike</th>
     <th>Orjentacija slike(h ili v)</th> 

  </tr>

	<form method="post">
<? 
foreach ($data as $row){

echo <<<HEREDOC
  <tr>
	<td style="font-size:35px;color:red;" align="center"> $row->naziv <br><span style="color:black;font-size:25px;">$row->id - $row->kratak_opis </span>
	<img src="$row->link_slike_r" style="width:150px;height:150px;">
	</td>
	
    <td><input type="text" size="80" ondblclick="getElementById('link_slike').value=''" onblur="getElementById('slika').src=this.value;" id="link_slike" name="link_slike"/><br><img id="slika" src='' style="width:320px; height:240px;" ></td>
 
     <td><input type="text" size="1" onchange="promeni_orjentaciju();" name="orj" id="orj"/></td>
 
 
 
 

  </tr>

  	
</table>
  <span align="center"><input type="submit" name="save" value="Save Data"/></span>

    
HEREDOC;
}    
?>
</form>
<script>
document.getElementById("pretraga").style.display = "none";
</script>
</body>
</html>