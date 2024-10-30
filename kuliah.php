<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
 
echo "<br>";

$data = ["Ardi", "Budi", "Ceryl", "Dandy", "Eka", "Fadhil"];
$keyword = "Ceryl"; // Ganti dengan keyword yang ingin dicari
if (in_array($keyword, $data)) {
    echo "Ketemu";
} else {
    echo "Keyword tidak ditemukan";
}
?>
