# App Development - Class 02: Java Syntax, Output, Comments, Variables, and Data Types

## Topics Covered:
1. Java Syntax
2. Java Output
3. Java Comments
4. Java Variables
5. Java Data Types
6. Java Type Casting

---

## 1. Java Syntax
Java syntax defines the rules and structure for writing Java programs. Every Java application has at least one class and a `main` method.

### Example Structure:
```java
public class Main {
    public static void main(String[] args) {
        // Code goes here
    }
}
```
- **Class**: Every line of code in Java must be inside a class.
- **Method**: The `main` method is the entry point for program execution.
- **Curly Braces**: `{}` mark the beginning and end of a block of code.

---

## 2. Java Output
To print text to the console, use the `System.out.println()` method.

### Example:
```java
System.out.println("Hello, Java!");
```
- **System.out.println()**: Prints text followed by a new line.
- **System.out.print()**: Prints text without adding a new line.

---

## 3. Java Comments
Comments are used to make code easier to understand. They are ignored by the compiler.

### Types of Comments:
1. **Single-line Comments**: Use `//` for comments on one line.
   ```java
   // This is a single-line comment
   ```
2. **Multi-line Comments**: Use `/* */` for longer comments spanning multiple lines.
   ```java
   /* This is a 
      multi-line comment */
   ```

---

## 4. Java Variables
Variables are used to store data values. Each variable must be declared with a specific data type.

### Syntax:
```java
dataType variableName = value;
```

### Examples:
```java
int age = 25; // Integer variable
String name = "John"; // String variable
double salary = 55000.50; // Double variable
```

---

## 5. Java Data Types
Java has two main types of data types:
1. **Primitive Data Types**: Basic types like `int`, `float`, `char`, `boolean`.
   - **Example**: `int num = 5;`
2. **Non-Primitive Data Types**: Objects like `String`, `Arrays`, and Classes.
   - **Example**: `String text = "Hello";`

### Primitive Data Types Table:
| Data Type | Size   | Example Values            |
|-----------|--------|---------------------------|
| `int`     | 4 bytes| `10`, `-5`, `100`         |
| `float`   | 4 bytes| `5.99f`, `-2.5f`          |
| `char`    | 2 bytes| `'A'`, `'z'`              |
| `boolean` | 1 bit  | `true`, `false`           |

---

## 6. Java Type Casting
Type casting is converting a variable from one type to another.

### 1. **Widening Casting** (Automatic)
- Converts a smaller type to a larger type: `byte` → `short` → `int` → `long` → `float` → `double`.
- Example:
  ```java
  int num = 10;
  double doubleNum = num; // Automatic casting: int to double
  ```

### 2. **Narrowing Casting** (Manual)
- Converts a larger type to a smaller type.
- Example:
  ```java
  double num = 9.78;
  int intNum = (int) num; // Manual casting: double to int
  ```

---

## Practice:

### 1. Java Output Practice
- Write a program to print the following text:
  ```
  Welcome to Java Programming!
  ```
- Experiment with `System.out.print()` to see how it behaves differently from `System.out.println()`.

### 2. Comment Practice
- Add both single-line and multi-line comments to explain the different parts of the following code:
  ```java
  public class Main {
      public static void main(String[] args) {
          // Print a message to the console
          System.out.println("Learning Java!");
      }
  }
  ```

### 3. Variable Declaration
- Declare variables of different types: `int`, `String`, `boolean`, and `double`. Assign values to them and print the values.

### 4. Primitive Data Types Exercise
- Create a table in your code using comments to list all the primitive data types and their example values. For each type, declare a variable and assign an example value.

### 5. Type Casting Practice
- Perform both widening and narrowing type casting in your code. Experiment with converting `int` to `double` and `double` to `int`.

### 6. Research Exercise
- Research and write down in comments: Why is type casting needed in Java, and what are some potential issues that can arise with narrowing casting?

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 4th October, 2024 

---