<?php

namespace app;
use Inc\Koneksi as Koneksi;

class Categori extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_categori";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $cat_name = $_POST['cat_name'];

        $sql = "INSERT INTO tb_categori (cat_name) VALUES (:cat_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $cat_name);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_categori WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {

        $cat_name = $_POST['cat_name'];
        $cat_id = $_POST['cat_id'];

        $sql = "UPDATE tb_categori SET cat_name=:cat_name WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $cat_name);
        $stmt->bindParam(":cat_id", $cat_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_categori WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

    }
}