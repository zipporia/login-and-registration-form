<?php

class CreateDb{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;


    // class constructor

    public function_constructor(

        $dbname="Newdb",
        $tablename="Productdb",
        $servername="localhost",
        $username="root",
        $password=""
    )

    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection

        $this->con = mysqli_connect($servername, $username, $password);

        // check connection
        if(!$this->con){
            die("Connection failed:".mysqli_connect());
        }

        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);
        
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                    (id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY
                    product_name VARCHAR(25)NOT NULL,
                    product_price FLOAT,
                    product_image VARCHAR(100)
                    );";
        
        }

    }
}