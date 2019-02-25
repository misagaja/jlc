<script>
document.getElementById("pretraga").style.display = "none";
</script>
<style>
.blinking{
    animation:blinkingText 1.0s infinite;
}
@keyframes blinkingText{
    0%{     color: #ff0000;    }
  
    85%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #ff0000;    }
}
</style>
<? $user = $this->session->userdata('user');

if($user<>"admin"){

echo "<span class='blinking' style='position:relative;top:-100px;color:red;'>Korisnik ".$user." nema ovlascenja za ovu opciju!</span>";
}
else
{
?>


<center><span style="position:relative;top:-100px;">Prikaz saradnika</span>
<table  border="1" cellspacing="5" cellpadding="5" style="font-size:14px;position:relative;top:-100px;width:900px;">
  <tr style="background:#CCC">
    <th>Rbr</th>
    
     <th>Ime</th>
     <th>Prezime</th>
     <th>Adresa</th>
     <th>Mesto</th>
     <th>Postbr</th>
     <th>Emejl</th>
     <th>Avatar</th>
     <th>Userame</th>
     <th>Lozinka</th>
     <th>Datum reg.</th>
     <th>Status</th>
     <th>Mobilni tel</th>

	<th>Delete</th>
	<th>Update</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {

  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->ime."</td>";
  echo "<td>".$row->prezime."</td>";
  echo "<td>".$row->adresa."</td>";
  echo "<td>".$row->mesto."</td>";
  echo "<td>".$row->posta."</td>";
  echo "<td>".$row->mejl."</td>";
  echo "<td><img class='magnify' src='".$row->link_slike."' style='width:100px; height:100px;'></td>";
  echo "<td>".$row->userid."</td>";
  echo "<td>".$row->lozinka."</td>";
  echo "<td>".$row->datum_reg."</td>";
  echo "<td>".$row->status."</td>";
  echo "<td>".$row->m_telefon."</td>";

  echo "<td><a href='deletedata/".$row->userid."'>Delete</a></td>";
  echo "<td><a href='updatedata/".$row->userid."'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>
<?
}
?>