# PHP (Laravel) - Class 08: Superglobals, RegEx, and Form Handling

## Topics Covered:
1. PHP Superglobals
2. PHP RegEx
3. PHP Forms
4. PHP Form Handling
5. PHP Form Validation
6. PHP Form Required

---

## 1. PHP Superglobals
Superglobals are built-in variables in PHP that are always accessible, regardless of scope. Examples include:
- `$_GET`
- `$_POST`
- `$_SERVER`
- `$_FILES`
- `$_SESSION`
- `$_COOKIE`
- `$_REQUEST`
- `$_ENV`

### Example:
```php
<?php
echo "Your IP Address is: " . $_SERVER['REMOTE_ADDR'];
?>
```

---

## 2. PHP RegEx
Regular Expressions (RegEx) are used to perform pattern matching in strings.

### Functions:
- **preg_match()**: Returns 1 if the pattern matches a string, 0 otherwise.
- **preg_match_all()**: Returns the number of matches found.
- **preg_replace()**: Replaces the pattern with another string.

### Example:
```php
<?php
$pattern = "/php/i";
$text = "Learning PHP is fun!";
echo preg_match($pattern, $text); // Outputs 1
?>
```

---

## 3. PHP Forms
Forms in PHP are used to collect data from users.

### HTML Form Example:
```html
<form action="process.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <input type="submit" value="Submit">
</form>
```

---

## 4. PHP Form Handling
Form data is collected using the `$_POST` or `$_GET` superglobal arrays.

### Example:
```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello, $name!";
}
?>
```

---

## 5. PHP Form Validation
Validation ensures that form data is correct before processing it.

### Example Code Shown in Class:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label for="">First Name:</label>
        <input type="text" name="Fname">
        <span style="color:red;">
            <?php
                if (empty($_POST['Fname'])) {
                    echo "*Required this field";
                }
            ?>
        </span><br><br>
        <label for="">Last Name:</label>
        <input type="text" name="Lname">
        <span style="color:red;">
            <?php
                if (empty($_POST['Lname'])) {
                    echo "*Required this field";
                }
            ?>
        </span><br><br>
        <label for="">Email:</label>
        <input type="email" name="email"><br><br>
        <label for="">Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="button">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['Fname']) && !empty($_POST['Lname'])) { ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data</title>
            </head>
            <body>
                <h1>Your Submitted Information:</h1>
                First Name: <p style="color:green;"><?php echo $_POST['Fname']; ?></p>
                Last Name: <p style="color:red;"><?php echo $_POST['Lname']; ?></p>
                Email: <p><?php echo $_POST['email']; ?></p>
            </body>
            </html>
    <?php
        }
    }
    ?>
</body>
</html>
```

---

## 6. PHP Form Required
Use `empty()` to check if a form field is filled or not and display an error message.

---

## Practice:

### 1. PHP Superglobals
- Use `$_SERVER` to display the user's browser information.
- Create a form with `$_GET` method and display the data using `$_GET`.

### 2. PHP RegEx
- Write a script to validate an email address using `preg_match()`.
- Use `preg_replace()` to replace all occurrences of a word in a string.

### 3. PHP Forms
- Create a form to collect user information (name, email, and age) and display it on the same page using `$_POST`.

### 4. PHP Form Handling
- Extend the form shown in class to include an option for gender and display the selected value.

### 5. PHP Form Validation
- Add email and password validation to the form. Ensure the email is valid and the password is at least 8 characters long.
- Use `isset()` to check if the form has been submitted.

---

**Instructor**: Abdullah Al Sobail  
**Course**: PHP (Laravel)  
**Date**: 17th November, 2024

---