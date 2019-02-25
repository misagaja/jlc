<html>
<div style="width:50px;height:50px;">
<?
foreach ($data as $row){
?>
<img src="<? echo $row->link_slike;?>" style="width:50px;height:50px;">
<?
}
?>
</div>
</html>