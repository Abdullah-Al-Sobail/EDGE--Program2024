# App Development - Class 01: Introduction, Technologies, and Java Basics

## Topics Covered:
1. Introduction to App Development
2. Native and Cross-Platform App Technologies
3. Java Introduction
4. Getting Started with Java

---

## 1. Introduction to App Development
App development is the process of creating applications that run on mobile devices. These apps can range from simple utilities to complex games or enterprise-level solutions.

- **Mobile App Development**: Involves designing and building software specifically for mobile platforms like iOS, Android, and Windows.
- **Types of Apps**:
  - **Native Apps**: Built specifically for a single platform using languages like Swift (iOS) or Kotlin (Android).
  - **Cross-Platform Apps**: Developed to run on multiple platforms using frameworks like Flutter, React Native, and Xamarin.

---

## 2. Native vs. Cross-Platform App Technologies
Understanding the differences between native and cross-platform development is crucial:

### Native Apps:
- **Advantages**: Better performance, access to device features, optimized for the operating system.
- **Technologies**:
  - **iOS**: Swift, Objective-C
  - **Android**: Java, Kotlin

### Cross-Platform Apps:
- **Advantages**: Code reusability, faster development, easier maintenance.
- **Technologies**:
  - **Flutter**: Uses Dart programming language.
  - **React Native**: Uses JavaScript.
  - **Xamarin**: Uses C# and .NET.

---

## 3. Java Introduction
Java is a versatile and widely-used programming language, often chosen for Android app development. It is known for its platform independence, as Java code can run on any system that has a Java Virtual Machine (JVM).

- **Key Features of Java**:
  - **Object-Oriented**: Based on concepts like classes and objects.
  - **Platform-Independent**: "Write Once, Run Anywhere" using JVM.
  - **Secure and Robust**: Provides features like garbage collection and exception handling.

---

## 4. Getting Started with Java
To write and run Java code, you need to set up a development environment:

### 1. Install Java Development Kit (JDK)
- Download and install JDK from the [Oracle website](https://www.oracle.com/java/technologies/javase-downloads.html).
- Set up environment variables (JAVA_HOME and PATH) to use Java commands from the terminal or command prompt.

### 2. Writing Your First Java Program
Here is a simple Java program to print "Hello, World!":

```java
public class Main {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}
```

- **Explanation**:
  - `public class Main`: Defines a class named `Main`.
  - `public static void main(String[] args)`: The main method where the program execution begins.
  - `System.out.println`: Prints text to the console.

### 3. Compiling and Running Java Code
1. Save the code in a file named `Main.java`.
2. Open the command prompt or terminal and navigate to the file's directory.
3. Compile the code using:
   ```sh
   javac Main.java
   ```
4. Run the compiled program using:
   ```sh
   java Main
   ```

---

## Practice:

### 1. Identify App Types
- List two examples of native apps and two examples of cross-platform apps you use frequently. Briefly explain why you think they are developed using those technologies.

### 2. Setup Java Environment
- Install JDK on your system and set up the environment variables. Write down the steps you followed.

### 3. Hello, World! in Java
- Write the "Hello, World!" program in Java and run it on your computer. Try modifying the program to print your name instead of "Hello, World!".

### 4. Research Exercise
- Research and list the pros and cons of using Java for Android app development compared to using Kotlin.

### 5. Code Formatting
- Modify the provided Java code to include comments that describe each line’s purpose. Example:
  ```java
  // This is the main class of the program
  public class Main {
      // The main method is where the program starts
      public static void main(String[] args) {
          // Printing a message to the console
          System.out.println("Hello, World!");
      }
  }
  ```

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 2nd October, 2024 

---