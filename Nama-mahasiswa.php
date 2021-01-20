<h3> Nama Mahasiswa </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="130">Nama</td>
        <td><input type="text" name="Nama"></td>
    </tr>
    <tr>
        <td> NIM </td>
        <td> <input type="text" name="NIM"></td>
    </tr>
    <tr>
        <td> Prodi </td>
        <td><input type="text" name="Prodi"></td>
    </tr>
    <tr>
        <td> Judul </td>
        <td><input type="text" name="Judul"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>

<?php
include "koneksi.php" ;

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into mahasiswa set
    Nama = '$_POST[Nama]',
    NIM = '$_POST[NIM]',
    Prodi = '$_POST[Prodi]',
    Judul = '$_POST[Judul]'");

    echo "Data telah tersimpan";
}
?>