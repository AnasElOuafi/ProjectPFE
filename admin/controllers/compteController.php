<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class CompteController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    // Compte Connection
    public function getConnect($email, $password)
    {
        $query = mysqli_query($this->db, "SELECT * FROM `users` WHERE `email` ='{$email}' AND `password` ='{$password}'");
        $result = mysqli_fetch_assoc($query);
        if ($query) {
            return $result;
        } else {
            return false;
        }
    }
    // Compte Infos
    public function getById($id)
    {
        $query = mysqli_query($this->db, "SELECT * FROM `users` WHERE `id` ='{$id}'");
        $result = mysqli_fetch_assoc($query);
        if ($query) {
            return $result;
        } else {
            return false;
        }
    }

    public function connectUser($id, $name, $email, $GroupID, $date)
    {
        $query = mysqli_query($this->db, "SELECT * FROM `users` WHERE `id` = '{$id}', `name` = '{$name}', `email` ='{$email}', `GroupID` = '{$GroupID}', `date` = '{$date}' AND `password` ='{$password}'");
        $result = mysqli_fetch_assoc($query);
        if ($query) {
            return $result;
        } else {
            return false;
        }

    }
}
?>