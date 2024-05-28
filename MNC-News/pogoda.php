<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MNC News</title>
    <link rel="stylesheet" type="text/css" href="pogoda.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="pogoda.js"></script>

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
    <a href="index.php?category=Home"  class="Home">Home</a>
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

  <div class="containerTime" id="times">
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
                <div class="container-search" > 
                    <div class="search">
                        <input type="text" id="city" placeholder="Wpisz swoje Misto lub Państwo"> 
                        <button id="wysz" onclick="handleClick()"><span class="material-symbols-outlined">search</span></button>
                    </div>
                </div>

        <div class="container">
                
                <div class="containerV2">
                    <div class="date">
                        <div id="currentCityText" class="currentCityText">LOCATION</div>
                        <div class="temperature-city"><span id="temperature" ></span>°C</div>
                        <img id="main-logo" width="200" height="200">
                    </div>

                    
                    
                    
                    <div class="info">
                        <!-- <p>Temperatura: <span id="temperature"></span>°C</p>  -->
                        <p><img src="thermometer.png" width="30" height="30" class="thermometer"> Temperatura: <span id="feels-like-temperature"></span>°C</p>
                        <p><img src="humidity.png" width="30" height="30" class="humidity">Wilgotność: <span id="humidity"></span>%</p>
                        <p><img src="up-arrow.png" width="30" height="30" class="up-arrow">Ciśnieniu: <span id="pressure"></span>hPa</p>
                        <p><img src="witness.png" width="30" height="30" class="witness">Widoczność: <span id="visibility"></span> m</p>
                        <p><img src="windock.png" width="30" height="30" class="thermometer">Prędkość wiatru: <span id="wind-speed"></span> m/s</p>

                    </div>
                </div>


                <div class="week">
                    <div class="day">
                        <div class="day-of-week"></div>
                        <img class="weather-icon">
                        <div class="temperature"></div>
                        <div class="wind-speed"></div>
                    </div>
                    
                    <div class="day">
                        <div class="day-of-week"></div>
                        <img class="weather-icon">
                        <div class="temperature"></div>
                        <div class="wind-speed"></div>
                    </div>

                    <div class="day">
                        <div class="day-of-week"></div>
                        <img class="weather-icon">
                        <div class="temperature"></div>
                        <div class="wind-speed"></div>
                    </div>

                    <div class="day">
                        <div class="day-of-week"></div>
                        <img class="weather-icon">
                        <div class="temperature"></div>
                        <div class="wind-speed"></div>
                    </div>

                    <div class="day">
                        <div class="day-of-week"></div>
                        <img class="weather-icon">
                        <div class="temperature"></div>
                        <div class="wind-speed"></div>
                    </div>
                </div>
            </div>
    </div>

</main>

</body>
</html>