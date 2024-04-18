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
    <h1>koleje</h1>
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
    include('linki/koleje/koleje_dolnośląskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_dolnośląskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_dolnośląskie.csv', 'w');
    file_put_contents('koleje_dolnośląskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'kujawskopomorskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_kujawskopomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_kujawskopomorskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_kujawskopomorskie.csv', 'w');
    file_put_contents('koleje_kujawskopomorskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'lubelskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_lubelskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_lubelskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_lubelskie.csv', 'w');
    file_put_contents('koleje_lubelskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'lubuskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_lubuskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_lubuskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_lubuskie.csv', 'w');
    file_put_contents('koleje_lubuskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'łódzkie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_łódzkie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_łódzkie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_łódzkie.csv', 'w');
    file_put_contents('koleje_łódzkie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'małopolskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_małopolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_małopolskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_małopolskie.csv', 'w');
    file_put_contents('koleje_małopolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'mazowieckie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_mazowieckie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_mazowieckie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_mazowieckie.csv', 'w');
    file_put_contents('koleje_mazowieckie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'opolskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_opolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_opolskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_opolskie.csv', 'w');
    file_put_contents('koleje_opolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'podkarpackie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_podkarpackie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_podkarpackie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_podkarpackie.csv', 'w');
    file_put_contents('koleje_podkarpackie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'podlaskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_podlaskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_podlaskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_podlaskie.csv', 'w');
    file_put_contents('koleje_podlaskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'pomorskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_pomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_pomorskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_pomorskie.csv', 'w');
    file_put_contents('koleje_pomorskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'śląskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_śląskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_śląskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_śląskie.csv', 'w');
    file_put_contents('koleje_śląskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'świętokrzyskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_świętokrzyskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_świętokrzyskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_świętokrzyskie.csv', 'w');
    file_put_contents('koleje_świętokrzyskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'warmińsko-mazurskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_warmińskomazurskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_warmińskomazurskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_warmińsko-mazurskie.csv', 'w');
    file_put_contents('koleje_warmińsko-mazurskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'wielkopolskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_wielkopolskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_wielkopolskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_wielkopolskie.csv', 'w');
    file_put_contents('koleje_wielkopolskie.csv',$wynik_array3);
    fclose($file);
}

$region = $_POST['region'];
if(isset($_POST['submit']) && $region === 'zachodnio-pomorskie'){
    include('simple_html_dom.php');
    include('linki/koleje/koleje_zachodniopomorskie.php');
    set_time_limit(0);
    $wynik_array = [];
    foreach ($koleje_zachodniopomorskie as $link) {
        $html = file_get_html($link);
        $email = $html->find('a[class="text-primary hover-underline cursor-pointer ajax-modal-link addax addax-cs_ip_mod_send_email"]', 0);
        $nazwa_firmy = $html->find('h1[class="pt-3 font-weight-bold"]', 0);
 
        if($email == null)
        {
            continue;
        }

        $wynik = preg_replace('/&quot;/','',$nazwa_firmy->plaintext) . '#' . $email->plaintext;
        array_push($wynik_array, $wynik);
    }

    $wynik_array2 = array_unique($wynik_array);

    foreach ($wynik_array2 as $key => $value) {
        $wynik_array3.=$value. "\n";
    }

    $file = fopen('koleje_zachodnio-pomorskie.csv', 'w');
    file_put_contents('koleje_zachodnio-pomorskie.csv',$wynik_array3);
    fclose($file);
}

?>
</body>
</html>