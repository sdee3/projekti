<?php 
	//Importing Database Script 
	require_once('dbConnect.php');
	
	//Creating sql query
	$sql = "SELECT * FROM lista";
	
	//getting result 
	$r = mysqli_query($con,$sql);
	
	//creating a blank array 
	$result = array();
	
	//looping through all the records fetched
	while($row = mysqli_fetch_array($r)){
		
		//Pushing sve(?) in the blank array created 
		array_push($result,array(
			"sifra"=>$row['sifra'],
			"utakmica"=>$row['utakmica'],
			"ki1"=>$row['ki1'],
			"kix"=>$row['kix'],
			"ki2"=>$row['ki2'],
			"ug02"=>$row['ug02'],
			"ug3p"=>$row['ug3p'],
			"specijal"=>$row['specijal']
		));
	}
	
	//Displaying the array in json format 
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
	
	?>