<?php
function timGiaTri($giaTri, $mang) {
    foreach ($mang as $index => $item) {
        if ($item === $giaTri) {
            return $index;
        }
    }
    return -1;
}

// Test
$traiCay = ["Apple", "Banana", "Cherry"];
$index = timGiaTri("Banna", $traiCay);
echo $index; // Output: -1
?>