
# App Development - Class 07: Object-Oriented Programming in Dart

## Topics Covered:
1. Object-Oriented Concepts
2. Classes & Objects
3. Dart Constructor
4. Dart `this` Keyword
5. Dart `static` Keyword
6. Dart `super` Keyword
7. Dart Inheritance
8. Super Constructor
9. Dart Methods
10. Method Overriding
11. Getters & Setters
12. Abstract Classes
13. Dart Interfaces

---

## 1. Object-Oriented Concepts
Dart, like many programming languages, uses Object-Oriented Programming (OOP) concepts such as classes, objects, inheritance, and more.

### Key Concepts:
- **Class**: A blueprint for creating objects.
- **Object**: An instance of a class.
- **Inheritance**: A mechanism to create a new class from an existing class.
- **Polymorphism**: The ability of different classes to respond to the same method call.
- **Abstraction**: Hiding the complex implementation and showing only the essentials.
- **Encapsulation**: Wrapping data and methods within a class.

---

## 2. Classes & Objects
### Example:
```dart
class Animal {
  String name;
  
  // Constructor
  Animal(this.name);
  
  void displayInfo() {
    print("Animal: $name");
  }
}

void main() {
  var dog = Animal("Dog");
  dog.displayInfo();
}
```

---

## 3. Dart Constructor
Constructors are used to initialize objects.

### Types of Constructors:
- **Default Constructor**: `Animal()`
- **Parameterized Constructor**: `Animal(this.name)`

---

## 4. Dart `this` Keyword
`this` refers to the current instance of the class.

### Example:
```dart
class Animal {
  String name;
  
  Animal(String name) {
    this.name = name;
  }
}
```

---

## 5. Dart `static` Keyword
Static members belong to the class rather than an instance of the class.

### Example:
```dart
class MathUtils {
  static const double pi = 3.14159;
}

void main() {
  print(MathUtils.pi); // Accessing static property
}
```

---

## 6. Dart `super` Keyword
`super` is used to refer to the superclass of the current class.

---

## 7. Dart Inheritance
Inheritance allows a class to inherit properties and methods from another class.

### Example:
```dart
class Animal {
  void eat() {
    print("Animal is eating");
  }
}

class Dog extends Animal {
  void bark() {
    print("Dog is barking");
  }
}

void main() {
  var dog = Dog();
  dog.eat();
  dog.bark();
}
```

---

## 8. Super Constructor
Use `super()` to call the parent class constructor.

---

## 9. Dart Methods
Methods are functions defined within a class.

---

## 10. Method Overriding
A subclass can override methods of the superclass.

### Example:
```dart
class Animal {
  void sound() {
    print("Animal sound");
  }
}

class Dog extends Animal {
  @override
  void sound() {
    print("Bark");
  }
}

void main() {
  var dog = Dog();
  dog.sound(); // Outputs: Bark
}
```

---

## 11. Getters & Setters
Getters and setters are used to access and modify private fields.

### Example:
```dart
class Student {
  String _name;
  
  // Getter
  String get name => _name;
  
  // Setter
  set name(String name) => _name = name;
}

void main() {
  var student = Student();
  student.name = "John";
  print(student.name);
}
```

---

## 12. Abstract Classes
Abstract classes cannot be instantiated and are used as base classes.

### Example:
```dart
abstract class Animal {
  void makeSound();
}

class Dog extends Animal {
  @override
  void makeSound() {
    print("Bark");
  }
}

void main() {
  var dog = Dog();
  dog.makeSound();
}
```

---

## 13. Dart Interfaces
An interface defines a contract that a class must follow.

### Example:
```dart
class Animal {
  void eat() {}
}

class Dog implements Animal {
  @override
  void eat() {
    print("Dog is eating");
  }
}

void main() {
  var dog = Dog();
  dog.eat();
}
```

---

## Practice:

### 1. Classes & Objects
- Create a class `Car` with properties `brand`, `model`, and a method `displayDetails()`. Instantiate an object and display its details.

### 2. Dart Constructor
- Implement a class `Book` with a parameterized constructor and initialize its properties.

### 3. Dart `this` Keyword
- Create a class `Rectangle` with properties `length` and `breadth`. Use `this` to initialize them in the constructor.

### 4. Dart `static` Keyword
- Create a class `Circle` with a static property `pi`. Calculate the area of a circle using this static property.

### 5. Dart Inheritance
- Create a class `Vehicle` with a method `drive()`. Extend it in a class `Car` and override the `drive()` method.

### 6. Method Overriding
- Override a method `makeSound()` in a subclass `Cat` of a superclass `Animal`.

### 7. Getters & Setters
- Use getters and setters to create a `BankAccount` class with a private balance property.

### 8. Abstract Classes
- Implement an abstract class `Shape` with a method `area()`. Create two subclasses `Rectangle` and `Circle` to calculate areas.

### 9. Dart Interfaces
- Create an interface `Printable` with a method `print()`. Implement this interface in two classes `Book` and `Magazine`.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 16th November, 2024

---