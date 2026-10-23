<?php
    require_once('koneksidb.php');

    $id = $_GET['id'];
    $query_sql = "DELETE FROM tb_member where ID=$id";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error($koneksidb));
    if($sql){
        echo "<script> alert('Berhasil Hapus Registrasi.') </script>";
        echo "<script>window.location.href='dataregistrasi2.php'</script>";
    }
?>