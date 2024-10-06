<?php

// URL API tujuan (dengan ID data yang ingin dihapus)
$url = 'https://jsonplaceholder.typicode.com/posts/1'; // Ganti 1 dengan ID post yang ingin dihapus

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk metode DELETE
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

// Set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);

// Periksa kesalahan cURL
if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Tampilkan kode status HTTP dari respons
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "Response HTTP Code: " . $httpCode . "\n";

    // Tampilkan respons dari server
    echo "Response: " . $response;
}

// Tutup cURL
curl_close($ch);
?>
