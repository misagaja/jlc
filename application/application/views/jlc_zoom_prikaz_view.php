<?
session_start();
$_SESSION["linkovi"][0]="https://www.prozorivrata.com/wp-content/uploads/2015/12/AJNFORT-Karakteristican-je-i-prepoznatljiv-elemenat-vojvodjanske-arhitekture-s-kraja-19-og-i-pocetka-20-og-veka.jpg";
//echo "ovo je".$_SESSION["linkovi"][0];
?>
<html>
<meta charset="UTF-8">
<head>
<link href='https://fonts.googleapis.com/css?family=Marck Script' rel='stylesheet'>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<script>
	var stari="1";
	broj_slika=5;
	tekuca_slika=0;

	function promeni(a){
	
		var element = document.getElementById("prozor1");
        	element.parentNode.removeChild(element);
		document.getElementById("myimage").src = document.getElementById(a).src;
		imageZoom("myimage", "myresult");
		document.getElementById(stari).style.border = "thin solid #d4d4d4";
		document.getElementById(a).style.border = "thin solid #f000FF";
		stari=a;
	
		document.getElementById("opis").innerHTML = document.getElementById(a).title;
		kljuc='opis'+a;
		document.getElementById("naziv").innerHTML = document.getElementById(kljuc).textContent;
	
	}

</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'>

<style>

	#ikone 
	{
		position:relative;width:33%px;overflow:auto;top:0%;   border: 0px solid #d4d4d4;margin-top:5px;
	}
	
	.d2   
	{
		position:relative;height:10%;width:20%;float:left;top:0px;padding:2px;margin:3px;border: 1px solid #d4d4d4;
	}
	
	#d1:hover 
	{
		opacity:1;
	}

	.d2:hover 
	{
		transform:rotate(360deg);
        	-ms-transform:rotate(360deg);
        	-webkit-transform:rotate(360deg);
        	transition: 1.2s ease;
	}


	* {box-sizing: border-box;}
	.img-zoom-container 
	{
    		position: relative;
    		border: 1px solid #d4d4d4;
  		margin:5px;

		width:33%;
  		left:10px;
	}
	.img-zoom-lens 
	
	{
		background-color:lightgreen;
		opacity:0.3;
  		position: absolute;
  		border: 1px solid #111111;
  
/*set the size of the lens:*/
   		width:50%;
   		height:50%;

//  		border-radius:50%;
	}
	.img-zoom-result 
	{
		position:relative;
		left:120%;
		top:-300px;
		float:left;opacity:0;
		border: 1px solid #d4d4d4;
		  
/*set the size of the result div:*/
		width:180%;
		height:95%;
	}

	#opis 
	{
		position:absolute;
		left:120%;
		top:65px;
		float:left;
//  		border: 1px solid #d4d4d4;
/*set the size of the result div:*/
		width:59%;
		height:86%;
	}
	body 
	{
		background-color:orange;
	}
</style>
<script>

	function imageZoom(imgID, resultID) 
	{
       		var img, lens, result, cx, cy;
       		img = document.getElementById(imgID);
       		result = document.getElementById(resultID);
  /*create lens:*/
  		lens = document.createElement("DIV");prvi=0;
  		lens.setAttribute("class", "img-zoom-lens");
    		lens.setAttribute("id", "prozor1");
  /*insert lens:*/
  		img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  		cx = result.offsetWidth / lens.offsetWidth;
  		cy = result.offsetHeight / lens.offsetHeight;


  /*set background properties for the result DIV:*/
  		result.style.backgroundImage = "url('" + img.src + "')";
  		result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  		lens.addEventListener("mousemove", moveLens);
  		img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  		lens.addEventListener("touchmove", moveLens);
  		img.addEventListener("touchmove", moveLens);
	
	  
  	function moveLens(e) 
  	{
    		var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    		e.preventDefault();
    /*get the cursor's x and y positions:*/
    		pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    		x = pos.x - (lens.offsetWidth / 2);
    		y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    
    		if (x > img.width - lens.offsetWidth) 
    		{
    			x = img.width - lens.offsetWidth;
    		}
    		
		if (x < 0) 
		{
			x = 0;
		}
		
	   	if (y > img.height - lens.offsetHeight) 
	   	{
	   		y = img.height - lens.offsetHeight;
	   	}
	   	
    		if (y < 0) 
    		{
    			y = 0;
    		}
    /*set the position of the lens:*/
    		lens.style.left = x + "px";
    		lens.style.top = y + "px";
    /*display what the lens "sees":*/
    		result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  	}
  
  	function getCursorPos(e) 
  	{
    		var a, x = 0, y = 0;
    		e = e || window.event;
    /*get the x and y positions of the image:*/
    		a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    		x = e.pageX - a.left;
    		y = e.pageY - a.top;
    /*consider any page scrolling:*/
    		x = x - window.pageXOffset;
    		y = y - window.pageYOffset;
    		
    		if (a.left>400)
    		{ 
    			result.style.backgroundSize = (img.width * 1) + "px " + (img.height * 1) + "px";
    		}
    		return {x : x, y : y};
  	}
}

</script>
</head>


<body><center><br>
<h1 id='naziv'></h1></center>

<div id="opis" style="z-index:2;font-size:50px;color:yellow;text-align:center;font-family:'Marck Script'">
</div>

<span  style=" font-family: 'sofia';font-size: 32px;z-index:2;text-align:center;"></span>

<div class="img-zoom-container" >
<div onmouseover='document.getElementById("myresult").style.opacity=1;' aonmouseout='document.getElementById("myresult").style.opacity=0;'>
<!--  <img id="myimage"  src="https://images-na.ssl-images-amazon.com/images/I/81cmD8EpBbL._SL1500_.jpg" width="450" height="400"  >-->
<img id="myimage"  src="<? echo $_SESSION['linkovi'][0]?>" width="100%" height="40%"  >

</div>
<? 
echo "=================".sizeof($_SESSION['linkovi']);
$sl='<div id="ikone" style="position:relative;float:left">';

for($i=0;$i<sizeof($_SESSION['linkovi']);$i++)
{
?>
<div id="myresult" class="img-zoom-result"></div>
<?

 $sl.=' 
<div onclick="promeni('.($i).')">
<img class="d2" id="'.$i.'" src="'. $_SESSION['linkovi'][$i].'" title="'.$_SESSION['prevod'][$i].'">
<span id="opis'.$i.'" style="display:none;">'.$_SESSION['reci'][$i].'</span>
</div>';}
echo $sl.'</div>';
?>




</div>
</div>
<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>

<script>
//Make the DIV element draggagle:
dragElement(document.getElementById(("prozor")));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>

</body>
</html>