<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Jenis extends Koneksi {

    public function tampil_jns()
    {
        $sql = "SELECT * FROM tb_jenis, tb_categori WHERE tb_jenis.jns_id_categori=tb_categori.cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan_jns()
    {
        $jns_id_categori = $_POST['jns_id_categori'];
        $jns_name = $_POST['jns_name'];
        $jns_satuan = $_POST['jns_satuan'];
        
        $sql = "INSERT INTO tb_jenis (jns_id_categori, jns_name, jns_satuan) VALUES (:jns_id_categori, :jns_name, :jns_satuan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_id_categori", $jns_id_categori);
        $stmt->bindParam(":jns_name", $jns_name);
        $stmt->bindParam(":jns_satuan", $jns_satuan);
        $stmt->execute();

    }

    public function edit_jns($id)
    {

        $sql = "SELECT * FROM tb_jenis, tb_categori WHERE jns_id=:jns_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update_jns()
    {
        $jns_name = $_POST['jns_name'];
        $jns_id_categori = $_POST['jns_id_categori'];
        $jns_satuan = $_POST['jns_satuan'];
        $jns_id = $_POST['jns_id'];

        $sql = "UPDATE tb_jenis SET jns_name=:jns_name, jns_id_categori=:jns_id_categori, jns_satuan=:jns_satuan WHERE jns_id=:jns_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_name", $jns_name);
        $stmt->bindParam(":jns_id_categori", $jns_id_categori);
        $stmt->bindParam(":jns_satuan", $jns_satuan);
        $stmt->bindParam(":jns_id", $jns_id);
        $stmt->execute();

    }

    public function delete_jns($id)
    {

        $sql = "DELETE FROM tb_jenis WHERE jns_id=:jns_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_id", $id);
        $stmt->execute();

    }

}