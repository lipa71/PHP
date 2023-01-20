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
        <h1>Biura Rachunkowe</h1>
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
            include('linki/biura_rachunkowe/biura_dolnośląskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_dolnośląskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_dolnośląskie.csv', 'w');
            file_put_contents('biura_dolnośląskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'kujawskopomorskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_kujawskopomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_kujawskopomorskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_kujawsko_pomorskie.csv', 'w');
            file_put_contents('biura_kujawsko_pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'lubelskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_lubelskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_lubelskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_lubelskie.csv', 'w');
            file_put_contents('biura_lubelskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'lubuskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_lubuskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_lubuskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_lubuskie.csv', 'w');
            file_put_contents('biura_lubuskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'łódzkie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_łódzkie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_łódzkie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_łódzkie.csv', 'w');
            file_put_contents('biura_łódzkie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'małopolskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_małopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_małopolskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_małopolskie.csv', 'w');
            file_put_contents('biura_małopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'mazowieckie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_mazowieckie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_mazowieckie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_mazowieckie.csv', 'w');
            file_put_contents('biura_mazowieckie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'opolskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_opolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_opolskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_opolskie.csv', 'w');
            file_put_contents('biura_opolskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'podkarpackie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_podkarpackie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_podkarpackie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_podkarpackie.csv', 'w');
            file_put_contents('biura_podkarpackie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'podlaskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_podlaskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_podlaskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_podlaskie.csv', 'w');
            file_put_contents('biura_podlaskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'pomorskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_pomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_pomorskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_pomorskie.csv', 'w');
            file_put_contents('biura_pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'śląskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_śląskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_śląskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_śląskie.csv', 'w');
            file_put_contents('biura_śląskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_świętokrzyskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_świętokrzyskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_swietokrzyskie.csv', 'w');
            file_put_contents('biura_swietokrzyskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_warmińskomazurskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_warmińskomazurskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_warmińskomazurskie.csv', 'w');
            file_put_contents('biura_warmińskomazurskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'wielkopolskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_wielkopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_wielkopolskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_wielkopolskie.csv', 'w');
            file_put_contents('biura_wielkopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
            include('simple_html_dom.php');
            include('linki/biura_rachunkowe/biura_zachodniopomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($biura_zachodniopomorskie as $link) {
                $html = file_get_html($link);
                $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
                if($email == null){
                    continue;
                }else {
                    $wynik = $email->plaintext;
                    array_push($wynik_array, $wynik);
                }
            }

            $wynik_array2 = array_unique($wynik_array);

            foreach ($wynik_array2 as $key => $value) {
                $wynik_array3.=$value. "\n";
            }

            $file = fopen('biura_zachodniopomorskie.csv', 'w');
            file_put_contents('biura_zachodniopomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        ?>
        
    </body>
</html>   