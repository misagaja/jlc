<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
//
//------------------------------stil za meni_view.php-----------------------------
//
body { 
	background-color:lightgray;
	color:white;
  	margin: 0;  
  	font-family: Arial, Helvetica, sans-serif;
    }
.topnav 
    { 
    	position:fixed;
    	width:100%;
    	z-index:2;
  	overflow: hidden;
 //	background-color: RGB(246,106,0);
   }

.topnav a 
   {
  	float: left;
  	display: block;
  	color: #f2f2f2;
  	text-align: center;
  	padding: 14px 16px;
  	text-decntion: none;
  	font-size: 17px;
  	border: 1px solid black;
  	margin:5px
   }

.topnav a:hover    
   {
  	background-color: #ddd;
  	color: black;
   }

.active 
   {
//      background-color: #4CAF50;
   	background-color: RGB(233,200,0);
  	color: white;
   }

.topnav .icon 
   {
  	display: none;
   }

@media screen and (max-width: 600px) 
   {
.topnav a:not(:first-child) 
   {
   	display: none;
   }
.topnav a.icon 
   {
    float: right;
    display: block;
   }


@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

}
</style>
//
//--------------------------------------------------------------------------
//    za prirodnu srazmeru dimenzija slike

<style>

	.crop { position:relative;
 		margin:5px 5px 5px 5px;
 		display:inline-block;
 		background-color: white;
 		height: 150px;
 		width: 180px;
 		overflow: hidden;
 
	}
	.crop img {
 		height: auto;
 		width: 180px;
 
 
	}

 	img {
		vertical-align: middle;
	}
</style>