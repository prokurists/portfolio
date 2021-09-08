<?php

class DBdata
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

    function addReview($email, $review)
    {
        $email = $this->test_input($email);
        $review = $this->test_input($review);

        $sql = "
        INSERT INTO reviews (email, review)
        VALUES ('$email', '$review')";

        if ($this->conn->query($sql) === TRUE) {
            return [
                'status' => true
            ];
        } else {
            return [
                'status' => false,
                'message' => "Problem in db class"
            ];
        }
    }


    function addMessage($email, $text)
    {
        $email = $this->test_input($email);
        $text = $this->test_input($text);
        $sql = "
        INSERT INTO contacts (email, text)
        VALUES ('$email', '$text')";

        if ($this->conn->query($sql) === TRUE) {
            return [
                'status' => true
            ];
        } else {
            return [
                'status' => false,
                'message' => "Problem in db class"
            ];
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
