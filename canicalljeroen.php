<?php

//Uses bootstrap, so load that.

$datetime = new DateTime; 
$otherTZ  = new DateTimeZone('Europe/Amsterdam');
$datetime->setTimezone($otherTZ); 
					
if ($datetime->format('H')<17&&$datetime->format('H')>=7) {
						echo "<div class=\"alert alert-success\" role=\"alert\"><strong>";
						echo "Sure!</strong> It's ".$datetime->format('h:i A')." over in the Netherlands.</div>";
					} elseif ($datetime->format('H')>=17&&$datetime->format('H')<19) {
						echo "<div class=\"alert alert-warning\" role=\"alert\"><strong>";
						echo "Maybe!</strong> It's ".$datetime->format('h:i A')." over in the Netherlands. Is it urgent, or can it wait?</div>";
					} elseif ($datetime->format('H')>=19&&$datetime->format('H')<23) {
						echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>";
						echo "No!</strong> It's ".$datetime->format('h:i A')." over in the Netherlands.</div>";
					} elseif ($datetime->format('H')>=23||$datetime->format('H')<7) {
						echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>";
						echo "No, absolutely not! What's wrong with you!?</strong> It's ".$datetime->format('h:i A')." over in the Netherlands.</div>";
					} else {
						echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>";
						echo "No!</strong> It's ".$datetime->format('h:i A')." over in the Netherlands.</div>";
					}
?>


