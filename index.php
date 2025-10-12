<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "fitdb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$goal = $_POST['goal'];


$sql = "INSERT INTO fitusers (name, age, gender, height, weight, email, phone, goal)
VALUES ('$name', '$age', '$gender', '$height', '$weight', '$email', '$phone', '$goal')";

if ($conn->query($sql) === TRUE) {
  echo "<h2 style='text-align:center; color:red; margin:100px;'>Registration Successful!</h2>";
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fitness Registration Form</title>
  <style>
    body {
       margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
    background: url('https://images.unsplash.com/photo-1554284126-aa88f22d8b74?auto=format&fit=crop&w=1350&q=80')
                no-repeat center center/cover;
    position: relative;
    }
    body::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 0;
}

    .container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 30px 40px;
      width: 400px;
      color: white;
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 28px;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: 500;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      outline: none;
      margin-bottom: 15px;
      font-size: 16px;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #00b4db;
      color: white;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #0083b0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Fitness Registration</h2>
    <form action="#" method="POST">
      <label>Name:</label>
      <input type="text" name="name" required />

      <label>Age:</label>
      <input type="number" name="age" required />

      <label>Gender:</label>
      <select name="gender" required>
        <option value="">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>

      <label>Height (cm):</label>
      <input type="number" name="height" step="0.1" required />

      <label>Weight (kg):</label>
      <input type="number" name="weight" step="0.1" required />

      <label>Email:</label>
      <input type="email" name="email" required />

      <label>Phone No:</label>
      <input type="text" name="phone" required />

      <label>Fitness Goal:</label>
      <select name="goal" required>
        <option value="">Select Goal</option>
        <option value="Weight Loss">Weight Loss</option>
        <option value="Muscle Gain">Muscle Gain</option>
        <option value="Stay Fit">Stay Fit</option>
        <option value="Improve Stamina">Improve Stamina</option>
        <option value="Flexibility">Flexibility</option>
      </select>

      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
