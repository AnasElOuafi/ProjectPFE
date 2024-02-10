<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class BlogController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Read method
    public function read()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `blog`");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }

    // Read method
    public function getServiceById($id)
    {
        $query = mysqli_query($this->db, "SELECT * FROM `blog` WHERE `id` = '{$id}'");
        $result = mysqli_fetch_assoc($query);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    // Update method
    public function update($titre, $equipements, $description, $date, $id)
    {
        $titre = addslashes($titre);
        $equipements = addslashes($equipements);
        $description = addslashes($description);
        $query = mysqli_query($this->db, "UPDATE `blog` SET `titre`='{$titre}',`equipements`='{$equipements}',`description`='{$description}',`date`='{$date}' WHERE `id` = '{$id}'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // Delete method
    public function delete($id)
    {
        $query = mysqli_query($this->db, "DELETE FROM `blog` WHERE `id`='$id'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // Create method
    public function create($titre, $equipements, $description, $date)
    {
        $titre = addslashes($titre);
        $equipements = addslashes($equipements);
        $description = addslashes($description);
        $query = mysqli_query($this->db, "INSERT INTO `blog`(`titre`, `equipements`, `description`, `date`) VALUES ('{$titre}', '{$equipements}', '{$description}', '{$date}')");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}