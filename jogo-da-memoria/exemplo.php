<?php



$matriz = [
    [1, 2, 3, 4, 5, 6],
    [1, 3, 4, 6, 3, 1],
    [1, 3, 3, 2, 3, 1],
    [1, 3, 4, 6, 3, 1],
    [1, 3, 1, 2, 1, 1],
    [1, 3, 1, 2, 1, 1]
];

for ($l = 0; $l < 6; $l++) {
    echo '<br>';
    for ($c = 0; $c < 6; $c++) {
        echo "[" . $matriz[$l][$c]. "]";
    }
}
