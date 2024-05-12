<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="300">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
	<title>RSS Feed Reader</title>

<h1>PUBLIKUS RSS FEED-ek</h1>
</br>
<style>
.container
{
	width: 80%;
	margin: auto;
}
.desc img
{
	width:100%;
}
.item
{
	width:200px;
	float:left;
	height:500px;
	padding:10px;
}
</style>

<!-- PHP kód behelyezése -->
<?php
$url = "http://localhost/rss/rsscreate.php"; //$xml_file = 'feed.xml'; // ha xml fájlt használunk

$feedArr = json_decode(json_encode(simplexml_load_file($url)),true); // akkor itt a $url-t át kell írni $xml_file-ra
if(isset($feedArr['channel']))
	{
		if(isset($feedArr['channel']['item']))
		{
			echo "<div class='container'>";
			echo "<div class='card-group'>";
			foreach($feedArr['channel']['item'] as $items)
			{
				echo "<div class='col-sm-3' style='padding: 10px'>";
				
				echo "<div class='card card-inline' style='width: 18rem; margin-right: 10px;'>";
				
					//echo "<img src='...' class='card-img-top' alt='...'>";
					echo "<div class='card-body'>";
						echo "<a href='rsspage.php?id=".$items['azn']."' target='_blank'><h5 class='card-title'>".$items['title']."</h5></a>";
						echo "<p class='card-text'>".$items['description']."</p>";
						//echo "<p class='card-text'>".$items['text']."</p>";
						//echo "<a href='#' class='btn btn-primary'>Go somewhere</a>";
					echo "</div>";
					
					echo "<div class='card-footer'>";
					echo "<small class='text-muted' style='font-size: 10px;'>Létrehozva: ".$items['pubDate']."</small>";
					echo "</div>";
					
					
				echo "</div>";
				
				echo "</div>";
				
			}
			echo "</div>";
			echo "</div>";
		}
		else
		{
			echo "Hibás item";
		}
	}
else
{
	echo "Hibás chanel";
}

/*  // FÁJLBÓL VALÓ BEOLVASÁS

$xml_file = 'feed.xml'; // Az XML fájl elérési útja

$feedArr = json_decode(json_encode(simplexml_load_file($xml_file)), true);
if (isset($feedArr['channel'])) {
    if (isset($feedArr['channel']['item'])) {
        echo "<div class='container'>";
        foreach ($feedArr['channel']['item'] as $items) {
            echo "<div class='item'>";
            echo "<a href=rsspage.php?id=" . $items['azn'] . " target='_blank'><h2>" . $items['title'] . "</h2></a>";
            echo "<div clas='desc'>" . $items['description'] . "</div>";
            // Ha a szöveg mezőt is be szeretnéd olvasni, akkor itt vedd fel a kódhoz
            // echo "<div clas='desc'>" . $items['text'] . "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "Hibás item";
    }
} else {
    echo "Hibás chanel";
}

*/
?>

</body>
</html>
