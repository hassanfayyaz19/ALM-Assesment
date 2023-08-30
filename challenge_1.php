<?php

$temperature = [
    32.3,
    31.3,
    28.2,
    29.3,
    29.7,
    29.9,
    28.7,
    28.4,
    30.5,
    30.5,
    31.7,
    30.6,
    29.4,
    32.0,
    36.2,
    31.3,
    32.8,
    33.3,
    32.9,
    28.8,
    30.8,
    28.0,
    25.9,
    30.8,
    32.4,
    32.0,
    31.3,
    25.2,
    29.1,
    28.6,
    30.6
];

$length = count($temperature);
sort($temperature);
$lowest_temperature = '';
$highest_temperature = '';

$sum = 0;
$last_five_index = $length - 5;
for ($i = 0; $i < $length; $i++) {
    $sum += $temperature[$i];

    if ($i < 5) {
        $lowest_temperature .= $temperature[$i] . ", ";
    }

    if ($i > $last_five_index) {
        $highest_temperature .= $temperature[$i] . ", ";
    }
}

echo "The lowest 5 recorded temperature at sunshine coast airport in janaray in 2015 were " . $lowest_temperature;
echo " <br>";
echo "The highest 5 recorded temperature at sunshine coast airport in janaray in 2015 were " . $highest_temperature;
echo " <br>";
echo "Average of daily recorded temperature: " . round($sum / $length, 2);
?>