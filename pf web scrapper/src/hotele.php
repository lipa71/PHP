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
        <h1>Hotele</h1>
        <form method="POST">
            <select name="region">
                <option value="" disabled selected>--Wybierz region--</option>
                <option value="dolnośląskie">dolnośląskie</option>
                <option value="kujawskopomorskie">kujawsko-pomorskie</option>
                <option value="lubelskie">lubelskie</option>
                <option value="lubuskie">lubuskie</option>
                <option value="łódzkie">łódzkie</option>
                <option value="małopolskie">małopolskie</option>
                <option value="mazowieckie">mazowieckie</option>
                <option value="opolskie">opolskie</option>
                <option value="podkarpackie">podkarpackie</option>
                <option value="podlaskie">podlaskie</option>
                <option value="pomorskie">pomorskie</option>
                <option value="śląskie">śląskie</option>
                <option value="świętokrzyskie">świętokrzyskie</option>
                <option value="warmińsko-mazurskie">warmińsko-mazurskie</option>
                <option value="wielkopolskie">wielkopolskie</option>
                <option value="zachodnio-pomorskie">zachodnio-pomorskie</option>
            </select>
            <input type="submit" name="submit" value="Generuj"/>
        </form>
        <br>
        <a href="../index.php">Powrót</a>
    </center>

    <?php
        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'dolnośląskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_dolnośląskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_dolnośląskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele dolnośląskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'kujawskopomorskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_kujawskopomorskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_kujawskopomorskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele kujawsko-pomorskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'lubelskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_lubelskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_lubelskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele lubelskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'lubuskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_lubuskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_lubuskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele lubuskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'łódzkie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_łódzkie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_łódzkie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele łódzkie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'małopolskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_małopolskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_małopolskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele małopolskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'mazowieckie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_mazowieckie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_mazowieckie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele mazowieckie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'opolskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_opolskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_opolskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele opolskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'podkarpackie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_podkarpackie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_podkarpackie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele podkarpackie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'podlaskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_podlaskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_podlaskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele podlaskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'pomorskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_pomorskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_pomorskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele pomorskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'śląskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_śląskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_śląskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele śląskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_świętokrzyskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_świętokrzyskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele świętokrzyskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_warmińskomazurskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_warmińskomazurskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele warmińskomazurskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'wielkopolskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_wielkopolskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_wielkopolskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele wielkopolskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

        if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
            include('simple_html_dom.php');
            include('linki/hotele/hotele_zachodniopomorskie.php');
            set_time_limit(0);
            $wynik = [];
            $wynik_array = [];
            foreach ($hotele_zachodniopomorskie as $link) {
                $html = file_get_html($link);
                $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
                $tel_str = $telefon->plaintext;
                if($telefon == null || $email == null || $tel_str === 'Oceń firmę i napisz o niej opinię:'){
                    continue;
                }else {
                    $wynik = $nazwa_firmy->plaintext . $email->plaintext. $telefon->plaintext;
                    $wynik_array[] = $wynik;
                    $file = fopen('hotele zachodnio-pomorskie.txt', 'w');
                    fwrite($file, print_r($wynik_array, TRUE));
                    fclose($file);
                }
            }      
        }

    ?>
</body>
</html>