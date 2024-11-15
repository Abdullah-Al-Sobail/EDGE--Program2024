# App Development - Class 05: Dart Programming

## Topics Covered:
1. Dart Programming - Overview
2. Dart Programming - Environment
3. Dart Programming - Syntax
4. Dart Programming - Data Types
5. Dart Programming - Variables
6. Dart Programming - Operators
7. Dart Programming - Loops
8. Dart Programming - Decision Making
9. Dart Programming - Numbers
10. Dart Programming - String
11. Dart Programming - Boolean
12. Dart Programming - Lists

---

## 1. Dart Programming - Overview
Dart is an open-source, general-purpose programming language developed by Google. It is used for building mobile, desktop, server, and web applications.

---

## 2. Dart Programming - Environment
To set up a Dart environment, you can use:
- **Dart SDK**: Install Dart SDK from the official website.
- **IDE**: Use IDEs like Visual Studio Code or Android Studio for Dart development.
  
---

## 3. Dart Programming - Syntax
Basic syntax structure of Dart:
```dart
void main() {
  print("Hello, Dart!");
}
```

### Key Points:
- Every Dart program starts with a `main()` function.
- Use `print()` to display output in the console.
  
---

## 4. Dart Programming - Data Types
Dart supports various data types, such as:
- **int**: Integer values.
- **double**: Floating-point numbers.
- **String**: Text values.
- **bool**: Boolean values (`true` or `false`).
- **List**: Collection of objects.

### Example:
```dart
int age = 25;
double price = 19.99;
String name = "Dart";
bool isValid = true;
List<int> numbers = [1, 2, 3, 4];
```

---

## 5. Dart Programming - Variables
Variables in Dart can be declared using `var`, `int`, `double`, etc.
```dart
var message = "Hello, Dart!";
int count = 10;
double percentage = 85.5;
```

---

## 6. Dart Programming - Operators
Dart supports various operators:
- **Arithmetic Operators**: `+`, `-`, `*`, `/`, `%`
- **Relational Operators**: `==`, `!=`, `>`, `<`, `>=`, `<=`
- **Logical Operators**: `&&`, `||`, `!`

### Example:
```dart
int a = 10;
int b = 5;
print(a + b); // Output: 15
print(a > b); // Output: true
```

---

## 7. Dart Programming - Loops
Dart supports `for`, `while`, and `do-while` loops.

### For Loop:
```dart
for (int i = 0; i < 5; i++) {
  print(i);
}
```

### While Loop:
```dart
int i = 0;
while (i < 5) {
  print(i);
  i++;
}
```

---

## 8. Dart Programming - Decision Making
Using `if`, `else`, and `switch` statements:
```dart
int age = 20;
if (age >= 18) {
  print("Adult");
} else {
  print("Minor");
}
```

---

## 9. Dart Programming - Numbers
Dart handles numbers using `int` and `double`. Mathematical operations can be easily performed.

### Example:
```dart
int a = 10;
double b = 5.5;
print(a + b); // Output: 15.5
```

---

## 10. Dart Programming - String
Strings represent text and can be concatenated or manipulated.
```dart
String greeting = "Hello";
String name = "World";
print(greeting + " " + name); // Output: Hello World
```

### String Interpolation:
```dart
String name = "Dart";
print("Welcome to $name programming!");
```

---

## 11. Dart Programming - Boolean
Boolean values are `true` or `false`.
```dart
bool isAvailable = true;
print(isAvailable); // Output: true
```

---

## 12. Dart Programming - Lists
Lists in Dart are used to store multiple values.
```dart
List<String> fruits = ["Apple", "Banana", "Cherry"];
print(fruits[1]); // Output: Banana
```

### Modifying Lists:
```dart
fruits.add("Orange");
fruits.remove("Apple");
print(fruits); // Output: [Banana, Cherry, Orange]
```

---

## Practice:

### 1. Basic Syntax
- Write a simple Dart program to print "Welcome to Dart Programming!".

### 2. Data Types and Variables
- Declare variables of different data types (int, double, String, bool) and print their values.

### 3. Operators
- Create a program to perform basic arithmetic operations and display the results.
- Use relational operators to compare two numbers and print `true` or `false`.

### 4. Loops
- Write a `for` loop to display numbers from 1 to 10.
- Create a `while` loop to calculate the factorial of a given number.

### 5. Decision Making
- Use `if-else` to check if a number is even or odd.
- Create a `switch` statement to display the day of the week based on a number input.

### 6. Working with Lists
- Declare a list of your favorite movies and display them using a loop.
- Add and remove elements from a list and print the updated list.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 11th October, 2024

---