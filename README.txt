HASZNÁLT TECHNOLÓGIA:

- xampp (APACHE)
- PHP
- PostGreSQl




php.ini -- az inicializáló fájl, mert a PDO-hoz át kellett írni a php.ini-ben egy kikommentezett sort.

az rss.sql -ek a bakcupok, amik feltöltik az adatbázist (mindkettő jó)
sql_alap.txt tartalmazza a szükséges sql parancsokat (ha a dumpok nem lennének jók)

illetve:

1. show.php -- megjeleníti az RSS feedeket
2. index.php -- bejelntkező felület
3. mivel local gépen volt ezért a kódokban lehetséges hogy a postgreshez való csatlakozáshoz más adatok szükségesek 

	$myPDO = new PDO ("pgsql:host=localhost;dbname=rss", "postgres", "posgress");  DBNAME: rss, USER: postgres, PASSWORD: posgress

4. az "rsscreate.php" felel az xml struktúráért, tehát mint egy linket kell behivatkozni a show.php-be, hogy ne fájlba mentse. Készült egy fájlba mentő verzió is, ez kommentbe található,
de a jelenlegi módszert jobbnak találtam és emellett maradtam.

teszt user:

user: t5
psw: 555 / teszt (mert munkahelyen is csináltam és ott lehet más a jelszó)

amennyiben egyik se lenne jó ezzel a kóddal megnézhető a jelszó:

select nev, fsznev, PGP_SYM_DECRYPT(jelszo::bytea, 'rss_') from users

