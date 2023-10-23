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
    <h1>nieruchomości</h1>
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
    include('linki/nieruchomości/nieruchomości_dolnośląskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_dolnośląskie as $link) {
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

    $file = fopen('nieruchomości_dolnośląskie.csv', 'w');
    file_put_contents('nieruchomości_dolnośląskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'kujawskopomorskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_kujawskopomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_kujawskopomorskie as $link) {
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

    $file = fopen('nieruchomości_kujawskopomorskie.csv', 'w');
    file_put_contents('nieruchomości_kujawskopomorskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'lubelskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_lubelskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_lubelskie as $link) {
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

    $file = fopen('nieruchomości_lubelskie.csv', 'w');
    file_put_contents('nieruchomości_lubelskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'lubuskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_lubuskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_lubuskie as $link) {
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

    $file = fopen('nieruchomości_lubuskie.csv', 'w');
    file_put_contents('nieruchomości_lubuskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'łódzkie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_łódzkie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_łódzkie as $link) {
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

    $file = fopen('nieruchomości_łódzkie.csv', 'w');
    file_put_contents('nieruchomości_łódzkie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'małopolskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_małopolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_małopolskie as $link) {
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

    $file = fopen('nieruchomości_małopolskie.csv', 'w');
    file_put_contents('nieruchomości_małopolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'mazowieckie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_mazowieckie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_mazowieckie as $link) {
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

    $file = fopen('nieruchomości_mazowieckie.csv', 'w');
    file_put_contents('nieruchomości_mazowieckie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'opolskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_opolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_opolskie as $link) {
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

    $file = fopen('nieruchomości_opolskie.csv', 'w');
    file_put_contents('nieruchomości_opolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'podkarpackie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_podkarpackie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_podkarpackie as $link) {
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

    $file = fopen('nieruchomości_podkarpackie.csv', 'w');
    file_put_contents('nieruchomości_podkarpackie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'podlaskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_podlaskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_podlaskie as $link) {
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

    $file = fopen('nieruchomości_podlaskie.csv', 'w');
    file_put_contents('nieruchomości_podlaskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'pomorskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_pomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_pomorskie as $link) {
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

    $file = fopen('nieruchomości_pomorskie.csv', 'w');
    file_put_contents('nieruchomości_pomorskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'śląskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_śląskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_śląskie as $link) {
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

    $file = fopen('nieruchomości_śląskie.csv', 'w');
    file_put_contents('nieruchomości_śląskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_świętokrzyskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_świętokrzyskie as $link) {
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

    $file = fopen('nieruchomości_świętokrzyskie.csv', 'w');
    file_put_contents('nieruchomości_świętokrzyskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_warmińskomazurskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_warmińskomazurskie as $link) {
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

    $file = fopen('nieruchomości_warmińsko-mazurskie.csv', 'w');
    file_put_contents('nieruchomości_warmińsko-mazurskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'wielkopolskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_wielkopolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_wielkopolskie as $link) {
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

    $file = fopen('nieruchomości_wielkopolskie.csv', 'w');
    file_put_contents('nieruchomości_wielkopolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
    include('simple_html_dom.php');
    include('linki/nieruchomości/nieruchomości_zachodniopomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($nieruchomości_zachodniopomorskie as $link) {
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

    $file = fopen('nieruchomości_zachodnio-pomorskie.csv', 'w');
    file_put_contents('nieruchomości_zachodnio-pomorskie.csv',$wynik_array3);
    fclose($file);
}

?>
</body>
</html>