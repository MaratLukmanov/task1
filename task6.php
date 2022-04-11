<?php
echo '<table border="4">';
for ($a = 1; $a <= 10; $a++) {
    echo '<tr>';
    for ($b= 1; $b <= 10; $b++ ) {
        $result = $a * $b;

        echo '<td>';
        if ($a % 2 == 0 && $b % 2 == 0) {
            echo "($result)";
        } elseif ($a % 2 !== 0 && $b % 2 !== 0) {
            echo "[$result]";
        } else {
            echo "$result";

        }
        echo '<td>';
        echo '</td>';
}
    echo '</tr>';
}
echo '</table>';