<?php

$rng = rand(0, 1);

function cookieSetter()
{
    $random = $rng;

    //Hvis cookien er satt og den er lik control: ikke gjør noe
    if (isset($_COOKIE["location_on"]) && $_COOKIE["location_on"] === 0) {

        return;

        //Hvis cookien er satt og den er lik variation: bytt side til variation
    } else if (isset($_COOKIE["location_on"]) && $_COOKIE["location_on"] === 1) {

        return;

        //Hvis cookien ikke er satt og randomNumber er 0: sett cookie til control
    } else if (!isset($_COOKIE["location_on"]) && $random === 0) {

        oneHourCookie("location_on", "0");
        return;

        //Hvis cookien ikke er satt og randomNumber er 01: sett cookie til variation og bytt side til vatiation
    } else if (!isset($_COOKIE["location_on"]) && $random === 1) {

        oneHourCookie("location_on", "1");
        return;
    }
}

// Endre [.domenenavn.tld] til riktig domenenavn, ikke fjern punktum (Linje 41)
function oneHourCookie($name, $value)
{
    setcookie($name, $value, time() + 30, '/', '.hessh.no', true, true);
}

function abTest(string $stylesheet)
{
    $random = $rng;
    if (!$random) {
        return;
    } else {?>
<link rel="stylesheet" href="./css/<?php echo $stylesheet ?>.css" />
<?php }
}

?>