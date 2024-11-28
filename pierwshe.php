

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container div {
            margin-bottom: 15px;
        }
        .container p {
            margin: 0 0 5px;
            font-weight: bold;
        }
        .container input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="pierwshe.php" method="get">
        <div class="container">
            <div>
                <p>Imie</p>
                <input type="text" name="name">
            </div>
            <div>
                <p>Nazwisko</p>
                <input type="text" name="surname">
            </div>
            <div>
                <p>Ulica</p>
                <input type="text" name="street">
            </div>
            <div>
                <p>Dom</p>
                <input type="number" name="house">
            </div>
            <div>
                <p>Mieszkanie</p>
                <input type="number" name="apartment">
            </div>
            <div>
                <p>Miasto</p>
                <input type="text" name="city">
            </div>
            <div>
                <p>Data urodzenia</p>
                <input type="date" name="birthdate">
            </div>
            <div>
                <p>Telefon</p>
                <input type="tel" name="phone" value="+48">
            </div>
            <div>
                <p>Email</p>
                <input type="email" name="email">
            </div>
            <div>
                <p>Pleć</p>
                <input type="text" name="gender" placeholder="man/woman">
            </div>
            <div>
                <p>Prawo jazdy</p>
                <input type="checkbox" name="driving_license" value="Yes">
            </div>
            <div>
                <p>Haslo</p>
                <input type="password" name="password">
            </div>
            <div>
                <p>Uwagi</p>
                <input type="text" name="comments">
            </div>
            <button type="submit" name="button">OK</button>
			
			
        </div>
    </form>

    <?php
	
    if(isset($_GET["button"])) 
	{
	$imie=$_GET["name"];
	echo($imie."<br>");
	
	$Nazwisko=$_GET["surname"];
	echo($Nazwisko."<br>");
	
	$Ulica=$_GET["street"];
	echo($Ulica."<br>");
	
	$Dom=$_GET["house"];
	echo($Dom."<br>");
	
	$Mieszkanie=$_GET["apartment"];
	echo($Mieszkanie."<br>");
	
	$Miasto=$_GET["city"];
	echo($Miasto."<br>");
	
	$Data_urodzenia=$_GET["birthdate"];
	echo($Data_urodzenia."<br>");
	
	$Telefon=$_GET["phone"];
	echo($Telefon."<br>");
	
	$Email=$_GET["email"];
	echo($Email."<br>");
	
	$Plec=$_GET["gender"];
	echo($Plec."<br>");
	
	$Prawo_jazdy=$_GET["driving_license"];
	echo($Prawo_jazdy."<br>");
	
	$Haslo=$_GET["password"];
	echo($Haslo."<br>");
	
	$Uwagi=$_GET["comments"];
	echo($Uwagi."<br>");
	
	}
	else
	{
		echo("Anonim");
    }
    ?>
</body>
</html>