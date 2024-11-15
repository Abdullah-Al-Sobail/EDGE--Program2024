# App Development - Class 09: Dart Programming Essentials

## Topics Covered:
1. Dart Programming - Operators
2. Dart Programming - Loops
3. Dart Programming - Decision Making
4. Dart Programming - Numbers
5. Dart Programming - Strings
6. Dart Programming - Booleans
7. Dart Programming - Lists

---

## 1. Dart Programming - Operators
Operators are symbols that perform operations on variables and values. Dart supports several types of operators:

### Arithmetic Operators:
- `+`, `-`, `*`, `/`, `%`
```dart
int a = 10;
int b = 5;
print(a + b); // Output: 15
```

### Relational Operators:
- `==`, `!=`, `>`, `<`, `>=`, `<=`
```dart
print(10 > 5); // Output: true
```

### Logical Operators:
- `&&`, `||`, `!`
```dart
bool isTrue = (5 > 3) && (2 < 4); // true
bool isFalse = !isTrue; // false
```

### Assignment Operators:
- `=`, `+=`, `-=`, `*=`, `/=`
```dart
int num = 10;
num += 5; // num is now 15
```

---

## 2. Dart Programming - Loops
Loops help execute a block of code multiple times.

### For Loop:
```dart
for (int i = 0; i < 5; i++) {
  print('Value of i: $i');
}
```

### While Loop:
```dart
int count = 0;
while (count < 3) {
  print('Count: $count');
  count++;
}
```

### Do-While Loop:
```dart
int number = 0;
do {
  print('Number: $number');
  number++;
} while (number < 3);
```

---

## 3. Dart Programming - Decision Making
Decision-making constructs control the flow of execution based on conditions.

### If-Else Statement:
```dart
int age = 18;
if (age >= 18) {
  print('Adult');
} else {
  print('Minor');
}
```

### Switch Statement:
```dart
String grade = 'A';
switch (grade) {
  case 'A':
    print('Excellent');
    break;
  case 'B':
    print('Good');
    break;
  default:
    print('Average');
}
```

---

## 4. Dart Programming - Numbers
Dart provides `int` and `double` for numeric values.

### Examples:
```dart
int score = 100;
double percentage = 85.5;
print(score + percentage); // Output: 185.5
```

### Common Methods:
- `abs()`, `round()`, `toString()`
```dart
print((-5).abs()); // Output: 5
print(3.56.round()); // Output: 4
```

---

## 5. Dart Programming - Strings
Strings are sequences of characters.

### Declaring Strings:
```dart
String greeting = 'Hello, Dart!';
print(greeting);
```

### String Interpolation:
```dart
String name = 'John';
print('Hello, $name!'); // Output: Hello, John!
```

### Common Methods:
- `length`, `toUpperCase()`, `toLowerCase()`, `contains()`
```dart
print(greeting.length); // Output: 11
print(greeting.toUpperCase()); // Output: HELLO, DART!
```

---

## 6. Dart Programming - Booleans
Booleans represent `true` or `false`.

### Example:
```dart
bool isLoggedIn = true;
print(isLoggedIn); // Output: true
```

---

## 7. Dart Programming - Lists
Lists are ordered collections.

### Creating Lists:
```dart
List<String> fruits = ['Apple', 'Banana', 'Cherry'];
print(fruits[1]); // Output: Banana
```

### List Properties & Methods:
- `add()`, `remove()`, `length`
```dart
fruits.add('Mango');
print(fruits); // Output: [Apple, Banana, Cherry, Mango]
```

---

## Practice:

### 1. Operators
- Write a Dart program to calculate the sum, difference, product, and division of two numbers.

### 2. Loops
- Create a for loop that prints numbers from 1 to 10.
- Use a while loop to print the first 5 even numbers.

### 3. Decision Making
- Write a program using `if-else` to determine if a number is positive, negative, or zero.
- Implement a switch case that displays a day of the week based on a number (1 for Monday, 7 for Sunday).

### 4. Numbers
- Declare an integer and a double. Perform arithmetic operations and print the results.
- Use the `abs()` and `round()` methods on a number and display the output.

### 5. Strings
- Create a string and find its length.
- Check if a string contains a certain substring.

### 6. Booleans
- Declare a boolean variable and use it in a conditional statement to display a message.

### 7. Lists
- Create a list of your top 3 favorite movies and print them.
- Add a new movie to the list and then remove one movie.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 12th October, 2024

---