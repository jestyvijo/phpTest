<?php
require "config.php";
$cut = $cutOffTime;
$hdays = $holidays;
//$date - Y-m-d format
function getShippingDate($orderDate, $orderTime)
{
	global $cut;
	global $hdays;
	$day = date("l", strtotime($orderDate));
	$dd = date('N', strtotime($day));
	switch ($dd) {
		case 1:
			$availdate = date('Y-m-d', strtotime(' +2 day'));
			return $availdate;
		case 2:
			$availdate = date('Y-m-d', strtotime(' +1 day'));
			return $availdate;
		case 3:
			$availdate = date('Y-m-d', strtotime(' +0 day'));
			return $availdate;
		case 4:
			if ($orderTime >= 11) {
				$availdate = date('Y-m-d', strtotime(' +1 day'));
				return $availdate;
			}
			else{
			$availdate = date('Y-m-d');
			return $availdate;
			}
		case 5:
			if ($orderTime >= 11) {
				$availdate = date('Y-m-d', strtotime(' +1 day'));
				return $availdate;
			}
			else{
			$availdate = date('Y-m-d');
			return $availdate;
			}
		case 6:
			$availdate = date('Y-m-d', strtotime(' +4 day'));
			return $availdate;
		case 7:
			$availdate = date('Y-m-d', strtotime(' +3 day'));
			return $availdate;
	}
}

?>