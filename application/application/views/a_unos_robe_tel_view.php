<!DOCTYPE html>
<html>
<?
	$user = $this->session->userdata('user');
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, charset=utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script>
   function promeni_orjentaciju(){
	if(document.getElementById('orj').value=="v")
	{
		document.getElementById('slika').style.width='100px';document.getElementById('slika').style.height='167px';
	}
	if(document.getElementById('orj').value=="h")
	{
		document.getElementById('slika').style.width='167px';document.getElementById('slika').style.height='100px';
	}
   }
</script>   
<script>
   function textAreaAdjust(o) {
    	o.style.height = "1px";
    	o.style.height = (5+o.scrollHeight)+"px";
   }
</script>
<style>
table {
	background-color:RGB(254,226,194);
	height:600px;
}
td, th , textarea  {font-size:10px;}
 span input,input {font-size:12px;}
</style>

</head>

<body ><center>
<div class="w3-row w3-container">
<div class=" w3-orange w3-col s12"  >
<span style="position:relative;top:0px;font-size:14px;">Unos podataka </span>

<form method="post">

	<table  border="1"  cellspacing="5" cellpadding="5" bgcolor="#ffffc2">
	
  	<tr><th style="background:#CCC">Naziv polja</th><th style="background:#CCC">Sadrzaj polja</th></tr>
  
	    

     <tr>
     	<td>
     		Naziv
     	</td>
     	<td>
     		<input required type="text" name="naziv"/>
     	</td>
     </tr>
     <tr>
     	<td>
     		Id vlasnika
     	</td>
     	<td>     
     		<input required type="text"  value="<?echo  $user;?>" name="vlasnik"/>
     	</td>
     </tr>

     <tr>
     	<td>
     		Kratki opis
     	</td> 
     	<td>
     		<input required type="text" name="kratak_opis"/>
     	</td>
     </tr>
     <tr>
     	<td>
     		Dugi opis
     	</td> 
     	<td>
  <textarea  cols="35" rows="10" name="dugi_opis" onkeyup="textAreaAdjust(this)" astyle="overflow:hidden">
  </textarea>
	</td>
     </tr>
<!-- 
     <tr>
     	<td>
     		film
     	</td>
     	<td>
     		
     		<input style="width:100%" type="text"  ondblclick="getElementById('link_filma').value=''" onblur="getElementById('film').src=addslashes(this.value);" id="link_filma" name="link_filma"/><br><iframe id="film" src='' style="width:167px; height:100px;" ></iframe>
     	</td>
     </tr>

     <tr>
  	<td>
   		Slika
   	</td>
   	<td>
   		<input type="text"  ondblclick="getElementById('link_slike').value=''" onblur="getElementById('slika').src=this.value;" id="link_slike" name="link_slike"/><br><img id="slika" src='' style="width:167px; height:100px;" >
   	</td>
     </tr>
-->
     <tr>
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
</table><br>
  <span align="center" style="position:relative;top:10px;left:0px;"><input type="submit" name="save" value="Save"/></span>

    </form><br>&nbsp <br>
<script>
document.getElementById("pretraga").style.display = "none";
</script>
</div>
</div>
</body>
</html>