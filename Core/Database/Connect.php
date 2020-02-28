<?php

// to call this class from any other class or file we will type Core/connect

namespace Controllers;

use PDO;

class Connect
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    /**
     * Connect constructor.
     *
     * connecting to mySQL data base with
     * juniortest
     * Scandiweb
     */
    protected function connect()
    { // "$this" excatly when func is called to these variables will
        //assigned
        $this->servername = "localhost";
        $this->username = "root"; //adminuser
        $this->password = ""; // we've got no password to db
        $this->dbname = "mytodo";

        $pdo = new PDO("mysql:dbname=" . $this->dbname . ";host=" . $this->servername, $this->username, $this->password);
        return $pdo;

        //integrated function in PHpStorm

    }
}


// we are not closing php tag because here is only php code
