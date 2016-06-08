<?php

	if(isset($_GET['id'])){
		$id=preg_replace("/[^0-9]/", '', $_GET['id']);
		if(empty($id)){
			header('Location: ./');
		}

		$sql="select * from strani where id=:id limit 1";
		try{
			$query=$db->prepare($sql);
			$query->bindParam( ":id" , $id , PDO::PARAM_INT);
			$query->execute();
			$results = $query->fetchAll( PDO::FETCH_ASSOC );
			$row = array_shift( $results );
			$query->closeCursor();
		}catch( Exception $e ){
			die( $e->getMessage );
		}

	}else{
		header('Location: ./');
	}


?>