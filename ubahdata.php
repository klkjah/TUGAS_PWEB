<?php
    require_once('koneksidb.php');

    if(isset($_POST['btnsimpan'])=='btnsimpan'){
        $ID = trim($_POST['ID']);
        $Nama = trim($_POST['Nama']);
        $Alamat = trim($_POST['Alamat']);
        $Telp = trim($_POST['Telp']);
        $Email = trim($_POST['Email']);

        $query_sql = "UPDATE tb_member SET Nama='$Nama', Alamat='$Alamat', 
        Telp='$Telp', Email='$Email' WHERE ID='$ID'";
        $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error($koneksidb));
        if($sql){
            echo "<script> alert('Berhasil simpan Registrasi.') </script>";
            echo "<script>window.location.href='dataregistrasi2.php'</script>";
        }
    }

    $id = $_GET['id'];
    $query_sql = "SELECT * FROM tb_member where ID=$id";
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
    <form method="post" name="form1" >
    <div class="col-md-12">
        <h2>UBAH DATA </h2><br>
        <div class="form-group">
            <div class="form-group">
                <label for="ID">ID :</label>
                <input type="text" disabled value="<?php echo $data['ID']; ?>" class="form-control">
                <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="Nama">Nama :</label>
                <input type="text" required name="Nama" value="<?php echo $data['Nama']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat :</label>
                <input type="Alamat" required name="Alamat" value="<?php echo $data['Alamat']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="Telp">Telp :</label>
                <input type="number" required name="Telp" value="<?php echo $data['Telp']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email">Email :</label>
                <input type="email" required name="Email" value="<?php echo $data['Email']; ?>" class="form-control">
            </div>
            
            <div class="form-check mb-12">
                <button class="btn btn-success" name="btnsimpan" value="btnsimpan" type="submit"> Simpan 
                    <i class="ace-icon fa fa-signal"></i>
                </button>
                <a href="dataregistrasi.php"><button class="btn btn-primary" type="button"> Batal
                    <i class="ace-icon fa fa-signal"></i>
                </button></a>
            </div>
        </div>
    </div>
    </form>
</body>
</html>