<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>1 - Obsługa formularzy w PHP</title>
	<link href="arkusz-cwiczenia.css" rel="stylesheet">
	
</head>

<body>

	<main>
	
		<article>

			<header>
			
				<h1>Tokeny bezpieczeństwa SAFE - logowanie</h1>

			</header>
	
			<form action="index.php" method="post"> 
			
				<div>	
					<label>Login:
						<input type="text" name="login">
					</label>
				</div>	
				
				<div>
					<label>Hasło:
						<input type="password" name="haslo">
					</label>
				</div>

				<input type="submit" value="Zaloguj">
				
			</form>
			<?php


function token($dlugosc = 10) {
    $znaki = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $znakiDlugosc = strlen($znaki);
    $randomString = '';
    

    for ($i = 0; $i < $dlugosc; $i++) {
        $randomString .= $znaki[random_int(0, $znakiDlugosc - 1)];
    }
    
    return $randomString;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['login']) && isset($_POST['haslo'])) {
        
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];


        if ($login == "pawlo" && $haslo == "napadnabank") {
            echo "Witaj Paweł, weź sie do roboty leniu<br>";
			
			echo "<p>Jednorazowy token dostępu do skarbca: " . token(10) . "</p>";

        } else if ($login == "gawlo" && $haslo == "likeaboss") {
            echo "Witaj szefie wszystkich szefów <br>";
            

            echo "<p>Jednorazowy token dostępu do skarbca: " . token(10) . "</p>";

        } else {
            echo "Niepoprawny login lub hasło!";
        }
    }
}
?>
		</article>
		
	</main>
	
</body>
</html>
