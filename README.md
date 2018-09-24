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

