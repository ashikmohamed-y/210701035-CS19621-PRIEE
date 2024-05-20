<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanjore Paintings</title>
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
        .product-list {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }
        .product {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            text-align: center;
            width: 200px;
        }
        .product img {
            max-width: 100%;
        }
        .buy-button {
            background-color: orange;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        .buy-button:hover {
            background-color: darkorange;
        }
        

    </style>
</head>
<body>

<header>
    <h1>Tanjore Paintings Store</h1>
</header>
<main>
    <div class="product-list">
        <div class="product">
            <img src="uploaded_img/tanjore1.jpg" alt="Tanjore Painting 1">
            <h3>Peacock tanjore painting</h3>
            <p>15000.00</p>
            <form action="payment.php" method="post">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Peacock tanjore painting">
                <input type="hidden" name="product_price" value="15000.00">
                <button type="submit" class="buy-button">Buy</button>
            </form>
        </div>
        <div class="product">
            <img src="uploaded_img/tanjore2.jpg" alt="Tanjore Painting 2">
            <h3>Lady in gold tanjore painting</h3>
            <p>17000.00</p>
            <form action="payment.php" method="post">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Tanjore Painting 2">
                <input type="hidden" name="product_price" value="17000.00">
                <button type="submit" class="buy-button">Buy</button>
            </form>
        </div>
        <div class="product">
            <img src="uploaded_img/tanjore3.jpeg" alt="Tanjore Painting 3">
            <h3>Modern tanjore art</h3>
            <p>12000.00</p>
            <form action="payment.php" method="post">
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Tanjore Painting 3">
                <input type="hidden" name="product_price" value="12000.00">
                <button type="submit" class="buy-button">Buy</button>
            </form>
        </div>
        
    </div>
</main>
</body>
</html>
