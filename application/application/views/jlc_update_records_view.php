<?php
  $i=1;
  foreach($data as $row)
  {
  ?>

  
	<form method="post"><center><span style="position:relative;top:-100px;">Izmena podataka</span> 
		<table width="600" border="1" cellspacing="5" cellpadding="5" style="position:relative;top:-100px;">
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="ime" value="<?php echo $row->ime; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your Surname </td>
    <td width="329"><input type="text" name="prezime" value="<?php echo $row->prezime; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your Adres </td>
    <td width="329"><input type="text" name="adresa" value="<?php echo $row->adresa; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your City </td>
    <td width="329"><input type="text" name="mesto" value="<?php echo $row->mesto; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your Post num. </td>
    <td width="329"><input type="text" name="posta" value="<?php echo $row->posta; ?>"/></td>
  </tr>

  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="mejl" value="<?php echo $row->mejl; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your Picture addr </td>
    <td width="329"><input type="text" name="link_slike" id="link_slike" ondblclick="getElementById('link_slike').value=''" onblur="getElementById('slika').src=this.value;" value="<?php echo $row->link_slike; ?>"/>
	<img id="slika" class='magnify' src='<? echo $row->link_slike;?>' style='width:100px; height:100px;'>
    </td>
  </tr>
 <tr>
    <td width="230">Enter Your Username </td>
    <td width="329"><input type="text" readonly="readonly" name="userid" title="ne moze se promeniti" value="<?php echo $row->userid; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your Password </td>
    <td width="329"><input type="text" name="lozinka" value="<?php echo $row->lozinka; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter taday Date </td>
    <td width="329"><input type="text" name="datum" value="<?php echo $row->datum_reg; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your Status </td>
    <td width="329"><input type="text" name="status" value="<?php echo $row->status; ?>"/></td>
  </tr>


  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="m_telefon" value="<?php echo $row->m_telefon; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>

	</form>
	<?php } ?>
<script>
document.getElementById("pretraga").style.display = "none";
</script>