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
        echo "
        <tr>
            <td>$no<td>
            <td>$tampil[Nama]</td>
            <td>$tampil[NIM]</td>
            <td>$tampil[Prodi]</td>
            <td>$tampil[Judul]</td>
        </tr>";
        $no++;
    }
    ?>
</table>
