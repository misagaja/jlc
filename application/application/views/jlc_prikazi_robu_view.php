<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Records</title>
    <style>

.crop { position:relative;
 margin:5px 5px 5px 5px;
 display:inline-block;
 background-color: white;
 height: 150px;
 width: 180px;
 overflow: hidden;
 
}
.crop img {
 height: auto;
 width: 180px;
 
 
}

 img {
vertical-align: middle;
}
</style>
</head>

<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()"><center><span style="position:relative;top:-100px;">Upravljanje artiklima</span>
<table width="90%" border="1"  cellspacing="5" cellpadding="3" style="border-collapse: collapse;font-size:16px;position:relative;top:-100px;">
  <tr style="background:#CCC">

    
     <th  width="3%">id</th>
     <th  width="5%">Naziv</th>
     <th  width="10%">Id vlasnika</th>

     <th width="5%">Kratki opis</th>
     <th width="40%">Dugi opis</th>
     <th width="20%">Glavna slika</th>
     <th width="5%">Cena</th>
     <th>status</th>
        <th>Dodaj sliku</button></th>
	<th width="4%">Delete</th>
	<th width="4%">Update</th>
	<th width="4%">Vidi detalje</th>
  </tr>
  <?php
include "jlc_uvecanje.php";
 
  $i=1;
  foreach($data as $row)
  {

  echo "<tr>";
//  echo "<td>".$i."</td>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->naziv."</td>";
  echo "<td>".$row->id_vlasnika."</td>";
  echo "<td>".$row->kratak_opis."</td>";
  echo '<td >'.str_replace("///",chr(0x0D).chr(0x0A),substr($row->dugi_opis,0,200))."...</td>";
  echo '<td ><div class="crop"><img style="padding:5px;margin: 25px;cursor:pointer;border:1px solid black;" class="magnify" src="'.$row->link_slike_r.'"></div></td>';
  echo "<td>".$row->cena."</td>";
  echo "<td>".$row->status."</td>";
$add="<img style='width:100px; height:100px' src='https://images.all-free-download.com/images/graphiclarge/sign_add_88771.jpg'>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/unos_slike/".$row->id."'><button style='cursor:pointer'>".$add."Dodaj sliku</button></a></td>";
  $del="<img style='width:100px; height:100px' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfh3HNo5vn7bosGjb0ReAiih9qB_SLGP1yp1fCF-EjQG4PcDzZeA'>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/brisanje_robe/".$row->id."'><button style='cursor:pointer'>".$del."Delete</button></a></td>";
  $upd="<img style='width:100px; height:100px' src='https://previews.123rf.com/images/faysalfarhan/faysalfarhan1211/faysalfarhan121100014/16278999-update-icon-glossy-green-button.jpg'>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/azuriranje_robe/".$row->id."'><button style='cursor:pointer'>".$upd."Update</button></a></td>";
  $det="<img style='width:100px; height:100px' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU63h1qLqfLzuksLQgZBbcwVfUz0Y6IPC5PiahxG_eW-piXcHq'>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/".$row->id."'><button style='cursor:pointer'>".$det."Detaljno</button></a></td>";

 

  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
</html>