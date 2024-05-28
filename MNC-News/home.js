document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('.category a');
    links.forEach(function(link) {
        link.addEventListener('click', function() {
            links.forEach(function(item) {
                item.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});

const cors = require('cors');

function updateClock() {
    fetch('http://worldtimeapi.org/api/timezone/Europe/Warsaw')
      .then(response => response.json())
      .then(data => {
        var datetime = data.datetime;
        var time = new Date(datetime);
        
        var hours = time.getHours();
        var minutes = time.getMinutes();
        var seconds = time.getSeconds();
        
        var hourHand = document.querySelector('.hour');
        var minuteHand = document.querySelector('.minute');
        var secondHand = document.querySelector('.second');
  
        var hourRotation = (hours % 12) * 30 + (minutes / 60) * 30; // 30 degrees per hour
        var minuteRotation = minutes * 6 + (seconds / 60) * 6; // 6 degrees per minute
        var secondRotation = seconds * 6; // 6 degrees per second
  
        hourHand.style.transform = 'rotate(' + hourRotation + 'deg)';
        minuteHand.style.transform = 'rotate(' + minuteRotation + 'deg)';
        secondHand.style.transform = 'rotate(' + secondRotation + 'deg)';
      })
      .catch(error => {
        console.error('Error fetching time:', error);
      });
  }
  
  setInterval(updateClock, 1000); // Update every second

  function getPostsByCategory(category) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("main-content").innerHTML = xhr.responseText;
        }
    };
    if (category === "Home") {
        // Jeśli kliknięto "Home", przekaż pustą kategorię, aby pobrać wszystkie wpisy
        xhr.open("GET", "get_posts.php", true);
    } else {
        // W przeciwnym razie przekaż nazwę kategorii
        xhr.open("GET", "get_posts.php?category=" + category, true);
    }
    xhr.send();
}

