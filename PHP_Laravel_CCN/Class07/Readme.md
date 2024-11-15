# PHP (Laravel) - Class 07: Conditional Statements, Loops, Functions, and Arrays

## Topics Covered:
1. PHP If...Else...Elseif
2. PHP Switch
3. PHP Loops
4. PHP Functions
5. PHP Arrays

---

## 1. PHP If...Else...Elseif
Conditional statements allow you to execute different code based on different conditions.

### Syntax:
```php
if (condition) {
    // Code to be executed if condition is true
} elseif (condition) {
    // Code to be executed if previous condition is false and this condition is true
} else {
    // Code to be executed if all the above conditions are false
}
```

### Example:
```php
<?php
$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
} elseif ($age > 12) {
    echo "You are a teenager.";
} else {
    echo "You are a child.";
}
?>
```

---

## 2. PHP Switch
The `switch` statement is used to execute one out of many blocks of code based on the value of a variable.

### Syntax:
```php
switch (expression) {
    case value1:
        // Code to be executed if expression == value1
        break;
    case value2:
        // Code to be executed if expression == value2
        break;
    default:
        // Code to be executed if expression doesn't match any case
}
```

### Example:
```php
<?php
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid day";
}
?>
```

---

## 3. PHP Loops
Loops are used to execute a block of code repeatedly.

### Types of Loops:
- **While loop**: Executes as long as the condition is true.
- **For loop**: Repeats a block of code a specific number of times.
- **Do-While loop**: Similar to the while loop, but it executes the code at least once before checking the condition.
- **Foreach loop**: Used to loop through arrays.

### While Loop Example:
```php
<?php
$i = 1;
while ($i <= 5) {
    echo "Number: $i <br>";
    $i++;
}
?>
```

### For Loop Example:
```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}
?>
```

### Do-While Loop Example:
```php
<?php
$i = 1;
do {
    echo "Number: $i <br>";
    $i++;
} while ($i <= 5);
?>
```

### Foreach Loop Example (Array Looping):
```php
<?php
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo "$color <br>";
}
?>
```

---

## 4. PHP Functions
Functions are blocks of code that can be reused.

### Syntax:
```php
function functionName() {
    // Code to be executed
}
```

### Example:
```php
<?php
function greet() {
    echo "Hello, welcome to PHP!";
}

greet();  // Calling the function
?>
```

### Functions with Parameters:
```php
<?php
function greet($name) {
    echo "Hello, $name!";
}

greet("John");  // Calling the function with an argument
?>
```

### Functions with Return Values:
```php
<?php
function add($x, $y) {
    return $x + $y;
}

$result = add(5, 10);  // Function returns 15
echo "The sum is: $result";
?>
```

---

## 5. PHP Arrays
An array is a collection of values stored under a single variable name.

### Indexed Arrays:
```php
<?php
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[0];  // Output: Apple
?>
```

### Associative Arrays:
```php
<?php
$person = array("name" => "John", "age" => 25);
echo $person["name"];  // Output: John
?>
```

### Multidimensional Arrays:
```php
<?php
$students = array(
    array("John", 25),
    array("Jane", 22)
);
echo $students[0][0];  // Output: John
?>
```

### Array Functions:
- `count()`: Returns the number of elements in an array.
- `array_push()`: Adds one or more elements to the end of an array.
- `array_pop()`: Removes the last element of an array.
- `in_array()`: Checks if a value exists in an array.

---

## Practice:

### 1. PHP If...Else...Elseif
- Write a script that checks if a user is eligible to vote based on their age.
- Use `if...else...elseif` to categorize a person's age into "Child", "Teenager", "Adult", and "Senior".

### 2. PHP Switch
- Write a script that checks the day of the week (using `switch`) and outputs whether it's a "Weekday" or "Weekend".

### 3. PHP Loops
- Use a `for` loop to print numbers from 1 to 100.
- Use a `while` loop to calculate the sum of all even numbers between 1 and 50.
- Use a `foreach` loop to display all the values in an associative array of employees' names and their positions.

### 4. PHP Functions
- Write a function that takes two numbers as parameters and returns their product.
- Write a function to determine whether a given year is a leap year or not.

### 5. PHP Arrays
- Create an indexed array with at least 5 elements and use `count()` to display the number of elements.
- Create an associative array representing a book's title, author, and price, then display the information.
- Create a multidimensional array of students, with each student having their name and grades, then loop through the array and print each student's information.

---

**Instructor**: Abdullah Al Sobail  
**Course**: PHP (Laravel)  
**Date**: 14th October, 2024

---