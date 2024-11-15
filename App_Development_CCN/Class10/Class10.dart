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