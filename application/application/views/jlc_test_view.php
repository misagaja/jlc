<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Records</title>
</head>

<body>
<?
  foreach($data as $row)
  {   
  
			if ($row->lozinka==$p)
			{
			echo "oooooooooookkkkkkkkkkk";
			//$this->Jlc_Model->upisi_prijavu($u,$p);
			}
			else
			{
			echo "nnnnnoooooooooooooo";
			
			}
  }
  ?>
  </body>
 </html>