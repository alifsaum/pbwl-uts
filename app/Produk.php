<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Produk extends Koneksi {

    public function tampil_pr()
    {
        $sql = "SELECT * FROM tb_produk, tb_categori, tb_jenis WHERE tb_produk.pr_id_categori=tb_categori.cat_id AND tb_produk.pr_id_jenis=tb_jenis.jns_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan_pr()
    {
        $pr_id_categori = $_POST['pr_id_categori'];
        $pr_id_jenis = $_POST['pr_id_jenis'];
        $pr_name = $_POST['pr_name'];
        $pr_jumlah = $_POST['pr_jumlah'];
        $pr_harga = $_POST['pr_harga'];
        $pr_ukuran = $_POST['pr_ukuran'];


        $sql = "INSERT INTO tb_produk (pr_id_categori, pr_id_jenis, pr_name, 
        pr_jumlah, pr_harga, pr_ukuran) VALUES (:pr_id_categori, :pr_id_jenis, 
        :pr_name, :pr_jumlah, :pr_harga, :pr_ukuran)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pr_id_categori", $pr_id_categori);
        $stmt->bindParam(":pr_id_jenis", $pr_id_jenis);
        $stmt->bindParam(":pr_name", $pr_name);
        $stmt->bindParam(":pr_jumlah", $pr_jumlah);
        $stmt->bindParam(":pr_harga", $pr_harga);
        $stmt->bindParam(":pr_ukuran", $pr_ukuran);
        $stmt->execute();

    }

    public function edit_pr($id)
    {

        $sql = "SELECT * FROM tb_produk, tb_categori, tb_jenis WHERE pr_id=:pr_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pr_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update_pr()
    {
        $pr_name = $_POST['pr_name'];
        $pr_id_categori = $_POST['pr_id_categori'];
        $pr_jumlah = $_POST['pr_jumlah'];
        $pr_id_jenis = $_POST['pr_id_jenis'];
        $pr_harga = $_POST['pr_harga'];
        $pr_ukuran = $_POST['pr_ukuran'];
        $pr_id = $_POST['pr_id'];

        $sql = "UPDATE tb_produk SET pr_name=:pr_name, pr_id_categori=:pr_id_categori, 
        pr_jumlah=:pr_jumlah, pr_id_jenis=:pr_id_jenis, pr_harga=:pr_harga,
        pr_ukuran=:pr_ukuran WHERE pr_id=:pr_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pr_name", $pr_name);
        $stmt->bindParam(":pr_id_categori", $pr_id_categori);
        $stmt->bindParam(":pr_jumlah", $pr_jumlah);
        $stmt->bindParam(":pr_id_jenis", $pr_id_jenis);
        $stmt->bindParam(":pr_harga", $pr_harga);
        $stmt->bindParam(":pr_ukuran", $pr_ukuran);
        $stmt->bindParam(":pr_id", $pr_id);
        $stmt->execute();

    }

    public function delete_pr($id)
    {

        $sql = "DELETE FROM tb_produk WHERE pr_id=:pr_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pr_id", $id);
        $stmt->execute();

    }

}