# App Development - Class 03: Java Operators, Strings, Math, Booleans, If...Else, and Switch

## Topics Covered:
1. Java Operators
2. Java Strings
3. Java Math
4. Java Booleans
5. Java If...Else
6. Java Switch

---

## 1. Java Operators
Java operators are used to perform operations on variables and values. They can be categorized as:
- **Arithmetic Operators**: `+`, `-`, `*`, `/`, `%`
- **Assignment Operators**: `=`, `+=`, `-=`, `*=`, `/=`, `%=`
- **Comparison Operators**: `==`, `!=`, `>`, `<`, `>=`, `<=`
- **Logical Operators**: `&&`, `||`, `!`
- **Increment/Decrement Operators**: `++`, `--`

### Example:
```java
int a = 10;
int b = 5;
System.out.println(a + b); // Output: 15
System.out.println(a > b); // Output: true
```

---

## 2. Java Strings
Strings in Java are objects that represent sequences of characters. The `String` class provides methods to work with text.

### Example:
```java
String greeting = "Hello, World!";
System.out.println(greeting.length()); // Output: 13
System.out.println(greeting.toUpperCase()); // Output: HELLO, WORLD!
System.out.println(greeting.toLowerCase()); // Output: hello, world!
System.out.println(greeting.substring(0, 5)); // Output: Hello
```

### Common String Methods:
- **`length()`**: Returns the length of the string.
- **`toUpperCase()`**: Converts the string to uppercase.
- **`toLowerCase()`**: Converts the string to lowercase.
- **`substring()`**: Extracts characters from the string.
- **`concat()`**: Concatenates two strings.

---

## 3. Java Math
The `Math` class provides methods to perform mathematical tasks such as rounding, finding the maximum or minimum, calculating square roots, etc.

### Example:
```java
System.out.println(Math.max(5, 10)); // Output: 10
System.out.println(Math.sqrt(64)); // Output: 8.0
System.out.println(Math.abs(-4.7)); // Output: 4.7
System.out.println(Math.random()); // Output: A random number between 0.0 and 1.0
```

### Common Math Methods:
- **`Math.max(a, b)`**: Returns the larger of two values.
- **`Math.min(a, b)`**: Returns the smaller of two values.
- **`Math.sqrt(x)`**: Returns the square root of `x`.
- **`Math.abs(x)`**: Returns the absolute value of `x`.
- **`Math.random()`**: Returns a random double between 0.0 and 1.0.

---

## 4. Java Booleans
Booleans represent one of two values: `true` or `false`. They are often used in conditional statements.

### Example:
```java
boolean isJavaFun = true;
boolean isFishTasty = false;
System.out.println(isJavaFun); // Output: true
System.out.println(isFishTasty); // Output: false
```

---

## 5. Java If...Else
The `if...else` statement is used to execute code based on a condition.

### Syntax:
```java
if (condition) {
    // Block of code to be executed if the condition is true
} else {
    // Block of code to be executed if the condition is false
}
```

### Example:
```java
int number = 10;
if (number > 0) {
    System.out.println("The number is positive.");
} else {
    System.out.println("The number is not positive.");
}
```

---

## 6. Java Switch
The `switch` statement is used to perform different actions based on different conditions.

### Syntax:
```java
switch (expression) {
    case value1:
        // Code block
        break;
    case value2:
        // Code block
        break;
    default:
        // Default code block
}
```

### Example:
```java
int day = 3;
switch (day) {
    case 1:
        System.out.println("Monday");
        break;
    case 2:
        System.out.println("Tuesday");
        break;
    case 3:
        System.out.println("Wednesday");
        break;
    default:
        System.out.println("Invalid day");
}
```

---

## Practice:

### 1. Practice with Operators
- Write a program to demonstrate the use of arithmetic, comparison, and logical operators.
- Calculate the sum, difference, product, and quotient of two numbers using arithmetic operators.

### 2. String Manipulation
- Create a string and try out various string methods: `length()`, `toUpperCase()`, `toLowerCase()`, `substring()`, and `concat()`.
- Write a program to compare two strings using `equals()` and `compareTo()` methods.

### 3. Math Calculations
- Use the `Math` class methods to:
  - Find the maximum and minimum of three numbers.
  - Generate a random number and round it to the nearest whole number.

### 4. Boolean Exercises
- Declare boolean variables and write conditions that evaluate to `true` or `false`.
- Use boolean expressions with `if...else` statements to print appropriate messages.

### 5. If...Else Practice
- Write a program to check if a number is even or odd using `if...else`.
- Use `if...else` to check if a person is eligible to vote based on their age.

### 6. Switch Statement
- Create a program using `switch` to print the name of a day of the week based on a number input.
- Experiment with the `default` case to handle invalid inputs.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 6th October, 2024 

---