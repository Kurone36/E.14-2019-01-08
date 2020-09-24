<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styl8.css">
        <title>Hurtownia komputerowa</title>
    </head>
    <body>
        <section id="lista">
            <ul>
                <li>Producenci
                    <ol>
                        <li>Intel</li>
                        <li>AMD</li>
                        <li>Motorola</li>
                        <li>Corsair</li>
                        <li>ADATA</li>
                        <li>WD</li>
                        <li>Kingstone</li>
                        <li>Patriot</li>
                        <li>Asus</li>
                    </ol>
                </li>
            </ul>
        </section>
        <section id="formularz">
            <h1>Dystrybucja sprzętu komputerowego</h1>
            <form method="post" action="hurtownia.php">
                <span>Wybierz producenta</span>
                <input type="number" name="category">
                <input type="submit" value="WYŚWIETL">
            </form>
        </section>
        <section id="logo">
            <img alt="Sprzedajemy komputery" src="sprzet.png">
        </section>
        <section id="glowny">
            <h1>Podzespoły wybranego producenta</h1>
           <?php 
                $connect= mysqli_connect('localhost', 'root', '','sklep');
                    if (!isset($_POST["category"])) 
                        echo "Wybierz producenta";
                    else{
 			$prod=$_POST['category'];
 			$sql="SELECT nazwa, dostepnosc, cena FROM podzespoly WHERE producenci_id = $prod";
 			$query= mysqli_query($connect,$sql);
 				while ($linia= mysqli_fetch_assoc($query)){
 					if ($linia['dostepnosc']==1){
                                            echo "<p>".$linia['nazwa']." "."CENA:".$linia['cena']." DOSTÄ�PNY"."</p>";
 					}
 					else{
                                            echo "<p>".$linia['nazwa']." "."CENA:".$linia['cena']." NIEDOSTÄ�PNY"."</p>";
 					}
 					
 				}
 			}
		?>
        </section>
        <section id="stopka">
            <h3>Zapraszamy od poniedziaĹ‚ku do soboty w godzinach 7<sup>00</sup>-16<sup>30</sup></h3>
            <span>Strony partnerow:</span> 
            <a href="http://adata.pl/" target="_blank">ADATA</a> 
            <a href="http://patriot.pl/" target="_blank">Patriot</a>
            <a href="mailto:biuro@hurt.pl">Napisz</a>
            <p>Stronę wykonał: 01234567890</p>
	</section>
</body>
</html>