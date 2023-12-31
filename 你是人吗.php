<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>�˻���֤</title>
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
    <h1>�˻���֤</h1>
    <p>��ȷ�������ǻ����ˣ�</p>
    <div class="captcha-checkbox">
      <input type="checkbox" id="captcha-checkbox" name="captcha-checkbox" required>
      <label for="captcha-checkbox">�Ҳ��ǻ�����</label>
    </div>
    <button type="submit" onclick="validateCaptcha()">�ύ</button>
  </div>

  <script>
    function validateCaptcha() {
      var checkbox = document.getElementById("captcha-checkbox");
      if (checkbox.checked) {
        alert("��֤�ɹ���");
        // �����������Ӷ�����߼��������ض�������ҳ���ִ����������
      } else {
        alert("������˻���֤��");
        // �����������Ӷ�����߼�������ˢ����֤���ִ����������
      }
    }
  </script>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ������������ӷ������˵���֤�߼�
    // ���磬����û��Ƿ�ѡ�˸�ѡ��
    if (isset($_POST['captcha-checkbox'])) {
      // ��֤�ɹ�������ִ����������
      echo "<script>alert('��֤�ɹ���')</script>";
    } else {
      // ��֤ʧ�ܣ�����ִ����������
      echo "<script>alert('������˻���֤��')</script>";
    }
  }
  ?>

</body>

</html>
