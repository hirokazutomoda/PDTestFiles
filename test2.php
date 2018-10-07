<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"></meta>
		<style type="text/css"></style>
		<script type="text/javascript"></script>
		<title>Test2</title>
	</head>
	<body>
		<?php
			//connection information
			$link = mysqli_connect("localhost", "root", "root", "test2db");
			//case for failed to connect
			if($link === false){
				die("error: " . mysqli_connect_error());
			}
			//escape special letter
			$frmName = mysqli_real_escape_string($link, $_REQUEST['frmName']);
			$frmAge = mysqli_real_escape_string($link, $_REQUEST['frmAge']);
			$frmJobPost = mysqli_real_escape_string($link, $_REQUEST['frmJobPost']);
			//get time stamp
			$last_updated = date("Y/m/d H:i:s");
			//create SQL
			$sql = "INSERT INTO users (name, age, job_title, inserted_on, last_updated) VALUES ('$frmName', $frmAge, '$frmJobPost', 'SYSTEM', '$last_updated')";
			//execute SQL
			if(mysqli_query($link, $sql)){
				echo "success.";
			} else{
				echo "error: $sql. " . mysqli_error($link);
			}
			//close connection
			mysqli_close($link);
		?>
	</body>
</html>
