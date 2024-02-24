<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class CommentController
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
        $query = mysqli_query($this->db, "SELECT * FROM `temoingnages`");
        // Store the rows in $table and send it to use
        while ($result = mysqli_fetch_array($query)) {$table[] = $result;}
        return $table;
    }
    // Read method
    public function getTemoiById($id)
    {
        // Start requet sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `temoingnages` WHERE `userID` = '{$id}'");
        $result = mysqli_fetch_assoc($query);
        if ($result) {return $result;} else {return false;}
    }
    // Update method
    public function update($name, $review, $avatar, $date, $id)
    {        
        // addslashes is a method to clean the text written by the user
        $name = addslashes($name);
        $review = addslashes($review);
        // Start request SQL to update
        $query = mysqli_query($this->db, "UPDATE `temoingnages` SET `name`='{$name}',`review`='{$review}',`avatar`='{$avatar}', `date`='{$date}' WHERE `id` = '{$id}'");
        // Test on $query if it ran successfully or not to return the right boolean value
        if ($query) {return true;} else {return false;}
    }
    
     // Delete method
   public function delete($id)
   {
       // Start requet sql to delete studient by Id
       $query = mysqli_query($this->db, "DELETE FROM `temoingnages` WHERE `id`='$id'");
       // Test on $query if it is run success or not to return the right boolean value
       if ($query) {return true;} else {return false;}
   }
   // Create method
   public function create($name, $review, $avatar, $date)
   {
       // addslashes is a method to clean the text written by the user
       $name = addslashes($name);
       $review = addslashes($review);
       // Start request SQL to create a service
       $query = mysqli_query($this->db, "INSERT INTO `temoingnages`(`name`, `review`, `avatar`, `date`) VALUES ('{$name}', '{$review}', '{$avatar}', '{$date}')");
       // Test on $query if it ran successfully or not to return the right boolean value
       if ($query) {return true;} else {return false;}
   }
}
