<?php
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$address = $_POST['address'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        .notification {
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            display: inline-block;
            margin-top: 20px;
        }
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: flex;
        }
        .back-button:hover {
            background-color: darkorange;
        }
    </style>
</head>
<body>
<header>
    <h1>Order Confirmation</h1>
</header>
<a href="store.php" class="back-button">Back to Store</a>
<main>
    <div class="container">
        <h2>Thank you for your purchase!</h2>
        <div class="notification">
            <p>Product: <?php echo htmlspecialchars($product_name); ?></p>
            <p>Price: <?php echo htmlspecialchars($product_price); ?></p>
            <p>Shipping Address: <?php echo htmlspecialchars($address); ?></p>
            <p>Order Confirmed!</p>
        </div>
        
    </div>
</main>
</body>
</html>
