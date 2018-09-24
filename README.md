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

It's a repository of PHP software code founded in 1999 by Stig S. Bakken to promote the re-use of code that performs common functions. With Composer, another packages manager and an alternative for PEAR packages, some people of the PHP community argue to replacing PEAR in favor of composer.

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

To be able to display the output directly to the browser we have to use one of the followings methods:

```
echo "hello the world";
```

```
print "hello the world";
```

```
<?= "Hello the world" ?>
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










