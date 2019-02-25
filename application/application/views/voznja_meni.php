<?
	$user = $this->session->userdata('user');
	$avatar = $this->session->userdata('avatar');
	$krit = $this->session->userdata('krit');  
	
?>
<!DOCTYPE html>
<html>
	<head>


		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<?php
			include "jlc_uvecanje.php";
			include "jlc_css.php";
		?>
		<style>
			a .desni{position:relative;float:right;
			}
			a {
			  text-decoration: none;
			}

			nav {
  
		        	font-size:20px;
//				background-color:RGB(246,106,0);
			}

			ul {
  
			    list-style: none;
			    margin: 0;
			    padding-left: 0;
			    
			}

			li { border: solid 1px black;
			    color: #fff;
			    margin: 1px 1px 1px 1px;
			    background-color:RGB(246,106,0);
			    display: block;
			    float: left;
			    padding: 1rem;
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
			    margin-top: 1rem;
			    left: 0;
			    display: none;
			}

			ul li:hover > ul,
			ul li:focus-within > ul,
			ul li ul:hover,
			ul li ul:focus {
			   visibility: visible;
			   opacity: 1;
			   display: block;color: #000;
			}

			ul li ul li {top:1rem;
			    clear: both;
			    width: 100%;
			}
		</style>
	</head>
	<body  style="max-width:1600px">
	     
		<div class="w3-container">
			<div class="w3-container">
  			<ul>
    				<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/"><li>Home</li></a>
    				<li style="position:relative;float:left;"><a href="#" aria-haspopup="true">Shoping</a>
    					<ul class="dropdown" aria-label="submenu">
    						<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/prikaz_robe_za_shop"><li>Shoping</li></a>
    						<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/galerija_slika"><li>Galerija</li></a>
    						<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/proba"><li>Proba</li></a>
    					</ul>
    				</li>
<?

if($user<>""){  
			 
  
?> 	
				<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/updatedata/<? echo $user;?>"><img class='magnify' src='<? echo $avatar?>' style='width:55px; height:55px;border-radius:50%;position:relative;float:right;'></a>



   				<a  href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/odjavi"><li style="position:relative;float:right;">Odjava</li></a>
    				<li style="position:relative;float:left;"><a href="#" aria-haspopup="true">My shop</a>
      					<ul class="dropdown" aria-label="submenu">
        					
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/unos_robe"><li>Unos mojih proizvoda</li></a>
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/prikaz_robe_1/<?echo $user;?>/"><li>Upravljanje mojim proizvodima</li></a>
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/upravljanje_slikama_1/<? echo $user;?>"><li>Upravljanje dodatnim slikama</li></a>				
        					
        					<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/updatedata/<? echo $user;?>"><li>Upravljanje mojim nalogom</li></a>
						
      					</ul>
    				</li>
				  
    				
<?
}
else
{
?>
     				<li style="position:relative;float:right;"><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/upis_prijave">Prijava</a></li>
     				<li style="position:relative;float:right;"><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/registracija">Registracija</a></li>
<?
}
if($user=="admin"){
?>
				<li><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/dispdata">Prikaz saradnika</a></li>
				<li><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/prikaz_robe">Upravljanje proizvodima</a></li>
				<li><a href="http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/upravljanje_slikama">Upravljanje dodatnim slikama</a></li>				
<?
}
?>
  			</ul>
			</div>

 

		
	   	</div>
	   	<center>
<?php include "jlc_kajron.php";?>

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