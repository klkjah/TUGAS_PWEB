<?php
    require_once('koneksidb.php');
    $query_sql = "SELECT * FROM tb_member";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error($koneksidb));
    $totaldata = mysqli_num_rows($sql);
    $data = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
    <div class="container">
    <table align="table-responsive" class="table table-striped table-bordered table-hover" id="dynamic-table">
    <thead>
        <th>Ubah / Hapus</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php do { 
            if ($totaldata==0) {
                echo 'data kosong.';
            }else { ?>
        <tr>
            <td>
                <a href="ubahdata.php?id=<?php echo $data['ID']; ?>"><button>Ubah</button></a>
                <a href="hapusdata.php?id=<?php echo $data['ID']; ?>"><button>Hapus</button></a>
            </td>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Alamat']; ?></td>
            <td><?php echo $data['Telp']; ?></td>
            <td><?php echo $data['Email']; ?></td>
        </tr>
            <?php } 
        } while ($data = mysqli_fetch_assoc($sql)); 
        ?>
    </tbody>
</table>