<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to My First CodeIgniter Application</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
    	
//    	#container {width:1100px;}
      li { transition: all 1.0s ease-in-out;font-size:12px;padding:30px;float:left;position:relative; }
      li:hover { transform: scale(1.14); }
 
      
    </style>
</head>
<body >
<div>
<div class="gallery" style="margin:0 auto;width:90%;">
 <center>   <ul>
    <?php  foreach($images as $img): ?>
        <li style='position:relative;float:left;padding:10px;list-style: none;'><img  style="width:350px; height:500px;" src="<?php echo $img['adresa']; ?>" /><br><?php echo $img['uneo']."</li>";?>
    <?php endforeach; ?>
    </ul>
</div>
</div>
</body>
</html>