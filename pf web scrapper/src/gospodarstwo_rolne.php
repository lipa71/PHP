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
        <h1>Gospodarstwo rolne</h1>
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
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_dolnośląskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_dolnośląskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_dolnośląskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_dolnośląskie.csv',$wynik_array3);
            fclose($file);      
        }

       

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'łódzkie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_łódzkie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_łódzkie as $link) {
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

            $file = fopen('gospodarstwo_rolne_łódzkie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_łódzkie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'małopolskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_małopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_małopolskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_małopolskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_małopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'mazowieckie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_mazowieckie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_mazowieckie as $link) {
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

            $file = fopen('gospodarstwo_rolne_mazowieckie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_mazowieckie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'opolskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_opolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_opolskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_opolskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_opolskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'podkarpackie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_podkarpackie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_podkarpackie as $link) {
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

            $file = fopen('gospodarstwo_rolne_podkarpackie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_podkarpackie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'podlaskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_podlaskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_podlaskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_podlaskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_podlaskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'pomorskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_pomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_pomorskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_pomorskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'śląskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_śląskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_śląskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_śląskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_śląskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_świętokrzyskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_świętokrzyskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_świętokrzyskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_świętokrzyskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_warmińskomazurskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_warmińskomazurskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_warmińsko-mazurskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_warmińsko-mazurskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'wielkopolskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_wielkopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_wielkopolskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_wielkopolskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_wielkopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        $region = $_POST['region'];
        if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
            include('simple_html_dom.php');
            include('linki/gospodarstwo_rolne/gospodarstwo_rolne_zachodniopomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($gospodarstwo_rolne_zachodniopomorskie as $link) {
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

            $file = fopen('gospodarstwo_rolne_zachodnio-pomorskie.csv', 'w');
            file_put_contents('gospodarstwo_rolne_zachodnio-pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        ?>
    </body>
</html>