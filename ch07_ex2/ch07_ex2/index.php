<?php
/*
Name: Veronique Fick
Date: 10/20/2022
URL of File: https://chelan.highline.edu/~Veronique/116/ch07_ex2/
Desc: Created drop down lists for the Future value calculator
Chelan Link: https://chelan.highline.edu/~Veronique/116/
*/
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = '10000'; } 
    if (!isset($interest_rate)) { $interest_rate = '5'; } 
    if (!isset($years)) { $years = '5'; } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <select name="investment">
                   <?php for ($num = 10000; $num <= 50000; $num += 5000) : ?>
                        <option value="<?php echo $num; ?>" >
                            <?php echo $num; ?>
                        </option>
            <?php endfor; ?>
                   </select><br>


            <label>Yearly Interest Rate:</label>
            <select name="interest_rate">
                    <?php for ($num = 4; $num <= 12; $num += .5) : ?>
                        <option value="<?php echo $num; ?>" ><?php echo $num; ?>
                        </option>
            <?php endfor; ?>
                   </select><br>

            <label>Number of Years:</label>
            <input type="text" name="years" value="<?php echo $years; ?>"><br>
                   
        </div>
        <label>Compound Interest Monthly:</label>
        <input type="checkbox" name="compund_interest" value="1"><br>
                     

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

        <footer>
        <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fchelan.highline.edu%2F~Veronique%2F116%2Fch07_ex2%2F" target="blank">Validate</a>
        <a href="https://chelan.highline.edu/~Veronique/116/">Return to Index Page</a>
        </footer>

    </form>
    </main>
</body>
</html>