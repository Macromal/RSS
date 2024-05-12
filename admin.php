<?php

/*
$host = "localhost";
$user = "postgres";
$pass = "posgress";
$db = "rss";
$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Nem lehet csatlakozni");


// Lekérdezés az adatbázisból
$query = "SELECT * FROM feeds ORDER BY letrehozva DESC LIMIT 10";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// RSS feed elemeinek inicializálása
$rss_feed = '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
<channel>
<title>My RSS Feed</title>
<link>http://example.com</link>
<description>A description of my RSS feed</description>';

// Adatok átalakítása RSS formátumba
while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    $rss_feed .= "<item>\n";
    $rss_feed .= "<title>{$row['cim']}</title>\n";
    $rss_feed .= "<description>{$row['leiras']}</description>\n";
    $rss_feed .= "<link>{$row['link']}</link>\n";
    $rss_feed .= "<pubDate>{$row['letrehozva']}</pubDate>\n";
    $rss_feed .= "</item>\n";
}

// RSS feed lezárása
$rss_feed .= '</channel></rss>';

// Header beállítása RSS formátumra
header('Content-Type: application/rss+xml; charset=utf-8');

// RSS feed kiírása
echo $rss_feed;

// Adatbázis kapcsolat lezárása
pg_free_result($result);
pg_close($con);

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Large Modal with Inputs</title>
<style>
/* Modal styles */
.modal {
    display: none; /* Hide the modal by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px; /* Location of the box */
}

/* Modal content */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Close button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>

<!-- Button to open the modal -->
<button onclick="openModal()">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Large Modal with Inputs</h2>
    <!-- Form with two input fields and one textarea -->
    <form>
        <label for="input1">Input 1:</label><br>
        <input type="text" id="input1" name="input1"><br>
        <label for="input2">Input 2:</label><br>
        <input type="text" id="input2" name="input2"><br>
        <label for="textarea">Textarea:</label><br>
        <textarea id="textarea" name="textarea" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByTagName("button")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function openModal() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
