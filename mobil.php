<h3> List Harga Mobil </h3>

<table border="2">
    <tr>
        <th> No </th>
        <th> type </th>
        <th> warna </th>
        <th> harga </th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from mobil");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no<</td>
            <td>$tampil[type]</td>
            <td>$tampil[warna]</td>
            <td>$tampil[harga]</td>
            <td>$tampil[no_plat]</td>
        </tr>";
        $no++;
}
?>
</table>

