<h2>Nilai</h2>

<a href="<?php echo URL; ?>/nilai/input" class="btn">Input Nilai</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>NILAI</th>
            <th>EDIT</th>
            <th>HAPUS</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td><?php echo $row['nilai']; ?></td>
                  <td><a href="<?php echo URL; ?>/nilai/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/nilai/delete/<?php echo $row['id']; ?>" class="btn" style="background-color: red;">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>