<?php

$storeName = $_POST['storeName'];
$address = $_POST['address'];
$cityID = $_POST['cityID'];
$phone = $_POST['phone'];
$manager = $_POST['manager'];

//Step 1 - connect to the DB

PDO('mysql:host=aws.computerstudi.es;dbname=gc200357701','gc200357701', '20VCRJu0Fn');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // turn on the error handling


$sql = "INSERT INTO stores (storeName, address,cityID , phone, manager) 
            VALUES (:storeName, :address,:cityID , :phone, :manager)";
//Step 3 - prep the command and bind the parameters to avoid SQL injection
$cmd = $conn->prepare($sql);
$cmd->bindParam(':storeName', $storeName, PDO::PARAM_STR, 100);
$cmd->bindParam(':address', $address, PDO::PARAM_STR, 100);
$cmd->bindParam(':cityID', $cityID, PDO::PARAM_INT);
$cmd->bindParam(':phone', $phone, PDO::PARAM_INT, 15);
$cmd->bindParam(':manager', $manager, PDO::PARAM_INT, 100);
$cmd->execute();

$conn = null;


?>