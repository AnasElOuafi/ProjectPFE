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
    // Read method
    public function read()
    {
        // Create table to store the rows from database
        $table = array();
        // Start requet sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `comment`");
        // Store the rows in $table and send it to use
        while ($result = mysqli_fetch_array($query)) {$table[] = $result;}
        return $table;
    }


     // Count method
     public function count()
     {
         // Start SQL query to get count from the database
         $query = mysqli_query($this->db, "SELECT COUNT(*) as count FROM `comment`");
         
         // Fetch the count value
         $result = mysqli_fetch_assoc($query);
     
         // Return the count
         return $result['count'];
     }
    

    // Read method
    public function getTemoiById($userID)
    {
        // Start requet sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `comment` WHERE `userID` = '{$userID }'");
        $result = mysqli_fetch_assoc($query);
        if ($result) {return $result;} else {return false;}
    }
    // Update method
    public function update($username, $email, $comment, $userID)
    {        
        // addslashes is a method to clean the text written by the user
        $username = addslashes($username);
        $email = addslashes($email);
        // Start request SQL to update
        $query = mysqli_query($this->db, "UPDATE `comment` SET `username`='{$username}',`email`='{$email}', `comment`='{$comment}' WHERE `userID` = '{$userID}'");
        // Test on $query if it ran successfully or not to return the right boolean value
        if ($query) {return true;} else {return false;}
    }
    
     // Delete method
   public function delete($userID)
   {
       // Start requet sql to delete studient by Id
       $query = mysqli_query($this->db, "DELETE FROM `comment` WHERE `userID`='$userID'");
       // Test on $query if it is run success or not to return the right boolean value
       if ($query) {return true;} else {return false;}
   }
   // Create method
   public function create($username, $email, $comment)
   {
       // addslashes is a method to clean the text written by the user
       $username = addslashes($username);
       $email = addslashes($email);
       // Start request SQL to create a service
       $query = mysqli_query($this->db, "INSERT INTO `comment`(`username`, `email`, `comment`) VALUES ('{$username}', '{$email}', '{$comment}')");
       // Test on $query if it ran successfully or not to return the right boolean value
       if ($query) {return true;} else {return false;}
   }


   public function sendCmt($username, $email, $comment)
   {
       // addslashes is a method to clean the text written by the user
       $username = addslashes($username);
       $comment = addslashes($comment);
       // Start request SQL to create a service
       $query = mysqli_query($this->db, "INSERT INTO `comment`(`username`, `email`, `comment`) VALUES ('$username', '$email', '$comment')");
       // Test on $query if it ran successfully or not to return the right boolean value
       if ($query) {return true;} else {return false;}
   }

}
