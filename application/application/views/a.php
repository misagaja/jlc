<?
php session_start();

$userid=$_SESSION["userid"];


$lozinka=$_SESSION["lozinka"];


$t=time();
$t=$t+7200;

$datum = date('d.m.Y H:i:s', $t);


$host = "localhost";

$username = "mihgaj2_DbSkola";

$password = "4557032";

$dbname = "mihgaj2_DbSkola";

$conn=mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";

mysql_select_db("$dbname") or die(mysql_error());
//echo "Connected to Database";

// Retrieve data from database 

$query = "SELECT * FROM prijave_v WHERE status=1 and lozinka='" . $lozinka. "' and userid='". $userid."';";
//echo $query;

$result = mysql_query($query);

if(mysql_num_rows($result) == 0) {


	//    echo "<p>No description</p>";echo "nema slajder<br>";
  
	$query="INSERT INTO prijave_v SET  status=1, userid='".$userid."', lozinka='".$lozinka."', vreme_prijave ='".$datum."';";
//echo $query;    

	$result = mysql_query($query);

	header("Location: recnik_v.php");

}

else 
{
	header("Location: recnik_v.php");
}
?>