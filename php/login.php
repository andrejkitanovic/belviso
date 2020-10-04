<?php
    if(isset($_POST['uloguj-se'])){
        $pogresanLogin = true;
        require_once 'connect.php';

        $username = $_POST['username'];
        $password = $_POST['sifra'];
    
        try{
            $sql = 'SELECT * FROM admin WHERE username = :username';
            $stm = $conn->prepare($sql);
            $stm->execute(array(':username' => $username));
    
            if($stm->rowCount() == 0){
                echo '<div class="alert alert-danger" role="alert">Uneli ste pogresan username!</div>';
            }else {
                while ($row = $stm->fetch()) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $hashPassword = $row['password'];
    
                    if (password_verify($password, $hashPassword)) {
                        $pogresanLogin = false;
                        $_SESSION['id'] = $id;
                        $_SESSION['username'] = $username;
                        header('location: index.html');
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Uneli ste pogresnu sifru!</div>';
                    }
                }
            }
        }catch (PDOException $ex){
            echo '<div class="alert alert-danger" role="alert">Doslo je do greske!</div>';
        }
    }
?>