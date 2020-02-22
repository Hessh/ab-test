<?php

function cookieSetter()
{
    $rng = rand(0, 1);

    //Hvis cookien er satt og den er lik control: ikke gjør noe
    if (isset($_COOKIE["stylesheet"]) && $_COOKIE["stylesheet"] === "control") {

        return;

        //Hvis cookien er satt og den er lik variation: bytt side til variation
    } else if (isset($_COOKIE["stylesheet"]) && $_COOKIE["stylesheet"] === "variation") {

        return;

        //Hvis cookien ikke er satt og randomNumber er 0: sett cookie til control
    } else if (!isset($_COOKIE["stylesheet"]) && $rng === 0) {

        oneHourCookie("stylesheet", "control");
        return;

        //Hvis cookien ikke er satt og randomNumber er 01: sett cookie til variation og bytt side til vatiation
    } else if (!isset($_COOKIE["stylesheet"]) && $rng === 1) {

        oneHourCookie("stylesheet", "variation");
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
    if ($_COOKIE["stylesheet"] != "variation") {
        return;
    } else if ($_COOKIE["stylesheet"] === "variation") {?>
<link rel="stylesheet" href="./css/<?php echo $stylesheet ?>.css" />
<?php }
}

?>