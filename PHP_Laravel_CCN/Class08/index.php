<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label for="">Fristname</label><input type="text" name="Fname" >
        <span style="color:red;">
            <?php
                if(empty($_POST['Fname'])){
                    echo "*Required this field";
                }
            ?>
        </span><br><br>
        <label for="">Last Name</label><input type="text" name="Lname">
        <span style="color:red;">
            <?php
                if(empty($_POST['Lname'])){
                    echo "*Required this field";
                }
            ?>
        </span><br><br>
        <label for="">Email:</label><input type="email" name="email"><br><br>
        <label for="">Password:</label><input type="password" name="password"><br><br>
        <input type="submit" name="button">
    </form>
</body>
</html>
<?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST['Fname'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
<h1>Your Submitted  Information is </h1>
frist name is : <p style="color:green;"><?php echo $_POST['Fname'] ?></p>
Last name is : <p style="color:red;"><?php echo  $_POST['Lname'] ?></p>
Email is : <p><?php echo  $_POST['email'] ?></p>
</body>
</html>
<?php
        }
    }

?>
