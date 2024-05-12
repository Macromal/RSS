<?php
session_start();

$myPDO = new PDO ("pgsql:host=localhost;dbname=rss", "postgres", "posgress");

$h_id = $_POST['id'];	
$cim_mod = $_POST['cim_mod'];
$link_mod = $_POST["link_mod"];

if(isset($_GET['action']))
{
			if($_GET['action'] == 'torol')
			{
					$delete = $myPDO -> prepare (' delete from feeds where id = :id');
					$delete -> execute([ 'id' => $h_id]);
					echo '<script>alert("Sikeres törlés!"); window.location.href = \'mentett_feed.php\';</script>';
			}

			if($_GET['action'] == 'mentes')
			{
				if(!empty($cim_mod))
				{
					$update = $myPDO -> prepare (' update feeds set cim = :cim where id = :id');
					$update -> execute([ 'cim' => $cim_mod, 'id' => $h_id]);
				}
				
				if(!empty($link_mod))
				{
					$update = $myPDO -> prepare (' update feeds set  link = :link where id = :id');
					$update -> execute(['id' => $h_id,  'link' => $link_mod]);
				}
					

					echo '<script>alert("Sikeres módosítás!"); window.location.href = \'mentett_feed.php\';</script>';		
			}
				
}

?>


