<?php
$host = "localhost";
$user = "postgres";
$pass = "posgress";
$db = "rss";
$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Nem lehet csatlakozni");


// Ellenőrizd, hogy van-e id paraméter az URL-ben
if(isset($_GET['id'])) {
    // Töltsd be az adatbázis kapcsolatot és lekérdezz az adatokat az adott id alapján
    $id = $_GET['id'];
    
    // Példa adatbázis lekérdezés az adott id alapján
    $query = "SELECT * FROM feeds WHERE id = $id";
	$result = pg_query($query) or die('Query failed: ' . pg_last_error());
	
	echo "<body>";
	
	while($row = pg_fetch_assoc($result))
	{
		
		echo "<h1>".$row['cim']."</h1>";
		echo "</br></br>";
		echo " <p>Készítette: <strong> ".$row['szerzo']. "</strong></p>";
		echo "<p> <em>".date("Y. m. d. H:i:s",strtotime($row['letrehozva']))."</em></p>";
		echo " <h2>".$row['leiras']."</h2>";
		echo "<div class='overflow-example'>";
		echo "<p>".$row['szoveg']."</p>";
		echo "</div>";
		echo "</br></br>";
		
	}
	echo "</body>";

    // Futtasd a lekérdezést és jelenítsd meg az adatokat
} else {
    // Ha nincs id paraméter az URL-ben, jeleníts meg egy hibaüzenetet vagy vissza a főoldalra
    echo "Nem található ilyen bejegyzés.";
}
?>

<style>
    .overflow-example {
		padding: 50px;
        width: 1000px; /* Válaszd ki a szükséges szélességet */
        /*white-space: nowrap;  Ne tördelje a szöveget */
       /* overflow: hidden;  Rejtse el a túlcsorduló tartalmat */
        /* text-overflow: ellipsis; Jelenítse meg a "..." jelet a túlcsorduló szöveg után */
		word-wrap: break-word;
    }
	
	
	  body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 10px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        h1, h2, h3 {
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
</style>
