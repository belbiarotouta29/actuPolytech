<?php
class Database {
    private $servername = "localhost";
    private $username = "miabd_user";
    private $password = "passer";
    private $dbname = "miabd_news";

    public function connect() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>
