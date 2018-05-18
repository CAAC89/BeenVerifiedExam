<?php
	//Obtain Database
	function getDB(){
		$dbConnection=new PDO("sqlite:C:/Users/Caili/Desktop/ExamenBeenVerified/BeenVerifiedExam/Query/bvde.db");
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $dbConnection;
	}
	
	try{
		$DB=getDB();
		
		
		//if(isset($_GET['InputMinimium']) && isset($_GET['InputMaximium'])){
		
		
		// prepare SQL command and execute
	
		 // $minimium=$_GET['InputMinimium'];
		  //$maximium=$_GET['InputMaximium'];
		  
		  
		  $query = 'Select  genres.name as GENDER_NAME,count(songs.title), sum(songs.duration) FROM songs inner join genres GROUP BY genres.name';
          
		  $stmt = $DB->prepare($query);
		  //$stmt->bindParam(':minimium', $minimium, PDO::PARAM_STR);
		  //$stmt->bindParam(':maximium', $maximium, PDO::PARAM_STR);
          
          $stmt->execute();
		  
		  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		  $output = array('SongsConsult'=>$result);
		  echo json_encode($output);
         // close the database connection
         $db = NULL;
		 
		 
		 
		 
		}

	//}
	catch(PDOException $e){
		echo 'Exception : '.$e->getMessage();
	}

?>