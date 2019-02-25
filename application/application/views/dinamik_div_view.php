<meta name="viewport" content="width=device-width, initial-scale=1, charset=utf-8">
<style>
 
        .dynamicDiv { 
 //           float: left;
            width: 320px;
            height: 470px;
            border: solid 1px #c0c0c0;
            //background-color: rgb(235,239,238);
            background-color: orange;
            font-size: 11px;
            font-family: verdana;
            color: #000;
            padding: 10px;
            
       overflow:scroll;
        }

        .mobilni {
            position: fixed;
        }
</style>

    <script type="text/javascript" language="javascript">
        var x;
        var y;
        var z = 0;
  
 //       var zastoj = 50;
        var i = 0;
     		

        function createTest(a,b,t,v) {
    
            var divTag = document.createElement("div");
	  

            divTag.id = "div" + i;
	
            divTag.setAttribute("align", "center");
	    	
            divTag.style.margin = "15px ";
            divTag.style.borderRadius = "0%";
            
            divTag.style.left = "300px "; 
             divTag.style.top = "100px "; 
            divTag.style.zIndex = (z + 1).toString();


            divTag.className = "dynamicDiv mobilni magnify";
	



divTag.innerHTML = "<span style='font-size:13px;'>Za kupovinu artikla sa sifrom <span style='background-color:yellow;font-size:20px;'>"+a+"</span> kontaktirajte osobu</span> <span style='background-color:yellow;font-size:20px;'>"+v+"</span> na telefon <span style='background-color:yellow;font-size:20px;'>"+t+"</span> <img  src='"+b+"' style='position:relative;top:5px;width:300px; height:250px;'> ";
           
            divTag.ondblclick = function() {
                remove_image(this.id, "");
            };
            divTag.onmousedown = function() {
                obj = this.id;

                document.getElementById(obj).style.cursor = 'move';
            };
            divTag.onmouseup = function() {

            };

            document.body.appendChild(divTag);

            i++;
	


        }
 	
        function createOpis(a,b,n,v,o) { 
        
         
        for(i=1;i<100;i++){o=o.replace("///","<br>");};//alert(o);


             var divTag = document.createElement("div");
	  

            divTag.id = "div" + i;
	
            divTag.setAttribute("align", "center");
	    	
            divTag.style.margin = "15px ";
            divTag.style.borderRadius = "0%";
            
            divTag.style.left = "0px "; 
             divTag.style.top = "0px "; 
            divTag.style.zIndex = (z + 1).toString();


            divTag.className = "dynamicDiv mobilni magnify";
	

divTag.innerHTML = "<span style='font-size:13px;'>Kontakt osoba:<span style='background-color:yellow;font-size:20px;'>"+v+"</span><br> Sifra artikla:</span> <span style='background-color:yellow;font-size:20px;'>"+ a +"</span><br> Ime ljubimca: <span style='background-color:yellow;font-size:20px;'>"+n+"</span> <p style='background-color:#eeeeee;color:blue;font-size:30px;'>"+o+"</p> <img  src='"+b+"' style='position:relative;top:5px;width:300px; height:250px;'>";




           
            divTag.ondblclick = function() {
                remove_image(this.id, "");
            };
            divTag.onmousedown = function() {
                obj = this.id;

                document.getElementById(obj).style.cursor = 'move';
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


//                y = y - 50;
//                x = x - 100;
x=0;y=0;
                document.getElementById(obj).style.top = y + 'px';
                document.getElementById(obj).style.left = x + 'px';
            

        }

        function mouse_down(event, obj) {
        
/*        var plaElements = document.getElementsByTagName("pla");

	for(var i = 0; i < plaElements.length; i++) {
   		plaElements[i].style.color = "#0000ff";
       	}
            
    	var crvElements = document.getElementsByTagName("crv");

	for(var i = 0; i < crvElements.length; i++) {
   		crvElements[i].style.color = "#ff0000";
       	}
       	
	var zelElements = document.getElementsByTagName("zel");
		
	for(var i = 0; i < zelElements.length; i++) {
   		zelElements[i].style.color = "#00ff00";
	}

 */       
          
            x = event.clientX;
            y = event.clientY;

           
                document.getElementById(obj).style.zIndex = (z + 1).toString();
                z++; //alert(document.getElementById(obj).style.zIndex);
//                y = y - 50;
//               x = x - 100;
x=0;y=0;                
                document.getElementById(obj).style.cursor = 'move';


                document.getElementById(obj).style.top = y + 'px';
                document.getElementById(obj).style.left = x + 'px';
            

        }

        function mouse_up() { //alert(prekidac);
           
                
                document.getElementById(obj).style.cursor = 'auto';
		document.getElementById(obj).style.width = 320;
		document.getElementById(obj).style.height = 470;

                obj = "";
            
        }
    </script>

</head>

<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()">




</html>