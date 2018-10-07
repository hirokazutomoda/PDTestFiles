
<?php
 
$nums1 = [1,2,3,2,1];
$nums2 = [3] ;
Q2_1($nums1, $nums2);
Q2_2($nums1, $nums2);

$nums1 = [4,9,5,5,7];
$nums2 = [9,4,9,8,4];
Q2_1($nums1, $nums2);
Q2_2($nums1, $nums2);

$nums1 = [4,9,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,7];
$nums2 = [9,4,9,8,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4];
Q2_1($nums1, $nums2);
Q2_2($nums1, $nums2);

function Q2_1($nums1, $nums2){
	$stt = microtime(true);
	foreach($nums1 as $value1){
		foreach($nums2 as $value2){
			echo '|';
			if ($value1 == $value2){
				$numMerged[] = $value1;
			}
		}
	}
	$numMerged = array_unique($numMerged);
	echo '<br>';
	var_dump($numMerged);
	echo '<br>';
	echo microtime(true) - $stt;
	echo 'μsec<br>';
	echo '<br>';
} 

function Q2_2($nums1, $nums2){
	$stt = microtime(true);
	$nums1 = array_unique($nums1);
	$nums2 = array_unique($nums2);
	foreach($nums1 as $value1){
		foreach($nums2 as $value2){
			echo '|';
			if ($value1 == $value2){
				$numMerged[] = $value1;
			}
		}
	}
	echo '<br>';
	var_dump($numMerged);
	echo '<br>';
	echo microtime(true) - $stt;
	echo 'μsec<br>';
	echo '<br>';
} 
?>