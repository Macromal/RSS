<?php
session_start();

	$myPDO = new PDO ("pgsql:host=localhost;dbname=rss", "postgres", "posgress");

	
	$title_sajat = $_POST['title_sajat'];
	$link_sajat = $_POST['link_sajat'];
	//$message = $_POST['message'];
	$fsz = $_SESSION['felhasznalo'];
	
	$stmt  = $myPDO -> prepare ("Select nev from users where fsznev = :fsz ");
	$stmt -> execute([  'fsz' => $fsz]);
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$nev = $row['nev'];
	

	$portas  = $myPDO -> prepare ("INSERT INTO feeds( cim, link, szerzo,  letrehozva,  feltoltotte)VALUES (:title, :link, :szerzo,  now(),  :feltolt );");
	$portas -> execute([  'title' => $title_sajat, 'link' => $link_sajat, 'szerzo' => $nev,  'feltolt' => $fsz  ]);
			
header("location:mentett_feed.php");
?>