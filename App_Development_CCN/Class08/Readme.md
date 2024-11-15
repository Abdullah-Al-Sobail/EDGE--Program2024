# App Development - Class 08: Introduction & Dart Programming

## Topics Covered:
1. Introduction to App Development
2. Dart Programming - Overview
3. Dart Programming - Environment Setup
4. Dart Programming - Syntax
5. Dart Programming - Data Types
6. Dart Programming - Variables

---

## 1. Introduction to App Development
App development involves creating applications that run on devices like smartphones and tablets. The choice of platform (iOS, Android, Web) often determines the technology used.

### Key Concepts:
- **Native Apps**: Apps developed for a specific platform (e.g., iOS using Swift, Android using Kotlin).
- **Cross-Platform Apps**: Apps developed using frameworks like Flutter, React Native, which allow a single codebase to work on multiple platforms.

---

## 2. Dart Programming - Overview
Dart is a client-optimized language for building fast apps on any platform. It is the programming language behind the Flutter framework.

### Features of Dart:
- **Type Safe**: Ensures variables hold values of the declared type.
- **Sound Null Safety**: Helps prevent null reference errors.
- **Asynchronous Programming**: Simplifies concurrent code using `async` and `await`.

---

## 3. Dart Programming - Environment Setup
To begin programming with Dart:
1. Install the **Dart SDK** from [dart.dev](https://dart.dev/get-dart).
2. Use **Visual Studio Code** or **IntelliJ IDEA** for development.
3. Install the Dart extension in your IDE for syntax highlighting and debugging.

### Running Dart Code:
- From the command line: `dart run filename.dart`
- Using an IDE: Create a new Dart file and use the "Run" button.

---

## 4. Dart Programming - Syntax
Dart syntax is similar to languages like Java and C++.

### Basic Structure:
```dart
void main() {
  print('Hello, Dart!');
}
```

- `void main()` is the entry point of a Dart program.
- Use `print()` to output data to the console.

### Comments:
- **Single Line**: `// This is a single-line comment`
- **Multi-Line**: 
  ```dart
  /* This is a
     multi-line comment */
  ```

---

## 5. Dart Programming - Data Types
Dart has several built-in data types:
- **int**: For integers (e.g., `int age = 25;`)
- **double**: For floating-point numbers (e.g., `double pi = 3.14;`)
- **String**: For text (e.g., `String name = 'Dart';`)
- **bool**: For boolean values (e.g., `bool isValid = true;`)
- **List**: An ordered collection (e.g., `List<int> numbers = [1, 2, 3];`)
- **Map**: A collection of key-value pairs (e.g., `Map<String, int> scores = {'Alice': 90, 'Bob': 85};`)

---

## 6. Dart Programming - Variables
Variables store data values. Use the `var` keyword to declare variables without specifying a type.

### Declaring Variables:
```dart
int age = 30;
double price = 19.99;
String name = 'Flutter';
bool isActive = true;

var city = 'New York'; // Infers the type as String
```

### Constants:
Use `final` or `const` for variables that never change:
```dart
final String country = 'USA'; // runtime constant
const int maxScore = 100; // compile-time constant
```

---

## Practice:

### 1. Basic Dart Program
Write a Dart program to print your name and favorite programming language using `print()`.

### 2. Data Types
- Declare variables of type `int`, `double`, `String`, and `bool`. Assign values and print them.
- Create a `List` of your top 5 favorite fruits and display them.

### 3. Variables and Constants
- Use `var` to declare a variable, change its value, and print it.
- Create a `final` variable to store your birth year and a `const` variable for the speed of light (299792458 m/s). Try modifying these values and observe the behavior.

### 4. Comments Practice
- Write a Dart program that includes both single-line and multi-line comments to describe what the code does.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 10th October, 2024

---