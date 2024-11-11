<?php
    // Ensure CORS is properly set up for security
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: Content-Type");
    $host = "startrek-payroll-mysql";
    $db_name = $_SERVER["MYSQL_DATABASE"];
    $db_username = $_SERVER["MYSQL_USER"];
    $db_password = $_SERVER["MYSQL_PASSWORD"];
    $charset = "utf8mb4";

    $dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $db_username, $db_password, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
?>

<?php


// Connect to a database if needed, but use secure methods for data storage
$servername = "startrek-payroll-mysql";
$dbname = $_SERVER["MYSQL_DATABASE"];
$username = $_SERVER["MYSQL_USER"];
$password = $_SERVER["MYSQL_PASSWORD"];

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure that latitude and longitude are passed in the query parameters
if (isset($_GET['lat']) && isset($_GET['lng'])) {
    $latitude = htmlspecialchars($_GET['lat']);
    $longitude = htmlspecialchars($_GET['lng']);

    // Validate the latitude and longitude
    if (is_numeric($latitude) && is_numeric($longitude)) {
        // Sanitize data and insert it into the database
        $latitude = $conn->real_escape_string($latitude);
        $longitude = $conn->real_escape_string($longitude);
        
        $sql = "INSERT INTO location_logs (latitude, longitude) VALUES ('$latitude', '$longitude')";

        if ($conn->query($sql) === TRUE) {
            echo "Location data recorded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid data format.";
    }
} else {
    echo "Latitude and Longitude not provided.";
}

// Close the connection
$conn->close();
?>


<?php
   
   

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $pdo->prepare("SELECT latitude, longitude From location_logs");



    if ($stmt->execute([])) {
        echo "<center>";
        echo "<h2>Welcome, " .  "</h2><br>";
        echo "<table style='border-radius: 25px; border: 2px solid black;' cellspacing=30>";
        echo "<tr><th>latitude</th><th>longitude</th></tr>";
        if ($keys = $stmt->fetch()) {
            echo "<tr>";
            foreach ($keys as $key) {
                echo "<td>" . $key . "</td>";
            }
            echo "</tr>\n";
        }
    }
    echo "</table></center>";

?>