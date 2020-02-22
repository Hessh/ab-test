<?php

function cookieSetter()
{
    $rng = rand(0, 1);

    //Hvis cookien er satt og den er lik control: ikke gjør noe
    if (isset($_COOKIE["location_on"]) && $_COOKIE["location_on"] === "control") {

        return;

        //Hvis cookien er satt og den er lik variation: bytt side til variation
    } else if (isset($_COOKIE["location_on"]) && $_COOKIE["location_on"] === "variation") {

        return;

        //Hvis cookien ikke er satt og randomNumber er 0: sett cookie til control
    } else if (!isset($_COOKIE["location_on"]) && $rng === 0) {

        oneHourCookie("location_on", "control");
        return;

        //Hvis cookien ikke er satt og randomNumber er 01: sett cookie til variation og bytt side til vatiation
    } else if (!isset($_COOKIE["location_on"]) && $rng === 1) {

        oneHourCookie("location_on", "variation");
        return;
    }

    return $rng;
}

// Endre [.domenenavn.tld] til riktig domenenavn, ikke fjern punktum (Linje 41)
function oneHourCookie($name, $value)
{
    setcookie($name, $value, time() + 30, '/', '.hessh.no', true, true);
}

function abTest(string $stylesheet)
{
    if ($_COOKIE["location_on"] != "variation") {
        return;
    } else if ($_COOKIE["location_on"] === "variation") {?>
<link rel="stylesheet" href="./css/<?php echo $stylesheet ?>.css" />
<?php }
}

?>