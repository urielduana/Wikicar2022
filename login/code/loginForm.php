<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginStyles.css">
    <title>wikicar</title>
</head>
<body>

<div class="container">

  <div class="brand-logo"></div>
  <div class="brand-title">WIKICAR</div>
  <div class="inputs">
    <form action="loginVal.php" method="post">
      <input type="text" placeholder="Name" name="name" required><br>
      <input type="email" placeholder="E-mail" name="email" required><br>
      <input type="password" placeholder="Password" name="password" required/><br>
      <a href="loginVal.php"></a>
      <button type="submit">Login</button>
    </form>
    <form action="registrationForm.php">
      <button type="submit">Create account</button>
    </form>
  </div>

</div>

</body>
</html>