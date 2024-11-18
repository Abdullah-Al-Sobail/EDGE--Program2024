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
class Animal {
  String name;
  
  Animal(String name) {
    this.name = name;
  }
}
class MathUtils {
  static const double pi = 3.14159;
}
