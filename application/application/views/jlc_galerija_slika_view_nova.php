<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.dugme_kupi{
	background-color:green;
	color:white;
	}
.crop { position:relative;
 margin:5px;
 display:inline-block;
 background-color: white;
 height: 500px;
 width: 400px;
 overflow: hidden;
 border:1px solid blue;
 
}
.crop img {
 height: auto;
 max-height:80%;
 width: 100%;
 
 
}

.crop iframe {
 
 height:400px;
 width: 100%;
 
 
}

 .opisg {
 	font-size:20px;z-index:2;display:inline;background-color:white;
 }
  .opisd {
 	font-size:20px;z-index:2;display:block;background-color:white;bottom:0px;
 }
 img {
	vertical-align: middle;
}
 .glavna {
	position:relative;top:-50px;
}
</style>
<?
include "mobilna_div_view.php"; 
?>

</head>
<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()">

   <?
   $i=1;
   foreach ($data as $row){
   
   echo '<div class="crop">
   		<div class="opisg">'.$i.'. sifra:'.$row->id.'-'.$row->naziv.'</div>';?>
   		
   	      		<img src="<? echo $row->link_slike_r;?>" onclick="createOpis('<?echo $row->id;?>','<?echo $row->link_slike_r;?>','<?echo $row->naziv;?>','<?echo $row->userid;?>','<?echo stripslashes(trim($row->dugi_opis));?>');">
<?   	      		
   	
   echo '	<div class="opisd">';
   ?>
   <button class="dugme_kupi" id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" >zainteresovan</button>
   
   <?
   echo '</div>';
   echo '</div>';
   if ($row->link_filma<>""){
   	      			
   
   echo '<div class="crop">
   		<div class="opisg">'.$i.'. sifra:'.$row->id.'-'.$row->naziv.'</div>
   		
   	      		<iframe src="'.$row->link_filma.'"></iframe>';
   	      		
   	
   echo '	<div class="opisd">';?>
   	<button class="dugme_kupi" id="<?echo $row->id;?>" onclick="createOpis(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" >zainteresovan</button>
   <?
   
   echo '</div>';
   
   echo '</div>';
   }
	$i++;
}
?> 

</body>
</html>