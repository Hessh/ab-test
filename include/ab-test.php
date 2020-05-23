<?php

// Funksjon som bestemmer hva cookien skal settes til
function cookieSetter()
{
    $rng = rand(0, 1);
    
    //Hvis cookien er satt og den er lik control: ikke gjør noe
    if (isset($_COOKIE["stylesheet"]) && $_COOKIE["stylesheet"] === "control") {

        return;

        //Hvis cookien er satt og den er lik variation: ikke gjør noe
    } else if (isset($_COOKIE["stylesheet"]) && $_COOKIE["stylesheet"] === "variation") {

        return;

        //Hvis cookien ikke er satt og randomNumber er 0: sett cookie til control
    } else if (!isset($_COOKIE["stylesheet"]) && $rng === 0) {

        oneHourCookie("stylesheet", "control");
        header("Refresh:0");
        exit;

        //Hvis cookien ikke er satt og randomNumber er 1: sett cookie til variation
    } else if (!isset($_COOKIE["stylesheet"]) && $rng === 1) {

        oneHourCookie("stylesheet", "variation");
        header("Refresh:0");
        exit;
    }

    return $rng;
}

// Funksjon for å sette cookie
// Endre [.domenenavn.tld] til riktig domenenavn, ikke fjern punktum (Linje 41)
function oneHourCookie($name, $value)
{
    setcookie($name, $value, time() + 30, '/', '.domenenavn.tld', true, true);
}

// Funksjon som bestemmer hvilke css som skal lastes inn
function abTest(string $stylesheet)
{
    // Hvis cookie ikke er lik variation: ikke gjør noe
    if ($_COOKIE["stylesheet"] != "variation") {
        return;
    // Hvis cookie er lik variation: last inn variation css
    } else if ($_COOKIE["stylesheet"] === "variation") {?>
<link rel="stylesheet" href="./css/<?php echo $stylesheet ?>.css" />
<?php 
    }
}

?>