<?php
session_start();

	
try
{
	$myPDO = new PDO ("pgsql:host=localhost;dbname=rss", "postgres", "posgress");

	$name = $_POST['neved'];  
	$pass = $_POST['jelszod'];
	
	$prep = $myPDO -> prepare (' select * from users where fsznev =  :name and PGP_SYM_DECRYPT(jelszo::bytea, \'rss_\') = :pass');
	$prep -> execute([ 'name' => $name, 'pass' => $pass ]);

	if( $prep->rowCount() > 0)
	{

		foreach ($prep as $row)
		{	
		
				$fsz = $myPDO -> prepare ('Select * from users where fsznev = :name and fsz = :jog');
				$fsz -> execute([ 'name' => $name, 'jog' => 'TRUE' ]);
				
				$adm = $myPDO -> prepare ('Select * from users where fsznev = :name and admin = :jog');
				$adm -> execute([ 'name' => $name, 'jog' => 'TRUE' ]);


				if($adm->rowCount() > 0)
				{
					$_SESSION['adminuser'] = $name;
					header("location:");
				}
				else
				{
					   echo '<script>alert("Nem megfelelőek az adatok"); window.location.href = \'index.php\';</script>';
				}

				if($fsz ->rowCount()> 0)
				{
					$_SESSION['felhasznalo'] = $name;
					header("location:blank.php");
				}
				else
				{
					   echo '<script>alert("Nem megfelelőek az adatok"); window.location.href = \'index.php\';</script>';
				}
		}
			
	}
	else
	{
			 echo '<script>alert("Hibás adatokat adott meg! \n Kérem ellenőrizze!"); window.location.href = \'index.php\';</script>';
			 
	}
	
}catch(PDOException $e)
{
		echo $e -> getMessage();
}








?>



