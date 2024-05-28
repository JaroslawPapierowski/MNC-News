<?php
if(isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Połączenie z bazą danych
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "news";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdzenie połączenia
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Zapytanie SQL, które pobierze pełny wpis na podstawie identyfikatora
    $sql = "SELECT * FROM wpisy WHERE id=$post_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Wyświetlenie pełnego wpisu
        $row = $result->fetch_assoc();
        echo "<h2>" . $row['tytul'] . "</h2>";
        echo "<p>" . $row['tresc'] . "</p>";
    } else {
        echo "Nie znaleziono wpisu.";
    }

    // Zamknięcie połączenia z bazą danych
    $conn->close();
} else {
    echo "Brak parametru id.";
}
?>