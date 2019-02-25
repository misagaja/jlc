<!DOCTYPE html>
<html>
<?$krit="";
		
?>
<head>
<title>W3.CSS</title>

<meta name="viewport" content="width=device-width, initial-scale=1, charset=utf-8">
<meta 
     name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1' 
/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?
include "mobilna_div_view.php";

?>

		   <style>
    #pretraga {
    	width:50%;
    	height:50px;
    	border:1px solid blue;
    	//margin:0 auto;
    	margin-top:10px;
    	position:relative;
    	top:-100px;
    	text-align:center;	
    	box-shadow: 4px 4px 4px 4px lightgray;
    	
    }
    img {
    	width:200px;
    	height:300px;
    }
    .img {
    	width:100px;
    	height:150px;
    }

    .lupa {
    	width:50px;
    	height:25px;
    	position:relative;
    	top:7px;
    	-ms-transform: rotate(35deg); 
    	-webkit-transform: rotate(35deg);   
    	transform: rotate(35deg);
    	cursor:pointer;	
    }
    
    </style>
    <style>

.crop { position:relative;
 margin:5px 5px 5px 5px;
 display:inline-block;
 background-color: white;
 height: 250px;
 width: 300px;
 overflow: hidden;
 
}
.crop img {
 height: auto;
 width: 300px;
 
 
}

 img {
vertical-align: middle;
}
</style>
</head>
<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up() ">
<div class="w3-container " id="pretraga" style="width:100%;">
 	<form id="k" method='post' >
 	
 	<span class="w3-col s12" style="background-color:white;position:relative;top:100px;float:left;">Unesite rec za traženje
 	<input  type="text" title="Unesite rec iz naziva ili deo naziva" name="krit" style="display:inline;" size="10px" value="<?echo $krit;?>">
 	<input style="display:none;" type="submit" id="pretrazi" name="pretrazi"> 
    		<img class="lupa" onclick="document.getElementById('pretrazi').click();" src="http://mihgaj8.freehostia.com/lupa.png" style="display:inline;">
    	</span>
    	
    		
    	</form>
</div>
<br>
<div class="w3-container w3-orange" position:relative;top:-200px;>

<h1 style="display:none;">Ljubimci u slici</h1>
</div>

<!--<div class="w3-row-padding w3-margin-top w3-margin-bottom">-->
<div class="w3-container aw3-orange" style="position:relative;float:left;w3-coll s1 m4 l2;" >

   <? 
   $prva="";
   foreach ($data as $row){

   if($prva<>$row->link_slike_r){  
   	if ($row->link_filma<>""){
   		echo '<div><iframe src="'. stripslashes($row->link_filma).'" width="300" height="250"></iframe></div>';
   		}
   
   
   ?>
	<div class="w3-col s12 m4 l3  w3-margin-top " >
		<div class="w3-card-2" >
			
  			
				<div class="crop"><img src="<?echo $row->link_slike_r;?>" style="width:100%" onclick="createOpis('<?echo $row->id;?>','<?echo $row->link_slike_r;?>','<?echo $row->naziv;?>','<?echo $row->userid;?>','<?echo stripslashes(trim($row->opis));?>');" ></div>
				<div class="w3-container  ">
					<h4><?echo $row->naziv;?></h4>
					
<!--					<a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/<? echo $row->id;?>'>
					
					<button style='cursor:pointer;padding:10px;margin-bottom:5px;background-color:lightgray;color:blue;font-size:15px;'>
-->

					<button style="cursor:pointer;padding:10px;margin-bottom:5px;background-color:lightgray;color:black;font-size:15px;position:relative;left:5px;" id="<?echo $row->id;?>" onclick="createOpis(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->naziv;?>','<?echo $row->userid;?>','<?echo stripslashes(trim($row->opis));?>');" >
					
					Vidi detalje
					
					</button>
					
<!--					</a>
-->
					
					<button style="cursor:pointer;padding:10px;margin-bottom:5px;background-color:green;color:white;font-size:15px;position:relative;left:5px;" id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" >
					zainteresovan
					
					</button>
				</div>
			
			
		</div>
	</div>
   <?
   $prva=$row->link_slike_r;
   }
   if ($row->link_slike<>NULL){	?>
   <div class="w3-col s12 m4 l3  w3-margin-top " >
		<div class="w3-card-2" >
			
  			
				<div class="crop"><img src="<?echo $row->link_slike;?>" style="width:97%" onclick="createOpis(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->naziv;?>','<?echo $row->userid;?>','<?echo stripslashes(trim($row->opis));?>');" ></div>
				<div class="w3-container">
					<h4><?echo $row->naziv;?></h4>
<!--					
					<a href='http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/<? echo $row->id;?>'>
					
					<button style='cursor:pointer;padding:10px;margin-bottom:5px;background-color:lightgray;color:blue;font-size:15px;'>
-->					
					<button style="cursor:pointer;padding:10px;margin-bottom:5px;background-color:lightgray;color:black;font-size:15px;position:relative;left:5px;" id="<?echo $row->id;?>" onclick="createOpis(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->naziv;?>','<?echo $row->userid;?>','<?echo stripslashes(trim($row->opis));?>');" >
					
					Vidi detalje
					
					</button>
					
					
					
					<button style="cursor:pointer;padding:10px;margin-bottom:5px;background-color:green;color:white;font-size:15px;position:relative;left:5px;" id="<?echo $row->id;?>" onclick="createTest(this.id,'<?echo $row->link_slike_r;?>','<?echo $row->m_telefon;?>','<?echo $row->userid;?>');" >
					zainteresovan
					
					</button>
				</div>
			
			
		</div>
	</div>
	
<?   }
   }
   ?>


</div>

</body>
</html>