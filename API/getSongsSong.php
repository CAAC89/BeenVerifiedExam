<?php
	//Obtain Database
	function getDB(){
		$dbConnection=new PDO("sqlite:C:/Users/Caili/Desktop/ExamenBeenVerified/BeenVerifiedExam/Query/bvde.db");
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $dbConnection;
	}
	
	try{
		$DB=getDB();
		
		
		if(isset($_GET['InputSong'])){
		
		// prepare SQL command and execute
	
		  $song=$_GET['InputSong'];
		  $query = 'SELECT songs.artist as GENDER_ARTISTA,genres.name AS GENDER_NAME, songs.title AS SONG_NAME, songs.duration AS SONG_DURATION  FROM genres INNER JOIN songs ON  songs.title = :songname';
          
		  $stmt = $DB->prepare($query);
		  $stmt->bindParam(':songname', $song, PDO::PARAM_STR);
          
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