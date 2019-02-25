<head>
   <style>
    #pretraga {
    	width:50%;
    	
    	border:1px solid blue;
    	text-align:center;
    	position:relative;
    	top:-100px;	
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
    marquee {
    	position:relative;
    	top:50px;
    	width:90%;
    	color:red;
    }
    .lupa {
    	width:100px;
    	height:50px;
    	position:relative;
    	top:15px;
    	-ms-transform: rotate(35deg); 
    	-webkit-transform: rotate(35deg);   
    	transform: rotate(35deg);
    	cursor:pointer;	
    }
    
    </style>
</head>
<center>
<?$krit='';?>
<h1><marquee behavior="alternate">ONLINE<?php echo "<img class='img' src='".$slike[0];?>'> SHOP <?php echo "<img class='img' src='".$slike[1];?>'>ZA PLACANJE<?php echo "<img class='img' src='".$slike[2];?>'> u JOLLY<?php echo "<img class='img' src='".$slike[3];?>'>COINIMA</marquee>
<br>
<div class="w3-container" id="container" style="position:relative;top:-320px;">
    <h1 style="position:relative;top:100px;color:blue;">Welcome to Your JLC shop!!!
    <div >      
    </div>  
</div> 

<div class="" id="pretraga" ><span>Unesite deo naziva artikla</span>
 	<form id="k" method='post' >
    		<input  type="text" title="Unesite rec iz naziva ili deo naziva" name="krit" value="<?echo $krit;?>">
    		<span style="background-color:white;"><input style="display:none;" type="submit" id="pretrazi" name="pretrazi"> 
    		<img class="lupa" onclick="document.getElementById('pretrazi').click();" src="http://mihgaj8.freehostia.com/lupa.png" style=""></span>
    		
    	</form>
</div>