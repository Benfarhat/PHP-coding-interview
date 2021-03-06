# PHP Interview Questions and Answers

## What  is PHP?

PHP is a web language based in scripts that allow developers to dynamically create generated web pages.
PHP is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML. 

## What do the initials of PHP stand for?

PHP is a recursive acronym which means PHP: Hypertext Preprocessor

## What is the old name of PHP

Personal home page

In 1994 PHP was a simple set of Common Gateway Interface (CGI) binaries writtent in the C programming language by Rasmus Lerdorf. Originally used for tracking visits to his online resume, he named the suite of scripts "Personal Home Page Tools', more frequently referenced as "PHP Tools".

Over Time, more functionality was desired, and Rasmus rewrote PHP Tools, reproducing a much larger and richer implementation. This new model was capable of database interaction and more, providing a framework upon which users could develop simple dynamoc web applications such as guestbooks.

## Explain the difference between static and dynamic websites?

In static websites, content can't be changed after running the script. You can't change anything in the site. Content is fixed (predefined) and each page is coded in plain HTML and CSS.

In dynamic websites, websites can create webpage dynamically after dealing with database and generate the contents dynamically using database queries. It's writtenusing server-side scipting languages such as PHP, ASP, JS, JSP, etc...

## Which programming language does PHP resemble?

PHP syntax resembles Perl and C.

## What are the popular Content Management System (CMS) using PHP?

- Wordpress
- Joomla
- Magento
- Drupal

## What does PEAR stand for?

PEAR means "PHP Extension and Application Repository". It extends PHP and provides a higher level of programming for web developers.

It's a repository of PHP software code founded in 1999 by Stig S. Bakken to promote the re-use of code that performs common functions. With Composer, another packages manager and an alternative for PEAR packages, some people of the PHP community argue to replacing PEAR in favor of composer (created by Nils dermann).

It also provides a command line interface (CLI) to install packages automatically.

## What does PECL stand for?

PECL, the PHP Extendion Community Library is conceptually very similar to PEAR, and indeed PECL modules are installed with the PEAR Package Manager. PECL contains C extensions for compiling int PHP. Originally it was called the PEAR Extension Code Library, but it nows operates independently of PEAR (since october 2003).

As C programs, PECL extensions run more efficiently than PEAR packages. PECL includes for XML-parsing, access to additional databases, mail-parsing, embedding Perl or Python scripts and for compiling PHP scripts.

Note that several extensions (like PDO, filter, json or XmlReader) began their development cycle in PECL and ended up in the core (the distributed PHP source) and in many of these cases the PECL versions become unmaintained.

## What is the actually used PHP version?

Version 7.1 is the recommended version of PHP (september 2018)

## How do you execute a PHP script from the command line?

Just use the PHP command line interface (CLI) and specify the file name of the script to be executed as follows:

```
php script.php
```

## How to run the interactive PHP shell from the command line interface?

Just use the PHP CLI program with the option -a as follows:

```
php -a
```

To quit, we just have to press CTRL+C, using a simple `exit` or `quit` command.

## What is the correct and the most common way to start and finish a PHP block of code?

the two most common ways to start and finish a PHP script are:

```
<?php
/* PHP Code */
?>
```


```
<?
/* PHP Code */
?>
```

`<?` and `?>` only work if PHP was configured with the `--enable-short-tags` option, or by setting to true the directive `short_open_tag` directive in php.ini (wich is by default already set to true)

Since PHP 7.0.0.0, the ASP tags `<%`, `%>`, `<%=`, and the script tag `<script language="php">` are removed from PHP

## How can we display the output directly to the browser?

```
<?= "Hello" ?>
```

## How can i display text with a PHP script

To be able to display the output directly to the browser we have to use one of the followings methods:

```
echo "hello the world";
```

```
print "hello the world";
```

```
echo <<<EOT
Hello
the
world
EOT;
```

## What is the difference between "echo" and "print" in PHP?

Echo and print are two a language construct not a function, so use of parentheses is not required.

otherwise, Echo can output one or more string, but print can only output one string and always return 1.

Echo is faster than print because it does not return any value.

## How can we display information of a variable and readable by a human with PHP?

To be able to display a human-readable result we use print_r().

We can also make it more beautiful by adding before a "pre" tag

```
print '<pre>' . PHP_EOL;
print_r $variable;
print '</pre>';
```

## What is PHP_EOL? 

It's a PHP predefined constants, available since PHP 5.0.2, which represents the correct "End Of Line" symbol. 

## What is the main difference between PHP 4 and PHP 5?

PHP 5 presents many additional OOP (Object Oriented Programming) features. In fact, starting with PHP 5, the object model was rewritten to allow for better performance and more features. This was the major cha,ge from PHP 4. PHP 5 has a full object model.

Among the features in PHP 5 are the inclusions of visibility, abstract and final classes and methods, additional magic methods, interfaces, cloning and typehinting.

Regarding the scripting engine, PHP 4 uses Zend Engine 1 while PHP 5 uses Zend Engine 2

## What about PHP 6?

PHP 6 (like IPV5 in network or MySQL 6), is the missing version of PHP. it can cause confusion or break away from the PHP versioning scheme, but we should understand that a lot a strong reasons which explain they skip version 6 into 7.

First and fremost, PHP 6 already existed and it was something completely different, and the original PHP 6 has been discussed in detail in many PHP conferences, articles and books, so PHP community members knews about the project. After a lot of debate (over 5 years of speculation), PHP 6 failed and never came back. It was an experimental project which never reached the production phase.

## What are the main difference between PHP 5 and PHP 7?

The mose easily recognizible advantage of the new PHPNG engine (using with PHP 7) is the significant performance improvement. By using PHP 7 not only your code will be executed faster but you will also need fewer servers to serve the same amount of users.

PHP 7 introduce also the spaceship operator (`($a<=>$b)===-1; // $a < $b`) runs under the official name of Combined Comparison Operator, and the Null Coalescing operator (`$username = $_GET['user'] ?? 'nobody';`). 

PHP 7 add anonymous classes and enhance the quality of code with the help of return type declarations (`function getIterator(): Iterator {/* */ }`) .

And finally, it facilitates imports from the same namespace

```
// Classic use syntax:
 
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion as Choice;
use Symfony\Component\Console\Question\ConfirmationQuestion;
 
// Group use syntax:
 
use Symfony\Component\Console\{
  Helper\Table,
  Input\ArrayInput,
  Input\InputInterface,
  Output\NullOutput,
  Output\OutputInterface,
  Question\Question,
  Question\ChoiceQuestion as Choice,
  Question\ConfirmationQuestion,
};
```

## List some of the features of PHP 7


- Scalar type declarations
- Return type declarations
- Null coalescing operator (??)
- Spaceship operator
- Constant arrays using define()
- Anonymous classes
- Closure::call method
- Group use declaration
- Generator return expressions
- Generator delegation
- Space ship operator

## What are the popular frameworks in PHP?

- Symfony
- Laravel
- Zend Framework
- CakePHP
- CodeIgnite
- Yii 2
- etc...

## What is the difference between $message and $$message?

$message stores variable data while $$message is used to store variable of variables.

$message stores fixed data whereas the data stored in $$message may be changed dynamically.

## Is multiple inheritance supported in PHP?

PHP supports only single inheritance; it means that a class can be extended from only one single class using the keyword "extends"

## What is the meaning of a final class and a final method?

"final" is introduced in PHP5. Final class means that this class cannot be extended and a final method cannot be overriden.

## How is the comparison of objects done in PHP?

We use the operator "==" to test if two objects are instanced from the same class and have same attributes and equal calues. We can test if two objects are referring to the same instance o the same class by the use of the identity operator "===".

## How can PHP and HTML interact?

It is possible to generate HTML through PHP scripts, and it is possible to pass pieces of information from HTML to PHP.

## How can PHP and javascript interact?

We can exchange variables since PHP can generate Javascript code to be executed by the browser and it is possible to pass specific variables back to PHP via the URL.

## What type of operation is needed when passing values through a form or an URL?

If we would like to pass values through a form or an URL, then we nedd to encode and to decode them using `htmlspecialchars()` and `urlencode()`

## What is needed to be able to use image function?

GD Library is needed to execute images functions.

GD and PHP may also require other libraries (in Windows, you'll include the GD2 DLL `php_gd2.dll` as an extension in `php.ini`), depending on which image formats you want to work with (GD library requires libpng and libjpeg to compile).

GD originally stood for "GIF Draw". However since the revoking of the Unisys license (which owned the gif compression algorithm LZM), it has informally stood for "Graphic Draw"

## What's the use of the function imagetypes()?

imagetypes() returns the image format and types supported by the current version of GD-PGP. The returned values is a bit-field corresponding to the image formats supported by the version of GD linked into PHP. The following bits are returned: IMG_BMP | IMG_GIF | IMG_JPG | IMG_PNG | IMG_WBMP | IMG_XPM | IMG_WEBP.

```

<?php
if (imagetypes() & IMG_PNG) {
    echo "PNG Support is enabled";
}
?>

```

## What's the use of the function gd_info()?

this function gets information about the version and capabilities of the installed GD library.

## What are the functions to be used to get the image's properties (size, width and height)?

The functions are:

- getimagesize() for the size
- imagesx() for the width
- imagesy() for the height

## How failures in execution are handled with include() and require() functions?

If the function require() cannot access the file then it ends with a fatal error (E_COMPILE_ERROR). However, the include() functions gives a warning (E_WARNING), and the PHP script continues to execute.

The include and require statements includes and evaluate the specified file. When a file is included, the code it contains inherits the variable scope of the line on which the include occurs.Any variables available at that line in the calline file will be available within the called file, from that point frward. However, all functions and classes defined in the included file have the global scope.

```
vars.php
<?php

$color = 'green';
$fruit = 'apple';

?>

test.php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```
if the include occurs inside a function within the calling file, then all of the code contained in the called file will behave as though it had been defined inside that function. So, it follow the variable scope of that function. An exception to this rule are magic constants which are evaluated by the parser before the include occurs

```

<?php

function foo()
{
    global $color;

    include 'vars.php';

    echo "A $color $fruit";
}

/* vars.php is in the scope of foo() so     *
* $fruit is NOT available outside of this  *
* scope.  $color is because we declared it *
* as global.                               */

foo();                    // A green apple
echo "A $color $fruit";   // A green

?>

```

## What is the main difference between require() and require_once()?

require() and require_once() perform the same task except that the second function checks if the PHP script is already inluded or not before executing it. (if not, require_once() will not include/require it again).

## How is it possible to set an infinite execution time for PHP script?

The set_time_limit(0) added at the beginning of a sets to inifinite the time of execution to not have the PHP error "maximum execution time exceeded". It is also possible to specify this by setting the max_execution_time directive's value in the php.ini file.

The default limit is 30 seconds.

## What does the PHP error "Parse error in PHP - unexpected T_variable at line x" means?

This is a PHP syntax error expressing that a mistake at the line x stops parsing and executing the program.

##  What should we do to be able to export data into an Excel file?

The most common and used way is to get data into a format supported by Excel. For example, it is possible to write a .csv file, to choose for example comma as a separator between fields and then to open the file with Excel.

```
<?PHP
  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>
```
## What is the function file_get_contents() useful for?

file_get_contents() lets reading a file and storing it in a string variable.

## How can we connect to a MySQL database from a PHP script?

To be able to connect to a MySQL database, we must use mysqli_connect() function as follows:

```
<?php
$database = mysqli_connect('host','username','password');
mysqli_select_db($database,'database_name');
?>
```

## How can we change a mysqli function from procedural style to object oriented style

a function mysql_part1_part2() becomes $mysqli->part1_part2() or mysqli::part1_part2(), for example:

- mysqli_query changes to $mysqli->query()
- mysqli_select_db() becomes mysqli::select_db()

## What is the function mysql_pconnect() useful for?

mysql_pconnect() ensure a persistent connection to the database, it means that the connection does not close when the PHP script ends.

This function was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0 

## How be the result set of Mysql handled in PHP?

The result set can be handled using mysqli_fetch_array, mysqli_fetch_assoc, mysqli_fetch_object or mysqli_fetch_row

## How is it possible to know the number of rows returned in the result set?

The function mysqli_num_rows() returns the number or rows in a result set. If the number of rows is greater than PHP_INT_MAX, the number will be returned as a string.

It take as parameter a result set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result()

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT Code, Name FROM Country ORDER BY Name")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);

    /* close result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?>

```

## Which function gives us the number of affected entries by a query?

mysqli_affected_rows() return the number of entries affected by an SQL entry.

## What is the difference between mysqli_fetch_object() and mysqli_fetch_array()? 

The mysqli_fetch_object() function return the current row of a result set as an object while mysqli_fetch_array return the current row of a result set as an associative, a numeric array, or both (available options are the constants MYSQLI_ASSOC, MYSQLI_NUM, or MYSQLI_BOTH).  

```
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";

if ($result=mysqli_query($con,$sql))
  {
  while ($obj=mysqli_fetch_object($result))
    {
    printf("%s (%s)\n",$obj->Lastname,$obj->Age);
    }
  // Free result set
  mysqli_free_result($result);
}
  
  
if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
    printf("%s (%s)\n",$row["Lastname"],$row["Age"]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?> 

```

## How can we access the data sent through the URL with the GET method?

To acces the data sent via the GET method, we use $_GET array (which is a superglobal variable) or $_REQUEST.

in URL like this: www.url.com?var=value

We can access the content of var with $_GET['var']


```
<?php

print "<pre>";
print_r($_GET);

print_r($_REQUEST);

print($_GET['q']);

/*
On URL: http://localhost/?q=test&a=75
Array
(
    [q] => test
    [a] => 75
)
Array
(
    [q] => test
    [a] => 75
)
test
*/
```

## How can we access the data sent through the URL with the POST method?

To access the data sent this way, you use hte $_POST array or the $_REQUEST array

```
<html>
<body>

<form action="/" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> 


<?php
    
print "<pre>";
print_r($_POST ?? '');

print_r($_REQUEST ?? '');

print($_POST['name']?? '');
print "<br>";
print($_POST['email']?? '');

/*
if we send name = benfarhat and email to benfarhat.elyes@test.com we receive:
Array
(
    [name] => benfarhat
    [email] => benfarhat.elyes@test.com
)
Array
(
    [name] => benfarhat
    [email] => benfarhat.elyes@test.com
)
benfarhat
benfarhat.elyes@test.com
*/
```

## How can we check the value of a given variable is a number?

It is possible to use the dedicated function, is_numeric() which returns true if its parameter is a number, otherwise it returns a false

## How can we check the value of a given variable is alphanumeric?

```
bool ctype_alnum ( string $text )
```
Note that gettype() returns the type of a PHP variabble (Boolean, Integer, Double, String, Array, Object, Resource, NULL, unknown type).

## How do i check if a given variable is empty? 

```
bool empty ( mixed $var )
```

## What does the unlink() function mean?

The unlink() function is dedicated for the file system handling. It simply deletes the file given as entry.

## What does the unset() function mean?

The unset() function is dedicated for variable management. It will make a variable undefined.

In reality, the behavior of unset() inside of a function can vary depending on what type of variable you are attempting to destroy.
for example, to unset a global variable inside of a function, then use the $GLOBALS array to do so:

```

<?php
function foo() 
{
    unset($GLOBALS['bar']);
}

$bar = "something";
foo();
?>

```

If a variable that is passed by reference is unset() inside of a function, only the local variable is destroyed. The variable in the calling environment will retain the same value as before unset() was called.

```

<?php
function foo(&$bar) 
{
    unset($bar);
    $bar = "blah";
}

$bar = 'something';
echo "$bar\n";

foo($bar);
echo "$bar\n";
?>


/*
The above example will output:
  something
  something
*/
```

## How do I escape data before storing it in database?

The addslashes function enables us to escape data before storage into the database.

It returns a string with backslashes before characters that need to be escaped. The characters are:

- single quote (')
- double quote (")
- backslashe (\\)
- NUL (the NUL byte)

Note that addslashes() is sometimes incorrectly used to try to prevent SQL Injection (A technique where an attacker creates or alters SQL commands to expose hidden data, or to override valuable ones, or even to execute dangerous system level commands on the database host). Instead, database-specific escaping functions and/or prepared statements should be used.

## How is it possible to remove escape characters from a string?

The stripslashes() function enables us to remove the escape characters (backslashes).

\' becomes ', \\ becomes \ and so on.

## How can we automatically escape incoming data?

We have to enable the Magic quotes entry in the configuration file of PHP. 

We use directives magic_quotes_gpc (GPC for Get/Post/Cookie) and magic_quotes_runtime

These features have been deprecated as of PHP 5.3.0 and removed as of PHP 5.4.0

## What does the function get_magic_quotes_gpc() means?

The get_magic_quotes_gpc() function returns the current configuration setting of magic_quotes_gpc.

Since PHP 5.4.0, it always returns FALSE, because the magic quotes feature was removed from PHP.

## Is it possible to remove the HTML tags from data?

The strip_tags() function enables us to clean a string from the HTML tags 

## How can we convert characters which have special significance in HTML? 

The htmlspecialchars() function convert special characters to HTML entities.

- & becomes &amp;
- " becomes $quot;
- ' becomes $apos;
- < becomes $lt
- > becomes $gt;

The behavior of htmlspecialchars() can be changed by setting a flags bitmask, the second function's parameter (ENT_COMPAT, ENT_QUOTES, ENT_NOQUOTES, ...)

```
<?php
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>

```

## What is a variable scope?

The scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope. This single scope spans included and required files as well.

## what is the static variable in function useful for? 

A static variable exists only in a local function scope, but it does not loose its values when program execution leaves this scope.

```
<?php

function test(){
    static $testStatic = 1;
    $testNoStatic = 1;
    echo $testStatic . " - " . $testNoStatic . "<br>";
    $testStatic++;
    $testNoStatic++;
}

test();
// 1 - 1
test();
// 2 - 1
test();
// 3 - 1
echo $testStatic;
// Notice: Undefined variable: testStatic
```

## How can we define a variable accessible in functions of a PHP script?

By declaring a variable global with the keyword `global`. A global variable within a function will be accessible in the global scope.

```
<?php

function test(){
    global $testGlobal;
    $testGlobal = 3;
    $testNoGlobal = 3;
    echo $testGlobal . " - " . $testNoGlobal . "<br>";
    $testGlobal++;
    $testNoGlobal++;
}

test();
// 3 - 3
test();
// 3 - 3
echo $testGlobal;
// 4
```

A second way to access variables from the global scope is to use the special PHP-defined `$GLOBALS` array.

```
<?php
$a = 1;
$b = 2;

function Sum()
{
    echo $b; // Notice: Undefined variable: b
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    echo $b; // Notice: Undefined variable: b
} 

Sum();
echo $b; // 3
?>
```

## How is it possible to return a value from a function?

Values are returned by using the optional `return` statement. Any type may be returned, including arrays and objects. This causes function to end its execution immediately and pass control back to the line from which it was called.

If the return is omitted, the value NULL will be returned.

## What is the most convenient hashing method to be used to hash passwords?

It is preferable to use `crypt()` which natively supports several hashing algorithms (one-way string hashing) or its wrapper `password_hash()` which uses a strong hash, generates a strong salt and applies proper rounds automatically or the function `hash()` which supports more variants than crypt() (sha384, sha512, ripemdXXX, whirlpool, tigerXXX, snefru, gost, adler32, crcX, havalXXX, ...) rather than using the common hashing algorithms such as MD5, SHA1 or SHA256 because they are conceived to be fast. Hence, hashing passwords with these algorithms can create vulnerability.

## Which cryptographic extension provide generation and verification of digital signature?

The PHP-OpenSSL extension provides several cryptographic operations including generation and verification of digital signatures.

## How is a constant defined in a PHP script?

The `define()` directive lets us defining a constant as follows:

```
define("MYCONSTANT",123);
```
if the third parameter "case_insensitive" is set to TRUE, the constant will be cas-insensitive. By default this calue is set to FALSE which mean that CONSTANT and Constant represent different values.

Remember that constants differ from normal variables in that you don't use the "$" symbol to declare or use them

Note that since PHP 7.0.0 array values are allowed.

Like superglobals, the scope of a constant is global. You can access constants anywhere in your script without regard to scope.

The value of a constant can be returned with the constant() function which return NULL if the desired constant doe not exist (An E_WARNING level error is generated if the constant is not defined).
The defined() function checks whether a given named constant exists. 

In a class, we use the keyword `const` to define a constant.

## How can you pass a variable by reference?

To be able to pass a variable by reference, we use anampersand `&` in front of it:

```
<?php
function foo(&$var)
{
    $var++;
}

function bar($var) // Note the missing &
{
    $var++;
}

$a=5;
echo $a; // 5

foo($a);
echo $a; // 6

bar($a);
echo $a; // 6
```

In the first of these, PHP references allow you to make two variables refer to the same content. 

```
<?php
$b = 5;

$a =& $b;

$a = 6;

echo $a . "|" . $b; // 6|6

$a = 14;

echo $a . "|" . $b; // 14|14
```

## Will a comparison of an integer 12 and a string "13" work in PHP?

Yes, in a loose comparison, PHP converts the value of a variable to the most appropriate type for the action being carried out. With no type casting, we call this `type juggling` (the comparison comes after).

```
<?php
echo 12<=>"13"; // -1
echo 13<=>"13"; // 0
echo 14<=>"13"; // 1
```

## How is it possible to cast types in PHP?


The name of the desired type is written in parentheses before which is to be cast?

The casts allowed are:

- (int), (integer) - cast to integer
- (bool), (boolean) - cast to boolean
- (float), (double), (real) - cast to float
- (string) - cast to string
- (array) - cast to array
- (object) - cast to object
- (unset) - cast to NULL 

The (unset) cast has been deprecated as of PHP 7.2.0 and will be removed as of PHP 8.0.0

## When is a conditional statement ended with endif?

When the original if was followed by `:` and then the code block (with or without braces).

## How is the ternary conditional operator used in PHP?

The ternary operator `?:` is composed of three expression:

- a condition
- two operands describing 
    - what instruction should be performed when the specified condition is true
    - what instruction should be performed when the specified condition is false

```
(expr1)?(expr2):(expr3)
```

The expression (expr1)?(expr2):(expr3) evaluates to expr2 if expr1 evaluates to TRUE, and expr3 if expr1 evaluates to FALSE.

Since PHP 5.3, it is possible to leave out the middle part of the ternary operator. 

Expression expr1?:expr2 returns expr1 if expr1 evaluates to TRUE ans expr3 otherwise.

## What is the function func_num_args() used for?

The function func_num_args() is used to give the numner of parameters passed into a function.

## If the variable $var1 is set to 10 and the $var2 is set to the character var1, what's the value of $$var2?

$$var2 contains the value 10.

## What does accessing a class via :: means?

`::` is used to access static methods that do not require object initialization.

## In PHP, objects are they passed by value or by reference?

In PHP, by default objects are passed as [reference](http://www.php.net/manual/en/migration5.oop.php).

If you want to assign by value instead, you should clone your object.

```
<?php

class X {
    var $abc = 10; 
}
  
class Y {
    var $abc = 20; 
    function changeValue($obj)
    {
        $obj->abc = 30;
    }
}

function changeValue($obj)
{
    $obj->abc = 50;
}

$x = new X();
$y = new Y();

echo $x->abc; // 10
$y->changeValue($x);
echo $x->abc; // 30
changeValue($x);
echo $x->abc; // 50
```

## Are parent constructor have to be called implicitly inside a class constructor?

No, a parent constructor have to be called explicitly as follows:

```
<?php
class X 
{
    public function __construct(){
        echo "Construction called from " . __CLASS__;
    }
}
class Y extends X
{

}
  
class W extends X
{
    public function __construct(){
        
    }
}

class Z extends X
{
    public function __construct(){
        parent::__construct();
    }
}

$obj1 = new Y(); // Construction called from X
$obj2 = new W();
$obj3 = new Z(); // Construction called from X
```

## What's the difference between __sleep() and __wakeup()?

__sleep() is called on object serialization before storing the content, while __wakeup is called on unserialization when backup the object from a serialized version, __wakeup() permits to define some specific task on object reconstruction.

```
<?php
class X 
{
    public $a = 10;
    public $b = 20;
    protected $c = "hello";
    public $d = "world";

    public function __sleep(){
        $this->message('sleep');
        return ['a', 'd'];
    }
    public function __wakeup(){
        $this->message('wakeup');
    }
    public function message($method){
        echo $method .  " called!<br>";
    }
}
$obj = new X();
print "<pre>";
print_r($obj);
print "</pre>";
/*
X Object
(
    [a] => 10
    [b] => 20
    [c:protected] => hello
    [d] => world
)
*/
$ser = serialize($obj); // sleep called!
print_r($ser); // O:1:"X":2:{s:1:"a";i:10;s:1:"d";s:5:"world";}
$obj->a = 100;
$obj->b = 200;
print "<pre>";
print_r($obj);
print "</pre>";
/*
X Object
(
    [a] => 100
    [b] => 200
    [c:protected] => hello
    [d] => world
)
*/
$obj = unserialize($ser); // wakeup called!
print "<pre>";
print_r($obj);
/*
X Object
(
    [a] => 10
    [b] => 20
    [c:protected] => hello
    [d] => world
)
*/
```

## What is faster String interpolation or String concatenation

```
$variable1 = 'Hello ';
$variable2 = 'world';

$variable3 = $variable1.$variable2;
$variable4 = "$variable1$variable2";

```
Article and blog says that the concatenation is faster (nothinf official from php.net), but the following code disapprove this and show that interpolation is faster (curious but scientifically proven!)

For this case:
```
<?php
$concatenation =  "<?php \$variable1 = 'Hello '; \$variable2 = 'World'; \$variable3 = \$variable1\$variable2;";
$interpolation =  '<?php $variable1 = "Hello "; $variable2 = "World"; $variable3 = "$variable2$variable1";';


$startTime = microtime(true);
token_get_all($concatenation);
$endTime = microtime(true);

echo 'Concatenation: ', $endTime - $startTime, ' seconds', "<br>";
// Concatenation: 8.8214874267578E-6 seconds

$startTime = microtime(true);
token_get_all($interpolation);
$endTime = microtime(true);

echo 'Interpolation: ', $endTime - $startTime, ' seconds', "<hr>";
// Interpolation: 4.0531158447266E-6 seconds
```

With big operation:

```
<?php
const NUM = 100000;
$variable1 = 'Hello ';
$variable2 = 'World';
$first =  "<?php \$variable3 = \$variable1." . str_repeat('$variable2.$variable1.', NUM) . "\$variable2;";
$second =  '<?php $variable3 = "' . str_repeat('$variable2$variable1', NUM + 1 ) . '";';


$startTime = microtime(true);
token_get_all($first);
$endTime = microtime(true);

echo 'First case: ', $endTime - $startTime, ' seconds', "<br>";
// First case: 0.068174839019775 seconds

$startTime = microtime(true);
token_get_all($second);
$endTime = microtime(true);

echo 'Second case: ', $endTime - $startTime, ' seconds', "<hr>";
// Second case: 0.053776025772095 seconds
```

## What is the definition of a session?

A session is a logical object enabling us to preserve temporary data across multiple PHP pages. Unlike a cookie, the information is not stored on the users computer.

## How to initiate a session in PHP?

The use of the function `session_start()` lets us activating a session. it returns TRUE if a session was successfully started, otherwise FALSE.

when session_start() is called or when a session auto starts, PHP will call the open session and read session save handlers. The read callback will retrieve any existing session data (stored in a special serialized format) and will be unzerialized  and used automatically to populate the $_SESSION superglobal when the read callback returns the saved session data back to PHP session handling.

Since PHP 7.1.0 if session_start() returns FALSE, $_SESSION is no longer initializes.

## How can you propagate a session id?

You can propagate a session id via cookies (a small file with the maximum size of 4 KB that the web server stores on the client computer) or URL parameters (if the client browser does not support cookies). A session ID (PHPSESSID) is stored on the computer to be returned with every request to the server. 

## What is the meaning of a Persistent Cookie?

A persistent cookie is permanently stored in a cookie file on the browser's computer (Client-Side). By default, cookie are temporary and are erased if we close the browser.

## When do sessions end?

Sessions automatically end when the PHP script finishes executing but can be manually ended using the `session_write_close()`.

session_write_close() function, writes session data and end session.
Session data is usually stored after your script terminated without the need to call session_write_close(), but as session data is locked to prevent concurrent writes only one script may operate on a session at any time. When using framesets together with sessions you will experience the frames loading one by one due to this locking. You can reduce the time needed to load all the frames by ending the session as soon as all changes to session variables are done.

## What is the difference between session_unregister() and session_unset()?

The session_unregister() function unregister a global variable from the current session and the session_unset() function frees all session variables.

Note that session_unregister has been deprecated as of PHP 5.3.0 and removed as of PHP 5.4.0

We can replicate ths behavior with the unset() function:

```
unset($_SESSION['varname']);
unset($varname);
```

## What does $GLOBALS mean?

$GLOBALS is associative array including references to all variables which are currently defined in the global scope of the script.

## What does $_SERVER mean?

$_SERVER is an array including information created by the web server such as paths, headers and script locations.

## What does $_FILES means?

$_FILES is a superglobal variable and an associative array composed of items uploaded to the current script via the HTTP POST method.

## What is the difference between $_FILES['userfile']['name'] and $_FILES['userfile']['tmp_name']?

- $_FILES['userfile']['name'] contains the origian name of the file on the client machine.
- $_FILES['userfile']['tmp_name'] contains the temporary filename of the file in which the uploaded file was stored on the server.

## How can we get the error when there is a problem to upload a file?

$FILES['userfile']['error'] contains the error code (from 0 to 8) associated with this file upload.

- 0 UPLOAD_ERR_OK : There is no error, the file uploaded with success
- 1 UPLOAD_ERR_INI_SIZE : The uploaded file exceeds the upload_max_filesoze directive in php.ini
- 2 UPLOAD_ERR_FORM_SIZE : The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form
- 3 UPLOAD_ERR_PARTIAL : The uploaded file was only partially uploaded
- 4 UPLOAD_ERR_NO_FILE : No file was uploaded
- 6 UPLOAD_ERR_NO_TMP_DIR: No temporary folder
- 7 UPLOAD_ERR_CANT_WRITE: Failed to write file to the disk
- 8 UPLOAD_ERR_EXTENSION: A PHP Extension stopped the file upload.

## How can we change the maximum size of the files to be uploaded?

We can change the maximum size of files to be uploaded by changing the directive `upload_max_filesize` in php.ini

## What does $_ENV mean?

$_ENV is an associative array of variables sent to the current PHP script via the environment method.

## What does $_COOKIE mean?

$_COOKIE is an associative array of variables sent to the current PHP script using the HTTP Cookies.

## What is the difference between the "BITWISE AND" operator and the "LOGICAL AND" operator?

A Bitwise AND operator is represened as `&` and evaluates bits ans a logical AND operator is represented as `&&` or the keyword `AND` and evaluates boolean values

$a & $b : Bits that are set in both $a and $b are set
 ---------     ---------  -- ---------
 result        value      op test
 ---------     ---------  -- ---------
 Bitwise AND
( 0 = 0000) = ( 0 = 0000) & ( 5 = 0101)
( 1 = 0001) = ( 1 = 0001) & ( 5 = 0101)
( 0 = 0000) = ( 2 = 0010) & ( 5 = 0101)
( 4 = 0100) = ( 4 = 0100) & ( 5 = 0101)
( 0 = 0000) = ( 8 = 1000) & ( 5 = 0101)


$a && $b : returns TRUE if both $a and $b are TRUE, otherwise it returns FALSE. "&&" is supposed to work on boolean values, a zero is considered as false and non-zero as true. The "&&" operator does not evaluate second perator if first operand becomes false.

## What are the two man string operators?

- The concatenation operator `.`, which returns the concatenation of its right and left arguments
- The append operator `.`, which returns the append the argument on the right to the argument on the left

## What does the array operator "===" means?

It's a strict comparison operator wich mean "identical" (and not only equal). It returns true if $a and $b have the same key/value pairs in the same order and the same types (It is different than "==" operator wich only check that $a and $b have the same key/value pair)

## What is the differences between $a != $b and $a !== $b?

- != means inequality, it is a poor comparison which simply mean that $a is not equal to $b (after type juggling)
- !== mean non-identity, it a strict comparison which mean that $a is not equal to $a or have not the same type than $b. For example

1 != "1" // Are they different after type juggling ? return FALSE

1 !== "1" // Are their value or type different ? return TRUE

## How can we determine whether a PHP variable is an instantiated object of a certain class?

- instanceof is an operator used to determined whether a PHP variable is an instantiated object of a certain class.
- get_class() is a function which returns the name of the class of an object
- is_a() is a function which checks if the object is of this class or has this class as on of its parents.

```
<?php
class A {}
class B extends A {}
class C {}

$variable = new B();

print $variable instanceof B; // TRUE
print $variable instanceof A; // TRUE
print $variable instanceof C; // FALSE

print get_class($variable) == B::class; // TRUE
print get_class($variable) == A::class; // FALSE
print get_class($variable) == C::class; // FALSE

print is_a($variable, B::class, FALSE); // TRUE
print is_a($variable, A::class, FALSE); // TRUE
print is_a($variable, C::class, FALSE); // FALSE
```

## What is the goto statement useful for?

The goto statement can be used to jump to another section in the program. The target point is specified by a label followed by a colon, and the instruction is given as goto followed by the desired target label. This is not a full unrestricted goto, the target must be within the same file and context, meaning that you cannot jump out of a function or method, nor can you jump int one. You also cannot jump int any sort of loop or switch structure.

## What is the difference between Exception::getMessage and Exception::getLine?

Exception::getMessage lets us getting the Exception message and Exception::getLine lets us getting the line in which the exception occured.

## What does the expression Exception::__toSring means?

Exception::__string gives the String representation of the exception.

## How is it possible to parse a configuration file?

The function parse_ini_file() enables us to load in the ini file specified in the first parameter. It returns the setting in it in an associative array on success and FALSE on failure.

## What is the difference between the functions strstr() and stristr()?

strstr() find the first occurence of a string and return the portion of string, or FALSE on failure.
stristr() is the case-insensitive version of strstr().

## What is the difference between "for" and "foreach"?

for statement execute a block of code a specified number of time, it is generally used when you know in advance how many times the block should run. 

foreach is an easy way to iterate over arrays or objects. With objects, foreach used as elements only public variables.

```
<?php
$arr = ['a'=>1,'b'=>3,'c'=>5];
$obj = new class
{
    public $a = 1;
    private $b = 3;
    public $c = 5;
};

foreach($arr as $k => $v)
    echo "$k: $v ";
// a: 1 b: 3 c: 5

foreach($obj as $k => $v)
    echo "$k: $v ";
// a: 1 c: 5 
```

## Is it possible to submit a form without submit button?

**NOTE**: Don't know what is the relation between this question and PHP

It is possible to do this by calling the method document.form.submit()

## What is the difference between ereg_replace() and eregi_replace()?

These functions was deprecated in PHP 5.3.0, and removed in PHP 7.0.0 they are alternatively replaced by preg_replace(). Otherwise, ereg_replace() is a function used for text replacement after scanning for matches to a regular expression (pattern) eregi_replace is the case insensitive version of ereg_replace

```
<?php /* Don't try this code on PHP 7.x */
$string = "What's In Your Head?";
echo ereg_replace("i", "*i*", $string); // What's In Your Head?
echo eregi_replace("i", "*i*", $string); // What's *i*n Your Head?
```

## Is it possible to protect special characters in an URL query string?

Yes, we use the urlencode() function to be able to protect special characters. it returns a string in which all non-alphanumeric characters except `-`, `_`, `.`, have been replaced with a percent (%) sign followed by two hex digits and spaces encoded as plus (+) signs.

```
<?php
echo urlencode("What's In Your Head?"); // What%27s+In+Your+Head%3F
```

## What are the four classes of errors that can occur in PHP?

- Syntax errors : it occurs when a programmer uses wrong syntax in a php script. When this error occurs the php script is not executed
- Notice errors : it occurs when we attemps to obtain an information of an undefined variable, these errors doesn't affect the execution of a php script
- warning errors : it occurs when we try to include a file that doesn't exist. It doesn't affect the execution of your php script
- Fatal errors : it occurs when a script call a function which is not previously defined, a php script will not executed when these type of errors occurs.

## What is the difference between characters \034 and \x34?

`\xhh` is the character with hexadecimal code `hh`, and `\ddd` is a character with octal code `ddd`

## How can we pass the variable through the navigation between the pages

It is possible to pass the variables between pages using:

- Sessions
- Cookies
- Form fields
- Query string

## Is it possible to extend the execution time of a PHP script?

The set_time_limit(X) added at the beginning of a script sets to X secondes the time of executio. It is also possible to specify this by setting the max_execution_time directive's value in the php.ini file. By default, limit is 30 secondes, to extend the execution time we just have to choose a X greater than 30.

## Is it possible to destroy a cookie?

Yes, we should assure that the expiration date is in the past, to trigger the removal mechanisme of the browser.

## What is the default session time in PHP?

The default session time is 1440 seconds and is defined in php.ini with the help of the directive session.gc_maxlifetime

## Is it possible to use COM component in PHP?

Yes it is possible to integrate Component Object Model components (COM) in PHP by enabling the php_com_dotnet.dll extension. We should also installing support for the various COM objects that we intend to use (such as MS Word).

An example of use:

```

<?php
// starting word
$word = new COM("word.application") or die("Unable to instantiate Word");
echo "Loaded Word, version {$word->Version}\n";

//bring it to front
$word->Visible = 1;

//open an empty document
$word->Documents->Add();

//do some weird stuff
$word->Selection->TypeText("This is a test...");
$word->Documents[1]->SaveAs("Useless test.doc");

//closing word
$word->Quit();

//free the object
$word = null;
```

## Explain how you can update Memcached when you make changes to PHP?

When PHP changes you can update Memcached by:

- Clearing the Cache proactively: Clearing the cache when an insert or update is made
- Resetting the Cache: It is similar to the first method but rather than just deleting the keys and wainting for the next request for the data to refresh the cache, reset the values after the insert or update.