<?php
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Tanjore Paintings</title>
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
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkorange;
        }
    </style>
</head>
<body>
<header>
    <h1>Payment</h1>
</header>
<main>
    <div class="container">
        <h2>Product: <?php echo htmlspecialchars($product_name); ?></h2>
        <h3>Price: <?php echo htmlspecialchars($product_price); ?></h3>
        <form action="confirmation.php" method="post">
            <div class="form-group">
                <label for="address">Enter your address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="pin">Enter your Pincode:</label>
                <input type="text" id="pin" name="pin" required>
            </div>
            <div class="form-group">
                <label for="email">Enter your Email address:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Enter your phone number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">
            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>">
            <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>">
            <input type="submit" value="Confirm Order">
        </form>
    </div>
</main>
</body>
</html>
