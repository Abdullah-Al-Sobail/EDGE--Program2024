# PHP (Laravel) - Class 01: Introduction and Basics

## Topics Covered:
1. PHP Intro
2. PHP Install
3. PHP Syntax
4. PHP Comments
5. PHP Variables
6. PHP Echo / Print
7. PHP Data Types
8. PHP Strings

---

## 1. PHP Intro
PHP (Hypertext Preprocessor) is a server-side scripting language designed for web development.

### Basic Example:
```php
<?php
echo "Hello, World!";
?>
```

---

## 2. PHP Install
- **Local Installation**: You can install PHP using platforms like **XAMPP** or **WampServer**.
- **Testing**: Save a PHP file in the `htdocs` directory (XAMPP) and run it via the web browser.

---

## 3. PHP Syntax
PHP code is written between `<?php` and `?>` tags.

### Example:
```php
<?php
// PHP code goes here
?>
```

- Statements end with a semicolon `;`.

---

## 4. PHP Comments
Comments are used to add notes or to disable code.

### Single-line Comment:
```php
// This is a single-line comment
```

### Multi-line Comment:
```php
/*
This is a 
multi-line comment
*/
```

---

## 5. PHP Variables
Variables in PHP start with a `$` sign and are case-sensitive.

### Example:
```php
<?php
$name = "John";
$age = 25;
echo "Name: $name, Age: $age";
?>
```

---

## 6. PHP Echo / Print
Both `echo` and `print` are used to output data.

### Using Echo:
```php
<?php
echo "Hello, World!";
?>
```

### Using Print:
```php
<?php
print "Hello, World!";
?>
```

---

## 7. PHP Data Types
PHP supports several data types:
- **String**: Sequence of characters
- **Integer**: Whole number
- **Float**: Decimal number
- **Boolean**: `true` or `false`
- **Array**: Collection of values
- **Object**: Instance of a class
- **NULL**: Empty value

### Example:
```php
<?php
$boolean = true; // Boolean
$integer = 10; // Integer
$float = 5.7; // Float
$string = "Hello"; // String
?>
```

---

## 8. PHP Strings
Strings in PHP can be defined using single or double quotes.

### Example:
```php
<?php
$str1 = 'Hello';
$str2 = "World!";
echo $str1 . " " . $str2; // Concatenation
?>
```

### String Functions:
- `strlen()`: Returns the length of a string.
- `strrev()`: Reverses a string.
- `strpos()`: Finds the position of a substring.

---

## Practice:

### 1. PHP Syntax and Comments
- Write a PHP script that outputs "Hello, World!" using both `echo` and `print`.
- Use single-line and multi-line comments in your script.

### 2. Variables
- Create variables for your name, age, and a favorite color. Use `echo` to print these values.
- Experiment with case sensitivity by trying different variable name cases.

### 3. Data Types
- Declare variables of different data types and use `var_dump()` to display their type and value.
- Try changing the value of a variable to another data type and observe the output.

### 4. Strings
- Create two string variables and concatenate them.
- Use string functions like `strlen()`, `strrev()`, and `strpos()` to manipulate and display information about strings.

---

**Instructor**: Abdullah Al Sobail  
**Course**: PHP (Laravel)  
**Date**: 10th October, 2024

---