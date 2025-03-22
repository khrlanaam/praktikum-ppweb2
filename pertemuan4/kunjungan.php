<?php
    require_once ('bukutamu.php');
    session_start();

    if (!isset($_SESSION['bukutamu'])) {
        $_SESSION['bukutamu'] = [];
    }

    if (isset($_POST['submit'])) {
        $bukutamu = new BukuTamu();
        $bukutamu->timestamp = date('Y-m-d H:i:s');
        $bukutamu->nama = $_POST['fullname'];
        $bukutamu->email = $_POST['email'];
        $bukutamu->keperluan = $_POST['keperluan'];

        array_push($_SESSION['bukutamu'], $bukutamu);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Buku Tamu</title>
</head>
<body>
   <div class="container">
        <h4>Daftar Kunjungan</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Keperluan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $bukutamu) { ?>
                    <tr>
                        <td><?php echo $bukutamu->timestamp; ?></td>
                        <td><?php echo $bukutamu->nama; ?></td>
                        <td><?php echo $bukutamu->email; ?></td>
                        <td><?php echo $bukutamu->keperluan; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
   </div>
</body>
</html>
