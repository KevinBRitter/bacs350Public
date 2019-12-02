<?php

// Connect to Bluehost database 
    function superheros_database() {
        try {
            $port = '3306';
            $dbname = 'layzqfmy_final_brain';
            $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
            $username = 'layzqfmy_350';
            $password = 'password_350';
            return new PDO($db_connect, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Add a new record
    function add_hero($db, $name, $alias, $image, $strengths, $weaknesses) {
        try {
            $query = "INSERT INTO superheros (name, alias, image, strengths, weaknesses) 
                      VALUES (:name, :alias, :image, :strengths, :weaknesses)";
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':alias', $alias);
            $statement->bindValue(':image', $image);
            $statement->bindValue(':strengths', $strengths);
            $statement->bindValue(':weaknesses', $weaknesses);
            $statement->execute();
            $statement->closeCursor();
            return true;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Delete record
    function delete_superhero($db, $id) {
        try {
            $query = "DELETE FROM superheros WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
            return true;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Lookup Record using ID
    function get_id($db, $id) {
        try {
            $query = "SELECT * FROM superheros WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $record = $statement->fetch();
            $statement->closeCursor();
            return $record;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Lookup Record using NAME
    function get_name($db, $name) {
        try {
            $query = "SELECT * FROM superheros WHERE name = :name";
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->execute();
            $record = $statement->fetch();
            $statement->closeCursor();
            return $record;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();    
        }
    }
 
    // Query for all subscribers
    function list_superheros ($db) {
        try {
            $query = "SELECT * FROM superheros";
            $statement = $db->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Create a database connection
    $db = superheros_database();

?>