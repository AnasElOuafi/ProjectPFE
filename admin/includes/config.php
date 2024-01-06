<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class DatabaseController
{
    private $link;
    // Create construct for connexion to database
    public function __construct()
    {
        // Create $link and make it globel to be used in all class
        global $link;
        // Check whether the connection $link is established
        if (is_null($link)) {
            // Set connection parameters
            $server = 'localhost';
            $login = 'root';
            $password = '';
            $database = 'securisat';
            // Establish connection
            try {
                $this->link = new mysqli($server, $login, $password, $database);
                $this->link->set_charset("utf8");
            } catch (mysqli_sql_exception $e) {
                echo 'Problem de connexion--> ' . $e;
            }
        }
    }
    // Connection
    public function getConnectionDB()
    {
        // Connect to database
        return $this->link;
    }
}
?>