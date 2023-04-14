<?php

//use DateTime
$date1 = new DateTime();;
$date2 = DateTime::createFromFormat("d-m-y", "17-04-23");
$interval = $date1->diff($date2);

echo $interval->days . "\n";