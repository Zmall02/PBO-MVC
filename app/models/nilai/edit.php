<h2>Edit Nilai</h2>

<form action="<?php echo URL; ?>/nilai/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><input type="text" name="kelas" value="<?php echo $data['row']['kelas']; ?>" required></td>
        </tr>
        <tr>
            <td>NILAI</td>
            <td><input type="text" name="nilai" value="<?php echo $data['row']['nilai']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>