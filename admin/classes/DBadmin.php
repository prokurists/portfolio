<?php

class DBadmin
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "portfolio";

    protected $conn;

    function __construct()
    {
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function __destruct()
    {
        $this->conn->close();
    }




    function adminLogin($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return [
                'status' => true,
                'login' => true
            ];
        } else {
            return [
                'status' => true,
                'login' => false,
                'message' => "Problem in db class"
            ];
        }
    }
}
