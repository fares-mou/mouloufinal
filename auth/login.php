<?php
session_start();
require_once '../db/config.php';

if(isset($_SESSION['user'])) {
    header("Location: ../dashbored.php");
    exit();
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

    if($result->num_rows > 0) {
        $_SESSION['user'] = $username;
        header("Location: ../dashbored.php");
        exit();
    } else {
        $error = "خطأ في اسم المستخدم أو كلمة المرور";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>login</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="../assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
  <form method="post">
     <div class="fas fa-hospital me-2"></div>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <?php if(isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <div class="form-floating">
      <input type="text" class="form-control" name="username" id="floatingInput" placeholder="username" required>
      <label for="floatingInput">username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2025</p>
  </form>
</main>

</body>
</html>