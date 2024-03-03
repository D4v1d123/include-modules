<?php
function multiplication (int $number_table) {
    echo "<div class='container'>";

    for ($i = 0; $i <= 10; $i++) {
        echo "<p>$number_table * $i = " . $number_table * $i . "</p>";
    }

    echo "</div>";
}
