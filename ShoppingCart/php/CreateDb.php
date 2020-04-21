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

        
    }
}