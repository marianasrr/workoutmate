<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Tips</title>
   <link rel="stylesheet" type="text/css" href="workout-tips.css">
  
</head>
<body>
    <header>
        <div class="logo">
            <img src="Logo.png" alt="Logo">
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="WorkoutMate.html">Home</a></li>
                <li id="google_translate_element">Language</li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Workout Tips</h1>
        <div class="tips-list">
            <?php
          
            $mysqli = new mysqli("localhost", "root", "", "gymwebsite");

            
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            
            $query = "SELECT title, content FROM tips";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='tip'>";
                    echo "<h2>" . $row['title'] . "</h2>";
                    echo "<p>" . $row['content'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No tips found.</p>";
            }

           
            $mysqli->close();
            ?>
        </div>
    </div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
