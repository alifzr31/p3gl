<?php
    include 'koneksi.php';
?>
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
            $s_ktgr = "";
            $s_kw = "";

            if (isset($_POST['cari'])) {
                $s_ktgr = $_POST['kategori'];
                $s_kw = $_POST['keyword'];
            }
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <select name="kategori">
                            <option value="" selected hidden>Kategori</option>
                            <option value="sistematik" <?php if ($s_ktgr == "sistematik") { echo "selected"; } ?>>Sistematik</option>
                            <option value="tematik" <?php if ($s_ktgr == "tematik") { echo "selected"; } ?>>Tematik</option>
                        </select>
                        <input type="search" name="keyword" placeholder="Cari Peta" value="<?php echo $s_kw; ?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="cari" value="Cari"></td>
                </tr>
            </table>
        </form>
        <?php
            if (isset($_POST['cari'])) {
                if ($_POST['keyword'] == "$s_kw") {
                    echo $s_kw."<a href='coba.php'>Hapus filter</a>";
                }
            }
        ?>
        <table border="1">
            <tr>
                <th>judul</th>
                <th>kategori</th>
            </tr>
            <?php
                if (isset($_POST['cari'])) {
                    $kw = $_POST['keyword'];
                    $ktgr = $_POST['kategori'];
                    $data = mysqli_query($koneksi, "select * from peta where judul like '%'.$kw.'%' and kategori='$ktgr'");
                } else {
                    $data = mysqli_query($koneksi, "select * from peta");
                }

                while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>