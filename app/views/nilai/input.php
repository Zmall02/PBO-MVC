<h2>Input Nilai</h2>

<form action="<?php echo URL; ?>/nilai/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><input type="text" name="kelas" required></td>
        </tr>
        <tr>
            <td>NILAI</td>
            <td><input type="text" name="nilai" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>