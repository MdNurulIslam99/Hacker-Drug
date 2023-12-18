<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      } 
}
}
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
   
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="style1.css" />


    
    <title>Drag</title>
  </head>

  <body>
  <section class="mycart">
  <div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?> 
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr> 
<?php 
foreach ($_SESSION["shopping_cart"] as $products){
?>
<tr>
<td>
<img src='<?php echo $products["image"]; ?>' width="50" height="40" />
</td>
<td><?php echo $products["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $products["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $products["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">
<option <?php if($products["quantity"]==1) echo "selected";?>
value="1">1</option>
<option <?php if($products["quantity"]==2) echo "selected";?>
value="2">2</option>
<option <?php if($products["quantity"]==3) echo "selected";?>
value="3">3</option>
<option <?php if($products["quantity"]==4) echo "selected";?>
value="4">4</option>
<option <?php if($products["quantity"]==5) echo "selected";?>
value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$products["price"]; ?></td>
<td><?php echo "$".$products["price"]*$products["quantity"]; ?></td>
</tr>
<?php
$total_price += ($products["price"]*$products["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table> 
<div class="ord-btn">
  <button><a href="order.php">Order Now</a> </button>
</div>

  <?php
}else{
 echo "<h3>Your cart is empty!</h3>";
 }
?>
</div>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
  </section>
  </body>