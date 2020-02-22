<?php
    include_once 'include/ab-test.php';
    cookieSetter();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <?php
        abTest("ab-test")
    ?>
    <title>Home</title>
</head>

<body>
    <h1>Hello World</h1>
    <h2>This is a test</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia impedit id eveniet esse temporibus! Eos, in,
        reiciendis impedit id aliquid eaque voluptatibus inventore vitae culpa, sapiente corrupti quasi iusto animi.</p>
</body>

</html>