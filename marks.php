<?php
$marks = array(85, 70, 60, 75, 80, 65, 90, 55, 62, 68);
$count = 0;
for ($i = 0; $i < count($marks); $i++) {
    if ($marks[$i] >= 60 && $marks[$i] <= 70) {
        $count++;
    }
}
sort($marks);
echo "Marks of all the students: ";
for ($i = 0; $i < count($marks); $i++) {
    echo $marks[$i] . " ";
}
echo "<br>";
echo "Number of students whose marks are between 60-70: " . $count;
echo "<br>";
echo "Marks of the students whose marks are between 60-70 in ascending order: ";
for ($i = 0; $i < count($marks); $i++) {
    if ($marks[$i] >= 60 && $marks[$i] <= 70) {
        echo $marks[$i] . " ";
    }
}
?>
