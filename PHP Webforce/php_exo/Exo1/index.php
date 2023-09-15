<?php

// Exercice 1
echo "Exercice 1 <br><br>";


for ($i = 4; $i <= 12; $i++) {
    echo "$i <br>";
}

//Exercice 2
echo "<br>Exercice 2 <br><br>";

function recursive($n)
{
    if ($n === 1) {
        echo "$n <br>";
    } else {
        echo "$n <br>";
        $n--;
        recursive($n);
    }
}
recursive(10);

//Exercice 3
echo "<br>Exercice 3 <br><br>";

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

//Exercice 4
echo "<br>Exercice 3 <br><br>";

// $a = 1;
// while ($a <= 25) {
//     echo $a * 5 . "<br>";
//     $a++;
// }

?>

<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo $result . " ";
    }
    // Passage à la ligne suivante
    echo "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>