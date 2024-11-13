<?php
session_start();

require_once(__DIR__."/../config/Directories.php");
include("..\config/DatabaseConnect.php");
    $db = new DatabaseConnect();
    $conn = $db->connectDB();

    
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $productId= $_POST["id"];

    
    try {

        $sql  = "DELETE FROM products WHERE products.id = :p_id"; //select statement here
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':p_id', $productId);
        $stmt->execute();

        $_SESSION["success"] = "product has been deleted";
        header("location:" .BASE_URL. "views/admin/products/index.php");
        exit;

    } catch (PDOException $e){
       echo "Connection Failed: " . $e->getMessage();
       $db = null;
    }

}

    