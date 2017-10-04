<?php
$password = $_POST["passWord"];
$userName = $_POST["userName"];
$shirtNum = $_POST["shirtNum"];
$sweatNum = $_POST["sweatNum"];
$hatNum = $_POST["hatNum"];
$shipping = $_POST["shipping"];
$sub1 = $shirtNum * 10;
$sub2 = $sweatNum * 20;
$sub3 = $hatNum * 5;

  echo "<p> Hello ". $userName . " your password:". $password . "</p><br>";



  if ($shipping == "3-day"){ 
    $shipPrice = 5;
    $total = $sub1 + $sub2 + $sub3 + $shipPrice;
  }
  else if ($shipping == "overnight"){
    $shipPrice = 50;
    $total = $sub1 + $sub2 + $sub3 + $shipPrice;
  }
  else{
    $shipPriice = "FREE!";
    $total = $sub1 + $sub2 + $sub3;
  }

echo"<p>This is your recipt</p><br>";
echo "<p>T-shirt - Count: ". $shirtNum. " | Price per item: $10 | SubTotal: ". $sub1 . "</p>";
echo "<p>Sweatshirt - Count: ". $sweatNum. " | Price per item: $20 | SubTotal: ". $sub2 . "</p>";
echo "<p>Hat - Count: ". $hatNum. " | Price per item: $5 | SubTotal: ". $sub3 . "</p>";
echo "<p>Shipping - Type: ". $shipping . " Price: " . $shipPrice . "</p>";
echo "<p>Grand Total: ". $total ."</p></br>";






 ?>
