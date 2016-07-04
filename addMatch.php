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
		
		//Creating an sql query
		$sql = "INSERT INTO lista (sifra,utakmica,ki1,kix,ki2,ug02,ug3p,specijal) VALUES ('$sifra','$utakmica','$ki1','$kix','$ki2', '$ug02', '$ug3p', '$specijal');";
		
		//Importing our db connection script
		require_once('dbConnect.php');
		
		//Executing query to database
		if(mysqli_query($con,$sql)){
			echo 'Dodavanje uspešno!';
		}else{
			echo 'Greška prilikom dodavanja.';
		}
		
		//Closing the database 
		mysqli_close($con);
	}
?>