

<!DOCTYPE html>

<html>
    <head>
    <title>Username Generator</title>
    <style>
        @import url("css/styles.css");
        .error {color: #FF0000;}
    </style>
    <?php

    ?>
    </head>
    
    <body>
        
        <header>
            <h1> Username Generator </h1>
            <h2> Having trouble finding a username? </h2>
            <h3> Fill out the required fields below to generate a variety of unique usernames.</h3>
        </header>
        
    </body>
    <form id = "name" action = "index.php" method = "POST">
      First name:<br>
      <input type="text" name="firstname" placeholder = "First" value="<?=$_GET['firstname']?>"/><br>
      Last name:<br>
      <input type="text" name="lastname" placeholder = "Last" value="<?=$_GET['lastname']?>"/>
   
    </br>
      How many usernames do you want generated?</br>
      <input type="number" name="quantity" placeholder = "Number">
      
      </br>
     
      Enter username maximum length: </br>
      <input type="number" name="username" placeholder = "Number">
      
      </br>
      <select name="shapes">
      <option value = "">Select One Shape</option>
      <option value="circle">Circle</option>
      <option value="square">Square</option>
      <option value="triangle">Triangle</option>
      <option value="heart">Heart</option>
      <option value="diamond">Diamond</option>
      
        </select>
       
   
       </br> 
      <select name="colors">
      <option value = "">Select One Color</option>
      <option value="red">Red</option>
      <option value="blue">Blue</option>
      <option value="green">green</option>
      <option value="black">Black</option>
      <option value="pink">Pink</option>
      <option value="purple">Purple</option>
      <option value="white">White</option>
      <option value="yellow">Yellow</option>
      <option value="orange">Orange</option>
      <option value="grey">Grey</option>
      <option value="brown">Brown</option>
      
        </select>
        
    
   </br>
      Select a gender: </br>
      <input type="radio" name="gender" value="male" checked> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
    </br>
    Select your birthday(MM/DD):
       <select name="month">
      <option value = "">Select One Month</option>
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
      
        </select>
       
   </br>
        <input type ="submit" value = "Submit"/>
    </form>
    
</html>

<?php
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['shapes']) && isset($_POST['quantity']) && isset($_POST['colors']) && isset($_POST['gender']) && isset($_POST['month']) && isset($_POST['username']))
    {
        $firstname = $_POST['firstname'];
        
        $lastname = $_POST['lastname'];
        
        $shapes = $_POST['shapes'];
        
        $quantity = $_POST['quantity'];
        
        $colors = $_POST['colors'];
        
        $gender = $_POST['gender'];
        
        $month = $_POST['month'];
        
        $ulength = $_POST['username'];
        
        
        $words = array($firstname, $lastname, $shapes, $colors, $gender, $month);
        
        echo "<div id = 'd1'>";
        echo "Possible Usernames: ";
        echo "</br>";
        echo "Maximum length of: ";
        echo $ulength;
        echo "</br>";
        
        for($i = 0; $i < $quantity; $i++)
        {
            do{
                $w1 = rand(0,count($words));
                $w2 = rand(0,count($words));
            }while($w1 == $w2);
            
            $num1 = rand(1,$ulength/2);
            $num2 = $ulength-$num1;
            
            echo "</br>";
            echo "Username ";
            echo $i+1;
            echo "</br>";
            
            echo "\t\t\t";
            for($p1 = 0; $p1 < $num1; $p1++)
            {
                echo $words[$w1][$p1];
            }
            for($p2 = 0; $p2 < $num2; $p2++)
            {
                echo $words[$w2][$p2];
            }
            
        }
    }
    
    echo "</div>";
    
?>