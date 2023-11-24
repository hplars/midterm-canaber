<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background-image: url('https://pub-static.fotor.com/assets/bg/ca5fa97f-7696-414b-bc87-9b5205b27575.jpg'); /* Replace 'your-background-image.jpg' with your image file path */
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.8); /* Adjust the alpha value for transparency */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      color: #333;
    }

    .login-container input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
    }

    .login-container button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-container button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form>
      <input type="text" placeholder="Username" name="username" required>
      <input type="password" placeholder="Password" name="password" required>
      <button type="submit">Login</button>
    </form>
  </div>

</body>
</html>
