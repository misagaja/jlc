<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Records</title>
<style>
td {text-align:center;font-size:20px;}
</style>
</head>

<body><center><span style="position:relative;top:-100px;">Upravljanje dodatnim slikama </span>
<table width="70%" border="0" cellspacing="5" cellpadding="5" style="font-size:16px;position:relative;top:-100px;" align="center">
  <tr style="background:#CCC">

    
     <th>id slike</th>
     <th>id artikla</th>
     <th>Naziv artikla</th>
     
     <th>Slika</th>
     
        <th>Dodaj sliku</th>
	<th>Delete</th>

  </tr>
  <?php
include "jlc_uvecanje.php";  
  $i=1;
  foreach($data as $row)
  {

  echo "<tr><td colspan=5><hr></td></tr><tr>";
//  echo "<td>".$i."</td>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->id_artikla."</td>";
  echo "<td>".$row->naziv."</td>";
  echo '<td ><img style="width:200px;height:200px;cursor:pointer;" class="magnify" src="'.$row->link_slike.'"></td>';

  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/unos_slike/".$row->id_artikla."'>Dodaj sliku</a></td>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/brisi_sliku/".$row->id."'>Izbrisi sliku</a></td>";

  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
</html>