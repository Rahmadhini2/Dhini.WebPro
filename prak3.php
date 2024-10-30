<?php
// Array berisi data buku
$buku = [
    ["judul" => "Berserk", "penulis" => "Miura Kentaro"],
    ["judul" => "Oswald", "penulis" => "Walt Disney"]
];

// Fungsi untuk menampilkan data buku dalam bentuk tabel HTML
function tampilkanData(array $buku): void {
    echo "<h1>Menampilkan data awal : </h1>";
    echo "<table border='1'>";
    echo "<tr><th>Judul</th><th>Penulis</th></tr>";
    foreach ($buku as $b) {
        echo "<tr>";
        echo "<td>{$b['judul']}</td>";
        echo "<td>{$b['penulis']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Memanggil fungsi untuk menampilkan data
tampilkanData($buku);
$buku = [
    ["judul" => "Berserk", "penulis" => "Miura Kentaro"],
    ["judul" => "Oswald", "penulis" => "Walt Disney"],
    ["judul" => "One Piece", "penulis" => "Eiichiro oda"]
];
// Fungsi untuk menambahkan buku baru dalam bentuk tabel HTML
function tambahdata(array $buku): void {
    echo "<h1>Menambah buku baru : </h1>";
    echo "<table border='1'>";
    echo "<tr><th>Judul</th><th>Penulis</th></tr>";
    foreach ($buku as $b) {
        echo "<tr>";
        echo "<td>{$b['judul']}</td>";
        echo "<td>{$b['penulis']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Memanggil fungsi untuk menambahkan data
tambahdata($buku);
$buku = [
    ["judul" => "Berserk", "penulis" => "Miura Kentaro"],
    ["judul" => "Oswald", "penulis" => "Walt Disney"],
    ["judul" => "Naruto", "penulis" => "Masashi Kishimoto"]
];
// Fungsi untuk memperbarui buku dengan ID ke-2 dalam bentuk tabel HTML
function memperbaruidata(array $buku): void {
    echo "<h1>Memperbarui buku dengan ID ke-2 : <ke-2></ke-2></h1>";
    echo "<table border='1'>";
    echo "<tr><th>Judul</th><th>Penulis</th></tr>";
    foreach ($buku as $b) {
        echo "<tr>";
        echo "<td>{$b['judul']}</td>";
        echo "<td>{$b['penulis']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Memanggil fungsi untuk memperbarui data buku
memperbaruidata($buku);
$buku = [
    ["judul" => "Berserk", "penulis" => "Miura Kentaro"],
    ["judul" => "Naruto", "penulis" => "Masashi Kishimoto"]
];
// Fungsi untuk menghapus buku dengan ID ke-1 dalam bentuk tabel HTML
function menghapusdata(array $buku): void {
    echo "<h1>Menghapus buku dengan ID ke-1 : <ke-2></ke-2></h1>";
    unset($buku[0]);
    $buku = array_values($buku);
    echo "<table border='1'>";
    echo "<tr><th>Judul</th><th>Penulis</th></tr>";
    foreach ($buku as $b) {
        echo "<tr>";
        echo "<td>{$b['judul']}</td>";
        echo "<td>{$b['penulis']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Memanggil fungsi untuk menghapus data buku
menghapusdata($buku);
$buku = [
    ["judul" => "Naruto", "penulis" => "Masashi Kishimoto"]
];
// Fungsi untuk mencari buku dengan kata kunci naruto  dalam bentuk tabel HTML
function mencaribuku(array $buku): void {
    echo "<h1>mencari buku dengan kata kunci naruto<ke-2 : ></ke-2></h1>";
    $cari_kata_kunci = "Naruto";
    $hasil_pencarian = array_filter($buku,function($b) use ($cari_kata_kunci) {
        
    })
    echo "<table border='1'>";
    echo "<tr><th>Judul</th><th>Penulis</th></tr>";
    foreach ($buku as $b) {
        echo "<tr>";
        echo "<td>{$b['judul']}</td>";
        echo "<td>{$b['penulis']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Memanggil fungsi untuk mengahpus data buku
mencaribuku($buku);
?>
