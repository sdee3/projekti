<?php 
	
	//Getting the requested id
	$sifra = $_GET['sifra'];
	
	//Importing database
	require_once('dbConnect.php');
	
	//Creating sql query with where clause to get an specific employee
	$sql = "SELECT * FROM lista WHERE sifra=$sifra";
	
	//getting result 
	$r = mysqli_query($con,$sql);
	
	//pushing result to an array 
	$result = array();
	$row = mysqli_fetch_array($r);
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
 
	//displaying in json format 
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
	
?>