<style>
       .dynamicDiv { position:absolute;
            
            width: 300px;
            height: 470px;
            border: solid 1px #c0c0c0;
            //background-color: rgb(235,239,238);
            background-color: orange;
            font-size: 16px;
            font-family: verdana;
            color: #000;
            padding: 5px;
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
	
        var i = 0;

        function createTest(a,b,t,v) {

          
            var divTag = document.createElement("div");

            divTag.id = "div" + i;

            divTag.setAttribute("align", "center");
	    
            divTag.style.margin = "15px ";
            divTag.style.borderRadius = "0%";
             divTag.style.left = "0px "; 
             divTag.style.top = "0px "; 
            divTag.style.cursor = "pointer";
//            divTag.style.top = "100px "; 
            divTag.style.zIndex = 0;

            divTag.className = "mobilni dynamicDiv";

 //           divTag.innerHTML = "<div id='"+divTag.id +"header'></div>" + "<img width=250 height=250 id='sl_1' style='border-radius:50%;position:relative;left:-0px;top:-0px' onmouseover='bigImg(this.id) onmouseout='normalIm(this.id)' src='https://scontent.fbeg5-1.fna.fbcdn.net/v/t1.0-9/12208619_1674130889470061_2906273124913765345_n.jpg?_nc_cat=102&_nc_ht=scontent.fbeg5-1.fna&oh=778d48b8baa818e9776b197590cad1ca&oe=5C91F5FB'>";

divTag.innerHTML = "<div id='"+divTag.id +"header'></div>" + "<span style='font-size:13px;'>Za usvajanje ljubimca sa sifrom <span style='background-color:yellow;font-size:20px;'>"+a+"</span> kontaktirajte osobu</span> <span style='background-color:yellow;font-size:20px;'>"+v+"</span> na telefon <span style='background-color:yellow;font-size:20px;'>"+t+"</span> <img  src='"+b+"' style='position:relative;top:5px;width:280px; height:250px'> ";
 



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

    	
        function createOpis(a,b,n,v,o) { 

          //str_replace("///",chr(0x0D).chr(0x0A),substr($row->dugi_opis,0,200)).
          for (i=1;i<100;i++){o=o.replace("///", "<br>");}
            var divTag = document.createElement("div");

            divTag.id = "div" + i;

            divTag.setAttribute("align", "center");
	    
            divTag.style.margin = "15px ";
            divTag.style.borderRadius = "0%";
            divTag.style.left = "0px "; 
            divTag.style.top = "0px "; 
	    divTag.style.cursor = "pointer";

            divTag.style.zIndex = 0;

            divTag.className = "mobilni dynamicDiv";


divTag.innerHTML = "<div id='"+divTag.id +"header'></div>" + "<span style='font-size:13px;'>Kontakt osoba:<span style='background-color:yellow;font-size:20px;'>"+v+"</span><br> Sifra jlubimca:</span> <span style='background-color:yellow;font-size:20px;'>"+ a +"</span><br> Ime ljubimca: <span style='background-color:yellow;font-size:20px;'>"+n+"</span> <p style='background-color:#eeeeee;color:blue;'>"+o+"</p> <img  src='"+b+"' style='position:relative;top:5px;width:280px; height:auto;'>";
 




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


//                y = y -50;
//		  x = x - 150;
x=0; y=0;


                document.getElementById(obj).style.top = y + 'px';
                document.getElementById(obj).style.left = x + 'px';
           

        }

        function mouse_down(event, obj) {

            x = event.clientX;
            y = event.clientY;


                document.getElementById(obj).style.zIndex = (z + 1).toString();
                z++; //alert(document.getElementById(obj).style.zIndex);
//                y = y - 50;
//                x = x - 150;
x=0;y=0;
                document.getElementById(obj).style.cursor = 'move';


                document.getElementById(obj).style.top = y + 'px';
                document.getElementById(obj).style.left = x + 'px';
           


        }

        function mouse_up() { //alert(prekidac);
 
               
                document.getElementById(obj).style.cursor = 'auto';
//		document.getElementById(obj).style.width = 300;
//		document.getElementById(obj).style.height = 300;

                obj = "";
           

        }
    </script>
</head>

<body onMouseMove="mouse(event)" onMouseDown="mouse_down(event,obj)" onMouseUp="mouse_up()">