<?php

//Uses bootstrap, so load that.

$datetime = new DateTime; 
$otherTZ  = new DateTimeZone('Europe/Amsterdam');
$datetime->setTimezone($otherTZ); 
					
if ($datetime->format('H')<19) {
  echo "<div class=\"alert alert-success\" role=\"alert\"><strong>";
  echo "Sure!</strong> It's ".$datetime->format('h:i A')." over in the Netherlands.</div>";
} else {
  echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>";
  echo "No!</strong> It's ".$datetime->format('h:i A')." over in the Netherlands.</div>";
}
?>
