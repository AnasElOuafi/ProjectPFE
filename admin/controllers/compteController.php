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
    // Create method
    public function create($icon, $name, $description)
    {
        // addslashes is a method to clean the text written by the user
        $name = addslashes($name);
        $description = addslashes($description);
        // Start request SQL to create a service
        $query = mysqli_query($this->db, "INSERT INTO `services` (`icon`, `name`, `description`) VALUES ('$icon', '$name', '$description')");
        // Test on $query if it ran successfully or not to return the right boolean value
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    // Read method
    public function read()
    {
        // Create table to store the rows from database
        $table = array();
        // Start requet sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `services`");
        // Store the rows in $table and send it to use
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
     // Update method
     public function update($icon, $name, $description, $id)
     {
         // addslashes is a method to clean the text written by the user
         $name = addslashes($name);
         $description = addslashes($description);
         
         // Start request SQL to update service by Id
         $query = mysqli_query($this->db, "UPDATE `services` SET `icon`='$icon', `name`='$name', `description`='$description' WHERE `id`='$id'");
         
         // Test on $query if it ran successfully or not to return the right boolean value
         if ($query) {
             return true;
         } else {
             return false;
         }
     }
     
      // Delete method
    public function delete($id)
    {
        // Start requet sql to delete studient by Id
        $query = mysqli_query($this->db, "DELETE FROM `services` WHERE `id`='$id'");
        // Test on $query if it is run success or not to return the right boolean value
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function getCountInscription()
    {
        // Start requet sql to get rows in table inscription
        $query = mysqli_query($this->db, "SELECT * FROM `services`");
        // Start requet sql to count rows of $query
        $nombre = mysqli_num_rows($query);
        // Return nomber of rows
        return $nombre;
    }
}
?>