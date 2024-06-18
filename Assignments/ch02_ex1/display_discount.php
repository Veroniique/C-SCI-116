<!--
    Name: Veronique Fick
    Date: 10/14/2022
    URL to Chelan:  https://chelan.highline.edu/~Veronique/116/
    URL to Display Discount Calculator: https://chelan.highline.edu/~Veronique/116/ch02_ex1/
    Desc: Working with PHP to create a discount calculator. 
-->
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <?php
            $product_description = filter_input(INPUT_POST, 'product_description');
            $list_price = filter_input(INPUT_POST, 'list_price');
            $discount_percent = filter_Input(INPUT_POST, 'discount_percent');

                $discount = $list_price * $discount_percent * .01;
                $discount_price = $list_price - $discount;

                    $list_price_f = "$".number_format($list_price, 2);
                    $discount_percent_f = $discount_percent."%";
                    $discount_f ="$".number_format($discount, 2);
                    $discount_price_f="$".number_format($discount_price, 2);
        ?>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    </main>
</body>
</html>