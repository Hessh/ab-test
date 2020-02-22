<?php

function abTest(string $stylesheet)
{
    $rng = rand(0, 1);
    if ($rng != 1) {
        return;
    } else {?>
<link rel="stylesheet" href="./css/<?php echo $stylesheet ?>.css" />
<?php }
}

?>