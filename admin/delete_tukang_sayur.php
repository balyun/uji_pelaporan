<?php
require '../koneksi.php';
$id = $_GET['id'];

$sql = mysqli_query($conn, "delete from tukang_sayur where id_tukang_sayur='$id'");

if ($sql) {
?>
    <script type="text/javascript">
        alert('Data Berhasil dihapus');
        window.location = 'admin.php?url=lihat_tukang_sayur';
    </script>
<?php
}
?>