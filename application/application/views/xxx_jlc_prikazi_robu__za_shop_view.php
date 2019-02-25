<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
	include "jlc_uvecanje.php";
?>
<head>
	<title>Registration form</title>
</head>
<body style="background-color:white;"> 

 <?php
  	$i=1;echo " Detaljan prikaz proizvoda";
 	
	foreach ($data as $row){
	
  	
   
  ?>


   <table width="600" border="0" cellspacing="5" cellpadding="5">
  	<tr>
    		<td width="230">
    			Naziv robe 
    		</td>
    		<td >
    			<input type="text" value="<? echo $row->naziv;?>" name="naziv"/>
    		</td>
  	</tr>
  	<tr>
    		<td>
    			Vlasnik 
    		</td>
    		<td>
    			<input type="text" value="<? echo $row->id_vlasnika;?>" name="vlasnik"/>
    		</td>
  	</tr>
  	<tr>
    		<td>
    			Kratki opis 
    		</td>
    		<td>
    		<input type="text" value="<? echo $row->naziv."<br>".$row->kratak_opis;?>" name="kratak_opis"/>
    		</td>
  	</tr>
    	<tr>
    		<td>
    			Dugi opis 
    		</td>
    		<td>  
  			<textarea rows="10" cols="100">
  			<? echo $row->dugi_opis;?>
  			</textarea>
		</td>
  	</tr>
    	<tr>
    		<td>
    			Slika 
    		</td>
    		<td>
   
    			<img class="magnify" src='<? echo $row->link_slike;?>' name="slika" style="width:200px;height:150px;"/>
<?
  			 		
  			foreach($slike as $row1)
  			{ 
?>  					
  				<img class="magnify" src='<? echo $row1->link_slike;?>' style="width:200px;height:150px;"/>
				  								
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
    			<input type="text" value="<? echo $row->cena;?>" name="cena"/>
    		</td>
  	</tr>
    	<tr>
    		<td>
    			Status 
    		</td>
    		<td>
    			<input type="text" value="<? echo $row->status;?>" name="status"/>
    		</td>
  	</tr>


   </table>

<!--	</form>-->
	
	
<?php 
	 
	}
?>
	
</body>
</html>
<!--
<iframe src="http://mihgaj8.freehostia.com/zoom_prikaz.php" width="100%" height="800px"></iframe>
-->