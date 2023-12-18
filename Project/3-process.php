<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE
// CHANGE DATABASE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "order_details";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "1234";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare(
      "INSERT INTO `orders` (`name`, `address`, `tel`, `notes`) VALUES (?,?,?,?)"
    );
    $stmt->execute([
      $_POST['name'], $_POST['address'], $_POST['tel'], $_POST['notes']
    ]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// (D) SEND ORDER VIA EMAIL
