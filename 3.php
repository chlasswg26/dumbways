<?php
function bilanganPrima($awal, $akhir) {
    $n = $akhir;
    for ($i = 1; $i <= 40; $i++) {
        $awal = 0;
        for ($j = 1; $j <= 100; $j++) {
            if ($i % $j == 0) {
                $awal++;
            }
        }
        if ($awal == 2) {
            $n++;
            echo $i . " ";
            if ($n % 3 == 0) {
                echo "<br>";
            }
        }
    }
}

echo bilanganPrima(4, 3);