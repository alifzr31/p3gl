<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'koneksi.php';

        $tgl = date('Y-m-d H:i:s');
    ?>
    <form action="" method="post">
        <input type="datetime" name="tgl" value="<?php echo $tgl; ?>" id="">
        <input type="submit" value="" name="form">
    </form>
    <?php
        if (isset($_POST['form'])) {
            $inptgl = $_POST['tgl'];

            $data = mysqli_query($koneksi, "insert into coba values('$inptgl')");
            
            if ($data) {
                echo "berhasil";
            } else {
                echo "gagal";
            }
        }
    ?>
</body>
</html>