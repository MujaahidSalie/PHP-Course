<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<form method="GET">
    <div style="margin-top: 25px; margin-right:70em;">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">First and last name</span>
            </div>
            <input type="text" aria-label="First name" class="form-control" name="name">
            <input type="text" aria-label="Last name" class="form-control" name="surname">
        </div>
        <div style="margin-top: 10px">
            <button class="btn btn-primary">Submit</button>
        </div>

    </div>
</form>

<ul>
    <li>
        <a href="index.php"> </a>
    </li>
</ul>

<br>
<br>


  


<?php
//Include php file - link
include 'index.php';
//comments
$name = $_GET['name'];
$surname = $_GET['surname'];
echo "<br>";
echo $name." ".$surname." is a handsome fellow! ";
echo "<br>";
echo "<br>";



echo "There are ";
//this is counting each letter in the brackets
echo strlen("Hi Daniel");
echo " letters in this string";
echo "<br>";
echo "<br>";


echo "There are ";
//this is counting each word in the brackets
echo str_word_count("Hi Daniel");
echo " words in this string";
echo "<br>";
echo "<br>";

echo "This will Reverse The Letters";
//This will Reverse The Letters
echo strrev("Hi Daniel");
echo "<br>";
echo "<br>";


echo "This will count word using array which will be ";
//This count word works like a array starting from 0
echo strpos("Hi Daniel","D");
echo "<br>";
echo "<br>";


echo "Replace Daniel to - ";
//this searches for a string and replaces with new string
echo str_replace("Daniel","Jason","Hi Daniel");
echo "<br>";
echo "<br>";

//Array - in php you use the word array than the brackets down below is an example
$names = array("Daniel","Dennis","Michael");
echo $names["0"];
echo "<br>";
echo "<br>";

//Comparison Operators
// = meaning - it is equal to it
// == meaning - checks if $x equal to $y - regardless of datatype
// != meaning - checks if they not equal to each other
// === meaning - checks if both is equal to each other and checks if both has same data type
// <  meaning - less
// > meaning - greater
// >= meaning - checks if it is greater than $x > $y , and checks if its equal to it
// !== meaning - check if not equal to each other and not same data type
// <> meaning - checks if not equal to each other
$x = 5;
$y = 10;
if ($x != $y)
{
    echo "True!";
}
else
{
    echo "False!";
}
echo "<br>";
echo "<br>";

//Increment/Decrement Operators
// ++ means increment one
$x = 10;
//placing the ++ before will add one
//placing the ++ after will display first the number than add the number
echo ++$x;
echo "<br>";
echo "<br>";

//Arithmetic Operators//
// * means multiply
// - subtract
// + Add
// % means Mod
// ** means square root
echo 5%5;
echo 5**5;
echo "<br>";
echo "<br>";

//Assignment Operators
//bad code
$x = 100;
$x = $x + 20;
echo $x;
echo "<br>";
echo "<br>";

//Good code
$x = 100;
$x +=  20;
echo $x;
echo "<br>";
echo "<br>";

//Logical Operators
// or - checks if two operators are equal to each other
// and - both operators has to be true
// || -  works same as "or"
// && - works same as "and"
// xor - one operator needs to true both cant be true
$x = 10;
$y = 20;
if ( $x == $y and 1 == 1 )
{
    echo "true";
}
echo "<br>";
echo "<br>";

//If statements
//if statements are commonly used when you have to make small decision
$x = 1;
if ( $x == 1)
{
    echo "Daniel is very handsome";
}
//"elseif" statement works the same as the "if" statement
elseif ($x == 2)
{
    echo "Daniel is kinda handsome";
}
elseif ($x == 3)
{
    echo "Daniel is kinda handsome";
}
elseif ($x == 4)
{
    echo "Daniel is kinda handsome";
}
else
    {
    echo "Daniel is very ugly!";
}
echo "<br>";
echo "<br>";



//Switch Statements
$x = 4;

switch ($x) {
    case 1:
        echo "The answer is 1";
        break;
    case 2:
        echo "The answer is 2";
        break;
    case 3:
        echo "The answer is 3";
        break;
    case 4:
        echo "The answer is 4";
        break;
        //default checks if there's a answer and will echo "There is no answer"
    default:
        echo "There is no answer";
}
echo "<br>";
echo "<br>";

//Basic Calculator
//"isset" - if this has been set already - refers to if the user clicked on the button
if (isset($_GET['submit']))
{
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch($operator)
    {
        case "None":
            echo"You need to select a method";
            break;
        case "Add":
            echo  $result1 + $result2;
            break;
        case "Subtract":
            echo $result1 - $result2;
            break;
        case "Multiply":
            echo $result1 * $result2;
            break;
        case "Divide":
            echo $result1 / $result2;
            break;
    }
}
echo "<br>";
echo "<br>";

//Scheduled messaging in programming
//w3schools date parameters: https://www.w3schools.com/php/func_date_date.asp
$dayofweek = date("w");

switch($dayofweek)
{
    case 1:
echo "It is Monday!";
    break;
    case 2:
        echo "It is Tuesday!";
        break;
    case 3:
    echo "It is Wednesday!";
    break;
    case 4:
        echo "It is Thursday";
        break;
    case 5:
        echo "It is Friday!";
        break;
    case 6:
        echo "It is Saturday!";
        break;
    case 0:
        echo "It is Sunday!";
        break;
}
echo "<br>";
echo "<br>";





//Loops
//While loop
//Do while loop
//for loop
//foreach loop

//While loop
//A while loop prints out whatever is in curly brackets infinity times
echo "<h2>While loop</h2>";
$x = 1;
while ($x <= 5)
{
    echo "'$x' is less 5";
    $x++;
}
echo "<br>";
echo "<br>";

//Do while Loop
//The "do" will always printout "'$x' is less 5"... even though "while" could be true or false
echo "<h2>Do While loop</h2>";

$x = 1;
do {
    echo "'$x' is less 5";
    $x++;
}
while ($x <= 5);
echo "<br>";
echo "<br>";

//For loop
//in a for loop the first parameter is called initialize counter, Second parameter tell us when to stop loop, and third parameter just means increment by 1
echo "<h2>For loop</h2>";
for ($x = 0; $x < 10; $x++) {
    echo "hi '$x' so much times<br>";
}
echo "<br>";
echo "<br>";

//Foreach loop
//an foreach loops through all the data of the array, you need to initialize a variable to the array and print it out.... down below is an example
echo "<h2>Foreach loop</h2>";
$array = array("Daniel","Jane","Jacob");
foreach ($array as $loopdata)
{
 echo "My name is ".$loopdata;
 echo "<br>";
}
echo "<br>";
echo "<br>";

//Arrays Example
$array1 = array("Daniel","Jane","Jacob","John","Mariane");
echo $array1[2];
//which will echo out Jane

//Functions
//You can always declare variables inside the function which is best practice
//A function with no parameters is the best function
//Since we declared a variable global we need to put the $X variable in the function brackets
Function newCalc ($x)
{
    $newnr = $x * 0.75;
    echo"Here is 75% of what you wrote: ".$newnr;
}

$x = 100;
//newCalc($x);
//A function is almost like a variable but you need to call the function variable and pass the parameters in brackets
//I have set variable $a in the function bracket below and now the function above will read parameter as variable $a
// the out put will now display as such: "Here is 75% of what you wrote: 7.5 " and not 75% because the function now recognize the parameter as variable $a
newCalc($a);
echo "<br>";
$a = 10;
echo "<br>";
echo "<br>";
//Global and local SCOPE
//Global Scope
$xc = 5;
function something()
{
    //Local Scope
    $y = 10;
    echo $y;
}
echo $xc;

echo "<br>";
echo "<br>";
//Super Global
/*
 * $GLOBALS
 * $_POST
 * $_GET
 * &_COOKIE
 * $_SESSION
 */

$xj = 5;
function somethings()
{
    //Local Scope
    $jy = 10;
    echo $jy;
    //super global
   echo $GLOBALS['xj'];
}
somethings();
echo $xj;
echo "<br>";
echo "<br>";


echo $_POST['name'];
echo "<br>";
echo "<br>";


// &_COOKIE -  an cookie saves information when the user has closed the web browser after certain period of time
setcookie("name", "Daniel",time() + 89400);
// $_SESSION - its mostly used in sign in forms on a website to ensure that user is always signed in the session
$_SESSION['name'] = "12";
echo "<br>";
echo "<br>";













?>

<!-- A method tells our submit button what to do with the information-->
<!-- GET method shows the information in the URL-->
<!-- POST method Does not show the information in the URL-->
<!-- Example below -->
<!-- GET http://localhost/phplessons/Phplesson.php?name=value -->
<!-- POST http://localhost/phplessons/ -->
<form method="POST">
    <label><input type="hidden" name="name" value="Daniel"></label>
    <button type="submit">PRESS ME!</button>
</form>

<br>
<br>
<form method="GET">
    <div style="margin-top: 25px; margin-right:70em;">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num1" placeholder="Number 2">
        <select name="operator">
            <option >None</option>
            <option >Add</option>
            <option >Subtract</option>
            <option >Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <br>
        <button name="Submit" value="submit" type="submit">Calculate</button>
        <br>
        <p>The Answer is:  </p>
    </div>
</form>
</body>
</html>