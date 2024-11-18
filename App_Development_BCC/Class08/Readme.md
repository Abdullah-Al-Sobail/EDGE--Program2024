# App Development - Class 08: Introduction to Flutter

## Topics Covered:
1. **Flutter Installation**
2. **Android Studio Installation**
3. **Flutter First Application**
4. **Flutter Architecture**
5. **Flutter vs. React Native**
6. **Dart Programming**
7. **Flutter Widgets**
8. **Flutter Layouts**
9. **Flutter Gestures**
10. **Flutter IDE**

---

## 1. Flutter Installation
Flutter can be installed on Windows, macOS, and Linux. The steps generally include:
- Downloading the Flutter SDK from the [Flutter website](https://flutter.dev).
- Extracting the SDK to a suitable directory.
- Setting the PATH environment variable.
- Running `flutter doctor` to check for any additional requirements.

---

## 2. Android Studio Installation
### Steps to Install Android Studio:
1. Download Android Studio from the [official website](https://developer.android.com/studio).
2. Install Android Studio and configure the Flutter and Dart plugins.
3. Set up the Android emulator for testing Flutter applications.

---

## 3. Flutter First Application
### Example:
```dart
import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: Text('My First Flutter App'),
        ),
        body: Center(
          child: Text('Hello, Flutter!'),
        ),
      ),
    );
  }
}
```
**Steps**:
- Create a new Flutter project using `flutter create project_name`.
- Open the project in your preferred IDE and run the application.

---

## 4. Flutter Architecture
Flutter uses a reactive framework and follows a declarative UI pattern. The core components are:
- **Widgets**: Building blocks of the UI.
- **Rendering Engine**: Renders the UI to the screen.
- **Platform Channels**: Communicates with the underlying platform (iOS/Android).

---

## 5. Flutter vs. React Native
### Key Differences:
- **Language**: Flutter uses Dart, while React Native uses JavaScript.
- **UI Components**: Flutter provides a complete set of custom widgets, whereas React Native relies on native components.
- **Performance**: Flutter often provides better performance because it doesn’t rely on a JavaScript bridge.

---

## 6. Dart Programming
Dart is the language used to develop Flutter applications. It is optimized for UI creation.

---

## 7. Flutter Widgets
### Common Widgets:
- **Text**: For displaying text.
- **Container**: A box with padding, margin, and color.
- **Row & Column**: For horizontal and vertical layouts.
- **Button**: Different types like `ElevatedButton`, `FlatButton`.

---

## 8. Flutter Layouts
Layouts in Flutter are managed using widgets:
- **Row**: Lays out children horizontally.
- **Column**: Lays out children vertically.
- **Stack**: Positions children on top of each other.

### Example:
```dart
Column(
  children: <Widget>[
    Text('Hello'),
    Text('World'),
  ],
)
```

---

## 9. Flutter Gestures
Flutter provides support for handling gestures like tap, swipe, and drag.

### Example:
```dart
GestureDetector(
  onTap: () {
    print("Tapped!");
  },
  child: Container(
    color: Colors.blue,
    width: 100,
    height: 100,
  ),
)
```

---

## 10. Flutter IDE
### Recommended IDEs:
- **Android Studio**: Full support for Flutter and Dart.
- **Visual Studio Code**: Lightweight and has excellent extensions for Flutter.
- **IntelliJ IDEA**: Great for large projects and comprehensive support.

---

## Practice:

### 1. Install and Set Up Flutter
- Follow the steps to install Flutter and set up Android Studio.
- Run `flutter doctor` and fix any issues reported.

### 2. Create Your First Flutter App
- Develop a simple app that displays your name in the center of the screen.

### 3. Experiment with Layouts
- Create a layout using `Row` and `Column` widgets.
- Add text and buttons in your layout.

### 4. Gesture Handling
- Implement a `GestureDetector` to detect taps and print a message to the console.

### 5. Compare Flutter and React Native
- Write down your observations about the differences between Flutter and React Native based on your research.

---

**Instructor**: Abdullah Al Sobail  
**Course**: App Development  
**Date**: 18th November, 2024

---