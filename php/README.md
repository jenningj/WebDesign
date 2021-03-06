# PHP Overview

php is a pre processor for htper text. 
Its a server side language.

When using php it not showen as code its displayed as regular document object

Can mix html and php

## Introduction and Installation

Downlaod XAMPP (at least php version 7)
When downloaded Extract to C Drive

Run xampp.
> Localhost
- Http local host
- php info

Open XAMPP open htdocs and create php folder and add in php files here.



## Creating first PHP File

Example below is how html and php can be mixed and also can be used to check that XAMPP is running and interpreting both HTML and php script.

```
<H3>Hello World<H3>

<?php echo "test" ?>
```

php runs from top to bottom. 


### Syntax

For all php code need to define it as 

```
<?php       

?>
```

All Variables start with a $
Every line ends with a ;
Everything is function based not dot notation. 

```
<?php

    $var = '';
    split("name");

?>
```


### Variables
Always start with a $
Do not use a number or special character

Ideallly use underscore, upper / lower case letters.

Set variable value with an equals sign = 

    ```
    <?php 
    
        $name = "Jenny";
        $age = 23;
    ?>
    ```
Note: variables can be over written

    ```
    <?php 
    
        $name = "Jenny";
        $age = 23;

        $name = "Ian";
    ?>
    ```

### Echo / Print

Two methogs Print or Echo. 

Echo is more common
can use . to concatenate.

    ```
    <?php 
    
        $name = "Jenny";
        $age = 23;

        echo $name;
        echo $age;

        $sentance = $name. "is my name";

        echo $sentance;

        echo "My Name is " $name;
    ?>
    ```

<br>

### Code Comments
Can add code comments using // 
Use this to take notes.

Single line comment can start with // or # 


/* Multi line comment */
<br>

### Quotes Vs Apostrophes

Can use either " or '. 

If you want to use variable inside sentatce need to use quotes " (magic Quotes)

    ```
    <?php
        $name = "Jenny";

        
        // To print $name not using the variable would be 
        
        echo 'Hello my name is $name' 

        echo "Hello my name is $name" . " my age is " . $age

    ?>
    ```
<br>

### Data Types

**String:** uses quotes / apostrophes

**Integer / Int:** is a whole number

**Float / Decimal:** is a number with a decimal

**Boolean / Bool:** is either true or false

**Array** is a list of variable

    ```
    <?php
        // string
        $name = "Jenny";
        
        // int
        $age = 32;
        
        // float
        $age_exact = 23.3;
        
        // boolean
        $bool_t = 1; // true (any number not zero is true)
        $bool_f = 0; // false

        // array
        $array = ["name","age","counrty"];

        $array = ["name", 32, 54.3, true];

    ?>
    ```

<br>


### Constraints

A variable that can never change. 

define('__NAME__','Jenny');

    ```
    <?php

        $var = "me";
        echo $var;

        $var = "Jenny";
        echo $var;

        define('__NAME__','Jenny Falvey');

        echo __NAME__;

        // Will 
        __NAME__ = 'Jenny Jennings';

        define('__NAME__','Ian Flemming');
        
    ?>
    ```
<br>

### Arrays

Can be deinded either using bracket notation [ ] or array().
Arrays start at 0.

Can loop though an array (list).

    ```
    <?php 
        $array = ["Jenny",22,"2 puppies"]
        echo $array;
        // view page source / inspector on browser.
        
        print_r($array);    
    ?>
    ```

Can also use and associative array, replaces index with a value eg
    ```
    <?php 
        $array = [
            "name" => "Jenny";
            "age" => 21;
            "pets" => "2 puppies"
        ];

        print_r($array);

        echo $array['name];
        echo $array['age];

    ?>
    ```

<br>

### Loops 

Four Types of loops
1. For Loop
2. While Loop
3. For Each Loop
4. Do While .. 

```
<?php
    $jenny = [
        "name" => "Jenny Falvey",
        "age" => 30,
        "pets" => "3 dogs"
        "website" => "jenny.j@me.com"
    ]

    // For Loop
    for($i = 0; i < 10; i++){
        echo "Line: $i <br/>";
    }


    for($i = 0; i < 10; i++){
        if($i == 5){
            echo "This is line 5";
        }
        echo "Line: $i <br/>";
    }

    // While Loop
    $num = 0;
    while($num < 10){
        echo "Line $num <br />";
        $num++; // Needs to always increment this $num !!!!
    }

    // For Each Loop (Loop though an array)

    foreach($jenny as $key => $val){
        echo "$key. $val <br/>";
    }

    foreach($jenny as$val){
        echo "$val <br/>";
    }

?>
```
<br>

### Multidimensional Arrays

An array within an array. 
```
<?phph

$jenny = [
        "name" => "Jenny Falvey",
        "age" => 30,
        "pets" => "3 dogs"
        "website" => "jenny.j@me.com"
    ]

$damien = [
        "name" => "Damien Falvey",
        "age" => 31,
        "pets" => "1 dog"
        "website" => "damien.falvey@me.com"
    ]

$people = [$jenny, $damien];

foreach($people as $person){
    echo $person['name'];
}



?>
```

<br>

### Conditional IF Statments


=== is the strict comparison same value and data type. Must be an exact match.
== would mean that 35 is the same as "35"

```
<?php

$jenny = [
        "name" => "Jenny Falvey",
        "age" => 30,
        "pets" => "3 dogs"
        "website" => "jenny.j@me.com"
    ]

$damien = [
        "name" => "Damien Falvey",
        "age" => 28,
        "pets" => "1 dog"
        "website" => "damien.falvey@me.com"
    ]

$people = [$jenny, $damien];

foreach($people as $person){
    echo $person['name'];
    if($person['age'] > 30){
        echo "is 30 or over";
    }
}
?>
```


<br>

### IF Else Statments

```
<?php

$jenny = [
        "name" => "Jenny Falvey",
        "age" => 30,
        "pets" => "3 dogs"
        "website" => "jenny.j@me.com"
    ]

$damien = [
        "name" => "Damien Falvey",
        "age" => 28,
        "pets" => "1 dog"
        "website" => "damien.falvey@me.com"
    ]

$people = [$jenny, $damien];

foreach($people as $person){
    echo $person['name'];
    if($person['age'] > 30){
        echo "is 30 or over";
    } else {
        echo "is less then 30";
    }
    echo "<hr />"
}
?>
```

<br>

### Comparison Operators

Comparison for Boolean operators:

```
if($something != true){
    //
}

if($something != true){

}

if($something == true){

}

if(!$something){
    // Do if something is not true
}
```

<br>

### Switch Statments
Much faster then an if else.

```

switch($name){
    case 'jenny':
        echo "Hey jenny";
        break;
    case 'damien':
        echo "Welcome back";
        break;
    case 'max':
    case 'holly:
        echo "your a dog";
        break;
    default:
        echo "Hi Random Person";
        break;
}
```
<br>

### Functions

Example 1 - Simple Function
```

    function welcome($name){
        echo "Hello $name <br />";
    }

    welcome("Jenny");
    welcome("Ian");
    welcome("Holly");

    for($i=0;i<5;i++){
        welcome(i);
    }
```

Example 2 - Default Variables
```

    function welcome($name = 'Jenny', 
                        $age = 30,
                        $sport= 'fencing'){
        echo "Hello $name your age is $age and you like $sport <br />";
    }

    welcome("Ian", 34, 'Reading');

    welcome();

    welcome($name = 'Holly', $age = 24, $sport = 'Reading');
```
Example 2 - Return Function
```

    function welcome($name = 'Jenny', 
                        $age = 30,
                        $sport= 'fencing'){
        return "Hello $name your age is $age and you like $sport <br />";
    }

    $sentance = welcome("Ian", 34, 'Reading');

   echo "before";
    echo $sentance;
   echo "after";
```

** Better to RETURN from a function NOT to ECHO from a function. 

<br>

### Super Global Variables

GET Variable starts with a ? 

In URL: index/?name=jenny&age=23
eg: 

```

    print_r($_GET);
    exit;
    $name = $_GET['name'];
    $age = $GET_['age'];

    echo "$name is $name and age is $age."

```

POST VARIABLE

<br>

### Forms

A form usually has methods :GET or POST

GET
```
    <form method ="GET">
        <label for="name"> </label>
        <input type="text" name = name>

        <br />
        <label for="age"> </label>
        <input type="number" name = age>
        <br />
        <button type = "submit"> Submit </button>
    </form>

    <?php 
    if(isset($_GET['name'])){
        echo $_GET['name'] . " is ". $_GET['age']. " years old.";
    }
    
    ?>
```

POST  (hides parameters) is more secure then GET as it passes through URL.
```
    <form method ="POST">
        <label for="name"> </label>
        <input type="text" name = name>

        <br />
        <label for="age"> </label>
        <input type="number" name = age>
        <br />
        <button type = "submit"> Submit </button>
    </form>

    <?php 
    if(isset($_POST['name'])){
        echo $_POST['name'] . " is ". $_POST['age']. " years old.";
    }
    
    ?>
```

If unsure if its a get or post then can use _REQUEST['name'].
<br>

### POST 

<br>



