<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Posts</title>
</head>
<body>

        <h1 style="color: green; display: flex;  justify-content: center;">Data Posts</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead style=" background-color: green;">
            <tr style="color: white;">
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
        <?php
                // Inisialisasi URL dan pengaturan CURL
                $url = 'https://jsonplaceholder.typicode.com/posts';
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                // Ubah respon JSON menjadi array
                $data = json_decode($response, true);

                // Loop untuk menampilkan data dalam tabel
                for ($i = 0; $i < 5 && $i < count($data); $i++) {
                    echo "<tr>";
                    echo "<td>" . $data[$i]['id'] . "</td>";
                    echo "<td>" . $data[$i]['title'] . "</td>";
                    echo "<td>" . $data[$i]['body'] . "</td>";
                    echo "</tr>";
                }
                
            ?>
        </tbody>
    </table>

</body>
</html>