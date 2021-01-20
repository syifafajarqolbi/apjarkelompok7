<?php
     include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
     <title>menampilkan data</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

     <h1>Data Mahasiswa</h1>

     <table>
         <tr>
             <th>No</th>
             <th>Nama</th>
             <th>NIM</th>
             <th>Prodi</th>
             <th>Judul</th>
         </tr>
         <?php
             $no=1;
             $data_Mhs = mysqli_query($koneksi," SELECT * FROM mahasiswa");
             while ($tampil = mysqli_fetch_array($data_Mhs)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tampil['Nama']; ?></td>
            <td><?php echo $tampil['NIM']; ?></td>
            <td><?php echo $tampil['Prodi']; ?></td>
            <td><?php echo $tampil['Judul']; ?></td>
        </tr>
        <?php
             }
        ?>


     </table>
</body>