<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"></meta>
		<style type="text/css"></style>
		<script type="text/javascript"></script>
		<title>Test4</title>
	</head>
	<body>
		<?php
			//Define the Lottery date and time
			$lotTime = array('Sunday 21:30', 'Tuesday 21:30');
			
			//Set Canada's time
			date_default_timezone_set('America/Toronto');
			//Define Lottery day (set maximum date temporariry)
			$dayLottery = date('Y-m-d', strtotime('9999-12-31'));
			//Loop for number of Lottery date 
			foreach ($lotTime as &$value) {
				if(strtotime('now') <= strtotime($value) && strtotime($value) <= strtotime($dayLottery)) {
				//if this week's Lottery is in future
					//set Lottery date to this [weekday]
					$dayLottery = date('Y-m-d', strtotime($value));
				}else if(strtotime('next ' . $value) <= strtotime($dayLottery)) {
				//if next week's Lottery is in future
					//set Lottery date to next [weekday]
					$dayLottery = date('Y-m-d', strtotime('next ' . $value));
				}
			}
			echo 'Now(Canada): ' . date("Y-m-d H:i:s") . "<br/>";
			echo 'NextLottery: ' . $dayLottery;
		?>
	</body>
</html>
