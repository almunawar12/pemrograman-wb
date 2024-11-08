<?php
// while
echo "While\n";
$i = 1;
while ($i <= 7) {
    echo "Ini adalah baris ke-$i\n";
    $i++;
}

// do while
echo "=====================\n";
echo "Do While\n";
$i = 1;
do {
    echo "Ini adalah baris ke-$i\n";
    $i++;
} while ($i <= 7);

// for
echo "=====================\n";
echo "For\n";
for ($i = 1; $i <= 7; $i++) {
    echo "Ini adalah baris ke-$i\n";
}