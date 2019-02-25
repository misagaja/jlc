<?
	include "jlc_uvecanje1.php";

?>
<head>
	<title>Registration form</title>
<style>
.magnify {

margin: 10px 10px 10px 10px;

}
.okvir 
{
position:relative;float:left;
width:350px;height:350px;
border:1px solid black;
}
div {
margin: 10px 10px 10px 10px;
}
#glavna {
}
</style>	
	
	
</head>
<body style="background-color:white;"><center><span style="position:relative;top:-100px;left:-200px;">Galerija proizvoda</span> 
<div id="glavna">			
    <?php
  	$i=1;
 	
	foreach ($data as $row)
{ 
if($row->link_slike<>NULL){
  ?>
   <? if(($row->orjentacija=="v") or ($row->orjentacija=="V" )){?>
   	<div class="okvir" >
    			<img class="magnify" src='<? echo $row->link_slike_r;?>' name="slika" style="width:240px;height:320px;"/>
    	</div>
<? }
   			 if(($row->orjentacija=="h") or ($row->orjentacija=="H" )){?>
   			 
   	<div class="okvir" 
    			<img class="magnify" src='<? echo $row->link_slike_r;?>' name="slika" style="width:320px;height:240px;"/>
    	</div>
<? }
       		
  if($row->link_slike<>"")
  {
  	if(($row->orjentacija_slike=="v") or ($row->orjentacija_slike=="V" )){
?>  				
  		<div class="okvir" >	
  			<img class="magnify" src='<? echo $row->link_slike;?>' tyle="width:200px;height:350px;"/>
  		</div>
<?
	}
  	if(($row->orjentacija_slike=="h") or ($row->orjentacija_slike=="H" )){
?>  				
  		<div class="okvir" >	
  			<img class="magnify" src='<? echo $row->link_slike;?>' style="width:350px;height:200px;"/>
  		</div>	
<?
	}
			
			
			
   }
?>    			
    		
  	
 
	
	
<?php 
}	 
}
?>


<script>
document.getElementById("pretraga").style.display = "none";
</script>
<?
include "dinamik_div_view.php"; 
?>
</div>	
</body>

<!--
<iframe src="http://mihgaj8.freehostia.com/zoom_prikaz.php" width="100%" height="800px"></iframe>
-->