<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "myDB";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO members (name, email, password, gender, dob) VALUES ('$name', '$email', '$password', '$gender', '$dob')";

  if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลเรียบร้อยแล้ว";
  } else {
    echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $conn->error;
  }

  $conn->close();
?>
