<?php

$randomNumber = rand(0, 1);

function cookieSetter() {

    //Hvis cookien er satt og den er lik control: ikke gjør noe
    if (isset($_COOKIE["variation_id"]) && $_COOKIE["variation_id"] != 1) {

        return;

        //Hvis cookien er satt og den er lik variation: bytt side til variation
    } else if (isset($_COOKIE["variation_id"]) && $_COOKIE["variation_id"] === 1) {

        return;

        //Hvis cookien ikke er satt og randomNumber er 0: sett cookie til control
    } else if (!isset($_COOKIE["variation_id"]) && $randomNumber === 0) {

        oneWeekCookie("variation_id", $randomNumber);
        return;

        //Hvis cookien ikke er satt og randomNumber er 01: sett cookie til variation og bytt side til vatiation
    } else if (!isset($_COOKIE["variation_id"]) && $randomNumber === 1) {

        oneWeekCookie("variation_id", $randomNumber);
        return;
    }

}

// Endre [.domenenavn.tld] til riktig domenenavn, ikke fjern punktum (Linje 41)
function oneWeekCookie($name, $value)
{
    setcookie($name, $value, time() + 30, '/', '.hessh.no', true, true);
}

function abTest() {
    if($randomNumber === 1) {
?>
<link rel="stylesheet" href="./css/ab-test.css">
<?php
    }
}