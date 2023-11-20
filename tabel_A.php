<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Minyak Telon", 20, 30.000),
    array(2, "Diapers", 25, 51.000),
    array(3, "Baby Oil", 15, 16.000),
    array(4, "Shampo Baby", 20, 20.000),
    array(5, "Bedak", 15, 15.000),
    array(6, "Baju Bayi", 20, 35.000),
    array(7, "Jumper", 25, 50.000),
);

$totalJumlah = 0; 

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; 
    $totalJumlah += $jumlah; 
    $row[] = $jumlah; 
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; 

?>
<br><br><br><br><br><br><br><br>
<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Minyak Telon", 20, 30.000),
    array(2, "Diapers", 25, 51.000),
    array(3, "Baby Oil", 15, 16.000),
    array(4, "Shampo Baby", 20, 20.000),
    array(5, "Bedak", 15, 15.000),
    array(6, "Baju Bayi", 20, 35.000),
    array(7, "Jumper", 25, 50.000),
);

$totalJumlah = 0; // Variabel untuk menyimpan total jumlah produk

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; // Hitung jumlah produk
    $totalJumlah += $jumlah; // Tambahkan jumlah produk ke total
    $row[] = $jumlah; // Tambahkan jumlah produk ke array produk
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; // Tampilkan total jumlah produk

$diskon = 0; // Variabel untuk menyimpan jumlah diskon

// Cek total pembelian untuk menentukan diskon
if ($totalJumlah >= 200.000) {
    $diskon = 0.2; // Diskon 20%
} elseif ($totalJumlah >= 150.000) {
    $diskon = 0.1; // Diskon 10%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon; // Hitung jumlah diskon
    $totalBayar = $totalJumlah - $totalDiskon; // Hitung total yang harus dibayar setelah diskon
    echo "<br>Discount: " . ($diskon * 100) . "%"; // Tampilkan persentase diskon
    echo "<br>Total yang harus dibayar setelah diskon: " . $totalBayar; // Tampilkan total yang harus dibayar setelah diskon
}
?>
<br><br><br><br><br><br><br><br>
<?php
// Data barang dalam bentuk array multidimensi
$barang = array(
    array("Nama Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35.500),
    array("Nama Produk" => "Diapers", "Stok" => 25, "Harga" => 51.000),
    array("Nama Produk" => "Bedak", "Stok" => 15, "Harga" => 15.000),
    array("Nama Produk" => "Minyak Telon", "Stok" => 20, "Harga" => 30.000)
);

// Fungsi untuk menghitung total jumlah
function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Stok'] * $item['Harga'];
    }
    return $totalJumlah;
}

// Hitung total jumlah
$totalJumlah = hitungTotalJumlah($barang);

// Cek apakah ada diskon
$diskon = 0;
if ($totalJumlah >= 200.000) {
    $diskon = 0.2; // 20%
} elseif ($totalJumlah >= 150.000) {
    $diskon = 0.1; // 10%
}

// Hitung total yang harus dibayar setelah diskon
$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

// Tampilkan data dalam tabel terurut
echo "Tanggal Transaksi: 20 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

// Urutkan array berdasarkan nama produk
usort($barang, function($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "a. Total Jumlah: " . $totalJumlah . " Rupiah<br>";
echo "b. Diskon: " . ($diskon * 100) . "%<br>";
echo "c. Total Pembayaran: " . $totalBayar . " Rupiah";
?>
