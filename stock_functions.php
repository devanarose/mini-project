<?php 

	function getNoOfRooms($roomid){
		global $con;
		$sql = "SELECT * FROM tbl_payment INNER JOIN tbl_bookingmaster ON tbl_bookingmaster.bp_id = tbl_payment.bp_id ";

		
		$bookingMasters = $con->query($sql)->fetch_all(MYSQLI_ASSOC);

		$noOfPaidRooms = 0;
		foreach($bookingMasters as $bookingMaster){
			$sql = "SELECT * FROM tbl_bookingchild WHERE room_id = {$roomid} AND bp_id={$bookingMaster['bp_id']}";
			$paidRooms = $con->query($sql)->fetch_all(MYSQLI_ASSOC);
			
			foreach ($paidRooms as $i => $paidRoom) {
				if(strtotime($paidRoom['checkin'] . " {$paidRoom['nod']} days 0 hours 0 minutes 0 seconds") <= time()) {
					continue;
				}
				$noOfPaidRooms += $paidRoom['nor']; 
			}
		}
		
		$sql = "SELECT qty as sum_rooms FROM tbl_room_management WHERE room_id = {$roomid}";
		$noOfRoomsAvailable = $con->query($sql)->fetch_assoc()['sum_rooms'];
		
		return ((int)$noOfRoomsAvailable - (int)$noOfPaidRooms);
		
	}


	function getNoOfRoomsav($roomid,$date){
		global $con;
		$sql = "SELECT * FROM tbl_payment INNER JOIN tbl_bookingmaster ON tbl_bookingmaster.bp_id = tbl_payment.bp_id ";

		
		$bookingMasters = $con->query($sql)->fetch_all(MYSQLI_ASSOC);

		$noOfPaidRooms = 0;
		foreach($bookingMasters as $bookingMaster){
			$sql = "SELECT * FROM tbl_bookingchild WHERE room_id = {$roomid} AND bp_id={$bookingMaster['bp_id']}";
			$paidRooms = $con->query($sql)->fetch_all(MYSQLI_ASSOC);
			// echo strtotime($date . " 0 hours 0 minutes 0 seconds ")."<br>";
			foreach ($paidRooms as $i => $paidRoom) {
				// echo strtotime($paidRoom['checkin'] . " {$paidRoom['nod']} days 0 hours 0 minutes 0 seconds")."  ";
				if(strtotime($paidRoom['checkin'] . " {$paidRoom['nod']} days 0 hours 0 minutes 0 seconds") >= strtotime($date . " 0 hours 0 minutes 0 seconds ") && strtotime($paidRoom['checkin'] . " 0 hours 0 minutes 0 seconds") <= strtotime($date . " 0 hours 0 minutes 0 seconds ")) {
					$noOfPaidRooms += $paidRoom['nor'];
				}
			}
		}
		
		$sql = "SELECT qty as sum_rooms FROM tbl_room_management WHERE room_id = {$roomid}";
		$noOfRoomsAvailable = $con->query($sql)->fetch_assoc()['sum_rooms'];
		
		return ((int)$noOfRoomsAvailable - (int)$noOfPaidRooms);
		
	}
?>