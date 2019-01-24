<?php
session_start();
require_once("connection.php");
include_once("functions.php");

if(isset($_POST['total_count']) && $_POST['total_count']!=''){
	$total_count =  mysqli_real_escape_string($con,addslashes(specialchars($_POST["total_count"])));
	
	$checkQ =  "SELECT a.hotel_id,a.hotel_name,sum(a.capacity) as 'capacity','' as 'hotel_img' from 
				(SELECT trm.hotel_id,thm.hotel_name,trm.capacity,ifnull(trb.is_booked,0) as 'is_booked' 
				from tbl_room_master trm
				JOIN tbl_hotel_master thm on (trm.hotel_id = thm.hotel_id)
				left JOIN tbl_room_booking trb on (trb.room_id = trm.room_id)
				) a WHERE a.is_booked=0  GROUP BY a.hotel_id having capacity>=".$total_count;
	$result = $con->query($checkQ);
	$num_rows = $result->num_rows;
	$hotelsArray = array();
	$count=0;
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$hotelsArray[$count]['hotel_id'] =   $row['hotel_id'];
		$hotelsArray[$count]['hotel_name'] = $row['hotel_name'];
		$hotelsArray[$count]['hotel_img'] =  $row['hotel_img'];
		$count++;
	}
	echo  json_encode($hotelsArray);
}
?>