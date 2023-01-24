<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | PHP Motors</title>
    <meta
      name="description"
      content="Registration Page for Fernando Arias in CSE 340: Web Backend Development 1 at Brigham Young University - Idaho"
  >
    <link rel="stylesheet" href="/phpmotors/css/normalize.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/base.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/large.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico?v=2">
  </head>
<body>
  <div class="body">
    <header>
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
    </header>
    <nav>
      <?php
        // require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php';
        echo $navList; 
      ?>
    </nav>
    <main>
        <div class="form-container">
            <h1 class="title-form">Register</h1>
            <form method="get">
                <fieldset>
                    <legend>Register</legend>
                    <label class="top">Name* <input type="text" id="clientFirstname" name="clientFirstname" required></label>
                    <label class="top">Last Name* <input type="text" id="clientLastname" name="clientLastname" required></label>
                    <label class="top">Email* <input type="email" id="clientEmail" name="clientEmail" placeholder="someone@gmail.com" required></label>
                    <p>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</p>
                    <label class="top">Password* <input type="password" id="clientPassword" name="clientPassword" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"></label>
                    <label class="checkbox"><input type="checkbox" onclick="myFunction()" >Show Password</label>
                </fieldset>
                <input type="submit" id="register" value="Register" class="button"> 
            </form>
        </div>
        <a class="register" href="/phpmotors/accounts/index.php?action=register">Not a member yet?</a>
    </main>
    <footer>
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
  </div>
  <script src="/phpmotors/javascript/password.js"></script>
</body>
</html>