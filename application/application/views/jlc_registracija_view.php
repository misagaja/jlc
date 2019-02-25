<?
session_start();
$_SESSION['modul']="signup";
$modul="signup";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
 
  </style>
<style>



        .dynamicDiv {
            float: left;
            width: 250px;
            height: 250px;
            border: solid 1px #c0c0c0;
            background-color: #e1e1e1;
            font-size: 11px;
            font-family: verdana;
            color: #000;
            
       
        }

        .mobilni {
            position: absolute;top:480px;left:150px;
        }
    </style>

    <script type="text/javascript" language="javascript">
        var x;
        var y;
        var z = 0;
        var obj = "mobilni1";
        var pomeranje = false;
        var prekidac = 0;
        var korak = 1;
        var zastoj = 50;
        var i = 0;
	

	
        function createDiv(pit) {

            prekidac = 0;
            var divTag = document.createElement("div");

            divTag.id = "div" + i;

            divTag.setAttribute("align", "center");
	    divTag.style.left = "50px ";
	    divTag.style.top = "350px ";
            divTag.style.margin = "15px ";
            divTag.style.borderRadius = "50%";
           
            divTag.style.zIndex = 0;

            divTag.className = "dynamicDiv mobilni";
divTag.style.webkitAnimationPlayState = "running";



            divTag.innerHTML = "<img  id='sl_1' style='width:80%;height:80%;border-radius:50%;position:relative;left:-0px;top:25px;'  src='" + document.getElementById("link").value + "'>";

            
	    divTag.onmouseover='bigImg("sl_1")';
	    divTag.onmouseout='normalImg("sl_1")';
            divTag.ondblclick = function() {
                remove_image(this.id, "");
            };
            divTag.onmousedown = function() {
                obj = this.id;
                pomeranje = true;
                document.getElementById(obj).style.cursor = 'move';
            };
            divTag.onmouseup = function() {
                pomeranje = false;
            };

            document.body.appendChild(divTag);
            i++;

        }

        function remove_image(child, parent) {
            //  alert(child);
            var parent = document.getElementById(parent);
            var child = document.getElementById(child);
            document.body.removeChild(child);

        }

        function mouse(event) {
            x = event.clientX;
            y = event.clientY;

            if (prekidac == 1) {
                y = y - 100;
                x = x - 100;

                document.getElementById(obj).style.top = y + 'px';
                document.getElementById(obj).style.left = x + 'px';
            }

        }

        function mouse_down(event, obj) {
            prekidac = 1 - prekidac;
            x = event.clientX;
            y = event.clientY;

            if (prekidac == 1) {
                document.getElementById(obj).style.zIndex = (z + 1).toString();
                z++; //alert(document.getElementById(obj).style.zIndex);
                y = y - 100;
                x = x - 100;
                document.getElementById(obj).style.cursor = 'move';


                document.getElementById(obj).style.top = y + 'px';
                document.getElementById(obj).style.left = x + 'px';
            }

        }

        function mouse_up() { //alert(prekidac);
            if (prekidac == 0) {
                pomeranje = false;
                prekidac = 0;
                document.getElementById(obj).style.cursor = 'auto';
		document.getElementById(obj).style.width = 250;
		document.getElementById(obj).style.height = 250;

                obj = "";
            }
        }
    </script>
</head>

<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()">
</div><br><br><br><br><br><br><br><br>

<div style="background-color:#dddddd;width:50%;position:relative;top:-250px;">

			    	<p><h5><br>Unesite svoje podatke  </h5></p>
			 
			    	<form   method="post" >
			    				<input style="font-size:18px;" onchange="createDiv();"  type="text" required id="link" name="link_slike" ondblclick="this.value=''"  placeholder="URL slike - za vas nalog"><br>
			    			
			    		
			                			<input style="font-size:18px;" type="text"  name="ime" id="ime"  placeholder="First Name"><br>
			    				
			    					<input style="font-size:18px;" type="text"  name="prezime" id="prezime"  placeholder="Last Name"><br>
			    					<input style="font-size:18px;" type="number"  required name="postbr" id="postbr" placeholder="Postbr"><br>
			    				
			    					<input style="font-size:18px;" type="text" required name="mesto" id="mesto"  placeholder="Mesto"><br>
			    						
			    				
			    					<input style="font-size:18px;" type="text" required name="adresa" id="adresa"  placeholder="Adresa"><br>
			    				
			    					<input style="font-size:18px;" type="text" required name="telefon" id="telefon"  placeholder="mobilni telefon"><br>
			    				
			    					<input style="font-size:18px;" type="email" required name="email" id="email" placeholder="Email Address"><br>
			    		
			    					<input style="font-size:18px;" type="text" required name="userid" id="userid"  placeholder="user"><br>
			    				
			    					<input style="font-size:18px;" type="password" required name="password" id="password"  placeholder="Password">
			    				
			    					<input style="font-size:18px;" type="password" required  name="password_confirmation" id="password_confirmation"  placeholder="Confirm Password" onblur="proveri();">
			    				
			    		<br><br><input style="font-size:18px;" type="submit" value="Register" name="save" >
			    		<br>   &nbsp
			    		
			    		</form>
			    	
    </div>
<script>
function proveri(){
if ($("#password").val() != $("#password_confirmation").val()) {
          alert("Passwords do not match.");
      }
}            </script>
</body>
<script>
document.getElementById("pretraga").style.display = "none";
</script>
</html>