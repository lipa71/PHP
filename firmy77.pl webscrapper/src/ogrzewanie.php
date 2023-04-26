<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firmy77.pl webscrapper</title>
</head>
<body>
    <center>
        <h1>ogrzewanie</h1>
        <form method="POST">
            <select name="region">
                <option value="" disabled selected>--Wybierz region--</option>
                <option value="cała_Polska">cała Polska</option>
            </select>
            <input type="submit" name="submit" value="Generuj"/>
        </form>
        <br>
        <a href="../index.php">Powrót</a>
    </center>

    <?php
        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'cała_Polska'){
            include('simple_html_dom.php');
            include('linki/ogrzewanie/ogrzewanie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($ogrzewanie as $link) {
                $html = file_get_html($link);
                $nazwa_firmy = $html->find('h1[class="m0 p0 tal fw9"]', 0);
                $email = $html->find('p a[href^=mailto]', 0);
                $telefon = $html->find('p a[href^=tel:]', 0);
                if($email == null) {
                    $email2 = " ";
                    $telefon2 = preg_replace('/tel:/', '', preg_replace('/tabelaFirmaLinktel:/', '', implode($telefon->attr)));
                }elseif($telefon == null) {
                    $telefon2 = " ";
                    $email2 = preg_replace('/mailto:/', '', preg_replace('/tabelaFirmaLinkmailto:/', '', implode($email->attr)));
                }else {
                    $telefon2 = preg_replace('/tel:/', '', preg_replace('/tabelaFirmaLinktel:/', '', implode($telefon->attr)));
                    $email2 = preg_replace('/mailto:/', '', preg_replace('/tabelaFirmaLinkmailto:/', '', implode($email->attr)));
                }
                
                $wynik = $nazwa_firmy->plaintext . '#' . $email2 . '#' .  $telefon2;
                    array_push($wynik_array, $wynik);
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('ogrzewanie.csv', 'w');
            file_put_contents('ogrzewanie.csv',$wynik_array3);
            fclose($file);      
        }
        ?>
    </body>
</html>