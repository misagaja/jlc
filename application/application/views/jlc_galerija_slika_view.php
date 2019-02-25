<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
	.naslov_shoping 

		text-align:center;
		font-size:15px;
		
		
	}
	.content {
  		max-width: 1500px;
  		margin: auto;
	}
	.ime_artikla {
		color:red;
		font-size:25px;
	}
	.dugme_kupi {
		cursor:pointer;
		padding:10px;
		background-color:green;
		color:white;
		font-size:20px;
	}
	.poziv_kupcu {
		display:block;
		top:-14px;
		text-align:center;
		padding:10px;
		background-color:white;
		font-size:15px;
		//border:1px solid black;
		//position:relative;
		//float:left;
		width:60%;
	}
	.imggh  {
		text-align:center; 
		margin: 10px auto 20px;
		transition: 1.2s ease;
		width:300px;
		height:auto;
		display: block;
    }
	.imggv  {
		text-align:center; 
		margin: 10px auto 20px;
		transition: 1.2s ease;
		width:300px;
		height:auto;
		display: block;
    }
	.sop {
		border:1px solid blue;width:27%;height:80%;
		box-shadow:4px 4px 4px #dddddd;
	}
	.spanh {
 position:relative;color:red;text-align:center;
}
	.spanv {
 position:relative;color:red;text-align:center;
}
	.detalji {
		cursor:pointer;
		padding:5px;
		background-color:lightgray;
		color:black;
		font-size:20px;
	}
</style>

<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()" style="position:fixed;top:-100px;">

<span class="naslov_shoping" style="position:absolute;top:150px;">Galerija</span> 

<div class="content">
<?
include "jlc_uvecanje1.php";

$i=1;

$prva="";

foreach ($data as $row){
if($prva<>$row->link_slike_r){  
?>
			
			<p class="sop w3-container " style="position:relative;left:100px;float:left;padding:5px;margin:5px 5px 5px 5px;overflow:scroll;">
			
			
				<img class="imggv magnify"  onmouseover="bigImg(this.id)" onmouseout="normalImg(this.id)" id="<?echo "s".$i;?>" src="<? echo $row->link_slike_r;$prva=0;?>">

				
				
				<span class="poziv_kupcu" >
			
					<? echo "<span style='color:red;font-size:25px;'>".$row->naziv."-</span><span style='color:blue;font-size:25px;'>".number_format($row->cena,0,",",".")."</span><br>".$row->id."-".substr(str_replace("///",chr(0x0D).chr(0x0A),$row->dugi_opis),0,100)."...<br>";?>
			
					<a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/<? echo $row->id;?>'><button  class='detalji'>Vidi detalje</button></a><button class="dugme_kupi" id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" >Kupi</button>
				</span>

			
				

			
			</p>
				
<? 

$i++;
$prva=$row->link_slike_r;
}


if ($row->link_slike<>NULL){	
			
?>	
	<p class="sop w3-container " style="position:relative;float:left;left:100px;padding:5px;margin:5px 5px 5px 5px;overflow:scroll;">	

			
	<img class="imggv magnify" onmouseover="bigImg(this.id)" onmouseout="normalImg(this.id)" id="<?echo "s".$i;?>"  src="<? echo $row->link_slike;?>">
	
	<span class="poziv_kupcu"  >
			
			<? echo "<span class='ime_artikla' >".$row->naziv."-</span><span style='color:blue;font-size:25px;'>".number_format($row->cena,0,",",".")."</span><br>".$row->id."-".substr(str_replace("///",chr(0x0D).chr(0x0A),$row->dugi_opis),0,100)."...<br>";?>
			
			<a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/<? echo $row->id;?>'><button  class='detalji'>Vidi detalje</button></a><button class="dugme_kupi" id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" >Kupi</button>
	
	</span>
	
	</p>
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
<?
include "dinamik_div_view.php"; 
?> 
</div>
</body>