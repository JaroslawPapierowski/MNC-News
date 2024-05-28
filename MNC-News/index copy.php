<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MNC News</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
  </head>
<body>
<header>
  <div class="logo">
    <img src="mnc-news-high-resolution-logo-transparent.png" alt="logo firmy" class="newslogo" width="60" height="60"/>
    <img src="logo-no-background.png" alt="nazwa firmy"  width="250" height="28"/>
  </div>
    
  <div class="kategoria">
    <a href="Home" class="Home">Home</a>
    <a href="Polityka" class="Polityka">Polityka</a>
    <a href="Sport" class="Sport">Sport</a>
    <a href="Świat" class="Świat">Swiat</a>
    <a href="Medycyna" class="Medycyna">Medycyna</a>
    <a href="Nagrania" class="Nagrania">Nagrania</a>
    <a href="Giełdy" class="Giełdy">Gieldy</a>
    <a href="Pogoda" class="Pogoda">Pogoda</a>
  </div>

  <div class="live">Live</div>

  <div class="search">
    <input type="text" placeholder="Search news, topics and more">
    <button type="submit" class="material-symbols-outlined">Search</button>
  </div>

  <div class="Register"><a href="#">Register</a></div>
  <div class="SignIn"><a href="#">Sign In</a></div>
</header>

<main>
  <div class="container" id="left-break"></div>

  <div class="container" id="times">
    <div class="clock">
      <div class="face"></div>
      <div class="hour hand"></div>
      <div class="minute hand"></div>
      <div class="cover"></div>
      <div class="second-bulb"></div>
      <div class="second hand"></div>
      <div class="number" id="twelve">12</div>
      <div class="number" id="three">3</div>
      <div class="number" id="six">6</div>
      <div class="number" id="nine">9</div>
    </div><a class="sig" href="http://nathan.tokyo" target="_blank">NATHAN.TOKYO</a>
  </div>
  
  <div class="container" id="main-content">
    <div class="posty">
                  <?php
                  $tytulQuery = "SELECT tytul FROM wpisy";

                  if (isset($_GET['category'])) {
                      $selectedCategory = $conn->real_escape_string($_GET['category']);
                      $tytulQuery .= " WHERE kategoria = '$selectedCategory'";
                  }
                  
                  $rezultatTytul = $conn->query($tytulQuery);
                  
                  if ($rezultatTytul->num_rows > 0) {
                      while($row = $rezultatTytul->fetch_assoc()) {
                          echo "<p><a href='posty.php?tytul=" . urlencode($row["tytul"]) . "'>" . $row["tytul"] . "</a></p><br>";
                      }
                  } else {
                      echo "0 results";
                  }


                  ?>
    </div>
  </div>   
  <div class="container" id="content"></div>

  <div class="container" id="right-break"></div>
</main>

</body>
</html>