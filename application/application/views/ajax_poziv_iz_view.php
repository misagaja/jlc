<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function daj_sliku(){
    $.ajax({
            url: "<?=site_url("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/daj_sliku_korisnika/". $user;)?>",
            type: "post", // To protect sensitive data
            data: {
               ajax:true,
               id: <?=$user;?>,
               variableY: 25
               //and any other variables you want to pass via POST
                   },
            success:function(response){
            // Handle the response object
            }
        });
}        
</script>
<head>
<body>
<button onclick="daj_sliku()">Slika</button>
</body>