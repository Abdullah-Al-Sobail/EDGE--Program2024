# App Development - Class 04: Java While Loop, For Loop, Break/Continue, and Arrays

## Topics Covered:
1. Java While Loop
2. Java For Loop
3. Java Break/Continue
4. Java Arrays

---

## 1. Java While Loop
The `while` loop repeats a block of code as long as a specified condition is `true`.

### Syntax:
```java
while (condition) {
    // Code block to be executed
}
```

### Example:
```java
int i = 0;
while (i < 5) {
    System.out.println("i is: " + i);
    i++;
}
```

---

## 2. Java For Loop
The `for` loop is used to execute a block of code a specific number of times.

### Syntax:
```java
for (initialization; condition; update) {
    // Code block to be executed
}
```

### Example:
```java
for (int i = 0; i < 5; i++) {
    System.out.println("i is: " + i);
}
```

---

## 3. Java Break/Continue
- **Break**: Terminates the loop and continues with the next statement after the loop.
- **Continue**: Skips the current iteration and proceeds to the next iteration of the loop.

### Example with Break:
```java
for (int i = 0; i < 10; i++) {
    if (i == 5) {
        break; // Exits the loop when i is 5
    }
    System.out.println("i is: " + i);
}
```

### Example with Continue:
```java
for (int i = 0; i < 10; i++) {
    if (i == 5) {
        continue; // Skips the rest of the code for this iteration
    }
    System.out.println("i is: " + i);
}
```

---

## 4. Java Arrays
Arrays are used to store multiple values of the same type in a single variable.

### Syntax:
```java
dataType[] arrayName = {value1, value2, value3};
```

### Example:
```java
int[] numbers = {1, 2, 3, 4, 5};
System.out.println(numbers[0]); // Output: 1
numbers[2] = 10; // Change the value at index 2
System.out.println(numbers[2]); // Output: 10
```

### Looping Through Arrays:
You can use a `for` loop to iterate through an array:
```java
int[] numbers = {1, 2, 3, 4, 5};
for (int i = 0; i < numbers.length; i++) {
    System.out.println(numbers[i]);
}
```

### Multi-dimensional Arrays:
```java
int[][] matrix = {
    {1, 2, 3},
    {4, 5, 6},
    {7, 8, 9}
};
System.out.println(matrix[1][2]); // Output: 6
```

---

## Practice:

### 1. While Loop Exercises
- Write a program using a `while` loop to print numbers from 1 to 10.
- Create a `while` loop that keeps asking the user to enter a number until they enter 0.

### 2. For Loop Exercises
- Use a `for` loop to calculate the sum of the first 10 natural numbers.
- Write a `for` loop to print the multiplication table of a number entered by the user.

### 3. Break/Continue Exercises
- Create a `for` loop that prints numbers from 1 to 10 but skips printing the number 5.
- Write a program that uses `break` to exit a loop when a specific condition is met.

### 4. Array Practice
- Declare an array of 5 integers and fill it with values using a loop.
- Write a program to find the largest number in an array of integers.
- Create a two-dimensional array to represent a 3x3 matrix and print its elements using nested loops.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 8th October, 2024 

---