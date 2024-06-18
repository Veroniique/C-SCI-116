<?php
/*
Name: Veronique Fick
Date: 10/20/2022
URL of File: https://chelan.highline.edu/~Veronique/116/ch07_ex2/
Desc: Created drop down lists for the Future value calculator
Chelan Link: https://chelan.highline.edu/~Veronique/116/
*/
    // get the data from the form

    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
    $compound_interest = filter_input(INPUT_POST, 'compound_interest', 
            FILTER_VALIDATE_INT);

    // validate investment
    if ($investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; 
    // validate interest rate
    } else if ( $interest_rate === FALSE )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; 
    // validate years
    } else if ( $years === FALSE ) {
        $error_message = 'Years must be a valid whole number.';
    } else if ( $years <= 0 ) {
        $error_message = 'Years must be greater than zero.';
    } else if ( $years > 30 ) {
        $error_message = 'Years must be less than 31.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; 
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value += $future_value * $interest_rate *.01;
    }

    // currency formatting
    $investment_f = '$'.number_format($investment, 2);
    $future_value_f = '$'.number_format($future_value, 2);

    // percent formatting

    function perFormat ($yearly_rate_f, $interest_rate) {
     return $yearly_rate_f = $interest_rate.'%';
    }


?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>
        

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>

        <?php 
            if ($compound_interest != 1) {
                echo "Calculated yearly"; 
             } else {
                        echo "Calculated monthly";
                    }
            ?>


        <footer>
        <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fchelan.highline.edu%2F~Veronique%2F116%2Fch07_ex2%2F" target="blank">Validate</a>
        <a href="https://chelan.highline.edu/~Veronique/116/">Return to Index Page</a>
        </footer>

    </main>
</body>
</html>