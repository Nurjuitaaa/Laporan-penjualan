<?php
// Array asosiatif untuk menyimpan detail setiap transaksi
$transaksi = array(
    array("nama" => "Produk A", "harga" => 10000, "jumlah" => 5),
    array("nama" => "Produk B", "harga" => 7500, "jumlah" => 10),
    array("nama" => "Produk C", "harga" => 12000, "jumlah" => 8),
);

// Menghitung total penjualan
$total_penjualan = 0;
foreach ($transaksi as $t) {
    $total_penjualan += $t["harga"] * $t["jumlah"];
}

// Menampilkan laporan penjualan dalam bentuk tabel HTML
echo "<h2>Laporan Penjualan</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Harga Per Produk</th><th>Jumlah Terjual</th><th>Total</th></tr>";

foreach ($transaksi as $t) {
    $total_produk = $t["harga"] * $t["jumlah"];
    echo "<tr>";
    echo "<td>" . htmlspecialchars($t["nama"]) . "</td>";
    echo "<td>" . htmlspecialchars(number_format($t["harga"], 0, ',', '.')) . "</td>";
    echo "<td>" . htmlspecialchars($t["jumlah"]) . "</td>";
    echo "<td>" . htmlspecialchars(number_format($total_produk, 0, ',', '.')) . "</td>";
    echo "</tr>";
}

echo "<tr><td colspan='3'>Total Penjualan</td><td>" . htmlspecialchars(number_format($total_penjualan, 0, ',', '.')) . "</td></tr>";
echo "</table>";
?>
