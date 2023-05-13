<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kripto";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Retrieve the data from the table
$sql = "SELECT * FROM Eenhede";
$result = mysqli_query($conn, $sql);

// Display the data in an HTML table
echo "<table>";
echo "<tr><th>Datum_gekoop</th><th>gekry</th><th>uitwerk</th><th>Datum_gebruik</th><th>beskikbaar</th><th>gebruik</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["Datum_gekoop"]."</td><td>".$row["gekry"]."</td><td>".$row["uitwerk"]."</td><td>".$row["Datam_gebruik"]."</td><td>".$row["beskikbaar"]."</td><td>".$row["gebruik"]."</td></tr>";
}
echo "</table>";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input number from form
    $inputNumber = $_POST["inputNumber"];

    // Check if input is numeric
    if (is_numeric($inputNumber)) {
        // Get last row in table
        $result = mysqli_query($conn, "SELECT * FROM Eenhede ORDER BY Datum_gekoop DESC LIMIT 1");
        if (mysqli_num_rows($result) > 0) {
            $lastRow = mysqli_fetch_assoc($result);
            $lastBeskikbaat = $lastRow["beskikbaat"];
            $lastDatumGekoop = $lastRow["Datum_gekoop"];
        } else {
            $lastBeskikbaat = 0;
            $lastDatumGekoop = date("Y-m-d");
        }

        // Calculate values for new row
        $beskikbaat = $lastBeskikbaat + $inputNumber;
        $gebruik = $beskikbaat - $lastRow["uitwerk"];
        $datumGekoop = date("Y-m-d");
        $gekry = $inputNumber;
        $uitwerk = 0;

        // Insert new row into table
        $sql = "INSERT INTO Eenhede (Datam_gebruik, beskikbaat, gebruik, Datum_gekoop, gekry, uitwerk)
            VALUES (NOW(), $beskikbaat, $gebruik, '$datumGekoop', $gekry, $uitwerk)";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Invalid number.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Eenhede Table</title>
</head>
<body>
  <h1>Eenhede Table</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="inputNumber">Enter a number:</label>
    <input type="text" name="inputNumber">
    <input type="submit" value="Submit">
  </form>
</body>
</html>
