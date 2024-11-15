# App Development - Class 06: Dart Programming

## Topics Covered:
1. Dart Programming - Map
2. Dart Programming - Enumeration
3. Dart Programming - Functions
4. Dart Programming - Interfaces
5. Dart Programming - Class

---

## 1. Dart Programming - Map
A Map is a collection of key-value pairs where each key is unique. You can use `Map` to store and retrieve data efficiently.

### Syntax:
```dart
Map<String, String> capitals = {
  'Bangladesh': 'Dhaka',
  'USA': 'Washington D.C.',
  'UK': 'London'
};

print(capitals['USA']); // Output: Washington D.C.
```

### Operations on Maps:
- **Adding a Key-Value Pair**: `capitals['India'] = 'New Delhi';`
- **Removing a Key**: `capitals.remove('UK');`
- **Checking Existence**: `capitals.containsKey('Bangladesh');`

---

## 2. Dart Programming - Enumeration
Enumerations, or `enum`, are used to define a set of named constants.

### Syntax:
```dart
enum Direction { North, South, East, West }

void main() {
  Direction dir = Direction.North;
  if (dir == Direction.North) {
    print('Heading North!');
  }
}
```

### Key Points:
- Use `enum` to group related constants.
- You can use enums in `switch` statements.

---

## 3. Dart Programming - Functions
Functions are blocks of code that perform specific tasks.

### Syntax:
```dart
void greet(String name) {
  print('Hello, $name!');
}

void main() {
  greet('Dart');
}
```

### Types of Functions:
- **Named Functions**: Defined with a name, like `greet`.
- **Anonymous Functions**: Functions without a name, used in places like callbacks.

### Arrow Function:
```dart
int add(int a, int b) => a + b;
print(add(3, 4)); // Output: 7
```

---

## 4. Dart Programming - Interfaces
Dart does not have a keyword for interfaces. Instead, any class can be used as an interface.

### Example:
```dart
class Animal {
  void makeSound() {
    print('Some sound');
  }
}

class Dog implements Animal {
  @override
  void makeSound() {
    print('Bark');
  }
}

void main() {
  Dog myDog = Dog();
  myDog.makeSound(); // Output: Bark
}
```

### Key Points:
- Use the `implements` keyword to implement an interface.
- Interfaces help to enforce a contract for classes.

---

## 5. Dart Programming - Class
Classes are the blueprint of objects. Dart is an object-oriented language, so classes and objects are fundamental.

### Defining a Class:
```dart
class Car {
  String brand;
  int year;

  Car(this.brand, this.year);

  void display() {
    print('Brand: $brand, Year: $year');
  }
}

void main() {
  Car myCar = Car('Toyota', 2020);
  myCar.display(); // Output: Brand: Toyota, Year: 2020
}
```

### Constructor:
- **Parameterized Constructor**: `Car(this.brand, this.year);`
- **Named Constructor**: `Car.namedConstructor() { ... }`

### Inheritance:
```dart
class Animal {
  void move() {
    print('Animal is moving');
  }
}

class Dog extends Animal {
  @override
  void move() {
    print('Dog is running');
  }
}

void main() {
  Dog myDog = Dog();
  myDog.move(); // Output: Dog is running
}
```

---

## Practice:

### 1. Map
- Create a map of fruits with their colors (e.g., 'Apple' -> 'Red') and display a color for a specific fruit.
- Add and remove elements from the map, and check for the existence of a key.

### 2. Enumeration
- Define an enum for traffic lights (Red, Yellow, Green) and print appropriate messages for each light using a switch statement.

### 3. Functions
- Write a function that calculates the area of a rectangle and returns the result.
- Create an anonymous function to sort a list of integers in descending order.

### 4. Interfaces
- Define a class `Shape` as an interface with a method `draw()`. Implement this interface in `Circle` and `Square` classes, and call their `draw()` methods.

### 5. Class
- Define a `Person` class with attributes `name` and `age`. Write a method to display a greeting message.
- Create a `Student` class that inherits from `Person` and adds a `grade` attribute. Override a method to display student-specific details.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 13th October, 2024

---