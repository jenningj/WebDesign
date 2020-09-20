<h1>Hello World</h1>

<p>Code below is in php:</p>
<?php echo "test"; ?>


<p>Back End Language</p>
<p>Will not display php in the inspect, turns everything into text or html on the front end</p>
<p>PHP is server side language not same a js or html will not display in inspect </p>

<h3>PHP Variables: </h3>
<?php

    // Create some variables
    $name = 'Jenny';
    $age = 28;

    $sentance = $name. " is ". $age;

    # Output the variabels:
    echo $sentance. "<br />";
    echo "My name is ". $name . "<br />";

    // Constraints:
    define('__NAME__','Jenny Falvey');

    echo __NAME__;

?>

<h3>Arrays</h3>
<?php 
    $array = ["Jenny",22,"2 puppies"];
    // echo $array;
    // view page source / inspector on browser.
    
    print_r($array);  
    echo "<hr />";

    echo "<h4>Associative Arrays: </h4> ";
    echo "<br />";

    $array = [
        "name" => "Jennifer Falvey", 
        "email" => "Jenny.j@me.com",
        "age" => 28,
        "pets" => "2 puppies"
    ];
    // $array = [ 'name' => "Jenny", "age" => 21, "pets" => "2 puppies" ];
    
    print_r($array);  
    echo "<hr />";

    echo $array['name'] . " is my name " . " i have ". $array['pets'];
?>


<h3>Loops</h3>

<?php
    echo "<h4>FOR Loop </h4> <br />";
    // For Loop
    
    for($i = 0; $i < 10; $i++){
        echo "Line: $i <br/>";
    }

    echo "<br />For Loop with an IF Condition where i = 5<br />";


    for($i = 0; $i < 10; $i++){
        if($i == 5){
            echo "This is line 5";
            
        } echo "Line: $i <br/>";
    }

echo "<h4>While Loop </h4> <br />";

    // While Loop
    $num = 0;
    while($num < 10){
        echo "Line $num <br />";
        $num++; // Needs to always increment this $num !!!!
    }

echo "<h4>For Each Loop</h4> <br />";

    // For Each Loop (Loop though an array)

    foreach($array as $key => $val){
        echo "$key. $val <br/>";
    }
        echo "Output only the valeus without the array key: <br />" ;

    foreach($array as$val){
        echo "$val <br/>";
    }

echo "<h4>Do While Loop </h4> <br />";
?>




<h3>Multidimensional Arrays</h3>

<?php

$jenny = $array;
$damien = [
    "name" => "Damien Falvey",
    "age" => 31,
    "pets" => "1 dog",
    "email" => "damien.falvey@me.com"
];
$people = [$jenny, $damien];

print_r($people);

foreach($people as $person){
echo   $person['name'];
echo "<br />";
}
?>

<h3>Conditional Statments</h3>

<?php

echo "<h4>IF</h4>";
foreach($people as $person){
    echo "<br />";
    echo $person['name'];
    if($person['age'] > 30){
        echo "is 30 or over";
    }
}

echo "<h4>IF..ELSE</h4>";
foreach($people as $person){
    echo "<br />";
    echo $person['name'];
    if($person['age'] > 30){
        echo " is 30 or over";
    }else{
        echo " is under 30";
    }
}

echo "<h4>Switch</h4>";
foreach($people as $person){
    echo "<br />";

    $name = explode ( ' ' ,strtolower($person['name']),);

    // echo $name;

    switch( $name[0]){
        case 'jennifer':
            echo "Hey Jenny";
            break;
        case 'damien':
            echo "Welcome back, Damien";
            break;
        case 'max':
        case 'holly':
            echo "your a dog";
            break;
        default:
            echo "Hi Random Person";
            break;
    }


    
}
?>

<h3>Functions</h3>

<?php

echo "<h4>Simple Function with Default Variables</h4>";

function welcome($name = 'Jenny', 
                        $age = 30,
                        $sport= 'fencing'){
        echo "Hello $name your age is $age and you like $sport <br />";
    }

    welcome("Ian", 34, 'Reading');

    welcome();

    welcome($name = 'Holly', $age = 24, $sport = 'Reading');



echo "<h4>Return Function</h4>";

function welcome2($name = 'Jenny', 
                        $age = 30,
                        $sport= 'fencing')
    {
        return "Hello $name  your age is $age and you like $sport <br />";
    }

    $sentance = welcome2("Ian", 34, 'Reading');

   echo "<br />";
   echo "before";
   
   echo "<br />";
    echo $sentance;
   echo "<br />";

   echo "after";

   echo "<br />";
    echo  welcome2();
   echo "<br />";
?>

<h3>FORMS: GET and POST</h3>

<p>With a GET variable they can be passed in the URL after a ? and multiple parameters can be set using $array
    e.g.     http://localhost/?name=Jenny%20Falvey&age=23
<p>
<form method ="GET">
        <label for="name">Name:</label>
        <input type="text" name = name>

        <br />
        <label for="age">Age:</label>
        <input type="number" name = age>
        <br />
        <button type = "submit"> Submit </button>
    </form>

    <?php 
    if(isset($_GET['name'])){
        echo $_GET['name'] . " is ". $_GET['age']. " years old.";
    }
    
    ?>

<p>With a POST variable this is not displated in the URL, all parameters are hidden from the user. 
<p>
<form method ="POST">
        <label for="secret_name">Name:</label>
        <input type="text" name = secret_name>

        <br />
        <label for="secert_age">Age:</label>
        <input type="number" name = secert_age>
        <br />
        <button type = "submit"> Submit </button>
    </form>

    <?php 
    if(isset($_POST['secret_name'])){
        echo $_POST['secret_name'] . " is ". $_POST['secert_age']. " years old.";
    }
    
    ?>

<p>Post is like "sending" the data to the page without giving the user having any interaction with it, when Get shows the parameters in the URL and making it public for the user. 
    
<p>Get is more often used on "unsecure" type of datatransactions like for example a searchform and POST is used when you want to make more secure things like a login form.

<p>Using a Get will give you like index.php?parameter=hello&parameter2=world

<p>You can also use _REQUEST to get the parameters this will return the parameters regardless of if its is POST or GET.
</p>