dBug for CodeIgniter
========

What does dBug do?
------

Dumps/Displays the contents of a variable in a colored tabular format

Based on the idea, javascript, and css code of Macromedia's ColdFusion cfdump tag

A much better presentation of a variable's contents than PHP's `var_dump` and `print_r` functions

Main page for the dBug library is here: http://dbug.ospinto.com/

What is this?
------

This project makes working with dBug better with CodeIgniter. Supplied is a SLIGHTLY modified dBug library along with a CodeIgniter helper to call the library. Nothing special, but very useful - for me anyway since I use it a LOT to debug variables and I use it as a replacement for the `var_dump` and `print_r` methods in PHP.

How to use
------

Simply load the dbug_helper - either by including it in config/autoload.php or using the following in your code:

```php
$this->load->helper('dbug');
```

After that you can debug your variables by calling the `dbug` method. Below is an example:

```php
$variable = array(
  "first"=>"1",
  "second",
  "third"=>array(
    "inner third 1",
    "inner third 2"=>"yeah"),
  "fourth"
);

dbug($variable);
```

This will output the following:

![](http://bautista.me/dbug-for-codeigniter.jpg)

