<?php

namespace Inc;

class Koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=dbuts", "root", "");
    }
}

?>

<?php

$koneksi = mysqli_connect("localhost","root","","dbuts" );
?>