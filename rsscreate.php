<?php
$host = "localhost";
$user = "postgres";
$pass = "posgress";
$db = "rss";
$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Nem lehet csatlakozni");


// Lekérdezés az adatbázisból
$query = "SELECT * FROM feeds where link is null ORDER BY letrehozva DESC LIMIT 8";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());



$link = 'https://google.com';
header('Content-Type: text/xml');
$feed = "<?xml version='1.0' encoding='UTF-8' ?>";
$feed.= '<rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0">';
$feed.= '<channel>';
$feed.= '<title>MY 1ST TEST FEED</title>';
$feed.= '<link>'.$link.'</link>';
$feed.= '<description>MY 1ST TEST FEED</description>';


if(pg_num_rows($result) > 0)
{
	
	while($row = pg_fetch_assoc($result))
	{	
		$feed .= '<item>';
		$feed .= '<title>'.$row['cim'].'</title>';
		$feed .= '<link>'.$row['link'].'</link>';
		$feed .= '<description>'.$row['leiras'].'</description>';
		//$feed .= '<text>'.$row['szoveg'].'</text>';
		$feed .= '<pubDate>'.date("Y. m. d. H:i:s",strtotime($row['letrehozva'])).'</pubDate>';
		$feed .= '<azn>'.$row['id'].'</azn>';
		$feed .= '</item>';
	}
	
	
	
	
	
}


$feed.= '</channel>';
$feed.= '</rss>';
echo $feed;

/*  // FÁJLBA VALÓ MENTÉS
// Lekérdezés az adatbázisból
$query = "SELECT * FROM feeds ORDER BY letrehozva DESC LIMIT 8";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// XML fájl elérési útja és neve
$xml_file = 'feed.xml';

$link = 'https://google.com';

$feed = new DOMDocument('1.0', 'UTF-8');
$feed->formatOutput = true;

$rss = $feed->createElement('rss');
$rss->setAttribute('version', '2.0');
$feed->appendChild($rss);

$channel = $feed->createElement('channel');
$rss->appendChild($channel);

$title = $feed->createElement('title', 'MY 1ST TEST FEED');
$channel->appendChild($title);

$linkNode = $feed->createElement('link', $link);
$channel->appendChild($linkNode);

$description = $feed->createElement('description', 'MY 1ST TEST FEED');
$channel->appendChild($description);

if (pg_num_rows($result) > 0) {
    while ($row = pg_fetch_assoc($result)) {
        $item = $feed->createElement('item');

        $titleNode = $feed->createElement('title', htmlspecialchars($row['cim']));
        $item->appendChild($titleNode);

        $linkNode = $feed->createElement('link', htmlspecialchars($row['link']));
        $item->appendChild($linkNode);

        $descriptionNode = $feed->createElement('description', htmlspecialchars($row['leiras']));
        $item->appendChild($descriptionNode);

        // Ha a szöveg mezőt is szeretnéd hozzáadni, akkor itt vedd fel a kódhoz
        // $textNode = $feed->createElement('text', htmlspecialchars($row['szoveg']));
        // $item->appendChild($textNode);

        $pubDateNode = $feed->createElement('pubDate', htmlspecialchars($row['letrehozva']));
        $item->appendChild($pubDateNode);

        $aznNode = $feed->createElement('azn', htmlspecialchars($row['id']));
        $item->appendChild($aznNode);

        $channel->appendChild($item);
    }
}

// XML fájl mentése
$feed->save($xml_file);
*/

?>


