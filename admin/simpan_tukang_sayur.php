<?php
require '../koneksi.php';
$nama = $_POST['nama_tukang_sayur'];
$alamat = $_POST['alamat_tukang_sayur'];

$sql = mysqli_query($conn, "insert into tukang_sayur(nama_tukang_sayur,alamat_tukang_sayur) values('$nama', '$alamat')");

if ($sql) {
?>
    <script type="text/javascript">
        alert ('Data Berhasil disimpan');
        window.location = 'admin.php?url=lihat_tukang_sayur';
    </script>
<?php
}
?>