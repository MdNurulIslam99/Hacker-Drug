<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <?php
// (A) PROCESS ORDER FORM
if (isset($_POST['name'])) { 
  require "3-process.php"; 
  echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your order</div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
 
<!-- (B) ORDER FORM -->
<form id="orderform" method="post" target="_self">
  <h1>Order Form</h1>
  <label for="name">Name:</label>
  <input type="text" name="name" required value=""/> 
  <label for="address">Address:</label>
  <input type="text" name="address" required value=""/> 
  <label for="tel">Telephone:</label>
  <input type="text" name="tel" required value="+880"/> 
  <label for="notes">Additional Notes (if any):</label>
  <textarea name="notes"></textarea>
  <input type="submit" value="Place Order"/>
  <p>Please Pay<a href="transaction.php">Click here</a></p>
</form>
</body>
</html>