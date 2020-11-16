<?php
		
		
            
            $product = $_POST['q1'];
            $shipping = $_POST['q2'];
            $user = $_POST['name'];
			$pass = $_POST['pass'];
			$costofPro = 0;
			
            
			$orderCost = 0;
            
			if ($product == "A") { $orderCost += 29.99; }
			if ($product == "B") { $orderCost += 39.99; }
			if ($product == "C") { $orderCost += 49.99; }

			$costofPro = $orderCost;

			
			if ($shipping == "B") { $orderCost += 5.00; }
			if ($shipping == "C") { $orderCost += 50.00; }

			$costofShip = ($orderCost - $costofPro);

            
            echo "<h1> Your order is on the way! </h1>";
			echo "<h5>Order Email: $user</h5>";
			echo "<br>Order Summary:";
			echo "<h5>Antivirus Subscription: $costofPro</h5>";
			echo "<h5>Shipping: $costofShip</h5>";
			echo "<h3>Total amount USD: $orderCost<h3>";
			echo "<br> Thanks for shopping with us!";
					
			
            
?>
