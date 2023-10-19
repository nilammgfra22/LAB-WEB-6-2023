<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6</title>
</head>
<body>
    <div style="text-align: center;">
        <div style="display: inline-block; text-align: left;">
        <form method="GET">
            <input name="input" type="text" placeholder="Masukkan tipe" required>
            <button type="submit">Submit</button>
        </form>
    

        <?php
        $data = [
            [
                "nama_barang" => "HP",
                "harga" => 3000000,
                "stok" => 10,
                "jenis" => "Elektronik"
            ],
            [
                "nama_barang" => "Jeruk",
                "harga" => 5000,
                "stok" => 20,
                "jenis" => "Buah"
            ],
            [
                "nama_barang" => "Kemeja",
                "harga" => 5000,
                "stok" => 9,
                "jenis" => "Pakaian"
            ],
            [
                "nama_barang" => "Apel",
                "harga" => 5000,
                "stok" => 5,
                "jenis" => "Buah"
            ],
            [
                "nama_barang" => "Celana",
                "harga" => 5000,
                "stok" => 10,
                "jenis" => "Pakaian"
            ],
            [
                "nama_barang" => "Laptop",
                "harga" => 50000,
                "stok" => 30,
                "jenis" => "Elektronik"
            ],
            [
                "nama_barang" => "Semangka",
                "harga" => 5000,
                "stok" => 2,
                "jenis" => "Buah"
            ],
            [
                "nama_barang" => "Kaos",
                "harga" => 5000,
                "stok" => 1,
                "jenis" => "Pakaian"
            ],
            [
                "nama_barang" => "VGA",
                "harga" => 2000000,
                "stok" => 0,
                "jenis" => "Elektronik"
            ]
        ];
// untuk mnyimpan hasil pencarian 
        $searchResult = [];
// pengkondisian apakah data ada kemudian mngubah mnjdi ke huruf kecil
//  get mengirimkan data melalui URL
// lower tidak bersifat case-sensitive (tidak memperdulikan huruf besar atau kecil).
        if (isset($_GET['input'])) {
            $tipe = strtolower($_GET['input']);
// perulangan
            foreach ($data as $item) {
                if (strtolower($item['jenis']) === $tipe) {
                    $searchResult[] = $item;
                }
            }
        }
// 2;garis tepi,tr baris judul kolom
        echo "<table border='2'><tr>";
        echo "<th>Nama</th>";
        echo "<th>Stok</th>";
        echo "<th>Harga</th>";
        echo "</tr>";
// memeriksa apakah parameter 'input' telah dikirim melalui URL, dan jika ya, nilai 
// dari parameter tersebut akan disimpan dalam variabel $tipe setelah diubah menjadi huruf kecil
        if (isset($_GET['input'])) { 
            $tipe = strtolower($_GET['input']);

            foreach ($searchResult as $barang) {
                echo "<tr>
                    <td>" . $barang['nama_barang'] . "</td>
                    <td>" . $barang['stok'] . "</td>
                    <td>" . $barang['harga'] . "</td>
                </tr>";
            }
        }
        echo "</table>";
        ?>
        </div>
    </div>
</body>
</html>