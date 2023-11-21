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

      

    $id=$_GET['id'];
    $name=$_GET['name'];
    $age=$_GET['age'];
    $gender=$_GET['gender'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $location=$_GET['location'];
    
    




    // $show_name=mysqli_query($conn, "SELECT `name` FROM `table_1` WHERE `id` = '$id'");
    

      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link href="show.css" rel="stylesheet">
        <title>show</title>
      </head>
      <body>
      <form>
        <div class="form">
            <label class="label" id="label">SHOW</label>
            <div>
                <input type="name" class="name" name="name" id="name" placeholder="Your Name" autocoplete="on" value="<?php echo $name; ?>" readonly >
                <label class="label_1" id="label_1">Name</label>
            </div>
            <div>
                <input type="text" class="id" name="id" id="id" placeholder="Your ID" autocoplete="on" value="<?php echo $id; ?>" readonly>
                <label class="label_1" id="label_1">ID</label>
            </div>
            <div>
                <input type="text" class="age" name="age" id="age" placeholder="Your Age" autocoplete="on" value="<?php echo $age; ?>" readonly>
                <label class="label_1" id="label_1">Age</label>
            </div>
            <div>
                <input type="text" class="gender" name="gender" id="gender" placeholder="Your Gender" autocoplete="on" value="<?php echo $gender; ?>" readonly>
                <label class="label_1" id="label_1">Gender</label>
            </div>
            <div>
                <input type="text" class="email" name="email" id="email" placeholder="Your Email" autocoplete="on" value="<?php echo $email; ?>" readonly>
                <label class="label_1" id="label_1">Email</label>
            </div>
            <div>
                <input type="text" class="phone" name="phone" id="phone" placeholder="Your Phone No" autocoplete="on" value="<?php echo $phone; ?>" readonly>
                <label class="label_1" id="label_1">Phone No</label>
            </div>
            <div>
                <input type="text" class="location" name="location" id="location" placeholder="Your Address" autocoplete="on" value="<?php echo $location; ?>" readonly>
                <label class="label_1" id="label_1">Address</label>
            </div>
                <a href="index.php">
                    <input type = "button" name = "back_to_index" value = "Back" class = "back_to_index">
                </a>
        </div>
        
      </body>
      </html>

      <?php 
        

        

        

        
        // echo $id;
                // $show_name="SELECT * FROM table_1";
                // $result_name = mysqli_query($conn, $show_name);
        // if (isset($_GET['id'])) {
        //     $id=$_GET['id'];
        //     $delete=mysqli_query($conn, "DELETE FROM `table_1` WHERE `id` = '$id'");
        
      ?>   