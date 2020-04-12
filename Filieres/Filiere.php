<?php
include_once './config/DB.php';


class Filiere extends DB
{

    //Getters
    public static function getAll()
    {
        $conn = new DB();
        try {
            $elements = array();
            $stmt = $conn->connect()->prepare("SELECT * from filieres");
            $stmt->execute();

            while ($element = $stmt->fetch()) {
                array_push($elements, $element);
            }
            return $elements;

        } catch (PDOException $e) {
            echo "Error In Select: " . $e->getMessage();
        } finally {
            $conn->disconnect();
        }
    }
}
