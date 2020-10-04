<?php
    $dsn = 'mysql:host=localhost;dbname=belviso';
    $username = 'root';
    $password = '';

    try{
        $conn = new PDO($dsn,$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $ex){
        echo 'Doslo je do greske prilikom konektovanja sa bazom ' . $ex->getMessage();
    }

?>