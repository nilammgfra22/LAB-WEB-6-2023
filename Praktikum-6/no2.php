<!DOCTYPE html>
<html>
<head>
    <title>Form Perkenalan</title>
</head>
<body>
    <h1>Form Perkenalan</h1>
    <form method="post">
        Nama: <input type="text" name="nama"><br>
        Usia: <input type="number" name="usia"><br>
        Email: <input type="email" name="email"><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
        Jenis Kelamin:
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
        Bahasa yang dikuasai:<br>
        <input type="checkbox" name="bahasa[]" value="Java">Java<br>
        <input type="checkbox" name="bahasa[]" value="Python">Python<br>
        <input type="checkbox" name="bahasa[]" value="C">C<br>
        <input type="checkbox" name="bahasa[]" value="Ruby">Ruby<br>
        <input type="checkbox" name="bahasa[]" value="JavaScript">JavaScript<br>
        <input type="checkbox" name="bahasa[]" value="PHP">PHP<br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  //Untuk akses informasi dari data yang data dikirim ke web localhost
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $email = $_POST['email'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $bahasa = $_POST['bahasa'];

        $kalimat = "Halo, nama saya $nama. Saya berusia $usia tahun. "; 
        $kalimat .= "Saya lahir pada $tanggal_lahir. "; // .= untuk gabungkan/sambung stringnya
        $kalimat .= "Saya adalah seorang $jenis_kelamin. ";

        if (!empty($bahasa)) { //"!empty" u periksa ada nilai atau ceklis pada bahasa pemrograman
            $kalimat .= "Saya menguasai bahasa pemrograman ";
            $kalimat .= implode(", ", $bahasa); //implode untuk gabungkan data bahasa yang diceklis dalam satu array menjadi string tunggal
            $kalimat .= ".";
        } else {
            $kalimat .= "Saya tidak menguasai bahasa pemrograman";
        }

        echo "<h2>Perkenalan Singkat:</h2>";
        echo $kalimat;
    }
    ?>
</body>
</html>
