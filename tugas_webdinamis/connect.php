<?php
$servername = "localhost";
$database = "db_pmb";
$username = "root";
$password = "";

$connetion = mysqli_connect($servername, $username, $password, $database);

if (!$connetion) {
    die("Koneksi gagal " . mysqli_connect_error());
} 
?>
<table>
    <thead>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>JK</th>
        <th>Agama</th>
        <th>Sekolah</th>
    </thead>
    <?php
    $sql = "SELECT * FROM siswa";
    $result = $connetion->query($sql);
    if ($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row['id_siswa'] ?></td>
                <td><?php echo $row['nama_siswa'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['agama'] ?></td>
                <td><?php echo $row['sekolah_asal'] ?></td>
            </tr>
    <?php
        }
    }
    ?>
</table>