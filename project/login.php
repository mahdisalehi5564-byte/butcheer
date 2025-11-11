<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ورود</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <?php include 'login_header.php'; ?>

  <main class="login-page">
    <div class="login-box">
      <h2>ورود</h2>
      <form action="check_login.php" method="POST">
        <label for="username">نام کاربری</label>
        <input type="text" id="username" name="username" placeholder="نام کاربری خود را وارد کنید" required>

        <label for="password">رمز عبور</label>
        <input type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید" required>

        <button type="submit">ورود</button>
      </form>
      <p>حساب کاربری ندارید؟ <a href="register.php">ثبت‌نام</a></p>
    </div>
  </main>
</body>
</html>

