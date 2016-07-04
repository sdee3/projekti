<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//Getting values 
		$sifra = $_POST['sifra'];
		$utakmica = $_POST['utakmica'];
		$ki1 = $_POST['ki1'];
		$kix = $_POST['kix'];
		$ki2 = $_POST['ki2'];
		$ug02 = $_POST['ug02'];
		$ug3p = $_POST['ug3p'];
		$specijal = $_POST['specijal'];
		
		//importing database connection script 
		require_once('dbConnect.php');
		
		//Creating sql query 
		$sql = "UPDATE lista SET utakmica = '$utakmica', ki1 = '$ki1', kix = '$kix', ki2 = '$ki2', ug02 = '$ug02', ug3p = '$ug3p', specijal = '$specijal' WHERE sifra = $sifra;";
		
		//Updating database table 
		if(mysqli_query($con,$sql)){
			echo 'Ažuriranje uspešno!';
		}else{
			echo 'Greška pri ažuriranju.';
		}
		
		//closing connection 
		mysqli_close($con);
	}
	
?>