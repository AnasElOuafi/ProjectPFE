<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class PackController
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
        // Start request sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `packs`");
        // Store the rows in $table and send it to use
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    // Read method
    public function getPackById($id)
    {
        // Start request sql to get rows from database
        $query = mysqli_query($this->db, "SELECT * FROM `packs` WHERE `id` = '{$id}'");
        $result = mysqli_fetch_assoc($query);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    // Update method
    public function update($titre, $prix, $period, $line1, $line2, $line3, $line4, $line5, $id)
    {
        // addslashes is a method to clean the text written by the user
        $titre = addslashes($titre);
        $prix = addslashes($prix);
        // Start request SQL to update
        $query = mysqli_query($this->db, "UPDATE `packs` SET `titre`='$titre',`prix`='$prix',`line1`='$line1', `line2`='$line2', `line3`='$line3', `line4`='$line4', `line5`='$line5', `period`='$period' WHERE `id` = '$id'");
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
        // Start request sql to delete studient by Id
        $query = mysqli_query($this->db, "DELETE FROM `packs` WHERE `id`='$id'");
        // Test on $query if it is run success or not to return the right boolean value
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    // Create method
    public function create($titre, $prix, $period, $line1, $line2, $line3, $line4, $line5)
    {
        // addslashes is a method to clean the text written by the user
        $titre = addslashes($titre);
        $prix = addslashes($prix);
        // Start request SQL to create a service
        $query = mysqli_query($this->db, "INSERT INTO `packs`(`titre`, `prix`, `period`, `line1`, `line2`, `line3`, `line4`, `line5`) VALUES ('$titre', '$prix', '$period', '$line1', '$line2', '$line3', '$line4', '$line5')");
        // Test on $query if it ran successfully or not to return the right boolean value
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
