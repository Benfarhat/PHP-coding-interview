# PHP Interview Questions and Answers

## What  is PHP?

PHP is a web language based in scripts that allow developers to dynamically create generated web pages.
PHP is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML. 

## What do the initials of PHP stand for?

PHP is a recursive acronym which means PHP: Hypertext Preprocessor

## Which programming language does PHP resemble?

PHP syntax resembles Perl and C.

## What does PEAR stand for?

PEAR means "PHP Extension and Application Repository". It extends PHP and provides a higher level of programming for web developers.

It's a repository of PHP software code founded in 1999 by Stig S. Bakken to promote the re-use of code that performs common functions. With Composer, another packages manager and an alternative for PEAR packages, some people of the PHP community argue to replacing PEAR in favor of composer.

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

## What is the main difference between PHP 4 and PHP 5?

PHP 5 presents many additional OOP (Object Oriented Programming) features. In fact, starting with PHP 5, the object model was rewritten to allow for better performance and more features. This was the major cha,ge from PHP 4. PHP 5 has a full object model.

Among the features in PHP 5 are the inclusions of visibility, abstract and final classes and methods, additional magic methods, interfaces, cloning and typehinting.

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













