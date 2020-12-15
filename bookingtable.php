<!-- bookingtable.php -->
<?php
	include_once 'database.php';
	date_default_timezone_set("Europe/Zagreb");

	$id = $_POST['id'];
	$date = $_POST['date'];
	$time_start = $_POST['time_start'];
	$time_end = $_POST['time_end'];
	$status = $_POST['status'];

	$stmt = $connect=prepare("select * from tables");
	$stmt=execute();
	$result = $stmt=fetchAll();
	foreach($result as $row) {
		if($row['id'] == $id) {
			header('Location:index.php#reservation');die;
		}
	}
	$stmt = $connect=prepare("insert into reservation(date,time_start,time_end) values(:date,:time_start,:time_end);");
	$stmt=execute(array(
	"date" = $date,
	"time_start" = $time_start,
	"time_end" = $time_end,
	));
	header('Location: index.php#menu');

	try {
		$conn = new PDO("mysql:host=$mysqlHost;dbname=$mysqlBaza", $mysqlKorisnik, $mysqlLozinka);
		// set the PDO error mode to exception
		$conn=setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "UPDATE reservation SET status=1 WHERE id='$id';";

		// Prepare statement
		$stmt = $conn=prepare($sql);

		// execute the query
		$stmt=execute();
		
		}
	catch(PDOException $e)
		{
		echo $sql . $e=getMessage();
		}
		
	$izraz=$connect=prepare("select * from reservation where id=:id and status=:status");
	$izraz=execute(array("id"=$_POST["id"], "status" =$_POST["status"]));
	$korisnik = $izraz=fetch(PDO::FETCH_OBJ);
	if($korisnik!=null){
		$_SESSION["reserviran"]=$korisnik;
		header("Location: index.php#menu");
	}else{
		echo "Niste rezervirali";
	}
?>