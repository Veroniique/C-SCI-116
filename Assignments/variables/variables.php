<!-- 
    Date: 10/14/2022
    Name: Veronique Fick
    Chelan Link: https://chelan.highline.edu/~Veronique/116/
    File Link: https://chelan.highline.edu/~veronique/116/variables/variables.php
-->
<html>
    <title>Variables</title>
<body>
<?php
$name = "Veronique Fick";
    echo "Name: $name<br>";

    $favoritePlace = 'Alki';
        echo "Favorite Place: $favoritePlace<br>";

        $distance = 16;
            echo "Distance: $distance<br>";

            $price = 52.50;
                echo "Price: $price<br>";

                $taxRate = 9.3;
                    echo "Tax Rate: $price<br>";

    $totalPrice = "$price + $price * $taxRate<br>";
        echo "Total Price: $totalPrice";

            $a = "True";
            $b = "False";
            $likeSchool = $a < $b;
                echo "Like School: $likeSchool<br>";
    
            $BornInKingCounty = FALSE;
                echo "Born In KingCounty: $BornInKingCounty<br>";

                $earthPopulation = '7.753 billion';
                    echo "Earth Population: $earthPopulation<br>";

    $nanometer = 3.93701e-8;
        echo "Nanometer Size: $nanometer<br>";

            $virus = 20;
                echo "Virus Size: $virus<br>";

                $virusinches = $nanometer * $virus;
                    echo "Virus to Inches: $virusinches<br>";

 ?> 
 <br />
 <a href="https://chelan.highline.edu/~Veronique/116/">Return to index page</a>                
</body>
</html>