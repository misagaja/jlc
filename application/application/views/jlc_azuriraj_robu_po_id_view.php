<html>
<head>
<title>Registration form</title>
    <style>

.crop { position:relative;
 margin:5px 5px 5px 5px;
 display:inline-block;
 background-color: white;
 height: 250px;
 width: 300px;
 overflow: hidden;
 
}
.crop img {
 height: auto;
 width: 300px;
 
 
}

.crop iframe {
 height: auto;
 width: 300px;
 
 
}

 img {
vertical-align: middle;
}
</style>
</head>
<body style="background-color:white;"> 

 <?php
  $i=1;echo "<span style='position:relative;top:-100px;'> Izmena podataka - azuriranje</span>";
  foreach($data as $row)
  {
 
  ?>

	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5" style="border-collapse: collapse;position:relative;top:-100px;">
  <tr>
    <td width="230">Naziv robe </td>
    <td ><input type="text" value="<? echo $row->naziv;?>" name="naziv"/></td>
  </tr>
  <tr>
    <td>Vlasnik </td>
    <td><input type="text" value="<? echo $row->id_vlasnika;?>" name="vlasnik"/></td>
  </tr>
  <tr>
    <td>Kratki opis </td>
    <td><input type="text" value="<? echo stripslashes($row->kratak_opis);?>" name="kratak_opis"/></td>
  </tr>
    <tr>
    <td>Dugi opis </td>
    <td>  
  <textarea rows="10" cols="100" name="dugi_opis" id="dopis">
<? echo str_replace("///",chr(0x0D).chr(0x0A),$row->dugi_opis);?>
  </textarea>
</td>
  </tr>
    <tr>
    <td>Link glavne slike </td>  
    <td><input type="text" size="100" ondblclick="document.getElementById('link_slike').value=''" onblur="document.getElementById('slika').src=this.value;" value="<? echo $row->link_slike_r;?>" id="link_slike" name="link_slike"/><br><div class="crop"><img id="slika" src="<? echo $row->link_slike_r;?>"></div></td>
  </tr>    <tr>
    <td>Link filma na youtube </td>  
    <td><input type="text" size="100" ondblclick="document.getElementById('link_filma').value=''" onblur="document.getElementById('film').src=this.value;" value="<? echo $row->link_filma;?>" id="link_filma" name="link_filma"/><br><div class="crop"><iframe id="film" src="<? echo $row->link_filma;?>"></iframe></div></td>
  </tr>
    <tr>
    <td>Cena opis </td>
    <td><input type="text" value="<? echo $row->cena;?>" name="cena"/></td>
  </tr>
    <tr>
    <td>Status </td>
    <td><input type="text" value="<? echo $row->status;?>" name="status"/></td>
  </tr>
    <tr>
    <td>Orjentacija </td>
    <td><input type="text" value="<? echo $row->orjentacija;?>" name="orj"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" onclick="getElementById('dopis').value = getElementById('dopis').value.replace(/(\r\n|\n|\r)/gm,'///');" name="save" value="Update"/></td>
  </tr>
</table>

	</form>
	
	
	<?php } 
	
	?>
<script>
document.getElementById("pretraga").style.display = "none";
</script>	
</body>
</html>