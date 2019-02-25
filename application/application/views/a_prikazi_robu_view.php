<!DOCTYPE html>
<?$krit="";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Display Records</title>

<style>
	body {
//		background-color:rgb(246,106,0);
	}
    #pretraga {
    	background-color:white;
    	width:100%;
    	height:50px;
    	border:1px solid blue;
    	//margin:0 auto;
    	margin-top:10px;
    	position:relative;
    	top:-30px;
    	text-align:center;	
    	box-shadow: 4px 4px 4px 4px lightgray;
    	
    }
    img {
    	width:150px;
    	height:150px;
    }
    .img {
    	width:150px;
    	height:150px;
    }

    .lupa {
    	width:80px;
    	height:40px;
    	position:relative;
    	top:7px;
    	left:50px;
    	display:inline;
    	-ms-transform: rotate(35deg); 
    	-webkit-transform: rotate(15deg);   
    	transform: rotate(15deg);
    	cursor:pointer;	
    }
    table {
     	border-collapse: collapse;
     	font-size:12px;
     	background-color:white;
     	position:relative;
     	top:-40px;
     }
	.pas {
	width:100px;
	height:50px;
	position:relative;
	top:-65px;
	left:-90px;
	}   
    </style>
</head>

<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()"><center>

<!--<span style="font-size:12px;position:relative;top:50px;">Upravljanje artiklima</span>-->

<div  id="pretraga" style="height:105px;width:300px;top:5px;">
 	<form id="k" method='post' >
 	
 	<span  style="background-color:white;position:relative;top:10px;width:100%;font-size:12px;">Unesite rec za traženje
 	<input  type="text" title="Unesite rec za pretragu" name="krit" style="display:inline;" size="10px" value="<?echo $krit;?>">
 	<input style="display:none;" type="submit" id="pretrazi" name="pretrazi"> 
    		<img class="lupa" onclick="document.getElementById('pretrazi').click();" src="http://mihgaj8.freehostia.com/lupa.png" style="">
    	</span>
    	
    		
    	</form>
</div><img class="pas" src="http://kefirzdravlje.weebly.com/uploads/3/2/2/2/3222090/8151005.gif" style="">
<div class="w3-container ">
<table width="100%" border="1"  cellspacing="5" cellpadding="10" >
  <tr style="background:#CCC">

    
<!--     <th  width="3%">id</th>-->
<!--     <th  width="5%">Naziv</th>-->
<!--     <th  width="5%">Id vlasnika</th>-->

<!--     <th width="5%">Kratki opis</th>-->
     <th width="30%">Glavna slika</th>
     <th width="70%" > Opis</th>

<!--     <th width="5%">Cena</th>-->
<!--     <th>status</th>
        <th>Dodaj sliku</button></th>
	<th width="4%">Delete</th>
	<th width="4%">Update</th>
	<th width="4%">Vidi detalje</th>
-->	
  </tr>
  <?php
include "jlc_uvecanje.php";
include "dinamik_div_view.php";
 
  $i=1;
  foreach($data as $row)
  {

  echo "<tr>";
//  echo "<td>".$i."</td>";
//  echo "<td>".$row->id."</td>";
//  echo "<td>".$row->naziv."</td>";
//  echo "<td>".$row->id_vlasnika."</td>";
//  echo "<td>".$row->kratak_opis."</td>";

  echo '<td ><img style="padding:5px;margin: 5px;width:100px;height:100px;cursor:pointer;border:1px solid black;border-radius:10%" class="magnify" src="'.$row->link_slike_r.'"></td>';
 $mor="";
  echo '<td style="font-size:12px;"><span style="font-size:12px;color:blue;" >'.$row->naziv.'</span><button style="position:relative;float:right;font-size:12px;color:green;" >more...</button><br>'.$mor."<br>".str_replace("///",chr(0x0D).chr(0x0A),substr($row->dugi_opis,0,200))."<br>".$row->id_vlasnika."...</td>";

//  echo "<td>".$row->cena."</td>";
/*  echo "<td>".$row->status."</td>";

  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/unos_slike/".$row->id."'><button style='cursor:pointer'>Dodaj sliku</button></a></td>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/brisanje_robe/".$row->id."'><button style='cursor:pointer'>Delete</button></a></td>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/azuriranje_robe/".$row->id."'><button style='cursor:pointer'>Update</button></a></td>";
  echo "<td><a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/".$row->id."'><button style='cursor:pointer'>Detaljno</button></a></td>";

*/ 

  echo "</tr>";
  $i++;
  }
   ?>
</table>
</div>
</body>
</html>