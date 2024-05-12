<?php
session_start();


	
$myPDO = new PDO ("pgsql:host=localhost;dbname=rss", "postgres", "posgress");

$h_id = $_POST['id'];	
$cim_mod = $_POST['cim_mod'];
$leiras_mod = $_POST["leiras_mod"];
$szoveg_mod = $_POST["szoveg_mod"];

/*
$day = date("Y/m/d");
$hour = $masodik_meres;
$date = $day. " " . $hour;
*/

if(isset($_GET['action']))
{
			if($_GET['action'] == 'torol')
			{
					$delete = $myPDO -> prepare (' delete from feeds where id = :id');
					$delete -> execute([ 'id' => $h_id]);
					echo '<script>alert("Sikeres törlés!"); window.location.href = \'blank.php\';</script>';
			}

			if($_GET['action'] == 'mentes')
			{
					
					
					
					$update = $myPDO -> prepare (' update feeds set cim = :cim, leiras = :leiras, szoveg = :szoveg where id = :id');
					$update -> execute([ 'cim' => $cim_mod, 'id' => $h_id,  'szoveg' => $szoveg_mod, 'leiras' => $leiras_mod]);

					echo '<script>alert("Sikeres módosítás!"); window.location.href = \'blank.php\';</script>';
					
			}
				
}

?>


