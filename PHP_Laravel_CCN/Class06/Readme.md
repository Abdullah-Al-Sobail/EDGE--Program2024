# PHP (Laravel) - Class 06: Advanced Concepts

## Topics Covered:
1. PHP Number
2. PHP Casting
3. PHP Math
4. PHP Constants
5. PHP Magic Constants
6. PHP Operators

---

## 1. PHP Number
PHP has two types of numbers:
- **Integers**: Whole numbers without decimals.
- **Floating-point numbers (floats)**: Numbers with decimal points.

### Example:
```php
<?php
$integer = 10;    // Integer
$float = 3.14;    // Float

echo $integer;
echo "<br>";
echo $float;
?>
```

### Number Functions:
- `is_int()`: Checks if the variable is an integer.
- `is_float()`: Checks if the variable is a float.
- `abs()`: Returns the absolute value of a number.
- `round()`: Rounds a floating-point number.

---

## 2. PHP Casting
Casting is used to convert one data type to another. PHP automatically casts values when needed, but you can explicitly cast them.

### Implicit Casting (Automatic):
```php
<?php
$var = "10";    // String
$var = $var + 5;  // PHP converts string to integer automatically
echo $var;    // Output: 15
?>
```

### Explicit Casting (Manual):
```php
<?php
$var = "10.5";  // String
$var = (int)$var;  // Explicitly cast to integer
echo $var;  // Output: 10
?>
```

---

## 3. PHP Math
PHP offers several mathematical functions to perform calculations.

### Math Functions:
- `abs()`: Returns the absolute value.
- `pow()`: Returns the value of the first argument raised to the power of the second argument.
- `sqrt()`: Returns the square root.
- `max()`: Returns the highest value.
- `min()`: Returns the lowest value.

### Example:
```php
<?php
echo abs(-5);  // Output: 5
echo "<br>";
echo pow(2, 3);  // Output: 8
?>
```

---

## 4. PHP Constants
Constants are defined using the `define()` function, and their values cannot be changed.

### Example:
```php
<?php
define("PI", 3.14159);
echo PI;  // Output: 3.14159
?>
```

### Predefined Constants:
- `PHP_VERSION`: PHP version.
- `PHP_OS`: The operating system PHP is running on.
- `PHP_INT_MAX`: The maximum value for an integer.

---

## 5. PHP Magic Constants
PHP has several built-in "magic constants" that change depending on where they are used.

### Common Magic Constants:
- `__LINE__`: The current line number of the file.
- `__FILE__`: The full path and name of the current file.
- `__DIR__`: The directory of the current file.
- `__FUNCTION__`: The name of the function.
- `__CLASS__`: The name of the class.

### Example:
```php
<?php
echo "Current Line: " . __LINE__;  // Output: Line number
echo "<br>";
echo "File: " . __FILE__;  // Output: Full file path
?>
```

---

## 6. PHP Operators
PHP supports various operators used for performing operations on variables and values.

### Types of Operators:
- **Arithmetic Operators**: `+`, `-`, `*`, `/`, `%`
- **Assignment Operators**: `=`, `+=`, `-=`, `*=`, `/=`
- **Comparison Operators**: `==`, `===`, `!=`, `!==`, `<`, `>`, `<=`, `>=`
- **Logical Operators**: `&&`, `||`, `!`
- **Increment/Decrement Operators**: `++`, `--`
- **String Operators**: `.` (concatenation)

### Example:
```php
<?php
$a = 10;
$b = 5;

echo $a + $b;  // Output: 15
echo "<br>";
echo $a > $b;  // Output: 1 (true)
echo "<br>";
echo $a == $b;  // Output: 0 (false)
?>
```

---

## Practice:

### 1. PHP Numbers and Casting
- Create a PHP script that demonstrates the difference between integers and floats.
- Use explicit casting to convert a float into an integer and print the result.

### 2. PHP Math Functions
- Write a script that calculates the absolute value, square root, and the power of a number.
- Use `max()` and `min()` to find the highest and lowest values in an array of numbers.

### 3. PHP Constants
- Define a constant for the gravitational constant and print its value.
- Use predefined constants like `PHP_VERSION` and `PHP_OS` to display information about your PHP setup.

### 4. PHP Magic Constants
- Use `__LINE__`, `__FILE__`, and `__DIR__` to display the current line number, file name, and directory path.

### 5. PHP Operators
- Write a script to perform various arithmetic operations (addition, subtraction, multiplication, etc.) on two variables.
- Experiment with comparison and logical operators and print the results.

---

**Instructor**: Abdullah Al Sobail  
**Course**: PHP (Laravel)  
**Date**: 12th October, 2024

---