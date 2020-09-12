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
    ?>
    ```

<br>

### Code Comments
Can add code comments using // 
Use this to take notes.

single line comment can start with // or # 


/* Multi line comment */
<br>

### Quotes Vs Apostrophes

Can use either " or '. 

If you want to use variable inside sentatce need to use " (magic Quotes)

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

Can be deinded either using [] or array().
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
1. 
2.
3.
4.  do 


<br>

### Multidimensional Arrays

<br>

### Conditional IF Statments

<br>

### IF Else Statments

<br>

### Comparison Operators

<br>

### Switch Statments

<br>

### Functions

<br>

### Super Global Variables

<br>

### Forms

<br>

### POST 

<br>



