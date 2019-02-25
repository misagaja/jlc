<!DOCTYPE html>
<?session_start();?>
<html>
<head>

<style>
iframe {
	width:400px;
	height:300px;
}
iframe img {
	width:400px;
	height:300px;	
}
</style>
<script>

function addslashes(str) {
    str = str.replace(/\\/g, '\\\\');
    str = str.replace(/\'/g, '\\\'');
    str = str.replace(/\"/g, '\\"');
    str = str.replace(/\0/g, '\\0');
    return str;
}
 
function stripslashes(str) {
    str = str.replace(/\\'/g, '\'');
    str = str.replace(/\\"/g, '"');
    str = str.replace(/\\0/g, '\0');
    str = str.replace(/\\\\/g, '\\');
    return str;
}

   function promeni_orjentaciju(){
	if(document.getElementById('orj').value=="v")
	{
		document.getElementById('slika').style.width='300px';document.getElementById('slika').style.height='360px';
	}
	if(document.getElementById('orj').value=="h")
	{
		document.getElementById('slika').style.width='360px';document.getElementById('slika').style.height='300px';
	}
   }
</script>   
<script>
   function textAreaAdjust(o) {
    	o.style.height = "1px";
    	o.style.height = (5+o.scrollHeight)+"px";
   }
</script>


</head>

<body >
<span style="position:relative;top:-100px;">Unos novog artikla </span>

<form method="post">

	<table border="1" width="75%" cellspacing="5" cellpadding="5" style="position:relative;top:-100px;font-size:16px;">
	
  	<tr><th style="background:#CCC">Naziv polja</th><th>Sadrzaj polja</th></tr>
  
	    

     <tr>
     	<td>
     		Ime ljubimca
     	</td>
     	<td>
     		<input type="text" name="naziv"/>
     	</td>
     </tr>
     <tr>
     	<td>
     		Id vlasnika
     	</td>
     	<td>     
     		<input type="text" readonly value="<?echo  $this->session->userdata('user');?>" name="vlasnik"/>
     	</td>
     </tr>

     <tr>
     	<td>
     		Kratki opis
     	</td> 
     	<td>
     		<input type="text" name="kratak_opis"/>
     	</td>
     </tr>
     <tr>
     	<td>
     		Dugi opis
     	</td> 
     	<td>
  <textarea  cols="35" rows="1" name="dugi_opis" onkeyup="textAreaAdjust(this)" style="overflow:hidden">
  </textarea>
	</td>
     </tr>
     <tr>
   	<td>
   		Slika
   	</td>
   	<td>
   		<table><tr><td>Unesite URL slike sa interneta :<img id="slika" src='' style="width:360px; height:300px;position:relative;top:10px;" ><input type="text" style="width:360px;position:relative;top:10px;left:-5px;margin:5px 5px;"  ondblclick="getElementById('link_slike').value=''"  onblur="getElementById('slika').src=this.value;" id="link_slike" autocomplete="off" name="link_slike"/></td><td><iframe id="ifrm1" src="https://true-born-initials.000webhostapp.com/upload_file_za_freehostiju.php" ></iframe></td></tr></table>

   	</td>
     </tr>
     <tr>
     	<td>
     		film
     	</td>
     	<td>
     		
     		<input style="width:100%" type="text"  ondblclick="getElementById('link_filma').value=''" onblur="getElementById('film').src=addslashes(this.value);" id="link_filma" name="link_filma"/><br><iframe id="film" src='' style="width:167px; height:100px;" ></iframe>
     	</td>
     </tr>     <tr>
     	<td>
     		Orjentacija slike
     	</td>
     	<td>
     		<input type="text" size="1" onchange="promeni_orjentaciju();" title="orjentacija slike : vertikala ili horizontalna - unosi se v ili h" name="orj" id="orj"/>
     	</td>
     </tr>
<!--     <tr>
     	<td>
     		Cena
     	</td>
     	<td>
     		<input type="text" name="cena"/>
     	</td>
     </tr>
-->     
     <tr>
     	<td>
     		status
     	</td>
     	<td>
     		<input type="text" name="status"/>
     	</td>
     </tr>  	
</table>
  <span align="center" style="position:relative;top:-90px;"><input type="submit" name="save" value="Save Data"/></span>

    </form>
<script>
document.getElementById("pretraga").style.display = "none";
</script>
</body>
</html>