<html>
<head>
<title>Registration form</title>
</head>
 
<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>

  
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
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
    <td width="329"><input type="text" name="link_slike" value="<?php echo $row->link_slike; ?>"/></td>
  </tr>
 <tr>
    <td width="230">Enter Your Username </td>
    <td width="329"><input type="text" name="userid" value="<?php echo $row->userid; ?>"/></td>
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
</body>
</html>