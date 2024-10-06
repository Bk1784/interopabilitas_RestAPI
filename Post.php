<?php



// URL API tujuan
$url = 'https://jsonplaceholder.typicode.com/posts';
    
    // Data yang akan dikirim (format array PHP)
    $data = array(
        'title' => 'Mengirim Data Baru',
        'body' => 'Ini adalah contoh mengganti data baru',
        'userId' => 100,
    );


// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk metode POST dan kirim data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);


// Tutup cURL
curl_close($ch);

// Tampilkan respon dari server

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1><?php echo $data['title']; ?></h1>

    <?php echo $data['body']; ?>

    <?php echo $data['userId']; ?>

</body>
</html>