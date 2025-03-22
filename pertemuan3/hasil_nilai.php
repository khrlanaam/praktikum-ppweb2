<?php
if (!isset($_POST['nama']) || empty($_POST['nama'])) {
    echo '<script>alert("Anda harus mengisi form terlebih dahulu!")</script>';
    echo '<meta http-equiv="refresh" content="0; url=form-nilai.php">';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= htmlspecialchars($_POST['nama']) ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= htmlspecialchars($_POST['nim']) ?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= htmlspecialchars($_POST['rombel']) ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?= htmlspecialchars($_POST['matkul']) ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= htmlspecialchars($_POST['tugas']) ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= htmlspecialchars($_POST['uts']) ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= htmlspecialchars($_POST['uas']) ?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                // Konversi ke integer
                $tugas = (float) $_POST['tugas'];
                $uts = (float) $_POST['uts'];
                $uas = (float) $_POST['uas'];

                // Hitung nilai akhir
                $total = ($tugas * 0.35) + ($uts * 0.30) + ($uas * 0.35);

                // Menentukan predikat
                if ($total <= 35) {
                    $pred = "E";
                } elseif ($total <= 55) {
                    $pred = "D";
                } elseif ($total <= 69) {
                    $pred = "C";
                } elseif ($total <= 84) {
                    $pred = "B";
                } else {
                    $pred = "A";
                }
                echo $pred;
                ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($pred) {
                    case 'A':
                        echo "Lulus dengan Predikat A";
                        break;
                    case 'B':
                        echo "Lulus dengan Predikat B";
                        break;
                    case 'C':
                        echo "Lulus dengan Predikat C";
                        break;
                    case 'D':
                        echo "Lulus dengan Predikat D";
                        break;
                    case 'E':
                        echo "Tidak lulus";
                        break;
                    default:
                        echo "Tidak diketahui";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
