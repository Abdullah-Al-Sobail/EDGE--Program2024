# App Development - Class 10: Dart Advanced Concepts

## Topics Covered:
1. Dart Programming - Map
2. Dart Programming - Enumeration
3. Dart Programming - Functions
4. Dart Programming - Interfaces
5. Dart Programming - Class

---

## 1. Dart Programming - Map
Maps in Dart are collections of key-value pairs.

### Creating Maps:
```dart
Map<String, String> capitals = {
  'USA': 'Washington, D.C.',
  'India': 'New Delhi',
  'UK': 'London'
};
print(capitals['USA']); // Output: Washington, D.C.
```

### Common Methods:
- `keys`, `values`, `addAll()`, `remove()`
```dart
capitals['Japan'] = 'Tokyo';
capitals.remove('UK');
print(capitals); // Output: {USA: Washington, D.C., India: New Delhi, Japan: Tokyo}
```

---

## 2. Dart Programming - Enumeration
Enums are used to define named constant values.

### Defining an Enum:
```dart
enum Colors { red, green, blue }

void main() {
  Colors selectedColor = Colors.red;
  print(selectedColor); // Output: Colors.red
}
```

### Enum Values:
```dart
for (var color in Colors.values) {
  print(color);
}
// Output: Colors.red, Colors.green, Colors.blue
```

---

## 3. Dart Programming - Functions
Functions encapsulate reusable code.

### Function Definition:
```dart
void greet(String name) {
  print('Hello, $name!');
}
greet('John'); // Output: Hello, John!
```

### Returning Values:
```dart
int add(int a, int b) {
  return a + b;
}
print(add(5, 3)); // Output: 8
```

### Anonymous Functions:
```dart
var multiply = (int x, int y) => x * y;
print(multiply(4, 5)); // Output: 20
```

---

## 4. Dart Programming - Interfaces
Dart uses classes to define interfaces.

### Creating an Interface:
```dart
class Animal {
  void makeSound() {
    print('Animal sound');
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

---

## 5. Dart Programming - Class
Classes in Dart provide a blueprint for creating objects.

### Defining a Class:
```dart
class Car {
  String model;
  int year;

  Car(this.model, this.year);

  void display() {
    print('Model: $model, Year: $year');
  }
}

void main() {
  Car car1 = Car('Toyota', 2021);
  car1.display(); // Output: Model: Toyota, Year: 2021
}
```

### Using Getters and Setters:
```dart
class Rectangle {
  double width;
  double height;

  Rectangle(this.width, this.height);

  double get area => width * height;
  set widthSetter(double value) => width = value;
}

void main() {
  Rectangle rect = Rectangle(10, 20);
  print(rect.area); // Output: 200
}
```

---

## Practice:

### 1. Map
- Create a `Map` with some country-capital pairs and perform operations like adding and removing entries.
- Iterate over the map and print all key-value pairs.

### 2. Enumeration
- Define an enum for vehicle types (like `Car`, `Bike`, `Truck`). Use it in a simple program to print a message based on the vehicle type.
- Iterate over the enum values and display them.

### 3. Functions
- Write a function that takes a number and returns its square.
- Create a function that accepts two strings and returns the longer one.

### 4. Interfaces
- Create an interface `Shape` with a method `calculateArea()`. Implement this interface in classes `Circle` and `Square`, each calculating their area appropriately.

### 5. Class
- Define a class `Student` with properties for name, age, and grade. Create a method to display the student’s details.
- Create a class `BankAccount` with methods to deposit and withdraw money, and check the balance.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 14th October, 2024

---