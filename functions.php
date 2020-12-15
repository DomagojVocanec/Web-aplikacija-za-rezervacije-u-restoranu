<?php

	function reservation($table_id, $date, $time_start, $time_end, $status, $connect)
	{
		 try {
			  $connect->beginTransaction();

			  
			  $query = $connect->prepare('insert into reservation (id, status) values(:id,:status)');
			  $query->bindValue(':id', $id);
			  $query->bindValue(':status', $status);
			  $query->execute();

			 
			  $query = $connect->prepare('select status from tables where id=:id');
			  $query->bindValue(':status', $status);
			  $query->execute();
			  $bookAmount = $query->fetchColumn();

			  
			  $query = $connect->prepare('update tables set status=1 where id=:id');
			  $query->bindValue(':status', $status);
			  $query->execute();

			  $connect->commit();

			  header('Location: #menu?success');
		 } catch (PDOException $e) {
			  $connect->rollBack();
		  }
		
	}
?>