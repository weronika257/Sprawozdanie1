<?php
/*funkcja zwracajaca adres ip klienta */
    function getIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}
/*zapisanie adresu ip klienta w zmiennej*/
$ip = getIP();
/*wyswietlenie adresu ip na stronie*/
echo "<h5>Adres ip: $ip</h5>";
?>

