<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
include "jlc_uvecanje.php";
$i=0;
foreach ($slike as $row1){
?>
			<div style="position:relative;float:left;padding:5px;margin:5px 5px 5px 5px;>
				<img style="transition: 1.2s ease;" onmouseover="bigImg(this.id)" onmouseout="normalImg(this.id)" id="<?echo $i;?>" class="magnify" src="<? echo $row1->link_slike;?>">
<?
$i++;
}
?>
<script>
function bigImg(x) {

 document.getElementById(x).style.transform = "scale(1.5)"; 
}

function normalImg(x) {

  document.getElementById(x).style.transform = "scale(1.0)"; 
}
</script>  
</html>