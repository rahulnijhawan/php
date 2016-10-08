<?php
error_reporting(1);
ini_set('error_displays', 1);



 $rcNocIssuedDate = '23/5/11';
  if (trim($rcNocIssuedDate) !== '' &&
  		 ($timestamp = strtotime($rcNocIssuedDate)) !== false
  	) {
         
        $dt = new DateTime();
        $dt->setTimestamp($timestamp);
        echo $dt->format('m, Y');
      
  }  else {
    echo 'N/A';
  }
?>