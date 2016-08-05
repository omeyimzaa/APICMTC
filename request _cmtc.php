<?php
	
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/lab/movie.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
    $exec = curl_exec($curl);
    curl_close($curl);

    //echo $exec;

	$data = json_decode($exec);

	//print_r($data);

	foreach($data as $key => $value)
	{
	echo $key . '<br>';
	echo 'ID: ' . $value->Id;
	echo '<br>';
	echo 'IMDB: '.$value->ImdbId;
	echo '<br>';
	echo 'OriginalTitle: '.$value->OriginalTitle;
	echo '<br>';
	echo 'Title: '.$value->Title;
	echo '<br>';
	echo 'Description: '.$value->Description;
	echo '<br>';
	echo 'TrailerLink: '.$value->TrailerLink;
	echo '<hr>';
	}
?>