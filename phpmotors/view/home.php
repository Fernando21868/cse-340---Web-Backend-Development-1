<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PHP Motors</title>
    <meta
      name="description"
      content="Motors Home Page for Fernando Arias in CSE 340: Web Backend Development 1 at Brigham Young University - Idaho"
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
      <h1>Welcome to PHP Motors!</h1>
      <div class="hero">
        <picture>
          <img src="/phpmotors/images/delorean.jpg" alt="Animated image of a gray DMC Delorean car.">
        </picture>
        <div class="hero-info">
          <div>
            <h2>DMC Delorean</h2>
            <p>3 Cup holders <br>
               Superman doors <br>
               Fuzzy dice!
            </p>
            <button>Own Today</button>
          </div>
        </div>
      </div>
      <div class="sections">
        <section>
          <h2>DMC Delorean Reviews</h2>
          <ul>
            <li>"So fast its almost like traveling in time." (4/5)</li>
            <li>"Coolest ride on the road." (4/5)</li>
            <li>"I'm feeling Marty McFly!" (5/5)</li>
            <li>"The most futuristic ride of our day." (4.5/5)</li>
            <li>"80's livin and I love it!" (5/5)</li>
          </ul>
        </section>
        <section>
          <h2>Delorean Upgrades</h2>
          <div>
            <article>
              <picture>
                <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Auto Component or Part, Flux Capacitor" width="65" height="65">
              </picture>
              <h3><a href="#">Flux Capacitor</a></h3>
            </article>
            <article>
              <picture>
                <img src="/phpmotors/images/upgrades/flame.jpg" alt="Decals in the shape of red and orange flames." width="65" height="82">
              </picture>
              <h3><a href="#">Flame Decals</a></h3>
            </article>
            <article>
              <picture>
                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper stickers for cars, this one specifically says Hello World." width="65" height="57">
              </picture>
              <h3><a href="#">Bumper Stickers</a></h3>
            </article>
            <article>
              <picture>
                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Auto Component or Part, hub caps gray." width="65" height="65">
              </picture>
              <h3><a href="#">Hub Caps</a></h3>
            </article>
          </div>
        </section>
      </div>
    </main>
    <footer>
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>
  </div>
</body>
</html>