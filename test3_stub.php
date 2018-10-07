<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"></meta>
		<style type="text/css"></style>
		<script type="text/javascript"></script>
		<title>Test3 Stub</title>
	</head>
	<body>
		<?php
			if(isset($_GET["imgid"])){
				$method = "GET";
				$imgid= $_GET["imgid"];
				$vwtime= $_GET["vwtime"];
				$usragent= $_GET["usragent"];
				}
			if(isset($_POST["imgid"])){
				$method = "POST";
				$imgid= $_POST["imgid"];
				$vwtime= $_POST["vwtime"];
				$usragent= $_POST["usragent"];
			}
			$file = 'test3.log';
			$current = file_get_contents($file);
			$current .= date("Y-m-d H:i:s");
			$current .= " method=>";
			$current .= $method;
			$current .= ", identifire=>";
			$current .= $imgid;
			$current .= ", view_time=>";
			$current .= $vwtime;
			$current .= ", user_agent=>";
			$current .= $usragent;
			$current .= "\n" ;
			file_put_contents($file, $current);
			echo $current;
		?>
	</body>
</html>
