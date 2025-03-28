<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>2 - Obsługa formularzy w PHP</title>
	<link href="arkusz-cwiczenia.css" rel="stylesheet">
	
</head>

<body>

	<main>
	
		<article>

			<header>
			
				<h1>Podsumowanie zamówienia korepetycji</h1>

			</header>
			
<?php			
		
       
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

       
            $imie = $_POST["imie"];
            $przedmiot = $_POST["przedmiot"];
            $liczbaLekcji = $_POST["liczbaLekcji"];
            $notatki = $_POST["notatki"];

        
            $cena_przedmiot = 0;
            $nazwa_przedmiot = "";

            if ($przedmiot == "pol") {
                $cena_przedmiot = 50; 
                $nazwa_przedmiot = "Język Polski";
            } elseif ($przedmiot == "mat") {
                $cena_przedmiot = 60; 
                $nazwa_przedmiot = "Matematyka";
            } elseif ($przedmiot == "wos") {
                $cena_przedmiot = 45; 
                $nazwa_przedmiot = "Wiedza o Społeczeństwie";
            }
            
            
            

      
            $oplaty = 0;
            if ($notatki == "tak") {
                $oplaty = 5 * $liczbaLekcji; 
            }

            if($imie != NULL && $liczbaLekcji != NULL) {
                $cena = ($cena_przedmiot * $liczbaLekcji) + $oplaty;
                
                echo "<p>Imię: " . $imie . "</p>";
                echo "<p>Przedmiot:" . $nazwa_przedmiot . "</p>";
                echo "<p>Liczba lekcji: " . $liczbaLekcji . "</p>";
                echo "<p>Całkowita cena: " . $cena . " zł</p>";

            } else {
                echo "<p>Podaj poprawne dane.</p>";
            }
        }


			
?>			
		</article>
		
	</main>
	
</body>
</html>
