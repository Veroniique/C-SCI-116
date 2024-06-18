<!--
    Name: Veronique Fick
    Date created: 23 November 2022
    URL of File: https://chelan.highline.edu/~Veronique/116/finalProject/form.php/
    Description: Nik's Final Project on Pokémon
    Chelan Link: https://chelan.highline.edu/~Veronique/116/
-->
<?php
    //default values for page load so data is kept when error occurs
    if (!isset($name)) {$name = '';}
    if(!isset($p_name)) {$p_name = '';}
    if(!isset($p_types)) {$p_types = '';} 
    if (!isset($attack)) {$attack = '';}
    if (!isset($hp)) {$hp = '';}
    if (!isset($cp)) {$cp = '';}
    if (!isset($description)) {$description = '';} 
    if (!isset($evolution)) {$evolution = '';} 
    if (!isset($measurement)) {$measurement = '';}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pokémon Fans</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
<body>
    <!--Main heading + project introduction -->
    <h1>Pokémons Fans</h1>
        <hr>

<h2>Introduction</h2>
    <p> 
        <b>Hello Trainer!</b><br><br>
        Welcome to our website designed for Pokémon lovers across all regions. First up we have a Pokémon calendar that uses a switch statement to display a Pokémon for each month. 
        The next section displays top 10 powerful Pokémons with a for loop. 
        For the 3rd section I created a Pokémon series list that's displayed through a foreach loop. 
        <br><br>
        In the form you can create your own Pokémon. I used an array and foreach loop to create a drop down list in my form for the "types" of Pokémon.
        Near the bottom of the form I used an if statement with basic math to do conversions from Pikas to Inches or vice versa. 
        To scale: 1 Pika = 0.5 inches and 1 inch = 2 Pikas. There's more things inside the code once it's read. The form has validation on all inputs. 
        Combat Power needs to be 4000 or less and Hit Points needs to be 500 or less. The Pika measurement can only take inputs 250 or less. 
        Making a description for your Pokémon is optional.<br><br>
            
        We will make sure your data stays safe from Team Rocket!
    </p>

<h2>Favorite Monthly Pokémon</h2>
<?php
//Table heading
    echo "<table><thead><tr><td><b>Month of Year</b></td> <td><b>Pokémon Name</b></td></tr></thead><tbody>";

    //Pokémon calendar function
        function pokeCalendar($poke) {
            //switch statement that executes month and Pokémon name
                switch($poke) {
                    case 1:
                        echo "<tr><td>January</td>   <td>Jigglypuff</td></tr>";
                        break;
                     case 2:
                        echo "<tr><td>February</td>   <td>Foongus</td></tr>";
                        break;
                     case 3:
                        echo "<tr><td>March</td>   <td>Magikarp</td></tr>";
                        break;
                     case 4:
                        echo "<tr><td>April</td>   <td>Abra</td></tr>";
                        break;
                     case 5:
                        echo "<tr><td>May</td>   <td>Magnetom</td></tr>";
                        break;
                     case 6:
                        echo "<tr><td>June</td>   <td>Jynx</td></tr>";
                        break;
                     case 7:
                        echo "<tr><td>July</td>   <td>Jolteon</td></tr>";
                        break;
                     case 8:
                        echo "<tr><td>August</td>   <td>Aerodactyl</td></tr>";
                        break;
                     case 9:
                        echo "<tr><td>September</td>   <td>Steelix</td></tr>";
                        break;
                     case 10:
                        echo "<tr><td>October</td>   <td>Oddish</td></tr>";
                        break;
                     case 11:
                        echo "<tr><td>November</td>   <td>Nidoqueen</td></tr>";
                        break;
                     case 12:
                        echo "<tr><td>December</td>   <td>Dugtrio</td></tr>";
                        break;
                        //switch stops executing
                     }}
        
        //Pokémon calendar by month
        pokeCalendar(1);
        pokeCalendar(2);
        pokeCalendar(3);
        pokeCalendar(4);
        pokeCalendar(5);
        pokeCalendar(6);
        pokeCalendar(7);
        pokeCalendar(8);
        pokeCalendar(9);
        pokeCalendar(10);
        pokeCalendar(11);
        pokeCalendar(12);
                     
            //Table ends here 
                echo "</tbody></table>";  
                echo '<br>';
     
    //Array for most powerful Pokémons
    $powerful = array('Mewtwo','Ho-Oh','Arceus','Charizard','Giratina','Lugia','Zekrom','Yveltal','Reshiram','Solgaleo');
    ?>

        <h2>Top 10 powerful Pokémon</h2><br>
        <?php
            //for loop printing the pokemons array
            for ($i = 0; $i < count($powerful); $i++) {
                echo($powerful[$i]) . "<br>";
            }                

    //Array for series names
    $series = array('Indigo League','Adventures in the Orange Islands','The Johto Journeys','Master Quest','Diamond and Pearl','XYZ','Sun and Moon','Black and White');
    ?>

        <h2>Pokémon series list</h2>
        <?php
        //foreach loop printing series list
        foreach ($series as $list) {
            echo $list . "<br>" ;
        }       
        ?>

<!--FORM that requires user input-->
<h2>Create your own Pokémon</h2>
    <h4><i>Enter your Pokémon details and click Submit</i></h4>
        <?php

   // Error message for empty inputs
    if (!empty($error_message)) { ?>
        <p class="error"><?php
            echo "ERROR: " .htmlspecialchars($error_message);
    } 
    ?> 
    <br><p>

<!--Form results display in the welcome.php file after button is clicked-->
    <div class="userdata">
        <form action="results.php" method="post">
            <input type="hidden" name="action" value="process_data">

<!--User inputs in form will go here-->
<label>Your Name:</label>
    <input type="text" name="name" 
        value="<?php echo htmlspecialchars($name); ?>"><br><br>

<label>Pokémon Name:</label>
    <input type="text" name="p_name"
        value="<?php echo htmlspecialchars($p_name); ?>"><br><br>

<!--Drop down list for type selection that includes an array that works with a foreach loop-->
<label>Choose your type:</label>
    <select name="p_type">
        <?php
          $p_types = array('Normal', 'Fire', 'Water', 'Grass', 'Electric', 'Ice', 'Fighting', 'Poison', 'Ground', 'Flying', 'Psychic', 'Bug', 'Rock', 'Ghost', 'Dark', 'Dragon', 'Steel', 'Fairy');
          foreach($p_types as $types) {
              echo "<option value =".strtolower($types).">$types</option>";
          }  
        ?>
    </select>
    <br><br>

<!--More user input-->
<label>Attack:</label> 
    <input type="text" name="attack"
        value="<?php echo htmlspecialchars($attack); ?>"><br><br>

<!--HP with number input only-->
<label>Hit Points:</label> 
    <input type="number" name="hp"
        value="<?php echo htmlspecialchars($hp); ?>"><br><br>

<!--CP with number input only-->
<label>Combat Power:</label>
    <input type="number" name="cp"
        value="<?php echo htmlspecialchars($cp); ?>"><br><br>

<!--Textarea to describe Pokémon wtih a 100 character limit-->
<label>Description:</label>
    <textarea name="description" rows="3" maxlength="100"></textarea><br><br>

<!--Evolution with radio button selection-->
<label>Evolution:</label><br>
    <?php if(isset($_POST['evolution'])) ?>
    <input type="radio" name="evolution" value="1st" checked>1st evolution
    <input type="radio" name="evolution" value ="2nd">2nd evolution
    <input type="radio" name="evolution" value="3rd">3rd evolution
<br><br>

<!--Pika Measurement Converter-->
<label>Measurement Converter:</label> <br>
<?php if(isset($_POST['units'])) ?>
    <input type="number" name="measurement"
        value="<?php echo htmlspecialchars($measurement); ?>">
    <input type="radio" name="units" value="p" checked>Pikas
    <input type="radio" name="units" value="f">Inches <br><br>

<!--Pokémon creation button-->
<?php if(isset($_POST['submit'])) ?>
    <input type="submit" value="Create New Pokémon">
</form>    
</div>
<br><br>
    <footer>
        <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fchelan.highline.edu%2F~Veronique%2F116%2FfinalProject%2Findex.php" target="_blank">Validation</a><br>
        <a href="https://chelan.highline.edu/~Veronique/116/">Return to Index</a>
    </footer>
</body>
</html>