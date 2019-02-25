<?
	$user = $this->session->userdata('user');
	$avatar = $this->session->userdata('avatar');
	$krit = $this->session->userdata('krit');  
	$projekat=$this->session->userdata('projekat');
//	echo $user."------------------".$projekat;
	
?>

<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<?php
			include "jlc_uvecanje.php";

		?>
		<style>
			a .desni{position:relative;float:right;
			}
			a {
			  text-decoration: none;
			}

			nav { position:fixed;
  
		        	font-size:20px;
				background-color:RGB(246,106,0);
			}

			ul {
  
			    list-style: none;
			    margin: 0 auto;
			    padding-left: 0;
			    
			}

			li { border: solid 1px black;
			    color: #fff;
			    margin: 3px 3px 3px 3px;
			    background-color:RGB(246,106,0);
			    display: block;
			    float: left;
			    padding: 10px;
			    position: relative;
			    text-decoration: none;
			    transition-duration: 0.5s;z-index:3;
			}
  
			li a {
			    color: #fff;
			}

			li a:hover {
			    color: #000;
			}



			li:hover,
			li:focus-within{
		        	background: #dddddd;
				cursor: pointer;
		        	background-color: lightgray;

			}

			li:focus-within a {
				color: #000;
  				outline: none;
			}

			ul li ul {
//    background: orange;
			    visibility: hidden;
			    opacity: 0;
			    min-width: 5rem;
			    position: absolute;
			    transition: all 0.5s ease;
			    //margin-top: 1rem;
			    left: 0;
			    display: none;
			}

			ul li:hover > ul,
			ul li:focus-within > ul,
			ul li ul:hover,
			ul li ul:focus { left:-5px;
			   visibility: visible;
			   opacity: 1;
			   display: block;color: #000;
			}

			ul li ul li {top:1rem;
			    clear: both;
			    width: 100%;
			}
		</style>
		   <style>
    #pretraga {
    	width:50%;
    	height:100px;
    	border:1px solid blue;
    	margin:0 auto;
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
    	top:2px;
    	-ms-transform: rotate(15deg); 
    	-webkit-transform: rotate(15deg);   
    	transform: rotate(15deg);
    	cursor:pointer;	
    }
 @media screen and (max-width: 1130px) {
  #pozdrav  {font-size: 25px;}
  
  }
  @media screen and (max-width: 900px) {
  #pozdrav  {display: none;}
  
  }   
    </style>
	</head>
	<body  style="max-width:1600px">
	     
		<div class="w3-container" >
			<div class="w3-container" style="height:55px;background-color:orange;">
  			<ul>
    				<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/"><li>Home</li></a>
    				<li style="position:relative;float:left;"><a href="#" aria-haspopup="true">Galery</a>
    					<ul class="dropdown" aria-label="submenu">
 
<!--    						<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/prikaz_robe_za_shop"><li>Shoping</li></a>-->
    						<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/galerija_pets"><li>Pets Galery</li></a>
 
    						<!--<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/proba"><li>Shoping</li></a>-->
    					</ul>
    				</li>
<?

if($user<>""){  
			 
  
?> 	
				<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/updatedata/<? echo $user;?>"><img class='magnify' src='<? echo $avatar?>' style='width:55px; height:55px;border-radius:50%;position:relative;float:right;'></a>



   				<a  href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/odjavi"><li style="position:relative;float:right;">Logout</li></a>
    				<li style="position:relative;float:right;"><a href="#" aria-haspopup="true">My pets galery</a>
      					<ul class="dropdown" aria-label="submenu">
        					
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/unos_robe"><li>Unos mojih ljubimaca</li></a>
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/prikaz_robe_1/<?echo $user;?>/"><li>Upravljanje  podacima ljubimaca</li></a>
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/upravljanje_slikama_1/<? echo $user;?>"><li>Upravljanje dodatnim slikama</li></a>				
        					
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/updatedata/<? echo $user;?>"><li>Upravljanje mojim nalogom</li></a>
						
      					</ul>
    				</li>
				
    				
<?
}
else
{
?>
     				<li style="position:relative;float:right;"><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/upis_prijave">Login</a></li>
     				<li style="position:relative;float:right;"><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/registracija">Register</a></li>
<?
}
if($user=="admin"){
?>
				<li><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/dispdata">Prikaz saradnika</a></li>
				<li><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/prikaz_robe">Upravljanje podacima</a></li>
				<li><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/orpak_ctrl/upravljanje_slikama">Upravljanje dodatnim slikama</a></li>				
<?
}
?>
  			</ul>
			</div>

 

		
	   	</div>
	   	<?$krit='';?>
<div class="w3-container" id="container" style="position:relative;top:-320px;height:100px;background-color:red;">
<h1>
<br>
<? if($user<>"admin"){?>
    <div id="pozdrav" class=" w3-col s6 m6 l6" style="position:relative;top:200px;left:200px;color:blue;z-index:10;">Welcome to Your ORPAK galery!!!</div>
 <?}?>   
</div> 

<div class="w3-container" id="pretraga" style="height:50px;">
 	<form id="k" method='post' style="position:relative;top:5px;">
 	<span style="background-color:white;"><span>Unesite rec za trazenje</span>
    		<input  type="text" title="Unesite rec iz naziva ili deo naziva" name="krit" size="10px" value="<?echo $krit;?>">
    		<input style="display:none;" type="submit" id="pretrazi" name="pretrazi"> 
    		<img class="lupa" onclick="document.getElementById('pretrazi').click();" src="http://mihgaj8.freehostia.com/lupa.png" style="">
    	</span>
    		
    	</form>
</div>
	   	<center>
<?php 
//include "orpak_kajron.php";
?>

		<script>
			function myFunction() 
			{
			    var x = document.getElementById("myTopnav");
			    if (x.className === "topnav") 
			    {
			        x.className += " responsive";
			    } 
			    else 
			    {
			        x.className = "topnav";
			    }
			}
		</script>
	   
	</body>
</html>