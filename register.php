<?php 
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registration Form</title>
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
    .input-box {
      margin-bottom: 18px;
    }
    label {
      font-weight: 600;
      color: #34495e;
      display: block;
      margin-bottom: 6px;
    }
    #int {
      width: 100%;
      height: 42px;
      padding: 8px 12px;
      border: 1px solid #dcdde1;
      border-radius: 8px;
      font-size: 16px;
      transition: 0.3s ease;
      background-color: #ffffff;
    }
    #int:focus {
      border-color: #4ca1af;
      outline: none;
      box-shadow: 0 0 5px #4ca1af;
    }
    .button {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }
    #btn {
      width: 100%;
      padding: 12px;
      background-color: #4ca1af;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 17px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    #btn:hover {
      background-color: #357a89;
    }
  </style>
</head>
<body>
  <div class="continer">
    <div class="form-continer">
      <div class="input-box">
        <label>Name</label>
        <input id="int" type="text">
      </div>
      <div class="input-box">
        <label>D.O.B</label>
        <input id="int" type="text">
      </div>
      <div class="input-box">
        <label>Phone No.</label>
        <input id="int" type="text">
      </div>
      <div class="input-box">
        <label>Email </label>
        <input id="int" type="text">
      </div>
      <div class="input-box">
        <label>Upload Profile</label>
        <input id="int" type="file">
      </div>
      <div class="input-box">
           <label>Passsword</label>
           <input id="int" type="password">
      </div>
      <div class="button">
        <button id="btn" type="button">Register</button>
      </div>
    </div>
  </div>
</body>
</html>
