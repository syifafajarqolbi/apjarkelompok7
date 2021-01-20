<h3> Data Mahasiswa </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Judul</th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from mahasiswa");
    while($tampil = msyqli_fetch_array($ambildata)){
    ?>
        <tr>
            <td><?php $no++; ?></td>
            <td><?php $tampil['Nama']; ?></td>
            <td><?php $tampil['NIM']; ?></td>
            <td><?php $tampil['Prodi']; ?></td>
            <td><?php $tampil['Judul']; ?></td>
        </tr>
        <?php

        ?>
</table>