<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Using String Functions</h1>
    <p>
        The total number of letter in "Mathematics" is 
        <?php
        echo strlen("Mathematics"); //returns total number of letters
        ?>
    </p>
    <p>
        The word "Mathematics is split by 2 letters and " - " is added between the splitted parts : 
        <?php
        echo chunk_split("Mathematics",2,"-"); 
        ?>
    </p>
    <p>
        Revering the word "Mathematics" : 
        <?php
        echo strrev("Mathematics");
        ?>
    </p>
    <p>
        Converting String from lowercase into Uppercase and vice-versa : 
        <?php
        $string=" mathematics ";
        echo $string." , ";
        echo strtoupper($string)." , ";
        echo strtolower($string);
        ?>
    </p>
    <h1>Using Array Functions</h1>
    <p>
        Sorting Array in descending order using <strong>arsort function</strong>: <br/>
        <?php
        $record=array("Ram"=>"23","Shyam"=>"30","Hari"=>"40");
        arsort($record);
        foreach ($record as $x => $x_value) {
            echo "Name = ".$x." , Age = ".$x_value;
            echo "<br/>";
        }
        ?>
    </p>
    <p>
        Sorting Array in ascending order using <strong>asort function</strong> : <br/>
        <?php
        $record=array("Ram"=>"23","Shyam"=>"30","Hari"=>"40");
        asort($record);
        foreach ($record as $x => $x_value) {
            echo "Name = ".$x." , Age = ".$x_value;
            echo "<br/>";
        }
        ?>
    </p>
    <p>
        Using <strong>count array function</strong>, we get the total number of the elements in the array as : 
        <?php 
        $record=array("Ram"=>"23","Shyam"=>"30","Hari"=>"40");
        echo count($record);
        ?>
    </p>


    

</body>
</html>