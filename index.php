<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $liczba = 1;

    if ($liczba > 0) {
        echo "Lizba jest dodatnia";
    } elseif ($liczba < 0) {
        echo "Liczba jest ujemna";
    } elseif ($liczba == 0) {
        echo "Liczba jest zerowa";
    }
    
    $checker = 2;

    if ($checker % 2 == 0) {
        echo "Parzysta";
    } else {
        echo "nie parzysta";
    }

    $zadananko = 2;
    $zadanie = 1;

    if ($zadananko > $zadanie) {
        echo "" .$zadananko ." jest wieksze";
    } else {
        echo "" .$zadanie ." jest wieksze";
    }

    $punkty = 10;
    $max_pkt = 10;

    $procent = ($punkty / $max_pkt) * 100;


    if ($procent >= 85) {
        echo "piatka";
    } elseif ($procent >= 75) {
        echo "czworka";
    } elseif ($procent >= 50) {
        echo "trojka";
    } elseif ($procent >= 25) {
        echo "dwoja";
    } elseif ($procent < 25) {
        echo "jedynka";
    }

    $checkerrok = 2024;

    if ($checkerrok % 4 == 0) {
        echo "przestepny";
    } else {
        echo "nie przestepny";
    }

    function kalk($a, $znak, $b) {
        if ($znak == "+") {
            $c = $a + $b;
        } elseif ($znak == "-") {
            $c = $a - $b;
        } elseif ($znak == "/") {
            $c = $a / $b;
        } elseif ($znak == "*") {
            $c = $a * $b;
        }
        echo "znak:". $znak. " wynik:". $c;
    }

    kalk(2, "+", 2);


    $stringg = "siema";

    if (empty($stringg)) {
        echo "puste";
    } else {
        echo "". $stringg;
    }

    $wiek = 18;
    $xd = ($wiek >= 18) ? "Dorosły" : "Niepełnoletni";
    echo "". $xd;


    $dzien = 5;

    switch ($dzien) {
    case 1:
        echo "Poniedziałek";
        break;
    case 2:
        echo "wtorek";
        break;
    case 3:
        echo "sroda";
        break;
    case 4:
        echo "czwartek";
        break;
    case 5:
        echo "Piatek";
        break;
    case 6:
        echo "Sobota";
        break;
    case 7:
        echo "Niedziela";
        break;
        default:
    echo "cos sie popsuło";
    }


    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo $i. " ";
        }
    }

    $all = 0;

    for ($i = 1; $i <= 100; $i++) {
        $all = $all + $i;
        if ($i == 100) {
            echo $all;
        }   
    }

    for ($i = 1; $i < 10; $i++) {
        for ($x = 1; $x < 10; $x++) {
            $wynik = $i * $x;
            echo $wynik. "<br>";
        }
    }

    for ($i = 10; $i > 0; $i--) {
        echo $i . " ";
    }

    $i = 1;
    while ($i <= 5) {
        echo $i;
        $i++;
    }


    $silnia = 5;

    for ($i = 1; $i < 5; $i++) {
        echo "<br>";
        $silnia = $silnia * $i;
        echo $silnia;
    }

    ?>
</body>
</html>
