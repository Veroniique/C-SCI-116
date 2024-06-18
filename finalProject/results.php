<!DOCTYPE html>
<html lang="en">
    <!--
    Name: Veronique Fick
    Date created: 23 November 2022
    URL of File: https://chelan.highline.edu/~Veronique/116/finalProject/form.php/
    Description: Nik's Final Project on Pokémon
    Chelan Link: https://chelan.highline.edu/~Veronique/116/
-->
<head>
        <title>Pokémon Fans</title>
        <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <?php
     //List of variables
        $name = $p_name = $p_types = $attack = $hp = $cp = $description = $evolution = '';        

//Function to check user input data
function test_input($user_data) {
    $user_data = trim($user_data);
        return $user_data;
}

//checker to see if input was added into the form
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $p_name = test_input($_POST["p_name"]);
    $p_types = test_input($_POST["p_type"]);
    $attack = test_input($_POST["attack"]);
    $hp = test_input($_POST["hp"]);
    $cp = test_input($_POST["cp"]);
    $description = test_input($_POST["description"]);
    $evolution = test_input($_POST["evolution"]);
    $measurement = test_input($_POST["measurement"]);
 }

//Validation for form data
//Name validation
if (empty($name)) {
    $error_message = "Enter your name";
    //Pokémon name validation
    } else if (empty($p_name)) {
        $error_message = "Enter a name for your Pokémon";
        //Type validation
        } else if (empty($p_types)) {
            $error_message = "Choose your Pokémon type";
            //Type validation
            } else if (empty($attack)) {
                $error_message = "Enter an attack for your Pokémon";
                //Hit Points validation
                } else if (empty($hp)) {
                    $error_message = "HP must be a valid number";
                } else if ($hp <= 0) {
                    $error_message = "HP must be greater than zero";
                } else if ($hp > 500) {
                    $error_message = "HP must be 500 or less";
                    //Combat Power validation
                        } else if (empty($cp)) {
                            $error_message = "CP must be a valid number";
                        } else if ($cp <= 0) {
                            $error_message = "CP must be greater than zero";
                        } else if ($cp > 4000) {
                            $error_message = "CP must be 4000 or less";
                        //Measurement converter validation
                            } else if (empty($measurement)) {
                                $error_message = "Measurement must be a valid number";
                            } else if ($measurement <=0) {
                                $error_message = "Measurement must be greater than zero";
                            } else if ($measurement > 250) {
                                $error_message = "Measurement must be 250 or less";
                            } else {
                                $error_message = '';
                            }

//Link to form.php when error occurs 
if ($error_message != '') {
    include('index.php');
        exit();
} ?>

<!--Output that executes when form is submitted-->
Welcome, <b><?php echo ucwords($_POST["name"]); ?></b>!<br><br>

Thank you for entering your Pokémon details. <br>
Here are your results: <br><br>

Pokémon name: <i><b><?php echo ucwords($_POST["p_name"]); ?></b></i> <br>
Type: <i><b><?php echo ucwords($_POST["p_type"]); ?></b></i> <br>
Evolution: <i><b><?php echo $_POST["evolution"]; ?></b></i> Evolution
    <br><br>

Attack: <i><b><?php echo ucwords($_POST["attack"]); ?></b></i> <br>
Hit Points: <i><b><?php echo $_POST["hp"]; ?></b></i> HP<br>
Combat Power: <i><b><?php echo $_POST["cp"]; ?></b></i> CP
    <br><br>

Description: <i><b><?php echo ucwords($_POST["description"]); ?></b></i> <br>

Pika converter results: 
<?php
//Pika measurement converter with basic math
{
//variables
    $measurement = $_POST['measurement'];
    $units = $_POST['units'];

//basic math to calculate conversions
if($units == "p")
{
    $result = $measurement / 2;
    echo "$measurement Pikas = " .$result . " Inches";
}
else
{
    $result = $measurement * 2;
    echo "$measurement Inches = " .$result . " Pikas";
}
} ?> <br><br>
See you at the Trainer Battles!
<br><br>
    <footer>
        <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fchelan.highline.edu%2F~Veronique%2F116%2FfinalProject%2Findex.php" target="_blank">Validation</a><br>
        <a href="https://chelan.highline.edu/~Veronique/116/">Return to Index</a>
    </footer>
</body>
</html>