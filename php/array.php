<?php
$scores = array(1, 2, 3);
echo $scores[0]; // 1
echo "<br>";
echo $scores[2];
echo "<br>";

echo '<pre>';  
print_r($scores);
echo '</pre>';  
echo "<br>";

unset($scores[1]);

foreach ($scores as $s) {
    echo $s . " ";
}

$names = array(
    "ravi" => "Lazimpat",
    "simran" => "Baneshwor",
    "kiran" => "Jawalakhel"
);

echo "<br>";
echo $names["ravi"];
echo "<br>";
foreach ($names as $i => $v) {
    echo $i . " is from " . $v . ".<br>";
}

$names = array(
    "ravi" => array("lastname" => "Shrestha", "age" => 25, "address" => "Lazimpat"),
    "simran" => array("lastname" => "Karki", "age" => 22, "address" => "Baneshwor"),
    "kiran" => array("lastname" => "Gurung", "age" => 28, "address" => "Jawalakhel")
);

echo "<br>";
var_dump($names);
echo "<br><br>";

echo "We have " . sizeof($names) . " members.";
echo "<br>";
$i = 1;
foreach ($names as $k => $v) {
    echo $i . " " . strtoupper($k);
    echo "<br>";
    foreach ($v as $key => $value) {
        echo ucwords($key) . " = " . ucwords($value) . " ";
        echo "<br>";
    }
    echo "<hr>";
    $i++;
}
?>
