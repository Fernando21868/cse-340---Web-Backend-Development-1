<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle | PHP Motors</title>
    <meta
      name="description"
      content="Vehicle Page for Fernando Arias in CSE 340: Web Backend Development 1 at Brigham Young University - Idaho"
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
            <h1 class="title-form">Add Vehicle</h1>
            <?php
              if (isset($message)) {
                echo $message;
              }
            ?>
            <form method="post" action="/phpmotors/vehicles/index.php">
                <fieldset>
                    <legend>Description</legend>
                    <?php
                      echo $classificationList;
                    ?>
                    <label class="top">Make* <input type="text" id="invMake" name="invMake" required></label>
                    <label class="top">Model* <input type="text" id="invModel" name="invModel" required></label>
                    <label class="top">Description* <textarea required id="invDescription" name="invDescription" required></textarea></label>
                </fieldset>
                <fieldset>
                  <legend>Data</legend>
                  <label class="top">Image Path* <input type="text" id="invImage" name="invImage" required value="/phpmotors/images/no-image.png"></label>
                    <label class="top">Thumbnail Path* <input type="text" id="invThumbnail" name="invThumbnail" required value="/phpmotors/images/no-image.png"></label>
                    <label class="top">Price* <input type="number" id="invPrice" name="invPrice" required></label>
                    <label class="top"># In Stock* <input type="number" id="invStock" name="invStock" required></label>
                    <label class="top">Color* <input type="text" id="invColor" name="invColor" required></label>
                </fieldset>
                <input type="submit" name="submit" id="regvehbtn" value="Registerveh" class="button">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="add-vehicle">
            </form>
        </div>
    </main>
    <footer>
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
  </div>
</body>
</html>