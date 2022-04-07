<?php
require '../koneksi.php';
$nama = $_POST['nama_tukang_sayur'];
$alamat = $_POST['alamat_tukang_sayur'];
$id = $_POST['id_tukang_sayur'];

$sql = mysqli_query($conn, "update tukang_sayur set nama_tukang_sayur='$nama',alamat_tukang_sayur='$alamat' where id_tukang_sayur='$id' ");

if ($sql) {
?>
    <script type="text/javascript">
        alert('Data Berhasil diubah');
        window.location = 'admin.php?url=lihat_tukang_sayur';
    </script>
<?php
}
?>