<?php
	$id = $_GET['id'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/json/courses.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
    $exec = curl_exec($curl);
    curl_close($curl);

    //echo $exec;

	$data = json_decode($exec);

	//print_r($data);

	foreach($data as $key => $value)
	{
	echo $key . '<br>';
	echo 'COURSE ID: ' . $value->id;
	echo '<br>';
	echo 'COURSE TITLE: ' . $value->c_title;
	echo '<br>';
	echo 'COURSE DATE: ' . $value->c_date;
	echo '<br>';
	echo 'COURSE TIME: ' . $value->c_view;
	echo '<hr>';
	}
?>
<a href="request _cmtc.php">กลับมาหน้าหลัก</a>
