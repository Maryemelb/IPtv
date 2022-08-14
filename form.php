<?php

$pdo = new PDO("mysql:host=localhost;dbname=iptv","root","");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 echo "<br>";

$pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
try {

    $sql= "INSERT INTO order3month(id,full_name,country,phone,email,device,credit_number) 
         VALUES (:full_name,:country ,:phone,:email,:device,:credit_number)";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(':full_name', $_REQUEST['full_name']);
    $stmt->bindParam(':country', $_REQUEST['country']);

    $stmt->bindParam(':phone', $_REQUEST['phone']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':device', $_REQUEST['device']);
    $stmt->bindParam(':credit_number', $_REQUEST['credit_number']);

    $stmt->execute();
    
 
 }catch(PDOException $e) {
   die ("error:".$e->getMessage());
 }
 unset($pdo);
 
 
?>