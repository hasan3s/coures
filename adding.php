
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adding</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="adding.css" rel="stylesheet">
    <title>Document</title>
    
</head>
<body>
    
    <form method="post">
        <div class="form">
            <label class="label" id="label">mohammad</label>
            <div>
                <input type="name" class="name" name="name" id="name" placeholder="Your Name" required>
            </div>
            <div>
                <input type="text" class="id" name="id" id="id" placeholder="Your ID" required>
            </div>
            <div>
                <input type="text" class="age" name="age" id="age" placeholder="Your Age" required>
            </div>
            <div>
                <select type="text" class="gender" name="gender" id="gender" placeholder="Your Gender" required>
                    <option selcted value="selected none">Your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select> 
            </div>
            <div>
                <input type="text" class="email" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div>
                <input type="text" class="phone" name="phone" id="phone" placeholder="Your Phone No" required>
            </div>
            <div>
                <input type="text" class="location" name="location" id="location" placeholder="Your Address" required>
            </div>
            <div>
            <input type="submit" class="Add" name="add_1" id="add_1" value="Add">
            </div>
                <a href="index.php">
                    <input type = "button" name = "back_to_index" value = "back" class = "back_to_index">
                </a>
        </div>
    </form>
</body>
</html>
<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "dbms";
  
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
  
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }

    
    $name_1 = $_POST['name'];
    if($name_1 != null && !empty($name_1)) {
       
       $id_1 = $_POST['id'];
       $age_1 = $_POST['age'];
       $gender_1 = $_POST['gender'];
       $email_1 = $_POST['email'];
       $phone_1 = $_POST['phone'];
       $location_1 = $_POST['location'];

   $sql = "INSERT INTO table_1 (`name`, `id`, `age`, `gender`, `email`, `phone`, `location`) VALUES ('$name_1', '$id_1', '$age_1', '$gender_1', '$email_1', '$phone_1', '$location_1');";

   $sql2 = $conn->prepare($sql);

   if($sql2->execute()){
        echo "Data added seccssafully!!";
        header("Location: index.php?action=1");

        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    }

?>
