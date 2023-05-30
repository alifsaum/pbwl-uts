CREATE TABLE tb_categori (
    cat_id INT (11) NOT NULL AUTO_INCREMENT,
    cat_name VARCHAR (100) NOT NULL,
    PRIMARY KEY(cat_id)
);

CREATE TABLE tb_jenis (
    jns_id INT (11) NOT NULL AUTO_INCREMENT,
    jns_id_categori INT (11) NOT NULL,
    jns_name VARCHAR (100) NOT NULL,
    jns_satuan VARCHAR (100) NOT NULL,
    PRIMARY KEY(jns_id),
    FOREIGN KEY (jns_id_categori) REFERENCES tb_categori(cat_id) ON DELETE CASCADE 
);

CREATE TABLE tb_produk (
    id_produk INT(11) NOT NULL AUTO_INCREMENT,
    pr_id_categori INT (11) NOT NULL,
    pr_id_jenis INT (100) NOT NULL
    pr_nama VARCHAR (100) NOT NULL,
    pr_jumlah VARCHAR (100) NOT NULL,
    pr_harga DECIMAL (10,2) NOT NULL,
    pr_ukuran VARCHAR (100) NOT NULL,
    PRIMARY KEY (id_produk),
    FOREIGN KEY(pr_id_categori) REFERENCES tb_categori(cat_id) ON DELETE CASCADE,
    FOREIGN KEY(pr_id_jenis) REFERENCES tb_jenis(jns_id) ON DELETE CASCADE

);