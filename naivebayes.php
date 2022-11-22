<table border='1' align='center'>
	<tr>
		<th>No</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Education Level</th>
		<th>Institution Type</th>
        <th>Financial Condition</th>
        <th>Internet Type</th>
        <th>Self Lms</th>
        <th>Device</th>
        <th>Adaptivity Level</th>
        <th>Nilai Prob Low</th>
        <th>Nilai Prob Moderate</th>
        <th>Nilai Prob High</th>
		<th>Prediksi Penerimaan</th>
		<th>Valid</th>		
	</tr>

<?php
include "koneksi.php";
$total = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM data3"));
$low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 10` LIKE 'low'"));
$moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 10` LIKE 'moderate'"));
$high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 10` LIKE 'high'"));
$plow = $low/$total;
$pmoderate = $moderate/$total;
$phigh = $high/$total;

$sql = "SELECT * FROM data3";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query)){
	$no = $row['COL 1'];
	$gender = $row['COL 2'];
	$age = $row['COL 3'];
	$el = $row['COL 4'];
	$it = $row['COL 5'];
    $fc = $row['COL 6'];
    $itype = $row['COL 7'];
    $slms = $row['COL 8'];
    $device = $row['COL 9'];
    $al = $row['COL 10'];
	
	//Gender
	$gender_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 2` LIKE '$gender' AND `COL 10` LIKE 'low'"));
	$gender_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 2` LIKE '$gender' AND `COL 10` LIKE 'moderate'"));
    $gender_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 2` LIKE '$gender' AND `COL 10` LIKE 'high'"));
	$pgender_low = $gender_low/$low;
	$pgender_moderate = $gender_moderate/$moderate;
    $pgender_high = $gender_high/$high;
	
	//Age
	$age_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 3` LIKE '$age' AND `COL 10` LIKE 'low'"));
	$age_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 3` LIKE '$age' AND `COL 10` LIKE 'moderate'"));
	$age_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 3` LIKE '$age' AND `COL 10` LIKE 'high'"));
	$page_low = $age_low/$low;
	$page_moderate = $age_moderate/$moderate;
	$page_high = $age_high/$high;
	
	//Education Level
	$el_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 4` LIKE '$el' AND `COL 10` LIKE 'low'"));
	$el_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 4` LIKE '$el' AND `COL 10` LIKE 'moderate'"));
	$el_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 4` LIKE '$el' AND `COL 10` LIKE 'high'"));
	$pel_low = $el_low/$low;
	$pel_moderate = $el_moderate/$moderate;
	$pel_high = $el_high/$high;
	
	//Institution Type
	$it_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 5` LIKE '$it' AND `COL 10` LIKE 'low'"));
	$it_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 5` LIKE '$it' AND `COL 10` LIKE 'moderate'"));
	$it_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 5` LIKE '$it' AND `COL 10` LIKE 'high'"));
	$pit_low = $it_low/$low;
	$pit_moderate = $it_moderate/$moderate;
	$pit_high = $it_high/$high; 

	//Financial Condition
	$fc_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 6` LIKE '$fc' AND `COL 10` LIKE 'low'"));
	$fc_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 6` LIKE '$fc' AND `COL 10` LIKE 'moderate'"));
	$fc_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 6` LIKE '$fc' AND `COL 10` LIKE 'high'"));
	$pfc_low = $fc_low/$low;
	$pfc_moderate = $fc_moderate/$moderate;
	$pfc_high = $fc_high/$high;

	//Internet Type
	$itype_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 7` LIKE '$itype' AND `COL 10` LIKE 'low'"));
	$itype_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 7` LIKE '$itype' AND `COL 10` LIKE 'moderate'"));
	$itype_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 7` LIKE '$itype' AND `COL 10` LIKE 'high'"));
	$pitype_low = $itype_low/$low;
	$pitype_moderate = $itype_moderate/$moderate;
	$pitype_high = $itype_high/$high;

	//Self -LMS
	$slms_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 8` LIKE '$slms' AND `COL 10` LIKE 'low'"));
	$slms_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 8` LIKE '$slms' AND `COL 10` LIKE 'moderate'"));
	$slms_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 8` LIKE '$slms' AND `COL 10` LIKE 'high'"));
	$pslms_low = $slms_low/$low;
	$pslms_moderate = $slms_moderate/$moderate;
	$pslms_high = $slms_high/$high;  

	//Device
	$device_low = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 9` LIKE '$device' AND `COL 10` LIKE 'low'"));
	$device_moderate = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 9` LIKE '$device' AND `COL 10` LIKE 'moderate'"));
	$device_high = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 9` LIKE '$device' AND `COL 10` LIKE 'high'"));
	$pdevice_low = $device_low/$low;
	$pdevice_moderate = $device_moderate/$moderate;
	$pdevice_high = $device_high/$high;
	
	$nilai_prob_low = $plow * $pgender_low * $page_low * $pel_low * $pit_low * $pfc_low * $pitype_low * $pslms_low * $pdevice_low;
	$nilai_prob_moderate = $pmoderate * $pgender_moderate * $page_moderate * $pel_moderate * $pit_moderate * $pfc_moderate * $pitype_moderate * $pslms_moderate * $pdevice_moderate;
	$nilai_prob_high = $phigh * $pgender_high * $page_high * $pel_high * $pit_high* $pfc_high * $pitype_high * $pslms_high * $pdevice_high;

	if($nilai_prob_low > $nilai_prob_moderate && $nilai_prob_low > $nilai_prob_high){
		$prediksi = 'Low';
		if($al == $prediksi){
			$valid = "Benar";
		}else{
			$valid = "Salah";
		}
	}else if($nilai_prob_moderate > $nilai_prob_low && $nilai_prob_moderate > $nilai_prob_high){
		$prediksi = 'Moderate';
		if($al == $prediksi){
			$valid = "Benar";
		}else{
			$valid = "Salah";
		}
	}else{
		$prediksi = 'High';
		if($al == $prediksi){
			$valid = "Benar";
		}else{
			$valid = "Salah";
		}
	}
	
	mysqli_query($conn, "UPDATE `data3` SET `COL 11`='$prediksi', `COL 12`='$valid' WHERE `COL 1`='$no'");
	echo "
	<tr>
		<td>$no</td>
		<td>$gender</td>
		<td>$age</td>
		<td>$el</td>
		<td>$it</td>
		<td>$fc</td>
		<td>$itype</td>
		<td>$slms</td>
		<td>$device</td>
		<td><font color='blue'>$al</font></td>
		<td>$nilai_prob_low</td>
		<td>$nilai_prob_moderate</td>
		<td>$nilai_prob_high</td>
		<td><font color='blue'>$prediksi</font></td>
		<td>$valid</td>		
	</tr>

	";

}
?>
</table>

<?php
$benar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3` WHERE `COL 12`='Benar'"));
$total_testing = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `data3`"));

$accuracy = round($benar / $total_testing *100,2);
echo "<center><h3>Total Data Testing : $total_testing Data</h3></center>";
echo "<center><h3>Total Data Prediksi Benar : $benar Data</h3></center>";
echo "<center><h3>Accuracy : $accuracy %</h3></center>";
?>