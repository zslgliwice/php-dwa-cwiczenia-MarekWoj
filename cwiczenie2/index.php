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

            <form action="korepetycje.php" method="post">
                    <label for="imie">Podaj imię:</label>
                    <br><br>
                    <input type="text" id="imie" name="imie">
                    <br><br>

                    <label for="przedmiot">Wybierz przedmiot:</label>
                    <br><br>
                    <select id="przedmiot" name="przedmiot">
                        <option value="pol">Język Polski</option>
                        <option value="mat">Matematyka</option>
                        <option value="wos">Wiedza o Społeczeństwie</option>
                    </select>
                    <br><br>

                    <label for="liczbaLekcji">Podaj ilość lekcji:</label>
                    <br><br>
                    <input type="number" id="liczbaLekcji" name="liczbaLekcji">
                    <br><br>

                    <label>Dodatkowe notatki?</label><br>
                    <input type="radio" name="notatki" value="tak"> Tak
                    <input type="radio" name="notatki" value="nie"> Nie
                    <br><br>

                    <input type="submit" value="Potwierdź">
                </form>


			</header>
			
<?php	
  


     
      
    
?>



    
    


		</article>
		
	</main>
	
</body>
</html>
