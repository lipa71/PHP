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
        <h1>Tekstylia</h1>
        <form method="POST">
            <select name="region">
                <option value="" disabled selected>--Wybierz region--</option>
                <option value="dolnośląskie">dolnośląskie</option>
                <option value="łódzkie">łódzkie</option>
                <option value="mazowieckie">mazowieckie</option>
                <option value="wielkopolskie">wielkopolskie</option>
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
            include('linki/tekstylia/tekstylia_dolnośląskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_dolnośląskie as $link) {
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

            $file = fopen('tekstylia_dolnośląskie.csv', 'w');
            file_put_contents('tekstylia_dolnośląskie.csv',$wynik_array3);
            fclose($file);      
        }

       

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'łódzkie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_łódzkie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_łódzkie as $link) {
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

            $file = fopen('tekstylia_łódzkie.csv', 'w');
            file_put_contents('tekstylia_łódzkie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'małopolskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_małopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_małopolskie as $link) {
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

            $file = fopen('tekstylia_małopolskie.csv', 'w');
            file_put_contents('tekstylia_małopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'mazowieckie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_mazowieckie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_mazowieckie as $link) {
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

            $file = fopen('tekstylia_mazowieckie.csv', 'w');
            file_put_contents('tekstylia_mazowieckie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'opolskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_opolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_opolskie as $link) {
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

            $file = fopen('tekstylia_opolskie.csv', 'w');
            file_put_contents('tekstylia_opolskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'podkarpackie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_podkarpackie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_podkarpackie as $link) {
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

            $file = fopen('tekstylia_podkarpackie.csv', 'w');
            file_put_contents('tekstylia_podkarpackie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'podlaskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_podlaskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_podlaskie as $link) {
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

            $file = fopen('tekstylia_podlaskie.csv', 'w');
            file_put_contents('tekstylia_podlaskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'pomorskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_pomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_pomorskie as $link) {
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

            $file = fopen('tekstylia_pomorskie.csv', 'w');
            file_put_contents('tekstylia_pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'śląskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_śląskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_śląskie as $link) {
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

            $file = fopen('tekstylia_śląskie.csv', 'w');
            file_put_contents('tekstylia_śląskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_świętokrzyskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_świętokrzyskie as $link) {
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

            $file = fopen('tekstylia_świętokrzyskie.csv', 'w');
            file_put_contents('tekstylia_świętokrzyskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_warmińskomazurskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_warmińskomazurskie as $link) {
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

            $file = fopen('tekstylia_warmińsko-mazurskie.csv', 'w');
            file_put_contents('tekstylia_warmińsko-mazurskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'wielkopolskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_wielkopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_wielkopolskie as $link) {
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

            $file = fopen('tekstylia_wielkopolskie.csv', 'w');
            file_put_contents('tekstylia_wielkopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
            include('simple_html_dom.php');
            include('linki/tekstylia/tekstylia_zachodniopomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($tekstylia_zachodniopomorskie as $link) {
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

            $file = fopen('tekstylia_zachodnio-pomorskie.csv', 'w');
            file_put_contents('tekstylia_zachodnio-pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        ?>
    </body>
</html>