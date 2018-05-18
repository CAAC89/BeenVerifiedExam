<?php
	//Obtain Database
	function getDB(){
		$dbConnection=new PDO("sqlite:C:/Users/Caili/Desktop/ExamenBeenVerified/BeenVerifiedExam/Query/bvde.db");
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $dbConnection;
	}
	
	try{
		$DB=getDB();
		
		
		if(isset($_GET['InputMinimium']) && isset($_GET['InputMaximium'])){
		
		
		// prepare SQL command and execute
	
		  $minimium=$_GET['InputMinimium'];
		  $maximium=$_GET['InputMaximium'];
		  
		  
		  $query = 'SELECT songs.artist as GENDER_ARTISTA,genres.name AS GENDER_NAME, songs.title AS SONG_NAME, songs.duration AS SONG_DURATION  FROM genres INNER JOIN songs ON  (songs.duration >= :minimium  and songs.duration <= :maximium)';
          
		  $stmt = $DB->prepare($query);
		  $stmt->bindParam(':minimium', $minimium, PDO::PARAM_STR);
		  $stmt->bindParam(':maximium', $maximium, PDO::PARAM_STR);
          
          $stmt->execute();
		  
		  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		  $output = array('songSongsConsult'=>$result);
		  echo json_encode($output);
         // close the database connection
         $db = NULL;
		 
		 
		 
		 
		}

	}
	catch(PDOException $e){
		echo 'Exception : '.$e->getMessage();
	}

?>