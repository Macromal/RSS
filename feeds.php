<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Feed Reader</title>
    <style>
        /* CSS stílusok */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h2 {
            margin-bottom: 5px;
        }
        p {
            margin-top: 5px;
            margin-bottom: 10px;
        }
        hr {
            border: 0;
            border-top: 1px solid #eee;
            margin: 20px 0;
        }
    </style>
</head>
<body>

<h1>RSS Feed Reader</h1>

<!-- PHP kód behelyezése -->
<?php
// RSS feed fájl elérési útvonala
$rss_feed_file = 'admin.php';

// RSS feed beolvasása
$rss = simplexml_load_file($rss_feed_file);

// Ellenőrizzük, hogy sikeres volt-e a beolvasás
if ($rss) {
    // RSS feed tartalmának megjelenítése
    foreach ($rss->channel->item as $item) {
        echo '<h2>' . $item->title . '</h2>';
        echo '<p>' . $item->description . '</p>';
        echo '<a href="' . $item->link . '">Read more</a>';
        echo '<p>Published: ' . $item->pubDate . '</p>';
        echo '<hr>';
    }
} else {
    echo 'Failed to load RSS feed.';
}
?>

</body>
</html>

