<?php

//use DateTime
$date1 = new DateTime();;
$date2 = DateTime::createFromFormat("d-m-Y", "22-10-1983");
$interval = $date1->diff($date2);

echo "Со дня моего рождения прошло " . $interval->days . " дней";