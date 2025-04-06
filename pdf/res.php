


<?php include("connection.php"); ?>

<?php

    if($_POST['submit'])
    {
      $name = $_POST['name'];
     
      $email = $_POST['email'];
      $password = $_POST['password'];
      $age = $_POST['age'];
      $interest = $_POST['interest'];

      $query = "insert into reg values('$name','$email','$password',' $age','$interest');";
      $data = mysqli_query($conn,$query);

      if($data)
      {
        echo "APPLICATION SENT SUCCESFULLY !!";
      }
      else
      {
        echo "ERROR IN SENDING THE APPLICATION";
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adoption application</title>





    <style>
        /* Basic styling for the form */
        body {
            font-family: Arial, sans-serif;
            background-image: url('adpt3.jpeg');
            background-repeat:no-repeat;
            background-size:cover;
        }
        form {
       
            width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        select {
            width: calc(100% - 12px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div style="height:50px;"></div>
<div style="">
    <form action="res.php" method="post" style="background-color:#ECB159">
        <h2>Adopt Application </h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        
        <label for="interest">Interested in:</label>
        <select id="interest" name="interest" required>
            
            <option value="">Select an option</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
        </select>
        
        <input type="submit" name="submit" value="Register">
    </form></div>
</body>
</html>
