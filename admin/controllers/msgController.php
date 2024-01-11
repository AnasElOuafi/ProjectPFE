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

     // Create method
     public function create($userID, $username, $email, $password,$comment)
     {
         // addslashes is a method to clean the text written by the user
         $userID = addslashes($userID);
         $username = addslashes($username);
         // Start request SQL to create a service
         $query = mysqli_query($this->db, "INSERT INTO `comment` (`userID`, `username`, `email`, `password`, `comment`) VALUES ('$userID', '$username', '$email', '$password', '$comment')");
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
         $query = mysqli_query($this->db, "SELECT * FROM `comment`");
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
          $query = mysqli_query($this->db, "UPDATE `comment` SET `username `='$username ', `email`='$email', `password`='$password', `comment`='$comment' WHERE `id`='$userID '");
          
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
         $query = mysqli_query($this->db, "DELETE FROM `comment` WHERE `id`='$userID'");
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
         $query = mysqli_query($this->db, "SELECT * FROM `comment`");
         // Start requet sql to count rows of $query
         $nombre = mysqli_num_rows($query);
         // Return nomber of rows
         return $nombre;
     }
    
}
?>