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
if (isset($_POST['tran'])) { 
  require "tran_process.php"; 
  echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your Transaction Id</div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
 
<!-- (B) ORDER FORM -->
<form id="orderform" method="post" target="_self">
  <h1>Payment Form</h1>
  <p> <b>Bkash</b> 017000000</p>
  <label for="tran">Transaction:</label>
  <input type="text" name="tran" required value=""/> 
  <label for="tel">Telephone:</label>
  <input type="text" name="tel" required value="+880"/> 
  
  <input type="submit" value="Submit"/>
</form>
</body>
</html>