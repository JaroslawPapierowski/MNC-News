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
  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
  </head>
<body>
<header>
  <div class="logo">
    <img src="mnc-news-high-resolution-logo-transparent.png" alt="logo firmy" class="newslogo" width="60" height="60"/>
    <img src="logo-no-background.png" alt="nazwa firmy"  width="250" height="28"/>
  </div>
    
  <div class="category">
    <a href="home.php"  class="Home">Home</a>
    <a href="index.php?category=Polityka" class="Polityka">Polityka</a>
    <a href="index.php?category=Sport" class="Sport">Sport</a>
    <a href="index.php?category=Świat" class="Świat">Swiat</a>
    <a href="index.php?category=Medycyna" class="Medycyna">Medycyna</a>
    <a href="index.php?category=Giełdy" class="Giełdy">Gieldy</a>
    <a href="index.php?category=Nagrania" class="Nagrania">Nagrania</a>
    <a href="pogoda.php" class="Pogoda">Pogoda</a>

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
  <?php
// Połączenie z bazą danych
$servername = "localhost"; // nazwa serwera
$username = "root"; // nazwa użytkownika bazy danych
$password = ""; // hasło użytkownika bazy danych
$dbname = "news"; // nazwa bazy danych

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Funkcja pobierająca wpisy z bazy danych na podstawie kategorii
function getPostsByCategory($category) {
  global $conn;
  $sql = "SELECT * FROM wpisy WHERE kategoria='$category'";
  $result = $conn->query($sql);
  $posts = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $posts[] = $row;
    }
  }
  return $posts;
}

// Sprawdzenie, czy parametr kategorii został przekazany przez URL
if(isset($_GET['category'])) {
  $category = $_GET['category'];
  // Pobranie wpisów na podstawie kategorii
  $posts = getPostsByCategory($category);
  // Wyświetlenie wpisów w formacie HTML
  foreach($posts as $post) {
    echo "<a class='link' href='full_post.php?id=" . $post['id'] . "'>";
    echo "<div id='wpis' class='post'>";
    echo "<h2>" . $post['tytul'] . "</h2>";
    echo "<p>" . substr($post['tresc'], 0, 300) . "...</p>";
    echo "</div>";
    echo "</a>";
}
}

// Zamknięcie połączenia z bazą danych
$conn->close();
?>
  </div>

  <div class="container" id="content"></div>

  <div class="container" id="right-break"></div>
</main>

</body>
</html>