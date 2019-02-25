<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
    
    img {width:200px;height:300px;}
    .img {width:100px;height:150px;}
    marquee {position:relative;top:10px;width:80%;color:red;}
    </style>
</head>
<!--	<body  style="background-color:orange;color:black;">-->
<body><center>
<?$krit='';?>
<h1><marquee behavior="alternate">ONLINE<?php echo "<img class='img' src='".$slike[0];?>'> SHOP <?php echo "<img class='img' src='".$slike[1];?>'>ZA TRGOVANJE<?php echo "<img class='img' src='".$slike[2];?>'> UMETNICKIM<?php echo "<img class='img' src='".$slike[3];?>'>DELIMA</marquee>
<br>
<div id="container" style="position:relative;top:-320px;">
    <h1 style="position:relative;top:50px;color:blue;">Welcome to Your ART shop!!!
    <div >      
    </div>  
</div> 
<div id="pretraga" style="width:90%;border:1px solid blue;position:relative;top:-100px;">Unesite deo naziva artikla
 	<form method='post'>
    		<input type="text" title="Unesite rec iz naziva ili deo naziva" name="krit" value="<?echo $krit;?>">
    		<input type="submit" value="pretrazi" name="pretrazi">
    	</form>
</div>
</body>
</html>