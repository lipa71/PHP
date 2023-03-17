<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PF webscrapper</title>
</head>
<body>
    <center>
        <h1>Ogrzewanie</h1>
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
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;

                if($email == null && $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }elseif($email == null && $telefon == null){
                    continue;
                }
                if($email == null) {
                    $email = ' ';
                }
                if($telefon === 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
                    $telefon= ' ';
                }

                $wynik = $nazwa_firmy->plaintext . '#' . $email->plaintext . '#' .  $telefon->plaintext;
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