<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class TemoiController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    
}
?>