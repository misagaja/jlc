<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include "dinamik_div_view.php"; 
?> 
<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()">

<?
include "jlc_uvecanje1.php";

$i=1;

$prva="";
echo '<span style="position:relative;left:-600px;top:-100px;">Shoping</span> ';
foreach ($data as $row){
if($prva<>$row->link_slike_r){  

?>
			<p class="sop" style="clear:both;top:-14px;left:100px;padding:10px;background-color:white;font-size:20px;border:1px solid black;position:relative;float:left;width:25%;">
			<? echo "<span style='color:red;font-size:30px;'>".$row->naziv."</span><br>".$row->id."-".$row->dugi_opis."<br>".$row->cena;?>
			<button id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" style="cursor:pointer;padding:10px;background-color:green;color:white;font-size:25px;">Kupi</button>
			<a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/<? echo $row->id;?>'><button style='cursor:pointer;padding:10px;background-color:green;color:white;font-size:25px;'>Vidi detalje</button></a>
			</p>
			
			<p class="sop" style="position:relative;left:100px;float:left;padding:5px;margin:5px 5px 5px 5px;overflow:hidden;">
			<? if(($row->orjentacija=="v") or ($row->orjentacija=="V" )){?>
				<img style="transition: 1.2s ease;width:300px;height:400px;" onmouseover="bigImg(this.id)" onmouseout="normalImg(this.id)" id="<?echo "s".$i;?>" class="magnify" src="<? echo $row->link_slike_r;$prva=0;?>">
			<?}
			 if(($row->orjentacija=="h") or ($row->orjentacija=="H" )){?>
				<img style="transition: 1.2s ease;width:400px;height:300px;" onmouseover="bigImg(this.id)" onmouseout="normalImg(this.id)" id="<?echo "s".$i;?>" class="magnify" src="<? echo $row->link_slike_r;$prva=0;?>">
			<?}?>
			
			</p>
			
				
<? 
$i++;
$prva=$row->link_slike_r;
}


if ($row->link_slike<>NULL){	
			
?>	
	<div style="position:relative;float:left;left:100px;padding:5px;margin:5px 5px 5px 5px;overflow:hidden;">	

	<? if(($row->orjentacija_slike=="v") or ($row->orjentacija_slike=="V" )){?>		
	<img style="width:300px;height:400px;transition: 1.2s ease;" onmouseover="bigImg(this.id)" onmouseout="normalImg(this.id)" id="<?echo "s".$i;?>" class="magnify" src="<? echo $row->link_slike;?>"></div>
	<?}?>
	
	<? if(($row->orjentacija_slike=="h") or ($row->orjentacija_slike=="H" )){?>		
	<img style="width:400px;height:300px;transition: 1.2s ease;" onmouseover="bigImg(this.id)" onmouseout="normalImg(this.id)" id="<?echo "s".$i;?>" class="magnify" src="<? echo $row->link_slike;?>"></div>
	<?}?>
<?
$i++;
}
?>				
			
<?

}
?>
<script>
z=0;
function bigImg(x) {
 
 document.getElementById(x).style.zIndex= (z + 1).toString();z++;document.getElementById(x).style.cursor = 'pointer';
 document.getElementById(x).style.transform = "scale(1.5)"; 
}

function normalImg(x) {
document.getElementById(x).style.zIndex= "0";
  document.getElementById(x).style.transform = "scale(1.0)"; 
}

</script>

</body>