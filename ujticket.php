<?php
session_start();

	$myPDO = new PDO ("pgsql:host=localhost;dbname=rss", "postgres", "posgress");

	
	$title = $_POST['title'];
	$description = $_POST['description'];
	$message = $_POST['message'];
	$fsz = $_SESSION['felhasznalo'];
	
	$stmt  = $myPDO -> prepare ("Select nev from users where fsznev = :fsz ");
	$stmt -> execute([  'fsz' => $fsz]);
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$nev = $row['nev'];
	

	$portas  = $myPDO -> prepare ("INSERT INTO feeds( cim, szerzo, szoveg, letrehozva, leiras, feltoltotte)VALUES (:title, :szerzo, :szoveg, now(), :leiras, :feltolt );");
	$portas -> execute([  'title' => $title, 'szerzo' => $nev, 'szoveg' => $message, 'leiras' => $description, 'feltolt' => $fsz  ]);
			
header("location:blank.php");
?>