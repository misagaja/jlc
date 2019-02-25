<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include "css.php";
?>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="http://mihgaj8.freehostia.com/codeigniter/index.php/home" class="active">   Почетна</a>
  <a href="http://mihgaj8.freehostia.com/codeigniter/index.php/prijava">   Пријава</a>
  <a href="http://mihgaj8.freehostia.com/codeigniter/index.php/registracija">   Регистрација</a>
  <a href="logout.php">   Одјава</a>
  
  <a href="http://mihgaj8.freehostia.com/codeigniter/index.php/home">home</a>
<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/home1">home1</a>
<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/blog">blo</a>
<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/welcome">welcome</a>
<a href="http://mihgaj8.freehostia.com/codeigniter/index.php/hello">Unos</a>

  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>