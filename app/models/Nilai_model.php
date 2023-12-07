<?php

namespace App\Models;

use App\Core\Model;

class Nilai_model extends Model
{
    public function show()
    {
        $query = "SELECT * FROM tb_nilai";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
     {
          $nama = $_POST['nama'];
          $kelas = $_POST['kelas'];
          $nilai = $_POST['nilai'];

          $sql = "INSERT INTO tb_nilai (nama,kelas,nilai) VALUES (:nama,:kelas,:nilai)";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":kelas", $kelas);
          $stmt->bindParam(":nilai", $nilai);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_nilai WHERE id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $nama = $_POST['nama'];
          $kelas = $_POST['kelas'];
          $nilai = $_POST['nilai'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_nilai SET nama=:nama, kelas=:kelas, nilai=:nilai WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":id", $id);
          $stmt->bindParam(":kelas", $kelas);
          $stmt->bindParam(":nilai", $nilai);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_nilai WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id", $id);

          $stmt->execute();
     }
}