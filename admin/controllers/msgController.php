<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class MessageController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    
    
    // Read method
    public function read()
    {
        // Create table to store the rows from database
        $table = array();
        // Start requet sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `contact`");
        // Store the rows in $table and send it to use
        while ($result = mysqli_fetch_array($query)) {$table[] = $result;}
        return $table;
    }
    // Read method
    public function getMailById($id)
    {
        // Start requet sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `contact` WHERE `id` = '{$id}'");
        $result = mysqli_fetch_assoc($query);
        if ($result) {return $result;} else {return false;}
    }
    // Update method
    public function marqueCommeLu($id)
    {        
        // Start request SQL to update
        $query = mysqli_query($this->db, "UPDATE `contact` SET `etat`=1 WHERE `id`='$id'");
        // Test on $query if it ran successfully or not to return the right boolean value
        if ($query) {return true;} else {return false;}
    }
    
     // Delete method
   public function delete($id)
   {
       // Start requet sql to delete studient by Id
       $query = mysqli_query($this->db, "DELETE FROM `contact` WHERE `id`='$id'");
       // Test on $query if it is run success or not to return the right boolean value
       if ($query) {return true;} else {return false;}
   }
   // Create method
   public function sendMail($name, $email, $object, $message)
   {
       // addslashes is a method to clean the text written by the user
       $name = addslashes($name);
       $object = addslashes($object);
       $message = addslashes($message);
       $date = date("Y-m-d à H:i:s");
       // Start request SQL to create a service
       $query = mysqli_query($this->db, "INSERT INTO `contact`(`name`, `object`, `email`, `message`, `date`, `etat`) VALUES ('$name', '$object', '$email', '$message', '$date', 0)");
       // Test on $query if it ran successfully or not to return the right boolean value
       if ($query) {return true;} else {return false;}
   }
}
