<?php 
include('db.php');
session_start();
$name = $_SESSION['name'];
$d_o_b = $_SESSION['d_o_b'];
$phone_no = $_SESSION['phone_no'];
$email = $_SESSION['email'];
$profile_pic = $_SESSION['profile_pic'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: linear-gradient(135deg, #2c3e50, #4ca1af);
    }
    .continer {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .form-continer {
      width: 380px;
      padding: 30px 35px;
      background-color: #f9f9fb;
      border-radius: 12px;
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }
    .profile-pic {
      display: flex;
      justify-content: center;
      margin: 10px 0 20px;
    }
    #pic {
      width: 100px;
      height: 100px;
      border-radius: 100%;
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }
    .title-value {
      font-size: 15px;
      font-weight: bold;
      color: #34495e;
      margin-top: 10px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .input-value {
      font-size: 16px;
      font-weight: 500;
      color: #2c3e50;
      margin-bottom: 10px;
      padding-left: 5px;
    }
    .button-three {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
    .btn {
      flex: 1;
      text-align: center;
      margin: 0 5px;
      padding: 10px 0;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      color: white;
      font-weight: bold;
      transition: background-color 0.3s ease;
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }
    .btn:nth-child(1) {
      background-color: #3498db; /* Update */
    }
    .btn:nth-child(2) {
      background-color: #e74c3c; /* Delete */
    }
    .btn:nth-child(3) {
      background-color: #2ecc71; /* Logout */
    }
    .btn:hover {
      opacity: 0.85;
    }
  </style>
</head>
<body>
  <div class="continer">
    <div class="form-continer">
      <div class="profile-pic">
        <img id="pic" src="img/<?php echo$profile_pic; ?>" alt="Profile Picture" />
      </div>

      <div class="title-value">Name:</div>
      <div class="input-value"><?php echo$name; ?></div>

      <div class="title-value">D.O.B:</div>
      <div class="input-value"><?php echo$d_o_b; ?></div>

      <div class="title-value">Phone No.:</div>
      <div class="input-value"><?php echo$phone_no; ?></div>

      <div class="title-value">Email:</div>
      <div class="input-value"><?php echo$email; ?>"</div>

      <div class="button-three">
        <a href="#" class="btn">Update</a>
        <a href="#" class="btn">Delete</a>
        <a href="#" class="btn">Logout</a>
      </div>
    </div>
  </div>
</body>
</html>
