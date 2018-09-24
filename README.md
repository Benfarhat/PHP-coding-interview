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
print '<pre>';
print_r $variable;
print '</pre>';
```

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

























































































































































































































