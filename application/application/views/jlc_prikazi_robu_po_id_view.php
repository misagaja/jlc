<!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
	include "jlc_uvecanje1.php";

?>

<?
include "dinamik_div_view.php"; 
?>	
<head>
	<title>Detajan prikaz</title>
	
<style>
.sop {


left:0px;
padding:10px;
background-color:white;
font-size:20px;
border:1px solid black;
position:relative;


}
.sop1 {	

//top:300px;

padding:10px;
background-color:white;
font-size:20px;
border:1px solid black;
position:relative;

//width:25%;
}
.naslov
{
position:relative;top:-100px;padding: 10px;
}
body {
background-color:white;
}
</style>
</head>
<body  onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()" >
<span class="naslov"  >Detaljan prikaz proizvoda</span> 

<table>
<tr>
<td style="width:300px;" valign="top" align="center">			
 <?php
  	$i=1;
 	
	foreach ($data as $row){
  ?>

 
  <p class="sop" >
			<? echo "<span style='color:red;font-size:30px;'>".$row->naziv."</span><br>".$row->id."-".substr(str_replace("///",chr(0x0D).chr(0x0A),$row->dugi_opis),1,200)."...<br>".$row->cena;?>
			<button id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" style="cursor:pointer;padding:10px;background-color:green;color:white;font-size:25px;">Kupi</button></p>
			 

 <p class="sop1" >
			<? echo "<span style='color:red;font-size:30px;'>".$row->naziv."</span><br>".$row->id."-".substr(str_replace("///",chr(0x0D).chr(0x0A),$row->dugi_opis),1,200)."...<br>".$row->cena;?>
			<button id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" style="cursor:pointer;padding:10px;background-color:green;color:white;font-size:25px;">Kupi</button></p>
</td>			
<td>
   <table width="600" border="0" cellspacing="5" cellpadding="5" style="position:relative;">
  	<tr>
    		<td width="230">
    			Naziv robe 
    		</td>
    		<td >
    			<input readonlytype="text" value="<? echo $row->naziv;?>" name="naziv"/>
    		</td>
  	</tr>
  	<tr>
    		<td>
    			Vlasnik 
    		</td>
    		<td>
    			<input readonlytype="text" value="<? echo $row->id_vlasnika;?>" name="vlasnik"/>
    		</td>
  	</tr>
  	<tr>
    		<td>
    			Kratki opis 
    		</td>
    		<td>
    		<input readonlytype="text" value="<? echo $row->kratak_opis;?>" name="kratak_opis"/>
    		</td>
  	</tr>
    	<tr>
    		<td>
    			Dugi opis 
    		</td>
    		<td>  
<script>
		function textAreaAdjust(o) {
    			o.style.height = "1px";
    			o.style.height = (20+o.scrollHeight)+"px";
		}
</script>    			

			<textarea id="dopis"  style="text-align:left" rows="10" cols="70" onmouseover="textAreaAdjust(this)" style="overflow:hidden">
<? echo ltrim(str_replace("///",chr(0x0D).chr(0x0A),$row->dugi_opis));?>
			</textarea>

  			
		</td>
  	</tr>
    	<tr>
    		<td>
    			Slika 
    		</td>
    		<td>
   
    			
    			<img class="magnify" src='<? echo $row->link_slike_r;?>' name="slika" style="margin:5px 5px 5px 5px;width:240px;height:auto;border:1px solid black;"/>
<?
       		
  			foreach($slike as $row1)
  			{
  			
?>  				
  				<img class="magnify" src='<? echo $row1->link_slike;?>' style="width:240px;height:auto;"/>	
<?			
			
    			}
?>    			
    		</td>
  	</tr>
    	<tr>
    		<td>
    			Cena 
    		</td>
    		<td>
    			<input readonlytype="text" value="<? echo $row->cena;?>" name="cena"/>
    		</td>
  	</tr>
    	<tr>
    		<td>
    			Status 
    		</td>
    		<td>
    			<input readonlytype="text" value="<? echo $row->status;?>" name="status"/>
    		</td>
  	</tr>


   </table>
</td>
</tr>
</table>
<!--	</form>-->
	
	
<?php 
	 
	}
?>
<script>
document.getElementById("pretraga").style.display = "none";
</script>
</body>

<!--
<iframe src="http://mihgaj8.freehostia.com/zoom_prikaz.php" width="100%" height="800px"></iframe>
-->