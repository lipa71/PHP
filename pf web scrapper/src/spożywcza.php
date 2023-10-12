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
    <h1>spożywcza</h1>
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
    include('linki/spożywcza/spożywcza_dolnośląskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_dolnośląskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_dolnośląskie.csv', 'w');
    file_put_contents('spożywcza_dolnośląskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'kujawskopomorskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_kujawskopomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_kujawskopomorskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_kujawskopomorskie.csv', 'w');
    file_put_contents('spożywcza_kujawskopomorskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'lubelskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_lubelskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_lubelskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_lubelskie.csv', 'w');
    file_put_contents('spożywcza_lubelskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'lubuskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_lubuskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_lubuskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_lubuskie.csv', 'w');
    file_put_contents('spożywcza_lubuskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'łódzkie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_łódzkie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_łódzkie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_łódzkie.csv', 'w');
    file_put_contents('spożywcza_łódzkie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'małopolskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_małopolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_małopolskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_małopolskie.csv', 'w');
    file_put_contents('spożywcza_małopolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'mazowieckie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_mazowieckie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_mazowieckie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_mazowieckie.csv', 'w');
    file_put_contents('spożywcza_mazowieckie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'opolskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_opolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_opolskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_opolskie.csv', 'w');
    file_put_contents('spożywcza_opolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'podkarpackie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_podkarpackie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_podkarpackie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_podkarpackie.csv', 'w');
    file_put_contents('spożywcza_podkarpackie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'podlaskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_podlaskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_podlaskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_podlaskie.csv', 'w');
    file_put_contents('spożywcza_podlaskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'pomorskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_pomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_pomorskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_pomorskie.csv', 'w');
    file_put_contents('spożywcza_pomorskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'śląskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_śląskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_śląskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_śląskie.csv', 'w');
    file_put_contents('spożywcza_śląskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_świętokrzyskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_świętokrzyskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_świętokrzyskie.csv', 'w');
    file_put_contents('spożywcza_świętokrzyskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_warmińskomazurskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_warmińskomazurskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_warmińsko-mazurskie.csv', 'w');
    file_put_contents('spożywcza_warmińsko-mazurskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'wielkopolskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_wielkopolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_wielkopolskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_wielkopolskie.csv', 'w');
    file_put_contents('spożywcza_wielkopolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
    include('simple_html_dom.php');
    include('linki/spożywcza/spożywcza_zachodniopomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($spożywcza_zachodniopomorskie as $link) {
        $html = file_get_html($link);
        $telefon = $html->find('div[class="col-xs-12 modal-title w-100 font-weight-bold text-dark"]', 0);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
        $tel_str = $telefon->plaintext;

        if($email == null && $tel_str == 'Oceń firmę i napisz o niej opinię:'){
            continue;
        }elseif($email == null && $telefon == null){
            continue;
        }
        if($email == null) {
            $email = ' ';
        }
        if($telefon == 'Oceń firmę i napisz o niej opinię:' || $telefon == null){
            $telefon= ' ';
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext . '#' .  $telefon->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('spożywcza_zachodnio-pomorskie.csv', 'w');
    file_put_contents('spożywcza_zachodnio-pomorskie.csv',$wynik_array3);
    fclose($file);
}

?>
</body>
</html>