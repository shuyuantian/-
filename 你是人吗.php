<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>人机验证</title>
  <style>
    body {
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .captcha-container {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      background-color: #fff;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    .captcha-container h1 {
      margin-top: 0;
      font-size: 24px;
    }

    .captcha-checkbox {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .captcha-checkbox input {
      margin-right: 10px;
    }

    button[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="captcha-container">
    <h1>人机验证</h1>
    <p>请确认您不是机器人：</p>
    <div class="captcha-checkbox">
      <input type="checkbox" id="captcha-checkbox" name="captcha-checkbox" required>
      <label for="captcha-checkbox">我不是机器人</label>
    </div>
    <button type="submit" onclick="validateCaptcha()">提交</button>
  </div>

  <script>
    function validateCaptcha() {
      var checkbox = document.getElementById("captcha-checkbox");
      if (checkbox.checked) {
        alert("验证成功！");
        // 在这里可以添加额外的逻辑，例如重定向到其他页面或执行其他操作
      } else {
        alert("请完成人机验证！");
        // 在这里可以添加额外的逻辑，例如刷新验证码或执行其他操作
      }
    }
  </script>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 可以在这里添加服务器端的验证逻辑
    // 例如，检查用户是否勾选了复选框
    if (isset($_POST['captcha-checkbox'])) {
      // 验证成功，可以执行其他操作
      echo "<script>alert('验证成功！')</script>";
    } else {
      // 验证失败，可以执行其他操作
      echo "<script>alert('请完成人机验证！')</script>";
    }
  }
  ?>

</body>

</html>
