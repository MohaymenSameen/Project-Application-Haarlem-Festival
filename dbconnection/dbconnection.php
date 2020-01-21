<?php
class Database
{
    //IS IT OK FOR THEM TO BE PUBLIC?

    //Declaring Variables       
    private $dbServername;
    private $dbUsername;
    private $dbPassword;
    private $dbName;

    //connection to the database
    public function connect()
    {
        $this->dbServername = "localhost";
        $this->dbUsername = "root";
        $this->dbPassword = "";
        $this->dbName = "hfitteam6_enhaarlemfestival";
        $conn = new mysqli($this->dbServername,$this->dbUsername,$this->dbPassword,$this->dbName);        
        return $conn;
    }

    //mysqli real escape string function to prevent sqli injection into the database
    public function escape_string($value)
    {
        return $this->connect()->real_escape_string($value);
    }        
}
