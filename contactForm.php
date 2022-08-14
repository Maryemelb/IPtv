<?php
    $pdo = new PDO("mysql:host=localhost;dbname=iptv","root","");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     echo "<br>";
 
    $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    try {
  
        $sql= "INSERT INTO messages(full_name,GSM,email,message) 
             VALUES (:full_name,:GSM ,:email,:message)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':full_name', $_REQUEST['full_name']);
        $stmt->bindParam(':GSM', $_REQUEST['GSM']);

        $stmt->bindParam(':email', $_REQUEST['email']);
        $stmt->bindParam(':message', $_REQUEST['message']);
        $stmt->execute();
        
     
     }catch(PDOException $e) {
       die ("error:".$e->getMessage());
     }
     unset($pdo);
     
     
?>