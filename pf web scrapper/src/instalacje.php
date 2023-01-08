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
        <h1>Instalacje</h1>
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
            include('linki/instalacje/instalacje_dolnoslaskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_dolnoslaskie as $link) {
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

            $file = fopen('instalacje_dolnoslaskie.csv', 'w');
            file_put_contents('instalacje_dolnoslaskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'kujawskopomorskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_kujawsko-pomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_kujawskopomorskie as $link) {
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

            $file = fopen('instalacje_kujawsko_pomorskie.csv', 'w');
            file_put_contents('instalacje_kujawsko_pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'lubelskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_lubelskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_lubelskie as $link) {
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

            $file = fopen('instalacje_lubelskie.csv', 'w');
            file_put_contents('instalacje_lubelskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'lubuskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_lubuskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_lubuskie as $link) {
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

            $file = fopen('instalacje_lubuskie.csv', 'w');
            file_put_contents('instalacje_lubuskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'łódzkie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_lodzkie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_lodzkie as $link) {
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

            $file = fopen('instalacje_lodzkie.csv', 'w');
            file_put_contents('instalacje_lodzkie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'małopolskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_malopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_malopolskie as $link) {
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

            $file = fopen('instalacje_malopolskie.csv', 'w');
            file_put_contents('instalacje_malopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'mazowieckie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_mazowieckie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_mazowieckie as $link) {
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

            $file = fopen('instalacje_mazowieckie.csv', 'w');
            file_put_contents('instalacje_mazowieckie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'opolskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_opolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_opolskie as $link) {
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

            $file = fopen('instalacje_opolskie.csv', 'w');
            file_put_contents('instalacje_opolskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'podkarpackie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_podkarpackie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_podkarpackie as $link) {
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

            $file = fopen('instalacje_podkarpackie.csv', 'w');
            file_put_contents('instalacje_podkarpackie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'podlaskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_podlaskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_podlaskie as $link) {
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

            $file = fopen('instalacje_podlaskie.csv', 'w');
            file_put_contents('instalacje_podlaskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'pomorskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_pomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_pomorskie as $link) {
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

            $file = fopen('instalacje_pomorskie.csv', 'w');
            file_put_contents('instalacje_pomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'śląskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_slaskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_slaskie as $link) {
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

            $file = fopen('instalacje_slaskie.csv', 'w');
            file_put_contents('instalacje_slaskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_swietokrzyskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_swietokrzyskie as $link) {
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

            $file = fopen('instalacje_swietokrzyskie.csv', 'w');
            file_put_contents('instalacje_swietokrzyskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_warminsko-mazurskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_warminskomazurskie as $link) {
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

            $file = fopen('instalacje_warminskomazurskie.csv', 'w');
            file_put_contents('instalacje_warminskomazurskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'wielkopolskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_wielkopolskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_wielkopolskie as $link) {
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

            $file = fopen('instalacje_wielkopolskie.csv', 'w');
            file_put_contents('instalacje_wielkopolskie.csv',$wynik_array3);
            fclose($file);      
        }

        if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
            include('simple_html_dom.php');
            include('linki/instalacje/instalacje_zachodnio-pomorskie.php');
            set_time_limit(0);
            $wynik_array = [];
            foreach ($instalacje_zachodniopomorskie as $link) {
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

            $file = fopen('instalacje_zachodniopomorskie.csv', 'w');
            file_put_contents('instalacje_zachodniopomorskie.csv',$wynik_array3);
            fclose($file);      
        }

        ?>
        
    </body>
</html>